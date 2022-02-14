<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KalkulatorModel;
use Illuminate\Routing\Controller;

class KalkulatorController extends Controller
{
    public function store(Request $request)
    {
        $calc = $request->all();
        KalkulatorModel::setCalc($calc);
        
        return redirect('/')->with('hasil', KalkulatorModel::getHasil());
    }
}
