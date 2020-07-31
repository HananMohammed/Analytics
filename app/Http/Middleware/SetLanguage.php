<?php

namespace App\Http\Middleware;

use Closure;
use App;
class SetLanguage
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
        App::setLocale($request->route('language'));
        if(App::getLocale()=='ar'){
            $request->session()->put('locale','ar');
        }else if (session()->has('locale')=='en') {
            $request->session()->put('locale','en');
        }
        return $next($request);
    }
}
