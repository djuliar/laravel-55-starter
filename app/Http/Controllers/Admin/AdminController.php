<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Selamat Datang",
            'subtitle' => "di Halaman Administrator",
            'npage' => 0,
        ];
        return view('admin.dashboard', compact('data'));
    }
}
