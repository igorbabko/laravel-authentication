<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Security</title>
</head>

<body class="min-h-screen bg-gray-50">
    <svg class="fixed bottom-0 fill-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill-opacity="1" d="M0,224L48,186.7C96,149,192,75,288,74.7C384,75,480,149,576,160C672,171,768,117,864,101.3C960,85,1056,107,1152,144C1248,181,1344,235,1392,261.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <header class="flex items-center justify-between p-6">
        <a href="{{ route('welcome') }}" class="flex items-center gap-2">
            <svg class="h-10 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
            </svg>
            <span class="text-xl font-black">Security</span>
        </a>
        <div class="flex gap-2">
            <a href="{{ route('dashboard') }}" class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-gray-900 shadow-lg transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">Dashboard</a>
            <form method="post" action="{{ route('logout') }}" class="flex">
                @csrf

                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="rounded-md bg-gray-200 py-2 px-4 font-semibold text-gray-900 shadow-lg transition duration-150 ease-in-out hover:bg-gray-300 hover:shadow-xl focus:shadow-xl focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">Log Out</a>
            </form>
        </div>
    </header>
    <main>
        <div class="m-6 mb-12 rounded-xl p-6 shadow-xl sm:p-10">
            <h1 class="text-3xl font-semibold">Profile</h1>
        </div>
    </main>
</body>

</html>
