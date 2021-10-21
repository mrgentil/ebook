<?php

namespace App\Http\Middleware;

use Closure;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Database\Eloquent\Builder;

class SharedElements
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $categories = \App\Category::query()
            ->withCount(['books as books_count' => function (Builder $q) {
                $q->where('order', 3);
            }])
            ->where('order', 3)->get();
        \View::share('categories', $categories);
        return $next($request);
    }
}
