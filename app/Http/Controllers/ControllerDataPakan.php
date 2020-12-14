<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerDataPakan extends Controller
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
        return view('farmer/homepagefarmer',['datapakan'=>$datapakan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farmer/tambahdataPakan');
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
            $umur='';
            $pakan='';
        $user=auth()->user();
        $messages = [
            'required' => 'Tidak Boleh Kosong!!',
        ];
        $this->validate($request,[
            'nama'=>'required',
            'umur'=>'required',
            'bobot'=>'required',
        ],$messages);

            function penakaran($um){
                if($um == 1){
                    $umur = "pakan : 14,5 gram/ekor/hari\nBerat badan optimal : 60-70 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 2)
                {
                    $umur = "pakan : 19 gram/ekor/hari\nBerat badan optimal : 120-130 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 3)
                {
                    $umur = "pakan : 24 gram/ekor/hari \nBerat badan optimal : 180-200 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 4)
                {
                    $umur = "pakan : 28 gram/ekor/hari \nBerat badan optimal : 260-270 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 5)
                {
                    $umur = "pakan : 35 gram/ekor/hari \nBerat badan optimal : 350-370 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 6)
                {
                    $umur = "pakan : 39 gram/ekor/hari \nBerat badan optimal : 450-470 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 7)
                {
                    $umur = "pakan : 42 gram/ekor/hari \nBerat badan optimal : 540-580 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 8)
                {
                    $umur = "pakan : 46 gram/ekor/hari \nBerat badan optimal : 650-690 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 9){
                    $umur = "pakan : 51 gram/ekor/hari\nBerat badan optimal : 780-800 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 10)
                {
                    $umur = "pakan : 54 gram/ekor/hari \nBerat badan optimal : 860-920 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 11)
                {
                    $umur = "pakan : 60 gram/ekor/hari \nBerat badan optimal : 960-1020 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 12)
                {
                    $umur = "pakan : 64 gram/ekor/hari \nBerat badan optimal : 1050-1110 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 13)
                {
                    $umur = "pakan : 69 gram/ekor/hari\nBerat badan optimal : 1130-1200 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 14)
                {
                    $umur = "pakan : 72 gram/ekor/hari\nBerat badan optimal : 1190-1270 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 15)
                {
                    $umur = "pakan : 74 gram/ekor/hari\nBerat badan optimal : 1260-1340 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 16)
                {
                    $umur = "pakan : 77 gram/ekor/hari \nBerat badan optimal : 1330-1410 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 17)
                {
                    $umur = "pakan : 80 gram/ekor/hari\nBerat badan optimal : 1400- 1480 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 18)
                {
                    $umur = "pakan : 85 gram/ekor/hari \nBerat badan optimal : 1470- 1570 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 19)
                {
                    $umur = "pakan : 88 gram/ekor/hari \nBerat badan optimal : 1570-1670 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 20)
                {
                    $umur = "pakan : 94 gram/ekor/hari \nBerat badan optimal : 1630-1730 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 21)
                {
                    $umur = "pakan : 98 gram/ekor/hari \nBerat badan optimal : 1670-1770 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 22)
                {
                    $umur = "pakan : 102 gram/ekor/hari \nBerat badan optimal : 1720-1820 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 23)
                {
                    $umur = "pakan : 106 gram/ekor/hari \nBerat badan optimal : 1750-1850 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 24)
                {
                    $umur = "pakan : 108 gram/ekor/hari \nBerat badan optimal : 1780-1900 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um == 25)
                {
                    $umur = "pakan : 109 gram/ekor/hari \nBerat badan optimal : 1790-1910 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um >= 26 && $um <= 30)
                {
                    $umur = "pakan : 110 gram/ekor/hari \nBerat badan optimal : 1820-1940 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um >= 31 && $um <= 44)
                {
                    $umur = "pakan : 111 gram/ekor/hari \nBerat badan optimal : 1860-1980 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um >= 45 && $um <= 50)
                {
                    $umur = "pakan : 110 gram/ekor/hari \nBerat badan optimal : 1890-2001 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um >= 51 && $um <= 90)
                {
                    $umur = "pakan : 109 gram/ekor/hari \nBerat badan optimal : 1900-2002 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                elseif ($um >= 91 && $um <= 100)
                {
                    $umur = "pakan : 102 gram/ekor/hari \nBerat badan optimal : 1920-2004 gram\njaga suhu kandang 32.5°C - 35°C.";
                }
                return $umur;
            }

            $ur=penakaran($request->umur);
            $user->datapakan()->create([
                'nama'=>$request->nama,
                'umurAyam'=>$request->umur,
                'bobot'=>$request->bobot,
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
        return view('farmer\ubahDataPakan',['detail'=>$detail]);
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
        ],$messages);
        try {
            $dp=$user->datapakan()->find($id);
            if($request->status == 1){
                $dp->status = 'berhasil';
            }
            elseif ($request->status == 2){
                $dp->status = 'gagal';
            }
                $dp->keterangan=$request->keterangan;
                $dp->updated_at=now();
                $dp->save();
                return redirect()->route('homepageFarmer')->with('pesan','sukses terubah');


//            dd($request);
            return redirect()->back()->with('pesan',$dp->status);
//                dd($request);
        }catch (QueryException $e){
            return redirect()->route('datapakan.edit',[$id])->withInput()->with('pesan',$e);
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
