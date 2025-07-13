<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\RoleRedirector;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Repositories\WebSettingRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    protected $webSettingRepo;

    public function __construct(WebSettingRepository $webSettingRepo)
    {
        $this->webSettingRepo = $webSettingRepo;
    }
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $logo = $this->webSettingRepo->getLandingAttributes()['logo'];
        $company_name = $this->webSettingRepo->getLandingAttributes()['company_name'];
        return view('auth.login',compact('logo','company_name'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();
        
        return redirect()->intended(RoleRedirector::redirect($user));
        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
