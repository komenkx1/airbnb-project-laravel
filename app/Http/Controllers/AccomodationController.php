<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AccomodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request  $request)
    {
        return [
        'jakarta' => DB::table('accomodation')->where('city', 'Jakarta')->get(),
        'ubud' => DB::table('accomodation')->where('city', 'Ubud')->get(),
        'tokyo' => DB::table('accomodation')->where('city', 'Tokyo')->get(),
        'kuala_lumpur' => DB::table('accomodation')->where('city', 'Kuala Lumpur')->get(),
        'bangkok' => DB::table('accomodation')->where('city', 'Bangkok')->get(),
    ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DB::table('accomodation')
            ->join('accomodation_detail', 'accomodation.id', '=', 'accomodation_detail.accomodation_id')
            ->where('accomodation.id', $id)
            ->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
