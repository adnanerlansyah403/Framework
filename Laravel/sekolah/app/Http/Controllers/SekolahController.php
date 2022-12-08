<?php

namespace App\Http\Controllers;

use App\Http\Requests\SekolahFormRequest;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::query()->orderBy('tingkatan', 'asc')->paginate(10);

        // dd($sekolah);
        return view('sekolah.index', compact('sekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SekolahFormRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        Sekolah::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'tingkatan' => $validated['tingkatan'],
            'alamat' => $validated['alamat'],
            'no_telp' => $validated['no_telp'],
            'nis' => $validated['nis'],
            'status' => $validated['status'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect()->back()->with('success', 'Successfully created a new school');
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
        $sekolah = Sekolah::query()
                    ->where('id', $id)
                    ->first();

        return view("sekolah.edit", compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SekolahFormRequest $request, $id)
    {
        $validated = $request->validated();
        // dd($validated);
        
        Sekolah::where('id', $id)->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'tingkatan' => $validated['tingkatan'],
            'alamat' => $validated['alamat'],
            'no_telp' => $validated['no_telp'],
            'nis' => $validated['nis'],
            'status' => $validated['status'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect()->back()->with('success', 'Successfully updated the school');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sekolah = Sekolah::where('id', $id)->first();
        $sekolah->delete();
        return redirect()->back()->with('success', 'Successfully deleted the school');
    }
}
