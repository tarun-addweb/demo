<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\date;


class datecontroller extends Controller
{
    public function dates(Request $request)
    {
        $from = $request->date1;
        $to = $request->date2;

        $Data =  date::whereBetween('created_at', [$from, $to])->orderBy('created_at')->get();
        
        // dd($Data);
        return view('date', compact('Data'));
    }

    public function date()
    {
        
        return view('date');
    }
}
