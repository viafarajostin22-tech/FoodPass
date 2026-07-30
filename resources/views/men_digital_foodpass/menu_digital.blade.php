<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Digital - FoodPass</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'fp-sidebar': '#273517',
                        'fp-orange': '#F97F2D',
                        'fp-bg': '#f0ffd8',
                        'fp-card-light': '#e2f4c8',
                        'fp-text-dark': '#121f05'
                    },
                    fontFamily: {
                        'title': ['"Plus Jakarta Sans"', 'sans-serif'],
                        'body': ['"Inter"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-title { font-family: 'Plus Jakarta Sans', sans-serif; }
        /* Hide scrollbar for clean UI but allow scrolling */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent; 
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(0,0,0,0.1); 
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0,0,0,0.2); 
        }
    </style>
</head>
<body class="bg-fp-bg text-fp-text-dark antialiased h-screen overflow-hidden flex">

    <!-- Sidebar Izquierdo Fijo -->
    <aside class="w-56 bg-fp-sidebar h-screen flex flex-col justify-between fixed left-0 top-0 z-20 text-white shrink-0">
        <div>
            <!-- Logo Area -->
            <div class="px-6 py-8">
                <h1 class="text-2xl font-title font-bold tracking-tight">FoodPass</h1>
                <p class="text-[10px] text-gray-400 font-semibold uppercase tracking-widest mt-1">The Artisanal Ledger</p>
            </div>

            <!-- Navigation -->
            <nav class="px-3 flex flex-col gap-1">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-white/10 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-[20px]">home</span>
                    <span class="text-sm font-medium">Inicio</span>
                </a>
                
                <a href="{{ route('menu-digital') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-fp-orange text-white shadow-md shadow-fp-orange/20 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">restaurant_menu</span>
                    <span class="text-sm font-medium">Menú</span>
                </a>

                <a href="{{ route('historial') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-white/10 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-[20px]">receipt_long</span>
                    <span class="text-sm font-medium">Historial</span>
                </a>

                <a href="{{ route('canje') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-white/10 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-[20px]">loyalty</span>
                    <span class="text-sm font-medium">Canje</span>
                </a>

                <a href="{{ route('metodos-pago') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-white/10 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-[20px]">credit_card</span>
                    <span class="text-sm font-medium">Pagos</span>
                </a>

                <a href="{{ route('perfil') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-white/10 hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-[20px]">person</span>
                    <span class="text-sm font-medium">Perfil</span>
                </a>
            </nav>
        </div>

        <!-- Footer Avatar -->
        <div class="p-4 mb-4 mx-3 rounded-xl bg-black/20 border border-white/5 flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-fp-orange flex items-center justify-center font-bold text-white shrink-0 shadow-inner">
                {{ substr(auth()->user()->name ?? 'User', 0, 1) }}
            </div>
            <div class="overflow-hidden">
                <p class="text-sm font-medium text-white truncate">{{ auth()->user()->name ?? 'Usuario Invitado' }}</p>
                <p class="text-xs text-fp-orange">Premium Account</p>
            </div>
        </div>
    </aside>

    <!-- Contenedor Principal (margin left por sidebar) -->
    <div class="ml-56 flex-1 flex flex-col h-screen w-full relative">
        
        <!-- Header Fijo Superior -->
        <header class="h-14 bg-white/80 backdrop-blur-md border-b border-gray-200/50 flex items-center justify-between px-8 sticky top-0 z-10 w-full">
            <!-- Buscador -->
            <div class="relative w-96">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-[20px]">search</span>
                <input type="text" placeholder="Buscar platillos, ingredientes..." class="w-full bg-fp-bg border border-fp-card-light text-sm rounded-full py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-fp-orange/50 transition-shadow">
            </div>

            <!-- Acciones Header -->
            <div class="flex items-center gap-5">
                <button class="relative text-gray-600 hover:text-fp-sidebar transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-fp-orange rounded-full border-2 border-white"></span>
                </button>
                <div class="flex items-center gap-2 border-l border-gray-200 pl-5">
                    <span class="text-sm font-medium text-fp-text-dark">{{ auth()->user()->name ?? 'Usuario Invitado' }}</span>
                    <div class="w-8 h-8 rounded-full bg-fp-sidebar text-white flex items-center justify-center text-xs font-bold">
                        {{ substr(auth()->user()->name ?? 'User', 0, 1) }}
                    </div>
                </div>
            </div>
        </header>

        <!-- Area de Contenido Scrolleable -->
        <main class="flex-1 overflow-y-auto p-8 pb-20">
            
            <!-- SECCIÓN HERO (Grid 3 cols) -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
                
                <!-- Hero Tarjeta Principal (2 cols) -->
                <div class="lg:col-span-2 relative rounded-3xl overflow-hidden h-64 shadow-lg group">
                    <!-- Imagen de fondo -->
                    <img src="https://picsum.photos/seed/foodhero/1200/600" alt="Platillo Destacado" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <!-- Overlay gradiente -->
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/50 to-transparent"></div>
                    
                    <!-- Contenido Hero -->
                    <div class="relative h-full flex flex-col justify-center p-8 lg:w-2/3">
                        <div class="inline-block px-3 py-1 bg-fp-orange text-white text-[10px] font-bold uppercase tracking-wider rounded-md mb-4 self-start">
                            Recomendación del Chef
                        </div>
                        <h2 class="text-3xl md:text-4xl font-title font-bold text-white leading-tight mb-3">
                            Corte Artisan con<br>Finas Hierbas
                        </h2>
                        <p class="text-white/70 text-sm mb-6 max-w-md line-clamp-2">
                            Disfruta de nuestro corte premium sellado a la perfección, bañado en mantequilla de romero y acompañado de vegetales de temporada asados.
                        </p>
                        <button class="bg-fp-orange hover:bg-[#e06c1c] text-white px-6 py-2.5 rounded-xl font-semibold text-sm flex items-center gap-2 self-start transition-colors shadow-lg shadow-fp-orange/30">
                            <span class="material-symbols-outlined text-[18px]">shopping_cart</span>
                            Seleccionar &nbsp; $45.50
                        </button>
                    </div>
                </div>

                <!-- Tarjetas Derecha (1 col apiladas) -->
                <div class="flex flex-col gap-6 h-64">
                    <!-- Tarjeta Puntos -->
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex-1 flex flex-col justify-center relative overflow-hidden group">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-fp-orange/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
                        <div class="flex items-center gap-3 mb-2 relative">
                            <div class="w-10 h-10 rounded-full bg-fp-orange/10 flex items-center justify-center text-fp-orange">
                                <span class="material-symbols-outlined text-[20px]">stars</span>
                            </div>
                            <h3 class="font-title font-bold text-lg">Puntos Pass</h3>
                        </div>
                        <p class="text-gray-500 text-sm mb-3 relative z-10">Tienes <span class="font-bold text-fp-sidebar">1,250</span> puntos disponibles.</p>
                        <a href="{{ route('canje') }}" class="text-fp-orange text-sm font-semibold hover:underline inline-flex items-center gap-1 relative z-10">
                            Ver catálogo de canje 
                            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </a>
                    </div>

                    <!-- Tarjeta Veggie -->
                    <div class="bg-fp-card-light rounded-3xl p-6 shadow-sm flex-1 flex flex-col justify-center relative overflow-hidden group border border-[#d2ebaf]">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-title font-bold text-lg text-fp-sidebar">Veggie</h3>
                            <span class="material-symbols-outlined text-green-600">eco</span>
                        </div>
                        <p class="text-fp-text-dark/80 text-sm">Descubre opciones saludables hoy.</p>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-white/20 rounded-tl-full"></div>
                    </div>
                </div>
            </section>

            <!-- SECCIÓN EXPLORAR -->
            <section>
                <!-- Header Sección & Tabs -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                    <div>
                        <h2 class="text-2xl font-title font-bold text-fp-sidebar mb-1">Explora nuestro Menú</h2>
                        <p class="text-gray-500 text-sm">Elige entre nuestras categorías cuidadosamente elaboradas.</p>
                    </div>
                    
                    <!-- Tabs -->
                    <div class="flex items-center gap-2 p-1 bg-white rounded-xl shadow-sm border border-gray-100 self-start md:self-auto overflow-x-auto">
                        <button class="px-4 py-2 bg-fp-text-dark text-white text-sm font-medium rounded-lg whitespace-nowrap shadow-sm">Todos</button>
                        <button class="px-4 py-2 text-gray-500 hover:text-fp-sidebar text-sm font-medium rounded-lg whitespace-nowrap transition-colors">Entradas</button>
                        <button class="px-4 py-2 text-gray-500 hover:text-fp-sidebar text-sm font-medium rounded-lg whitespace-nowrap transition-colors">Plato Fuerte</button>
                        <button class="px-4 py-2 text-gray-500 hover:text-fp-sidebar text-sm font-medium rounded-lg whitespace-nowrap transition-colors">Postres</button>
                    </div>
                </div>

                <!-- Grid Platos (4 cols) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Fila 1 -->
                    <!-- Item 1 -->
                    <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-shadow group flex flex-col">
                        <div class="relative w-full h-40 rounded-2xl overflow-hidden mb-4">
                            <img src="https://picsum.photos/seed/salad/400/300" alt="Artisan Salad Bowl" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/80 backdrop-blur text-gray-400 hover:text-red-500 flex items-center justify-center transition-colors">
                                <span class="material-symbols-outlined text-[18px]">favorite</span>
                            </button>
                        </div>
                        <h3 class="font-title font-bold text-fp-sidebar mb-1 line-clamp-1">Artisan Salad Bowl</h3>
                        <p class="text-xs text-gray-400 mb-4 line-clamp-2 flex-1">Mix de hojas verdes, quinoa, aguacate, tomates cherry y vinagreta cítrica.</p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="font-title font-extrabold text-lg text-fp-orange">$18.25</span>
                            <button class="bg-fp-orange/10 hover:bg-fp-orange text-fp-orange hover:text-white px-4 py-1.5 rounded-lg text-sm font-semibold transition-colors">
                                Seleccionar
                            </button>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-shadow group flex flex-col">
                        <div class="relative w-full h-40 rounded-2xl overflow-hidden mb-4">
                            <img src="https://picsum.photos/seed/signature/400/300" alt="FoodPass Signature" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="font-title font-bold text-fp-sidebar mb-1 line-clamp-1">FoodPass Signature</h3>
                        <p class="text-xs text-gray-400 mb-4 line-clamp-2 flex-1">Nuestra hamburguesa especial con pan brioche artesanal y salsa secreta.</p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="font-title font-extrabold text-lg text-fp-orange">$14.50</span>
                            <button class="bg-fp-orange/10 hover:bg-fp-orange text-fp-orange hover:text-white px-4 py-1.5 rounded-lg text-sm font-semibold transition-colors">
                                Seleccionar
                            </button>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-shadow group flex flex-col">
                        <div class="relative w-full h-40 rounded-2xl overflow-hidden mb-4">
                            <img src="https://picsum.photos/seed/pasta/400/300" alt="Pasta del Huerto" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="font-title font-bold text-fp-sidebar mb-1 line-clamp-1">Pasta del Huerto</h3>
                        <p class="text-xs text-gray-400 mb-4 line-clamp-2 flex-1">Fettuccine fresco con pesto genovés, tomates asados y parmesano reggiano.</p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="font-title font-extrabold text-lg text-fp-orange">$16.00</span>
                            <button class="bg-fp-orange/10 hover:bg-fp-orange text-fp-orange hover:text-white px-4 py-1.5 rounded-lg text-sm font-semibold transition-colors">
                                Seleccionar
                            </button>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-shadow group flex flex-col">
                        <div class="relative w-full h-40 rounded-2xl overflow-hidden mb-4">
                            <img src="https://picsum.photos/seed/morning/400/300" alt="Morning Delight" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="font-title font-bold text-fp-sidebar mb-1 line-clamp-1">Morning Delight</h3>
                        <p class="text-xs text-gray-400 mb-4 line-clamp-2 flex-1">Tostadas francesas con frutos rojos frescos, mascarpone y jarabe de arce real.</p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="font-title font-extrabold text-lg text-fp-orange">$12.75</span>
                            <button class="bg-fp-orange/10 hover:bg-fp-orange text-fp-orange hover:text-white px-4 py-1.5 rounded-lg text-sm font-semibold transition-colors">
                                Seleccionar
                            </button>
                        </div>
                    </div>

                    <!-- Fila 2 -->
                    <!-- Item 5 -->
                    <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-shadow group flex flex-col">
                        <div class="relative w-full h-40 rounded-2xl overflow-hidden mb-4">
                            <img src="https://picsum.photos/seed/ramen/400/300" alt="Kyoto Ramen Bowl" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="font-title font-bold text-fp-sidebar mb-1 line-clamp-1">Kyoto Ramen Bowl</h3>
                        <p class="text-xs text-gray-400 mb-4 line-clamp-2 flex-1">Caldo tonkotsu de 12 horas, chashu tierno, huevo marinado y fideos frescos.</p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="font-title font-extrabold text-lg text-fp-orange">$21.50</span>
                            <button class="bg-fp-orange/10 hover:bg-fp-orange text-fp-orange hover:text-white px-4 py-1.5 rounded-lg text-sm font-semibold transition-colors">
                                Seleccionar
                            </button>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-shadow group flex flex-col">
                        <div class="relative w-full h-40 rounded-2xl overflow-hidden mb-4">
                            <img src="https://picsum.photos/seed/pizza/400/300" alt="Pizza Margherita Luxe" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="font-title font-bold text-fp-sidebar mb-1 line-clamp-1">Pizza Margherita Luxe</h3>
                        <p class="text-xs text-gray-400 mb-4 line-clamp-2 flex-1">Masa madre horneada a la leña, mozzarella di bufala y albahaca fresca.</p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="font-title font-extrabold text-lg text-fp-orange">$15.90</span>
                            <button class="bg-fp-orange/10 hover:bg-fp-orange text-fp-orange hover:text-white px-4 py-1.5 rounded-lg text-sm font-semibold transition-colors">
                                Seleccionar
                            </button>
                        </div>
                    </div>

                    <!-- Item 7 -->
                    <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-shadow group flex flex-col">
                        <div class="relative w-full h-40 rounded-2xl overflow-hidden mb-4">
                            <img src="https://picsum.photos/seed/ribs/400/300" alt="Honey BBQ Ribs" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="font-title font-bold text-fp-sidebar mb-1 line-clamp-1">Honey BBQ Ribs</h3>
                        <p class="text-xs text-gray-400 mb-4 line-clamp-2 flex-1">Costillas de cerdo en cocción lenta, glaseadas con miel y salsa barbacoa ahumada.</p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="font-title font-extrabold text-lg text-fp-orange">$24.00</span>
                            <button class="bg-fp-orange/10 hover:bg-fp-orange text-fp-orange hover:text-white px-4 py-1.5 rounded-lg text-sm font-semibold transition-colors">
                                Seleccionar
                            </button>
                        </div>
                    </div>

                    <!-- Item 8 -->
                    <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-shadow group flex flex-col">
                        <div class="relative w-full h-40 rounded-2xl overflow-hidden mb-4">
                            <img src="https://picsum.photos/seed/fondant/400/300" alt="Velvet Chocolate Fondant" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="font-title font-bold text-fp-sidebar mb-1 line-clamp-1">Velvet Chocolate Fondant</h3>
                        <p class="text-xs text-gray-400 mb-4 line-clamp-2 flex-1">Volcán de chocolate oscuro belga con centro líquido y helado de vainilla.</p>
                        <div class="flex items-center justify-between mt-auto">
                            <span class="font-title font-extrabold text-lg text-fp-orange">$9.50</span>
                            <button class="bg-fp-orange/10 hover:bg-fp-orange text-fp-orange hover:text-white px-4 py-1.5 rounded-lg text-sm font-semibold transition-colors">
                                Seleccionar
                            </button>
                        </div>
                    </div>

                </div>
            </section>

        </main>
    </div>

</body>
</html>