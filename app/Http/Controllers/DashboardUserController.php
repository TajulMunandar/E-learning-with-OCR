<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'title' => 'User',
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create', [
            'title' => 'Tambah User Baru',
            'users' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|min:13|max:255',
            'nama' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'asalkampus' => 'required|max:255',
            'role' => 'required'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = intval($validatedData['role']);

        User::create($validatedData);

        return redirect('/dashboard/user/list-user')->with('success', 'User baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $list_user)
    {
        return view('dashboard.user.edit', [
            'title' => 'Edit User',
            'user' => $list_user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $list_user)
    {
        $rules = [
            'nama' => 'required|max:255',
            'asalkampus' => 'required|max:255',
            'role' => 'required'
        ];

        if ($request->nim != $list_user->nim) {
            $rules['nim'] = ['required', 'min:13', 'max:255', 'unique:users'];
        }

        $validatedData = $request->validate($rules);

        User::where('id', $list_user->id)->update($validatedData);

        return redirect('/dashboard/user/list-user')->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $list_user)
    {
        User::destroy($list_user->id);
        return redirect('/dashboard/user/list-user')->with('success', "User $list_user->username berhasil dihapus!");
    }

    public function resetPasswordAdmin(Request $request)
    {
        $rules = [
            'password' => 'required|min:5|max:255',
        ];

        if ($request->password == $request->password2) {
            $validatedData = $request->validate($rules);
            $validatedData['password'] = Hash::make($validatedData['password']);

            User::where('id', $request->id)->update($validatedData);
        } else {
            return back()->with('failed', 'Konfirmasi password tidak sesuai');
        }

        return redirect('/dashboard/user/list-user')->with('success', 'Password berhasil direset!');
    }
}