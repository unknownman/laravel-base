            <div x-data="{ show: false, result: @entangle('result'), email: @entangle('email'), user: @entangle('user') }" x-cloak class="inner-shadow bg-yellow-300/5 rounded p-5">
                <label for="email" class="sr-only">{{ __('user') }}</label>

                <div class="relative">
                    <input type="email" x-on:focus="show = true" wire:model="email" @click.outside="show = false"
                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm " :class="show && 'drop-shadow-2xl'"
                        placeholder="{{ __('Enter email of user') }}" />
                    @error('email')
                        <div class="text-red-500 text-sm pt-2">* {{ __($message) }}</div>
                    @enderror

                    @if ($user)
                        <div class="flex flex-row justify-between m-5 ">
                            <p>کاربر انتخابی</p>
                            <span id="badge-dismiss-default"
                                class="inline-flex items-center py-1 px-2 mr-2 text-sm font-medium text-orange-800 bg-orange-100 rounded dark:bg-orange-200 dark:text-orange-800">
                                {{ $user['email'] }}
                                <button wire:click="remove" type="button"
                                    class="inline-flex items-center p-0.5 ml-2 text-sm text-orange-400 bg-transparent rounded-sm hover:bg-orange-200 hover:text-orange-900 dark:hover:bg-orange-300 dark:hover:text-orange-900"
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
                                <div>{{ $item['email'] }}</div>
                            </li>
                        @endforeach

                    </ul>
                </div>

            </div>
