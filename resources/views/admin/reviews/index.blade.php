@extends('admin.layout.app')
@section('title')
    Admin Review
@endsection

@section('main-content')

    <!-- Review Section Start -->
    <div class="w-full">
        <v-breadcrumbs :items="['', 'Reviews']">
            <template v-slot:prepend>
                <v-icon size="small" icon="mdi-home"></v-icon>
            </template>
        </v-breadcrumbs>
        <div class="bg-white flex items-center pt-3 px-3 justify-between">
            <h1 class="text-2xl text-gray-500 font-semibold py-4 px-2">Reviews</h1>
        </div>
        <review-table-component></review-table-component>
    </div>
    <!-- Review Section End -->

@endsection
