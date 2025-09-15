@props(['name'])
@error($name)
    <p class="mt-1 text-sm text-red-600 p-2">{{ $message }}</p>
@enderror