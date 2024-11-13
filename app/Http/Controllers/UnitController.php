<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index()
    {
        return view('units.index')->with('units', Unit::all());
    }

    public function show(Unit $unit) {
        return view('units.show')->with('unit', $unit);
    }
}
