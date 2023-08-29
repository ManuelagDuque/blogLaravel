<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavbarTemplate</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-lg font-semibold">Blog FemCoders</a>
            <ul class="flex space-x-4">
                <li><a href="/" class="text-white">Home</a></li>
                <li><a href="blog" class="text-white">Blog</a></li>
            </ul>
        </div>
    </nav>
    @yield('navBar')
   
</body>
</html>
