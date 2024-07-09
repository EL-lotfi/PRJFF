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
  <div class="flex h-screen flex-col">
    <div class="flex-col">
     @include('layouts.navigation')
    </div>
    <div class="flex flex-grow">
    <div class="mt-0 text-white w-64 flex-shrink-0 ">
      @include('layouts.admin-sidebar')
    </div>
        <!-- Main Content -->
        <livewire:serveurs-table>
    <!-- Include JS -->
</body>
</html>