<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('DELETE')
        <h2 class="font-bold text-lg">{{ $job->title }}</h2>
        <p class="text-sm">This job pays {{ $job->salary }} per year.</p>

        @can('edit', $job)
            <div class="flex justify-end gap-2 items-center">
                <p>
                    <x-button href="/jobs/{{ $job->id }}/edit"
                        class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 border border-blue-700 rounded cursor-pointer">Edit
                        Job</x-button>
                </p>
                <p>
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-4 border border-blue-700 rounded cursor-pointer">Delete
                        Job</button>
                </p>
            </div>
        @endcan
    </form>
</x-layout>