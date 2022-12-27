<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Han's | Blog</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-slate-400">
    <h1 class="text-3xl font-bold mb-4">Halaman Home</h1>

    <h3 class="text-lg font-semibold mb-2">{{ $name }}</h3>
    <p class="text-md">{{ $email }}</p>
    <img src={{ $image }} alt="" width="200">
</body>

</html>
