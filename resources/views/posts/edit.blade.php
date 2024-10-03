<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Request') }}
        </h2>

        <div class="container mx-auto p-6">
            <h1 class="text-2xl font-bold mb-4">Edit Request</h1>
    
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <form action="{{ route('posts.update', $post->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">Content:</label>
                    <textarea id="information" name="information" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" rows="4">{{ old('content', $post->information) }}</textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Request</button>
            </form>
        </div>
    </x-slot>
</x-app-layout>