
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="flex flex-col min-h-screen" >

    {{$slot}}

    <footer class="h-6 bg-gray-700 text-white mt-auto w-full justify-end ">
        <div class=" ml-auto w-1/4 text-right font-semibold text-sm">
            <span>&#169;</span>Mayokun laoshe-lawal 2024
       </div>
    </footer>
</body>

</html>