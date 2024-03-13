<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ITM-SIM</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="http://sim.morelia.tecnm.mx/favicon.ico">
    <link rel="preload" as="style" href="http://sim.morelia.tecnm.mx/build/assets/app.070966e5.css" />
    <link rel="preload" as="style" href="http://sim.morelia.tecnm.mx/build/assets/app.8707c02b.css" />
    <link rel="modulepreload" href="http://sim.morelia.tecnm.mx/build/assets/app.534d1d9e.js" />
    <link rel="stylesheet" href="http://sim.morelia.tecnm.mx/build/assets/app.070966e5.css" />
    <link rel="stylesheet" href="http://sim.morelia.tecnm.mx/build/assets/app.8707c02b.css" />
    <script type="module" src="http://sim.morelia.tecnm.mx/build/assets/app.534d1d9e.js"></script>
</head>
<body>
<div class="font-source text-gray-900 antialiased">
    <div class="w-full h-full flex justify-center align-middle items-center">
        <div class="w-full p-9">
            <div class="w-full hidden md:block rounded-xl" style="background-image: url(http://sim.morelia.tecnm.mx/images/my-background.png); background-size: auto;">
                <br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;
                <div class="w-full flex absolute justify-center">
                    <div class="w-60 z-30">
                        <img src="http://sim.morelia.tecnm.mx/images/logos.png" class="bg-white dark:bg-white rounded-full" />
                    </div>
                </div>
                <p class="p-1.5">&nbsp;</p>
            </div>
            <div class="w-full">
                <div class="w-full block md:hidden">
                    <img src="http://sim.morelia.tecnm.mx/images/logos.png" class="bg-white dark:bg-white rounded-full" />
                </div>
                <div class="p-3 mt-3 flex items-center justify-center align-middle">
                    <form method="POST" action="{{ route('login') }}" class="mt-3">
                        @csrf
                        <div class="flex mt-3 mb-3">
                            <span class="inline-flex items-center px-1.5 text-sm text-gray-900 bg-gray-100 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-regular fa-user"></i>
                            </span>
                            <input type="text" id="email" name="email" placeholder="Usuario o email" required class="rounded-r-lg bg-white border text-gray-900 focus:ring-blue-500 focus:border-cyan-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-cyan-500">
                        </div>
                        <div class="flex mt-3 mb-3">
                            <span class="inline-flex items-center px-1.5 text-sm text-gray-900 bg-gray-100 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-key"></i>
                            </span>
                            <input type="password" id="password" name="password" placeholder="Contraseña" required class="rounded-r-lg bg-white border text-gray-900 focus:ring-blue-500 focus:border-cyan-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-cyan-500">
                        </div>
                        <div class="text-center pt-1 mb-3 pb-1">
                            <button type="submit" class="inline-block px-6 py-2.5 text-white bg-blue-900 font-medium text-xs leading-tight uppercase rounded-lg shadow-lg hover:bg-indigo-900 hover:scale-110 hover:font-bold hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light">
                                <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i> Acceder
                            </button>
                            <br />
                            <a href="{{ route('password.request') }}" class="guinda hover:font-semibold">
                                ¿Olvidaste tu contraseña? Recuperar contraseña <strong class="underline">aquí</strong>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
