<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Http\Requests\StoreInfoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UpdateInfoRequest;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('info.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lanzamiento = new Info;
        return view('info.form', compact('lanzamiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lanzamineto = Info::create([
            'title' => $request->title, 
            'description' => $request->description,
            'url' => $request->url,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->back();
        // $lanzamiento->fill($request->all());

        // if($lanzamiento->save()){
        //     return redirect()->route('info.index');
        // }else{
        //     return redirect()->route('welcome');
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInfoRequest $request, Info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Info $info)
    {
        //
    }
}
