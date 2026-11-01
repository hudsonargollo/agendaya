<!DOCTYPE html>

<html class="scroll-smooth" lang="es" style=""><svg aria-hidden="true" class="inline-defs-container" style="position:absolute;width:0;height:0;overflow:hidden"></svg><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Agendaya | Reserva de citas y servicios profesionales en Santa Cruz, Bolivia</title>
<!-- Google Fonts: Plus Jakarta Sans for ultra-clean tech & neo-grotesque flair -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;family=Outfit:wght@500;700;800;900&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS v3 with Plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Custom Configuration -->
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50: '#F0FDF4',
              100: '#DCFCE7',
              200: '#BBF7D0',
              300: '#86EFAC',
              400: '#4ADE80',
              500: '#22C55E',
              600: '#16A34A',
              DEFAULT: '#84CC16', // High-energy Lime/Chartreuse from ClubeMkt
              lime: '#A3E635',
              darklime: '#65A30D',
              neon: '#84CC16',
              mint: '#ECFDF5',
              cruz: '#059669', // Verde Cruceño
              slate: '#0F172A',
              cardDark: '#1E293B',
              amberAccent: '#F59E0B',
              cyanAccent: '#06B6D4'
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            display: ['"Outfit"', 'sans-serif']
          },
          boxShadow: {
            'clubemkt': '0 24px 60px -15px rgba(132, 204, 22, 0.22)',
            'card-lift': '0 12px 30px -8px rgba(15, 23, 42, 0.08)',
            'glow-lime': '0 0 45px rgba(163, 230, 53, 0.45)',
          }
        }
      }
    }
  </script>
<!-- Modular CSS Styling -->
<style data-purpose="typography">
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: #0F172A;
      background-color: #FAFDF7;
      overflow-x: hidden;
    }
    .font-display {
      font-family: 'Outfit', sans-serif;
    }
  </style>
<style data-purpose="custom-animations-and-shapes">
    @keyframes floatSlow {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-10px) rotate(2deg); }
    }
    @keyframes pulseSoft {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.04); opacity: 0.92; }
    }
    .animate-float {
      animation: floatSlow 6s ease-in-out infinite;
    }
    .animate-pulse-soft {
      animation: pulseSoft 4s ease-in-out infinite;
    }
    /* ClubeMkt-style pill badge with rotating star / sparkle accent */
    .starburst-badge {
      background: radial-gradient(circle at 30% 30%, #BEF264, #84CC16);
    }
    .pattern-dots {
      background-image: radial-gradient(#65A30D 1px, transparent 1px);
      background-size: 24px 24px;
    }
  </style>
</head>
<body class="antialiased selection:bg-brand-lime selection:text-brand-slate">
<!-- BEGIN: TopAnnouncementBar -->
<!-- Subtle promotional bar inspired by Dribbble & ClubeMkt header badge -->
<div class="bg-brand-slate text-white py-2 px-4 text-xs md:text-sm font-medium border-b border-brand-cardDark" data-purpose="top-announcement">
<div class="max-w-7xl mx-auto flex items-center justify-between">
<div class="flex items-center gap-2 mx-auto sm:mx-0">
<span class="inline-flex items-center justify-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-brand-lime text-brand-slate uppercase tracking-wider">Nuevo</span>
<span class="">🎉 Lanzamiento oficial en Equipetrol y Urubó: ¡Primer mes sin comisión para consultorios!</span>
</div>
<div class="hidden sm:flex items-center gap-4 text-slate-300 text-xs">
<span class="flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
          Sistema 100% Operativo en Santa Cruz
        </span>
<a class="underline hover:text-brand-lime transition" href="#contacto">Soporte WhatsApp</a>
</div>
</div>
</div>
<!-- END: TopAnnouncementBar -->
<!-- BEGIN: MainHeader -->
<header class="sticky top-0 z-50 bg-[#FAFDF7]/90 backdrop-blur-md border-b border-lime-100 transition-all duration-300" data-purpose="site-header">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
<!-- Brand Logo -->
<a class="flex items-center gap-2.5 group" href="#"><div class="flex items-center gap-3"><img alt="Agendaya Oficial" class="h-10 sm:h-11 w-auto object-contain transition-transform group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6vaQlwo_oGVmClXgGE5oCZOMafPZDClGGMWWQehJS-zwR0wzcMBL1oJsf8Rvm2bGLYvJmlzU4N8G4aJ4cHFF_LWyuKWC5_qvrIq0AwwDJHvXN-l1-YiBcQOSAgneKuBalXx-vDufwVHvi8PGPAkMs5SUqg7b5H_DyoFh2yqDuAVZaO6ikZtVUuhPXLYnF6XC8kXrNmw-9ieUbHPnwFzg8KNgEjXS89KCg7mdolFleWC9TcXEsygxrCwzFkaAb1jwTqg"/><div class="hidden sm:flex flex-col text-left border-l border-slate-200 pl-3"><span class="text-[10px] tracking-widest uppercase font-bold text-slate-400 leading-none">Santa Cruz</span><span class="text-[9px] tracking-wider uppercase font-semibold text-emerald-600 mt-0.5">Bolivia</span></div></div></a>
<!-- Desktop Navigation Menu -->
<nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-700">
<a class="hover:text-brand-darklime transition-colors flex items-center gap-1" href="#servicios">
          Servicios
          <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</a>
<a class="hover:text-brand-darklime transition-colors" href="#como-funciona">Cómo Funciona</a>
<a class="hover:text-brand-darklime transition-colors" href="#para-negocios">Para Negocios</a>
<a class="hover:text-brand-darklime transition-colors" href="#testimonios">Especialistas</a>
<a class="hover:text-brand-darklime transition-colors" href="#precios">Precios</a>
</nav>
<!-- Header Action Buttons -->
<div class="flex items-center gap-3">
<a class="hidden sm:inline-flex text-xs md:text-sm font-semibold text-brand-slate hover:text-brand-darklime px-4 py-2 transition-colors" href="#login">
          Iniciar Sesión
        </a>
<a class="inline-flex items-center justify-center px-5 py-2.5 rounded-full text-xs md:text-sm font-bold text-brand-slate bg-brand-lime hover:bg-[#92dc24] border border-lime-300 shadow-sm shadow-lime-300/40 transition-all hover:scale-105 active:scale-95" href="#reserva-rapida">
<svg class="w-4 h-4 mr-1.5 text-brand-slate" fill="none" stroke="currentColor" viewbox="0 0 24 24">
<path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
          Reservar Cita
        </a>
</div>
</div>
</header>
<!-- END: MainHeader -->
<main>
<!-- BEGIN: HeroSection -->
<!-- ClubeMkt Inspired Composition: Fresh Lime rounded backdrop, central tablet showcase, floating widgets -->
<section class="relative pt-8 pb-20 md:pt-14 md:pb-28 overflow-hidden bg-gradient-to-b from-[#F0FCE6] via-[#FAFDF7] to-white" data-purpose="hero-showcase">
<!-- Subtle Neo-deco Background Accent Rings -->
<div class="absolute top-12 left-1/2 -translate-x-1/2 w-[980px] h-[580px] bg-brand-lime/15 rounded-full blur-3xl pointer-events-none -z-10"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
<!-- Top Pill Tag -->
<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-lime-200 shadow-sm mb-6 text-xs sm:text-sm font-bold text-slate-800">
<span class="w-2.5 h-2.5 rounded-full bg-brand-cruz"></span>
<span class="">⚡ La plataforma #1 de reservas en Santa Cruz de la Sierra</span>
<span class="text-slate-300">|</span>
<span class="text-brand-darklime font-extrabold flex items-center gap-1">
            450+ Negocios Activos
          </span>
</div>
<!-- Hero Headline -->
<h1 class="font-display font-black text-4xl sm:text-6xl lg:text-7xl text-brand-slate tracking-tight max-w-4xl mx-auto leading-[1.08]">
          Reserva citas en segundos. <br class="hidden sm:inline"/>
<span class="relative inline-block text-brand-slate">
            Sin llamadas,
            <span class="relative z-10 text-brand-cruz"> sin esperas.</span>
<!-- Highlight decorative stroke -->
<svg class="absolute -bottom-2 left-0 w-full h-3 text-brand-lime" fill="none" preserveaspectratio="none" viewbox="0 0 250 12">
<path d="M3 9C60 3 190 3 247 9" stroke="currentColor" stroke-linecap="round" stroke-width="6"></path>
</svg>
</span>
</h1>
<!-- Hero Subtitle -->
<p class="mt-6 text-base sm:text-lg lg:text-xl text-slate-600 max-w-2xl mx-auto font-normal leading-relaxed">
          Encuentra médicos especialistas, salones de belleza, notarías y consultores en <strong class="text-slate-800 font-semibold">Equipetrol, Urubó, Las Palmas</strong> y el centro. Confirmación instantánea por WhatsApp.
        </p>
<!-- CTA Buttons -->
<div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
<a class="w-full sm:w-auto px-8 py-4 rounded-full bg-brand-slate text-brand-lime font-display font-bold text-base hover:bg-slate-800 shadow-xl shadow-slate-900/15 transition-all hover:scale-105 active:scale-95 flex items-center justify-center gap-2" href="#servicios">
<span class="">Explorar Especialistas</span>
<svg class="w-5 h-5 text-brand-lime" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path></svg>
</a>
<a class="w-full sm:w-auto px-7 py-4 rounded-full bg-white text-slate-800 font-display font-bold text-base border border-slate-200 hover:border-brand-darklime shadow-sm hover:bg-slate-50 transition-all flex items-center justify-center gap-2" href="#demo-interactiva">
<span class="w-6 h-6 rounded-full bg-brand-lime/30 text-brand-darklime flex items-center justify-center text-xs">▶</span>
<span class="">Ver Demo en Vivo</span>
</a>
</div>
<!-- Quick Filters Pills (Equipetrol, Urubó, etc.) -->
<div class="mt-6 flex flex-wrap items-center justify-center gap-2 text-xs font-semibold text-slate-600">
<span class="text-slate-400">Zonas más activas:</span>
<span class="px-3 py-1 bg-white rounded-full border border-slate-200 hover:border-brand-lime cursor-pointer transition">📍 Equipetrol Norte</span>
<span class="px-3 py-1 bg-white rounded-full border border-slate-200 hover:border-brand-lime cursor-pointer transition">📍 Urubó Village</span>
<span class="px-3 py-1 bg-white rounded-full border border-slate-200 hover:border-brand-lime cursor-pointer transition">📍 2do Anillo &amp; Las Palmas</span>
<span class="px-3 py-1 bg-white rounded-full border border-slate-200 hover:border-brand-lime cursor-pointer transition">📍 Monseñor Rivero</span>
</div>
<!-- BEGIN: ClubeMktTabletShowcase -->
<!-- Centerpiece inspired by ClubeMkt mockup composition with lime green backing card and device tablet -->
<div class="mt-14 relative max-w-5xl mx-auto" data-purpose="hero-device-composition"><div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-6 px-4 animate-float"><div class="bg-white/95 backdrop-blur-md px-5 py-2.5 rounded-3xl shadow-xl border border-lime-200/80 flex items-center gap-3.5 hover:scale-105 transition-transform duration-300"><img alt="Agendaya 3D Icon" class="w-12 h-12 object-contain drop-shadow-md" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTVfVHY55wvRcMJ-WTQHJUdaFT-4mpWJkAdkUZ299KxOv07HN2JHV9rrZpYB5xFCoHmqu76fzdCuosGLOPxObAm4wxGuF3OPZ-2TNmXkNP3Fa0pSgGloBbXPBBEputQPCvmiuA1PpZWjShIARy_L6w3OgTxJsnql5TglhE5j7ussgbc-_RoYU-uYyyFMa0yKEikuX1WnVqguy5-nN9Tr9VpHnTYNiCUeP_YjbYRXN0oGtu-w-VNVKgOMP2JVU7yPeYbA"/><div class="text-left"><span class="inline-block px-2 py-0.5 rounded-full text-[10px] font-extrabold uppercase bg-emerald-100 text-emerald-800 tracking-wider">Identidad Oficial</span><p class="font-display font-black text-sm text-slate-900 tracking-tight leading-snug">Auto-Agendamiento Inteligente SCZ</p></div><div class="h-8 w-px bg-slate-200 hidden sm:block"></div><img alt="Agendaya 3D Lockup" class="h-9 w-auto object-contain hidden sm:block" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCM1MXY1QpjvgaivgSy8RLpHsCS8ao4j0Y5OHyOeNmGbS1bSBLwlFvFpt35nDeeWARnNnufon0uKT9956Cw8dfFjL3Bg-ZY3_GGySTQvNwUiaCThNthPRo9aBW0XlpQELJpfSGkP5v-7ZjzfY9ERfeqbOAXiR4gb4eSiKC1uqjh_8BlIHW3sJ3CBevnl5LRPfTWc3CF0YU1J07Fi3huKmsMYFZNtYGirnDz-WTH-PXiQbETGHgXLEvWDZGF3UrTsdGiw"/></div></div>
<!-- Outer Bright Lime Curved Canvas (Direct ClubeMkt Visual Homage) -->
<div class="relative bg-gradient-to-b from-[#84CC16] to-[#65A30D] rounded-[2.5rem] md:rounded-[3.5rem] p-4 sm:p-8 lg:p-12 shadow-2xl shadow-brand-darklime/30 overflow-hidden">
<!-- ClubeMkt Graphic Starburst Accents inside the lime canvas -->
<div class="absolute top-6 left-8 text-black/20 pointer-events-none select-none">
<svg class="w-16 h-16 animate-spin" fill="currentColor" style="animation-duration: 25s;" viewbox="0 0 100 100">
<path d="M50 0 L58 35 L93 21 L69 47 L100 50 L69 53 L93 79 L58 65 L50 100 L42 65 L7 79 L31 53 L0 50 L31 47 L7 21 L42 35 Z"></path>
</svg>
</div>
<div class="absolute bottom-6 right-8 text-black/15 pointer-events-none select-none">
<svg class="w-20 h-20 animate-pulse-soft" fill="currentColor" viewbox="0 0 100 100">
<path d="M50 0 L58 35 L93 21 L69 47 L100 50 L69 53 L93 79 L58 65 L50 100 L42 65 L7 79 L31 53 L0 50 L31 47 L7 21 L42 35 Z"></path>
</svg>
</div>
<!-- Central Mockup Container (The Tablet Presentation) -->
<div class="relative bg-slate-900 rounded-[2rem] p-3 sm:p-5 shadow-2xl border-4 border-slate-950/80 mx-auto max-w-4xl text-left text-slate-800">
<!-- Tablet Header Bar -->
<div class="bg-slate-100 rounded-t-2xl px-4 py-3 flex items-center justify-between border-b border-slate-200">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-rose-400 inline-block"></span>
<span class="w-3 h-3 rounded-full bg-amber-400 inline-block"></span>
<span class="w-3 h-3 rounded-full bg-emerald-400 inline-block"></span>
<span class="ml-3 text-xs font-bold text-slate-500 hidden sm:inline">agendaya.bo/panel/equipetrol-salud</span>
</div>
<div class="flex items-center gap-2 text-xs font-bold text-slate-700 bg-white px-3 py-1 rounded-full border border-slate-200 shadow-sm">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
<span class="">Agenda Santa Cruz: Hoy en Vivo</span>
</div>
</div>
<!-- Tablet Screen Content -->
<div class="bg-white rounded-b-2xl p-4 sm:p-6 lg:p-8">
<!-- Quick Metric Top Row (ClubeMkt Stats Style) -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 mb-6">
<div class="bg-[#F7FEE7] border border-lime-200 rounded-2xl p-3.5 flex flex-col">
<span class="text-[11px] font-bold text-lime-800 uppercase tracking-wider">Citas Hoy</span>
<div class="flex items-baseline gap-2 mt-1">
<span class="font-display font-extrabold text-2xl sm:text-3xl text-slate-900">18</span>
<span class="text-xs font-semibold text-emerald-600 bg-emerald-100 px-1.5 py-0.5 rounded-full">+4 vs ayer</span>
</div>
</div>
<div class="bg-slate-50 border border-slate-200 rounded-2xl p-3.5 flex flex-col">
<span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider">Especialistas</span>
<div class="flex items-baseline gap-2 mt-1">
<span class="font-display font-extrabold text-2xl sm:text-3xl text-slate-900">6 / 6</span>
<span class="text-xs font-medium text-slate-500">Disponibles</span>
</div>
</div>
<div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-3.5 flex flex-col">
<span class="text-[11px] font-bold text-emerald-800 uppercase tracking-wider">Confirmadas WhatsApp</span>
<div class="flex items-baseline gap-2 mt-1">
<span class="font-display font-extrabold text-2xl sm:text-3xl text-emerald-700">100%</span>
<span class="text-xs font-medium text-emerald-600">Automático</span>
</div>
</div>
<div class="bg-sky-50 border border-sky-200 rounded-2xl p-3.5 flex flex-col">
<span class="text-[11px] font-bold text-sky-800 uppercase tracking-wider">Ingreso Estimado</span>
<div class="flex items-baseline gap-2 mt-1">
<span class="font-display font-extrabold text-xl sm:text-2xl text-slate-900">3,450 <span class="text-xs font-bold text-slate-500">Bs.</span></span>
</div>
</div>
</div>
<!-- Main Interactive Booking View Inside Mockup -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
<!-- Left Schedule List (Santa Cruz Clinica / Salon Slots) -->
<div class="lg:col-span-7 bg-slate-50 border border-slate-200 rounded-2xl p-4">
<div class="flex items-center justify-between pb-3 border-b border-slate-200 mb-3">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-brand-lime border border-brand-darklime"></span>
<h4 class="font-display font-bold text-sm text-slate-800">Citas Programadas · Hoy 14 de Octubre</h4>
</div>
<span class="text-xs font-semibold text-brand-darklime bg-lime-100 px-2.5 py-0.5 rounded-full">Equipetrol</span>
</div>
<div class="space-y-2.5 text-xs">
<!-- Appointment Item 1 -->
<div class="flex items-center justify-between p-2.5 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-lime-400 transition">
<div class="flex items-center gap-3">
<span class="font-mono font-bold text-slate-800 bg-slate-100 px-2 py-1 rounded-lg">15:00</span>
<div>
<p class="font-bold text-slate-900">Dra. Valeria Suárez</p>
<p class="text-slate-500 text-[11px]">Dermatología Clínica · Consultorio 4</p>
</div>
</div>
<span class="px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 font-semibold text-[10px] flex items-center gap-1">
<svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewbox="0 0 20 20"><path clip-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" fill-rule="evenodd"></path></svg>
                          WhatsApp OK
                        </span>
</div>
<!-- Appointment Item 2 -->
<div class="flex items-center justify-between p-2.5 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-lime-400 transition">
<div class="flex items-center gap-3">
<span class="font-mono font-bold text-slate-800 bg-slate-100 px-2 py-1 rounded-lg">16:15</span>
<div>
<p class="font-bold text-slate-900">Mauricio Antelo V.</p>
<p class="text-slate-500 text-[11px]">Diseño de Barba &amp; Spa Capilar</p>
</div>
</div>
<span class="px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 font-semibold text-[10px] flex items-center gap-1">
<svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewbox="0 0 20 20"><path clip-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" fill-rule="evenodd"></path></svg>
                          Confirmado
                        </span>
</div>
<!-- Appointment Item 3 -->
<div class="flex items-center justify-between p-2.5 bg-white rounded-xl border border-slate-200 shadow-sm hover:border-lime-400 transition">
<div class="flex items-center gap-3">
<span class="font-mono font-bold text-slate-800 bg-slate-100 px-2 py-1 rounded-lg">17:30</span>
<div>
<p class="font-bold text-slate-900">Dra. Gabriela Saucedo</p>
<p class="text-slate-500 text-[11px]">Notaría de Fe Pública #42 · Poder Especial</p>
</div>
</div>
<span class="px-2.5 py-1 rounded-full bg-amber-100 text-amber-800 font-semibold text-[10px]">
                          En Sala de Espera
                        </span>
</div>
</div>
</div>
<!-- Right Slot Selector (Direct ClubeMkt Green Grid Feature) -->
<div class="lg:col-span-5 bg-lime-50/70 border border-lime-200 rounded-2xl p-4 flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-3">
<span class="font-bold text-xs text-lime-950 uppercase tracking-wider">Horarios Libres Urubó</span>
<span class="text-[10px] bg-lime-200 text-lime-900 font-bold px-2 py-0.5 rounded-full">Hoy</span>
</div>
<p class="text-xs text-slate-600 mb-3 font-medium">Selecciona un turno para agendar en 30 segundos:</p>
<!-- Pill Matrix -->
<div class="grid grid-cols-2 gap-2">
<button class="py-2 px-3 rounded-xl bg-white border border-lime-300 font-bold text-slate-800 hover:bg-brand-lime hover:text-slate-950 transition text-xs shadow-sm" type="button">
                          18:00 hrs
                        </button>
<button class="py-2 px-3 rounded-xl bg-brand-slate text-brand-lime font-bold text-xs shadow-sm flex items-center justify-center gap-1" type="button">
<span class="">18:45 hrs</span>
<span class="w-1.5 h-1.5 rounded-full bg-brand-lime animate-ping"></span>
</button>
<button class="py-2 px-3 rounded-xl bg-white border border-lime-300 font-bold text-slate-800 hover:bg-brand-lime hover:text-slate-950 transition text-xs shadow-sm" type="button">
                          19:30 hrs
                        </button>
<button class="py-2 px-3 rounded-xl bg-white border border-lime-300 font-bold text-slate-800 hover:bg-brand-lime hover:text-slate-950 transition text-xs shadow-sm" type="button">
                          20:15 hrs
                        </button>
</div>
</div>
<!-- Instant QR Notification Mock -->
<div class="mt-4 p-2.5 bg-white rounded-xl border border-lime-200 flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-brand-cruz/10 text-brand-cruz flex items-center justify-center font-bold text-xs">
                        QR
                      </div>
<div class="text-[11px] leading-tight">
<p class="font-bold text-slate-900">Pago con Simple QR Bolivia</p>
<p class="text-slate-500">BCP, BNB, Fassil, Mercantil</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Floating WhatsApp Auto-Confirmation Card (ClubeMkt Signature Floating Widget) -->
<div class="hidden sm:flex absolute -bottom-4 -left-4 lg:left-8 bg-white border-2 border-emerald-400 p-4 rounded-2xl shadow-2xl items-center gap-3.5 max-w-sm animate-float z-20" data-purpose="floating-whatsapp-widget">
<div class="w-12 h-12 rounded-2xl bg-emerald-500 flex items-center justify-center text-white flex-shrink-0 shadow-lg shadow-emerald-500/30">
<svg class="w-6 h-6" fill="currentColor" viewbox="0 0 24 24">
<path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.592 2.654-.696c1.004.57 2.012.87 3.287.87h.001c3.181 0 5.767-2.586 5.768-5.766 0-3.18-2.587-5.766-5.768-5.766zm6.843 5.767c0 3.774-3.07 6.844-6.844 6.844-.99 0-1.956-.215-2.827-.604l-3.957 1.038 1.056-3.856c-.443-.906-.689-1.921-.689-2.986 0-3.774 3.07-6.844 6.844-6.844 3.774 0 6.844 3.07 6.844 6.844z"></path>
</svg>
</div>
<div class="text-left text-xs">
<div class="flex items-center gap-1.5 font-bold text-slate-900">
<span class="">WhatsApp Auto-Confirm</span>
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
</div>
<p class="text-slate-500 mt-0.5 text-[11px] leading-snug">"¡Hola Mariela! Tu cita en Los Cusis Spa está agendada para hoy a las 16:30 hrs."</p>
</div>
</div>
<!-- Floating Top Right Badge -->
<div class="hidden lg:flex absolute top-8 right-12 bg-slate-950 text-white px-4 py-2.5 rounded-2xl shadow-xl items-center gap-2.5 border border-slate-800">
<span class="w-3 h-3 rounded-full bg-brand-lime"></span>
<span class="font-display font-bold text-xs tracking-wide">98.4% ASISTENCIA PUNTUAL</span>
</div>
</div>
</div>
<!-- END: ClubeMktTabletShowcase -->
<!-- Client Trust Logo Strip -->
<div class="mt-14 pt-8 border-t border-slate-200/80">
<p class="text-xs uppercase font-extrabold tracking-widest text-slate-400 mb-6">
            Especialistas y centros autorizados en Santa Cruz confían en Agendaya
          </p>
<div class="flex flex-wrap items-center justify-center gap-8 md:gap-14 opacity-75 grayscale hover:grayscale-0 transition-all duration-300">
<span class="font-display font-extrabold text-lg sm:text-xl text-slate-800 flex items-center gap-1">
<span class="text-brand-cruz">●</span> CLÍNICA FOIANINI
            </span>
<span class="font-display font-extrabold text-lg sm:text-xl text-slate-800 flex items-center gap-1">
<span class="text-brand-lime">■</span> DERMACENTER SCZ
            </span>
<span class="font-display font-extrabold text-lg sm:text-xl text-slate-800 flex items-center gap-1">
<span class="text-slate-900">◆</span> NOTARÍA 42 CENTRAL
            </span>
<span class="font-display font-extrabold text-lg sm:text-xl text-slate-800 flex items-center gap-1">
<span class="text-brand-darklime">▲</span> STUDIO HAIR URUBÓ
            </span>
<span class="font-display font-extrabold text-lg sm:text-xl text-slate-800 flex items-center gap-1">
<span class="text-brand-cruz">★</span> DENTAL EQUIPETROL
            </span>
</div>
</div>
</div>
</section>
<!-- END: HeroSection -->
<!-- BEGIN: HowItWorks -->
<!-- ClubeMkt 01 - 02 - 03 Circular Badge Step Sequence -->
<section class="py-20 bg-white relative border-y border-lime-100" data-purpose="how-it-works-steps" id="como-funciona">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<!-- Section Header -->
<div class="text-center max-w-2xl mx-auto mb-16">
<span class="px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-lime-100 text-brand-darklime border border-lime-200">
            Flujo Simple &amp; Rápido
          </span>
<h2 class="font-display font-black text-3xl sm:text-4xl lg:text-5xl text-brand-slate mt-4 tracking-tight">
            Todo lo que necesitas para agendar tu día
          </h2>
<p class="text-slate-600 text-base mt-3">
            Olvídate de esperar respuestas por mensaje o llamadas que nadie atiende. En 3 toques tu cita está asegurada.
          </p>
</div>
<!-- 3 Step Cards with ClubeMkt Circular Number Badges -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
<!-- Step 1 -->
<div class="bg-[#FAFDF7] border-2 border-lime-200/80 rounded-3xl p-8 flex flex-col justify-between hover:border-brand-lime transition-all hover:shadow-xl hover:-translate-y-1">
<div>
<div class="w-16 h-16 rounded-full bg-brand-slate text-brand-lime flex items-center justify-center font-display font-black text-2xl shadow-lg shadow-slate-900/10 mb-6 border-4 border-lime-100">
                01
              </div>
<h3 class="font-display font-bold text-xl text-brand-slate mb-3">
                Busca especialista por zona
              </h3>
<p class="text-slate-600 text-sm leading-relaxed">
                Filtra por tu barrio o anillo preferido en Santa Cruz: Equipetrol, Urubó, Las Palmas o Casco Viejo. Consulta tarifas, credenciales y valoraciones reales.
              </p>
</div>
<div class="mt-6 pt-4 border-t border-lime-100 flex items-center text-xs font-bold text-brand-darklime">
<span class="">Geolocalización precisa</span>
<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
</div>
<!-- Step 2 -->
<div class="bg-gradient-to-b from-[#F0FDF4] to-white border-2 border-brand-lime rounded-3xl p-8 flex flex-col justify-between shadow-lg shadow-lime-500/10 hover:-translate-y-1 transition-all">
<div>
<div class="w-16 h-16 rounded-full bg-brand-lime text-brand-slate flex items-center justify-center font-display font-black text-2xl shadow-lg shadow-lime-500/20 mb-6 border-4 border-white">
                02
              </div>
<h3 class="font-display font-bold text-xl text-brand-slate mb-3">
                Elige tu turno en tiempo real
              </h3>
<p class="text-slate-600 text-sm leading-relaxed">
                Visualiza el calendario en vivo del profesional. Los horarios en verde son 100% disponibles y se actualizan al instante sin colisiones ni sobreturnos.
              </p>
</div>
<div class="mt-6 pt-4 border-t border-lime-100 flex items-center text-xs font-bold text-brand-cruz">
<span class="">Sincronización instantánea</span>
<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
</div>
<!-- Step 3 -->
<div class="bg-[#FAFDF7] border-2 border-lime-200/80 rounded-3xl p-8 flex flex-col justify-between hover:border-brand-lime transition-all hover:shadow-xl hover:-translate-y-1">
<div>
<div class="w-16 h-16 rounded-full bg-brand-slate text-brand-lime flex items-center justify-center font-display font-black text-2xl shadow-lg shadow-slate-900/10 mb-6 border-4 border-lime-100">
                03
              </div>
<h3 class="font-display font-bold text-xl text-brand-slate mb-3">
                Confirmación directa en WhatsApp
              </h3>
<p class="text-slate-600 text-sm leading-relaxed">
                Recibe el comprobante oficial de la cita, ubicación en Google Maps y recordatorio previo con botón de reprogramación si surge un imprevisto.
              </p>
</div>
<div class="mt-6 pt-4 border-t border-lime-100 flex items-center text-xs font-bold text-brand-darklime">
<span class="">Recordatorios automatizados</span>
<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</div>
</div>
</div>
</div>
</section>
<!-- END: HowItWorks -->
<!-- BEGIN: MainCategoriesSection -->
<!-- Utilizing the Exact SVG Category Icons Provided in Datastore -->
<section class="py-20 bg-[#FAFDF7]" data-purpose="service-categories" id="servicios">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<!-- Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between mb-14">
<div>
<span class="px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-100 text-brand-cruz border border-emerald-200">
              Categorías Principales
            </span>
<h2 class="font-display font-black text-3xl sm:text-5xl text-brand-slate mt-3 tracking-tight">
              Diseñado para servicios esenciales
            </h2>
</div>
<p class="mt-4 md:mt-0 text-slate-600 max-w-md text-sm">
            Miles de cruceños usan Agendaya para organizar consultas médicas, tratamientos de belleza y citas legales con profesionales certificados.
          </p>
</div>
<!-- Category Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Category 1: Salud & Medicina -->
<!-- Features DATA:IMAGE:IMAGE_7 SVG Icon -->
<div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-card-lift hover:border-emerald-400 hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
<div>
<div class="flex items-center justify-between mb-6">
<!-- SVG Icon from Snapshot DATA:IMAGE:IMAGE_7 -->
<div class="w-20 h-20 flex-shrink-0 transition-transform group-hover:scale-105">
<svg class="w-full h-full" viewbox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
<defs>
<lineargradient id="healthBgGrad" x1="0%" x2="100%" y1="0%" y2="100%">
<stop offset="0%" stop-color="#ECFDF5"></stop>
<stop offset="100%" stop-color="#D1FAE5"></stop>
</lineargradient>
<filter height="120%" id="healthShadow" width="120%" x="-10%" y="-10%">
<fedropshadow dx="0" dy="4" flood-color="#059669" flood-opacity="0.15" stddeviation="6"></fedropshadow>
</filter>
</defs>
<rect fill="url(#healthBgGrad)" filter="url(#healthShadow)" height="104" rx="28" width="104" x="8" y="8"></rect>
<rect fill="none" height="102.5" rx="27.25" stroke="#A7F3D0" stroke-width="1.5" width="102.5" x="8.75" y="8.75"></rect>
<rect fill="#059669" height="48" rx="14" width="48" x="36" y="32"></rect>
<path d="M60 42 V70 M46 56 H74" stroke="#FFFFFF" stroke-linecap="round" stroke-width="5.5"></path>
<path d="M30 68 L42 68 L48 58 L54 78 L62 62 L66 68 L90 68" fill="none" opacity="0.9" stroke="#06B6D4" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
<circle cx="84" cy="36" fill="#F59E0B" r="14" stroke="#FFFFFF" stroke-width="2.5"></circle>
<path d="M85 29 L80.5 36.5 H84.5 L83 43 L88 35.5 H84 Z" fill="#FFFFFF"></path>
</svg>
</div>
<span class="text-xs font-bold text-emerald-700 bg-emerald-100 px-3 py-1 rounded-full">
                  180+ Doctores
                </span>
</div>
<h3 class="font-display font-extrabold text-2xl text-brand-slate mb-2">
                Salud &amp; Medicina
              </h3>
<p class="text-slate-600 text-sm leading-relaxed mb-4">
                Pediatría, dermatología, odontología y laboratorios clínicos en Equipetrol, Foianini y Las Palmas. Citas garantizadas sin filas en sala.
              </p>
<!-- Tags -->
<div class="flex flex-wrap gap-1.5 mb-6 text-xs font-medium text-slate-700">
<span class="bg-slate-100 px-2.5 py-1 rounded-lg">Dermatología</span>
<span class="bg-slate-100 px-2.5 py-1 rounded-lg">Odontología</span>
<span class="bg-slate-100 px-2.5 py-1 rounded-lg">Ecografías</span>
</div>
</div>
<a class="w-full py-3 rounded-2xl bg-emerald-50 text-emerald-800 font-display font-bold text-sm text-center group-hover:bg-brand-cruz group-hover:text-white transition-all flex items-center justify-center gap-1.5" href="#medicos-scz">
<span class="">Ver Médicos Disponibles</span>
<svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</a>
</div>
<!-- Category 2: Belleza, Spa & Estética -->
<!-- Features DATA:IMAGE:IMAGE_6 SVG Icon -->
<div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-card-lift hover:border-amber-400 hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
<div>
<div class="flex items-center justify-between mb-6">
<!-- SVG Icon from Snapshot DATA:IMAGE:IMAGE_6 -->
<div class="w-20 h-20 flex-shrink-0 transition-transform group-hover:scale-105">
<svg class="w-full h-full" viewbox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
<defs>
<lineargradient id="beautyBgGrad" x1="0%" x2="100%" y1="0%" y2="100%">
<stop offset="0%" stop-color="#FFFBEB"></stop>
<stop offset="100%" stop-color="#FEF3C7"></stop>
</lineargradient>
<filter height="120%" id="beautyShadow" width="120%" x="-10%" y="-10%">
<fedropshadow dx="0" dy="4" flood-color="#F59E0B" flood-opacity="0.18" stddeviation="6"></fedropshadow>
</filter>
</defs>
<rect fill="url(#beautyBgGrad)" filter="url(#beautyShadow)" height="104" rx="28" width="104" x="8" y="8"></rect>
<rect fill="none" height="102.5" rx="27.25" stroke="#FDE68A" stroke-width="1.5" width="102.5" x="8.75" y="8.75"></rect>
<path d="M60 32 C54 44 51 55 60 74 C69 55 66 44 60 32 Z" fill="#059669"></path>
<path d="M60 74 C47 70 34 60 36 46 C46 45 54 57 60 74 Z" fill="#10B981" fill-opacity="0.85"></path>
<path d="M60 74 C73 70 86 60 84 46 C74 45 66 57 60 74 Z" fill="#10B981" fill-opacity="0.85"></path>
<path d="M38 72 C44 83 76 83 82 72" fill="none" stroke="#059669" stroke-linecap="round" stroke-width="4"></path>
<path d="M84 32 Q84 38 90 38 Q84 38 84 44 Q84 38 78 38 Q84 38 84 32 Z" fill="#F59E0B"></path>
<path d="M34 36 Q34 40 38 40 Q34 40 34 44 Q34 40 30 40 Q34 40 34 36 Z" fill="#F59E0B"></path>
<circle cx="60" cy="85" fill="#06B6D4" r="3"></circle>
</svg>
</div>
<span class="text-xs font-bold text-amber-800 bg-amber-100 px-3 py-1 rounded-full">
                  140+ Salones &amp; Spas
                </span>
</div>
<h3 class="font-display font-extrabold text-2xl text-brand-slate mb-2">
                Belleza &amp; Bienestar
              </h3>
<p class="text-slate-600 text-sm leading-relaxed mb-4">
                Barberías de autor, salones de manicura en Urubó, colocación de pestañas y spas corporativos con confirmación inmediata de tu sillón.
              </p>
<!-- Tags -->
<div class="flex flex-wrap gap-1.5 mb-6 text-xs font-medium text-slate-700">
<span class="bg-slate-100 px-2.5 py-1 rounded-lg">Corte &amp; Color</span>
<span class="bg-slate-100 px-2.5 py-1 rounded-lg">Nails Spa</span>
<span class="bg-slate-100 px-2.5 py-1 rounded-lg">Masajes Relax</span>
</div>
</div>
<a class="w-full py-3 rounded-2xl bg-amber-50 text-amber-900 font-display font-bold text-sm text-center group-hover:bg-amber-500 group-hover:text-white transition-all flex items-center justify-center gap-1.5" href="#estetica-scz">
<span class="">Explorar Salones &amp; Spas</span>
<svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</a>
</div>
<!-- Category 3: Legal & Notarías -->
<!-- Features DATA:IMAGE:IMAGE_5 SVG Icon -->
<div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-card-lift hover:border-sky-400 hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
<div>
<div class="flex items-center justify-between mb-6">
<!-- SVG Icon from Snapshot DATA:IMAGE:IMAGE_5 -->
<div class="w-20 h-20 flex-shrink-0 transition-transform group-hover:scale-105">
<svg class="w-full h-full" viewbox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
<defs>
<lineargradient id="legalBgGrad" x1="0%" x2="100%" y1="0%" y2="100%">
<stop offset="0%" stop-color="#F0F9FF"></stop>
<stop offset="100%" stop-color="#E0F2FE"></stop>
</lineargradient>
<filter height="120%" id="legalShadow" width="120%" x="-10%" y="-10%">
<fedropshadow dx="0" dy="4" flood-color="#0F172A" flood-opacity="0.12" stddeviation="6"></fedropshadow>
</filter>
</defs>
<rect fill="url(#legalBgGrad)" filter="url(#legalShadow)" height="104" rx="28" width="104" x="8" y="8"></rect>
<rect fill="none" height="102.5" rx="27.25" stroke="#BAE6FD" stroke-width="1.5" width="102.5" x="8.75" y="8.75"></rect>
<circle cx="60" cy="33" fill="#0F172A" r="4.5"></circle>
<rect fill="#0F172A" height="42" rx="2" width="4" x="58" y="36"></rect>
<path d="M46 80 H74" stroke="#0F172A" stroke-linecap="round" stroke-width="4.5"></path>
<rect fill="#059669" height="6" rx="2" width="20" x="50" y="74"></rect>
<path d="M34 43 Q60 40 86 43" fill="none" stroke="#0F172A" stroke-linecap="round" stroke-width="4"></path>
<path d="M34 43 L26 58 M34 43 L42 58" fill="none" stroke="#06B6D4" stroke-linecap="round" stroke-width="2"></path>
<path d="M23 58 C23 66 45 66 45 58 Z" fill="#059669"></path>
<path d="M86 43 L78 58 M86 43 L94 58" fill="none" stroke="#06B6D4" stroke-linecap="round" stroke-width="2"></path>
<path d="M75 58 C75 66 97 66 97 58 Z" fill="#059669"></path>
<circle cx="86" cy="30" fill="#059669" r="11" stroke="#FFFFFF" stroke-width="2"></circle>
<path d="M82 30 L85 33 L90 27" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</div>
<span class="text-xs font-bold text-sky-800 bg-sky-100 px-3 py-1 rounded-full">
                  65+ Notarías y Bufetes
                </span>
</div>
<h3 class="font-display font-extrabold text-2xl text-brand-slate mb-2">
                Legal &amp; Notarial
              </h3>
<p class="text-slate-600 text-sm leading-relaxed mb-4">
                Poderes notariales, trámites de transferencia de vehículos e inmuebles, asesoría tributaria y autenticación de firmas sin esperas tediosas.
              </p>
<!-- Tags -->
<div class="flex flex-wrap gap-1.5 mb-6 text-xs font-medium text-slate-700">
<span class="bg-slate-100 px-2.5 py-1 rounded-lg">Poder Notarial</span>
<span class="bg-slate-100 px-2.5 py-1 rounded-lg">Contratos</span>
<span class="bg-slate-100 px-2.5 py-1 rounded-lg">Asesoría B2B</span>
</div>
</div>
<a class="w-full py-3 rounded-2xl bg-sky-50 text-sky-900 font-display font-bold text-sm text-center group-hover:bg-brand-slate group-hover:text-brand-lime transition-all flex items-center justify-center gap-1.5" href="#legal-scz">
<span class="">Agendar con un Notario</span>
<svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
</a>
</div>
</div>
</div>
</section>
<!-- END: MainCategoriesSection -->
<!-- BEGIN: BentoFeaturesGrid -->
<!-- ClubeMkt Inspired Bento Box: WhatsApp focus, calendar widget, analytics for Santa Cruz businesses -->
<section class="py-24 bg-white border-t border-slate-100" data-purpose="bento-features" id="para-negocios">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-3xl mx-auto mb-16">
<span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-lime-100 text-brand-darklime border border-lime-200">
            Poderoso para Negocios
          </span>
<h2 class="font-display font-black text-3xl sm:text-5xl text-brand-slate mt-4 tracking-tight">
            Hecho a medida para el comercio cruceño
          </h2>
<p class="text-slate-600 text-base sm:text-lg mt-3">
            Automatiza la recepción de clientes mientras atiendes. Control total desde tu celular, tablet o computadora.
          </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">
<!-- Bento Card 1: WhatsApp Bot & Notifications (Large 7 Cols) -->
<div class="md:col-span-7 bg-brand-slate rounded-3xl p-8 text-white relative overflow-hidden flex flex-col justify-between">
<div class="relative z-10">
<div class="flex items-center gap-3 mb-6">
<span class="w-10 h-10 rounded-xl bg-emerald-500 text-white flex items-center justify-center text-xl font-bold">
                  💬
                </span>
<span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-950/80 px-3 py-1 rounded-full border border-emerald-800">
                  Integración Nativa WhatsApp API
                </span>
</div>
<h3 class="font-display font-extrabold text-2xl sm:text-3xl text-white mb-3">
                Cero ausencias injustificadas. Recordatorios que sí se leen.
              </h3>
<p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-lg mb-6">
                El 99% de tus clientes en Santa Cruz usan WhatsApp todo el día. Agendaya envía alertas de cortesía 2 horas antes con botón para confirmar o ceder el turno a otra persona.
              </p>
</div>
<!-- WhatsApp Chat Message Simulation -->
<div class="relative z-10 bg-slate-800/90 rounded-2xl p-4 border border-slate-700 max-w-md shadow-lg">
<div class="flex items-start gap-3">
<div class="w-9 h-9 rounded-full bg-brand-lime flex items-center justify-center text-slate-900 font-extrabold text-xs">
                  CY
                </div>
<div class="text-xs leading-relaxed">
<div class="flex items-center justify-between">
<span class="font-bold text-white">Agendaya Bot (Clínica Equipetrol)</span>
<span class="text-slate-400 text-[10px]">10:30 am</span>
</div>
<p class="text-slate-200 mt-1">
                    "Hola Carlos, tu cita con el Dr. Foianini es hoy a las 15:30. Para confirmar responde <strong>1</strong>, para reprogramar responde <strong>2</strong>."
                  </p>
<div class="mt-2 flex gap-2">
<span class="px-2 py-1 rounded bg-emerald-600 text-white font-bold text-[10px]">✓ Confirmada por Carlos</span>
</div>
</div>
</div>
</div>
<!-- Decorative background gradient -->
<div class="absolute -right-16 -bottom-16 w-80 h-80 bg-brand-lime/10 rounded-full blur-3xl pointer-events-none"></div>
</div>
<!-- Bento Card 2: Simple QR Bolivia (5 Cols) -->
<div class="md:col-span-5 bg-gradient-to-br from-[#FAFDF7] to-[#F0FDF4] border-2 border-lime-200 rounded-3xl p-8 flex flex-col justify-between">
<div>
<div class="w-12 h-12 rounded-2xl bg-brand-lime text-brand-slate flex items-center justify-center text-2xl font-black mb-6 shadow-md shadow-lime-500/20">
                Bs.
              </div>
<h3 class="font-display font-extrabold text-2xl text-brand-slate mb-2">
                Cobro anticipado con Simple QR
              </h3>
<p class="text-slate-600 text-sm leading-relaxed mb-4">
                Garantiza el turno cobrando una seña de 50 Bs. o el monto completo mediante código QR compatible con todos los bancos bolivianos.
              </p>
</div>
<div class="bg-white rounded-2xl p-4 border border-lime-200 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-slate-900 flex items-center justify-center text-brand-lime font-mono text-xs font-black">
                  QR
                </div>
<div>
<p class="text-xs font-bold text-slate-800">Interoperabilidad 100%</p>
<p class="text-[11px] text-slate-500">Acreditación directa a tu cuenta</p>
</div>
</div>
<span class="text-xs font-bold text-emerald-700 bg-emerald-100 px-2 py-1 rounded-md">0% Fricción</span>
</div>
</div>
<!-- Bento Card 3: Multi-Staff & Calendar Sync (5 Cols) -->
<div class="md:col-span-5 bg-[#F8FAFC] border border-slate-200 rounded-3xl p-8 flex flex-col justify-between">
<div>
<span class="text-xs font-bold uppercase tracking-wider text-slate-500 bg-slate-200 px-3 py-1 rounded-full">
                Multiequipo &amp; Sucursales
              </span>
<h3 class="font-display font-extrabold text-2xl text-brand-slate mt-4 mb-2">
                Gestión de sillones y médicos
              </h3>
<p class="text-slate-600 text-sm leading-relaxed mb-4">
                Asigna turnos individuales a cada dentista, estilista o abogado. Cada uno tiene su propio acceso en su celular sin ver las finanzas del otro.
              </p>
</div>
<div class="space-y-2">
<div class="flex items-center justify-between bg-white p-2.5 rounded-xl border border-slate-200 text-xs">
<span class="font-bold text-slate-700">Dr. Suárez (Consultorio 1)</span>
<span class="text-emerald-600 font-semibold">4 citas hoy</span>
</div>
<div class="flex items-center justify-between bg-white p-2.5 rounded-xl border border-slate-200 text-xs">
<span class="font-bold text-slate-700">Lic. Justiniano (Sala A)</span>
<span class="text-emerald-600 font-semibold">6 citas hoy</span>
</div>
</div>
</div>
<!-- Bento Card 4: Metrics & Weekly Analytics (7 Cols) -->
<div class="md:col-span-7 bg-[#FAFDF7] border-2 border-brand-lime/80 rounded-3xl p-8 flex flex-col justify-between">
<div class="flex items-center justify-between mb-4">
<div>
<span class="text-xs font-bold uppercase tracking-wider text-brand-darklime bg-lime-100 px-3 py-1 rounded-full border border-lime-200">
                  Panel Estadístico Semanal
                </span>
<h3 class="font-display font-extrabold text-2xl sm:text-3xl text-brand-slate mt-2">
                  Control exacto de ingresos y concurrencia
                </h3>
</div>
<div class="hidden sm:block text-right">
<span class="text-xs text-slate-500">Últimos 7 días</span>
<p class="font-display font-black text-xl text-brand-slate">+28,400 Bs.</p>
</div>
</div>
<!-- Simulated Bar Chart from ClubeMkt Weekly Bookings Component -->
<div class="bg-white rounded-2xl p-5 border border-lime-200">
<div class="flex items-end justify-between h-28 gap-2 pt-2">
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full bg-lime-100 rounded-t-lg h-[45%]"></div>
<span class="text-[10px] font-bold text-slate-400">Lun</span>
</div>
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full bg-lime-200 rounded-t-lg h-[60%]"></div>
<span class="text-[10px] font-bold text-slate-400">Mar</span>
</div>
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full bg-lime-300 rounded-t-lg h-[75%]"></div>
<span class="text-[10px] font-bold text-slate-400">Mié</span>
</div>
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full bg-brand-lime rounded-t-lg h-[90%] shadow-sm"></div>
<span class="text-[10px] font-bold text-slate-800">Jue</span>
</div>
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full bg-brand-slate rounded-t-lg h-[100%] shadow-md"></div>
<span class="text-[10px] font-extrabold text-brand-slate">Vie (Pico)</span>
</div>
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full bg-brand-lime rounded-t-lg h-[85%]"></div>
<span class="text-[10px] font-bold text-slate-800">Sáb</span>
</div>
<div class="flex-1 flex flex-col items-center gap-1.5 h-full justify-end">
<div class="w-full bg-slate-200 rounded-t-lg h-[25%]"></div>
<span class="text-[10px] font-bold text-slate-400">Dom</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- END: BentoFeaturesGrid -->
<!-- BEGIN: NumbersAndMetrics -->
<section class="py-16 bg-brand-slate text-white border-y border-slate-800" data-purpose="metrics-counter">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
<div class="p-4">
<span class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-brand-lime">
              +45,000
            </span>
<p class="text-slate-300 text-xs sm:text-sm uppercase tracking-wider font-semibold mt-2">
              Citas Agendadas con Éxito
            </p>
</div>
<div class="p-4">
<span class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-white">
              98.4%
            </span>
<p class="text-slate-300 text-xs sm:text-sm uppercase tracking-wider font-semibold mt-2">
              Tasa de Asistencia Puntual
            </p>
</div>
<div class="p-4">
<span class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-brand-lime">
              3.5 Horas
            </span>
<p class="text-slate-300 text-xs sm:text-sm uppercase tracking-wider font-semibold mt-2">
              Ahorro Diario al Negocio
            </p>
</div>
<div class="p-4">
<span class="font-display font-black text-4xl sm:text-5xl lg:text-6xl text-white">
              0 Bs.
            </span>
<p class="text-slate-300 text-xs sm:text-sm uppercase tracking-wider font-semibold mt-2">
              Comisión por Cliente Final
            </p>
</div>
</div>
</div>
</section>
<!-- END: NumbersAndMetrics -->
<!-- BEGIN: TestimonialsSection -->
<section class="py-24 bg-[#FAFDF7]" data-purpose="client-testimonials" id="testimonios">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-2xl mx-auto mb-16">
<span class="px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-lime-100 text-brand-darklime border border-lime-200">
            Casos de Éxito en Santa Cruz
          </span>
<h2 class="font-display font-black text-3xl sm:text-4xl text-brand-slate mt-3">
            Lo que dicen los profesionales que ya automatizaron su agenda
          </h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Testimonial 1 -->
<div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-sm flex flex-col justify-between">
<div>
<!-- Stars -->
<div class="flex text-amber-400 mb-4 text-sm">
                ★★★★★
              </div>
<p class="text-slate-700 text-sm leading-relaxed mb-6 italic">
                "Antes perdíamos hasta 3 horas al día coordinando turnos por WhatsApp y llamadas que chocaban. Desde que implementamos Agendaya en nuestro centro dermatológico en Equipetrol, los pacientes reservan solos y el índice de faltas bajó a casi cero."
              </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-slate-100">
<div class="w-11 h-11 rounded-full bg-emerald-100 text-brand-cruz font-display font-black flex items-center justify-center">
                CT
              </div>
<div>
<h4 class="font-bold text-sm text-slate-900">Dra. Camila Terrazas</h4>
<p class="text-xs text-slate-500">Dermatóloga · Equipetrol Norte</p>
</div>
</div>
</div>
<!-- Testimonial 2 -->
<div class="bg-[#F0FDF4] rounded-3xl p-7 border-2 border-brand-lime shadow-md flex flex-col justify-between">
<div>
<div class="flex text-amber-400 mb-4 text-sm">
                ★★★★★
              </div>
<p class="text-slate-700 text-sm leading-relaxed mb-6 italic">
                "En la notaría solían formarse colas innecesarias para tramitar poderes y firmas. Ahora cada ciudadano llega exactamente en el turno de 20 minutos que reservó en Agendaya. Es el cambio más positivo que hicimos este año."
              </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-lime-200">
<div class="w-11 h-11 rounded-full bg-slate-900 text-brand-lime font-display font-black flex items-center justify-center">
                RJ
              </div>
<div>
<h4 class="font-bold text-sm text-slate-900">Lic. Rodrigo Justiniano</h4>
<p class="text-xs text-slate-500">Notario de Fe Pública · Casco Viejo</p>
</div>
</div>
</div>
<!-- Testimonial 3 -->
<div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-sm flex flex-col justify-between">
<div>
<div class="flex text-amber-400 mb-4 text-sm">
                ★★★★★
              </div>
<p class="text-slate-700 text-sm leading-relaxed mb-6 italic">
                "Nuestras clientas de Urubó aman poder elegir su estilista favorita y agendar a medianoche si quieren. La integración con WhatsApp les envía la confirmación con la ubicación de Google Maps sin que nosotras hagamos nada manual."
              </p>
</div>
<div class="flex items-center gap-3 pt-4 border-t border-slate-100">
<div class="w-11 h-11 rounded-full bg-amber-100 text-amber-800 font-display font-black flex items-center justify-center">
                MV
              </div>
<div>
<h4 class="font-bold text-sm text-slate-900">Mariela Vaca</h4>
<p class="text-xs text-slate-500">Directora · Studio Hair &amp; Spa Urubó</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- END: TestimonialsSection -->
<!-- BEGIN: PreFooterCallToAction -->
<!-- ClubeMkt High-Energy Lime CTA Banner Card -->
<section class="py-16 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="bg-gradient-to-r from-[#84CC16] via-[#A3E635] to-[#65A30D] rounded-[2.5rem] p-8 sm:p-12 lg:p-16 shadow-2xl shadow-lime-600/30 text-center relative overflow-hidden" data-purpose="cta-banner">
<!-- Background starburst accents -->
<div class="absolute -top-10 -left-10 text-white/20 pointer-events-none">
<svg class="w-36 h-36" fill="currentColor" viewbox="0 0 100 100">
<path d="M50 0 L58 35 L93 21 L69 47 L100 50 L69 53 L93 79 L58 65 L50 100 L42 65 L7 79 L31 53 L0 50 L31 47 L7 21 L42 35 Z"></path>
</svg>
</div>
<div class="relative z-10 max-w-3xl mx-auto">
<span class="inline-block px-4 py-1 rounded-full bg-slate-950 text-white text-xs font-extrabold uppercase tracking-wider mb-6">
              ¡Comienza Hoy Mismo!
            </span>
<h2 class="font-display font-black text-3xl sm:text-5xl lg:text-6xl text-brand-slate tracking-tight leading-tight">
              ¿Listo para automatizar tus citas en Santa Cruz?
            </h2>
<p class="mt-4 text-base sm:text-lg text-slate-900 font-medium max-w-xl mx-auto">
              Crea tu perfil en menos de 5 minutos. Sin contratos forzosos y con soporte local 24/7 vía WhatsApp.
            </p>
<div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
<a class="w-full sm:w-auto px-8 py-4 rounded-full bg-brand-slate text-brand-lime font-display font-extrabold text-base hover:bg-slate-900 shadow-xl transition-transform hover:scale-105 active:scale-95" href="#registro">
                Registrar Mi Negocio Gratis
              </a>
<a class="w-full sm:w-auto px-7 py-4 rounded-full bg-white text-slate-900 font-display font-bold text-base hover:bg-slate-50 transition-colors flex items-center justify-center gap-2" href="#contacto-whatsapp">
<span class="">Hablar con un Asesor Local</span>
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
</a>
</div>
<p class="mt-4 text-xs font-semibold text-slate-800">
              No requiere tarjeta de crédito para iniciar la prueba gratuita de 30 días.
            </p>
</div>
</div>
</div>
</section>
<!-- END: PreFooterCallToAction -->
</main>
<!-- BEGIN: MainFooter -->
<!-- Dark Slate Neo-Modern Footer matching ClubeMkt Dribbble aesthetic -->
<footer class="bg-brand-slate text-white pt-16 pb-12 border-t border-slate-800" data-purpose="site-footer">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800 text-sm">
<!-- Brand Info Col -->
<div class="lg:col-span-2">
<a class="flex items-center gap-2.5 mb-4" href="#"><div class="bg-white/95 rounded-2xl p-2 px-3 inline-flex items-center shadow-md"><img alt="Agendaya Bolivia" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDud6K6qe-PM44p_YqGQr7E0VHqvqUJLkKcf_HJt9r2XFeFQcdVi3TszD2t3qRbunFcOQvbPyDyXHgrgYVQELOsaYjBUzbC8tV-JKJX5NOBSr_FplZU3iUR9hYFGYmf-6U5uP6Oi9PMV8BcUitM6_p6Fv4NrEz4C4T868DwTOw4f-hvVPNbqyVfRBok9eks2RSev-jEbH7UWOQ_Plf7rAhhP2WSRCA1KHEIJC37rAHXwcXfgXSikKWkDl2bxRiJmsB7aA"/></div></a>
<p class="text-slate-400 text-xs sm:text-sm leading-relaxed max-w-sm mb-6">
            La plataforma líder de auto-agendamiento y confirmación instantánea por WhatsApp para profesionales y comercios de servicios en Bolivia.
          </p>
<div class="flex items-center gap-2 text-xs font-semibold text-slate-400">
<span class="">Sede Central:</span>
<span class="text-brand-lime">Av. San Martín #1550, Equipetrol, Santa Cruz</span>
</div>
</div>
<!-- Col 2: Servicios -->
<div>
<h4 class="font-display font-bold text-sm text-white uppercase tracking-wider mb-4">Categorías</h4>
<ul class="space-y-2.5 text-xs text-slate-400">
<li class=""><a class="hover:text-brand-lime transition" href="#servicios">Médicos &amp; Odontólogos</a></li>
<li class=""><a class="hover:text-brand-lime transition" href="#servicios">Salones de Belleza &amp; Barber</a></li>
<li class=""><a class="hover:text-brand-lime transition" href="#servicios">Notarías &amp; Abogados</a></li>
<li class=""><a class="hover:text-brand-lime transition" href="#servicios">Veterinarias 24 Horas</a></li>
<li class=""><a class="hover:text-brand-lime transition" href="#servicios">Talleres &amp; Mantenimiento</a></li>
</ul>
</div>
<!-- Col 3: Plataforma -->
<div>
<h4 class="font-display font-bold text-sm text-white uppercase tracking-wider mb-4">Negocios</h4>
<ul class="space-y-2.5 text-xs text-slate-400">
<li class=""><a class="hover:text-brand-lime transition" href="#para-negocios">Cómo Funciona</a></li>
<li class=""><a class="hover:text-brand-lime transition" href="#para-negocios">Integración con WhatsApp</a></li>
<li class=""><a class="hover:text-brand-lime transition" href="#para-negocios">Cobros con Simple QR</a></li>
<li class=""><a class="hover:text-brand-lime transition" href="#precios">Planes y Precios</a></li>
<li class=""><a class="hover:text-brand-lime transition" href="#">Descargar App Móvil</a></li>
</ul>
</div>
<!-- Col 4: Ciudades & Cobertura -->
<div>
<h4 class="font-display font-bold text-sm text-white uppercase tracking-wider mb-4">Cobertura Bolivia</h4>
<ul class="space-y-2.5 text-xs text-slate-400">
<li class="flex items-center gap-1.5 text-white font-medium">
<span class="w-2 h-2 rounded-full bg-brand-lime"></span> Santa Cruz (Equipetrol/Urubó)
            </li>
<li class="flex items-center gap-1.5 text-slate-400">
<span class="w-1.5 h-1.5 rounded-full bg-slate-500"></span> La Paz (Zona Sur/Calacoto)
            </li>
<li class="flex items-center gap-1.5 text-slate-400">
<span class="w-1.5 h-1.5 rounded-full bg-slate-500"></span> Cochabamba (Cala Cala)
            </li>
<li class="pt-2 text-[11px] text-slate-500">
              Próximamente Sucre y Tarija
            </li>
</ul>
</div>
</div>
<!-- Bottom Credits & Compliance -->
<div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
<p class="">© 2025 Agendaya Bolivia S.R.L. Todos los derechos reservados.</p>
<div class="flex gap-6">
<a class="hover:text-slate-400 transition" href="#">Términos de Servicio</a>
<a class="hover:text-slate-400 transition" href="#">Política de Privacidad</a>
<a class="hover:text-slate-400 transition" href="#">Soporte Técnico</a>
</div>
</div>
</div>
</footer>
<!-- END: MainFooter -->
</body></html>