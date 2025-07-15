@extends('layouts.app')

@section('title')
    - Setting
@endsection


@section('content')
    <div class="p-4 sm:p-6 space-y-6">
        <!-- Header / Breadcrumb -->
        @php
            $crumbs = [['label' => 'Settings', 'url' => route('admin.settings')]];
        @endphp

        <x-breadcrumb :crumbs="$crumbs" />
        <br>

        <x-flash-message :message="session('success')" type="success" />


        <div class="w-full ipad-mini">
            <div x-data="{ tab: $persist('users').as('currentTab') }" class="background-white p-2 sm:p-4 rounded-xl">
                <div class="">
                    <!-- Tabs - Scrollable on mobile -->
                    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
                        <div class="overflow-x-auto pb-1 -mb-px ">
                            <ul class="flex flex-nowrap w-full">
                                <li class="flex-shrink-0">
                                    <a href="#" @click.prevent="tab = 'users'"
                                        :class="tab === 'users'
                                            ?
                                            'text-blue-600 border-blue-600' :
                                            'text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300'"
                                        class="inline-block py-3 px-2 sm:px-4 border-b-2 rounded-t-lg text-sm sm:text-base text-bold">
                                        User Management
                                    </a>
                                </li>
                                <li class="flex-shrink-0">
                                    <a href="#" @click.prevent="tab = 'roles'"
                                        :class="tab === 'roles'
                                            ?
                                            'text-blue-600 border-blue-600' :
                                            'text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300'"
                                        class="inline-block py-3 px-2 sm:px-4 border-b-2 rounded-t-lg text-sm sm:text-base text-bold">
                                        Role Management
                                    </a>
                                </li>
                                <li class="flex-shrink-0">
                                    <a href="#" @click.prevent="tab = 'permissions'"
                                        :class="tab === 'permissions'
                                            ?
                                            'text-blue-600 border-blue-600' :
                                            'text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300'"
                                        class="inline-block py-3 px-2 sm:px-4 border-b-2 rounded-t-lg text-sm sm:text-base text-bold">
                                        Permission Management
                                    </a>
                                </li>
                                <li class="flex-shrink-0">
                                    <a href="#" @click.prevent="tab = 'faqs'"
                                        :class="tab === 'faqs'
                                            ?
                                            'text-blue-600 border-blue-600' :
                                            'text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300'"
                                        class="inline-block py-3 px-2 sm:px-4 border-b-2 rounded-t-lg text-sm sm:text-base text-bold">
                                        Faq Management
                                    </a>
                                </li>
                                <li class="flex-shrink-0">
                                    <a href="#" @click.prevent="tab = 'advanced'"
                                        :class="tab === 'advanced'
                                            ?
                                            'text-blue-600 border-blue-600' :
                                            'text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300'"
                                        class="inline-block py-3 px-2 sm:px-4 border-b-2 rounded-t-lg text-sm sm:text-base text-bold">
                                        Advanced Setting
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- Tab Panels with responsive scrolling -->
                <div class="mt-2">
                    <!-- Users Table -->
                    <div x-show="tab === 'users'" class="overflow-x-auto">
                        <div class="w-full">
                            <a href="" class="p-5 py-1.5 bg-blue-600 text-white float-end ms-2 rounded-lg text-bold">
                                +
                                Add User
                            </a>
                            <livewire:users-table />
                        </div>
                    </div>

                    <!-- Roles Table -->
                    <div x-show="tab === 'roles'" class="overflow-x-auto">
                        <div class="">
                            <a href="{{ route('admin.roles.create') }}"
                                class="p-5 py-1.5 bg-blue-600 text-white float-end ms-2 rounded-lg text-bold"> + Add Role
                            </a>
                            <livewire:roles-table />
                        </div>
                    </div>

                    <!-- Permissions Table -->
                    <div x-show="tab === 'permissions'" class="overflow-x-auto">
                        <div class="">
                            <livewire:permissions-table />
                        </div>
                    </div>

                    <!-- faq Table -->
                    <div x-show="tab === 'faqs'" class="overflow-x-auto">
                        <div class="">
                            <a href="{{ route('admin.faqs.create') }}"
                                class="p-5 py-1.5 bg-blue-600 text-white float-end ms-2 rounded-lg text-bold"> + Add FAQ
                            </a>
                            <livewire:faqs-table />

                        </div>
                    </div>

                    <!-- Advanced Settings -->
                    <div x-show="tab === 'advanced'" class="overflow-x-auto ">

                        <form action="/admin/settings" method="POST" enctype="multipart/form-data" class="space-y-8">

                            @csrf

                            <!-- Company Identity Section -->
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <h3 class="text-xl font-semibold mb-4 border-b pb-2">Company Identity</h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Logo Upload -->
                                    <div>
                                        <label class="block text-gray-700 mb-2">Company Logo</label>
                                        <div class="flex items-center space-x-4">

                                            <img id="logo-preview" src="{{ $logo ?? '' }}" alt="Current Logo"
                                                class="h-24 w-auto border rounded">

                                            <input type="file" name="logo" id="logo-input"
                                                class="file-upload-input block w-full text-sm text-gray-500
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-md file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-blue-50 file:text-blue-700
                                            hover:file:bg-blue-100">
                                        </div>
                                    </div>

                                    <!-- Company Name -->
                                    <div>
                                        <label for="company_name" class="block text-gray-700 mb-2">Company Name</label>
                                        <input type="text" id="company_name" name="company_name"
                                            value="{{ $company_name ?? '' }}"
                                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>
                            </div>

                            <!-- Banner Images Section -->
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <h3 class="text-xl font-semibold mb-4 border-b pb-2">Banner Images</h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Banner 1 -->
                                    <div>
                                        <label class="block text-gray-700 mb-2">Main Banner (1100×500)</label>
                                        <div class="mb-2">

                                            <img id="banner_1-preview" src="{{ $banner_1 ?? '' }}" alt="Current Banner"
                                                class="w-full h-auto border rounded">

                                        </div>
                                        <input type="file" name="banner_1" id="banner1-input"
                                            class="file-upload-input block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-md file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-blue-50 file:text-blue-700
                                        hover:file:bg-blue-100">
                                    </div>

                                    <!-- Banner 2 -->
                                    <div>
                                        <label class="block text-gray-700 mb-2">Secondary Banner (1100×500)</label>
                                        <div class="mb-2">

                                            <img src="{{ $banner_2 ?? '' }}" alt="Current Banner" id="banner_2-preview"
                                                class="w-full h-auto border rounded">

                                        </div>
                                        <input type="file" name="banner_2" id="banner2-input"
                                            class="file-upload-input block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-md file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-blue-50 file:text-blue-700
                                        hover:file:bg-blue-100">
                                    </div>

                                    <!-- Banner 3 -->
                                    <div>
                                        <label class="block text-gray-700 mb-2">Third Banner (1100×500)</label>
                                        <div class="mb-2">

                                            <img src="{{ $banner_3 ?? '' }}" alt="Current Banner" id="banner_3-preview"
                                                class="w-full h-auto border rounded">

                                        </div>
                                        <input type="file" name="banner_3" id="banner3-input"
                                            class="file-upload-input block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-md file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-blue-50 file:text-blue-700
                                        hover:file:bg-blue-100">
                                    </div>
                                </div>
                            </div>

                            <!-- About Section -->
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <h3 class="text-xl font-semibold mb-4 border-b pb-2">About Image</h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- About Image -->
                                    <div>
                                        <label class="block text-gray-700 mb-2">About Image (400x700)</label>
                                        <div class="mb-2">

                                            <img src="{{ $about_img ?? '' }}" alt="Current About Image"
                                                id="about-preview" class="w-full h-auto border rounded">

                                        </div>
                                        <input type="file" name="about_image" id="about-input"
                                            class="file-upload-input block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-md file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-blue-50 file:text-blue-700
                                        hover:file:bg-blue-100">
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow-md transition">
                                    Save All
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endsection

@section('script')
    <script>
        $(function() {

            function attachPreview(fileInput, imgTarget) {
                $(fileInput).on('change', function() {
                    const file = this.files[0];
                    if (!file) return;

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $(imgTarget)
                            .attr('src', e.target.result) 
                            .addClass('border-blue-400');

                        setTimeout(() => $(imgTarget).removeClass('border-blue-400'), 1000);
                    };
                    reader.readAsDataURL(file);
                });
            }

            attachPreview('#logo-input', '#logo-preview');
            attachPreview('#banner1-input', '#banner_1-preview');
            attachPreview('#banner2-input', '#banner_2-preview');
            attachPreview('#banner3-input', '#banner_3-preview');
            attachPreview('#about-input', '#about-preview');

            $('.file-upload-input').on('change', function() {
                const name = this.files[0]?.name ?? 'Choose file';
                $(this).siblings('div.mb-2').prev('label')
                    .text(name)
                    .removeClass('text-gray-500')
                    .addClass('text-green-600');
            });

        });
    </script>
@endsection
