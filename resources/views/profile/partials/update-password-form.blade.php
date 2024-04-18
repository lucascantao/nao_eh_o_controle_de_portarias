<section>
    <header>
        <h2>
            Atualizar Senha
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Para sua segurança, garanta que sua conta possua uma senha longa e aleatória.
        </p>
    </header>

    @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="alert alert-success"
                >Senha Atualizada com sucesso</p>
            @endif

    <form method="post" action="{{ route('password.update') }}" class="mt-6">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password">Senha Atual</label>
            <input id="update_password_current_password" name="current_password" type="password" class="mt-1 form-control" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <label for="update_password_password">Nova Senha</label>
            <input id="update_password_password" name="password" type="password" class="mt-1 form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <label for="update_password_password_confirmation">Cofirmar Senha</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary mt-2">Atualizar Senha</button>
        </div>
    </form>
</section>
