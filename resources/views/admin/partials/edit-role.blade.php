@extends('layouts.app')

@section('title')
    - Edit Role
@endsection

@section('content')
    <!-- Header / Breadcrumb -->
    @php
        $crumbs = [['label' => 'Settings', 'url' => route('admin.settings')], ['label' => 'Edit Role']];
    @endphp

    <x-breadcrumb :crumbs="$crumbs" />
    <br>

    <x-flash-message :message="session('success')" type="success" />

    <div class="w-full background-white shadow rounded-xl p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Role: <span class="uppercase">{{ $role->name }}</span>
        </h2>

        <form method="POST" action="{{ route('admin.roles.update', $role->id) }}">
            @csrf
            @method('PATCH')

            {{-- Role Name --}}
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Role Name</label>
                <input id="name" name="name" type="text" value="{{ old('name', $role->name) }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-indigo-200 outline-none"
                    required>
                @error('name')
                    <p class="alert-text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Permissions Grid --}}
            <div class="mb-4">
                <h3 class="text-gray-700 font-medium mb-2">Permissions</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach ($permissions as $perm)
                        <label class="flex items-center p-3 bg-custom-gray-50 rounded-lg hover:bg-custom-gray-100 transition">
                            <input type="checkbox" name="permissions[]" value="{{ $perm->name }}"
                                class="h-5 w-5 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
                                @checked($role->hasPermissionTo($perm->name))>
                            <span class="ml-3 text-gray-700">{{ Str::title(str_replace('_', ' ', $perm->name)) }}</span>
                        </label>
                    @endforeach
                </div>
                @error('permissions')
                    <p class="alert-text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Form Actions --}}
            <div class="mt-6 flex justify-end space-x-3">
                <a href="{{ route('admin.roles.edit.page',$role->id) }}"
                    class="px-4 py-2 bg-custom-gray-100 text-gray-700 rounded-lg hover:bg-custom-gray-200">Cancel</a>

                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Update Role
                </button>
            </div>
        </form>
    </div>
@endsection
