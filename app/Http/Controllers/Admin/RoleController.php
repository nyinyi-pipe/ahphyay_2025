<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController
{
    public function create(){

        return view('admin.partials.create-role');
    }

    public function store(Request $request){
        $request->validate(['name' => 'required|string|max:255|unique:roles,name']);

        $role = Role::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.settings')
            ->with('success', 'Role created successfully.');
    }

    public function editRolePage($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();
        return view('admin.partials.edit-role', compact('role','permissions'));
    }

    public function updateRole(Request $request,$id)
    {
        $role = Role::find($id);
        $data = $request->validate(['name' => 'required|string|max:255', 'permissions' => 'array']);
        $role->update(['name' => $data['name']]);
        $role->syncPermissions($data['permissions'] ?? []);
        return redirect()->route('admin.settings')
            ->with('success', 'Role updated successfully.');
    }

    public function deleteRole($id)
    {
        $role = Role::find($id);

        $role->delete();

        return redirect()->back()->with('success', 'Role Deleted Successfully.');
    }

    public function assignPermissions($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();
        return view('admin.settings.roles-permissions', compact('role', 'permissions'));
    }

    public function assignPermissionsUpdate(Request $request, $role)
    {

        $role = Role::findOrFail($role);


        $role->syncPermissions($request->input('permissions', []));

        return redirect()->back()->with('success', 'Permissions Assigned Successfully.');
    }
}
