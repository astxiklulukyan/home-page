<?php get_header(); ?>

<main class="bg-white pt-[118px]">
    <section class="py-12.5"> 
        <div class="container mx-auto 2xl:max-w-(--custom-container) px-3 2xl:px-0">
            <div class="flex flex-col-reverse lg:flex-row lg:items-center">
                <div class="pr-4 text-center mt-10 lg:mt-0 lg:text-left">
                    <h1 class="text-6xl leading-[1.1]">
                        We are the best agency in the world
                    </h1>

                    <p class="text-lg my-8">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>

                    <div class="gap-3.5 flex mt-6 lg:mt-0 flex-wrap justify-center md:justify-normal">
                        <a href="#" class="custom-button primary-button">
                            Start a Project
                        </a>
                        <a href="#" class="custom-button secondary-button">
                            Learn More
                        </a>
                    </div>
                </div>

                <figure class="w-full lg:w-[665px] lg:shrink-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/group-38574.png" class="w-full h-auto" alt="Best agency">
                </figure>
            </div>
        </div>
    </section>

    <section class="bg-secondary-extra-light py-30 text-center">
        <div class="container mx-auto 2xl:max-w-(--custom-container) px-3 2xl:px-0">
            <h6>Services</h6>
            <h2 class="mt-5">We Provide</h2>
            <p class="text-gray-light mt-5 xl:w-[612px] xl:mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus mattis nunc aliquam tincidunt est non. Viverra nec eu.</p>
            
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 min-h-[342px] mt-17">
                <li class="bg-white rounded-sm  place-items-center place-content-center px-6 py-3 h-full shadow-[--card-display]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design.png" alt="Programming" />
                    <h4 class="my-4">Web Design</h4>
                    <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>
                <li class="bg-white rounded-sm  place-items-center place-content-center px-6 py-3 h-full shadow-[--card-display]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui-ux-design.png" alt="UI/UX Design" />
                    <h4 class="my-4">UI/UX Design<h4>
                    <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>
                <li class="bg-white rounded-sm  place-items-center place-content-center px-6 py-3 h-full shadow-[--card-display]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graphic-design.png" alt="Graphic Design" />
                    <h4 class="my-4">Graphics design</h4>
                    <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>
                <li class="bg-white rounded-sm  place-items-center place-content-center px-6 py-3 h-full shadow-[--card-display]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seo.png" alt="Seo Marketing" />
                    <h4 class="my-4">SEO Marketing</h4>
                    <p class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>
            </ul>        
        </div>
    </section>

    <section class="py-42">
        <div class="container mx-auto 2xl:max-w-(--custom-container) px-3 2xl:px-0">
            <div class="flex flex-col lg:flex-row lg:items-center">
                <figure class="w-full lg:w-[686px] lg:shrink-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png" class="w-full h-auto" alt="Best agency">
                </figure>

                <div class="mt-10 text-center lg:mt-0 lg:text-left">                
                    <p class="text-xl">About US</p>
                    <h2 class="my-4">We are a creative agency</h2>
                    <div class="mb-10 text-gray-light space-y-5">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec, luctus sapien vulputate urna tempor euismod adipiscing massa.
                            Volutpat nunc quis dictum consectetur egestas varius. 
                        </p>
                        <p>Ac sagittis tellus, sodales commodo elit, sociis purus. Egestas mauris eget commodo commodo et vel fermentum ultrices.</p>
                    </div>
                    <a href="#" class="custom-button primary-button">
                        More About Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary-extra-light py-30">
        <div class="container mx-auto 2xl:max-w-(--custom-container) px-3 2xl:px-0">
            <p class="text-xl text-center">Meet Our Team</p>
            <h2 class="my-4 text-center">Our Expert Members </h2>
            <p class="mb-20 text-gray-light xl:w-[494px] xl:mx-auto text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam vivamus pretium maecenas amet.</p>     
            
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-17 mb-16 place-items-center">
                <li style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/expert-1.jpg');" class="bg-cover bg-center flex items-end rounded-sm h-[342px] mb-16 lg:mb-0 w-[308px] lg:w-full">
                    <div class="bg-white w-[calc(100%-3rem)] xl:w-[260px] mx-auto p-3 rounded-[4.6px] -mb-16 shadow-[--card-display]">
                        <div class="flex gap-3.5">
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.svg" alt="Facebook">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinterest.svg" alt="Pinterest">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector.svg" alt="Google">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram">
                            </a>
                        </div>
                        <h5 class="mt-4 md:truncate">Jane Cooper</h5>
                        <p class="text-lg text-gray-light my-2">Developer</p>
                    </div>
                </li>
                <li style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/expert-1.jpg');" class="bg-cover bg-center flex items-end rounded-sm h-[342px] mb-16 lg:mb-0 w-[308px] lg:w-full">
                    <div class="bg-white w-[calc(100%-3rem)] xl:w-[260px] mx-auto p-3 rounded-[4.6px] -mb-16 shadow-[--card-display]">
                        <div class="flex gap-3.5">
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.svg" alt="Facebook">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinterest.svg" alt="Pinterest">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector.svg" alt="Google">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram">
                            </a>
                        </div>
                        <h5 class="mt-4 md:truncate">Jane Cooper</h5>
                        <p class="text-lg text-gray-light my-2">Developer</p>
                    </div>
                </li>
                <li style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/expert-1.jpg');" class="bg-cover bg-center flex items-end rounded-sm h-[342px] mb-16 lg:mb-0  w-[308px] lg:w-full">
                    <div class="bg-white w-[calc(100%-3rem)] xl:w-[260px] mx-auto p-3 rounded-[4.6px] -mb-16 shadow-[--card-display]">
                        <div class="flex gap-3.5">
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.svg" alt="Facebook">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinterest.svg" alt="Pinterest">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector.svg" alt="Google">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram">
                            </a>
                        </div>
                        <h5 class="mt-4 md:truncate">Jane Cooper</h5>
                        <p class="text-lg text-gray-light my-2">Developer</p>
                    </div>
                </li>
                <li style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/expert-1.jpg');" class="bg-cover bg-center flex items-end rounded-sm h-[342px] mb-16 lg:mb-0  w-[308px] lg:w-full">
                    <div class="bg-white w-[calc(100%-3rem)] xl:w-[260px] mx-auto p-3 rounded-[4.6px] -mb-16 shadow-[--card-display]">
                        <div class="flex gap-3.5">
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.svg" alt="Facebook">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pinterest.svg" alt="Pinterest">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector.svg" alt="Google">
                            </a>
                            <a href="https://www.pinterest.com" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram">
                            </a>
                        </div>
                        <h5 class="mt-4 md:truncate">Jane Cooper</h5>
                        <p class="text-lg text-gray-light my-2">Developer</p>
                    </div>
                </li>                  
            </ul>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto 2xl:max-w-(--custom-container) px-3 2xl:px-0">
            <h2 class="mb-20 text-black text-center md:text-left">More Projects</h2>

            <ul class="grid grid-cols-1 md:grid-cols-3 gap-4 place-items-center">
                <li class="bg-white p-5 shadow-md rounded-sm max-w-[416px] lg:max-w-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-1.jpg" alt="Medical Website" />
                    <h4 class="mt-6 mb-5 md:truncate">Medical Website</h4>
                    <p class="text-gray-light text-small mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed consectetur malesuada sodales enim viverra odio diam. Nascetur dui elementum, </p>
					<a href="#" class="border-b-2 border-secondary pb-2.5 inline-flex font-inter-semibold text-lg">Read more <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" class="ml-3"/></a>
                </li>
                <li class="bg-white p-5 shadow-md rounded-sm max-w-[416px] lg:max-w-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-1.jpg" alt="Medical Website" />
                    <h4 class="mt-6 mb-5 md:truncate">Medical Website</h4>
                    <p class="text-gray-light text-small mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed consectetur malesuada sodales enim viverra odio diam. Nascetur dui elementum, </p>
                    <a href="#" class="border-b-2 border-secondary pb-2.5 inline-flex font-inter-semibold text-lg">Read more <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" class="ml-3"/></a>
                </li>
                <li class="bg-white p-5 shadow-md rounded-sm max-w-[416px] lg:max-w-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-1.jpg" alt="Medical Website" />
                    <h4 class="mt-6 mb-5 md:truncate">Medical Website</h4>
                    <p class="text-gray-light text-small mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed consectetur malesuada sodales enim viverra odio diam. Nascetur dui elementum, </p>
                    <a href="#" class="border-b-2 border-secondary pb-2.5 inline-flex font-inter-semibold text-lg">Read more <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" class="ml-3"/></a>
                </li>
            </ul>
        </div>
    </section>

    <section class="py-30 bg-secondary-extra-light">
        <div class="container mx-auto 2xl:max-w-(--custom-container) px-3 2xl:px-0">
            <p class="text-xl font-inter-semibold mb-4 text-center">FAQ’S</p>
            <h2 class="text-center mb-20">Find the answers you need</h2>

            <details class="bg-white p-8 rounded-sm shadow-[--card-display] mt-5 lg:w-[956px] mx-auto">
                <summary class="cursor-pointer text-lg font-inter-medium text-primary flex justify-between items-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <span class="transition-transform duration-300"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" class="group-open:rotate-90"></span>
                </summary>
                <p class="mt-5 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus ornare in eget mauris. Porttitor semper sed nisi ac adipiscing vitae. Lobortis imperdiet ornare eleifend nisl ut auctor. Ornare etiam neque elementum mattis ultrices.</p>
            </details>

            <details class="bg-white p-8 rounded-sm shadow-[--card-display] mt-5 lg:w-[956px] mx-auto">
                <summary class="cursor-pointer font-inter-medium text-lg text-primary flex justify-between items-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <span class="transition-transform duration-300"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" class="group-open:rotate-90"></span>
                </summary>
                <p class="mt-5 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus ornare in eget mauris. Porttitor semper sed nisi ac adipiscing vitae. Lobortis imperdiet ornare eleifend nisl ut auctor. Ornare etiam neque elementum mattis ultrices.</p>
            </details>

            <details class="bg-white p-8 rounded-sm shadow-[--card-display] mt-5 lg:w-[956px] mx-auto">
                <summary class="cursor-pointer font-inter-medium text-lg text-primary flex justify-between items-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <span class="transition-transform duration-300"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" class="group-open:rotate-90"></span>
                </summary>
                <p class="mt-5 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus ornare in eget mauris. Porttitor semper sed nisi ac adipiscing vitae. Lobortis imperdiet ornare eleifend nisl ut auctor. Ornare etiam neque elementum mattis ultrices.</p>
            </details>
        </div>
    </section>

    <section class="pt-30"> 
        <div class="container mx-auto 2xl:max-w-(--custom-container) px-3 2xl:px-0">
            <h2 class="mb-6 text-black">Customer testimonials</h2>
            <p class="text-gray-light mb-11">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <article class="bg-white p-8 shadow-md">
                    <div class="mb-6 tracking-tighter">
                        <i class="fas fa-star text-secondary text-lg"></i>
                        <i class="fas fa-star text-[#57B9FB] text-lg"></i>
                        <i class="fas fa-star text-[#9FD5F9] text-lg"></i>
                        <i class="fas fa-star text-[#AEDBF9] text-lg"></i>
                        <i class="fas fa-star text-[#D4E9F6] text-lg"></i>
                    </div>
                    <blockquote class="text-small text-gray-light">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare."
                    </blockquote>
                    <footer class="mt-6 flex items-center gap-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-image.jpg" alt="Customer" class="rounded-full object-cover w-[56px] h-[56px]" />
                        <div>
                            <p class="font-inter-semibold text-primary">Jerome Bell</p>
                            <p class="text-gray-light">Marketing Coordinator</p>
                        </div>
                    </footer>
                </article>
                <article class="bg-white p-8 shadow-md">
                    <div class="mb-6 tracking-tighter">
                        <i class="fas fa-star text-secondary text-lg"></i>
                        <i class="fas fa-star text-[#57B9FB] text-lg"></i>
                        <i class="fas fa-star text-[#9FD5F9] text-lg"></i>
                        <i class="fas fa-star text-[#AEDBF9] text-lg"></i>
                        <i class="fas fa-star text-[#D4E9F6] text-lg"></i>
                    </div>
                    <blockquote class="text-small text-gray-light">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare."
                    </blockquote>
                    <footer class="mt-6 flex items-center gap-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-image.jpg" alt="Customer" class="rounded-full object-cover w-[56px] h-[56px]" />
                        <div>
                            <p class="font-inter-semibold text-primary">Jerome Bell</p>
                            <p class="text-gray-light">Marketing Coordinator</p>
                        </div>
                    </footer>
                </article>
                <article class="bg-white p-8 shadow-md">
                    <div class="mb-6 tracking-tighter">
                        <i class="fas fa-star text-secondary text-lg"></i>
                        <i class="fas fa-star text-[#57B9FB] text-lg"></i>
                        <i class="fas fa-star text-[#9FD5F9] text-lg"></i>
                        <i class="fas fa-star text-[#AEDBF9] text-lg"></i>
                        <i class="fas fa-star text-[#D4E9F6] text-lg"></i>
                    </div>
                    <blockquote class="text-small text-gray-light">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare."
                    </blockquote>
                    <footer class="mt-6 flex items-center gap-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-image.jpg" alt="Customer" class="rounded-full object-cover w-[56px] h-[56px]" />
                        <div>
                            <p class="font-inter-semibold text-primary">Jerome Bell</p>
                            <p class="text-gray-light">Marketing Coordinator</p>
                        </div>
                    </footer>
                </article>
            </div>

            <div class="mt-24 bg-primary flex flex-col lg:flex-row items-center justify-between px-24 py-28 rounded-md">
                <div class="text-center lg:w-[476px] lg:text-left lg:mr-6">
                    <h4 class="text-white mb-6">Do you have a project in mind?</h4>
                    <p class="text-white text-lg">Lorem ipsum dolor sit amet consectetur adipiscing elit amet diam in est pharetra porttitor libero.</p>
                </div>
                
                <div class="gap-4 flex mt-6 lg:mt-0 flex-wrap">
                    <a href="#" class="custom-button primary-button">
                        Let's talk
                    </a>
                    <a href="#" class="custom-button primary-button">
                        Learn more
                    </a>
                </div>
            </div>
        </div>        
    </section>
</main>
	
<?php get_footer(); ?>
