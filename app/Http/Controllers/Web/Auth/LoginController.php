<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\AgencyAdmin;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserPlan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{//{userValue}/{sitesCount}/{costPerValue}


    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Attempt to log in
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة.',
            ])->withInput();
        }

        return redirect()->intended('dashboard')->with('success', 'Login successful!');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'تم تسجيل الخروج بنجاح!');
    }

}
