<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="p-5 bg-white shadow">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('home') }}" class="text-lg font-bold">UMY Tracer</a>
            <a href="#" class="text-green-500">Sign Up</a>
        </div>
    </nav>
    <main>@yield('content')</main>
</body>
</html>
