<x-dev-sidebar-nav-link :href="route('requete.devInsert')" :active="request()->routeIs('requete.devInsert')" class="mt-7 ">                
    <x-slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
    </x-slot>
    {{ __(' Les requêtes') }}
</x-dev-sidebar-nav-link>
<!-- <button class="toggle-btn focus:outline-none md:hidden"> -->
    <!-- Hamburger Icon SVG -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
</button> -->
<form method="POST" action="{{ route('logout') }}" class="mt-7">
    @csrf
    <x-dev-sidebar-nav-link onclick="event.preventDefault();this.closest('form').submit();">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </x-slot>
        {{ __('Sign Out') }}
    </x-dev-sidebar-nav-link>
</form>
