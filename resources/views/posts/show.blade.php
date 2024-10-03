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
        </div>
    </div>
</x-app-layout>