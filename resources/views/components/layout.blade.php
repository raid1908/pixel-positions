<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>
<body class="text-white bg-black pb-10">
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

        @auth
            <div class="space-x-3 flex justify-center items-center">
                <div class="">
                    <a href="/jobs/create">Post a Job</a>
                </div>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <x-forms.button>Logout</x-forms.button>
                </form>
            </div>
        @endauth

        @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign up</a>
                <a href="/login">Log in</a>
            </div>
        @endguest

    </header>
    <main class="mt-10 max-w-[75%] m-auto">
        {{$slot}}
    </main>
    <footer>

    </footer>
</body>
</html>
