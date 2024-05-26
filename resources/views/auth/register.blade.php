<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Matricule -->
        <div>
            <x-label for="matricule" :value="__('Matricule')" />
            <x-input id="matricule" class="block mt-1 w-full" type="text" name="matricule" :value="old('matricule')" required
                autofocus />
            <x-input-error :messages="$errors->get('matricule')" class="mt-2" />
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email_scol_form" :value="__('Email')" />
                <x-input id="email_scol_form" class="block mt-1 w-full" type="email" name="email_scol_form" :value="old('email_scol_form')"
                    required />
                <x-input-error :messages="$errors->get('email_scol_form')" class="mt-2" />
            </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

              <!-- date_naiss_form -->
              <div class="mt-4">
                <x-label for="date_naiss_form" :value="__('date_naiss_form')" />
                <x-input id="date_naiss_form" class="block mt-1 w-full" type="date" name="date_naiss_form"
                    :value="old('date_naiss_form')" required />
                <x-input-error :messages="$errors->get('date_naiss_form')" class="mt-2" />
            </div>

            <!-- date_recrut -->
            <div class="mt-4">
                <x-label for="date_recrut" :value="__('date_recrut')" />
                <x-input id="date_recrut" class="block mt-1 w-full" type="date" name="date_recrut" :value="old('date_recrut')"
                    required />
                <x-input-error :messages="$errors->get('date_recrut')" class="mt-2" />
            </div>

                    <!-- cin_form -->
        <div class="mt-4">
            <x-label for="cin_form" :value="__('cin_form')" />
            <x-input id="cin_form" class="block mt-1 w-full" type="text" name="cin_form" :value="old('cin_form')"
                required />
            <x-input-error :messages="$errors->get('cin_form')" class="mt-2" />
        </div>

        <!-- login -->
        <div class="mt-4">
            <x-label for="login" :value="__('login')" />
            <x-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')"
                required />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- echelle -->
        <div class="mt-4">
            <x-label for="echelle" :value="__('echelle')" />
            <x-input id="echelle" class="block mt-1 w-full" type="text" name="echelle" :value="old('echelle')"
                required />
            <x-input-error :messages="$errors->get('echelle')" class="mt-2" />
        </div>

        <!-- echelon -->
        <div class="mt-4">
            <x-label for="echelon" :value="__('echelon')" />
            <x-input id="echelon" class="block mt-1 w-full" type="text" name="echelon" :value="old('echelon')"
                required />
            <x-input-error :messages="$errors->get('echelon')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
