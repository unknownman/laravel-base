        <div class=" h-16 items-center bg-slate-200 z-30 shadow-inner  fixed top-0  right-0 flex justify-around"
            :class="mini ? 'left-16' : 'left-0'" x-if="header">
            <div x-on:click="side = !side" :class="side ? 'bg-indigo-500' : 'bg-indigo-200'"
                class="hover:bg-slate-200 group rounded-br-xl pl-3 grow-0 mr-3 p2  h-full items-center flex pr-3 shadow-xl hover:shadow-inner duration-150 ">
                <svg class="w-6 h-6 text-indigo-400 group-hover:text-indigo-600  " xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75H12a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="grow">
                <div class="flex flex-row">
                    <h1 class="font-black text-blue-800/30 tracking-widest font-light text-2xl">User Dashboard</h1>
                </div>
            </div>

            <div
                class="flex items-center justify-around flex-row h-full items-center max-w-xs bg-indigo-300/5 shadow-inner w-32">
                <div class="p-1"><svg
                        class="w-6 h-6 text-indigo-400 hover:text-indigo-800 cursor-pointer duration-150"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="p-1">
                    <svg class="w-6 h-6 text-indigo-400 hover:text-indigo-800 cursor-pointer duration-150"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-indigo-400 hover:text-indigo-800 cursor-pointer duration-150">
                        <path
                            d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z" />
                        <path
                            d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z" />
                        <path
                            d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z" />
                    </svg>

                </div>
            </div>
        </div>
        </div>
