<?php

namespace App\View\Components;

use App\Models\KhataType;
use Illuminate\View\Component;

class ExpenseEditModal extends Component
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
        return view('components.expense-edit-modal')->with('khataTypes', KhataType::all());
    }
}
