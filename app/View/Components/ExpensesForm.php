<?php

namespace App\View\Components;

use App\Models\KhataType;
use Illuminate\View\Component;

class ExpensesForm extends Component
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
        $khataTypes = KhataType::all();
        return view('components.expenses-form', compact('khataTypes'));
    }
}
