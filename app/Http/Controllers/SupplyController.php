<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplyController extends Controller
{
    public function index() {
        return inertia('Supplies/Index');
    }
}
