<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function all()
    {
        return view("application.allapplication", [
            "title" => "Application",
            "applications" => Application::all(),
        ]);
    }

    public function show($primaryKey)
    {
        $aplikasi = Application::findOrFail($primaryKey);
        return view("application.detailapplication", [
            "title" => "detail-aplikasi",
            "application" => $aplikasi,
        ],
        );
    }
}
