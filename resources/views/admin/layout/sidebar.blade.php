<div x-show="show" :class="show ? 'translate-x-0' : '-translate-x-full'" class="bg-cyan-600 text-cyan-100 space-y-6 px-2 py-4 top-0 z-9999 flex max-w-72 w-72 flex-col duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0 translate-x-0">

{{-- <div x-show="show" class="bg-cyan-600 text-cyan-100 w-64 space-y-6 px-2 py-4 absolute inset-y-0 left-0 md:relative md:-translate-x-0 transform -translate-x-full transition duration-200 ease-in-out"
     x-bind:class="show ? 'relative -translate-x-0' : ''"
> --}}
    <a href="/admin/dashboard" class="flex items-center space-x-2 px-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
        </svg>
        <span class="text-xl font-semibold text-white">Digi-World</span>
    </a>
    <nav>
        <x-admin-nav-link link="/admin/dashboard" icon="home" :active="request()->is('admin/dashboard')"> Dashboard </x-admin-nav-link>
        <x-admin-nav-link link="/admin/products" icon="description" :active="request()->is('admin/products*')"> Products</x-admin-nav-link>
        <x-admin-nav-link link="/admin/category" icon="category" :active="request()->is('admin/category*')"> Category</x-admin-nav-link>
        <x-admin-nav-link link="/admin/coupon" icon="shopping_cart" :active="request()->is('admin/coupon*')"> Coupon</x-admin-nav-link>
        <x-admin-nav-link link="/admin/brand" icon="branding_watermark" :active="request()->is('admin/brand*')"> Brand</x-admin-nav-link>
        <x-admin-nav-link link="/admin/orders" icon="list_alt" :active="request()->is('admin/orders*')"> Orders</x-admin-nav-link>
        <x-admin-nav-link link="/admin/reviews" icon="reviews" :active="request()->is('admin/reviews*')"> Reviews</x-admin-nav-link>
        <x-admin-nav-link link="/admin/users" icon="groups" :active="request()->is('admin/users*')"> Users</x-admin-nav-link>
        <x-admin-nav-link link="/admin/offers" icon="local_offer" :active="request()->is('admin/offers*')"> Offers</x-admin-nav-link>
        <x-admin-nav-link link="/admin/shopping_rule" icon="delivery_dining" :active="request()->is('admin/shopping_rule*')"> Shopping Rule</x-admin-nav-link>
        <x-admin-nav-link link="/admin/settings" icon="settings" :active="request()->is('admin/settings*')"> Settings</x-admin-nav-link>
    </nav>
</div>
