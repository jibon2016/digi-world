@extends('admin.layout.app')
@section('title')
    Admin Offer Add
@endsection

@section('main-content')

    <!-- Offer Section Start -->
    <div class="w-full">
        <v-breadcrumbs :items="['', 'Offer', 'Add']">
            <template v-slot:prepend>
                <v-icon size="small" icon="mdi-home"></v-icon>
            </template>
        </v-breadcrumbs>
        <div class="bg-white flex items-center pt-3 px-6 justify-between">
            <h1 class="text-2xl text-gray-500 font-semibold py-4 px-2">Offer Add</h1>
            <a href="/admin/offers" class="bg-gray-500 py-2 px-4 text-white flex items-center"><span class="material-icons pe-2">arrow_back</span>Back</a>
        </div>

        <form class="w-full px-6 py-5 bg-white">
            <div class="flex flex-wrap mb-6">
                <div class="flex flex-wrap mb-6 w-full">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Offer Description
                        </label>
                        <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Describe Offer">
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                    </div>
                </div>
                <div class="flex flex-wrap mb-6 w-full">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Offer Title
                        </label>
                        <textarea class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Enter Offer Title"></textarea>
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 mb-6 md:mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Offer Start 
                        </label>
                        <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="datetime-local">
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 mb-6 md:mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Sub-Sub-Category
                        </label>
                        <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="datetime-local">
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                    </div>
                </div>
                <div class="flex flex-wrap md:w-1/2 mb-6 w-full">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Offer Image
                        </label>
                        <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="file" >
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                    </div>
                </div>
                <div class="flex flex-wrap mb-6 w-full">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-6">
                    <button class="bg-indigo-500 px-5 text-white py-2 ">Save</button>
                    </div>
                </div>
            </div>
          </form>


        {{-- <table-component></table-component> --}}
    </div>
    <!-- Category Section End -->

@endsection
