<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show ()
    {
        return view('homepage');
    }
    public function showForm ()
    {
        return view('form');
    }


    public function store ()
    {
        $attributes= request()->validate([
            'name'=>'required|max:255',
            'course'=>'required|max:255',
            'email'=>'required|email|max:255'
        ]);

        User::create($attributes);

        return request()->only(['name', 'course', 'email']);
    }
}
