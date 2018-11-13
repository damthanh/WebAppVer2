<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class HistoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getHistory(){
        return view('history');
    }
}
