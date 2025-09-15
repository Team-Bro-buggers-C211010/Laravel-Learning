<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-4">
            <div class="pb-2">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mb-4">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>
                        <x-form-input id="first_name" name="first_name" required />
                        <x-form-error name="first_name" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <x-form-input id="last_name" name="last_name" required />
                        <x-form-error name="last_name" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <x-form-input id="email" name="email" type="email" required />
                        <x-form-error name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <x-form-input id="password" name="password" required />
                        <x-form-error name="password" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <x-form-input id="password_confirmation" name="password_confirmation" required />
                        <x-form-error name="password_confirmation" />
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Regsiter</button>
        </div>
    </form>

</x-layout>