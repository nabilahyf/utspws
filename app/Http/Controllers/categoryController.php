<?php

namespace App\Http\Controllers;
use App\ModelKategori;
use App\ModelBuku;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
    $data = ModelKategori::all();
    return response($data);
  }

  public function show($id){
    $data = ModelKategori::where('id',$id)->get();
    return response ($data);
  }

  public function store(Request $request){
    $data = new ModelKategori();
    $data->name = $request->input('name');
    //$data->alamat = $request->input('alamat');
    //$data->email = $request->input('email');
    //$data->jenjang = $request->input('jenjang');
    //$data->notelp = $request->input('notelp');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function update(Request $request, $id){
    $data = ModelKategori::where('id',$id)->first();
    $data->name = $request->input('name');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroy($id){
    $data = ModelKategori::where('id',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
  
  
  
  public function buku(){
    $data = ModelBuku::all();
    return response($data);
  }

  public function showbuku($id){
    $data = ModelBuku::where('id_book',$id)->get();
    return response ($data);
  }

  public function storebuku(Request $request){
    $data = new ModelBuku();
    $data->judul = $request->input('judul');
    $data->pengarang = $request->input('pengarang');
    $data->id_book = $request->input('id_book');
    $data->save();

    return response('Berhasil Tambah Data');
  }
  
  public function updatebuku(Request $request, $id){
    $data = ModelBuku::where('id_book',$id)->first();
	$data->judul = $request->input('judul');
    $data->pengarang = $request->input('pengarang');
    $data->save();

    return response('Berhasil Merubah Data');
  }

  public function destroybuku($id){
    $data = ModelBuku::where('id_book',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
  }
}
