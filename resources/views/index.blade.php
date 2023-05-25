<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../dist/output.css">
            <link rel="stylesheet" href="/css/style.css">
            <script src="//unpkg.com/alpinejs" defer></script>
            @vite('resources/css/app.css')
            <title>Job Hunt | Job hunting website</title>

            <style>
                #hero {
                    background-image: url('images/hero-img-overlay.png');
                    background-size:cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    height: 30vh;
                    }

                @media (min-width:1500px) {
                    #hero {
                        background-position-y: 20%;
                        height: 60vh;
                    }
                }
            </style>
        </head>
    <body class="mb-48">
        <!-- Navbar -->
        <nav class="flex flex-row justify-between items-center p-4 md:mx-4">
            <!-- Logo -->
            <div>
                <a href="#" class="font-bold text-2xl md:text-4xl">Job<span class="text-hover">Hunt</span></a>
            </div>    
            <!-- Reg/Login buttons -->
            <div class="flex flex-row mr-6 space-x-10 md:text-lg">
                <a href="register.html" class="hover:text-hover">Register</a>
                <a href="login.html" class="hover:text-hover">Login</a>
            </div>
        </nav>
    <!-- Hero Section -->
    <section id="hero" class="h-1/3">
        <div class="absolute flex flex-col justify-center items-center w-full space-y-2 mt-24 md:top-32 md:mt-5 lg:top-1/4">
            <h2 class="text-5xl font-bold lg:text-7xl">Job<span class="text-white">Hunt</span></h2>
            <p class="lg:text-2xl">Find a job or find a developer all in one place</p><br>
            <!-- Button -->
            <a href="register.html" class="hidden text-1xl bg-veryLightBlue rounded-full py-2 px-4 shadow-md hover:bg-hover hover:text-white transition-all duration-300 md:block">Get Started</a>
        </div>
    </section>
    <!-- Search section -->
    <section id="search" class="bg-platinum">
        <form action="#">
            <div class="p-6 text-center">
              <input type="text" class="w-full rounded-full p-3 focus:outline-none md:w-3/4" placeholder="Search jobs...">  
            </div>
        </form>  
    </section>
    <!-- Listings Section -->
    <section id="listings" class="w-full">
        <h2 class="text-3xl text-center pl-2 font-bold mt-6 lg:text-left lg:ml-8">Browse Current Listings</h2>
        <!-- Listing Container -->
        <div class="grid mx-6 my-2 lg:grid-cols-4 md:grid-cols-2 md:gap-4 lg:mx-10">
            <!-- Left button -->
                <button class="hidden bg-veryLightBlue py-4 px-6 rounded-full absolute right-2 mt-36 lg:block shadow-md hover:bg-hover active:shadow-none transition-all duration-300">></button>
                <!-- right button -->
                <button class="hidden bg-veryLightBlue py-4 px-6 rounded-full absolute left-2 mt-36 shadow-md hover:bg-hover active:shadow-none transition-all duration-300"><</button>
        <!-- Listing 1 -->
        <div class="container flex flex-col justify-center items-center text-center border mx-auto my-2 p-4 md:max-w-2xl">
            <div>
                <img src="../images/no-image.png" alt="" class="w-26 h-24">
            </div>
            <div class="flex flex-col">
                <a href="#" class="text-2xl font-bold mt-2">Laravel Developer</a>
                <p class="font-bold tracking-wide text-darkGrayishBlue">Lara Corps</p>
                <!-- Tags -->
                <div class="p-2 space-x-2">
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">UI</a>
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">Full Stack</a>
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">Vue js</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
            </div>
        </div>
        <!-- Listing 1 -->
        <div class="container flex flex-col justify-center items-center text-center border mx-auto p-4 my-2 md:max-w-2xl">
            <div>
                <img src="../images/no-image.png" alt="" class="w-26 h-24">
            </div>
            <div class="flex flex-col">
                <a href="#" class="text-2xl font-bold mt-2">Laravel Developer</a>
                <p class="font-bold tracking-wide text-darkGrayishBlue">Lara Corps</p>
                <!-- Tags -->
                <div class="p-2 space-x-2">
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">UI</a>
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">Full Stack</a>
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">Vue js</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
            </div>
        </div>
        <!-- Listing 1 -->
        <div class="container flex flex-col justify-center items-center text-center border mx-auto p-4 my-2 md:max-w-2xl">
            <div>
                <img src="../images/no-image.png" alt="" class="w-26 h-24">
            </div>
            <div class="flex flex-col">
                <a href="#" class="text-2xl font-bold mt-2">Laravel Developer</a>
                <p class="font-bold tracking-wide text-darkGrayishBlue">Lara Corps</p>
                <!-- Tags -->
                <div class="p-2 space-x-2">
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">UI</a>
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">Full Stack</a>
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">Vue js</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
            </div>
        </div>
        <!-- Listing 1 -->
        <div class="container flex flex-col justify-center items-center text-center border mx-auto p-4 my-2 md:max-w-2xl">
            <div>
                <img src="../images/no-image.png" alt="" class="w-26 h-24">
            </div>
            <div class="flex flex-col">
                <a href="#" class="text-2xl font-bold mt-2">Laravel Developer</a>
                <p class="font-bold tracking-wide text-darkGrayishBlue">Lara Corps</p>
                <!-- Tags -->
                <div class="p-2 space-x-2">
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">UI</a>
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">Full Stack</a>
                    <a href="#" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:text-powderblue">Vue js</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...</p>
            </div>
        </div>
        </div>
        <a href="#" class="float-right mr-10 text-lg hover:text-hover">View all ></a>
    </section>
    <section id="developer-listing">
        
    </section>
    <!-- Footer -->
    <footer class="w-full p-8 bg-platinum fixed bottom-0 flex items-center justify-center mt-24 opacity-90">
            <p>Job Hunt | 2023</p>
        <!-- Post Job Button -->
            <button class="bg-white p-4 mr-4 uppercase font-bold shadow-md absolute right-0 hover:bg-hover">Post Job</button>  
    </footer>
    </body>
    </html>
</html>
