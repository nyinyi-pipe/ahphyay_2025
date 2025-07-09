@extends('layouts.app')

@section('title')
    - Setting
@endsection

@section('content')
    <!-- Header / Breadcrumb -->
    @php
        $crumbs = [['label' => 'Settings', 'url' => route('admin.settings')]];
    @endphp

    <x-breadcrumb :crumbs="$crumbs" />
    <br>

    <x-flash-message :message="session('success')" type="success" />


    <div class="w-full">
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
                    <div class="xl:w-full lg:w-[70vw] md:w-[65vw] w-[85vw]">
                        <a href="" class="p-5 py-1.5 bg-blue-600 text-white float-end ms-2 rounded-lg text-bold"> +
                            Add User
                        </a>
                        <livewire:users-table />
                    </div>
                </div>

                <!-- Roles Table -->
                <div x-show="tab === 'roles'" class="overflow-x-auto">
                    <div class="xl:w-full lg:w-[70vw] md:w-[65vw] w-[85vw]">
                        <a href="{{ route('admin.roles.create') }}"
                            class="p-5 py-1.5 bg-blue-600 text-white float-end ms-2 rounded-lg text-bold"> + Add Role
                        </a>
                        <livewire:roles-table />
                    </div>
                </div>

                <!-- Permissions Table -->
                <div x-show="tab === 'permissions'" class="overflow-x-auto">
                    <div class="xl:w-full lg:w-[70vw] md:w-[65vw] w-[85vw]">
                        <livewire:permissions-table />
                    </div>
                </div>

                <!-- faq Table -->
                <div x-show="tab === 'faqs'" class="overflow-x-auto">
                    <div class="xl:w-full lg:w-[70vw] md:w-[65vw] w-[85vw]">
                        <a href="{{ route('admin.faqs.create') }}"
                            class="p-5 py-1.5 bg-blue-600 text-white float-end ms-2 rounded-lg text-bold"> + Add FAQ
                        </a>
                        <livewire:faqs-table />
                        
                    </div>
                </div>

                <!-- Advanced Settings -->
                <div x-show="tab === 'advanced'" class="overflow-x-auto">
                    <div class="xl:w-[80vw] lg:w-[70vw] md:w-[65vw] w-[85vw]">
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
                                            @if ($logo = \App\Models\SiteSettings::where('key', 'logo')->first())
                                                <img src="{{ $logo->value }}" alt="Current Logo"
                                                    class=" h-24 w-auto border rounded">
                                            @endif
                                            <input type="file" name="logo"
                                                class="block w-full text-sm text-gray-500
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
                                            value="{{ \App\Models\SiteSettings::where('key', 'company_name')->first()->value ?? '' }}"
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
                                            @if ($banner1 = \App\Models\SiteSettings::where('key', 'banner_1')->first())
                                                <img src="{{ $banner1->value }}" alt="Current Banner"
                                                    class="w-full h-auto border rounded">
                                            @endif
                                        </div>
                                        <input type="file" name="banner_1"
                                            class="block w-full text-sm text-gray-500
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
                                            @if ($banner2 = \App\Models\SiteSettings::where('key', 'banner_2')->first())
                                                <img src="{{ $banner2->value }}" alt="Current Banner"
                                                    class="w-full h-auto border rounded">
                                            @endif
                                        </div>
                                        <input type="file" name="banner_2"
                                            class="block w-full text-sm text-gray-500
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
                                            @if ($aboutImage = \App\Models\SiteSettings::where('key', 'about_image')->first())
                                                <img src="{{ $aboutImage->value }}" alt="Current About Image"
                                                    class="w-full h-auto border rounded">
                                            @endif
                                        </div>
                                        <input type="file" name="about_image"
                                            class="block w-full text-sm text-gray-500
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-md file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-blue-50 file:text-blue-700
                                            hover:file:bg-blue-100">
                                    </div>

                                    
                                </div>
                            </div>

                            {{-- <!-- FAQ Section -->
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <h3 class="text-xl font-semibold mb-4 border-b pb-2">FAQ Management</h3>

                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">FAQ JSON Data</label>
                                    <div id="faq_editor" style="height: 300px;" class="border rounded-lg">
                                        {{ \App\Models\SiteSettings::where('key', 'faq_content')->first()->value ?? '[]' }}
                                    </div>
                                    <textarea id="faq_content" name="faq_content" class="hidden"></textarea>
                                </div>

                                <button type="button" id="add_faq"
                                    class="bg-blue-100 text-blue-700 px-4 py-2 rounded-lg hover:bg-blue-200">
                                    <i class="fas fa-plus mr-2"></i>Add FAQ Item
                                </button>
                            </div> --}}

                            {{-- <!-- Testimonials Section -->
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <h3 class="text-xl font-semibold mb-4 border-b pb-2">Testimonials</h3>

                                <div class="mb-4">
                                    <label class="block text-gray-700 mb-2">Testimonials JSON Data</label>
                                    <div id="testimonials_editor" style="height: 300px;" class="border rounded-lg">
                                        {{ \App\Models\SiteSettings::where('key', 'testimonials')->first()->value ?? '[]' }}
                                    </div>
                                    <textarea id="testimonials" name="testimonials" class="hidden"></textarea>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    @foreach (json_decode(\App\Models\SiteSettings::where('key', 'testimonials')->first()->value ?? '[]') as $testimonial)
                                        <div class="border rounded-lg p-4">
                                            <div class="flex items-center mb-2">
                                                <div class="h-10 w-10 bg-gray-200 rounded-full overflow-hidden mr-3">
                                                    <img src="{{ $testimonial->avatar ?? '' }}"
                                                        class="h-full w-full object-cover">
                                                </div>
                                                <div>
                                                    <h4 class="font-medium">{{ $testimonial->name ?? 'Anonymous' }}</h4>
                                                    <p class="text-sm text-gray-500">{{ $testimonial->position ?? '' }}
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm italic">"{{ $testimonial->comment ?? '' }}"
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div> --}}

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

@section('styles')
    <style>
        
        @media (max-width: 768px) {
            table {
                display: block;
                width: 100%;
                overflow-x: auto;
            }

            thead,
            tbody,
            tr {
                display: flex;
                flex-wrap: wrap;
                width: 100%;
                border-bottom: none !important;
            }

            thead tr {
                border-bottom: 2px solid #e5e7eb;
                
            }

            th,
            td {
                flex: 1 1 50%;
                
                min-width: 150px;
                box-sizing: border-box;
                padding: 0.75rem 1rem;
                
                white-space: normal;
                border-bottom: 1px solid #e5e7eb;
               
            }

            
            
        }
    </style>
@endsection

@section('script')
@endsection
