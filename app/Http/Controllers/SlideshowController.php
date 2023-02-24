<?php

namespace App\Http\Controllers;

use App\Models\Graduate;
use Illuminate\Http\Request;

class SlideshowController extends Controller
{
    //
    public function index()
    {
        $graduates = Graduate::with(['department'])->where('idWisuda', 27)->where('attendance_confirmation', 0)->orderBy('sort')->get()->sortBy(function($q) {
            return $q->department->order_id;
        });

        return view('slideshow.index', [
            'graduates' => $graduates
        ]);
    }

    public function show($index)
    {
        $graduates = Graduate::with(['department'])->where('idWisuda', 27)->get()->sortBy(function ($q) {
            return $q->department->order_id;
        });

        return view('slideshow.show', [
            'graduates' => $graduates,
            'index' => $index
        ]);
    }
}
