<?php

namespace App\Http\Controllers;

use App\Models\seller;
use Illuminate\Http\Request;

class sellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller= seller::all();
        return view('seller.seller',compact('seller'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seller = seller::create($request->all());
        $seller->save();
        return redirect()->route('seller.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $seller = seller::find($id);
        // return view('dashboard.jajan', compact)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_seller)
    {
        $seller = seller::find($id_seller);
        return view('seller.edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_seller)
    {
        // $seller = seller::find($id_seller);
        // $seller->update($request->all());
        // $seller->save();

        $seller = seller::find($id_seller);
        $seller->update($request->all());

        return redirect()->route('seller.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id_seller){

        $seller = seller::where('id_seller', $id_seller);
        $seller->delete();
        return redirect()->route('seller.index');
    }
}
