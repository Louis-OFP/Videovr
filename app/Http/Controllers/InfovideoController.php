<?php

namespace App\Http\Controllers;

use App\Models\Infovideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\dd;


class InfovideoController extends Controller
{
    public function index()
    {
        $infovideo = Infovideo::all();
        return view('form', ['infosvideos' => $infovideo]);
    }

        public function destroy(Infovideo $infovideo)
    {
        $infovideo->delete();
        return redirect()->back();
        // dd($infovideo);
    }
        // public function create()
    // {

    // }
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
            'new_name' => ['required'],
            'date' => [''],
            'description' => ['required','max:550'],
            'user_name' => [''],
            'url' => [''],
            'weight' => [''],        
        ])->validate(); 

        Infovideo::create($request->all());

        session()->flash('flash.banner', 'Relation created');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('form.index');
    }

    public function update(Request $request, Infovideo $infovideo)
    {
        $validated=
        Validator::make($request->all(), [
            'name' => [''],
            'new_name' => ['required'],
            'date' => [''],
            'description' => ['required','max:550'],
            'user_name' => [''],
            'url' => [''],
            'weight' => [''],
        ])->validate();
  
       $infovideo->update($validated);
       return redirect()->route('form.index');
    }

    public function edit(Infovideo $infovideo)
{
    return view('form.index', compact('infovideo'));
}

    // public function update(Request $request,Theme $theme)
    // // request = données du formulaire
    // {
    //     $theme->name = $request->name;//le nom de la variable theme est égale au nom dans le formulaire
    //     $theme->url = $request->url;
    //     if($request->status == 'on') {   
    //         $theme->status = 1;
    //     }else{
    //         $theme->status = 0;
    //     }
    //     // récupère le nom dans la variable theme, utilise le model requête,get renvoie le name( renvoie une valeur à une variable donnée),
    //     $theme->update();
    //     return redirect()->route('themes.index');
    // }
    // public function edit(Infovideo $infovideo)
    // {
    //     return view('form.index', compact('infovideo'));
    // }
}


