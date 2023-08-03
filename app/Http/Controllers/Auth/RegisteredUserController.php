<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'no_induk' => ['required', 'string', 'max:255'],
            'status_posisi' => ['required', 'string', 'max:255'],
            'program_studi' => ['required', 'string', 'max:255'],
            'fakultas' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ], [
            'password.confirmed' => 'Konfirmasi  password tidak cocok',
        ]);


        session()->flash('message', 'Registrasi berhasil! Silahkan Login menggunakan nim dan password anda');

        $mappingFakultas = [
            'ftib' => 'Fakultas Teknologi Informasi dan Bisnis',
            'fteic' => 'Fakultas Teknologi Elektro dan Industri Cerdas',
            // Tambahkan pemetaan fakultas lainnya di sini
        ];

        $mappingStatus = [
            'ds' => 'Dosen',
            'mh' => 'Mahasiswa',
            // Tambahkan pemetaan fakultas lainnya di sini
        ];

        $mappingProgramStudi = [
            'bd' => 'Bisnis Digital',
            'if' => 'Informatika',
            'rpl' => 'Rekayasa Perangkat Lunak',
            'sd' => 'Sains Data',
            'si' => 'Sistem Informasi',
            'te' => 'Teknik Elektro',
            'ti' => 'Teknik Industri',
            'tk' => 'Teknik Komputer',
            'tl' => 'Teknik Logistik',
            'tt' => 'Teknik Telekomunikasi',
            'it' => 'Teknologi Informasi',
            // Tambahkan pemetaan program studi lainnya di sini
        ];

        $fakultasValue = $request['fakultas'];
        $programStudiValue = $request['program_studi'];
        $statusValue = $request['status_posisi'];

        $fakultasLabel = $mappingFakultas[$fakultasValue];
        $programStudiLabel = $mappingProgramStudi[$programStudiValue];
        $statusLabel = $mappingStatus[$statusValue];


        $user = User::create([
            'no_induk' => $request->no_induk,
            'name' => $request->name,
            'status_posisi' => $statusLabel,
            'program_studi' => $programStudiLabel,
            'fakultas' => $fakultasLabel,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),

        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
