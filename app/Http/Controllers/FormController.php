<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Infovideo; 
use Illuminate\Support\Facades\DB;

class FormController extends Controller
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
        
    }



}
