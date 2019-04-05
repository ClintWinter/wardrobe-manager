<?php

namespace App\Http\Controllers;

use App\Garment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $garments = user()->garments();

        dd($garments);

        return view('garment.index', compact('garments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('garment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        Garment::create([
            'name' => request('name'),
            'color' => request('color'),
            'user_id' => Auth::id(),
        ]);

        return redirect('/garments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garment  $Garment
     * @return \Illuminate\Http\Response
     */
    public function show(Garment $Garment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garment  $Garment
     * @return \Illuminate\Http\Response
     */
    public function edit(Garment $Garment)
    {
        return view('garment.edit', compact('Garment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garment  $Garment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garment $Garment)
    {
        request()->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        $Garment->Name = request('name');
        $Garment->Color = request('color');
        $Garment->save();

        return redirect('/garments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garment  $Garment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garment $Garment)
    {
        $Garment->Deleted = true;
        $Garment->save();

        return redirect('/garments');
    }
}
