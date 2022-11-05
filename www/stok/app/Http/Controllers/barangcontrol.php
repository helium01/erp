<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class barangcontrol extends Controller
{
    //
    public function index(){
        // $id=2;
        $data=HTTP::GET("localhost:8000/api/barang");
        // dd($data);
        $data1=json_decode($data,TRUE);
        $data=($data1['data']);
        // dd($data);
        return view('barang',compact('data'));
    }

    public function edit($id){
        $data=HTTP::GET("localhost:8000/api/barang/$id");
        $data1=json_decode($data,TRUE);
        $data=($data1['data']);
        $data_tanah=HTTP::GET("localhost:8000/api/tanah");
        $data_tanah1=json_decode($data_tanah,TRUE);
        $data_tanah=($data_tanah1['data']);
        return view('edit.barang',compact('data','data_tanah'));
    }

    public function post(Request $request, $id){
        $masuk['id_pedagang']=$request->id_pedagang;
            $masuk['jumlah_barang']=$request->jumlah_barang;
            $masuk['tanggal_barang']=$request->tanggal_barang;
            $masuk['id_tanah']=$request->id_tanah;

        $respons=http::post("localhost:8000/api/barang/$id",$masuk);
        // dd($a);
        return $respons;
    }
}
