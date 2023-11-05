<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::when($request->search, fn($query, $search) => $query->where('name', 'LIKE', "%$search%")->orWhere('branch', 'LIKE', "%$search%"))
            ->orderBy('id', 'DESC')->paginate(15);

        return view('users.index', ['users' => $users]);
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        return redirect()->route('users')->with('success', 'تم تسجيل المستخدم بنجاح');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, User $user)
    {
        abort_if($user->id === 1, 403);

        $data = $request->validated();

        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('users')->with('success', 'تم تحديث المستخدم بنجاح');
    }

    public function destroy(User $user)
    {
        abort_if($user->id === 1, 403);

        $user->delete();
        return redirect()->route('users')->with('success', 'تم حذف المستخدم بنجاح');
    }

}
