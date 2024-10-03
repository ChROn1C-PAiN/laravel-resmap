<x-layout>
    @include('partials._hero')

    @include('partials._search')

    <h1 class="mb-4 font-semibold flex items-center justify-center text-center text-4xl text-semibold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-4xl dark:text-black">Latest Accommodation Listings</h1>
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

            @if (count($listings) == 0)
                <p>No Listings Available</p>
            @endif

            @foreach ($listings as $listing )
                <x-listing-card :listing="$listing" />
            @endforeach
        </div>
</x-layout>
