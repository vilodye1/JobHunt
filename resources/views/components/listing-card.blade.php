@props(['listing'])

<div class="container flex flex-col justify-center items-center text-center border mx-auto my-2 p-4 md:max-w-2xl">
    <div>
        <img src="../images/no-image.png" alt="" class="w-26 h-24">
    </div>
    <div class="flex flex-col">
        <a href="/listings/{{$listing->id}}" class="text-2xl font-bold mt-2">{{$listing->title}}</a>
        <p class="font-bold tracking-wide text-darkGrayishBlue">{{$listing->company}}</p>
        <!-- Tags -->
        <div class="p-2 space-x-2">
            <x-tag>UI</x-tag>
            <x-tag>Full Stack</x-tag>
            <x-tag>JavaScript</x-tag>
        </div>
        <p>{{$listing->description}}</p>
    </div>
</div>