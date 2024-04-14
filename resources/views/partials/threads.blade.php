<!-- Mobile view thread panel - BEGIN -->

<div class="mobile_container">
    <div class="mobile_side-panel hidden" id="mobile_sidePanel">
        <button class="mobile_close-btn" onclick="toggleSidePanel()">Close</button>
        <div class="w-full h-full">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Discussions</h5>
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">



                    @foreach ($threads as $thread)
                        @php
                            $id = $thread->id;
                        @endphp
                        <a href="{{ route('home', $id) }}">
                            <li class="py-1 hover:bg-gray-100 cursor-pointer">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://ui-avatars.com/api/?name={{ $thread->firstname }}+{{ $thread->lastname }}&background=random"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            {{ $thread->subject }}
                                        </p>

                                        <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                by {{ $thread->firstname }} {{ $thread->firstname }}

                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                {{ $thread->created_at }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        {{-- <img class="w-8 h-8 rounded-full" src="./icons8-delete-button.gif"
                                        alt="Neil image"> --}}
                                        @auth
                                            <form action="{{ route('delete.thread', $id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                {{-- <input type="submit" value="del-Thread" class="text-red-900 "> --}}
                                                <button type="submit">
                                                    <img class="w-8 h-8 rounded-full" src="./icons8-delete-button.gif"
                                                        alt="Neil image">
                                                </button>

                                            </form>
                                        @endauth


                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach

                    <nav class="flex justify-center mt-4">
                        <ul class="flex list-reset border border-gray-300 rounded-sm">
                            <li class="relative block py-2 px-3 leading-tight bg-white border-r border-gray-300">
                                <a class="page-link" href="{{ $threads->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>

                            @for ($i = 1; $i <= $threads->lastPage(); $i++)
                                <li
                                    class="relative block py-2 px-3 leading-tight {{ $threads->currentPage() == $i ? 'bg-blue-500 text-white' : 'bg-white text-blue-500' }}">
                                    <a class="page-link" href="{{ $threads->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li class="relative block py-2 px-3 leading-tight bg-white border-l border-gray-300">
                                <a class="page-link" href="{{ $threads->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Mobile view thread panel - END -->

<div class="mt-10 flex">

    <!-- Side Panel (left div) defaulr - BEGIN -->
    <div id="side_panel" class="w-1/5 flex flex-col p-2">
        <div class="w-full h-full">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Discussions</h5>
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">

                    @foreach ($threads as $thread)
                        @php
                            $id = $thread->id;
                        @endphp
                        <a href="{{ route('home', $id) }}">
                            <li class="py-1 hover:bg-gray-100 cursor-pointer">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://ui-avatars.com/api/?name={{ $thread->firstname }}+{{ $thread->lastname }}&background=random"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            {{ $thread->subject }}
                                        </p>

                                        <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                by {{ $thread->firstname }} {{ $thread->firstname }}
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                {{ $thread->created_at }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        {{-- <img class="w-8 h-8 rounded-full" src="./icons8-delete-button.gif"
                                            alt="Neil image"> --}}

                                        @auth
                                            <form action="{{ route('delete.thread', $id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                {{-- <input type="submit" value="del-Thread" class="text-red-900 "> --}}
                                                <button type="submit">
                                                    <img class="w-8 h-8 rounded-full" src="./icons8-delete-button.gif"
                                                        alt="Neil image">
                                                </button>

                                            </form>
                                        @endauth
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                    <nav class="flex justify-center mt-4">
                        <ul class="flex list-reset border border-gray-300 rounded-sm">
                            <li class="relative block py-2 px-3 leading-tight bg-white border-r border-gray-300">
                                <a class="page-link" href="{{ $threads->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>

                            @for ($i = 1; $i <= $threads->lastPage(); $i++)
                                <li
                                    class="relative block py-2 px-3 leading-tight {{ $threads->currentPage() == $i ? 'bg-blue-500 text-white' : 'bg-white text-blue-500' }}">
                                    <a class="page-link" href="{{ $threads->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li class="relative block py-2 px-3 leading-tight bg-white border-l border-gray-300">
                                <a class="page-link" href="{{ $threads->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </ul>
            </div>
        </div>
    </div>
    <!-- Side Panel (left div) defaulr - END -->





{{--


    @foreach ($threads as $thread)
        @php
            $id = $thread->id;
        @endphp
        <a href="{{ route('home', $id) }}">
            <li class="py-1 hover:bg-gray-100 cursor-pointer">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full"
                            src="https://ui-avatars.com/api/?name={{ $thread->firstname }}+{{ $thread->lastname }}&background=random"alt="Neil image">

                        @auth
                            <form action="{{ route('delete.thread', $id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="del-Thread" class="text-red-900 ">
                            </form>
                        @endauth


                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            {{ $thread->subject }}
                        </p>

                        <div class="mt-2 flex justify-between w-full pl-2 pr-2">
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{ $thread->firstname }} {{ $thread->firstname }}

                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{ $thread->created_at }}
                            </p>
                        </div>


                    </div>
                </div>
            </li>
        </a>
    @endforeach

    <nav class="flex justify-center mt-4">
        <ul class="flex list-reset border border-gray-300 rounded-sm">
            <li class="relative block py-2 px-3 leading-tight bg-white border-r border-gray-300">
                <a class="page-link" href="{{ $threads->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            @for ($i = 1; $i <= $threads->lastPage(); $i++)
                <li
                    class="relative block py-2 px-3 leading-tight {{ $threads->currentPage() == $i ? 'bg-blue-500 text-white' : 'bg-white text-blue-500' }}">
                    <a class="page-link" href="{{ $threads->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            <li class="relative block py-2 px-3 leading-tight bg-white border-l border-gray-300">
                <a class="page-link" href="{{ $threads->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>


    </ul>
</div>
</div>
<div class="w-full h-80">
    <!-- Content for the second half -->
</div>
</div>

<!-- Main Content (right div) -->
<div class="flex-1 h-full items-center justify-center relative">
    <!-- <div class="flex fixed absolute  top-0 bg-opacity-90 w-full h-16 z-10 text-center pl-4 pr-4">
<div class="w-full">
<p id="para_one" class="text-xl text-gray-500 mt-2">We are so Excited to hear from you!</p>
</div>
</div> -->

    <!-- Content for the main content area -->
    <div class="m-auto ml-4 h-screen custom-scrollbar pb-20 text-justify">

        <!-- Editor --> --}}
