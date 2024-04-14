{{-- <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Scpel - A Systems reflective meta-programming language for AI</title>
    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="../docs/styles.css">

    <script src="//unpkg.com/alpinejs" defer></script>

    <link rel="stylesheet" href="./sheety.css" />
</head>

<body class="h-screen">


    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Scpel</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <x-flash_message  />

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>

                    @auth
                    <li>
                        <form method='POST' action="{{ route('logout') }}" >
                        @csrf
                        <input type="submit" value='logout' class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        </form>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('login')}}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">login</a>
                    </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>


    <section class="max-w-screen-xl items-center h-[100vh] justify-between mx-auto">
        <div class="flex">
            <!-- Side Panel (left div) -->
            <div class="w-1/5 flex flex-col p-2">
                <div class="w-full h-80">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Discussions</h5>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">



                     {{$slot}}



                    </div>
                    <!-- Outer Container with Border -->
                    <div id="message_review" class="border hidden border-4 mb-4 border-gray-500">
                        <!-- Header Div -->
                        <div class="h-10 flex justify-between w-full bg-gray-200">
                            <p class="m-2">Scpel version 1.0.0 rev 10 is out</p>
                            <p class="m-2">5 hours ago</p>
                        </div>

                        <!-- Inner Flex Container -->
                        <div class="flex h-1/2 w-full">
                            <!-- First Inner Div (Narrower) -->
                            <div class="p-4 w-60 bg-gray-100">
                                <div class="w-full">
                                    <h1>Phrunsys Emmasson</h1>
                                    <div class="w-20 bg-red-100 h-20">
                                        <img class="" src="profile.JPG">
                                    </div>
                                </div>

                                <div class="mt-20">
                                    <ul>
                                        <li><a>Share Post</a></li>
                                        <li><a>Reply to Post</a></li>
                                        <li>Github Account</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Second Inner Div (Takes Remaining Space) -->
                            <div class="w-full p-4 bg-white">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore omnis harum aperiam!
                                    Consequuntur qui sed perferendis odio iste, consequatur ipsa ab libero aliquam
                                    tempore doloremque veniam porro odit, ad mollitia sunt nemo. Sequi reprehenderit
                                    animi, cumque molestias placeat, eaque laudantium vero molestiae voluptatibus
                                    doloribus hic blanditiis quod nam quae delectus! Ex modi quae totam delectus! Ut
                                    modi, soluta impedit esse maiores pariatur maxime possimus facilis vitae suscipit
                                    eius veritatis veniam excepturi velit eligendi iure eveniet asperiores corrupti hic.
                                    Laudantium ullam, quam officiis porro omnis fuga magni architecto enim odit dolore
                                    repellat, sed iusto labore, perspiciatis possimus? Laborum repellendus rerum saepe.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script>
        function review_message() {
            var message_review = document.getElementById("message_review");
            if (message_review) {
                message_review.style.display = "block";
            }
        }
    </script>

</body>
 --}}











<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Scpel - A Systems reflective meta-programming language for AI</title>
    <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('./media_screens.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body class="h-screen">
    <!-- Nav bar -->
    <nav class="bg-white dark:bg-gray-900 w-full z-50 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Scpel Forum</span>
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                @auth
                    {{-- <li>
                <form method='POST' action="{{ route('logout') }}" >
                @csrf
                <input type="submit" value='logout' class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                </form>
            </li> --}}

                    <form method='POST' action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">logout
                        </button>
                    </form>
                @else
                    {{-- <li>
                        <a href="{{ route('login') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">login</a>
                    </li> --}}

                    <a href="{{ route('login') }}">
                        <button type="button"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Sign
                            In
                        </button>
                    </a>
                @endauth




                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="https://scpel.org/scpel_settings"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Learn</a>
                    </li>
                    <li>
                        <a href="https://docs.scpel.org/"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Documentation</a>
                    </li>
                    <li>
                        <a href="https://scpel.org/scpel_download"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Downloads</a>
                    </li>
                    <li>
                        <a href="https://scpel.org/scpel_community"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Community</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <x-flash_message />


    {{ $slot }}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script>
        function thread_post_ui() {
            var thread_post = document.getElementById("thread");
            var reply_thread = document.getElementById("reply_thread_iu");
            reply_thread.classList.add("hidden");
            thread_post.classList.remove("hidden");
        }

        function reply_thread() {
            var thread_post = document.getElementById("thread");
            var reply_thread = document.getElementById("reply_thread_iu");
            thread_post.classList.add("hidden");
            reply_thread.classList.remove("hidden");
        }

        function review_message() {
            var message_review = document.getElementById("message_review");
            if (message_review) {
                message_review.style.display = "block";
            }
        }

        function toggleSidePanel() {
            var sidePanel = document.getElementById('mobile_sidePanel');
            if (sidePanel.style.left === '0px') {
                sidePanel.style.left = '-900px'; // Hide the side panel
            } else {
                sidePanel.style.left = '0px'; // Show the side panel
            }
        }
    </script>
</body>
