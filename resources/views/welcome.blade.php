<x-layout_scpel>


    <section class="max-w-screen-xl items-center h-[100vh] justify-between mx-auto">
        @include('partials.threads')

        <!-- Main Content (right div) -->
        <div class="flex-1 h-full items-center justify-center relative">

            <!-- Main Content top view - BEGIN -->
            <div class="flex top-0 w-full h-16 z-10 text-center ml-4">
                <!-- Mobile side bar toggle btn -->
                <div id="side_panel_reveal_2" class="hidden mr-8 m-auto flex" style="width: 200px; height: 30px;">
                    <button type="button" onclick="toggleSidePanel()"
                        class="ml-0 py-1 px-8 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">S.Panel</button>
                </div>
                <div class="w-full flex">
                    <p class="mt-auto mb-auto text-xl text-gray-500">We are so Excited to hear from you!</p>
                </div>
                <div class="m-auto flex mr-4" style="width: 300px; height: 30px;">
                    {{-- <a > --}}
                    <button type="button" onclick="window.location.href='{{ route('create.thread') }}'"
                        class="m-auto mr-0 py-1 px-8 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Create
                        Post</button>
                    {{-- </a> --}}
                </div>
            </div>
            <!-- Main Content top view - END -->





            <!-- Content for the main content area -->
            <div class="m-auto ml-4 mt-2 h-screen custom-scrollbar pb-20 text-justify">


                @if (isset($thread))
                    <!-- Header Div -->

                    <!-- Original Post -->
                    <div id="thread" class="border border-4 mb-4 border-gray-500">
                        <!-- Header Div -->
                        <div id="thread_2" class="h-10 flex justify-between w-full bg-gray-200">
                            <div class="flex m-2">
                                <p>SUBJECT:</p>
                                <p class="pl-4">{{ $thread->subject }}</p>
                            </div>
                            <div class="flex m-2">
                            </div>
                        </div>

                        <div id="thread_3" class="h-10 hidden flex justify-between w-full bg-gray-200">
                            <div class="flex m-2">
                                <p>SUB:</p>
                                <p class="pl-4">{{ $thread->subject }}</p>
                            </div>

                            <div class="flex m-2">
                                <p class="pr-4">5 hours ago</p>
                                <div class="flex pr-4">
                                    <img id="like_img_1" style="cursor: pointer; max-width: 60px;"
                                        src="{{ asset('./icons8-like.gif') }}">
                                    <p class="m-auto pl-1">25</p>
                                </div>
                            </div>
                        </div>

                        <div id="thread_4" class="h-15 hidden flex justify-between w-full bg-gray-200">
                            <ul role="list" class="divide-y ml-2 w-full divide-gray-200 dark:divide-gray-700">
                                <li class="py-1 cursor-pointer">
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

                                            <div class="mt-2 flex justify-between w-full pr-2">
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    by {{ $thread->firstname }} {{ $thread->lastname }}
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    1 day ago
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex ">
                                            <img class="ml-2 mr-2" style="cursor: pointer; max-width: 30px;"
                                                src="{{ asset('./icons8-reply-arrow.gif') }}">
                                            <img class="mr-2" style="cursor: pointer; max-width: 40px;"
                                                src="{{ asset('./icons8-delete-shield.gif') }}">





                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Inner Flex Container -->
                        <div id="thread_5" class="flex  w-full">
                            <!-- First Inner Div (Narrower) -->
                            <div id="thread_6" class="p-4 w-40 bg-gray-100">
                                <div id="thread_7" class="w-full text-center">
                                    <h1>{{ $thread->firstname }} {{ $thread->lastname }}</h1>
                                    {{-- <div class="border border-4 p-2"> --}}
                                    <img style=""
                                        src="https://ui-avatars.com/api/?name={{ $thread->firstname }}+{{ $thread->lastname }}&background=random">
                                    {{-- </div> --}}
                                    <div class="flex mt-2">
                                        <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-delete-shield.gif') }}">
                                        <p class="m-auto">Bann User</p>
                                    </div>
                                </div>

                                <div id="thread_6" class="mt-20">
                                    <div onclick="reply_thread()" class="flex cursor-pointer">
                                        <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-reply-arrow.gif') }}">
                                        <p class="m-auto">Reply</p>
                                    </div>
                                    <div class="flex mt-1">
                                        <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-github.gif')}}">
                                        <p class="m-auto">Github</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Inner Div (Takes Remaining Space) -->
                            <div class="w-full p-4 bg-white">
                                <div>
                                    {{-- {{ $thread->message }} --}}
                                    {!! nl2br(e($thread->message)) !!}

                                </div>
                            </div>
                        </div>

                        <div id="thread_7" class="h-10 flex justify-between w-full bg-gray-200">
                            <div class="flex m-2">
                                <p>{{ $thread->created_at }} </p>
                                <p class="pl-8">5 hours ago</p>
                            </div>

                            <div class="flex m-2">
                                <div id="reply_l1" onclick="reply_thread()" class="flex mr-4 cursor-pointer">
                                    <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-reply-arrow.gif') }}">
                                    <p class="pl-1 m-auto">Reply</p>
                                </div>
                                <div class="flex mr-4">
                                    <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-github.gif') }}">
                                    <p class="pl-1 m-auto">Github</p>
                                </div>
                                <div id="like_l3" class="flex pr-4">
                                    <img style="cursor: pointer; max-width: 60px;" src="{{ asset('./icons8-like.gif') }}">
                                    <p class="m-auto pl-1">25 Likes</p>
                                </div>
                                <div class="flex">
                                    <img style="cursor: pointer;" src="{{ asset('./icons8-share.gif') }}">
                                    <p class="pl-1 m-auto">Share Post</p>
                                </div>
                            </div>
                        </div>
                    </div>













                    <!-- Editor -->
                    <div id="reply_thread_iu" class="hidden mb-10">


                        <div id="thread" class="border border-4 mb-4 border-gray-500">
                            <!-- Header Div -->
                            <div id="thread_2" class="h-10 flex justify-between w-full bg-gray-200">
                                <div class="flex m-2">
                                    <p>SUBJECT:</p>
                                    <p class="pl-4">{{ $thread->subject }}</p>
                                </div>

                            </div>

                            <div id="thread_3" class="h-10 hidden flex justify-between w-full bg-gray-200">
                                <div class="flex m-2">
                                    <p>SUB:</p>
                                    <p class="pl-4">{{ $thread->subject }}</p>
                                </div>

                                <div class="flex m-2">
                                    <p class="pr-4">5 hours ago</p>
                                    <div class="flex pr-4">
                                        <img id="like_img_1" style="cursor: pointer; max-width: 60px;"
                                            src="{{ asset('./icons8-like.gif') }}">
                                        <p class="m-auto pl-1">25</p>
                                    </div>
                                </div>
                            </div>

                            <div id="thread_4" class="h-15 hidden flex justify-between w-full bg-gray-200">
                                <ul role="list" class="divide-y ml-2 w-full divide-gray-200 dark:divide-gray-700">
                                    <li class="py-1 cursor-pointer">
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

                                                <div class="mt-2 flex justify-between w-full pr-2">
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        by {{ $thread->firstname }} {{ $thread->lastname }}
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        1 day ago
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex ">
                                                <img class="ml-2 mr-2" style="cursor: pointer; max-width: 30px;"
                                                    src="{{ asset('./icons8-reply-arrow.gif')}}">
                                                <img class="mr-2" style="cursor: pointer; max-width: 40px;"
                                                    src="{{ asset('./icons8-delete-shield.gif') }}">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Inner Flex Container -->
                            <div id="thread_5" class="flex  w-full">
                                <!-- First Inner Div (Narrower) -->
                                <div id="thread_6" class="p-4 w-40 bg-gray-100">
                                    <div id="thread_7" class="w-full text-center">
                                        <h1>User Name</h1>
                                        {{-- <div class="border border-4 p-2"> --}}
                                        <img style=""
                                            src="https://ui-avatars.com/api/?name={{ $thread->firstname }}+{{ $thread->lastname }}&background=random">
                                        {{-- </div> --}}
                                        <div class="flex mt-2">
                                            <img style="cursor: pointer; max-width: 30px;"
                                                src="{{ asset('./icons8-delete-shield.gif') }}">
                                            <p class="m-auto">Bann User</p>
                                        </div>
                                    </div>

                                    <div id="thread_6" class="mt-20">

                                        <div class="flex mt-1">
                                            <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-github.gif') }}">
                                            <p class="m-auto">Github</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Second Inner Div (Takes Remaining Space) -->
                                <div class="w-full p-4 bg-white">
                                    <div>
                                        {{-- {{ $thread->message }} --}}
                                        {!! nl2br(e($thread->message)) !!}

                                    </div>
                                </div>
                            </div>

                            <div id="thread_7" class="h-10 flex justify-between w-full bg-gray-200">
                                <div class="flex m-2">
                                    <p>{{ $thread->created_at }} </p>
                                    <p class="pl-8">5 hours ago</p>
                                </div>

                                <div class="flex m-2">

                                    <div class="flex mr-4">
                                        <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-github.gif') }}">
                                        <p class="pl-1 m-auto">Github</p>
                                    </div>
                                    <div id="like_l3" class="flex pr-4">
                                        <img style="cursor: pointer; max-width: 60px;" src="{{ asset('./icons8-like.gif') }}">
                                        <p class="m-auto pl-1">25 Likes</p>
                                    </div>
                                    <div class="flex">
                                        <img style="cursor: pointer;" src="{{ asset('./icons8-share.gif') }}">
                                        <p class="pl-1 m-auto">Share Post</p>
                                    </div>
                                </div>
                            </div>
                        </div>





                        @include('partials.reactionOfThread')
                    </div>
                @else
                    <p>No thread found.</p>
                @endif


                @unless ($reactions->isEmpty())

                    @foreach ($reactions as $reaction)
                        @php $id = $reaction->id @endphp
                        <!-- Original Post -->
                        <div id="thread" class="border border-4 mb-4 border-gray-500">
                            <!-- Header Div -->
                            <div id="thread_2" class="h-10 flex justify-between w-full bg-gray-200">
                                <div class="flex m-2">
                                    <p>RE: to</p>
                                    <p class="pl-4">{{ $reaction->name_reacted_to }} </p>
                                </div>
                                <div class="flex m-2">

                                    @auth
                                    <form action="{{ route('delete.reaction', $id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                       <button type="submit">
                                        <img style="cursor: pointer;" src="{{ asset('./icons8-delete-button.gif') }}">
                                       </button>
                                    </form>
                                @endauth
                                </div>
                            </div>
                        <br>
                            <div id="thread_3" class="h-10 hidden flex justify-between w-full bg-gray-200">
                                <div class="flex m-2">
                                    <p>RE:</p>
                                    <p class="pl-4">{{ $reaction->subject }}</p>
                                </div>

                                <div class="flex m-2">
                                    <p class="pr-4">5 hours ago</p>
                                    <div class="flex pr-4">
                                        <img id="like_img_1" style="cursor: pointer; max-width: 60px;"
                                            src="{{ asset("./icons8-like.gif") }}">
                                        <p class="m-auto pl-1">25</p>
                                    </div>


                                    @auth
                                    <form action="{{ route('delete.reaction', $id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                       <button type="submit">
                                        <img id="del_btn_1" style="cursor: pointer;" src="{{ asset('./icons8-delete-button.gif') }}">
                                       </button>
                                    </form>
                                @endauth
                                </div>
                            </div>

                            <div id="thread_4" class="h-15 hidden flex justify-between w-full bg-gray-200">
                                <ul role="list" class="divide-y ml-2 w-full divide-gray-200 dark:divide-gray-700">
                                    <li class="py-1 cursor-pointer">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full"
                                                    src="https://ui-avatars.com/api/?name={{ $reaction->firstname }}+{{ $reaction->lastname }}&background=random"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0 ms-4">
                                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    {{ $reaction->subject }}
                                                </p>

                                                <div class="mt-2 flex justify-between w-full pr-2">
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        by {{ $reaction->firstname }} {{ $reaction->lastname }}
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        1 day ago
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex ">
                                                <a class="" href="{{ route('reaction.reply', $id) }}">
                                                <img class="ml-2 mr-2" style="cursor: pointer; max-width: 30px;"
                                                    src="{{ asset('./icons8-reply-arrow.gif') }}">
                                                </a>
                                                <img class="mr-2" style="cursor: pointer; max-width: 40px;"
                                                    src="{{ asset('./icons8-delete-shield.gif') }}">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Inner Flex Container -->
                            <div id="thread_5" class="flex  w-full">
                                <!-- First Inner Div (Narrower) -->
                                <div id="thread_6" class="p-4 w-40 bg-gray-100">
                                    <div id="thread_7" class="w-full text-center">
                                        <h1>{{ $reaction->firstname }} {{ $reaction->lastname }}</h1>
                                        {{-- <div class="border border-4 p-2"> --}}
                                        <img style=""
                                            src="https://ui-avatars.com/api/?name={{ $reaction->firstname }}+{{ $reaction->lastname }}&background=random">
                                        {{-- </div> --}}
                                        <div class="flex mt-2">
                                            <img style="cursor: pointer; max-width: 30px;"
                                                src="{{ asset('./icons8-delete-shield.gif') }}">
                                            <p class="m-auto">Bann User</p>
                                        </div>
                                    </div>

                                    @php $id = $reaction->id @endphp

                                    <div id="thread_6" class="mt-20">
                                        <div onclick="reply_thread()" class="flex cursor-pointer">

                                            <a class="flex" href="{{ route('reaction.reply', $id) }}">
                                                <img style="cursor: pointer; max-width: 30px;"
                                                    src="{{ asset('./icons8-reply-arrow.gif') }}">
                                                <p class="pl-4 m-auto">Reply</p>
                                            </a>
                                        </div>
                                        <div class="flex mt-1">
                                            <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-github.gif') }}">
                                            <p class="m-auto">Github</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Second Inner Div (Takes Remaining Space) -->
                                <div class="w-full p-4 bg-white">
                                    <div>
                                        {{-- {{ $reaction->message }} --}}
                                        {!! nl2br(e($reaction->message)) !!}

                                    </div>
                                </div>
                            </div>

                            <div id="thread_7" class="h-10 flex justify-between w-full bg-gray-200">
                                <div class="flex m-2">
                                    <p>{{ $reaction->created_at }} </p>
                                    <p class="pl-8">5 hours ago</p>
                                </div>

                                <div class="flex m-2">
                                    <div id="reply_l1" onclick="reply_thread()" class="flex mr-4 cursor-pointer">


                                        <a class="flex" href="{{ route('reaction.reply', $id) }}">
                                            <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-reply-arrow.gif') }}">
                                            <p class="pl-1 m-auto">Reply</p>
                                        </a>



                                    </div>
                                    <div class="flex mr-4">
                                        <img style="cursor: pointer; max-width: 30px;" src="{{ asset('./icons8-github.gif') }}">
                                        <p class="pl-1 m-auto">Github</p>
                                    </div>
                                    <div id="like_l3" class="flex pr-4">
                                        <img style="cursor: pointer; max-width: 60px;" src="{{ asset('./icons8-like.gif') }}">
                                        <p class="m-auto pl-1">25 Likes</p>
                                    </div>
                                    <div class="flex">
                                        <img style="cursor: pointer;" src="{{ asset('./icons8-share.gif') }}">
                                        <p class="pl-1 m-auto">Share Post</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p> No Reactions Yet!</p>
                @endunless


            </div>
        </div>
        </div>
        </div>
    </section>

    {{-- @include('partials.threads')
    <a href="{{ route('create.thread') }}" class="text-blue-400 hover:underline">Create a thread</a>

    <div class="border border-4 mb-4 border-gray-500">

        @if (isset($thread))
            <!-- Header Div -->


            <div class="h-10 flex justify-between w-full bg-gray-200">
                <p class="m-2">{{ $thread->subject }}</p>

                <p class="m-2">{{ $thread->created_at }}</p>
            </div>

            <!-- Inner Flex Container -->
            <div class="flex  w-full">
                <!-- First Inner Div (Narrower) -->
                <div class="p-4 w-60 bg-gray-100">
                    <div class="w-full">
                        <h1> {{ $thread->firstname }}</h1>
                        <h1> {{ $thread->lastname }}</h1>


                        <div class=" ">
                            <img class=""
                                src="https://ui-avatars.com/api/?name={{ $thread->firstname }}+{{ $thread->lastname }}&background=random">
                        </div>
                    </div>

                    <div class="mt-20">
                        <ul>
                            <li><a>Share Post</a></li>
                            @php $id = $thread->id @endphp





                            <li><a href="{{ route('thread.reply', $id) }}">Reply to Thread</a></li>
                            <li>Github Account</li>
                        </ul>
                    </div>
                </div>

                <!-- Second Inner Div (Takes Remaining Space) -->
                <div class="w-full p-4 bg-white">
                    <p>
                        {{ $thread->message }}

                    </p>
                </div>
            </div>
        @else
            <p>No thread found.</p>
        @endif
    </div>


    @unless ($reactions->isEmpty())

        @foreach ($reactions as $reaction)
            @php $id = $reaction->id @endphp

            <div class="border border-4 mb-4 border-gray-500">
                <!-- Header Div -->

                <div class="h-10 flex justify-between w-full bg-gray-200">
                    <p class="m-2">{{ $reaction->firstname }}</p>

                    <p class="m-2"> Replying to: {{ $reaction->name_reacted_to }}</p>
                    @auth
                        <form action="{{ route('delete.reaction', $id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="del-Reaction" class="text-red-900 ">
                        </form>
                    @endauth
                    <p class="m-2">{{ $reaction->created_at }}</p>
                </div>

                <!-- Inner Flex Container -->
                <div class="flex  w-full">
                    <!-- First Inner Div (Narrower) -->
                    <div class="p-4 w-60 bg-gray-100">
                        <div class="w-full">
                            <h1>{{ $reaction->firstname }}</h1>
                            <h1>{{ $reaction->lastname }}</h1>

                            <div class=" ">
                                <img class=""
                                    src="https://ui-avatars.com/api/?name={{ $reaction->firstname }}+{{ $reaction->lastname }}&background=random">
                            </div>
                        </div>


                        <div class="mt-20">

                            <ul>
                                <li><a>Share Post</a></li>

                                <li><a href="{{ route('reaction.reply', $id) }}">Reply to Reactions</a></li>
                                <li>Github Account</li>
                            </ul>
                        </div>
                    </div>



                    <!-- Second Inner Div (Takes Remaining Space) -->
                    <div class="w-full p-4 bg-white">
                        <p>
                            {{ $reaction->message }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p> No Reactions Yet!</p>
    @endunless




 --}}

</x-layout_scpel>

