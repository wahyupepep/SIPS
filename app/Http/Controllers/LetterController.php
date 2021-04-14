<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\Progress;
use App\Models\User;
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
        $letters = Letter::with('progresses')->simplePaginate(10);
        $user = auth()->id();
        // dd($user);
        $surat = Letter::where('user_id', $user)->get();
        return view('letters.index', compact('surat'));
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
            'tgl_terima' => 'required',
            'asal' => 'required',
            'seksi' => 'required',
            'keterangan' => 'required',
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

        $letter = Letter::create([
            'no_surat' => $request->no_surat,
            'tgl_surat' => $request->tgl_surat,
            'tgl_terima' => $request->tgl_terima,
            'asal' => $request->asal,
            'seksi' => $request->seksi,
            'keterangan' => $request->keterangan,
            'isi' => $request->isi,
            'image' => $store,
            'user_id' => $user
        ]);

        Progress::create([
            'letter_id' => $letter->id
        ]);

        return redirect()->route('letter')->with('success', 'Data Berhasil Ditambahkan!');

        // session()->flash('success', 'Data Berhasil Ditambahkan');
        // return redirect('letter');
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
            'tgl_terima' => 'required',
            'asal' => 'required',
            'seksi' => 'required',
            'keterangan' => 'required',
            'isi' => 'required',
            'image' => request('image') ? 'nullable|mimes:pdf,jpg,jpeg' : '',
        ]);
        $image = null;
        if ($request->image) {
            $imgName = $request->file('image')->getClientOriginalName();
            Storage::delete($letter->image);
            $image = $request->file('image')->storeAs('files/letter', $imgName);
        } elseif ($letter->image) {
            $image = $letter->image;
        }

        $letter->update([
            'no_surat' => request('no_surat'),
            'tgl_surat' => request('tgl_surat'),
            'tgl_terima' => request('tgl_terima'),
            'asal' => request('asal'),
            'seksi' => request('seksi'),
            'keterangan' => request('keterangan'),
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
        return redirect()->route('letter')->with('success', 'Data berhasil dihapus!');
    }

    public function search(Request $request)
    {
        $key = $request->keyword;
        $letters = Letter::join('users','letters.user_id','=','users.id')->select('letters.*','users.name')->where('letters.no_surat', 'like' ,"%{$key}%")->orWhere('isi', 'like' ,"%{$key}%")->get();
        // $letters = Letter::when($request->keyword, function ($query) use ($request) {
        //     $query->where('no_surat', 'like', "%{$request->keyword}%")
        //         ->orWhere('asal', 'like', "%{$request->keyword}%");
        // })->get();
        return view('tracks.index', compact('letters'));
    }

    public function detail($id)
    {
        $letter = Letter::find($id);
        return view('tracks.detail', compact('letter'));
    }    

    public function addStatus($id)
    {
        $letter = Letter::find($id);
        $progresses = new Progress();
        return view('letters.addStatus', [
            'id'=>$id,
            'status'=>$progresses->status[sizeof($letter->progresses)]
        ]);
    }
}
