<?php

namespace App\View\Components;

use App\Models\Restrictions;
use Illuminate\View\Component;

class AccessRestrictionsTable extends Component
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
        return view('components.access-restrictions-table')->with('restrictions', Restrictions::where('user_id', '!=', 1)->where('user_id', '!=', 2)->with(['user'])->get());
    }
}
