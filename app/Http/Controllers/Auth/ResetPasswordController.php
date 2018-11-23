<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;
use Cms_Framework_Seed\Theme\ThemeAndViews;
use Cms_Framework_Seed\User\Traits\Auth\ResetsPasswords;
use Cms_Framework_Seed\User\Traits\RoutesAndGuards;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
     */
    use RoutesAndGuards, ThemeAndViews, ResetsPasswords;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->response = resolve(AuthResponse::class);
        $this->setRedirectTo();
        $this->setTheme(null, 'auth');
        $this->middleware('guest');
    }
}
