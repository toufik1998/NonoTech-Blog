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

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    // protected function storeProfilePicture(UploadedFile $file)
    // {
    // $filename = uniqid() . '.' . $file->getClientOriginalExtension();
    // $file->storeAs('public/profile_pictures', $filename);

    // return $filename;
    // }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile_picture' => 'default.png',
        ]);

        // $profile_picture = $request->file('profile_picture');
        // $profile_picture_path = null;

        // if ($profile_picture) {
        //     $profile_picture_path = $profile_picture->store('profile_pictures', 'public');
        // }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_picture' => 'default.png',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/');
    }
}
