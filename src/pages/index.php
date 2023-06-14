<?php
// PHP code
?>

<!DOCTYPE html>
<html>
<head>
    <title>My PHP-generated HTML</title>
    <link href="https://cdn.tailwindcss.com/2.2.16/tailwind.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
    <script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="{{ mix('src/css/app.css') }}" rel="stylesheet">

	<style>
		
	.grid-rows-custom {
      display: grid;
      grid-template-rows: repeat(4, 1fr);
      height: calc(100% - 56px);

	  /* style="height:" */
    }

	</style>
	
	<script>

	$(document).ready(function() {
      // Load home.php content via AJAX when the page loads
      $.ajax({
        url: './src/components/Home.php',
        success: function(response) {
          $('#mainPage').html(response);
        },
        error: function() {
          // Handle error if the AJAX request fails
          $('#mainPage').html('<p>Failed to load content.</p>');
        }
      });
    });

	 $(document).on('click', '#notification', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $.ajax({
            url: './src/components/Notification.php',
            type: 'POST',
            success: function(response) {
                $('#mainPage').html(response); // Update the authContainer with the returned HTML
            }
        });
    });

	</script>
</head>
<!-- <body>
    <?php
    // More PHP code
    ?>

    <header>
        <h1>Welcome hehe ahah!</h1>
    </header>

    <nav>
        <ul>
            <?php
            // Generating a dynamic list
            $menuItems = array("Home", "About", "Services", "Contact");
            foreach ($menuItems as $item) {
                echo "<li>$item</li>";
            }
            ?>
        </ul>
    </nav>

    <section>
        <?php
        // Another PHP code
        ?>

        <h2>About</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website</p>
    </footer>

</body> -->

<body class="h-screen container mx-auto bg-white">
<div class="grid grid-cols-12">
  <div class="col-span-2">
  <div class="flex flex-col items-center w-full h-screen overflow-hidden text-gray-700 rounded ">
		<a class="flex items-center w-full px-3 mt-3" href="#">
			<svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
				<path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
			</svg>
			<span class="ml-2 text-sm font-bold">Xplora</span>
		</a>
		<div class="w-full px-2">
			<div class="flex flex-col items-center w-full mt-3 border-t border-gray-300" id="home">
				<a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#">
					<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
					</svg>
					<span class="ml-2 text-sm font-medium">Home</span>
				</a>
				<a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#" id="trip">
					<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
					</svg>
					<span class="ml-2 text-sm font-medium">Search</span>
				</a>
				<a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="#" id="event">
					<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
					</svg>
					<span class="ml-2 text-sm font-medium">Event</span>
				</a>
				<a id="notification" class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" >
					<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="notification">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
					</svg>
					<span class="ml-2 text-sm font-medium">Notification</span>
				</a>

				<a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#">
					<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
					</svg>
					<span class="ml-2 text-sm font-medium">Messages</span>
					<span class="absolute top-0 left-0 w-2 h-2 mt-2 ml-2 bg-indigo-500 rounded-full"></span>
				</a>
			</div>
			<div class="flex flex-col items-center w-full mt-2 border-t border-gray-300">
				<a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#">
					<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
					</svg>
					<span class="ml-2 text-sm font-medium">Products</span>
				</a>
				<a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="#">
					<svg class="w-6 h-6 stroke-current"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
					</svg>
					<span class="ml-2 text-sm font-medium">Settings</span>
				</a>
				
			</div>
		</div>
		<a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-200 hover:bg-gray-300" href="#">
			<svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
			<span class="ml-2 text-sm font-medium">Account</span>
		</a>
	</div>
  </div>

  <div class="col-span-6">
		<div class="h-screen w-full" id="mainPage">
		</div>
  </div>

  <div div class="col-span-4">
  		<div class="grid grid-rows-2 h-screen">
  			<div class=" w-full">

				<a class="flex items-center w-full h-14" href="#">
					<span class="ml-8 text-lg font-bold">Suggested for you </span>
				</a>
				
				<div class="grid grid-rows-4 grid-rows-custom">
    
				<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>
					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					
  				</div>

				<!-- <div class="grid grid-rows-3 gap-y-6 containerx" > -->
					<!-- <div class="flex items-center space-x-4 pl-6 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-6 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-6 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-6 pr-6 w-full">
						<img src="./public/avatar.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								<p class="font-bold">Follow</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div> -->
					


				<!-- </div> -->

 

  
			</div>
			<div class=" w-full">

				<a class="flex items-center w-full h-14" href="#">
					<span class="ml-8 text-lg font-bold">Trends </span>
				</a>
				
				<div class="grid grid-rows-4 grid-rows-custom">
    
				<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
							
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>
					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					<div class="flex items-center space-x-4 pl-8 pr-6 w-full">
						<div class="w-full">
							<div class="w-full justify-between flex">
								<p class="font-bold">ahahahha</p>
								
							</div>
							<p class="text-gray-800">ahahah</p>
						</div>
					</div>

					
  				</div>

	
 

  
			</div>

  		</div>
		
	
	</div>
</div>



</body>
</html>
