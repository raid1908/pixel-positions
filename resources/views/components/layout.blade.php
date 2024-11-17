<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="text-white bg-black">
    <header class="flex justify-between items-center px-10 py-4 border-b border-white/10">
        <div class="">
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="">
            </a>
        </div>
        <nav class="space-x-6 font-bold">
            <a href="#">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </nav>
        <div class="">
            <a href="#">Post a Job</a>
        </div>
    </header>
    <main class="mt-10 max-w-[1400px] m-auto">
        {{$slot}}
    </main>
    <footer>

    </footer>
</body>
</html>
