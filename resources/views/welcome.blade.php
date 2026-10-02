<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-center p-10">
    <h1 class="text-3xl font-bold text-blue-600">Halaman Home</h1>
    <p>Nama: {{ $data['nama'] }}</p>
    <p>NIM: {{ $data['nim'] }}</p>
    <br>
    <a href="/about" class="text-blue-500 underline">Ke About</a> | 
    <a href="/contact" class="text-blue-500 underline">Ke Contact</a>
</body>
</html>