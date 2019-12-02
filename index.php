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