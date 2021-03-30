<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letters = Letter::simplePaginate(10);
        return view('letters.index', ['letters' => $letters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('letters.create');
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
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'asal' => 'required',
            'perselisihan' => 'required',
            'isi' => 'required',
            'image' => request('image') ? 'nullable|mimes:pdf,jpg,jpeg' : '',
        ]);

        $user = Auth::user()->id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imgName = time() . '-' . $request->image->getClientOriginalName();
            $store = $request->file('image')->storeAs('files/letter', $imgName);
            // $imgName=$this->username.$this->uploadDir.$file->getClientOriginalName();

            Storage::disk('public')->put($imgName, $file);
        } else {
            $store = null;
        }

        Letter::create([
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'asal' => $request->asal,
            'perselisihan' => $request->perselisihan,
            'isi' => $request->isi,
            'image' => $store,
            'users_id' => $user
        ]);

        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect('letter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $letter = Letter::find($id);
        return view('letters.detail', compact('letter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $letter = Letter::findOrfail($id);
        return view('letters.edit', compact('letter'));
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
        $letter = Letter::find($id);
        $imgName = $letter->signature;

        $this->validate($request, [
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'asal' => 'required',
            'perselisihan' => 'required',
            'isi' => 'required',
            'image' => request('image') ? 'nullable|mimes:pdf,jpg,jpeg' : '',
        ]);
        if ($request->image) {
            $imgName = $request->file('image')->getClientOriginalName();
            Storage::delete($letter->image);
            $image = $request->file('image')->storeAs('files/letter', $imgName);
        } elseif ($letter->image) {
            $upload = $letter->image;
        } else {
            $letter = null;
        }

        $letter->update([
            'no_surat' => request('no_surat'),
            'tgl_surat' => request('tgl_surat'),
            'asal' => request('asal'),
            'perselisihan' => request('perselisihan'),
            'isi' => request('isi'),
            'image' => $image,
        ]);
            // dd($imgName);
        return redirect()->route('letter')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $letter = Letter::find($id);
        Storage::delete($letter->signature);
        $letter->delete();
        // dd($letter);
        return redirect()->route('letter')->with('delete', 'File berhasil dihapus!');
    }
}
