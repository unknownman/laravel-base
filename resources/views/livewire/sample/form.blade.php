<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 font-body">
    <div class="mx-auto max-w-lg text-center">
        <h1 class="text-2xl font-bold sm:text-3xl">{{ __('Create new sample!') }}</h1>

        <p class="mt-4 text-gray-500">
            {{ __('to create a new sample fill all data') }}
        </p>
    </div>

    <form class="mx-auto mt-8 mb-0 max-w-2xl space-y-4" wire:submit.prevent="save">
        <div>
            <label for="title" class="sr-only">title</label>

            <div class="relative">
                <input wire:model.lazy="sample.title" type="text"
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                    placeholder="{{ __('Enter title') }}" />
                @error('sample.title')
                    <div class="text-red-500 text-sm pt-2">* {{ __($message) }}</div>
                @enderror
            </div>
        </div>

        <div>
            <label for="description" class="sr-only">{{ __('description') }}</label>
            <div class="relative">
                <textarea wire:model.lazy="sample.description"
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm h-28"
                    placeholder="{{ __('Enter description') }}"></textarea>
                @error('sample.description')
                    <div class="text-red-500 text-sm pt-2">* {{ __($message) }}</div>
                @enderror

            </div>
        </div>
        <div>
            <label for="image" class="sr-only">{{ __('image') }}</label>
            <div class="relative">
                <livewire:file.upload :rule="'mimes:png,jpg,jpeg|max:2048'" />
                @error('sample.description')
                    <div class="text-red-500 text-sm pt-2">* {{ __($message) }}</div>
                @enderror

            </div>
        </div>

        <div class="flex items-center justify-between">
            <p class="text-sm text-gray-500">
                <a class="underline" href="">{{ __('reset') }}</a>
            </p>

            <button type="submit"
                class="ml-3 font-body inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                {{ __('Submit') }}
            </button>
        </div>
    </form>
    <div
        class=" max-w-md my-10 mx-auto rounded-2xl bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-1 shadow-xl">
        <a class="block rounded-xl bg-white p-6 sm:p-8" href="">
            <div class="mt-16 sm:pr-8">
                @if (isset($image))
                    <img class="w-full max-h-32 object-cover" src="{{ Storage::url($image->path) }}" />
                @endif
                <h3 class="text-xl font-bold text-gray-900">{{ $sample->title }}</h3>
                <p class="mt-2 text-sm text-gray-500">{{ $sample->description }}
                </p>
            </div>
        </a>
    </div>
</div>
