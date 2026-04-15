<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
        'spa' => DB::table('services')->where('type', 'spa')->get(),
        'photography' => DB::table('services')->where('type', 'photography')->get(),
        'chef' => DB::table('services')->where('type', 'chef')->get(),
        'sport' => DB::table('services')->where('type', 'sport')->get(),
        'makeup' => DB::table('services')->where('type', 'makeup')->get(),
        'hair' => DB::table('services')->where('type', 'hair')->get(),
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
        return DB::table('services')
            ->join('services_detail', 'services.id', '=', 'services_detail.services_id')
            ->where('services.id', $id)
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
