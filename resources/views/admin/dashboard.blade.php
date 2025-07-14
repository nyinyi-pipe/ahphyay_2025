@extends('layouts.app')

@section('title')
    - Dashboard
@endsection

@section('content')
    <div class=" flex flex-col">
        <div class=" p-4 sm:p-6 space-y-6">
            <!-- Header / Breadcrumb -->
            @php
                $crumbs = [['label' => 'Admin Dashboard', 'url' => route('admin.dashboard')]];
            @endphp

            <x-breadcrumb :crumbs="$crumbs" />

            <div class="w-full">
                <div class="flex flex-wrap gap-4">
                    <!-- Manage Products -->
                    <a href="{{ url('admin/products') }}"
                        class="flex items-center gap-2 background-white px-4 py-3 rounded-xl shadow-sm hover:shadow-md transition border border-gray-200 hover:border-blue-500 hover:bg-blue-50 text-blue-700 font-medium">
                        <iconify-icon icon="mdi:package-variant" width="20"></iconify-icon>
                        <span class="text-sm">Manage Products</span>
                    </a>

                    <!-- Manage Suppliers -->
                    <a href="{{ url('admin/suppliers') }}"
                        class="flex items-center gap-2 background-white px-4 py-3 rounded-xl shadow-sm hover:shadow-md transition border border-gray-200 hover:border-green-500 hover:bg-green-50 text-green-700 font-medium">
                        <iconify-icon icon="mdi:truck-outline" width="20"></iconify-icon>
                        <span class="text-sm">Manage Suppliers</span>
                    </a>

                    <!-- Manage Blog -->
                    <a href="{{ url('admin/blogs') }}"
                        class="flex items-center gap-2 background-white px-4 py-3 rounded-xl shadow-sm hover:shadow-md transition border border-gray-200 hover:border-purple-500 hover:bg-purple-50 text-purple-700 font-medium">
                        <iconify-icon icon="mdi:post-outline" width="20"></iconify-icon>
                        <span class="text-sm">Manage Blog</span>
                    </a>

                    <!-- View Reports -->
                    <a href="{{ url('admin/reports') }}"
                        class="flex items-center gap-2 background-white px-4 py-3 rounded-xl shadow-sm hover:shadow-md transition border border-gray-200 hover:border-red-400 hover:bg-red-50 alert-text-red-600 font-medium">
                        <iconify-icon icon="mdi:chart-bar" width="20"></iconify-icon>
                        <span class="text-sm">View Reports</span>
                    </a>
                </div>
            </div>


            <!-- Stat Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="card background-white text-custom-slate-700 rounded-xl text-xs p-5">Total Suppliers<br><span
                        class="text-xl font-bold ">3</span></div>
                <div class="card background-white text-custom-slate-700 rounded-xl text-xs p-5">Total Products<br><span
                        class="text-xl font-bold ">5</span></div>
                <div class="card background-white text-custom-slate-700 rounded-xl text-xs p-5">Avg Rating<br><span
                        class="text-xl font-bold ">5.58</span></div>
                <div class="card background-white text-custom-slate-700 rounded-xl text-xs p-5">[Extra Box]</div>
            </div>

            <!-- Chart & Tabs -->
            <div class="background-white rounded-xl shadow p-4">
                <div class="flex space-x-4 border-b mb-4">
                    <button class="tab-active">Products by Category</button>
                    <button class="tab">Average Ratings</button>
                </div>
                <canvas id="categoryChart" class="w-full max-w-xl mx-auto"></canvas>
            </div>

            <!-- Recent Products -->
            <div class="background-white rounded-xl shadow p-4 overflow-auto">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Recent Products</h3>
                    <div class="flex space-x-2">
                        <button class="btn-icon">🔍</button>
                        <button class="btn-icon">⚙️</button>
                    </div>
                </div>
                <table class="min-w-full text-sm text-left">
                    <thead class="bg-custom-gray-100">
                        <tr>
                            <th class="p-2">Name</th>
                            <th class="p-2">Price</th>
                            <th class="p-2">Category</th>
                            <th class="p-2">Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-2">Yoga Mat</td>
                            <td class="p-2">$29.99</td>
                            <td class="p-2">ID: 5</td>
                            <td class="p-2">4.60</td>
                        </tr>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-2">Garden Tools Set</td>
                            <td class="p-2">$149.99</td>
                            <td class="p-2">ID: 4</td>
                            <td class="p-2">4.30</td>
                        </tr>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-2">Bestseller Novel</td>
                            <td class="p-2">$24.99</td>
                            <td class="p-2">ID: 3</td>
                            <td class="p-2">4.80</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
