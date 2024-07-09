<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Configuration</title>
  <!-- Include CSS -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex h-screen  flex-col">
        <div class=" bg-gray-100">
        @include('layouts.dev-navigation')
        </div>
        <div class="flex flex-grow">
            <div class=" text-white w-64 flex-shrink-0 bg-white-400 sidebar min-h-screen  overflow-hidden border-r  hover:bg-white hover:shadow-lg" >
                @include('layouts.dev-sidebar')
            </div>
            <div class="flex  py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <form action="#" class="space-y-8">
                    <div class="flex-grow max-w-sm mx-auto">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:0text-white">Select an option</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:0bg-gray-700 dark:0border-gray-600 dark:0placeholder-gray-400 dark:0text-white dark:0focus:ring-blue-500 dark:0focus:border-blue-500">
                        <option selected>Choisir un module</option>
                        @foreach($modules as $module)
                        <option value='{{ $module->idModule }}'>{{ $module->nomModule}}</option>
                        @endforeach
                    </select>
                </form>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:0text-gray-300">Subject</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:0bg-gray-700 dark:0border-gray-600 dark:0placeholder-gray-400 dark:0text-white dark:0focus:ring-blue-500 dark:0focus:border-blue-500">
                                <option selected>Choisir une version</option>
                                @foreach($versions as $version)
                                <option value='{{ $module->idModule }}'>{{ $version->numVersion}}</option>
                                @endforeach
                            </select>                    
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:0text-gray-400">les requétes SQL</label>
                        <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:0bg-gray-700 dark:0border-gray-600 dark:0placeholder-gray-400 dark:0text-white dark:0focus:ring-primary-500 dark:0focus:border-primary-500" placeholder="Insérer ici..."></textarea>
                    </div>
                    <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:0bg-primary-600 dark:0hover:bg-primary-700 dark:0focus:ring-primary-800">Send message</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>