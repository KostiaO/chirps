<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Upload avatar') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's avatar.") }}
        </p>
    </header>

    <form
        method="POST"
        action="{{ route('avatar.update') }}"
        class="mt-6 space-y-6"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')
        <x-input-label for="avatar_file" :value="__('Browse image')" />
        <x-avatar />
        <input
            type="file"
            name="avatar"
            id="avatar_file"
            value="{{ old("avatar") }}"
            class="w-full text-sm font-medium text-gray-500 bg-gray-100 rounded-md cursor-pointer file:cursor-pointer file:border-0 file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white"
        />
        <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        <x-primary-button>{{ __('Save') }}</x-primary-button>
        <x-session-status
            :status="'avatar-updated-successfully'"
        >
            {{ __("Uploaded") }}
        </x-session-status>
    </form>
</section>
