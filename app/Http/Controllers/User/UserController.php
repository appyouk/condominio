<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // profile
    public function perfil()
    {
        
        $page_title = 'Perfil';
        $page_description = 'Gerencie suas informações, privacidade e segurança para que o Youk atenda suas necessidades';
        $action = __FUNCTION__;
        return view('users.perfil', compact('page_title', 'page_description', 'action'));
        
    }
}