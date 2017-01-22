<?php

namespace App\Http\Controllers;

use Psr\Log;
use App\Models\Waste;
use Illuminate\Http\Request;

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

    public function create()
    {
        return view('create', ['add' => false]);
    }
    
    public function save(Request $request)
    {
        $add = false;

        $waste = new Waste();
        $waste->name = $request->get('name');
        $waste->price = $request->get('price');
        $waste->date_buy = $request->get('date_buy');
        $saved = $waste->save();

        if($saved) {
            $add = true;
        }
        return view('create', ['add' => $add]);
    }
}