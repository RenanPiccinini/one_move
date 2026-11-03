<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ONE MOVE RUN | 12 Cidades. Um Só Movimento.')</title>
    <meta name="description" content="@yield('meta_description', 'Circuito Nacional ONE MOVE RUN 2027. Uma corrida desenhada para ser vivida. 12 cidades, distâncias de 5K, 10K e 15K, estrutura de alta performance, turismo e experiência.')">
    
    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'ONE MOVE RUN | 12 Cidades. Um Só Movimento.')">
    <meta property="og:description" content="@yield('meta_description', 'Uma corrida desenhada para ser vivida. 12 cidades conectadas pelo movimento.')">
    <meta property="og:image" content="{{ asset('images/brand/city-brasilia.jpg') }}">

    <!-- Google Fonts: Syne, Outfit, Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,700&family=Syne:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-white text-[#0E0F12] antialiased selection:bg-[#FF4D00] selection:text-white flex flex-col min-h-screen">

    <!-- Top Editorial Ticker Bar -->
    <div class="bg-[#F8F9FA] border-b border-black/5 py-1 sm:py-1.5 px-3 sm:px-4 overflow-hidden relative text-xs font-semibold text-neutral-600">
        <div class="max-w-[1600px] mx-auto flex items-center justify-between gap-2 sm:gap-4">
            <div class="flex items-center gap-2 sm:gap-3 shrink-0 min-w-0">
                <span class="inline-flex items-center gap-1.5 px-2 sm:px-2.5 py-0.5 rounded-full bg-[#FF4D00]/10 text-[#FF4D00] border border-[#FF4D00]/25 font-bold uppercase tracking-wider text-[9px] sm:text-[10px] whitespace-nowrap">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#FF4D00] animate-ping"></span>
                    <span class="hidden xs:inline">Circuito Nacional</span> 2027
                </span>
                <span class="hidden sm:inline text-neutral-500 whitespace-nowrap">⚡ 12 Cidades • 12 Etapas • Um Só Movimento</span>
            </div>
            <div class="flex items-center gap-3 sm:gap-6 shrink-0 whitespace-nowrap text-[11px] sm:text-xs">
                <a href="{{ route('stages.show', 'brasilia') }}" class="text-[#FF4D00] hover:text-black transition flex items-center gap-1 whitespace-nowrap font-bold">
                    <span><span class="hidden sm:inline">Próxima Largada: </span><strong>Brasília / DF</strong> <span class="hidden xs:inline">(24 Jan)</span></span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5 shrink-0"></i>
                </a>
                <div class="hidden md:flex items-center gap-3 text-neutral-400 whitespace-nowrap">
                    <span class="w-1 h-1 rounded-full bg-neutral-300"></span>
                    <a href="{{ route('pages.faq') }}" class="hover:text-black transition whitespace-nowrap">Dúvidas?</a>
                    <a href="{{ route('contact.index') }}" class="hover:text-black transition whitespace-nowrap">Contato</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="sticky top-0 z-50 glass-header-light transition-all duration-300" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-13 sm:h-16 gap-3 sm:gap-4">
                
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0 group focus:outline-none" aria-label="ONE MOVE RUN Home">
                    <img src="{{ asset('images/logo_cropped_dark.png') }}" 
                         alt="ONE MOVE RUN" 
                         class="h-8 sm:h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                </a>

                <!-- Desktop Navigation Links & Action CTA (Justified beside Inscreva-se) -->
                <div class="hidden md:flex items-center gap-6 lg:gap-8 ml-auto">
                    <nav class="flex items-center gap-6 lg:gap-8 text-sm font-bold text-neutral-800 tracking-wide">
                        <a href="{{ route('home') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('home') ? 'text-[#FF4D00]' : '' }}">
                            Home
                        </a>
                        <a href="{{ route('pages.calendario') }}" 
                           @click="if (window.location.pathname === '/' || window.location.pathname === '') { const el = document.getElementById('calendario') || document.getElementById('cidades'); if (el) { $event.preventDefault(); el.scrollIntoView({ behavior: 'smooth' }); history.pushState(null, null, '#calendario'); } }"
                           class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('pages.calendario') ? 'text-[#FF4D00]' : '' }}">
                            Calendário
                        </a>
                        <a href="{{ route('pages.regulamentos') }}" class="whitespace-nowrap shrink-0 hover:text-[#FF4D00] transition {{ request()->routeIs('pages.regulamentos') ? 'text-[#FF4D00]' : '' }}">
                            Regulamento
                        </a>
                    </nav>

                    <div class="flex items-center gap-3 shrink-0">
                        <a href="https://inscricoes.onemoverun.com.br/etapa-brasilia-2027" 
                           target="_blank"
                           class="btn-editorial-orange text-xs px-4 sm:px-5 py-2 sm:py-2.5 whitespace-nowrap shrink-0 shadow-md hover:shadow-[#FF4D00]/30 transition-all flex items-center gap-1.5">
                            <span>Inscreva-se agora!</span>
                            <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>

                <!-- Action CTA Button for Tablet (sm:flex md:hidden) -->
                <div class="hidden sm:flex md:hidden items-center gap-3 shrink-0 ml-auto">
                    <a href="https://inscricoes.onemoverun.com.br/etapa-brasilia-2027" 
                       target="_blank"
                       class="btn-editorial-orange text-xs px-4 py-2 whitespace-nowrap shrink-0 shadow-md flex items-center gap-1.5">
                        <span>Inscreva-se agora!</span>
                        <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
                    </a>
                </div>

                <!-- Mobile Hamburger Toggle -->
                <div class="md:hidden flex items-center shrink-0">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="p-2 rounded-xl text-neutral-800 hover:text-black hover:bg-neutral-100 focus:outline-none" aria-label="Abrir Menu">
                        <i x-show="!mobileMenuOpen" data-lucide="menu" class="w-5 h-5"></i>
                        <i x-show="mobileMenuOpen" data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div x-show="mobileMenuOpen" 
             @click.outside="mobileMenuOpen = false"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden bg-white/95 backdrop-blur-xl border-b border-neutral-200 px-5 pt-3 pb-6 space-y-1 shadow-2xl max-h-[calc(100vh-5rem)] overflow-y-auto"
             style="display: none;">
            
            <a @click="mobileMenuOpen = false" href="{{ route('home') }}" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-neutral-800 hover:text-[#FF4D00] hover:bg-neutral-50 {{ request()->routeIs('home') ? 'text-[#FF4D00] bg-neutral-50' : '' }}">
                <span>Home</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-neutral-400"></i>
            </a>
            
            <a @click="mobileMenuOpen = false; if (window.location.pathname === '/' || window.location.pathname === '') { const el = document.getElementById('calendario') || document.getElementById('cidades'); if (el) { $event.preventDefault(); el.scrollIntoView({ behavior: 'smooth' }); history.pushState(null, null, '#calendario'); } }" 
               href="{{ route('pages.calendario') }}" 
               class="flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-neutral-800 hover:text-[#FF4D00] hover:bg-neutral-50 {{ request()->routeIs('pages.calendario') ? 'text-[#FF4D00] bg-neutral-50' : '' }}">
                <span>Calendário</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-neutral-400"></i>
            </a>

            <a @click="mobileMenuOpen = false" href="{{ route('pages.regulamentos') }}" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-bold text-neutral-800 hover:text-[#FF4D00] hover:bg-neutral-50 {{ request()->routeIs('pages.regulamentos') ? 'text-[#FF4D00] bg-neutral-50' : '' }}">
                <span>Regulamento</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-neutral-400"></i>
            </a>

            <div class="pt-2 border-t border-neutral-100 my-1"></div>

            <a @click="mobileMenuOpen = false" href="{{ route('pages.faq') }}" class="flex items-center justify-between px-3 py-2 rounded-xl text-xs font-semibold text-neutral-600 hover:text-[#FF4D00] hover:bg-neutral-50">
                <span>Dúvidas Frequentes (FAQ)</span>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-neutral-400"></i>
            </a>

            <a @click="mobileMenuOpen = false" href="{{ route('contact.index') }}" class="flex items-center justify-between px-3 py-2 rounded-xl text-xs font-semibold text-neutral-600 hover:text-[#FF4D00] hover:bg-neutral-50">
                <span>Atendimento & Contato</span>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-neutral-400"></i>
            </a>
            
            <div class="pt-3">
                <a @click="mobileMenuOpen = false"
                   href="https://inscricoes.onemoverun.com.br/etapa-brasilia-2027" 
                   target="_blank"
                   class="btn-editorial-orange w-full text-center text-sm py-3 justify-center shadow-lg flex items-center gap-2">
                    <span>Inscreva-se agora!</span>
                    <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Yield -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Modern Architectural Dark Footer -->
    <footer class="bg-[#0A0A0C] text-white pt-14 sm:pt-16 pb-10 sm:pb-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 items-center md:items-start mb-12">
                
                <!-- Bloco 1: Lado Esquerdo (Somente a Logo) -->
                <div class="flex flex-col items-center md:items-start">
                    <a href="{{ route('home') }}" class="inline-block">
                        <img src="{{ asset('images/logo_cropped_white.png') }}" 
                             alt="ONE MOVE RUN" 
                             class="h-10 sm:h-12 w-auto object-contain">
                    </a>
                </div>

                <!-- Bloco 2: Canais Oficiais & Instagram -->
                <div class="flex flex-col items-center text-center space-y-3">
                    <span class="text-xs uppercase tracking-widest text-neutral-400 font-bold">
                        Fique atento aos nossos canais oficiais
                    </span>
                    <a href="https://www.instagram.com/onemoverun/" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="inline-flex items-center justify-center w-11 h-11 rounded-full bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888] text-white shadow-[0_4px_20px_rgba(220,39,67,0.35)] hover:shadow-[0_6px_25px_rgba(220,39,67,0.55)] hover:scale-110 active:scale-95 transition-all duration-300 group" 
                       aria-label="Instagram @onemoverun"
                       title="Siga @onemoverun no Instagram">
                        <svg class="w-5 h-5 fill-current group-hover:scale-110 transition-transform" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>

                <!-- Bloco 3: Realização -->
                <div class="flex flex-col items-center md:items-end text-center md:text-right space-y-3">
                    <span class="text-xs uppercase tracking-widest text-neutral-400 font-bold">
                        Realização
                    </span>
                    <div class="flex items-center justify-center md:justify-end">
                        <img src="{{ asset('images/logo_cropped_white.png') }}" 
                             alt="Realização ONE MOVE" 
                             class="h-8 sm:h-9 w-auto object-contain opacity-90 hover:opacity-100 transition-opacity">
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between text-xs text-neutral-500 gap-4 text-center sm:text-left">
                <p>© {{ date('Y') }} ONE MOVE RUN. Todos os direitos reservados. Uma corrida desenhada para ser vivida.</p>
                <div class="flex items-center gap-4 sm:gap-6 flex-wrap justify-center">
                    <a href="{{ route('pages.regulamentos') }}" class="hover:text-white transition">Regulamento Geral</a>
                    <span>•</span>
                    <a href="{{ route('pages.faq') }}" class="hover:text-white transition">Política de Privacidade</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/5561999999999?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20o%20Circuito%20ONE%20MOVE%20RUN." 
       target="_blank" 
       rel="noopener noreferrer"
       class="fixed {{ request()->routeIs('stages.show') ? 'bottom-20 sm:bottom-20 right-4 sm:right-6' : 'bottom-4 sm:bottom-6 right-4 sm:right-6' }} z-40 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-[#25D366] text-white flex items-center justify-center shadow-xl hover:scale-110 active:scale-95 transition-all duration-300 group"
       title="Fale no WhatsApp Oficial">
        <span class="absolute -top-1 -right-1 w-3 sm:w-3.5 h-3 sm:h-3.5 bg-[#FF4D00] rounded-full animate-ping"></span>
        <svg class="w-6 h-6 sm:w-7 sm:h-7 fill-current" viewBox="0 0 24 24">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.288.043.088.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.174.086.275.072.376-.043.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.043.073.043.419-.101.824z"/>
        </svg>
    </a>

    <!-- Global Registration External Redirect Modal -->
    <div id="registration-redirect-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md hidden items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-md w-full p-6 sm:p-8 text-center relative overflow-hidden shadow-2xl max-h-[90vh] overflow-y-auto">
            <div class="w-16 h-16 rounded-full bg-[#FF4D00]/10 text-[#FF4D00] flex items-center justify-center mx-auto mb-6">
                <i data-lucide="external-link" class="w-8 h-8 animate-pulse"></i>
            </div>
            
            <span class="text-xs font-bold uppercase tracking-widest text-[#FF4D00]">Ambiente Seguro de Inscrições</span>
            <h3 class="font-syne font-black text-2xl text-[#0A0A0C] mt-1 mb-2" id="redirect-stage-name">Etapa ONE MOVE RUN</h3>
            
            <p class="text-sm text-neutral-600 leading-relaxed mb-6">
                Você será direcionado para a plataforma oficial parceira de inscrições e pagamentos. Prepare seu tênis!
            </p>

            <div class="flex items-center justify-center gap-3 mb-6">
                <div class="w-8 h-8 rounded-full border-2 border-[#FF4D00] border-t-transparent animate-spin"></div>
                <span class="text-sm font-bold text-neutral-800">Redirecionando em <span id="redirect-timer" class="text-[#FF4D00] font-black text-lg">3</span>s...</span>
            </div>

            <div class="flex items-center justify-center">
                <button id="redirect-cancel-btn" type="button" class="btn-editorial-outline text-xs px-6 py-2.5">
                    Cancelar
                </button>
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
