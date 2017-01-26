<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Psr\Log;
use App\Models\Waste;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        $wastes = Waste::query()->paginate(10);

        if(empty($wastes)) {
            throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
        }
        //dd($wastes);
        return view('dash', ['wastes' => $wastes]);
    }

    public function statistic()
    {
        $wastes = Waste::query()->paginate(20);;

        if(empty($wastes)) {
            throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
        }
        //dd($wastes);
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
        $categories = Category::query()->get()->all();
        return view('create', ['add' => false, 'categories' => $categories]);
    }
    
    public function save(Request $request)
    {
        $add = false;

        $categories = Category::query()->get()->all();

        $waste = new Waste();
        $waste->name = $request->get('name');
        $waste->price = $request->get('price');
        $waste->date_buy = $request->get('date_buy');
        $waste->category_id = $request->get('category');
        $saved = $waste->save();

        if($saved) {
            $add = true;
        }
        return view('create', ['add' => $add, 'categories' => $categories]);
    }
}