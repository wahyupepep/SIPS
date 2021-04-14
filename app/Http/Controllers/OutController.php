<?php

namespace App\Http\Controllers;

use App\Models\Out;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class OutController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outs = Out::get();
        return view('letters_out.index', compact('outs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('letters_out.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'perihal' => 'required',
            'ordner' => 'required',
            'hasil' => request('hasil') ? 'nullable|mimes:pdf' : '',
        ]);

        if ($request->hasFile('hasil')) {
            $file = $request->file('hasil');
            $imgName = time() . '-' . $request->hasil->getClientOriginalName();
            $store = $request->file('hasil')->storeAs('files/out', $imgName);

            Storage::disk('public')->put($imgName, $file);
        } else {
            $store = null;
        }

        $out = Out::create([
            'perihal' => $request->perihal,
            'ordner' => $request->ordner,
            'hasil' => $store,
        ]);
        // return $out;
        return redirect()->route('out')->with('success', 'Data Berhasil Ditambahkan!');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $out = Out::find($id);
        return view('letters_out.detail', compact('out'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $out = Out::findOrfail($id);
        return view('letters_out.edit', compact('out'));
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
        $out = Out::find($id);
        $imgName = $out->signature;

        $this->validate($request, [
            'perihal' => 'required',
            'ordner' => 'required',
            'hasil' => request('hasil') ? 'nullable|mimes:pdf' : '',
        ]);
        $hasil = null;
        if ($request->hasil) {
            $imgName = $request->file('hasil')->getClientOriginalName();
            Storage::delete($out->hasil);
            $hasil = $request->file('hasil')->storeAs('files/out', $imgName);
        } elseif ($out->hasil) {
            $hasil = $out->hasil;
        }

        $out->update([
            'perihal' => request('perihal'),
            'ordner' => request('ordner'),            
            'hasil' => $hasil,
        ]);
            // dd($imgName);
        return redirect()->route('out')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $out = Out::find($id);
        Storage::delete($out->signature);
        $out->delete();
        // dd($out);
        return redirect()->route('out')->with('success', 'Data berhasil dihapus!');
    }
}
