<!DOCTYPE html>
<html class="light" lang="es">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>FoodPass - Mi Perfil</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
  .material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
  }
  body { font-family: 'Inter', sans-serif; }
  h1,h2,h3,h4,h5 { font-family: 'Plus Jakarta Sans', sans-serif; }
</style>
</head>
<body class="bg-[#f0ffd8] text-[#121f05] flex h-screen overflow-hidden">

<!-- ═══════════════ SIDEBAR ═══════════════ -->
<aside class="w-56 bg-[#273517] text-white flex flex-col shrink-0 h-full overflow-y-auto">
  <!-- Logo -->
  <div class="px-6 pt-7 pb-5">
    <h1 class="text-lg font-bold text-white leading-tight" style="font-family:'Plus Jakarta Sans',sans-serif">FoodPass</h1>
    <p class="text-white/40 text-[9px] uppercase tracking-widest font-bold mt-0.5">The Artisanal Ledger</p>
  </div>

  <!-- Nav -->
  <nav class="flex-1 px-3 space-y-0.5">
    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 text-white/60 hover:text-white hover:bg-white/10 px-4 py-2.5 mx-1 rounded-full transition-all text-sm font-semibold">
      <span class="material-symbols-outlined text-[20px]">home</span>Inicio
    </a>
    <a href="{{ route('menu-digital') }}" class="flex items-center gap-3 text-white/60 hover:text-white hover:bg-white/10 px-4 py-2.5 mx-1 rounded-full transition-all text-sm font-semibold">
      <span class="material-symbols-outlined text-[20px]">restaurant_menu</span>Menú
    </a>
    <a href="{{ route('historial') }}" class="flex items-center gap-3 text-white/60 hover:text-white hover:bg-white/10 px-4 py-2.5 mx-1 rounded-full transition-all text-sm font-semibold">
      <span class="material-symbols-outlined text-[20px]">history</span>Historial
    </a>
    <a href="{{ route('canje') }}" class="flex items-center gap-3 text-white/60 hover:text-white hover:bg-white/10 px-4 py-2.5 mx-1 rounded-full transition-all text-sm font-semibold">
      <span class="material-symbols-outlined text-[20px]">qr_code_scanner</span>Canje
    </a>
    <a href="{{ route('metodos-pago') }}" class="flex items-center gap-3 text-white/60 hover:text-white hover:bg-white/10 px-4 py-2.5 mx-1 rounded-full transition-all text-sm font-semibold">
      <span class="material-symbols-outlined text-[20px]">payments</span>Pagos
    </a>
    <!-- ACTIVO -->
    <a href="{{ route('perfil') }}" class="flex items-center gap-3 bg-[#F97F2D] text-white px-4 py-2.5 mx-1 rounded-full text-sm font-semibold">
      <span class="material-symbols-outlined text-[20px]" style="font-variation-settings:'FILL' 1">person</span>Perfil
    </a>
  </nav>

  <!-- Footer usuario -->
  <div class="p-4 border-t border-white/10 mt-auto">
    <div class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-white/5">
      <div class="w-8 h-8 rounded-full bg-[#F97F2D] flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
      </div>
      <div class="overflow-hidden">
        <p class="text-white text-xs font-bold truncate">{{ auth()->user()->name }}</p>
        <p class="text-white/40 text-[10px] truncate">Premium Member</p>
      </div>
    </div>
  </div>
</aside>

<!-- ═══════════════ MAIN ═══════════════ -->
<main class="flex-1 flex flex-col h-full overflow-hidden">

  <!-- Top Header -->
  <header class="h-14 bg-white/90 backdrop-blur-md border-b border-gray-100 flex items-center justify-between px-8 shrink-0 z-10">
    <div class="flex items-center gap-3 flex-1">
      <div class="flex items-center bg-[#e2f4c8] px-4 py-2 rounded-full w-80">
        <span class="material-symbols-outlined text-[#574237] text-[18px]">search</span>
        <input class="bg-transparent border-none focus:ring-0 text-sm w-full ml-2 placeholder:text-[#574237]/60 outline-none" placeholder="Buscar en el catálogo..." type="text"/>
      </div>
    </div>
    <div class="flex items-center gap-3">
      <button class="relative p-2 hover:bg-[#e2f4c8] rounded-full transition-colors">
        <span class="material-symbols-outlined text-[22px]">notifications</span>
        <span class="absolute top-2 right-2 w-1.5 h-1.5 bg-[#F97F2D] rounded-full"></span>
      </button>
      <button class="p-2 hover:bg-[#e2f4c8] rounded-full transition-colors">
        <span class="material-symbols-outlined text-[22px]">settings</span>
      </button>
      <span class="font-semibold text-sm">FoodPass</span>
      <div class="w-8 h-8 rounded-full bg-[#273517] flex items-center justify-center text-white font-bold text-sm">
        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
      </div>
    </div>
  </header>

  <!-- Scrollable body -->
  <div class="flex-1 overflow-y-auto p-8">
    <div class="max-w-5xl mx-auto">

      <!-- ── HEADER PERFIL ── -->
      <div class="flex items-start gap-7 mb-10">
        <!-- Foto -->
        <div class="relative shrink-0">
          <div class="w-28 h-28 rounded-2xl overflow-hidden shadow-md border-2 border-white bg-[#273517]">
            <img src="https://picsum.photos/seed/profile-avatar/200/200"
                 class="w-full h-full object-cover"
                 alt="Foto de perfil"/>
          </div>
          <button class="absolute -bottom-2 -right-2 w-8 h-8 bg-[#F97F2D] rounded-full flex items-center justify-center shadow-md border-2 border-[#f0ffd8] hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-white text-[15px]">photo_camera</span>
          </button>
        </div>

        <!-- Info -->
        <div class="flex-1 pt-1">
          <div class="flex items-center gap-3 mb-1">
            <h2 class="text-3xl font-extrabold text-[#121f05]">{{ auth()->user()->name }}</h2>
            <span class="bg-[#e2f4c8] text-[#006e16] border border-[#006e16]/20 text-[9px] font-bold uppercase tracking-widest px-3 py-1 rounded-full flex items-center gap-1">
              <span class="material-symbols-outlined text-[12px]" style="font-variation-settings:'FILL' 1">verified</span>
              FRESHNESS GOLD
            </span>
          </div>
          <p class="text-[#574237] text-sm mb-5">{{ auth()->user()->email }}</p>
          <div class="flex items-center gap-3">
            <button class="bg-[#F97F2D] text-white font-bold text-sm px-5 py-2.5 rounded-xl flex items-center gap-2 shadow-md shadow-[#F97F2D]/20 hover:scale-105 transition-transform">
              <span class="material-symbols-outlined text-[16px]">edit</span>Editar Perfil
            </button>
            <button class="bg-white text-[#121f05] border border-[#e2f4c8] font-semibold text-sm px-5 py-2.5 rounded-xl flex items-center gap-2 hover:bg-[#e2f4c8] transition-colors shadow-sm">
              Ver Estadísticas
            </button>
          </div>
        </div>
      </div>

      <!-- ── GRID CONTENIDO ── -->
      <div class="grid grid-cols-3 gap-6">

        <!-- COLUMNA IZQUIERDA (2 cols) -->
        <div class="col-span-2 space-y-5">

          <!-- Tarjeta: Suscripción Actual -->
          <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100 relative overflow-hidden">
            <!-- decoración top-right -->
            <div class="absolute top-0 right-0 w-28 h-28 bg-[#e2f4c8]/40 rounded-bl-full -mr-8 -mt-8 pointer-events-none"></div>

            <div class="flex items-start justify-between mb-4">
              <span class="text-[10px] font-bold uppercase tracking-widest text-[#574237]">SUSCRIPCIÓN ACTUAL</span>
              <div class="w-9 h-9 bg-[#e2f4c8] rounded-full flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-[#006e16] text-[18px]" style="font-variation-settings:'FILL' 1">verified_user</span>
              </div>
            </div>

            <h3 class="text-2xl font-extrabold text-[#121f05] mb-2">Membresía Gourmet</h3>
            <p class="text-[#574237] text-sm leading-relaxed mb-6 max-w-lg">
              Disfruta de envíos gratuitos en todos tus pedidos, acceso prioritario a nuevas colecciones y acumula el doble de puntos FoodPass por cada compra.
            </p>

            <hr class="border-[#f0ffd8] mb-5"/>

            <div class="flex items-center justify-between">
              <div>
                <span class="block text-[10px] font-bold uppercase tracking-widest text-[#574237] mb-1">PRÓXIMA RENOVACIÓN</span>
                <span class="block font-bold text-[#121f05]">12 de Octubre, 2024</span>
              </div>
              <a href="#" class="text-[#F97F2D] text-sm font-bold hover:underline">Gestionar suscripción</a>
            </div>
          </div>

          <!-- Tarjeta: Información Detallada -->
          <div class="bg-white rounded-2xl p-7 shadow-sm border border-gray-100">
            <h3 class="text-lg font-bold text-[#121f05] mb-6">Información Detallada</h3>

            <div class="grid grid-cols-3 gap-x-6 gap-y-7">

              <!-- Email -->
              <div class="border-b-2 border-[#F97F2D]/25 pb-3">
                <div class="flex items-center gap-1.5 mb-1">
                  <span class="material-symbols-outlined text-[#F97F2D] text-[14px]">mail</span>
                  <span class="text-[9px] font-bold uppercase tracking-widest text-[#574237]">EMAIL PRINCIPAL</span>
                </div>
                <p class="font-bold text-sm text-[#121f05] truncate">{{ auth()->user()->email }}</p>
              </div>

              <!-- Teléfono -->
              <div class="border-b-2 border-[#F97F2D]/25 pb-3">
                <div class="flex items-center gap-1.5 mb-1">
                  <span class="material-symbols-outlined text-[#F97F2D] text-[14px]">phone</span>
                  <span class="text-[9px] font-bold uppercase tracking-widest text-[#574237]">TELÉFONO</span>
                </div>
                <p class="font-bold text-sm text-[#121f05]">+34 612 345 678</p>
              </div>

              <!-- Dirección -->
              <div class="border-b-2 border-[#F97F2D]/25 pb-3">
                <div class="flex items-center gap-1.5 mb-1">
                  <span class="material-symbols-outlined text-[#F97F2D] text-[14px]">location_on</span>
                  <span class="text-[9px] font-bold uppercase tracking-widest text-[#574237]">DIRECCIÓN PRINCIPAL</span>
                </div>
                <p class="font-bold text-sm text-[#121f05]">Calle de la Ribera 45, Madrid</p>
              </div>

              <!-- Fecha nacimiento -->
              <div class="border-b-2 border-[#F97F2D]/25 pb-3">
                <div class="flex items-center gap-1.5 mb-1">
                  <span class="material-symbols-outlined text-[#F97F2D] text-[14px]">cake</span>
                  <span class="text-[9px] font-bold uppercase tracking-widest text-[#574237]">FECHA DE NACIMIENTO</span>
                </div>
                <p class="font-bold text-sm text-[#121f05]">15 de Marzo, 1992</p>
              </div>

              <!-- Idioma -->
              <div class="border-b-2 border-[#F97F2D]/25 pb-3">
                <div class="flex items-center gap-1.5 mb-1">
                  <span class="material-symbols-outlined text-[#F97F2D] text-[14px]">language</span>
                  <span class="text-[9px] font-bold uppercase tracking-widest text-[#574237]">IDIOMA PREFERIDO</span>
                </div>
                <p class="font-bold text-sm text-[#121f05]">Español (ES)</p>
              </div>

              <!-- Miembro desde -->
              <div class="border-b-2 border-[#F97F2D]/25 pb-3">
                <div class="flex items-center gap-1.5 mb-1">
                  <span class="material-symbols-outlined text-[#F97F2D] text-[14px]">calendar_month</span>
                  <span class="text-[9px] font-bold uppercase tracking-widest text-[#574237]">MIEMBRO DESDE</span>
                </div>
                <p class="font-bold text-sm text-[#121f05]">Enero 2021</p>
              </div>

            </div>
          </div>
        </div>

        <!-- COLUMNA DERECHA (1 col) -->
        <div class="col-span-1 space-y-5">

          <!-- Puntos Acumulados -->
          <div class="bg-[#273517] rounded-2xl p-6 shadow-md text-white relative overflow-hidden">
            <div class="absolute -right-4 -top-4 w-24 h-24 bg-[#F97F2D] rounded-full opacity-10 blur-xl pointer-events-none"></div>
            <div class="flex items-start justify-between mb-3 relative">
              <span class="text-[10px] font-bold uppercase tracking-widest text-white/60">PUNTOS ACUMULADOS</span>
              <span class="material-symbols-outlined text-[#F97F2D] text-[22px]" style="font-variation-settings:'FILL' 1">star</span>
            </div>
            <p class="text-4xl font-extrabold text-white relative">4,850 <span class="text-xl font-bold text-white/60">FP</span></p>
          </div>

          <!-- Pedidos Totales -->
          <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
            <div class="flex items-start justify-between mb-3">
              <span class="text-[10px] font-bold uppercase tracking-widest text-[#574237]">PEDIDOS TOTALES</span>
              <div class="w-9 h-9 bg-[#e2f4c8] rounded-xl flex items-center justify-center">
                <span class="material-symbols-outlined text-[#006e16] text-[18px]" style="font-variation-settings:'FILL' 1">shopping_bag</span>
              </div>
            </div>
            <p class="text-4xl font-extrabold text-[#121f05]">128</p>
          </div>

          <!-- Cerrar Sesión -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center justify-center gap-2 bg-white border border-[#e2f4c8] text-[#574237] font-semibold text-sm px-5 py-3.5 rounded-xl hover:bg-red-50 hover:text-red-600 hover:border-red-200 transition-colors shadow-sm">
              <span class="material-symbols-outlined text-[18px]">logout</span>
              Cerrar sesión
            </button>
          </form>

        </div>
      </div>

    </div>
  </div>
</main>

</body>
</html>