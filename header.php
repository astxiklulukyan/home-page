<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agency</title>
    <?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/output.css">
</head>
<body>

<header class="py-8 border-b border-gray-300 fixed top-0 left-0 right-0 bg-white z-10">
	<div class="container mx-auto 2xl:max-w-(--custom-container) px-3 2xl:px-0">
		<div class="flex justify-between items-center">
			<a href="#" class="w-1/4 h-auto shrink-0">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" class="w-auto">
			</a>

			<nav class="hidden lg:flex align-center font-inter-medium flex-1 justify-center space-x-10 text-primary">
				<a href="#" class="hover:underline">Home</a>
				<a href="#" class="hover:underline">Services</a>
				<a href="#" class="hover:underline">About Us</a>
				<a href="#" class="hover:underline">Portfolio</a>
			</nav>
	
			<a href="#" class="hidden lg:inline-block custom-button primary-button">
				Contact
			</a>
			
			<div class="lg:hidden">
				<button popovertarget="my-popover"><i class="fas fa-bars text-xl"></i></button>
				<div popover id="my-popover" class="transition-discrete starting:open:opacity-0 w-[calc(100%-3rem)] md:w-[400px] h-full  p-10">
					<img src="./src/images/logo.svg" alt="Logo" class="w-auto">

					<nav class="text-primary flex flex-col space-y-6 mt-12">
						<a href="#" class="hover:underlin">Home</a>
						<a href="#" class="hover:underline">Services</a>
						<a href="#" class="hover:underline">About Us</a>
						<a href="#" class="hover:underline">Portfolio</a>
					</nav>

					<a href="#" class="custom-button primary-button flex-end mt-8">
						Contact
					</a>
				</div>
			</div>
		</div>
	</div>
</header>