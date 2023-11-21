<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataSiswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = dataSiswa::orderBy('created_at', 'desc')->get();
        return view('components.table', ['post' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // @dd($request->all());
        $rules = [
            'name' => ['string', 'required'],
            'age' => ['integer', 'required'],
            'class' => ['integer', 'required'],
        ];
        $validate = $request->validate($rules);
        dataSiswa::create($validate);

        // return redirect(route('index'))->with('success', 'Data has been created');
        return redirect('/')->with('success', 'Data has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        return view('pages.edit', ['data' => dataSiswa::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => ['string'],
            'age' => ['integer'],
            'class' => ['integer'],
        ];

        $validation = $request->validate($rules);
        dataSiswa::find($id)->update($validation);

        return redirect('/')->with('success', 'Data has been updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = dataSiswa::findOrFail($id);
        $data->delete();
        // return redirect(route('index'))->with('sucess', 'Data has been deleted');
        return redirect('/')->with('sucess', 'Data has been deleted');
    }
}
