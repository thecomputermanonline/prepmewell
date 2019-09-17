<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
class SocialController extends Controller
{


    /**
     * Redirect the user to the Provider authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from the Provider.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback($provider)
    {
        //$userSocial =   Socialite::driver($provider)->stateless()->user();
        $getInfo = $this->createOrGetUser(Socialite::driver($provider)->user(), $provider);

        $user = $this->createUser($getInfo, $provider);

        auth()->login($user, true);

       //return redirect()->route('dashboard');
        return redirect()->to('/dashboard');
    }


    /**
     * Create or get a user based on provider id.
     *
     * @return Object $user
     */
    private function createOrGetUser($getInfo, $provider)
    {
        $account = User::where('provider', $provider)
            ->where('provider_id', $getInfo->id)
            ->first();

        if ($account) {
            //Return account if found
            return $account;
        } else {

            //Check if user with same email address exist
            $user = User::where('email', $getInfo->email)->first();

            //Create user if dont'exist
            if (!$user) {
                $user = User::create([
                    'name' => $getInfo->name,
                    'email' => $getInfo->email,
                    'image' => $getInfo->avatar,
                    'provider' => $provider,
                    'provider_id' => $getInfo->id
                ]);

            }


            return $user;
        }
    }


}
