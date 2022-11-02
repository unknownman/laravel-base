<div x-data="{ accordion: true }"class="  fixed md:static bg-slate-200 md:bg-transparent z-50 min-h-screen shadow-2xl shadow-blue-800/30  max-h-screen"
    :class="[side ? 'w-72 xl:w-[450px] md:w-[340px]' : 'w-0', header ? 'top-16 md:mt-16' : 'top-0', mini && 'left-16 md:ml-16']">

    <div class="relative overflow-y-scroll scrollbar-hide max-h-screen " x-show="side" x-cloak>
        <!-- When there is no desire, all things are at peace. - Laozi -->
        <div class="grid grid-cols-1">
            <div
                class=" bg-indigo-100/50 rounded-2xl  box-shadow-xl shadow-indigo-900 md:box-shadow-none md:m-0 md:mt-0   max-h-ful scrollbar-hidel overflow-y-auto overflow-x-clip">
                <div class="flex flex-row justify-between items-center">
                    <h1 :class=""
                        class="grow uppercase pl-5 pt-5 pr-5  bg-white/20 border-indigo-100/70 text-xs border-b font-black -tracking-wide pb-5 text-blue-900/20 text-sm shadow-xl shadow-indigo-200/20">
                        {{ __('department management') }}
                    </h1>
                    <i class="p-3 text-indigo-300/40 hover:text-indigo-600 duration-700"
                        x-on:click="accordion = !accordion" x-bind:class="accordion ? 'rotate-180 text-blue-800' : ''">
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0 " fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </i>
                </div>
                <div class=" text-gray-900/50 flex flex-col p-5 ma-1 mb-1 bg-indigo-50/30 duration-1000"
                    x-show="accordion" x-cloak>
                    <ul class=" grid grid-cols-1 gap-y-2 pt-2 p-5">
                        <li
                            class="flex flex-row  gap-4 items-center opacity-50 hover:opacity-100 duration-200 cursor-pointer">
                            <i class="w-6 h-6 text-blue-800 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M5.625 3.75a2.625 2.625 0 100 5.25h12.75a2.625 2.625 0 000-5.25H5.625zM3.75 11.25a.75.75 0 000 1.5h16.5a.75.75 0 000-1.5H3.75zM3 15.75a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75zM3.75 18.75a.75.75 0 000 1.5h16.5a.75.75 0 000-1.5H3.75z" />
                                </svg>

                            </i>
                            <a href="{{ url('admin/departments/') }}"
                                class=" text-slate-600 font-extralight tracking-wider ">{{ __('departments') }}</a>
                        </li>

                        <li
                            class="flex flex-row  gap-4 items-center opacity-50 hover:opacity-100 duration-200 cursor-pointer">
                            <i class="w-6 h-6 text-blue-800 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M19.5 21a3 3 0 003-3V9a3 3 0 00-3-3h-5.379a.75.75 0 01-.53-.22L11.47 3.66A2.25 2.25 0 009.879 3H4.5a3 3 0 00-3 3v12a3 3 0 003 3h15zm-6.75-10.5a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V10.5z"
                                        clip-rule="evenodd" />
                                </svg>

                            </i>
                            <a href="{{ url('admin/departments/create') }}"
                                class=" text-slate-600 font-extralight tracking-wider ">{{ __('add new department') }}</a>
                        </li>
                        <li
                            class="flex flex-row  gap-4 items-center opacity-50 hover:opacity-100 duration-200 cursor-pointer">
                            <i class="w-6 h-6 text-blue-800 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M5.566 4.657A4.505 4.505 0 016.75 4.5h10.5c.41 0 .806.055 1.183.157A3 3 0 0015.75 3h-7.5a3 3 0 00-2.684 1.657zM2.25 12a3 3 0 013-3h13.5a3 3 0 013 3v6a3 3 0 01-3 3H5.25a3 3 0 01-3-3v-6zM5.25 7.5c-.41 0-.806.055-1.184.157A3 3 0 016.75 6h10.5a3 3 0 012.683 1.657A4.505 4.505 0 0018.75 7.5H5.25z" />
                                </svg>


                            </i>
                            <a class=" text-slate-600 font-extralight tracking-wider ">{{ __('site management') }}</a>
                        </li>
                        <li
                            class="flex flex-row  gap-4 items-center opacity-50 hover:opacity-100 duration-200 cursor-pointer">
                            <i class="w-6 h-6 text-blue-800 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                                </svg>

                            </i>
                            <a class=" text-slate-600 font-extralight tracking-wider ">{{ __('user management') }}</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="gap-10 grid grid-cols-1">

                <div class="gap-10 grid grid-cols-1">

                    <div class=" p-8 rounded-xl shadow-lg shadow-neutral-200 ">
                        <!-- header -->
                        <div class="flex justify-between mb-4">
                            <div>
                                <p class="text-lg font-semibold text-neutral-700">{{ __('Total Department') }}</p>
                                <p class="mt-0.5  text-neutral-400 text-sm">{{ __('actives') }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-semibold text-neutral-700">32</p>
                                <p class="mt-0.5  text-neutral-400 text-sm">11</p>
                            </div>
                        </div>

                    </div>

                </div>



            </div>
        </div>

    </div>
</div>
