<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;


class RoleController extends Controller
{
    public function index(){
        return Inertia::render('Admin/index');
    }
}
