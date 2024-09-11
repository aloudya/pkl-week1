<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /* Shows all users */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /* Show user's detail */
    public function show()
    {
        return view('users.show');
    }

    // $data['id'] = $id;
    // $data['page_title'] = 'data';
    // public function show(Request $request)
    // {
    //     $name = $request->input('name');
    //     return view('users.show', ['name' => $name]);
    // }
}
