@extends('admin.layout.app')
@section('title')
    Admin Settings
@endsection

@section('main-content')

    <!-- Settings Section Start -->
    <div class="w-full">
        <v-breadcrumbs :items="['', 'Settings']">
            <template v-slot:prepend>
                <v-icon size="small" icon="mdi-home"></v-icon>
            </template>
        </v-breadcrumbs>
        <div class="bg-white flex items-center pt-3 px-3 justify-between">
            <h1 class="text-2xl text-gray-500 font-semibold py-4 px-2">Settings</h1>
        </div>
        <settings-table-component></settings-table-component>
    </div>
    <!-- Settings Section End -->

@endsection
