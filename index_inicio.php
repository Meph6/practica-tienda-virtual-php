<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de camisas</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- CDN livewire -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <!-- Inicio cabecera-->
    <header id="cabecera" class="flex items-center h-44 bg-yellow-700 bg-opacity-50">
        <img class="w-32 h-36 m-4 p-4" src="./assets/img/logo.png" alt="logo">
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
            <div class="bg-white shadow-xl">
                <h1 class="py-4 text-lg font-bold hover:text-yellow-900 uppercase">Productos destacados</h1>
            </div>
            <div class="bg-gray-200 bg-opacity-60 pt-3 grid grid-cols-1 md:grid-cols-3 px-4 gap-5">
                <div class="producto bg-white rounded-3xl shadow-3xl">
                    <div class="mx-36 sm:mx-48 md:mx-5 lg:mx-10 my-4">
                        <img src="./assets/img/logo.png" alt="producto">
                    </div>
                    <h2 class="text-md font-bold">Camisa azul</h2>
                    <p class="mt-0.5 mb-2.5">$ 40.000</p>
                    <a class="block rounded rounded-md bg-yellow-500 hover:bg-yellow-600 text-sm font-bold py-1.5 text-white" href="#">Comprar</a>
                </div>
                <div class="producto bg-white rounded-3xl shadow-3xl">
                    <div class="mx-36 sm:mx-48 md:mx-5 lg:mx-10 my-4">
                        <img src="./assets/img/logo.png" alt="producto">
                    </div>
                    <h2 class="text-md font-bold">Camisa azul</h2>
                    <p class="mt-0.5 mb-2.5">$ 40.000</p>
                    <a class="block rounded rounded-md bg-yellow-500 hover:bg-yellow-600 text-sm font-bold py-1.5 text-white" href="#">Comprar</a>
                </div>
                <div class="producto bg-white rounded-3xl shadow-3xl">
                    <div class="mx-36 sm:mx-48 md:mx-5 lg:mx-10 my-4">
                        <img src="./assets/img/logo.png" alt="producto">
                    </div>
                    <h2 class="text-md font-bold">Camisa azul</h2>
                    <p class="mt-0.5 mb-2.5">$ 40.000</p>
                    <a class="block rounded rounded-md bg-yellow-500 hover:bg-yellow-600 text-sm font-bold py-1.5 text-white" href="#">Comprar</a>
                </div>
            </div>
        </div>
        <!-- Fin contenido central-->

        <!-- Inicio barra lateral-->
        <aside id="lateral">
            <div id="login" class="text-center rounded rounded-sm mt-5 lg:mt-0 bg-yellow-700 bg-opacity-75">
                <h3 class="text-white text-bold text-xl border-b-4 border-yellow-500 py-2 bg-gray-900 bg-opacity-75">Entra a esta web</h3>
                <form action="#" method="post" class="border-b-2 border-yellow-900">
                    <div class="my-4 mx-1">
                        <label class="block font-bold my-2 text-lg text-yellow-900" for="email">Correo electrónico</label>
                        <input class="rounded rounded-md p-1" type="email" name="email" placeholder="example@gmail.com" autofocus required>
                    </div>
                    <div class="my-4">
                        <label class="block font-bold my-2 text-lg text-yellow-900" for="pwd">Contraseña</label>
                        <input class="rounded rounded-md p-1" type="password" name="pwdd" placeholder="******" required>
                    </div>
                    <button class="mb-3 bg-yellow-700 hover:bg-yellow-900 text-white p-2 rounded-xl" type="submit">Ingresar</button>
                </form>
                <ul class="py-5 pl-5 list-disc list-inside underline text-left text-lg text-yellow-900 text-semibold">
                    <li>
                        <a class="hover:text-yellow-700" href="#">Tus pedidos</a>
                    </li>

                    <li>
                        <a class="hover:text-yellow-700" href="#">Gestionar pedidos</a>
                    </li>

                    <li>
                        <a class="hover:text-yellow-700" href="#">Gestionar categoría</a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Fin barra lateral-->
    </div>
    <!-- Inicio pie de página -->
    <footer id="footer">
        <div class="mt-8 mb-0 text-center text-white text-lg font-medium py-2 bg-black border-t-4 border-yellow-600">
            <p>Desarrollado por LGB &copy; <?= date('Y') ?></p>
        </div>
    </footer>
    <!-- Fin pie de página -->

</body>

</html>