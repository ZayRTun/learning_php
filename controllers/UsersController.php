<?php
/**
 * Created by PhpStorm.
 * User: zayt
 * Date: 9/19/2018
 * Time: 5:07 PM
 */

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        return redirect('users');
    }
}