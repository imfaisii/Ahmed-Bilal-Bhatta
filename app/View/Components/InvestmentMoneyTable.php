<?php

namespace App\View\Components;

use App\Models\InvestmentMoney;
use Illuminate\View\Component;

class InvestmentMoneyTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.investment-money-table')->with('investments', InvestmentMoney::with('receiver', 'investor')->get());
    }
}
