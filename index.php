<?php
  require_once 'mix.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Demo</title>
    <link rel="stylesheet" href="<?php echo mix('sass/app.css'); ?>" />
  </head>

  <body>

  	<nav class="flex items-center justify-between flex-wrap bg-teal p-6">
	  <div class="flex items-center flex-no-shrink text-white mr-6">
	    <svg class="h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
	    <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
	  </div>
	  <div class="block lg:hidden">
	    <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
	      <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
	    </button>
	  </div>
	  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
	    <div class="text-sm lg:flex-grow">
	      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
	        Docs
	      </a>
	      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
	        Examples
	      </a>
	      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
	        Blog
	      </a>
	    </div>
	    <div>
	      <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0">Download</a>
	    </div>
	  </div>
	</nav>


 	<div class="max-w-sm mx-auto flex p-6 bg-white rounded-lg shadow-xl">
	  <div class="flex-shrink-0">
	    <img class="h-12 w-12" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="ChitChat Logo">
	  </div>
	  <div class="ml-6 pt-1">
	    <h4 class="text-xl text-gray-900 leading-tight">ChitChat</h4>
	    <p class="text-base text-gray-600 leading-normal">You have a new message!</p>
	  </div>
	</div>
    <script src="<?php echo mix('js/app.js'); ?>"></script>
  </body>
</html>