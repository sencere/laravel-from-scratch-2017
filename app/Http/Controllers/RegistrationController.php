<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        $form->persist();
        session()->flash('message', 'Thanks so much for signing up!');
        return redirect()->home();
    }
}
