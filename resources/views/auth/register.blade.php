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
    <div class="min-w-screen min-h-screen bg-blue-900 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-lg w-full overflow-hidden">
            <div class="md:flex w-full">
                <div class="hidden md:block w-1/2 bg-white py-10 px-10">
                    <img class="h-1/2 mx-auto" src="http://sim.morelia.tecnm.mx/images/logo_tecnm.png" alt="logo" />
                    <br />
                    <img class="w-1/3 mx-auto" src="http://sim.morelia.tecnm.mx/images/itm.png" alt="itm" />
                </div>
                <div class="w-full md:w-1/2 py-9 px-5 md:px-9">
                    <div class="text-center mb-3 lg:mt-12">
                        <h1 class="font-bold text-3xl text-gray-900">REGISTRO PARA ALUMNOS</h1>
                        <p class="text-red-900">
                            Obtén tu CURP:
                            <a href="https://www.gob.mx/curp/" class="underline" target="_blank" rel="noopener noreferrer">
                                <strong>aquí</strong>
                            </a>
                        </p>
                    </div>
                    <div class="flex items-center justify-center lg:mt-9">
                        <form action="http://sim.morelia.tecnm.mx/sign_up" method="post">
                            <input type="hidden" name="_token" value="sksda9bgyLiWEpCNEcILb2P3QMxCTGvqpuwOSRwG">
                            <div class="flex">
                                <div class="w-1/2 px-3 mb-3">
                                    <label for="ncontrol" class="text-xs font-semibold px-1">Número de control:</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="fa-regular fa-address-card"></i>
                                        </div>
                                        <input name="ncontrol" id="ncontrol" type="text" maxlength="10" required class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="N° de control" />
                                    </div>
                                </div>
                                <div class="w-1/2 px-3 mb-3">
                                    <label for="curp" class="text-xs font-semibold px-1">CURP:</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="fa-regular fa-address-card"></i>
                                        </div>
                                        <input name="curp" id="curp" type="text" maxlength="18" required class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="CURP" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-full px-3 mb-3">
                                    <label for="correo" class="text-xs font-semibold px-1">Correo institucional:</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                        <input name="correo" id="correo" type="email" maxlength="90" required class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="ncontrol@morelia.tecnm.mx">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-full px-3 mb-3">
                                    <label for="carrera" class="text-xs font-semibold px-1">Carrera:</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <select name="carrera" id="carrera" required class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="ncontrol@morelia.tecnm.mx">
                                            <option value="">- Seleccione carrera -</option>
                                            <option value="1">INGENIERÍA BIOQUÍMICA</option>
                                            <!-- Otras opciones omitidas por brevedad -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-full px-3 mb-3">
                                    <label for="contrasenia" class="text-xs font-semibold px-1">Contraseña:</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="fa-solid fa-key"></i>
                                        </div>
                                        <input name="contrasenia" id="contrasenia" type="password" maxlength="30" required class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="********">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-full px-3 mt-3 mb-3">
                                    <button type="submit" class="block w-full max-w-xs mx-auto bg-guinda hover:bg-blue-900 hover:scale-110 focus:bg-blue-900 text-white rounded-lg p-3 font-semibold">
                                        <i class="fa-solid fa-horse-head mr-3"></i> REGISTRAR
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
