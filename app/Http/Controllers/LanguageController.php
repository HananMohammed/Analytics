<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * @param $locale
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function language($locale)
     {
         App::setLocale($locale);
         session()->put('locale', $locale);
         $currentURL = \Request::fullUrl();
         $prevUrl =explode('/' , url()->previous());
         count($prevUrl)>=6  ? $newURL= str_replace('language/','',$currentURL).'/'.$prevUrl[count($prevUrl)-1]
                             : $newURL= str_replace('language/','',$currentURL);

         return redirect($newURL);

     }

}
