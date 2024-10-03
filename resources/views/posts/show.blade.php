<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Requests') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-6">
        <a href="{{ url('/posts') }}" class="text-blue-500 hover:underline mb-4 inline-block">← Back to Requests</a>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold text-gray-800">{{ $post->title }}</h1>
            <p class="text-gray-500 text-sm mt-2">{{ $post->created_at->format('F j, Y') }}</p>
            <div class="mt-4 text-gray-700">
                {!! nl2br(e($post->information)) !!}
            </div>
            <br>
            <!-- Edit Button -->
            <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">Edit Request</a>
            <!-- Delete Button -->
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this post?');">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-blue-300">
                    Delete Request
                </button>
            </form>
        </div>
    </div>
</x-app-layout>