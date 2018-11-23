<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;
use Cms_Framework_Seed\Theme\ThemeAndViews;
use Cms_Framework_Seed\User\Traits\Auth\SendsPasswordResetEmails;
use Cms_Framework_Seed\User\Traits\RoutesAndGuards;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use RoutesAndGuards, ThemeAndViews, SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->response = resolve(AuthResponse::class);
        $this->setTheme();
        $this->middleware('guest');
    }
}
