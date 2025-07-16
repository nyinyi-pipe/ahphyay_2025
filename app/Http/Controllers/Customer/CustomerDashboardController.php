<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\WebSettingRepository;

class CustomerDashboardController extends Controller
{
    protected $webSettingRepo;

    public function __construct(WebSettingRepository $webSettingRepo)
    {
        $this->webSettingRepo = $webSettingRepo;
    }

    public function dashboard(){
        $logo = $this->webSettingRepo->getLandingAttributes()['logo'];
        $company_name = $this->webSettingRepo->getLandingAttributes()['company_name'];
        return view('customer.dashboard',compact('logo','company_name'));
    }
}
