<?php

namespace App\Http\Controllers;

use App\Garment;
use Illuminate\Http\Request;

class GarmentController extends Controller
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
    public function index()
    {
        $garments = Garment::all();

        return dd($garments);

        return view('garment.index', compact('garments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garment  $garment
     * @return \Illuminate\Http\Response
     */
    public function show(Garment $garment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garment  $garment
     * @return \Illuminate\Http\Response
     */
    public function edit(Garment $garment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garment  $garment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garment $garment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garment  $garment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garment $garment)
    {
        //
    }
}
