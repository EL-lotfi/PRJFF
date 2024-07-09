<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Configuration</title>
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
        @include('layouts.dev-sidebar')
      </div>
    <!-- Main Content -->
  
    <section class="bg-white rounded-lg shadow-md p-4 flex">
      
    </section>
  </body>
</html>