<?php

namespace App\Http\Controllers;

use App\Models\BricksDone;
use App\Models\Expense;
use App\Models\InvestmentMoney;
use App\Models\Investor;
use App\Models\Worker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $workers = Worker::all()->count();
        $investors = Investor::all()->count();
        $investments = InvestmentMoney::all()->sum('amount');
        $expense = Expense::all()->sum('amount');
        $bricks_produced = BricksDone::all()->sum('total_bricks');
        return view('dashboard.home', compact('workers', 'investors', 'investments', 'expense', 'bricks_produced'));
    }
}
