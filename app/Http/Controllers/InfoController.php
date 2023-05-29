<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Http\Requests\StoreInfoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\UpdateInfoRequest;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::find(Auth::user()->id);
        // dd($users->id);
        return view('info.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $premiere = new Info;
        return view('info.create', compact('premiere'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'cover' => 'required|image|max:2048'
        // ]);
        // $path = $request->file('cover')->store('covers');
        $images = $request->file('cover')->store('public/covers');
        $url = Storage::url($images);

        $premiere = Info::create([
            'title' => $request->title, 
            'description' => $request->description,
            'url' => $request->url,
            'user_id' => Auth::user()->id,
            'cover' => $url
        ]);

        // return  $path;
        return redirect()->route('premieres');
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
    public function show_premieres(Info $info)
    {
        $premieres = Info::where('user_id', Auth::user()->id)->get();
        // dd(Auth::user()->id);
        return view('info.show', compact('premieres'));
    }
    // public function show(Info $info)
    // {
    //     $premieres = Info::where('user_id', Auth::user()->id)->get();
    //     // dd(Auth::user()->id);
    //     return view('info.show', compact('premieres'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $premiere = Info::findOrFail($id);
        return view('info.edit', compact('premiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        
        $premiere = Info::findOrFail($id);
        $premiere->fill($request->all());

        if($request->cover){
            $images = $request->file('cover')->store('public/covers');
            $url = Storage::url($images);
            $premiere->update(['cover' => $url]);
        }

        if($premiere->save()){
            return redirect()->route('premieres');
        }else{
            return redirect()->route('info.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Info::destroy($id);
        return redirect()->route('premieres');
    }
}
