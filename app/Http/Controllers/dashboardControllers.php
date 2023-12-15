<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penawaran;

class dashboardControllers extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $penawarans = Penawaran::all();
        return view('dashboard', compact('penawarans'));
    }

    public function edit($id) {
        //
    }

    public function destroy($edit) {
        //
    }
}
