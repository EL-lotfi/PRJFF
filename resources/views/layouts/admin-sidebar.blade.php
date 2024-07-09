<x-sidebar-nav-link :href="route('requete.index')" :active="request()->routeIs('requete.index')" class="mt-7 ">                
    <x-slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
    </x-slot>
    {{ __('Suivi des requêtes') }}
</x-sidebar-nav-link>
<!-- <button class="toggle-btn focus:outline-none bg-black md:m"> -->
    <!-- Hamburger Icon SVG -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
</button> -->
<x-sidebar-nav-link :href="route('serveur.index')" :active="request()->routeIs('serveur.index')" class="mt-7">
    <x-slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
    </x-slot>
    {{ __('Suivi des serveurs') }}
</x-sidebar-nav-link>

<x-sidebar-nav-link :href="route('module.index')" :active="request()->routeIs('module.index')" class="mt-7">
    <x-slot name="icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
    </x-slot>
    {{ __('Suivi des modules') }}
</x-sidebar-nav-link>

<form method="POST" action="{{ route('logout') }}" class="mt-7">
    @csrf
    <x-sidebar-nav-link onclick="event.preventDefault();this.closest('form').submit();">
        <x-slot name="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </x-slot>
        {{ __('Sign Out') }}
    </x-sidebar-nav-link>
</form>
