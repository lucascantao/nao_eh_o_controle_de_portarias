<section class="space-y-6">
    <header>
        <h2>
            Apagar Conta
        </h2>

        <p>
            Deletar a conta irá apagar todos os seus dados permanetemente.
        </p>
    </header>

    <button
        class="btn btn-outline-danger mb-4"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Deletar Conta</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                Tem certeza que quer deletar sua conta?
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Ao deletar sua conta, todos os seus dados serão permanentemente apagados. Digite sua senha para confirmar a exclusão da conta.
            </p>

            <div class="mt-6">
                <label for="password" >senha</label>

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 form-control"
                    placeholder="Senha"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-3 flex justify-end">
                <button x-on:click="$dispatch('close')" class="btn btn-secondary">
                    Cancelar
                </button>

                <button class="btn ms-3 btn-danger">
                    Excluir minha Conta
                </button>
            </div>
        </form>
    </x-modal>
</section>
