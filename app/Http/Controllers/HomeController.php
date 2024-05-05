<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Stok;
use App\Models\Member;

class HomeController extends Controller
{
    public function index()
    {
        $jumlahMenu = Menu::count();
        $jumlahStok = Stok::count();
        $jumlahMember = Member::count();
        $latestMenus = Menu::orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard.home', compact('jumlahMenu', 'jumlahStok', 'jumlahMember', 'latestMenus'))->with('title', 'Dashboard');
    }
}
