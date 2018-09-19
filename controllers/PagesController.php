<?php
/**
 * Created by PhpStorm.
 * User: zayt
 * Date: 9/19/2018
 * Time: 3:50 PM
 */

class PagesController
{
    public function home()
    {


        return view('index');
    }

    public function about()
    {
        $company = 'Laracast';
        return view('about', compact('company'));
    }

    public function contact()
    {
        return view('contact');
    }
}