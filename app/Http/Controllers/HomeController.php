<?php

namespace App\Http\Controllers;

use App\Models\LicenseCard;
use App\Models\Theme;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'data' => LicenseCard::latest()->get(),
            'today' => Carbon::now()->format('Y-m-d')
        ]);
    }

    public function theme(Request $request, $id)
    {
        Theme::whereId($id)->update(['name' => $request->name]);
        return back();
    }
}
