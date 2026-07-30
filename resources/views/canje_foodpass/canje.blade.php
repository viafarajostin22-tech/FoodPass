<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canje - FoodPass</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        fp: {
                            dark: '#273517',
                            light: '#f0ffd8',
                            qr: '#e8facd',
                            orange: '#f97316',
                            orangeHover: '#ea580c'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-fp-light font-sans text-slate-800 antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-56 bg-fp-dark flex flex-col justify-between flex-shrink-0">
        <!-- Logo & Nav -->
        <div>
            <div class="p-6">
                <h1 class="text-white text-2xl font-bold tracking-tight">FoodPass</h1>
                <p class="text-white/50 text-xs font-semibold tracking-widest mt-1">ARTISANAL LEDGER</p>
            </div>
            
            <nav class="mt-4 px-4 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-white/70 hover:bg-white/10 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span class="font-medium text-sm">Inicio</span>
                </a>
                <a href="{{ route('menu-digital') }}" class="flex items-center px-4 py-3 text-white/70 hover:bg-white/10 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    <span class="font-medium text-sm">Menú</span>
                </a>
                <a href="{{ route('historial') }}" class="flex items-center px-4 py-3 text-white/70 hover:bg-white/10 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="font-medium text-sm">Historial</span>
                </a>
                <a href="{{ route('canje') }}" class="flex items-center px-4 py-3 bg-fp-orange text-white rounded-xl shadow-lg shadow-orange-500/20 transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm14 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                    <span class="font-medium text-sm">Canje</span>
                </a>
                <a href="{{ route('metodos-pago') }}" class="flex items-center px-4 py-3 text-white/70 hover:bg-white/10 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    <span class="font-medium text-sm">Pagos</span>
                </a>
                <a href="{{ route('perfil') }}" class="flex items-center px-4 py-3 text-white/70 hover:bg-white/10 rounded-xl transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span class="font-medium text-sm">Perfil</span>
                </a>
            </nav>
        </div>

        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-white/10">
            <div class="flex items-center">
                <div class="w-8 h-8 rounded-full bg-fp-orange text-white flex items-center justify-center font-bold text-sm shadow-sm">
                    {{ substr(auth()->user()->name ?? 'U', 0, 1) }}
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-white">{{ auth()->user()->name ?? 'Usuario' }}</p>
                    <p class="text-xs text-white/50">v2.4.0</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        
        <!-- Header -->
        <header class="h-14 bg-white border-b border-gray-100 flex items-center justify-between px-6 flex-shrink-0 z-10">
            <div class="flex items-center w-96 relative">
                <svg class="w-5 h-5 text-gray-400 absolute left-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" placeholder="Buscar restaurantes..." class="w-full bg-gray-50 text-sm rounded-full pl-10 pr-4 py-2 border-none focus:ring-2 focus:ring-fp-orange/20 outline-none transition-all placeholder-gray-400">
            </div>
            
            <div class="flex items-center space-x-4">
                <button class="text-gray-400 hover:text-fp-orange transition-colors relative">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-fp-orange rounded-full border border-white"></span>
                </button>
                <button class="text-gray-400 hover:text-fp-orange transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </button>
                <div class="h-6 w-px bg-gray-200"></div>
                <div class="flex items-center gap-2 cursor-pointer">
                    <span class="text-sm font-semibold text-gray-700 hidden sm:block">FoodPass</span>
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'User') }}&background=f97316&color=fff" alt="Avatar" class="w-8 h-8 rounded-full border border-gray-100 shadow-sm">
                </div>
            </div>
        </header>

        <!-- Main Scrollable Area -->
        <main class="flex-1 overflow-y-auto p-6 lg:p-10 relative">
            
            <div class="max-w-6xl mx-auto">
                <!-- Page Header -->
                <div class="mb-10">
                    <h1 class="text-3xl lg:text-4xl font-extrabold text-fp-dark tracking-tight mb-3">Canje de Beneficios</h1>
                    <p class="text-gray-600 max-w-2xl text-lg leading-relaxed">
                        Presenta tu código QR único en cualquiera de nuestros establecimientos aliados para redimir tu apoyo alimentario de forma inmediata.
                    </p>
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                    
                    <!-- LEFT COLUMN (Code) -->
                    <div class="lg:col-span-3">
                        <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-gray-100 h-full flex flex-col items-center justify-center relative overflow-hidden">
                            <!-- Background decoration -->
                            <div class="absolute -top-24 -right-24 w-48 h-48 bg-fp-light rounded-full opacity-50 blur-3xl"></div>
                            
                            <!-- QR Container -->
                            <div class="bg-fp-qr p-8 rounded-3xl mb-8 relative z-10 border border-green-200/50 shadow-inner">
                                <div class="bg-white p-4 rounded-xl shadow-sm">
                                    <!-- Fake QR SVG Code -->
                                    <svg class="w-48 h-48" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="100" height="100" fill="white"/>
                                        <!-- Top Left -->
                                        <path d="M10 10H40V40H10V10Z" fill="black"/>
                                        <path d="M15 15H35V35H15V15Z" fill="white"/>
                                        <path d="M20 20H30V30H20V20Z" fill="black"/>
                                        <!-- Top Right -->
                                        <path d="M60 10H90V40H60V10Z" fill="black"/>
                                        <path d="M65 15H85V35H65V15Z" fill="white"/>
                                        <path d="M70 20H80V30H70V20Z" fill="black"/>
                                        <!-- Bottom Left -->
                                        <path d="M10 60H40V90H10V60Z" fill="black"/>
                                        <path d="M15 65H35V85H15V65Z" fill="white"/>
                                        <path d="M20 70H30V80H20V70Z" fill="black"/>
                                        <!-- Internal Dots -->
                                        <rect x="50" y="10" width="5" height="5" fill="black"/>
                                        <rect x="50" y="20" width="5" height="5" fill="black"/>
                                        <rect x="50" y="30" width="5" height="5" fill="black"/>
                                        <rect x="10" y="50" width="5" height="5" fill="black"/>
                                        <rect x="20" y="50" width="5" height="5" fill="black"/>
                                        <rect x="30" y="50" width="5" height="5" fill="black"/>
                                        <rect x="40" y="50" width="5" height="5" fill="black"/>
                                        <rect x="50" y="50" width="5" height="5" fill="black"/>
                                        <rect x="60" y="50" width="5" height="5" fill="black"/>
                                        <rect x="70" y="50" width="5" height="5" fill="black"/>
                                        <rect x="80" y="50" width="5" height="5" fill="black"/>
                                        <rect x="90" y="50" width="5" height="5" fill="black"/>
                                        
                                        <rect x="50" y="60" width="10" height="10" fill="black"/>
                                        <rect x="70" y="60" width="20" height="10" fill="black"/>
                                        <rect x="60" y="75" width="10" height="15" fill="black"/>
                                        <rect x="80" y="75" width="10" height="5" fill="black"/>
                                        <rect x="85" y="85" width="5" height="5" fill="black"/>
                                        <rect x="50" y="85" width="5" height="5" fill="black"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Code Badge -->
                            <div class="inline-flex items-center bg-gray-50 border border-gray-100 rounded-full px-5 py-2 mb-6">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="font-bold text-gray-800 tracking-widest text-lg font-mono">FP-8923-XZ92</span>
                            </div>

                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Tu código está listo</h3>
                            <p class="text-gray-500 text-center max-w-sm mb-8 text-sm">
                                Este código es personal e intransferible. Muéstralo al cajero al momento de pagar.
                            </p>

                            <button class="w-full max-w-md bg-fp-orange hover:bg-fp-orangeHover text-white font-semibold text-lg py-4 px-8 rounded-2xl shadow-lg shadow-orange-500/30 transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                                Canjear Ahora
                            </button>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN (Cards) -->
                    <div class="lg:col-span-2 space-y-6">
                        
                        <!-- Balance Card -->
                        <div class="bg-fp-dark rounded-[2rem] p-8 shadow-xl relative overflow-hidden text-white">
                            <div class="absolute -right-4 -top-4 w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
                            <svg class="w-12 h-12 text-fp-orange absolute top-8 right-8 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                            
                            <p class="text-white/60 text-xs font-bold tracking-widest mb-2">SALDO DISPONIBLE</p>
                            <h2 class="text-5xl font-extrabold tracking-tight mb-6">$4,250.00</h2>
                            
                            <div class="flex items-center">
                                <span class="bg-green-500/20 text-green-400 border border-green-500/30 px-3 py-1 rounded-md text-xs font-bold tracking-wide mr-3">
                                    ACTIVO
                                </span>
                                <span class="text-white/60 text-sm font-medium">Vence en 12 días</span>
                            </div>
                        </div>

                        <!-- How it works Card -->
                        <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-gray-100 flex-1">
                            <div class="flex items-center mb-6">
                                <div class="bg-blue-50 text-blue-500 p-2 rounded-xl mr-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">¿Cómo funciona?</h3>
                            </div>
                            
                            <div class="space-y-5">
                                <div class="flex">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-fp-qr text-green-700 border border-green-200 flex items-center justify-center font-bold text-sm mt-0.5">1</div>
                                    <div class="ml-4">
                                        <p class="font-semibold text-gray-800 text-sm">Busca el logo FoodPass</p>
                                        <p class="text-gray-500 text-xs mt-1 leading-relaxed">Identifica nuestros establecimientos aliados en tu zona.</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-fp-qr text-green-700 border border-green-200 flex items-center justify-center font-bold text-sm mt-0.5">2</div>
                                    <div class="ml-4">
                                        <p class="font-semibold text-gray-800 text-sm">Muestra el QR</p>
                                        <p class="text-gray-500 text-xs mt-1 leading-relaxed">Presenta este código desde tu celular al momento de pagar tu consumo.</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-fp-qr text-green-700 border border-green-200 flex items-center justify-center font-bold text-sm mt-0.5">3</div>
                                    <div class="ml-4">
                                        <p class="font-semibold text-gray-800 text-sm">Confirma el canje</p>
                                        <p class="text-gray-500 text-xs mt-1 leading-relaxed">El establecimiento escaneará tu código y el saldo se descontará al instante.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 pt-6 border-t border-gray-100">
                                <a href="#" class="text-fp-orange font-semibold text-sm hover:text-fp-orangeHover transition-colors flex items-center">
                                    Ver mapa de restaurantes afiliados
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div> <!-- End Grid -->

                <!-- Recent Redemptions -->
                <div class="mt-12 mb-8">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-gray-900">Últimos Canjes</h3>
                        <a href="{{ route('historial') }}" class="text-fp-orange font-medium text-sm hover:underline">Ver historial completo</a>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        
                        <!-- Card 1 -->
                        <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-green-50 text-green-600 border border-green-100 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">
                                    Exitoso
                                </span>
                                <span class="text-gray-400 text-xs font-medium">Hoy, 12:45 PM</span>
                            </div>
                            <h4 class="font-bold text-gray-800 text-base mb-1 truncate">El Mesón del Chef</h4>
                            <p class="text-fp-orange font-extrabold text-lg">-$125.00</p>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-green-50 text-green-600 border border-green-100 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">
                                    Exitoso
                                </span>
                                <span class="text-gray-400 text-xs font-medium">Ayer, 8:15 PM</span>
                            </div>
                            <h4 class="font-bold text-gray-800 text-base mb-1 truncate">Pizzería Artesanal La Toscana</h4>
                            <p class="text-fp-orange font-extrabold text-lg">-$340.00</p>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex justify-between items-start mb-4">
                                <span class="bg-green-50 text-green-600 border border-green-100 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">
                                    Exitoso
                                </span>
                                <span class="text-gray-400 text-xs font-medium">24 Oct, 2:30 PM</span>
                            </div>
                            <h4 class="font-bold text-gray-800 text-base mb-1 truncate">Green Salad & Co.</h4>
                            <p class="text-fp-orange font-extrabold text-lg">-$89.50</p>
                        </div>

                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>