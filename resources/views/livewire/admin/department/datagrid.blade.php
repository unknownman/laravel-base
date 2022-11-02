<div class="md:-mx-12">

    <div class="flex flex-col">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden ">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    {{ __('title') }}
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    {{ __('description') }}
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">

                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @foreach ($departments as $department)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="p-4 w-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white flex flex-row justify-between">
                                        <div> {{ $department->title }}</div>
                                    </td>
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $department->description }}</td>
                                    <td class="py-4 px-6 text-sm w-10 flex flex-row justify-around gap-x-2">
                                        <button wire:click="edit({{ $department }})"
                                            class="font-medium text-xs text-blue-400 hover:text-blue-600 hover:bg-blue-50 dark:text-blue-500 hover:border-blue-600 border p-1 rounded-lg border-transparent">Edit</button>
                                        <div x-data="{ open: false }" :class="open ? 'relative overflow-visible' : ''">
                                            <button x-on:click="open = true" :class="open && ''"
                                                class=" text-xs text-red-400 hover:text-red-600 font-semibold hover:bg-red-50 dark:text-red-500 hover:border-red-600 border p-1 rounded-lg border-transparent">Remove</button>
                                            <div class=" absolute bottom-1 right-0  bg-red-50 border-2 border-red-700 rounded-xl  w-48"
                                                x-show="open" x-on:click.outside="open=!open">
                                                <p class="p-3 text-slate-500 py-3 ">{{ __('are you sure?') }}</p>
                                                <div class="p-3 rounded-b-lg flex flex-row justify-between bg-white">
                                                    <button x-on:click="open = false;" class="text-blue-600 font-bold"
                                                        x-on:click="">{{ __('cancel') }}</button>
                                                    <button class="text-slate-400 hover:text-red-600 font-bold"
                                                        wire:click="remove({{ $department->id }})"
                                                        x-on:click="open = false; ">{{ __('Delete IT!') }}</button>
                                                </div>

                                            </div>
                                        </div>
                                        <button
                                            class="font-medium text-xs text-slate-400 hover:text-slate-600 hover:bg-slate-50 dark:text-slate-500 hover:border-slate-600 border p-1 rounded-lg border-transparent">View</button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
