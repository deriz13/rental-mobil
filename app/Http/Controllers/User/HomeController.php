<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cars;

class HomeController extends Controller
{
    public function index()
    {
        $data['cars']= Cars::get();
        return view('users.home.index',$data);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $cars = Car::where('name', 'like', '%' . $searchTerm . '%')->get();
        return view('cars.index', compact('cars'));
    }
}
