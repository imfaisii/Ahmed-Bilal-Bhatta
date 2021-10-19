<?php

namespace App\Http\Middleware;

use App\Models\Restrictions;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessRestrictions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $check = Restrictions::where('user_id', Auth::user()->id)->value('access');
        if ($check) {
            return $next($request);
        }
        abort(403);
    }
}
