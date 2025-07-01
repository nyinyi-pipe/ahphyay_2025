<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class WebSettingController extends Controller
{
    public function settings(){
        $users = User::get();
        $roles = Role::orderBy('id')->get();
        $permissions = Permission::get();
        return view('admin.settings.settings', compact('roles', 'permissions','users'));

    }
}
