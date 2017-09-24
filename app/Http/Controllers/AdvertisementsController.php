<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Advertisement;
use App\Categories;
use App\User;
use App\Review;
use DB;
use Auth;

class AdvertisementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $ads =  Advertisement::orderBy('service','asc')->paginate(10);
        return view('advertisements.index')->with('ads', $ads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categories::lists('category', 'category')->all();
        return view('advertisements.create') ->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'service' => 'required',
            'quote' => 'required',
            'body' => 'required',
            'town' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'max_dist' => 'required',
        ]);
        
        $town = $request->input('town');
        $postcode = $request->input('postcode');

        $address = "$town $postcode, Australia"; 
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        
        $output= json_decode($geocode);
        
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;

        //Create advertisement
        $ad = new Advertisement;
        $ad->name = $request->input('name');
        $ad->service = $request->input('service');
        $ad->quote = $request->input('quote');
        $ad->body = $request->input('body');
        $ad->user_id = auth()->user()->id;
        $ad->town = $request->input('town');
        $ad->postcode = $request->input('postcode');
        $ad->phone = $request->input('phone');
        $ad->email = auth()->user()->email;
        $ad->max_dist = $request->input('max_dist');
        $ad->latitude = $lat;
        $ad->longitude = $long;
        $ad->save();

        return redirect('/profile')->with('success', 'Advertisement Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad =  Advertisement::find($id); 
        $user = User::find($ad->user_id);  
        
        $review = Review::where('ad_id','=',$ad->id)
                    ->get(); 

        $rating = Review::where('ad_id',$ad->id)
                    ->avg('rating');

        
       // return $address;
        return view('advertisements.show')
                    ->with('ad', $ad)
                    ->with('user',$user)
                    ->with('review',$review)
                    ->with('rating',$rating);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $categories = Categories::lists('category','category')->all();
        $ad = Advertisement::find($id);
        $service = Categories::where('category','=',$ad->service)->first();
        return view('advertisements.edit')
                    ->with('ad', $ad)
                    ->with('categories', $categories)
                    ->with('service',$service);
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
        $this->validate($request, [
            'name' => 'required',
            'service' => 'required',
            'quote' => 'required',
            'body' => 'required',
            'town' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'max_dist' => 'required',
        ]);

        $town = $request->input('town');
        $postcode = $request->input('postcode');

        $address = "$town $postcode, Australia"; 
        $prepAddr = str_replace(' ','+',$address);
        $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        
        $output= json_decode($geocode);
        
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;

        //Create advertisement
        $ad = Advertisement::find($id);
        $ad->name = $request->input('name');
        $ad->service = $request->input('service');
        $ad->quote = $request->input('quote');
        $ad->body = $request->input('body');
        $ad->user_id = auth()->user()->id;
        $ad->town = $request->input('town');
        $ad->postcode = $request->input('postcode');
        $ad->phone = $request->input('phone');
        $ad->email = auth()->user()->email;
        $ad->max_dist = $request->input('max_dist');
        $ad->latitude = $lat;
        $ad->longitude = $long;
        $ad->save();

        return redirect('/profile')->with('success', 'Advertisement Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Advertisement::find($id);

        if($ad != null) {
            $ad->delete();
            if (Auth::user()->hasRole("Business")) {
                return redirect('/profile')->with('success', 'Advertisement Deleted');
            } else {
                return redirect('/advertisements')->with('success', 'Advertisement Deleted');
            }
        } else {
            if (Auth::user()->hasRole("Business")) {
                return redirect('/profile')->with('error', 'Advertisement Not Found');
            } else {
                return redirect('/advertisements')->with('error', 'Advertisement Not Found');
            }
        }
    }
}