<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function main()
    {
        return view('slot', [
            'title' => 'SlotGame',
            'body' => 'Laravel-start'
        ]);
    }
}
