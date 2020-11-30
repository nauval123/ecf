<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\DataPakan;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControllerArtikel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $artikel=Auth::user()->find([$user]);
        return view('admin\homepageAdmin',['artikel'=>$artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/buatArtikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=auth()->user();
        $messages = [
            'required' => 'Tidak Boleh Kosong!!',
        ];
        $this->validate($request,[
            'judul'=>'required',
            'konten'=>'required',
        ],$messages);
        try {
            $user->artikel()->create([
                'judul'=>$request->judul,
                'isi'=>$request->konten,
                'created_at'=>now()
            ]);
            return redirect()->route('homepageAdmin')->with('pesan','sukses tersimpan');
        }catch (QueryException $e){
            return redirect()->route('buatartikel')->withInput()->with('pesan','gagal disimpan,judul sudah ada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user();
        $detail=$user->artikel()->find($id);
        return view('admin\detailArtikel',['detail'=>$detail]);
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
        $user=auth()->user();
        $messages = [
            'required' => 'Tidak Boleh Kosong!!',
        ];
        $this->validate($request,[
            'judul'=>'required',
            'konten'=>'required',
            'updated_at'=>now()
        ],$messages);

        try {
            $user->artikel()->find($id)->update([
                'judul'=>$request->judul,
                'isi'=>$request->konten,
                'updated_at'=>now()
            ]);
//            $artikel=$user->artikel()->find($id);
//            $artikel->judul= $request->judul;
//            $artikel->isi= $request->konten;
//            $artikel->updated_at=now();
            return redirect()->route('homepageAdmin')->with('pesan','sukses terubah');
        }catch (QueryException $e){
            return redirect()->route('editartikel')->withInput()->with('pesan','gagal diubah');
        }catch (Exception $e){
            return redirect()->route('editartikel',['detail'=>$request])->withInput()->with('pesan','gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user=auth()->user();
            $artikel=$user->artikel()->find($id);
            $artikel->delete();
            return redirect()->route('homepageAdmin')->with('pesan','sukses terhapus');
        }
        catch (QueryException $e){
            return redirect()->route('editartikel')->withInput()->with('pesan','gagal dihapus');
        }
    }

    public function showartikel(){
        if(Auth::user() != null){
            $artikel=Artikel::paginate(10);
            return view('farmer/lihatArtikel',['artikel'=>$artikel]);
        }
        else{
            $artikel=Artikel::paginate(10);
            $datapakan=DataPakan::where('status','berhasil')->paginate(10);
            return view('series/artikel',['artikel'=>$artikel,'datapakan'=>$datapakan]);
        }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detailartikel($id){
        if(Auth::user()){
            $artikel=Artikel::find($id);
            return view('farmer/detailArtikel',['artikel'=>$artikel]);
        }
        else{
            $artikel=Artikel::find($id);
            return view('series/detailArtikel',['artikel'=>$artikel]);
        }
    }


}
