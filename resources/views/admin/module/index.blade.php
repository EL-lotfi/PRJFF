<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modules</title>
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
    <!-- Main Content -->
  <main class="bg-gray-100 p-4 flex-1">
    <div class="flex justify-end mb-4">
      <!-- Search Form -->
      <form action="/search" class="flex items-center">
        <input type="text" placeholder="Rechercher" class="bg-gray-200 border-black-800 text-black rounded-full px-4 py-2">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full ml-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>
      </form>
    </div>
    <section class="bg-white rounded-lg shadow-md p-4 flex">
      <!-- Table -->
      <table class="w-full table-auto mr-4">
        <thead>
          <tr>
            <th class="px-4 py-2 text-left">Requête</th>
            <th class="px-4 py-2 text-left">Développeur</th>
            <th class="px-4 py-2 text-left">Date</th>
            <th class="px-4 py-2 text-left"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($requests as $requete)
          <tr>
              <td class="px-4 py-2 border-b border-gray-200">{{ $requete->requetesSql }}</td>
              <td class="px-4 py-2 border-b border-gray-200">{{ $requete->user->name }}</td>              
              <td class="px-4 py-2 border-b border-gray-200">{{ $requete->version->dateVersion }}</td>   
          </tr>
          @endforeach
      </tbody>
      
    </table>
    </section>
  </main>
</body>
</html>