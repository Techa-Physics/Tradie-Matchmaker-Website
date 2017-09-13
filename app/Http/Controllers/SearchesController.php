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

class SearchesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    { 
        $search = Search::find($id);

        $ads =  Advertisement::where('service', '=', $search->service) //service
                    ->whereBetween('quote', [$search->quote_min, $search->quote_max])
                    ->paginate(10);
                    //->all();

        return view('searches.index')
                    ->with('ads', $ads)
                    ->with('search', $search);
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
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'service' => 'required',
           /* 'location' => 'required',
            'quote_min' => 'required',
            'quote_max' => 'required',
            'rating' => 'required',*/
        ]);

        //Create search
        $search = new Search;
        $search->service = $request->input('service');
        $search->location = $request->input('location');
        $search->quote_min = $request->input('quote_min');
        $search->quote_max = $request->input('quote_max');
        $search->rating = $request->input('rating');
        $search->user_id = auth()->user()->id;   
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
        $this->validate($request, [
            'service' => 'required',
            /*'location' => 'required',
            'quote_min' => 'required',
            'quote_max' => 'required',
            'rating' => 'required',*/
        ]);

        //Update search
        $search = Search::find($id);
        $search->service = $request->input('service');
        $search->location = $request->input('location');
        $search->quote_min = $request->input('quote_min');
        $search->quote_max = $request->input('quote_max');
        $search->rating = $request->input('rating');
        $search->user_id = auth()->user()->id;   
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
