<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataPakanController extends Controller
{
    private $umur;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $datapakan=Auth::user()->find([$user]);
//        dd($datapakan);
        return view('farmer/homepagefarmer',['datapakan'=>$datapakan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farmer/tambahDataPakan');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        try {
        $user=auth()->user();
        $messages = [
            'required' => 'Tidak Boleh Kosong!!',
        ];
        $this->validate($request,[
            'nama'=>'required',
            'umur'=>'required',
//            'bobot'=>'required',
        ],$messages);

//            function penakaran($um,$jumlah){
//                if($um == 1){
//                    $berat = 14.5*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 60-70 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 2)
//                {
//                    $berat = 19*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 120-130 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 3)
//                {
//                    $berat = 24*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 180-200 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 4)
//                {
//                    $berat = 28*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 260-270 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 5)
//                {
//                    $berat = 35*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 350-370 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 6)
//                {
//                    $berat = 39*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 450-470 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 7)
//                {
//                    $berat = 42*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 540-580 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 8)
//                {
//                    $berat = 46*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 650-690 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 9){
//                    $berat = 51*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 780-800 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 10)
//                {
//                    $berat = 54*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 860-920 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 11)
//                {
//                    $berat = 60*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 960-1020 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 12)
//                {
//                    $berat = 64*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1050-1110 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 13)
//                {
//                    $berat = 69*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1130-1200 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 14)
//                {
//                    $berat = 72*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1190-1270 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 15)
//                {
//                    $berat = 74*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1260-1340 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 16)
//                {
//                    $berat = 77*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1330-1410 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 17)
//                {
//                    $berat = 80*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1400- 1480 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 18)
//                {
//                    $berat = 85*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1470- 1570 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 19)
//                {
//                    $berat = 88*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1570-1670 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 20)
//                {
//                    $berat = 94*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1630-1730 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 21)
//                {
//                    $berat = 98*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1670-1770 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 22)
//                {
//                    $berat = 102*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1720-1820 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 23)
//                {
//                    $berat = 106*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1750-1850 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 24)
//                {
//                    $berat = 108*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1780-1900 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um == 25)
//                {
//                    $berat = 109*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1790-1910 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um >= 26 && $um <= 30)
//                {
//                    $berat = 110*$jumlah ;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1820-1940 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um >= 31 && $um <= 44)
//                {
//                    $berat = 111*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1860-1980 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um >= 45 && $um <= 50)
//                {
//                    $berat = 110*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1890-2001 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um >= 51 && $um <= 90)
//                {
//                    $berat = 109*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1900-2002 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                elseif ($um >= 91 && $um <= 100)
//                {
//                    $berat = 102*$jumlah;
//                    $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1920-2004 gram\njaga suhu kandang 32.5°C - 35°C.";
//                }
//                return $umur;
//            }

            $ur=$this->penakaran($request->umur,$request->jumlah);
            $user->datapakan()->create([
                'nama'=>$request->nama,
                'umurAyam'=>$request->umur,
//                'jumlah'=>$request->jumlah,
                'detail'=> $ur,
                'created_at'=>now(),
            ]);
            return redirect()->route('homepageFarmer')->with('pesan','sukses tersimpan');
        }catch (QueryException $e){
            return redirect()->route('datapakan.create')->withInput()->with('pesan',$e);
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
        $user = auth()->user();
        $detail=$user->datapakan()->find($id);
        $detail2=explode("\n",$detail->detail);
        $detail3=$detail2[0];
        $detail4=$detail2[1];
        $detail5=$detail2[2];
//        dd($detail5);
        return view('farmer\ubahDataPakan',['detail'=>$detail,'hasilpakan'=>$detail3,'hasilberat'=>$detail4,"suhu"=>$detail5]);
    }

    public function penakaran($um,$jumlah){
        if($um == 1){
            $berat = 14.5*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 60-70 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 2)
        {
            $berat = 19*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 120-130 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 3)
        {
            $berat = 24*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 180-200 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 4)
        {
            $berat = 28*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 260-270 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 5)
        {
            $berat = 35*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 350-370 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 6)
        {
            $berat = 39*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 450-470 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 7)
        {
            $berat = 42*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 540-580 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 8)
        {
            $berat = 46*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 650-690 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 9){
            $berat = 51*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 780-800 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 10)
        {
            $berat = 54*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 860-920 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 11)
        {
            $berat = 60*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 960-1020 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 12)
        {
            $berat = 64*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1050-1110 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 13)
        {
            $berat = 69*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1130-1200 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 14)
        {
            $berat = 72*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1190-1270 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 15)
        {
            $berat = 74*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1260-1340 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 16)
        {
            $berat = 77*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1330-1410 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 17)
        {
            $berat = 80*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1400- 1480 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 18)
        {
            $berat = 85*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1470- 1570 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 19)
        {
            $berat = 88*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1570-1670 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 20)
        {
            $berat = 94*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1630-1730 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 21)
        {
            $berat = 98*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1670-1770 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 22)
        {
            $berat = 102*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1720-1820 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 23)
        {
            $berat = 106*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1750-1850 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 24)
        {
            $berat = 108*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1780-1900 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um == 25)
        {
            $berat = 109*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1790-1910 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um >= 26 && $um <= 30)
        {
            $berat = 110*$jumlah ;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1820-1940 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um >= 31 && $um <= 44)
        {
            $berat = 111*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1860-1980 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um >= 45 && $um <= 50)
        {
            $berat = 110*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1890-2001 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um >= 51 && $um <= 90)
        {
            $berat = 109*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1900-2002 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        elseif ($um >= 91 && $um <= 100)
        {
            $berat = 102*$jumlah;
            $umur = "hasil penakaran:".$berat."gram/jumlah ayam\nBerat badan optimal : 1920-2004 gram\njaga suhu kandang 32.5°C - 35°C.";
        }
        return $umur;
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
//        dd($request);
        $user=auth()->user();
        $messages = [
            'required' => 'Tidak Boleh Kosong!!',
        ];
        $this->validate($request,[
            'status'=>'required',
            'jumlah'=>'required',
        ],$messages);
        try {
            $dp=$user->datapakan()->find($id);
            $ur=$this->penakaran($request->umur,$request->jumlah);
            if($request->status == 1){
                $dp->status = 'berhasil';
            }
            elseif ($request->status == 2){
                $dp->status = 'gagal';
            }
                $dp->detail=$ur;
                $dp->keterangan=$request->keterangan;
                $dp->jumlah=$request->jumlah;
                $dp->updated_at=now();
                $dp->save();
                return redirect()->route('homepageFarmer')->with('pesan','sukses terubah');


//            dd($request);
            return redirect()->back()->with('pesan',$dp->status);
//                dd($request);
        }catch (QueryException $e){
            return redirect()->route('datapakan.edit',[$id])->withInput()->with('pesan','gagal tersimpan');
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
            $datapakan=$user->datapakan()->find($id);
            $datapakan->delete();
            return redirect()->route('homepageFarmer')->with('pesan','sukses terhapus');
        }
        catch (QueryException $e){
            return redirect()->route('datapakan.edit.',[$id])->withInput()->with('pesan','gagal dihapus');
        }
    }
}
