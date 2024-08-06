<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    {{-- <?php echo $slot; ?> --}}
    {{-- the same --}}
    {{ $slot }}
</body>

</html>
