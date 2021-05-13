<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" class="w-25 h-25">
            </a>
        </x-slot>
        <h1 style="margin-bottom:15px; font-size:20px">Registo de novo funcionário</h1>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <form method="POST" action="{{url('/inicio/superadmin/stor')}} ">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
            </div>
            <div>
                <x-label for="name" :value="__('Apelido')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="apelido" :value="old('apelido')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Cargo -->
            <div class="mt-4">
                <x-label for="cargo" :value="__('Cargo')" />
                <select id="cargo" name="cargo">
                    <option value="Auxiliar">Auxiliar</option>
                    <option value="Cozinheiro">Cozinheiro</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="contacto" :value="__('Contacto')" />

                <x-input id="contacto" class="block mt-1 w-full" type="number" name="contacto" :value="old('contacto')" required />
            </div>

            <div class="mt-4">
                <x-label for="contacto" :value="__('Data de Nascimento')" />

                <x-input id="data_nascimento" class="block mt-1 w-full" type="date" name="data_nascimento" :value="old('data_nascimento')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <input type="checkbox" onclick="myFunction()"> Ver Password
            </div>


            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Registar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>


<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>