<?php

namespace App\Http\Livewire;
namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function render()
    {
        $this->Forms = Form::orderBy('created_at', 'DESC')->get(); //MEMBUAT QUERY UNTUK MENGAMBIL DATA
        return view('dashboard'); //LOAD VIEW MEMBERS.BLADE.PHP YG ADA DI DALAM FOLDER /RESOURSCES/VIEWS/LIVEWIRE
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'np' => 'required',
            'asal' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'nomt' => 'required',
            'nohpt' => 'required',
            'jk' => 'required',
            'agm' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'nohp' => 'required',

            
        ]);
    
        Form::create($request->all());
     
        return redirect()->route('forms.index')
                        ->with('setelah',' Setelah melakukan pendaftaran tim kami akan segara mengubungi nomor telepon yang sudah didaftarkan. Pastikan nomor anda aktif, untuk proses pembayaran biaya seleksi dapat dibayar langsung ke sekolah di alamat ini atau melalui transfer ke rekening Bank BNI 082 00 83 086 atas nama SMK Wikrama  kemudian kirimkan bukti transfer melalui whatsapp di nomor 089-535-653-1211 (Widya Rahmawati).');
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
