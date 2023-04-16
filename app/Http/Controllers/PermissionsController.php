<?php

namespace App\Http\Controllers\pages;


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PermissionsController extends Controller
{
    public function index()
    {
        return view('pages.permissions.index');
    }
}
