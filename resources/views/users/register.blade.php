<x-layout>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
        <p class="mb-4">Create an account to post jobs</p>
    </header>

    <div class="container w-3/4 bg-platinum mx-auto my-10 p-6 md:w-1/2 lg:w-1/3">
        <form method="POST" action="/users">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block mb-2">Name</label>
                <input class="border border-gray-200 rounded p-2 w-full"type="text" name="name" value="{{old('name')}}">

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="inline-block mb-2">Email</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="email" name="email" value="{{old('email')}}">

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="inline-block mb-2">Password</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="password" name="password" value="{{old('password')}}">

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="inline-block mb-2">Confirm Password</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="password" name="password_confirmation">

                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="text-1xl bg-veryLightBlue rounded py-2 px-4 shadow-md hover:bg-hover hover:text-white transition-all duration-300 md:block">Sign up</button>
            </div>
            <div class="mt-8">
                <p>Already have an account?
                    <a href="/users/login" class=" text-moonstone hover:text-hover ml-1">Login</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>