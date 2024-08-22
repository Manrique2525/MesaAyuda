<form method="post" action="{{ route('profile.destroy') }}" class="mt-6 space-y-6">
    @csrf
    @method('delete')

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
        <div class="col-md-8 col-lg-9">
            <input
                id="password"
                name="password"
                type="password"
                class="form-control"
                placeholder="{{ __('Password') }}"
            />
            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Si confirmas tu cuenta será eliminada permanentemente, y no habrá forma de recuperarla.
            </p>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-danger">Delete Account</button>

        <x-secondary-button x-on:click="$dispatch('close')" class="ms-3">
            {{ __('Cancel') }}
        </x-secondary-button>
    </div>
</form>