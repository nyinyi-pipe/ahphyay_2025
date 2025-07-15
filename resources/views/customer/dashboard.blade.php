@extends('landing')

@section('title')
    - Dashboard
@endsection

@section('content')
    customer 
    <form method="POST" action="{{ route('logout') }}" class="px-4 py-2">
        @csrf
        <button type="submit"
            class="flex items-center gap-2 px-0.5 w-full text-left text-gray-700 hover:alert-text-red-600 transition cursor-pointer">
            <iconify-icon icon="mdi:logout" width="20"></iconify-icon>
            {{ __('Log Out') }}
        </button>
    </form>
@endsection
