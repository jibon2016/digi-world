@extends('admin.layout.app')
@section('title')
    Admin Coupon
@endsection

@section('main-content')

    <!-- Coupon Section Start -->
    <div class="w-full">
        <v-breadcrumbs :items="['', 'Coupon']">
            <template v-slot:prepend>
                <v-icon size="small" icon="mdi-home"></v-icon>
            </template>
        </v-breadcrumbs>
        <div class="bg-white flex items-center pt-3 px-3 justify-between">
            <h1 class="text-2xl text-gray-500 font-semibold py-4 px-2">Coupon</h1>
            <a href="/admin/coupon/add" class="bg-gray-500 py-2 px-4 text-white flex items-center"><span class="material-icons pe-2">add</span>Add</a>
        </div>
        <coupon-table-component></coupon-table-component>
    </div>
    <!-- Coupon Section End -->

@endsection
