<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Go Back
    </a>
    <div class="mx-4">
        <x-card>
            <div class="flex flex-col items-center justify-center text-center">
                
                <h3 class="text-4xl font-bold mb-2">{{$listing->apartment_name}}</h3>
                <div class="text-xl mb-4">{{$listing->apartment_owner}}</div>
                <x-listing-tags :tagsCsv="$listing->tags"/>
                <div class="text-lg my-4">
                    <img class="w-48 mr-6 mb-6" src="{{asset('images/photo-1.jpg')}}" style="width: 50rem;" alt=""/>
                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{$listing->description}}
                        </p>
            
                        <a href="{{$listing->email}}" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-envelope"></i> Contact Employer</a>
                        <a href="https://test.com" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i> {{$listing->apartment_name}}</a>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>