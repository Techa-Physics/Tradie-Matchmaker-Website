<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Advertisement;
use App\Review;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $ad =  Advertisement::find($id);
        return view('reviews.create')->with('ad',$ad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'ad_id' => 'required',
        ]);

        //Create advertisement
        $review = new Review;
        $review->name = $request->input('name');
        $review->rating = $request->input('rating');
        $review->description = $request->input('description');
        $review->ad_id = $request->input('ad_id');       
        $review->save();

        return redirect('/profile')->with('success', 'Review Created');
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
        return "ad $id";
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);

        if($review != null) {
            $review->delete();
            return back()->with("success", "Review Deleted");
        } else {
            return back()->with("error", "Review Not Found");
        }
    }
}
