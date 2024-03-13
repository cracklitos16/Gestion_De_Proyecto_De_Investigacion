<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="sksda9bgyLiWEpCNEcILb2P3QMxCTGvqpuwOSRwG">
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
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <img src="http://sim.morelia.tecnm.mx/images/itmorelia.png" class="h-0 w-0 lg:w-36 lg:h-36 sm:w-0 sm:h-0" alt="LogoITM" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-3 text-sm text-gray-600 text-center">
                <strong>¿Olvidaste tu contraseña?</strong>
                <br />
                Solo llena los siguientes campos y si todo es correcto, se cambiará tu contraseña para que puedas acceder.
            </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="p-3">
                    <div class="p-1">
                        <div class="relative z-0">
                            <input id="email" name="email" type="email" required autocomplete="email" placeholder=" " class="block py-2.5 px-0 w-full  text-sm text-black bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                            <label for="email" class="absolute text-sm text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo *</label>
                        </div>
                    </div>
                </div>
                <br />
                <div class="p-3">
                    <div class="p-1">
                        <div class="relative z-0">
                            <input id="curp" name="curp" type="text" required autocomplete="curp" placeholder=" " class="block py-2.5 px-0 w-full  text-sm text-black bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                            <label for="curp" class="absolute text-sm text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CURP o RFC *</label>
                        </div>
                    </div>
                </div>
                <br />
                <div class="p-1">
                    <em class="text-sm">
                        <strong class="guinda">NOTA:</strong> En caso de ser docente ingrese su RFC y en caso de ser estudiante, ingrese su CURP
                    </em>
                </div>

                <div class="flex items-center justify-center mt-3">
                    <button type="submit" class="px-4 py-2 bg-white text-blue-900 rounded-full shadow-md border border-blue-900 hover:bg-gray-100 hover:text-blue-900 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Confirmar cambio de contraseña
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
