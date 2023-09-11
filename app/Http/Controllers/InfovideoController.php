<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfovideoController extends Controller
{
    public function index()
    {
        $infosvideos = Infovideo::all();
        return view('form', ['infosvideos' => $infosvideos]);
    }

    public function destroy(Infovideo $infosvideos)
    {
        $infosvideos->delete();
        return redirect()->route('form.index'); // Redirection vers la liste des éléments après suppression.
    }
}
