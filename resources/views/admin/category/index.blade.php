@extends('admin.layout.app')
@section('title')
    Admin Category
@endsection

@section('main-content')

    <!-- Category Section Start -->
    <div class="w-full">
        <v-breadcrumbs :items="['', 'Category']">
            <template v-slot:prepend>
                <v-icon size="small" icon="mdi-home"></v-icon>
            </template>
        </v-breadcrumbs>
        <div class="bg-white flex items-center pt-3 px-3 justify-between">
            <h1 class="text-2xl text-gray-500 font-semibold py-4 px-2">Category</h1>
            <a href="/admin/category/add" class="bg-gray-500 py-2 px-4 text-white flex items-center"><span class="material-icons pe-2">add</span>Add</a>
        </div>
        <categories-table-component></categories-table-component>
    </div>
    <!-- Category Section End -->

@endsection
