<div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:00jbg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2"> 
                    <form wire:submit.prevent="submitSearch" class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:00jtext-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex items-center justify-between gap-3">
                                <input type="search" wire:model.debounce.300ms="searchTerm" id="simple-search" class="flex-grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:00jbg-gray-700 dark:00jborder-gray-600 dark:00jplaceholder-gray-400 dark:00jtext-white dark:00jfocus:ring-primary-500 dark:00jfocus:border-primary-500" placeholder="Search" >
                                <button type="submit" wire:submit.prevent="submitSearch"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2  dark:0bg-blue-600 dark:0hover:bg-blue-700 focus:outline-none dark:0focus:ring-blue-800">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <button type="button" class="flex items-center justify-center text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:0jbg-primary-600 dark:0jhover:bg-primary-700 focus:outline-none dark:0jfocus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add product
                    </button>
                    <div class="flex items-center space-x-3 w-full md:w-auto">
                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:00jfocus:ring-gray-700 dark:00jbg-gray-800 dark:00jtext-gray-400 dark:00jborder-gray-600 dark:00jhover:text-white dark:00jhover:bg-gray-700" type="button">
                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                            Actions
                        </button>
                        <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:00jbg-gray-700 dark:00jdivide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:00jtext-gray-200" aria-labelledby="actionsDropdownButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:00jhover:bg-gray-600 dark:00jhover:text-white">Mass Edit</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:00jhover:bg-gray-600 dark:00jtext-gray-200 dark:00jhover:text-white">Delete all</a>
                            </div>
                        </div>
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:00jfocus:ring-gray-700 dark:00jbg-gray-800 dark:00jtext-gray-400 dark:00jborder-gray-600 dark:00jhover:text-white dark:00jhover:bg-gray-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:00jbg-gray-700">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:00jtext-white">Choose brand</h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:00jfocus:ring-primary-600 dark:00jring-offset-gray-700 focus:ring-2 dark:00jbg-gray-600 dark:00jborder-gray-500">
                                    <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:00jtext-gray-100">Apple (56)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:00jfocus:ring-primary-600 dark:00jring-offset-gray-700 focus:ring-2 dark:00jbg-gray-600 dark:00jborder-gray-500">
                                    <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:00jtext-gray-100">Microsoft (16)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="razor" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:00jfocus:ring-primary-600 dark:00jring-offset-gray-700 focus:ring-2 dark:00jbg-gray-600 dark:00jborder-gray-500">
                                    <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:00jtext-gray-100">Razor (49)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="nikon" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:00jfocus:ring-primary-600 dark:00jring-offset-gray-700 focus:ring-2 dark:00jbg-gray-600 dark:00jborder-gray-500">
                                    <label for="nikon" class="ml-2 text-sm font-medium text-gray-900 dark:00jtext-gray-100">Nikon (12)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="benq" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:00jfocus:ring-primary-600 dark:00jring-offset-gray-700 focus:ring-2 dark:00jbg-gray-600 dark:00jborder-gray-500">
                                    <label for="benq" class="ml-2 text-sm font-medium text-gray-900 dark:00jtext-gray-100">BenQ (74)</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:00jtext-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:00jbg-gray-700 dark:00jtext-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">Requete</th>
                <th scope="col" class="px-4 py-3">Developpeur</th>
                <th scope="col" class="px-4 py-3">Date</th>
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($deploiments as $deploiment)
                <tr class="border-b dark:00jborder-gray-700">
                    <td class="p-4">
                        
                    </td>
                    <td class="px-4 py-3">{{ $deploiment->descr }}</td>
                    <tr>
                        @foreach($deploiments->serveurs as $serveur)
                            <td class="px-4 py-3">{{ $serveur->nomServeur }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($deploiments->requetes as $requete)
                            <td class="px-4 py-3">{{ $requete->requetesSQL }}</td>
                        @endforeach
                    </tr>
                    
                    <td class="px-4 py-3">{{ $deploiment->created_at->format('Y-m-d') }} </td>
                    <td class="px-4 py-3 flex items-center justify-end">
            endforeach
                        <div x-data="{ open: false }" class="relative inline-block text-left">
                            <button id="apple-imac-27-dropdown-button" 
                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:0text-gray-400 dark:0hover:text-gray-100" 
                                    type="button" 
                                    @click="open = !open; console.log('Button clicked, open:', open)">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="apple-imac-27-dropdown" 
                                 class="origin-top-right absolute right-0 mt-2 w-44 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dark:0bg-gray-700" 
                                 x-show="open" 
                                 x-cloak
                                 @click.away="open = false; console.log('Clicked away, open:', open)">
                                <ul class="py-1 text-sm text-gray-700 dark:0text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:0hover:bg-gray-600 dark:0hover:text-white">Show</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:0hover:bg-gray-600 dark:0hover:text-white">Edit</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:0hover:bg-gray-600 dark:0text-gray-200 dark:0hover:text-white">Delete</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

            <nav class=" md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                {{ $requetes->links() }}
            </nav>
        
        </div>
    </div>
    
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            const actionsDropdown = document.querySelector('#actionsDropdownButton');
            const filterDropdown = document.querySelector('#filterDropdownButton');

            actionsDropdown.addEventListener('click', function () {
                document.querySelector('#actionsDropdown').classList.toggle('hidden');
            });

            filterDropdown.addEventListener('click', function () {
                document.querySelector('#filterDropdown').classList.toggle('hidden');
            });

            window.addEventListener('click', function (e) {
                if (!actionsDropdown.contains(e.target) && !filterDropdown.contains(e.target)) {
                    document.querySelector('#actionsDropdown').classList.add('hidden');
                    document.querySelector('#filterDropdown').classList.add('hidden');
                }
            });
        });
    </script> -->

