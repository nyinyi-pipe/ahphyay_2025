@extends('layouts.app')

@section('title')
    - Create Role
@endsection

@section('content')
    <!-- Header / Breadcrumb -->
    @php
        $crumbs = [['label' => 'Settings', 'url' => route('admin.settings')], ['label' => 'Create Role']];
    @endphp

    <x-breadcrumb :crumbs="$crumbs" />
    <br>

    <x-flash-message :message="session('success')" type="success" />

    <div class="w-full background-white shadow rounded-xl p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Role</span>
        </h2>

        <form method="POST" action="{{ route('admin.roles.store') }}">
            @csrf
            @method('POST')
            {{-- Role Name --}}
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Role Name</label>
                <input id="name" name="name" type="text"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-indigo-200 outline-none"
                    required>
                @error('name')
                    <p class="alert-text-red-600 text-sm mt-1 ms-1">{{ $message }}</p>
                @enderror
            </div>

            

            {{-- Form Actions --}}
            <div class="mt-6 flex justify-end space-x-3">
                <a href="{{ route('admin.roles.create') }}"
                    class="px-4 py-2 bg-custom-gray-100 text-gray-700 rounded-lg hover:bg-custom-gray-200">Cancel</a>

                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Create Role
                </button>
            </div>
        </form>
    </div>
@endsection
