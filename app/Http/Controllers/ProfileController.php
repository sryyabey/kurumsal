<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = Auth::user();
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // Validated verileri al
        $validatedData = $request->validated();

        // Eğer şifre alanı boş ise, password alanını validated verilerden çıkar
        if (empty($validatedData['password'])) {
            unset($validatedData['password']);
            unset($validatedData['password_confirmation']);
        } else {
            // Şifre varsa şifreyi hashleyerek güncelle
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        // Kullanıcı verilerini doldur ve kaydet
        $request->user()->fill($validatedData);

        // Eğer email değiştirilmişse, email doğrulama alanını sıfırla
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Kullanıcı verilerini kaydet
        $request->user()->save();

        // Başarı mesajı ile profile edit sayfasına yönlendir
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
