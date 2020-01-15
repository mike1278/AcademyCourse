<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserUpdate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:users.index')->only('index');
        $this->middleware('permission:users.destroy')->only('destroy');
        $this->middleware('permission:users.show')->only('show');
        $this->middleware('permission:users.status')->only('status');
    }

    public function index()
    {
        $users = User::paginate();
        return view('User/index',compact('users'));
    }

    public function status(Request $request,User $user)
    {
        if($user->hasRole('Disable')){
            $user->removeRoles('Disable');
        }else{
            $user->assignRoles('Disable');
        }
        return redirect()->back()->with('info','Status editado correctamente.');
    }

    public function show(User $user)
    {
        return view('User/show',compact('user'));
    }

    public function edit(User $user)
    {
        return view('User/edit',compact('user'));
    }

    public function update(UserUpdate $request, User $user)
    {
        $user->update($request->all());
        return redirect()->back()->with('info','Información editada correctamente.');
    }

    public function disable()
    {
        return view('NotifyDisable');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('info','Eliminado correctamente.');
    }
}
