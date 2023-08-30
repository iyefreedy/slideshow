<?php

namespace App\Http\Controllers;

use App\Models\Graduate;
use Illuminate\Http\Request;

class SlideshowController extends Controller
{
    //
    public function index($session = null)
    {
        $filters = [
            'idWisuda' => 28,
            'stKeuangan' => 'system:valid'
        ];

        $graduates = Graduate::with(['department', 'passStatements'])->where($filters)->get()->sortBy(fn ($q) => $q->department->order_id);

        if ($session === '1') {
            $graduates = $graduates->nth(1, 0);
        }

        if ($session === '2') {
            $graduates = $graduates->nth(1, 232);
        }

        return view('slideshow.index', [
            'graduates' => $graduates->all()
        ]);
    }

    // public function show($index)
    // {
    //     $graduates = Graduate::with(['department'])->where('idWisuda', 28)->get()->sortBy(function ($q) {
    //         return $q->department->order_id;
    //     });

    //     return view('slideshow.show', [
    //         'graduates' => $graduates,
    //         'index' => $index
    //     ]);
    // }
}
