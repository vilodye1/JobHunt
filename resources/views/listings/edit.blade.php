<x-flash-message />

<x-layout>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Update Listing</h2>
    </header>

    <div class="container w-3/4 bg-platinum mx-auto my-10 p-6 md:w-1/2 lg:w-1/3">
        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="company" class="inline-block mb-2">Company Name</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="text" name="company" value="{{$listing->company}}">

                @error('company')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="inline-block mb-2">Company Email</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="text" name="email" value="{{$listing->email}}">

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="title" class="inline-block mb-2">Job Title</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="text" name="title" value="{{$listing->title}}">

                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="location" class="inline-block mb-2">Location</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="text" name="location" placeholder="Example: Remote, Miami FL, ect." value="{{$listing->location}}">

                @error('location')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="website" class="inline-block mb-2">Website</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="url" name="website" placeholder="https://..." value="{{$listing->website}}">

                @error('website')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Logo" class="inline-block mb-2">Company Logo</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="file" name="logo">

                <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" class="w-26 h-24">

                @error('logo')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="tags" class="inline-block mb-2">Tags <span class="text-xs text-darkGrayishBlue">comma separated</span></label>
                <input class="border border-gray-200 rounded p-2 w-full" type="text" name="tags" placeholder="Example: Laravel, backend, vuejs" value="{{$listing->tags}}">

                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="description" class="inline-block mb-2">Job Description</label>
                <textarea class="border border-gray-200 rounded p-2 w-full h-40" name="description" value="">{{$listing->description}}</textarea>

                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="text-1xl bg-veryLightBlue rounded py-2 px-4 shadow-md hover:bg-hover hover:text-white transition-all duration-300 md:block">Update Post</button>
            </div>
        </form>
    </div>
</x-layout>