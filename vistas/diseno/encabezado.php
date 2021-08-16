<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de camisas</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
    <!-- CDN livewire -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Inicio cabecera-->
    <header id="cabecera" class="flex items-center h-44 bg-yellow-700 bg-opacity-50">
        <img class="w-32 h-36 m-4 p-4" src="<?=base_url?>assets/img/logo.png" alt="logo">
        <a class="uppercase text-2xl md:text-4xl font-bold tracking-wider hover:text-yellow-900" href="index.php">Tienda de ropa</a>
    </header>
    <!-- Fin cabecera-->

    <!-- Inicio menú-->
    <nav id="menu" class="border-b-4 border-yellow-500">
        <ul class="flex flex-wrap items-center bg-black p-4 text-white md:divide-x divide-gray-100 gap-4">
            <li>
                <a class="lg:ml-16 text-sm md:text-base hover:text-yellow-400" href="#">Inicio</a>
            </li>
            <li>
                <a class="ml-4 text-sm md:text-base hover:text-yellow-400" href="#">Categoría 1</a>
            </li>
            <li>
                <a class="ml-4 text-sm md:text-base hover:text-yellow-400" href="#">Categoría 2</a>
            </li>
            <li>
                <a class="ml-4 text-sm md:text-base hover:text-yellow-400" href="#">Categoría 3</a>
            </li>
            <li>
                <a class="ml-24 text-sm md:text-base sm:ml-4 hover:text-yellow-400" href="#">Categoría 4</a>
            </li>
            <li>
                <a class="ml-4 text-sm md:text-base sm:ml-0 md:ml-4 hover:text-yellow-400" href="#">Categoría 5</a>
            </li>
        </ul>
    </nav>
    <!-- Fin menú -->

    <div id="contenido" class="grid grid-cols-1 lg:grid-cols-4">
        <!-- Inicio contenido central-->
        <div id="contenido-central" class="text-center lg:col-span-3">