<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function index()
    {
        $data['cars']= Cars::get();
        return view('admin.cars.index',$data);
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'model' => 'required',
            'no_plat' => 'required',
            'rental_rate_day' => 'required',
        ]);

        $avatar = $request->file('avatar');
        $name_avatar = time()."_".$avatar->getClientOriginalName();
        $destination = 'uploads/cars';
        $avatar->move($destination,$name_avatar);

        try {

            Cars::create([
                'name' => $request->name,
                'model' => $request->model,
                'no_plat' => $request->no_plat,
                'rental_rate_day' => $request->rental_rate_day,
                'avatar' => $name_avatar,
            ]);
    
            return redirect(route('cars.index'))
                ->withSuccess("Data berhasil ditambahkan");
                
        } catch(\Exception $e) {
            return redirect()->back()->withError('Data gagal ditambahkan');
        }
    }

}
