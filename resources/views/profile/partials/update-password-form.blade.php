<form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('put')

    <div class="row mb-3">
        <label for="update_password_current_password" class="col-md-4 col-lg-3 col-form-label">Contraseña Actual</label>
        <div class="col-md-8 col-lg-9">
            <input name="current_password" type="password" class="form-control" id="update_password_current_password" autocomplete="current-password">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
    </div>

    <div class="row mb-3">
        <label for="update_password_password" class="col-md-4 col-lg-3 col-form-label">Nueva Contraseña</label>
        <div class="col-md-8 col-lg-9">
            <input name="password" type="password" class="form-control" id="update_password_password" autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>
    </div>

    <div class="row mb-3">
        <label for="update_password_password_confirmation" class="col-md-4 col-lg-3 col-form-label">Repite tu nueva contraseña</label>
        <div class="col-md-8 col-lg-9">
            <input name="password_confirmation" type="password" class="form-control" id="update_password_password_confirmation" autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Change Password</button>

        @if (session('status') === 'password-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ __('Saved.') }}</p>
        @endif
    </div>
</form><!-- End Change Password Form -->
