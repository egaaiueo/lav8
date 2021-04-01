<?php

namespace App\Http\Livewire;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function render()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrations');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $Form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $Form)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $Form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $Form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $Form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $Form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $Form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $Form)
    {
        //
    }
}
