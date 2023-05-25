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
        <main>
            {{-- VIEW OUTPUT --}}
            {{$slot}}
        </main>


        <!-- Footer -->
    <footer class="w-full p-8 bg-platinum fixed bottom-0 flex items-center justify-center mt-24 opacity-90">
        <p>Job Hunt | 2023</p>
    <!-- Post Job Button -->
        <button class="bg-white p-4 mr-4 uppercase font-bold shadow-md absolute right-0 hover:bg-hover">Post Job</button>  
</footer>
</body>
</html>
</html>