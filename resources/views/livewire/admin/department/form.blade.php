<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 font-body">
    {{ $department }}
    @if (session()->has('success'))
        <div id="alert-3" class="mx-auto my-5 max-w-2xl flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif
    <form class="mx-auto mt-8 mb-0 max-w-2xl space-y-4" wire:submit.prevent="save">
        <div>
            <label for="title" class="sr-only">title</label>
            <div class="relative">
                <input wire:model.lazy="department.title" type="text"
                    @if ($department) value="{{ $department['title'] }}" @endif
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                    placeholder="{{ __('Enter title') }}" />
                @error('department.title')
                    <div class="text-red-500 text-sm pt-2">* {{ __($message) }}</div>
                @enderror
            </div>
        </div>
        <div>
            <label for="description" class="sr-only">{{ __('description') }}</label>
            <div class="relative">
                <textarea wire:model.lazy="department.description"
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm h-28"
                    placeholder="{{ __('Enter description') }}">
@if ($department)
{{ $department['description'] }}
@endif
                </textarea>
                @error('department.description')
                    <div class="text-red-500 text-sm pt-2">* {{ __($message) }}</div>
                @enderror

            </div>
        </div>
        <div class="bg-slate-50 rounded-lg">
            <label for="department" class="sr-only">{{ __('parent department') }}</label>
            <div class="relative">
                <livewire:autocomplete.department :department="$parent"
                    :wire:key="$parent ? 'autocomplete-department-'.$parent->id : 'new-department-parent'" />
                @error('department.department_id')
                    <div class="text-red-500 text-sm pt-2">* {{ __($message) }}</div>
                @enderror

            </div>
        </div>
        <div class="bg-yellow-50 rounded-lg ">
            <label for="department" class="sr-only">{{ __('admin of department') }}</label>
            <div class="relative">
                <livewire:autocomplete.user :user="$user"
                    :wire:key="$user ? 'autocomplete-user-'.$user->id : 'new-user-admin'" />
                @error('department.user_id')
                    <div class="text-red-500 text-sm pt-2">* {{ __($message) }}</div>
                @enderror

            </div>
        </div>

        <div class="flex items-center justify-between pt-10">
            <p class="text-sm text-gray-500">
                <a class="hover:scale-110  hover:text-orange-400 duration-100" href="">{{ __('reset') }}</a>
            </p>

            <button type="submit"
                class="ml-3 font-body inline-block rounded-lg shadow-blue-500 shadow-2xl hover:shadow-blue-100 hover:ring-4 hover:ring-emerald-200 hover:shadow-inner hover:font-black hover:shadow-lg hover:scale-110 duration-200  bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                {{ __('Submit') }}
            </button>
        </div>
    </form>

</div>
