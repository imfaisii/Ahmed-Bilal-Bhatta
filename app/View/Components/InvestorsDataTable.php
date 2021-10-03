<?php

namespace App\View\Components;

use App\Models\Investor;
use Illuminate\View\Component;

class InvestorsDataTable extends Component
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
        $investors = Investor::all();
        return view('components.investors-data-table', compact('investors'));
    }
}
