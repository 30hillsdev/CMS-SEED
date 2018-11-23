<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Response\Auth\Response as AuthResponse;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Cms_Framework_Seed\Theme\ThemeAndViews;
use Cms_Framework_Seed\User\Traits\Auth\AuthenticatesUsers;
use Cms_Framework_Seed\User\Traits\RoutesAndGuards;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use RoutesAndGuards, ThemeAndViews, ValidatesRequests, AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->response = resolve(AuthResponse::class);
        $this->setRedirectTo();
        $this->middleware('guest:'.$this->getGuard(), ['except' => ['logout', 'verify', 'locked', 'sendVerification']]);
        $this->setTheme();
    }
}
