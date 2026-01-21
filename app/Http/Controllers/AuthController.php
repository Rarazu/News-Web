<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->email == 'admin@instansi.go.id' &&
            $request->password == 'admin123') {

            session(['admin' => true]);
            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Login gagal');
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect('/');
    }
}
