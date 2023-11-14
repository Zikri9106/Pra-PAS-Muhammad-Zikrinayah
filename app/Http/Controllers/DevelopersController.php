<?php

namespace App\Http\Controllers;

use App\Models\Developer;

class DevelopersController extends Controller
{
    public function all()
    {
        return view("developer.alldevelopers", [
            "title" => "Developer",
            "developers" => Developer::all(),
        ]);
    }

    public function show($primaryKey)
    {
        $developer = Developer::findOrFail($primaryKey);
        return view("developer.detaildevelopers", [
            "title" => "detail-perusahaan",
            "developer" => $developer,
        ],
        );
    }
}
