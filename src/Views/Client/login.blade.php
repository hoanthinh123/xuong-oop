<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @include('layouts.partials.head')

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
</head>

<body>

<header>

@include('layouts.partials.nav')

</header>

        <main class="bg-gray-600 flex items-center justify-center py-16 mt-4">
            <div class="bg-white p-8 rounded shadow-md w-2/5">
                <h2 class="text-2xl font-bold mb-4">Login</h2> 
                @if (!empty($_SESSION['error']))
                <div class="alert alert-warning mt-3 mb-3 text-red-700 font-medium">
                    {{ $_SESSION['error'] }}
                </div>

                @php
                unset($_SESSION['error']);
                @endphp
                @endif
                <form action="{{ url('handle-login') }}" method="POST">
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">email</label>
                        <input type="text" id="email" name="email" class="border rounded px-3 py-2 w-full focus:outline-none focus:border-blue-500" placeholder="Your email">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">password</label>
                        <input type="password" id="password" name="password" class="border rounded px-3 py-2 w-full focus:outline-none focus:border-blue-500" placeholder="Your password">
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
                        <a href="#" class="text-sm text-blue-500 hover:text-blue-700">Forgot password?</a>
                    </div>
                </form>
            </div>
        </main>
        @include('layouts.partials.footer')

</body>

</html>