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
        <div x-data="{ tab: $persist('users').as('currentTab') }"  class="background-white p-2 sm:p-4 rounded-xl">
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
                        <a href="" class="p-5 py-1.5 bg-blue-600 text-white float-end ms-2 rounded-lg text-bold"> + Add User
                        </a>
                        <livewire:users-table />
                    </div>
                </div>

                <!-- Roles Table -->
                <div x-show="tab === 'roles'" class="overflow-x-auto">
                    <div class="xl:w-full lg:w-[70vw] md:w-[65vw] w-[85vw]">
                        <a href="{{ route('admin.roles.create') }}" class="p-5 py-1.5 bg-blue-600 text-white float-end ms-2 rounded-lg text-bold"> + Add Role
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

                <!-- Advanced Settings -->
                <div x-show="tab === 'advanced'" class="overflow-x-auto">
                    <div class="xl:w-[80vw] lg:w-[70vw] md:w-[65vw] w-[85vw]">
                        Advanced Setting Here
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
        /* Make table rows flex and wrap on small devices */
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
                /* Tailwind gray-200 */
            }

            th,
            td {
                flex: 1 1 50%;
                /* Adjust to 50% width, you can tune */
                min-width: 150px;
                box-sizing: border-box;
                padding: 0.75rem 1rem;
                /* Tailwind p-3, px-4 */
                white-space: normal;
                border-bottom: 1px solid #e5e7eb;
                /* Tailwind gray-200 */
            }

            /* Optionally hide some columns on super small screens */
            /* Example: th:nth-child(4), td:nth-child(4) { display: none; } */
        }
    </style>
@endsection

@section('script')
@endsection
