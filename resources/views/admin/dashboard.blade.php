@extends('admin.layout.app')
@section('title')
    Admin Dashboard
@endsection

@section('main-content')

    <!-- Dashboard Section Start -->
    <div class="flex space-x-5 py-5">
        <section class="w-full grid md:grid-cols-2 xl:grid-cols-4 gap-6">
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                   <span class="material-icons">
                        person
                    </span>
                </div>
                <div>
                    <span class="block text-2xl font-bold">62</span>
                    <span class="block text-gray-500">Users</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                    <span class="material-icons">
                        description
                    </span>
                </div>
                <div>
                    <span class="block text-2xl font-bold">408</span>
                    <span class="block text-gray-500">Products</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg break-words">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <span class="material-icons">
                        grade
                    </span>
                </div>
                <div>
                    <span class="inline-block text-2xl font-bold">9</span>
                    <span class="block text-gray-500 ">Orders</span>
                </div>
            </div>
            <div class="flex items-center p-8 bg-white shadow rounded-lg">
                <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                    <span class="material-icons">
                        attach_money
                    </span>
                </div>
                <div>
                    <span class="block text-2xl font-bold">83,000</span>
                    <span class="block text-gray-500">Total Sales</span>
                </div>
            </div>
        </section>
    </div>
    <!-- Dashboard Section End -->

@endsection
