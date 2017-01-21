<?php

namespace App\Http\Controllers;

use App\Models\Waste;

class StatisticController extends Controller
{
    public function index()
    {
        $wastes = Waste::query()->get()->all();

        if(empty($wastes)) {
            throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
        }

        return view('wastes', ['wastes' => $wastes]);
    }

    public function show($id)
    {
        $waste = Waste::findOrFail($id);

        return view('waste', ['waste' => $waste]);
    }

    public function date($year, $month)
    {
        $wastes = Waste::whereYear('created_at', '=', $year)
                        ->whereMonth('created_at', '=', $month)
                        ->get();
        
        return view('wastes', ['wastes' => $wastes]);
    }
}