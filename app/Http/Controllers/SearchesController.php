<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Search;
use App\Advertisement;
use DB;
use App\Review;

// Illuminate\Support\Facades\...
use Auth, Validator, Input;

class SearchesController extends Controller
{
    private $searchRules;

    public function __construct()
    {
        // $this->middleware('auth');

        // Only service type is required to search with
        $this->searchRules = array(
            'service' => 'required',
            'town' => 'required',
            'postcode' => 'required'//,
            // 'quote_min' => 'required_without_all:service,location,quote_max,rating',
            // 'quote_max' => 'required_without_all:service,location,quote_max,rating',
            // 'rating' => 'required_without_all:service,location,quote_min,quote_max,rating',
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    { 
        //Finds current search form
        $search = Search::find($id);
        
        // gets all ads filtered by service type and quote
        $ads =  Advertisement::where('service', '=', $search->service) //service
                    ->whereBetween('quote', [$search->quote_min, $search->quote_max])
                    ->paginate(10);

        $count = 0;
        foreach($ads as $ad)
        {
            // Fitlers out ads that are out of range
            $distance = $search->getDistance($ad->latitude, $ad->longitude, $search->latitude, $search->longitude);
            if($distance < $ad->max_dist)
            {
                $count ++;
            } 
        }

        // get all reviews
        $reviews = Review::orderBy('id','asc')->get();

        return view('searches.index')
                    ->with('ads', $ads)
                    ->with('search', $search)
                    ->with('count', $count)
                    ->with('reviews', $reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $max = Advertisement::orderBy('quote', 'dsc')->first();
        $min = Advertisement::orderBy('quote', 'asc')->first();
        $searches = Search::where('user_id','=',auth()->user()->id)->get();
        $categories = Advertisement::orderBy('service','asc')->lists('service','service')->all();
        return view('searches.create')
                    ->with('categories',$categories)
                    ->with('searches', $searches)
                    ->with('max', $max)
                    ->with('min', $min);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * https://stackoverflow.com/questions/23401365/laravel-at-least-one-field-required-validation
     */
    public function store(Request $request)
    {

        $this->validate($request, $this->searchRules);

        $town = $request->input('town');
        $postcode = $request->input('postcode');

        $address = "$town $postcode, Australia"; 
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        
        $output= json_decode($geocode);
        
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;

        //Create search
        $search = new Search;
        $search->service = $request->input('service');
        $search->town = $request->input('town');
        $search->postcode = $request->input('postcode');
        $search->quote_min = $request->input('quote_min');
        $search->quote_max = $request->input('quote_max');
        $search->rating = $request->input('rating');
        // Since searches are serverside, we will use id of 0 to store guest searches
        $search->user_id = Auth::user() ? auth()->user()->id : 0;   
        $search->latitude = $lat;
        $search->longitude = $long;
        $search->save();

        $last = Search::orderBy('created_at', 'desc')->first();
        $id = $last->id;
        return redirect("/searches/$id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Advertisement::orderBy('service','asc')->lists('service','service')->all();
        $search = Search::find($id);
        //$service = Categories::where('category','=',$search->service)->first();
        return view('searches.edit')->with('search', $search)->with('categories', $categories);//->with('service',$service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, $this->searchRules);

        $town = $request->input('town');
        $postcode = $request->input('postcode');

        $address = "$town $postcode, Australia"; 
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        
        $output= json_decode($geocode);
        
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;

        //Update search
        $search = Search::find($id);
        $search->service = $request->input('service');
        $search->town = $request->input('town');
        $search->postcode = $request->input('postcode');
        $search->quote_min = $request->input('quote_min');
        $search->quote_max = $request->input('quote_max');
        $search->rating = $request->input('rating');
        $search->user_id = Auth::user() ? auth()->user()->id : 0;   
        $search->latitude = $lat;
        $search->longitude = $long;
        $search->save();

        return redirect("/searches/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $search = Search::find($id);
        $search->delete();
        return redirect('/profile')->with('success', 'Search Deleted');
    }
}
