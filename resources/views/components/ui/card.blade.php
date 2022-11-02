    <div class=" ">
        <div class="my-10  sm:px-6 lg:px-8 ">
            <div class=" w-full  bg-white rounded-lg border shadow-md sm:p-6 dark:bg-gray-800 dark:border-gray-700">
                <div
                    class="text-slate-100 grow-0 font-black mb-3 mx-0 px-0   md:text-4xl -mt-10 scale-y-150 dark:text-whit animate-pulse">
                    {{ $title }}
                </div>
                <div class="text-sans text-base grow-0 text-slate-300">{{ $description ?? '' }}
                </div>

                <div class="p-6 bg-white ">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
