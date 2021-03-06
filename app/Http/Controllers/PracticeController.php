<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PracticeController extends Controller
{
    public function foo1()
    {
        return 'Foo1!!';
    }

    public function foo2()
    {
        return view('foo.foo2', [
            'title' => 'Foo2',
            'body' => 'My first Laravel.'
        ]);
    }

    public function foo3()
    {
        $user = User::find(2);
        return view('foo.foo3', [
            'user' => $user
        ]);
    }

    public function foo4()
    {
        return view('foo.foo4', [
            'title' => 'Foo4',
            'body' => 'Hello World!'
        ]);
    }
}
