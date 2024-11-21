<template>
    <header class="sticky top-0 z-40">
        <div class="top-header bg-[#088178] text-white text-center py-1">
            <p>
                Welcome offer on first Purchase. use code WELCOME24 ti avial
                grap this offer
            </p>
        </div>
        <nav
            class="p-4 bg-[#e3e6f3] text-[#1a1a1a] fixed w-full top-[30px] left-0 right-0 z-50 shadow-[0_5px_15px_rgba(0,0,0,0.06)]"
        >
            <div class="flex justify-between items-center">
                <div class="flex items-center md:pl-8">
                    <i class="text-2xl fas fa-campground"></i>
                    <h1 class="font-serif tracking-wide font-bold text-xl pl-4">
                        Logo
                    </h1>
                </div>
                <div class="md:hidden block absolute top-4 right-8 fixed">
                    <button
                        aria-label="navigation"
                        type="button"
                        class="md:hidden text-[#1a1a1a] transition duration-300 focus:outline-none"
                    >
                        <i class="fas fa-bars text-3xl" id="bars"></i>
                    </button>
                </div>
                <div class="hidden md:flex">
                    <ul class="hidden md:flex">
                        <li class="text-lg pr-8 relative">
                            <a
                                href=""
                                class="transition duration-300 focus:outline-none focus:text-[#088178] focus:underline hover:text-[#088178] font-semibold link-after active"
                                >Home</a
                            >
                        </li>
                        <li class="text-lg pr-8 relative">
                            <a
                                href=""
                                class="transition duration-300 focus:outline-none focus:text-[#088178] focus:underline hover:text-[#088178] font-semibold link-after"
                                >About</a
                            >
                        </li>
                        <li class="text-lg pr-8 relative">
                            <a
                                href=""
                                class="transition duration-300 focus:outline-none focus:text-[#088178] focus:underline hover:text-[#088178] font-semibold link-after"
                                >Blog</a
                            >
                        </li>
                        <li class="text-lg pr-8 relative">
                            <a
                                href=""
                                class="transition duration-300 focus:outline-none focus:text-[#088178] focus:underline hover:text-[#088178] font-semibold link-after"
                                >Contact</a
                            >
                        </li>
                    </ul>
                </div>

                <div class="hidden md:flex">
                    <a href="#"
                        ><i
                            class="fab fa-facebook text-2xl pr-8 transition duration-300 focus:text-[#088178] hover:text-[#088178]"
                        ></i
                    ></a>
                    <a href="#"
                        ><i
                            class="fab fa-linkedin text-2xl pr-8 transition duration-300 focus:text-[#088178] hover:text-[#088178]"
                        ></i
                    ></a>
                    <a href="#"
                        ><i
                            class="fab fa-instagram text-2xl pr-8 transition duration-300 focus:text-[#088178] hover:text-[#088178]"
                        ></i
                    ></a>
                    <a href="#"
                        ><i
                            class="fab fa-twitter text-2xl pr-8 transition duration-300 focus:text-[#088178] hover:text-[#088178]"
                        ></i
                    ></a>
                </div>
            </div>

            <!-- MOBILE MENU -->
            <div
                id="mobileMenu"
                class="hidden flex w-full mx-auto py-8 text-center"
            >
                <div class="flex flex-col justify-center items-center w-full">
                    <a
                        href="#"
                        class="block text-[#1a1a1a] cursor-pointer py-3 transition font-semibold duration-300 focus:outline-none focus:text-[#088178] focus:underline hover:text-[#088178]"
                        >Home</a
                    >
                    <a
                        href="#"
                        class="block text-[#1a1a1a] cursor-pointer mt-1 py-3 transition font-semibold duration-300 focus:outline-none focus:text-[#088178] focus:underline hover:text-[#088178]"
                        >About</a
                    >
                    <a
                        href="#"
                        class="block text-[#1a1a1a] cursor-pointer mt-1 py-3 transition font-semibold duration-300 focus:outline-none focus:text-[#088178] focus:underline hover:text-[#088178]"
                        >Blog</a
                    >
                    <a
                        href="#"
                        class="block text-[#1a1a1a] cursor-pointer mt-1 py-3 transition font-semibold duration-300 focus:outline-none focus:text-[#088178] focus:underline hover:text-[#088178]"
                        >Contact</a
                    >
                </div>
            </div>
        </nav>
    </header>
    <section
        class="banner-section bg-cover bg-center mt-[62px] h-calc-100vh-96px bg-banner-image flex justify-center items-center"
    >
        <div class="banner-inner-block w-full">
            <div
                class="items-slider mb-20 relative overflow-hidden before:content-[''] before:w-full before:h-[5px] before:bg-[#088178] before:bg-opacity-40 before:absolute before:top-1/2"
            >
                <div class="text-white text-5xl">
                    <a href="#">Electronic Items</a>
                </div>
                <div class="text-white text-5xl"><a href="#">Mobiles</a></div>
                <div class="text-white text-5xl">
                    <a href="#">Today offers</a>
                </div>
                <div class="text-white text-5xl">
                    <a href="#">Sports Items</a>
                </div>
            </div>
            <div
                class="all-item-slider relative overflow-hidden before:content-[''] before:w-full before:h-[5px] before:bg-[#088178] before:bg-opacity-40 before:absolute before:top-1/2"
                dir="rtl"
            >
                <div class="text-white text-5xl">
                    <a href="#">Exclusive Collections</a>
                </div>
                <div class="text-white text-5xl"></div>
                <div class="text-white text-5xl">
                    <a href="#">Exclusive Collections</a>
                </div>
                <div class="text-white text-5xl">
                    <a href="#">Exclusive Collections</a>
                </div>
                <div class="text-white text-5xl">
                    <a href="#">Exclusive Collections</a>
                </div>
                <div class="text-white text-5xl">
                    <a href="#">Exclusive Collections</a>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="tabbing-section py-12">
        <div class="tabs-container w-full flex">
            <ul class="tabs grow-1/10">
                <li class="group/item active"  data-tag="one">
                    <div class="cursor-pointer relative my-1 flex items-center justify-between bg-[#f3f3f3] rounded-xl p-4 hover:bg-[#e3e6f3] group-[.active]/item:bg-[#e3e6f3]">
                        <div class="flex gap-4 items-center">
                            <div class="flex-shrink-0">
                                <img class="w-10 h-10 rounded-full object-cover" src="/image/user.jpg" />
                            </div>
                            <div class="w-full text-sm leading-6">
                                <a href="" class="font-semibold text-slate-900">Dev</a>
                                <p class="m-0 text-slate-500">Lorem ipsum</p>
                            </div>
                        </div>
                        <a href="#"
                            class="group/edit invisible relative flex items-center whitespace-nowrap rounded-full py-1 pl-4 pr-3 text-sm text-slate-500 transition hover:bg-slate-200 group-hover/item:visible group-active/item:visible group-[.active]/item:visible">
                            <span class="font-semibold transition group-hover/edit:text-gray-700">Call</span>
                            <svg class="mt-px h-5 w-5 text-slate-400 transition group-hover/edit:translate-x-0.5 group-hover/edit:text-slate-500"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </li>
                <li class="group/item "  data-tag="two">
                    <div class="cursor-pointer relative my-1 flex items-center justify-between bg-[#f3f3f3] rounded-xl p-4 hover:bg-[#e3e6f3] group-[.active]/item:bg-[#e3e6f3]">
                        <div class="flex gap-4 items-center">
                            <div class="flex-shrink-0">
                                <img class="w-10 h-10 rounded-full object-cover" src="/image/user.jpg" />
                            </div>
                            <div class="w-full text-sm leading-6">
                                <a href="" class="font-semibold text-slate-900">Dev</a>
                                <p class="m-0 text-slate-500">Lorem ipsum</p>
                            </div>
                        </div>
                        <a href="#"
                            class="group/edit invisible relative flex items-center whitespace-nowrap rounded-full py-1 pl-4 pr-3 text-sm text-slate-500 transition hover:bg-slate-200 group-hover/item:visible group-active/item:visible group-[.active]/item:visible">
                            <span class="font-semibold transition group-hover/edit:text-gray-700">Call</span>
                            <svg class="mt-px h-5 w-5 text-slate-400 transition group-hover/edit:translate-x-0.5 group-hover/edit:text-slate-500"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </li>
                <li class="group/item "  data-tag="three">
                    <div class="cursor-pointer relative my-1 flex items-center justify-between bg-[#f3f3f3] rounded-xl p-4 hover:bg-[#e3e6f3] group-[.active]/item:bg-[#e3e6f3]">
                        <div class="flex gap-4 items-center">
                            <div class="flex-shrink-0">
                                <img class="w-10 h-10 rounded-full object-cover" src="/image/user.jpg" />
                            </div>
                            <div class="w-full text-sm leading-6">
                                <a href="" class="font-semibold text-slate-900">Dev</a>
                                <p class="m-0 text-slate-500">Lorem ipsum</p>
                            </div>
                        </div>
                        <a href="#"
                            class="group/edit invisible relative flex items-center whitespace-nowrap rounded-full py-1 pl-4 pr-3 text-sm text-slate-500 transition hover:bg-slate-200 group-hover/item:visible group-active/item:visible group-[.active]/item:visible">
                            <span class="font-semibold transition group-hover/edit:text-gray-700">Call</span>
                            <svg class="mt-px h-5 w-5 text-slate-400 transition group-hover/edit:translate-x-0.5 group-hover/edit:text-slate-500"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </li>
                <li class="group/item"  data-tag="four">
                    <div class="cursor-pointer relative my-1 flex items-center justify-between bg-[#f3f3f3] rounded-xl p-4 hover:bg-[#e3e6f3] group-[.active]/item:bg-[#e3e6f3]">
                        <div class="flex gap-4 items-center">
                            <div class="flex-shrink-0">
                                <img class="w-10 h-10 rounded-full object-cover" src="/image/user.jpg" />
                            </div>
                            <div class="w-full text-sm leading-6">
                                <a href="" class="font-semibold text-slate-900">Dev</a>
                                <p class="m-0 text-slate-500">Lorem ipsum</p>
                            </div>
                        </div>
                        <a href="#"
                            class="group/edit invisible relative flex items-center whitespace-nowrap rounded-full py-1 pl-4 pr-3 text-sm text-slate-500 transition hover:bg-slate-200 group-hover/item:visible group-active/item:visible group-[.active]/item:visible">
                            <span class="font-semibold transition group-hover/edit:text-gray-700">Call</span>
                            <svg class="mt-px h-5 w-5 text-slate-400 transition group-hover/edit:translate-x-0.5 group-hover/edit:text-slate-500"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="tab-container flex-grow ">
                <div id="one" class="tab-list">
                    <fieldset>
                        <legend>Published status</legend>

                        <input id="draft" class="peer/draft" type="radio" name="status" checked />
                        <label for="draft" class="peer-checked/draft:text-sky-500">Draft</label>

                        <input id="published" class="peer/published" type="radio" name="status" />
                        <label for="published" class="peer-checked/published:text-sky-500">Published</label>

                        <div class="hidden peer-checked/draft:block">Drafts are only visible to administrators.</div>
                        <div class="hidden peer-checked/published:block">Your post will be publicly visible on your site.</div>
                      </fieldset>
                </div>
                <div id="two" class="tab-list hidden">2</div>
                <div id="three" class="tab-list hidden">3</div>
                <div id="four" class="tab-list hidden">4</div>

            </div>
        </div>
    </section> -->
    <section id="features" class="container mx-auto px-4 pb-14">
        <h2
            class="section-heading text-center text-black my-[50px] text-4xl font-semibold"
        >
            Features
        </h2>
        <div
            class="w-full flex flex-wrap justify-evenly md:justify-between gap-4 xl:gap-14 lg:flex-nowrap"
        >
            <div
                class="py-[20px] px-[5px] border rounded-md text-center shadow-lg cursor-pointer flex flex-col items-center flex-grow xl:basis-[180px] xl:flex-grow-0 ease-in duration-300 hover:scale-110"
            >
                <!-- <img src="/image/features/f1.png" /> -->
                <p
                    class="bg-[#fddde4] text-[#088178] text-sm p-2 rounded-md mt-3 font-semibold"
                >
                    Free shipping
                </p>
            </div>
            <div
                class="py-[20px] px-[5px] border rounded-md text-center shadow-lg cursor-pointer flex flex-col items-center flex-grow xl:basis-[180px] xl:flex-grow-0 ease-in duration-300 hover:scale-110"
            >
                <!-- <img src="/image/features/f2.png" /> -->
                <p
                    class="bg-[#fddde4] text-[#088178] text-sm p-2 rounded-md mt-3 font-semibold"
                >
                    Online order
                </p>
            </div>
            <div
                class="py-[20px] px-[5px] border rounded-md text-center shadow-lg cursor-pointer flex flex-col items-center flex-grow xl:basis-[180px] xl:flex-grow-0 ease-in duration-300 hover:scale-110"
            >
                <!-- <img src="/image/features/f3.png" /> -->
                <p
                    class="bg-[#fddde4] text-[#088178] text-sm p-2 rounded-md mt-3 font-semibold"
                >
                    Save Money
                </p>
            </div>
            <div
                class="py-[20px] px-[5px] border rounded-md text-center shadow-lg cursor-pointer flex flex-col items-center flex-grow xl:basis-[180px] xl:flex-grow-0 ease-in duration-300 hover:scale-110"
            >
                <!-- <img src="/image/features/f4.png" /> -->
                <p
                    class="bg-[#fddde4] text-[#088178] text-sm p-2 rounded-md mt-3 font-semibold"
                >
                    Promotions
                </p>
            </div>
            <div
                class="py-[20px] px-[5px] border rounded-md text-center shadow-lg cursor-pointer flex flex-col items-center flex-grow xl:basis-[180px] xl:flex-grow-0 ease-in duration-300 hover:scale-110"
            >
                <!-- <img src="/image/features/f5.png" /> -->
                <p
                    class="bg-[#fddde4] text-[#088178] text-sm p-2 rounded-md mt-3 font-semibold"
                >
                    Happy Sell
                </p>
            </div>
            <div
                class="py-[20px] px-[5px] border rounded-md text-center shadow-lg cursor-pointer flex flex-col items-center flex-grow xl:basis-[180px] xl:flex-grow-0 ease-in duration-300 hover:scale-110"
            >
                <!-- <img src="/image/features/f6.png" /> -->
                <p
                    class="bg-[#fddde4] text-[#088178] text-sm p-2 rounded-md mt-3 font-semibold"
                >
                    24/7 support
                </p>
            </div>
        </div>
    </section>
    <section id="features-product" class="container mx-auto px-4 pb-14">
        <div class="section-title text-center my-[50px]">
            <h2
                class="section-heading text-center text-black text-4xl mb-4 font-semibold"
            >
                Featured Products
            </h2>
            <p class="text-sm text-[#465b52]">
                Summer Collection New Morden Design
            </p>
        </div>
        <div
            id="pro-collection"
            class="w-full grid grid-cols-1 gap-4 min-[480px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
        >
            <div
                class="product-cart border rounded-3xl shadow-lg cursor-pointer p-4 h-max"
            >
                <!-- <img class="product-image rounded-3xl  mx-auto object-contain h-[300px] " src="image/products/f1.jpg" /> -->
                <span
                    class="product-category text-[16px] text-[#969696] mt-2 inline-block"
                    >adidas</span
                >
                <h4
                    class="product-title overflow-hidden whitespace-nowrap text-ellipsis text-[18px] text-[#292929] font-semibold"
                >
                    Cartoon Astronaut T-Shirts
                </h4>
                <div class="stars">
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                </div>
                <div class="flex justify-between items-center mt-2">
                    <h5 class="price text-[#088178] font-semibold text-[16px]">
                        $78
                    </h5>
                    <a
                        href=""
                        class="p-4 bg-[#c7e9e75e] rounded-full flex justify-center items-center"
                    >
                        <i
                            class="fa fa-shopping-cart text-[#088178]"
                            aria-hidden="true"
                        ></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section
        id="off-banner"
        class="bg-off-banner-image h-[40vh] flex flex-col items-center justify-center mb-12"
    >
        <h4 class="text-[#eaebf0] text-[20px]">Repaire Services</h4>
        <h2
            class="text-[#eaebf0] text-[40px] font-semibold py-4 text-center leading-none"
        >
            Up to 70% Off - All t-Shirts & Accessories
        </h2>
        <a
            href="#"
            class="inline-block mt-3 decoration-0 text-[14px] text-black bg-white rounded-lg py-3 px-9 transition hover:bg-[#088178] hover:text-white"
            >Explore More</a
        >
    </section>
    <section id="new-product" class="container mx-auto px-4 pb-14">
        <div class="section-title text-center my-[50px]">
            <h2
                class="section-heading text-center text-black text-4xl mb-4 font-semibold"
            >
                New Arrivals
            </h2>
            <p class="text-sm text-[#465b52]">
                Summer Collection New Morden Design
            </p>
        </div>
        <div
            id="new-collection"
            class="w-full grid grid-cols-1 gap-4 min-[480px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
        >
            <div
                class="new-product-cart border rounded-3xl shadow-lg cursor-pointer p-4 h-max"
            >
                <img
                    class="new-product-image rounded-3xl mx-auto object-contain h-[300px]"
                    src=""
                />
                <span
                    class="new-product-category text-[16px] text-[#969696] mt-2 inline-block"
                ></span>
                <h4
                    class="new-product-title overflow-hidden whitespace-nowrap text-ellipsis text-[18px] text-[#292929] font-semibold"
                ></h4>
                <div class="stars">
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                    <i
                        class="fa fa-star text-yellow-500"
                        aria-hidden="true"
                    ></i>
                </div>
                <div class="flex justify-between items-center mt-2">
                    <h5
                        class="new-product-price text-[#088178] font-semibold text-[16px]"
                    ></h5>
                    <a
                        href=""
                        class="p-4 bg-[#c7e9e75e] rounded-full flex justify-center items-center"
                    >
                        <i
                            class="fa fa-shopping-cart text-[#088178]"
                            aria-hidden="true"
                        ></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="banners" class="mb-12 container mx-auto px-4">
        <div
            class="top-banner flex justify-center items-center gap-10 flex-wrap"
        >
            <div
                class="bg-cover flex flex-col items-start justify-center bg-banner-1-image h-[300px] flex-grow bg-no-repeat p-6"
            >
                <h4 class="text-[20px] text-[#f8f8f8]">crazy deals</h4>
                <h2 class="text-[46px] text-[#f8f8f8] font-semibold">
                    buy 1 get 1 free
                </h2>
                <p class="text-[16px] m-0 text-[#f8f8f8]">
                    The best classic dress is on sale at coro
                </p>
                <a
                    href="#"
                    class="inline-block mt-3 decoration-0 text-[14px] text-white border py-3 px-9 transition hover:bg-[#088178] hover:border-transparent"
                    >Explore More</a
                >
            </div>
            <div
                class="bg-cover flex flex-col items-start justify-center bg-banner-2-image h-[300px] flex-grow bg-no-repeat p-6"
            >
                <h4 class="text-[20px] text-[#f8f8f8]">spring/summer</h4>
                <h2 class="text-[46px] text-[#f8f8f8] font-semibold">
                    upcomming season
                </h2>
                <p class="text-[16px] m-0 text-[#f8f8f8]">
                    The best classic dress is on sale at coro
                </p>
                <a
                    href="#"
                    class="inline-block mt-3 decoration-0 text-[14px] text-white border py-3 px-9 transition hover:bg-[#088178] hover:border-transparent"
                    >Click more</a
                >
            </div>
        </div>
        <div
            class="bottom-banner flex justify-center items-center gap-10 flex-wrap mt-10"
        >
            <div
                class="bg-cover flex flex-col items-start justify-center bg-banner-3-image h-[200px] flex-grow bg-no-repeat p-6"
            >
                <h2 class="text-[30px] text-[#f8f8f8] font-semibold">
                    buy 1 get 1 free
                </h2>
                <p class="text-[16px] m-0 text-[#771818] font-semibold">
                    The best classic dress is on sale at coro
                </p>
            </div>
            <div
                class="bg-cover flex flex-col items-start justify-center bg-banner-4-image h-[200px] flex-grow bg-no-repeat p-6"
            >
                <h2 class="text-[30px] text-[#f8f8f8] font-semibold">
                    buy 1 get 1 free
                </h2>
                <p class="text-[16px] m-0 text-[#771818] font-semibold">
                    The best classic dress is on sale at coro
                </p>
            </div>
            <div
                class="bg-cover flex flex-col items-start justify-center bg-banner-5-image h-[200px] flex-grow bg-no-repeat p-6"
            >
                <h2 class="text-[30px] text-[#f8f8f8] font-semibold">
                    buy 1 get 1 free
                </h2>
                <p class="text-[16px] m-0 text-[#771818] font-semibold">
                    The best classic dress is on sale at coro
                </p>
            </div>
        </div>
    </section>
    <section
        id="newsletter"
        class="bg-newsletter-image bg-no-repeat bg-[#041e42] mb-12"
    >
        <div class="container mx-auto px-4">
            <div
                class="flex flex-col lg:flex-row items-center md:justify-between gap-4 lg:h-[160px] py-5 lg:p-0"
            >
                <div class="newsletter-text">
                    <h3 class="text-[30px] text-white font-semibold">
                        Sign Up For Newsletters
                    </h3>
                    <p class="m-0 text-[17px] text-[#979797] font-bold">
                        get e-mail updates about out latest shop and
                        <a href="" class="text-[#d8b61d]">special offers</a>
                    </p>
                </div>
                <div class="newsletter-form relative flex">
                    <input
                        type="email"
                        placeholder="Your email address"
                        id="email-address-input"
                        class="bg-[#d1d0d0] w-full h-14 sm:w-72 p-5 rounded-tl-lg rounded-bl-lg"
                    />
                    <button
                        class="w-[180px] bg-[#088178] text-lg rounded-tr-lg rounded-br-lg h-14 cursor-pointer text-white"
                    >
                        Sign Up
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css");
@import url("https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");
@import url("https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css");
</style>

<script setup>
import Custom from "../Layouts/Custom.vue";
defineOptions({ layout: Custom });
</script>
