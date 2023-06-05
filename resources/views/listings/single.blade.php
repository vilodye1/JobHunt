<x-layout>
    <div class="container flex flex-col justify-center items-center text-center border mx-auto my-10 p-4 md:max-w-2xl">
        <div>
            <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" class="w-26 h-24">
        </div>
        <div class="flex flex-col">
            <h1 class="text-2xl font-bold mt-2">{{$listing->title}}</h1>
            <p class="font-bold tracking-wide text-darkGrayishBlue">{{$listing->company}}</p>
            <p class="mb-5">{{$listing->location}}</p>
            <p>{{$listing->description}}</p>
            <a href="mailto:{{$listing->email}}" target="_blank" class="bg-moonstone p-2 rounded text-white my-5 hover:brightness-90">Send Email</a>
            <a href="{{$listing->website}}" target="_blank" class="bg-royalBlue p-2 rounded text-white mb-5 hover:brightness-90">Visit Website</a>
        </div>
    </div>
    <div class="text-center flex gap-x-10 justify-center mx-auto border rounded my-10 p-4 max-w-2xl">
        <a href="/listings/{{$listing->id}}/edit"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
        {{-- DELETE FORM --}}
        <form method="POST" action="/listings/{{$listing->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash-can"></i> Delete</button>
        </form>
    </div>

</x-layout>