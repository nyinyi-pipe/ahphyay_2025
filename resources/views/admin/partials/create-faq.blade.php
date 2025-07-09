@extends('layouts.app')

@section('title')
    - Create FAQ
@endsection

@section('content')
    <!-- Header / Breadcrumb -->
    @php
        $crumbs = [['label' => 'Settings', 'url' => route('admin.settings')], ['label' => 'Create Faq']];
    @endphp

    <x-breadcrumb :crumbs="$crumbs" />
    <br>

    <x-flash-message :message="session('success')" type="success" />

    <div class="container mx-auto rounded-xl">

        <div class="grid gap-8">

            <!-- Add/Edit Form -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4" id="form-title">Add New FAQ</h2>

                <form id="faq-form" method="POST" action="{{ route('admin.faqs.store') }}">
                    @csrf
                    <input type="hidden" name="id" id="faq-id">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Category Slug</label>
                            <input type="text" name="category_slug" id="category_slug" required
                                class="w-full px-4 py-2 border rounded-lg">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Category Name</label>
                            <input type="text" name="category_name" id="category_name" required
                                class="w-full px-4 py-2 border rounded-lg">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Category Icon</label>
                        <select name="category_icon" id="category_icon" class="w-full px-4 py-2 border rounded-lg">
                            <option value="fas fa-shopping-cart">Orders & Shipping</option>
                            <option value="fas fa-credit-card">Payments</option>
                            <option value="fas fa-exchange-alt">Returns & Refunds</option>
                            <option value="fas fa-user">Account & Support</option>
                            <option value="fas fa-box">Products & Stock</option>
                            <option value="fas fa-newspaper">Blog & Offers</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Question</label>
                        <input type="text" name="question" id="question" required
                            class="w-full px-4 py-2 border rounded-lg">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2">Answer</label>
                        <textarea name="answer" id="answer" rows="4" required class="w-full px-4 py-2 border rounded-lg"></textarea>
                    </div>

                    <div class="flex justify-end space-x-4">
                        <button type="button" id="cancel-edit"
                            class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hidden">
                            Cancel
                        </button>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                            Save FAQ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
