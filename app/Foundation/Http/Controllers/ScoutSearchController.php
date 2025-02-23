<?php

namespace App\Foundation\Http\Controllers;

use Illuminate\Http\Request;
use App\Foundation\Models\User;

class ScoutSearchController
{
    public function search(Request $request)
    {
        return User::search($request->get('s'))->get();
    }

    public function add(Request $request)
    {
        User::factory()->create([
            'name' => $request->get('name'),
        ]);
    }
}
