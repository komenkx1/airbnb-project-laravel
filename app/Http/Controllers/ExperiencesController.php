<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
        'today' => DB::table('experiences')->where('time', 'Today')->get(),
        'tomorrow' => DB::table('experiences')->where('time', 'Tomorrow')->get(),
        'weekend' => DB::table('experiences')->where('time', 'Weekend')->get(),
        'weekday' => DB::table('experiences')->where('time', 'Weekday')->get(),
        'monday' => DB::table('experiences')->where('time', 'Monday')->get(),
        'airbnb' => DB::table('experiences')->where('time', 'Airbnb')->get(),
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
         return DB::table('experiences')
            ->join('experiences_detail', 'experiences.id', '=', 'experiences_detail.experiences_id')
            ->where('experiences.id', $id)
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
