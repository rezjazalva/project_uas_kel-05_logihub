<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */

    public function showUserLoginForm()
    {
        return view('users.login-user');
    }

    public function showAdminLoginForm()
    {
        return view('admin.login-admin');
    }


    public function create(): View
    {
        // Check if user is logged in as admin
        if (Auth::guard('admin')->check()) {
            return view('admin.login-admin');
        }

        // If not logged in as admin, return user login view
        return view('users.login-user');
    }

    /**
     * Handle an incoming authentication request.
     */

    public function userLogin(Request $request)
    {
        $request->validate([
            'no_induk' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('web')->attempt($request->only('no_induk', 'password'))) {
            $user = Auth::guard('web')->user();

            if ($user->role === 'user') {
                $request->session()->regenerate();
                return redirect()->route('user.dashboard')->with('message', 'Anda telah berhasil login sebagai user.');
            }
        }

        return back()->withErrors([
            'no_induk' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
        ])->withInput($request->only('no_induk'));
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'no_induk' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($request->only('no_induk', 'password'))) {
            $user = Auth::guard('admin')->user();
            if ($user->role === 'admin') {
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard')->with('message', 'Anda telah berhasil login sebagai admin.');
            }
        }

        return back()->withErrors([
            'no_induk' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
        ])->withInput($request->only('no_induk'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
