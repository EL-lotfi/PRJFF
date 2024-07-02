<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>listeServeur</title>
  <!-- Include CSS -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body >
  <div class="flex h-screen  flex-col">
    <div class=" bg-gray-100">
     @include('layouts.navigation')
    </div>
    <div class="flex flex-grow">
    <div class=" text-white w-64 flex-shrink-0 bg-white-400 sidebar min-h-screen  overflow-hidden border-r  hover:bg-white hover:shadow-lg" >
      @include('layouts.admin-sidebar')
    </div>
  
  <div class="flex justify-center px-20 mt-10 py-16 bg-white rounded-lg shadow-md max-w-3xl mx-auto">
    <!-- Image Container -->
    <div class="w-1/2 px-6 py-4 mr-7">
      <img src="/images/ServerCreate.png" alt="Image description" class="object-cover w-auto h-auto">
    </div>
    <div >
      <img src="/images/devider.png" alt="Image description" class="object-cover  h-80">
    </div>
    <!-- Form Container -->
    <div class="w-1/2 px-6 py-4 ml-3">
      <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('serveur.store') }}">
      @csrf
      <div>
                <x-input-label for="dbHost" :value="__('DB_HOST:')" />
                <x-text-input id="dbHost" class="block mt-1 w-full" type="text" name="dbHost" />
      </div>
      <div>
                <x-input-label for="dbPort" :value="__('DB_PORT:')" />
                <x-text-input id="dbPort" class="block mt-1 w-full" type="text" name="dbPort" />
      </div>
      <div>
                <x-input-label for="dbUsername" :value="__('DB_USERNAME:')" />
                <x-text-input id="dbUsername" class="block mt-1 w-full" type="text" name="dbUsername" />
      </div>
      <div>
                <x-input-label for="dbUsername" :value="__('DB_PASSWORD:')" />
                <x-text-input id="dbUsername" class="block mt-1 w-full" type="text" name="dbUsername" />
      </div>
      <x-primary-button class="ml-20 mt-3 bg-green-900">
                  {{ __('Enregistrer') }}
      </x-primary-button>
    </form>
    </div>
  </div>
    </div>
</div>
</body>
</html>