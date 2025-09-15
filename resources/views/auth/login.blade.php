<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-4">
            <div class="pb-2">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mb-4">
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <x-form-input id="email" name="email" value="{{ old('email') }}" type="email" required />
                        <x-form-error name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <x-form-input id="password" name="password" type="password" required />
                        <x-form-error name="password" />
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log In</button>
        </div>
    </form>

</x-layout>