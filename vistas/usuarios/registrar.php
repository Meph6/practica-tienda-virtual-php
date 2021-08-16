<div class="bg-white shadow-xl">
    <h1 class="py-4 text-lg font-bold hover:text-yellow-900 uppercase">Registrarse</h1>
</div>
<?php 
    if(isset($_SESSION['registro'])){
        echo $_SESSION['registro'];
    }
?>
<form action="<?=base_url?>usuario/registro" method="post" class="grid grid-cols-1 bg-white sm:w-1/2 p-8 my-6 mx-10 sm:mx-40 md:mx-56 lg:mx-52 text-left rounded rounded-2xl shadow-xl">
    <label class="block mb-1" for="nombre">Nombre</label>
    <input class="border-none mb-2 p-1 rounded rounded-md focus:ring-2 ring-yellow-500 ring-opacity-50" type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" autofocus >

    <label class="block mb-2" for="apellido">Apellidos</label>
    <input class="border-none p-1 mb-1 rounded rounded-md focus:ring-2 ring-yellow-500 ring-opacity-50" type="text" name="apellido" id="apellido" placeholder="Ingresa tus apellidos" >

    <label class="block mb-2" for="email">Correo electrónico</label>
    <input class="border-none p-1 mb-1 rounded rounded-md focus:ring-2 ring-yellow-500 ring-opacity-50" type="text" name="email" id="email" placeholder="Ingresa tu correo electrónico" >

    <label class="block mb-2" for="pwd">Contraseña</label>
    <input class="border-none p-1 mb-1 rounded rounded-md focus:ring-2 ring-yellow-500 ring-opacity-50" type="password" name="pwd" id="pwd" placeholder="Ingresa tu contraseña" >

    <label class="block mb-2" for="cpwd">Confirmar contraseña</label>
    <input class="border-none p-1 mb-1 rounded rounded-md focus:ring-2 ring-yellow-500 ring-opacity-50" type="password" name="cpwd" id="cpwd" placeholder="Confirma tu contraseña" >

    <button class="bg-green-500 hover:bg-green-800 bg-opacity-75 py-2 mt-4 text-white font-semibold rounded rounded-md" type="submit">Enviar</button>
</form>