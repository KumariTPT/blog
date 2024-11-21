<section class="space-y-6">

    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Update Password') }}
        </h2>
        <p class="text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('put')

        <div class="form-control w-full">
            <label class="label" for="current_password">
                <span class="label-text">{{ __('Current Password') }}</span>
            </label>
            <input 
                id="current_password" 
                name="current_password" 
                type="password" 
                class="input input-bordered w-full" 
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="form-control w-full">
            <label class="label" for="password">
                <span class="label-text">{{ __('New Password') }}</span>
            </label>
            <input 
                id="password" 
                name="password" 
                type="password" 
                class="input input-bordered w-full" 
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="form-control w-full">
            <label class="label" for="password_confirmation">
                <span class="label-text">{{ __('Confirm Password') }}</span>
            </label>
            <input 
                id="password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="input input-bordered w-full" 
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p 
                    x-data="{ show: true }" 
                    x-show="show" 
                    x-transition 
                    x-init="setTimeout(() => show = false, 2000)" 
                    class="text-sm text-gray-600">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>

    </form>

</section>
