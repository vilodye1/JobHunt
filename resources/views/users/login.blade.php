<x-layout>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
        <p class="mb-4">Login to manage jobs</p>
    </header>
    
    <div class="container w-3/4 bg-platinum mx-auto my-10 p-6 md:w-1/2 lg:w-1/3">
        <form method="POST" action="index.html">
            <div class="mb-6">
                <label for="email" class="inline-block mb-2">Email</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="email" name="email">
            </div>
            <div class="mb-6">
                <label for="name" class="inline-block mb-2">Password</label>
                <input class="border border-gray-200 rounded p-2 w-full" type="password" name="password">
            </div>
            <div class="mb-6">
                <button type="submit" class="text-1xl bg-veryLightBlue rounded py-2 px-4 shadow-md hover:bg-hover hover:text-white transition-all duration-300 md:block">Login</button>
            </div>
            <div class="mt-8">
                <p>Don't have an account yet?
                    <a href="login.html" class=" text-moonstone hover:text-hover ml-1">Register</a>
                </p>
            </div>
        </form>
    </div> 
</x-layout>