<footer class="bg-secondary-extra-light pt-24 pb-20 text-gray-light text-lg">
	<div class="container mx-auto 2xl:max-w-(--custom-container) px-3 2xl:px-0">
		<div class="grid grid-cols-1 md:grid-cols-[1fr_1fr] lg:grid-cols-[3fr_2fr_2fr_3fr] gap-6">                
			<div class="md:col-span-2 lg:col-span-1">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" />
				<p class="my-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie nulla massa fringilla.</p>
				<div class="flex gap-1.5 lg:gap-3.5 flex-wrap">
					<a href="#" class="bg-white w-[32px] h-[32px] rounded-md inline-flex items-center justify-center shrink-0">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="Twitter" />
					</a>
					<a href="#" class="bg-white w-[32px] h-[32px] rounded-md inline-flex items-center justify-center shrink-0">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.svg" alt="Instagram" />
					</a>
					<a href="#" class="bg-white w-[32px] h-[32px] rounded-md inline-flex items-center justify-center shrink-0">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="Linkedin" />
					</a>
					<a href="#" class="bg-white w-[32px] h-[32px] rounded-md inline-flex items-center justify-center shrink-0">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg" alt="Youtube">
					</a>
					<a href="#" class="bg-white w-[32px] h-[32px] rounded-md inline-flex items-center justify-center shrink-0">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt="Whatsapp">
					</a>
					<a href="#" class="bg-white w-[32px] h-[32px] rounded-md inline-flex items-center justify-center shrink-0">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/vk.svg" alt="VK">
					</a>
				</div>
			</div>    
			
			<div class="md:col-span-1 lg:col-span-1 lg:ml-20">
				<h6 class="mb-10 text-black">Menu</h6>
				<ul class="space-y-5">
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Blog post</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>

			<div class="md:col-span-1 lg:col-span-1">
				<h6 class="mb-10 text-black">Utility Pages</h6>
				<ul class="space-y-5">
					<li><a href="#">Start Here</a></li>
					<li><a href="#">Styleguide</a></li>
					<li><a href="#">Password Protected</a></li>
					<li><a href="#">404 Not Found</a></li>
					<li><a href="#">Licenses</a></li>
				</ul>
			</div>

			
			<div class="md:col-span-2 lg:col-span-1">
				<h6 class="mb-10 text-black font-inter-bold">Subscribe to our newsletter</h6>
				<p>Lorem ipsum dolor sit amet consectetur adipiscing elit am dolor sit.</p>
				<form action="#" method="POST" class="mt-10">
					<input id="newsletter-email" type="email" required placeholder="Enter your email"
							class="px-6 py-3 rounded-md focus:outline-none text-gray-placeholder bg-primary border border-primary w-3/4 md:w-full">
						<button type="submit" class="custom-button primary-button mt-5">
							Subscribe
						</button>
				</form>
			</div>
		</div>
	</div>
</footer>    

<?php wp_footer(); ?>
</body>
</html>
