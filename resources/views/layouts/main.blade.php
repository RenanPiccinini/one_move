<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ONE MOVE RUN 2027 | 12 Cidades. 12 Etapas. Um Movimento.')</title>
    <meta name="description" content="@yield('meta_description', 'Circuito Nacional ONE MOVE RUN 2027. Uma corrida desenhada para ser vivida. 12 capitais, distâncias de 5K, 10K e 21K, estrutura de alta performance e experiências memoráveis.')">
    
    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'ONE MOVE RUN 2027 | 12 Cidades. 12 Etapas. Um Movimento.')">
    <meta property="og:description" content="@yield('meta_description', 'Viva a experiência ONE MOVE. Conheça as 12 etapas, kits exclusivos e garanta sua vaga.')">
    <meta property="og:image" content="{{ asset('images/brand/hero-home.jpg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,700&family=Syne:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-[#07080B] text-slate-100 antialiased selection:bg-[#FF4D00] selection:text-white flex flex-col min-h-screen">

    <!-- Top Neon Ticker -->
    <div class="bg-gradient-to-r from-[#0E1017] via-[#171A24] to-[#0E1017] border-b border-white/5 py-2 px-4 overflow-hidden relative text-xs font-semibold text-slate-300">
        <div class="max-w-[1600px] mx-auto flex items-center justify-between whitespace-nowrap gap-4">
            <div class="flex items-center gap-3 shrink-0">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-[#FF4D00]/20 text-[#FF6A1A] border border-[#FF4D00]/30 font-bold uppercase tracking-wider text-[10px] whitespace-nowrap">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#FF4D00] animate-ping"></span>
                    Circuito 2027
                </span>
                <span class="hidden sm:inline text-slate-400 whitespace-nowrap">⚡ 12 Cidades • 12 Etapas • Um Movimento</span>
            </div>
            <div class="flex items-center gap-6 shrink-0 whitespace-nowrap">
                <a href="{{ route('stages.show', 'brasilia') }}" class="text-[#FF7A00] hover:text-[#FFA033] transition flex items-center gap-1 whitespace-nowrap">
                    <span>Próxima Etapa: <strong>Brasília / DF</strong> (15 Mar)</span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                </a>
                <div class="hidden md:flex items-center gap-3 text-slate-400 whitespace-nowrap">
                    <span class="w-1 h-1 rounded-full bg-white/20"></span>
                    <a href="{{ route('pages.faq') }}" class="hover:text-white transition whitespace-nowrap">Dúvidas?</a>
                    <a href="{{ route('contact.index') }}" class="hover:text-white transition whitespace-nowrap">Contato</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-50 glass-header border-b border-white/10 transition-all duration-300" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 gap-4">
                
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 shrink-0 group focus:outline-none">
                    <div class="flex items-center gap-2">
                        <!-- Custom ONE MOVE Brand Mark -->
                        <div class="flex items-center gap-1">
                            <span class="font-syne font-black text-2xl tracking-widest text-white group-hover:text-slate-100 transition">ONE</span>
                            <div class="w-4 h-1 bg-gradient-to-r from-[#FF7A00] to-[#FF4D00] rounded-full group-hover:w-6 transition-all duration-300"></div>
                            <span class="font-syne font-black text-2xl tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] via-[#FF4D00] to-[#FF2A00] group-hover:brightness-110 transition">
                                MOVE
                            </span>
                        </div>
                        <span class="px-1.5 py-0.5 rounded text-[10px] font-black uppercase tracking-widest bg-white/10 text-white/90 border border-white/10 shrink-0">
                            RUN
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Links - Single Row Always -->
                <nav class="hidden xl:flex items-center gap-3.5 2xl:gap-6 text-xs 2xl:text-sm font-semibold text-slate-300 whitespace-nowrap">
                    <a href="{{ route('home') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('home') ? 'text-[#FF4D00] font-bold' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('pages.circuito') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('pages.circuito') ? 'text-[#FF4D00] font-bold' : '' }}">
                        O Circuito
                    </a>
                    <a href="{{ route('stages.index') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('stages.*') ? 'text-[#FF4D00] font-bold' : '' }}">
                        Etapas
                    </a>
                    <a href="{{ route('pages.calendario') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('pages.calendario') ? 'text-[#FF4D00] font-bold' : '' }}">
                        Calendário 2027
                    </a>
                    <a href="{{ route('pages.kits') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('pages.kits') ? 'text-[#FF4D00] font-bold' : '' }}">
                        Kits
                    </a>
                    <a href="{{ route('pages.percursos') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('pages.percursos') ? 'text-[#FF4D00] font-bold' : '' }}">
                        Percursos
                    </a>
                    <a href="{{ route('pages.resultados') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('pages.resultados') ? 'text-[#FF4D00] font-bold' : '' }}">
                        Resultados & Fotos
                    </a>
                    <a href="{{ route('pages.regulamentos') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('pages.regulamentos') ? 'text-[#FF4D00] font-bold' : '' }}">
                        Regulamento
                    </a>
                    <a href="{{ route('pages.patrocinadores') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('pages.patrocinadores') ? 'text-[#FF4D00] font-bold' : '' }}">
                        Parceiros
                    </a>
                </nav>

                <!-- Action CTA Button - Single Line Always -->
                <div class="hidden sm:flex items-center gap-3 shrink-0">
                    <a href="{{ route('stages.index') }}" class="btn-primary-onemove text-xs px-5 py-2.5 whitespace-nowrap shrink-0">
                        <i data-lucide="map-pin" class="w-3.5 h-3.5 shrink-0"></i>
                        <span>Escolha sua Etapa</span>
                    </a>
                </div>

                <!-- Mobile Hamburger Toggle -->
                <div class="xl:hidden flex items-center shrink-0">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="p-2 rounded-lg text-slate-300 hover:text-white hover:bg-white/10 focus:outline-none" aria-label="Abrir Menu">
                        <i x-show="!mobileMenuOpen" data-lucide="menu" class="w-6 h-6"></i>
                        <i x-show="mobileMenuOpen" data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="xl:hidden glass-panel border-b border-white/10 px-4 pt-3 pb-6 space-y-2.5"
             style="display: none;">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">Home</a>
            <a href="{{ route('pages.circuito') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">O Circuito</a>
            <a href="{{ route('stages.index') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold text-[#FF6A1A] hover:bg-white/5">12 Etapas</a>
            <a href="{{ route('pages.calendario') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">Calendário 2027</a>
            <a href="{{ route('pages.kits') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">Kits do Atleta</a>
            <a href="{{ route('pages.percursos') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">Percursos</a>
            <a href="{{ route('pages.resultados') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">Resultados & Fotos</a>
            <a href="{{ route('pages.regulamentos') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">Regulamento</a>
            <a href="{{ route('pages.faq') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">Dúvidas Frequentes</a>
            <a href="{{ route('pages.patrocinadores') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">Patrocinadores</a>
            <a href="{{ route('contact.index') }}" class="block px-3 py-2 rounded-lg text-sm font-semibold hover:bg-white/5 hover:text-[#FF4D00]">Contato</a>
            
            <div class="pt-2">
                <a href="{{ route('stages.index') }}" class="btn-primary-onemove w-full text-center text-sm py-3 justify-center">
                    <i data-lucide="flame" class="w-4 h-4 inline-block mr-1"></i>
                    <span>Ver as 12 Etapas</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Yield -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Global Official Partners & Sponsors Marquee -->
    <section class="py-12 border-t border-b border-white/5 bg-[#0B0D12] overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <span class="text-xs uppercase tracking-widest text-[#FF7A00] font-bold">Ecossistema & Parcerias Estratégicas</span>
                <h3 class="text-xl sm:text-2xl font-syne font-bold text-white mt-1">QUEM MOVE ESSE CIRCUITO CONOSCO</h3>
            </div>

            <!-- Sponsor Categories -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-6 items-stretch">
                <!-- Penalty -->
                <div class="glass-panel p-4 sm:p-6 rounded-2xl flex flex-col items-center justify-center text-center group hover:border-[#FF4D00]/40 transition min-h-[120px] sm:min-h-[140px]">
                    <span class="text-[9px] sm:text-[10px] uppercase font-bold text-slate-400 mb-2 tracking-wider">Equipar o Movimento</span>
                    <span class="text-xl sm:text-2xl font-black font-syne tracking-tighter text-white group-hover:text-[#FF4D00] transition">PENALTY</span>
                    <span class="text-[11px] sm:text-xs text-slate-400 mt-1">Material Esportivo Oficial</span>
                </div>
                <!-- Adrun -->
                <div class="glass-panel p-4 sm:p-6 rounded-2xl flex flex-col items-center justify-center text-center group hover:border-[#FF4D00]/40 transition min-h-[120px] sm:min-h-[140px]">
                    <span class="text-[9px] sm:text-[10px] uppercase font-bold text-slate-400 mb-2 tracking-wider">Novo Jeito de Viver a Corrida</span>
                    <span class="text-xl sm:text-2xl font-black font-syne tracking-widest text-white group-hover:text-[#FF7A00] transition">adrun</span>
                    <span class="text-[11px] sm:text-xs text-slate-400 mt-1">Calçados & Performance</span>
                </div>
                <!-- Integralmédica -->
                <div class="glass-panel px-3 py-4 sm:p-6 rounded-2xl flex flex-col items-center justify-center text-center group hover:border-[#FF4D00]/40 transition min-h-[120px] sm:min-h-[140px] overflow-hidden">
                    <span class="text-[9px] sm:text-[10px] uppercase font-bold text-slate-400 mb-2 tracking-wider">Nutrição Oficial</span>
                    <span class="text-[clamp(11px,1.15vw,17px)] font-black font-syne tracking-tighter text-white group-hover:text-[#FF4D00] transition whitespace-nowrap block text-center leading-tight my-0.5">INTEGRALMÉDICA</span>
                    <span class="text-[11px] sm:text-xs text-slate-400 mt-1">Suplementação & Recovery</span>
                </div>
                <!-- Invictus -->
                <div class="glass-panel p-4 sm:p-6 rounded-2xl flex flex-col items-center justify-center text-center group hover:border-[#FF4D00]/40 transition min-h-[120px] sm:min-h-[140px]">
                    <span class="text-[9px] sm:text-[10px] uppercase font-bold text-slate-400 mb-2 tracking-wider">Equipamentos & Bolsas PRO</span>
                    <span class="text-xl sm:text-2xl font-black font-syne tracking-wider text-white group-hover:text-[#FF7A00] transition">INVICTUS</span>
                    <span class="text-[11px] sm:text-xs text-slate-400 mt-1">Acessórios Táticos & Outdoor</span>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('pages.patrocinadores') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-400 hover:text-[#FF6A1A] transition">
                    <span>Sua marca no maior circuito de corrida de experiência do país • Seja um Patrocinador</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#050608] border-t border-white/10 pt-16 pb-12 relative overflow-hidden">
        <!-- Background light glow -->
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-96 h-96 bg-[#FF4D00]/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-14">
                
                <!-- Col 1: Brand & Manifesto -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-2">
                        <span class="font-syne font-black text-2xl tracking-widest text-white">ONE</span>
                        <div class="w-6 h-1 bg-[#FF4D00] rounded-full"></div>
                        <span class="font-syne font-black text-2xl tracking-tight text-[#FF4D00]">MOVE</span>
                        <span class="ml-2 px-1.5 py-0.5 rounded text-[10px] font-black uppercase bg-white/10 text-white">RUN</span>
                    </div>
                    <p class="text-slate-400 text-sm max-w-sm leading-relaxed">
                        Não é só uma corrida. É a marca da experiência. 12 cidades conectadas pelo movimento, luz, música e superação.
                    </p>
                    <div class="pt-2 text-xs font-semibold text-slate-400 space-y-1">
                        <p class="text-white/80">MOVE TO LIVE. MOVE TO PERFORM. MOVE AGAIN.</p>
                        <p class="text-[#FF7A00]">Circuito Nacional 2027</p>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex items-center gap-3 pt-3">
                        <a href="https://instagram.com" target="_blank" class="w-9 h-9 rounded-full glass-panel flex items-center justify-center text-slate-300 hover:text-white hover:bg-[#FF4D00] transition" aria-label="Instagram">
                            <i data-lucide="instagram" class="w-4 h-4"></i>
                        </a>
                        <a href="https://strava.com" target="_blank" class="w-9 h-9 rounded-full glass-panel flex items-center justify-center text-slate-300 hover:text-white hover:bg-[#FF4D00] transition" aria-label="Strava">
                            <i data-lucide="activity" class="w-4 h-4"></i>
                        </a>
                        <a href="https://youtube.com" target="_blank" class="w-9 h-9 rounded-full glass-panel flex items-center justify-center text-slate-300 hover:text-white hover:bg-[#FF4D00] transition" aria-label="YouTube">
                            <i data-lucide="youtube" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Circuito & Etapas -->
                <div class="space-y-3">
                    <h4 class="text-xs uppercase tracking-widest text-white font-bold">O Circuito</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="{{ route('pages.circuito') }}" class="hover:text-white transition">Conceito ONE MOVE</a></li>
                        <li><a href="{{ route('stages.index') }}" class="hover:text-white transition">As 12 Cidades</a></li>
                        <li><a href="{{ route('pages.calendario') }}" class="hover:text-white transition">Calendário 2027</a></li>
                        <li><a href="{{ route('pages.kits') }}" class="hover:text-white transition">Kits & Categorias</a></li>
                        <li><a href="{{ route('pages.percursos') }}" class="hover:text-white transition">Percursos & Altimetria</a></li>
                        <li><a href="{{ route('pages.circuito') }}#passaporte" class="hover:text-white transition">Passaporte ONE MOVE</a></li>
                    </ul>
                </div>

                <!-- Col 3: Atleta & Apoio -->
                <div class="space-y-3">
                    <h4 class="text-xs uppercase tracking-widest text-white font-bold">Área do Atleta</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="{{ route('pages.resultados') }}" class="hover:text-white transition">Resultados & Classificação</a></li>
                        <li><a href="{{ route('pages.resultados') }}#fotos" class="hover:text-white transition">Buscar Fotos Oficiais</a></li>
                        <li><a href="{{ route('pages.regulamentos') }}" class="hover:text-white transition">Regulamento Geral</a></li>
                        <li><a href="{{ route('pages.faq') }}" class="hover:text-white transition">FAQ / Perguntas Frequentes</a></li>
                        <li><a href="{{ route('contact.index') }}" class="hover:text-white transition">Atendimento ao Atleta</a></li>
                    </ul>
                </div>

                <!-- Col 4: Comercial & Imprensa -->
                <div class="space-y-3">
                    <h4 class="text-xs uppercase tracking-widest text-white font-bold">Corporativo</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="{{ route('pages.patrocinadores') }}" class="hover:text-white transition">Patrocínio & Naming Rights</a></li>
                        <li><a href="{{ route('contact.index') }}?type=imprensa" class="hover:text-white transition">Assessoria de Imprensa</a></li>
                        <li><a href="{{ route('contact.index') }}?type=assessoria" class="hover:text-white transition">Grupos & Assessorias</a></li>
                        <li><a href="{{ route('login') }}" class="hover:text-white transition text-slate-500 hover:text-slate-400">Acesso Restrito</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Disclaimer & Copyright -->
            <div class="pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-4">
                <p>© {{ date('Y') }} ONE MOVE RUN. Todos os direitos reservados. Uma corrida desenhada para ser vivida.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('pages.regulamentos') }}" class="hover:text-slate-300 transition">Regulamento Geral</a>
                    <span>•</span>
                    <a href="{{ route('pages.faq') }}" class="hover:text-slate-300 transition">Política de Inscrições</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/5561999999999?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20o%20Circuito%20ONE%20MOVE%20RUN." 
       target="_blank" 
       rel="noopener noreferrer"
       class="fixed bottom-6 right-6 z-40 w-14 h-14 rounded-full bg-[#25D366] text-white flex items-center justify-center shadow-lg hover:scale-110 active:scale-95 transition-all duration-300 group"
       title="Fale no WhatsApp Oficial">
        <span class="absolute -top-1 -right-1 w-3.5 h-3.5 bg-[#FF4D00] rounded-full animate-ping"></span>
        <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.288.043.088.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.043.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/>
        </svg>
    </a>

    <!-- Global Registration External Redirect Modal -->
    <div id="registration-redirect-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md hidden items-center justify-center p-4">
        <div class="glass-panel border-glow-orange rounded-3xl max-w-md w-full p-8 text-center relative overflow-hidden">
            <div class="w-16 h-16 rounded-full bg-[#FF4D00]/20 border border-[#FF4D00]/50 text-[#FF6A1A] flex items-center justify-center mx-auto mb-6">
                <i data-lucide="external-link" class="w-8 h-8 animate-pulse"></i>
            </div>
            
            <span class="text-xs font-bold uppercase tracking-widest text-[#FF7A00]">Ambiente Seguro de Inscrições</span>
            <h3 class="font-syne font-black text-2xl text-white mt-1 mb-2" id="redirect-stage-name">Etapa ONE MOVE RUN</h3>
            
            <p class="text-sm text-slate-300 leading-relaxed mb-6">
                Você será direcionado para a plataforma oficial parceira de inscrições e pagamentos. Prepare seu tênis!
            </p>

            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-full border-2 border-[#FF4D00] border-t-transparent animate-spin flex items-center justify-center text-xs font-bold text-white">
                </div>
                <span class="text-sm font-semibold text-slate-200">Redirecionando em <span id="redirect-timer" class="text-[#FF4D00] font-black text-lg">3</span>s...</span>
            </div>

            <div class="flex items-center justify-center gap-4">
                <button id="redirect-cancel-btn" type="button" class="btn-secondary-onemove text-xs px-5 py-2">
                    Cancelar
                </button>
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
