<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Advertisement;
use App\Categories;
use App\User;
use DB;

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
         $ads =  Advertisement::orderBy('name','asc')->paginate(10);
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
            'body' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'max_dist' => 'required',
        ]);

        //Create advertisement
        $ad = new Advertisement;
        $ad->name = $request->input('name');
        $ad->service = $request->input('service');
        $ad->body = $request->input('body');
        $ad->user_id = auth()->user()->id;
        $ad->location = $request->input('location');
        $ad->phone = $request->input('phone');
        $ad->email = auth()->user()->email;
        $ad->max_dist = $request->input('max_dist');
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
        //$name = $ad::getUserName($id);
        return view('advertisements.show')->with('ad', $ad)->with('user',$user);
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
        return view('advertisements.edit')->with('ad', $ad)->with('categories', $categories)->with('service',$service);
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
            'body' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'max_dist' => 'required',
        ]);

        //Create advertisement
        $ad = Advertisement::find($id);
        $ad->name = $request->input('name');
        $ad->service = $request->input('service');
        $ad->body = $request->input('body');
        $ad->user_id = auth()->user()->id;
        $ad->location = $request->input('location');
        $ad->phone = $request->input('phone');
        $ad->email = auth()->user()->email;
        $ad->max_dist = $request->input('max_dist');
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
        $ad->delete();

        return redirect('/profile')->with('success', 'Ad Removed');
    }
}