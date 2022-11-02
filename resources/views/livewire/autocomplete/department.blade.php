            <div x-data="{ show: false, result: @entangle('result'), department: @entangle('department') }" x-cloak class="border rounded p-5">
                <label for="title" class="sr-only">{{ __('department') }}</label>

                <div class="relative">
                    <input wire:model="title" type="text" x-on:focus="show = true" wire:model="title"
                        @click.outside="show = false" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm "
                        :class="show && 'drop-shadow-2xl'" placeholder="{{ __('Enter title of department') }}" />
                    @error('title')
                        <div class="text-red-500 text-sm pt-2">* {{ __($message) }}</div>
                    @enderror

                    @if ($department)
                        <div class="flex flex-row justify-between m-5 ">
                            <p>دپارتمان انتخابی</p>
                            <span id="badge-dismiss-default"
                                class="inline-flex items-center py-1 px-2 mr-2 text-sm font-medium text-blue-800 bg-blue-100 rounded dark:bg-blue-200 dark:text-blue-800">
                                {{ $department['title'] }}
                                <button wire:click="remove" type="button"
                                    class="inline-flex items-center p-0.5 ml-2 text-sm text-blue-400 bg-transparent rounded-sm hover:bg-blue-200 hover:text-blue-900 dark:hover:bg-blue-300 dark:hover:text-blue-900"
                                    data-dismiss-target="#badge-dismiss-default" aria-label="Remove">
                                    <svg aria-hidden="true" class="w-3.5 h-3.5" aria-hidden="true" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span wire:click="remove" class="sr-only">Remove badge</span>
                                </button>
                            </span>
                        </div>
                    @endif
                    <ul x-show="show && result" x-cloak
                        class="list border rounded-md shadow p-5  border-spacing-4 divide-slate-100 divide-y-[1px] -bottom-2 relative w-full">
                        @foreach ($result as $item)
                            <li wire:click="select({{ $item['id'] }})"
                                class="flex flex-row items-center justify-between p-3 hover:bg-indigo-100 rounded-lg hover:ring-4 ring-indigo-200/50 ring-offset-1 hover:text-indigo-600 ring-offset-white hover:shadow-lg hover:shadow-indigo-300/50">
                                <div>#
                                    {{ $item['id'] }}
                                </div>
                                <div>{{ $item['title'] }}</div>
                            </li>
                        @endforeach

                    </ul>
                </div>

            </div>
