@extends('layouts.app')

@section('title')
    - Roles & Permissions
@endsection

@section('content')
    <div class="">
        <!-- Header / Breadcrumb -->
        @php
            $crumbs = [['label' => 'Settings', 'url' => route('admin.settings')], ['label' => 'Roles & Permissions']];
        @endphp

        <x-breadcrumb :crumbs="$crumbs" />
        <br>

        <x-flash-message :message="session('success')" type="success" />

        <div class="mt-6 background-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold text-gray-800">
                Assign Permissions to: <span class="font-bold uppercase">{{ $role->name }}</span>
            </h2>

            <form action="{{ route('admin.roles.permissions.update', $role->id) }}" method="POST" class="mt-6 space-y-4">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach ($permissions as $permission)
                        <label class="flex items-center p-3 bg-custom-gray-50 rounded-lg hover:bg-custom-gray-100 transition">
                            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                @checked($role->hasPermissionTo($permission->name))>
                            <span
                                class="ml-3 text-gray-700">{{ Str::title(str_replace('-', ' ', $permission->name)) }}</span>
                        </label>
                    @endforeach
                </div>
                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.roles.permissions',$role->id) }}"
                        class="px-4 py-2 bg-custom-gray-200 text-gray-700 rounded-lg hover:bg-custom-gray-200">
                        Cancel
                    </a>

                    <button type="submit" class="px-4 py-2 bg-vlue-600 text-white rounded-lg bg-blue-600 hover:bg-blue-700">
                        Assign
                    </button>
                </div>
            </form>
        </div>

        
    </div>
@endsection
