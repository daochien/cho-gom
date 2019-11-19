<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenController extends Controller
{
    public function __construct()
    {

    }
    /**
     * view login
    */
    public function login()
    {
        return view('backend.auth.login');
    }

    /**
     * login user
     * @param email
     * @param password
     * @return redirect app
    */
    public function signIn(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'string'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials, true))
        {
            return redirect()->back()->with('error', 'Wrong username or password!');
        }

        return redirect()->route('admin.app');
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try
        {
            $data = Socialite::driver('google')->user();

            $user = User::firstOrCreate([
                'email' => $data->email
            ]);

            $user->name = $data->name;
            $user->password = bcrypt(Str::random());
            $user->avatar = $data->avatar;
            $user->provider_id = $data->id;
            $user->provider_type = 'google';
            $user->save();

            Auth::login($user);

            return redirect()->route('admin.app');
        }
        catch(\Exception $e)
        {
            return redirect()->route('login')->with('error', $e->getMessage());
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
