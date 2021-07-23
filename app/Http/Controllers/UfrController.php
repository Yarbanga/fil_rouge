<?php

namespace App\Http\Controllers;
use App\Ufr;
use Illuminate\Http\Request;

class UfrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Ajout_ufr');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_note()
    {
       return view('note');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ufr_store(Request $request)
    {
        $data=request()->validate([
            'ufr'=>['required','string','max:20'],
        ]);
        Ufr::create([
            'ufr'=>$data['ufr'],
        ]);
        return redirect()->route('message_ufr');
    }
    public function show_ufr($ufr){
        $ufrs=Ufr::all();
        //$ufrs=Ufr::where('id', '=', $ufr)->get();
        
        return view('ufrliste', compact('ufrs' ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ufr  $ufr
     * @return \Illuminate\Http\Response
     */
    public function show(Ufr $ufr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ufr  $ufr
     * @return \Illuminate\Http\Response
     */
    public function edit(Ufr $ufr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ufr  $ufr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ufr $ufr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ufr  $ufr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ufr $ufr)
    {
        //
    }
}
