<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Covid;
use Pagination\Paginator;
use Storage;
use Image;
use RealRashid\SweetAlert\Facades\Alert;

class CovidController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $data = Covid::orderBy('created_at','DESC')->paginate(10);
        return view('covid.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('covid.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = new Covid();
        $data->kecamatan = $request->kecamatan;
        $data->warna = $request->warna;
        $data->zona = $request->zona;
        $data->kasus = $request->kasus;
        
        $data->upload = $request->upload;

        if($request->hasFile('featured_image')){
            $photo = time() . '.' . $request->file('featured_image')->getClientOriginalExtension();
            $destination = base_path().'/public/giscovid';
            $request->file('featured_image')->move($destination,$photo);
        
        $data['upload'] = $photo;
        }

        $data->save();
        toast('Your Data as been submited!','success');
        return redirect()->route('gis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Covid::findOrFail($id);
        return view('covid.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Covid::findOrFail($id);
        $data->zona = $request->zona;
        $data->save();
        toast('Your Data as been updated!','success');
        return redirect()->route('gis.index');
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
}
