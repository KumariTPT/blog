<section class="space-y-6">

    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>
        <p class="text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-4">
        @csrf
        @method('patch')

        <div class="form-control w-full">
            <label class="label" for="name">
                <span class="label-text">{{ __('Name') }}</span>
            </label>
            <input 
                id="name" 
                name="name" 
                type="text" 
                class="input input-bordered w-full" 
                :value="old('name', $user->name)" 
                required 
                autofocus 
                autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="form-control w-full">
            <label class="label" for="email">
                <span class="label-text">{{ __('Email') }}</span>
            </label>
            <input 
                id="email" 
                name="email" 
                type="email" 
                class="input input-bordered w-full" 
                :value="old('email', $user->email)" 
                required 
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}
                    <button 
                        form="send-verification" 
                        class="underline text-blue-600 hover:text-blue-800">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary">
                {{ __('Save') }}
            </button>
            
            @if (session('status') === 'profile-updated')
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
