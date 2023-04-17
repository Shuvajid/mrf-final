<?php

namespace App\Http\Controllers;

use App\Models\Carousal;
use Illuminate\Http\Request;

class CarousalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousals= Carousal::all();
        return view ('carousal.carousal_list',compact('carousals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carousal.add_carousal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $carousal = new Carousal();
        if($request->has('image1')){
             $image = $request->file('image1');
             $name = time().uniqid().'.'.$image->extension();
             $image->move(public_path('images'),$name);
             $carousal->image1 = $name;
         }
         if($request->has('image2')){
             $image = $request->file('image2');
             $name = time().uniqid().'.'.$image->extension();
             $image->move(public_path('images'),$name);
             $carousal->image2 = $name;
         }
         if($request->has('image3')){
             $image = $request->file('image3');
             $name = time().uniqid().'.'.$image->extension();
             $image->move(public_path('images'),$name);
             $carousal->image3 = $name;
         }
        $carousal->save();

        return redirect(route('carousal.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousal  $carousal
     * @return \Illuminate\Http\Response
     */
    public function show(Carousal $carousal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousal  $carousal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousal = Carousal::find($id);

        return view('carousal.edit_carousal',compact('carousal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carousal  $carousal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $carousal = Carousal::find($id);

        if($request->has('image1')){
            $image = $request->file('image1');
            $name = time().uniqid().'.'.$image->extension();
            $image->move(public_path('images'),$name);
            $carousal->image1 = $name;
        }
        if($request->has('image2')){
            $image = $request->file('image2');
            $name = time().uniqid().'.'.$image->extension();
            $image->move(public_path('images'),$name);
            $carousal->image2 = $name;
        }
        if($request->has('image3')){
            $image = $request->file('image3');
            $name = time().uniqid().'.'.$image->extension();
            $image->move(public_path('images'),$name);
            $carousal->image3 = $name;
        }
        $carousal->save();

        return redirect(route('carousal.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousal  $carousal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carousal::destroy($id);
        return redirect(route('carousal.index'));
    }
}
