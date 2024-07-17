<x-sidebar-nav-link :href="route('requete.index')" :active="request()->routeIs('requete.index')" class="mt-7 ">                
    <x-slot name="icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <!-- Database Icon -->
        <ellipse cx="12" cy="5" rx="9" ry="4" fill="none" stroke="currentColor" stroke-width="2"/>
        <path d="M3 5v7c0 2.21 4 4 9 4s9-1.79 9-4V5" fill="none" stroke="currentColor" stroke-width="2"/>
        <path d="M3 12v1c0 2.21 4 4 9 4s9-1.79 9-4v-1" fill="none" stroke="currentColor" stroke-width="2"/>
        <!-- Query Symbol -->
    </svg>



    </x-slot>
    {{ __('Suivi de requêtes') }}
</x-sidebar-nav-link>
<!-- <button class="toggle-btn focus:outline-none bg-black md:m"> -->
    <!-- Hamburger Icon SVG -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
</button> -->
<x-sidebar-nav-link :href="route('serveur.index')" :active="request()->routeIs('serveur.index')" class="mt-7">
    <x-slot name="icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <!-- Server Rack -->
    <rect x="3" y="3" width="18" height="18" rx="2" ry="2" fill="none" stroke="currentColor" stroke-width="2"/>
    <!-- Server Panels -->
    <rect x="5" y="5" width="14" height="3" rx="1" ry="1" fill="none" stroke="currentColor" stroke-width="2"/>
    <rect x="5" y="10" width="14" height="3" rx="1" ry="1" fill="none" stroke="currentColor" stroke-width="2"/>
    <rect x="5" y="15" width="14" height="3" rx="1" ry="1" fill="none" stroke="currentColor" stroke-width="2"/>
    <!-- Server Lights -->
    <circle cx="6.5" cy="6.5" r="0.5" fill="currentColor"/>
    <circle cx="6.5" cy="11.5" r="0.5" fill="currentColor"/>
    <circle cx="6.5" cy="16.5" r="0.5" fill="currentColor"/>
</svg>


    </x-slot>
    {{ __('Suivi de serveurs') }}
</x-sidebar-nav-link>

<x-sidebar-nav-link :href="route('module.index')" :active="request()->routeIs('module.index')" class="mt-7">
    <x-slot name="icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <!-- Application Window -->
    <rect x="3" y="4" width="18" height="14" rx="2" ry="2" fill="none" stroke="currentColor" stroke-width="2"/>
    <!-- Application Tabs -->
    <line x1="3" y1="8" x2="21" y2="8"/>
    <circle cx="6" cy="6" r="0.5" fill="currentColor"/>
    <circle cx="9" cy="6" r="0.5" fill="currentColor"/>
    <circle cx="12" cy="6" r="0.5" fill="currentColor"/>
    <!-- Cloud Icon -->
    <path d="M17 18c-1.104 0-2-.896-2-2 0-.588.236-1.124.618-1.508a2.005 2.005 0 011.627-.492A3.008 3.008 0 0119 11c1.657 0 3 1.343 3 3s-1.343 3-3 3h-2z" fill="none" stroke="currentColor" stroke-width="2"/>
</svg>



    </x-slot>
    {{ __('Suivi de modules') }}
</x-sidebar-nav-link>

<x-sidebar-nav-link :href="route('deploiment.index')" :active="request()->routeIs('deploiment.index')" class="mt-7">
    <x-slot name="icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11 mr-4" viewBox="0 0 24 24" fill="currentColor">
        <path d="M2 6h20v2H2zM2 11h20v2H2zM2 16h20v2H2z" />
        <path d="M4 4h16v2H4zM4 9h16v2H4zM4 14h16v2H4z" />
        <circle cx="6" cy="5" r="1" />
        <circle cx="6" cy="10" r="1" />
        <circle cx="6" cy="15" r="1" />
        <circle cx="18" cy="5" r="1" />
        <circle cx="18" cy="10" r="1" />
        <circle cx="18" cy="15" r="1" />        
    </svg>

    </x-slot>
    {{ __('Suivi de Deploiments') }}
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
