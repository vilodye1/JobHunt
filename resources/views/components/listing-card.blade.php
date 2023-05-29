@props(['listing'])

<div class="container flex flex-col justify-center items-center text-center border mx-auto my-2 p-4 md:max-w-2xl">
    <div>
        <img src="{{asset('images/no-image.png')}}" alt="" class="w-26 h-24">
    </div>
    <div class="flex flex-col">
        <a href="/listings/{{$listing->id}}" class="text-2xl font-bold mt-2">{{$listing->title}}</a>
        <p class="font-bold tracking-wide text-darkGrayishBlue">{{$listing->company}}</p>
        <!-- Tags -->
        <div class="p-2 space-x-2">
            <x-tag :tags="$listing->tags" />
        </div>
        <p>{{$listing->description}}</p>
    </div>
    <p class="text-platinum mt-2">{{$listing->created_at}}</p>
</div>