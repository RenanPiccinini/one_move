@extends('layouts.main')

@section('title', 'ONE MOVE RUN | 12 Cidades. Um Só Movimento.')

@section('content')

    <!-- CONTINUOUS CIRCUIT GRAPHIC LINE (A LINHA CONTÍNUA DO PERCURSO) -->
    <div class="relative w-full overflow-x-clip bg-white">

        <!-- Flowing Background Route Spline (SVG) -->
        <svg class="absolute top-0 left-0 w-full h-full pointer-events-none z-0 hidden lg:block opacity-35" viewBox="0 0 1440 8200" fill="none" preserveAspectRatio="none">
            <path d="M 720,200 
                     C 850,550 1150,750 1200,1100 
                     C 1250,1450 950,1650 780,1950 
                     C 600,2250 250,2450 200,2850 
                     C 150,3250 500,3450 720,3800 
                     C 940,4150 1280,4400 1240,4800 
                     C 1200,5200 850,5450 680,5800 
                     C 500,6150 200,6400 240,6800 
                     C 280,7200 800,7500 720,8000" 
                  stroke="url(#route-gradient)" 
                  stroke-width="2" 
                  stroke-dasharray="8 8" />
            <defs>
                <linearGradient id="route-gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#FF4D00" stop-opacity="0.8" />
                    <stop offset="25%" stop-color="#FF7A00" stop-opacity="0.6" />
                    <stop offset="50%" stop-color="#0A0A0C" stop-opacity="0.3" />
                    <stop offset="75%" stop-color="#FF4D00" stop-opacity="0.6" />
                    <stop offset="100%" stop-color="#FF4D00" stop-opacity="0.9" />
                </linearGradient>
            </defs>
        </svg>

        <!-- ============================================================== -->
        <!-- 01. HERO — IMPACTO IMEDIATO                                   -->
        <!-- ============================================================== -->
        <section class="relative min-h-[92vh] flex flex-col justify-between pt-12 md:pt-20 pb-16 px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10">
            
            <!-- Top Subtle Meta Track -->
            <div class="flex items-center justify-between text-xs font-bold tracking-widest text-neutral-500 uppercase border-b border-black/5 pb-4">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-[#FF4D00] animate-ping"></span>
                    <span class="text-neutral-900 font-extrabold">ONE MOVE RUN</span>
                    <span class="text-neutral-300">•</span>
                    <span>CIRCUITO NACIONAL 2027</span>
                </div>
                <div class="hidden sm:flex items-center gap-6 text-[11px]">
                    <span>12 CAPITAIS</span>
                    <span>5K • 10K • 15K</span>
                    <span class="text-[#FF4D00] font-black">LARGADA: JANEIRO</span>
                </div>
            </div>

            <!-- Massive Minimalist Editorial Headline -->
            <div class="my-auto py-12 md:py-16">
                <div class="max-w-6xl">
                    <span class="inline-block text-xs md:text-sm font-black uppercase tracking-[0.25em] text-[#FF4D00] mb-4">
                        A Marca da Experiência
                    </span>
                    <h1 class="font-syne font-black text-5xl sm:text-7xl md:text-8xl lg:text-9xl tracking-tighter leading-[0.9] uppercase text-[#0A0A0C] mb-8">
                        ONE MOVE RUN.<br>
                        <span class="text-neutral-400 font-bold">12 CIDADES.</span><br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] via-[#FF4D00] to-[#E62E00]">
                            UM SÓ MOVIMENTO.
                        </span>
                    </h1>

                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6 pt-4">
                        <a href="#cidades" class="btn-editorial-dark text-sm px-10 py-4 shadow-lg group">
                            <span>ENCONTRE SUA ETAPA</span>
                            <i data-lucide="arrow-down" class="w-4 h-4 text-[#FF4D00] group-hover:translate-y-1 transition-transform"></i>
                        </a>

                        <a href="{{ route('stages.show', 'brasilia') }}" class="inline-flex items-center gap-3 text-xs md:text-sm font-bold text-neutral-800 hover:text-[#FF4D00] transition py-3">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#FF4D00]"></span>
                            <span>Próxima largada em <strong>Brasília</strong> • Inscrições Abertas</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Full-width Luminous Photography Banner -->
            <div class="relative w-full rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl aspect-[16/9] md:aspect-[21/9] max-h-[640px]">
                <img src="{{ asset('images/editorial/runner_course_dawn.jpg') }}" 
                     alt="Corredores em movimento ONE MOVE RUN ao amanhecer" 
                     class="w-full h-full object-cover object-center scale-105 hover:scale-100 transition-transform duration-1000 ease-out">
                
                <!-- Gentle Bottom Vignette & Information Stamp -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-black/20 flex flex-col justify-between p-6 md:p-10 text-white pointer-events-none">
                    <div class="flex items-center justify-between text-xs uppercase font-bold tracking-widest text-white/90">
                        <span class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/20">
                            Etapa 01 • Brasília
                        </span>
                        <span>15°47'38"S 47°51'53"W</span>
                    </div>
                    <div>
                        <p class="font-syne font-black text-2xl sm:text-4xl text-white tracking-tight uppercase">
                            Uma corrida desenhada para ser vivida.
                        </p>
                        <p class="text-xs sm:text-sm text-neutral-200 mt-1 max-w-xl font-medium">
                            A corrida é o produto. A experiência ONE MOVE é o diferencial.
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 02. O MOVIMENTO — NARRATIVA SEM CAIXAS OU RETÂNGULOS          -->
        <!-- ============================================================== -->
        <section class="py-24 md:py-36 relative px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10 overflow-hidden">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Kinetic Typography (overlaps image) -->
                <div class="lg:col-span-6 z-20 space-y-8">
                    <div class="inline-flex items-center gap-2 text-xs font-black uppercase tracking-[0.2em] text-[#FF4D00]">
                        <span class="w-8 h-[2px] bg-[#FF4D00]"></span>
                        <span>02 / O Manifesto do Movimento</span>
                    </div>

                    <h2 class="font-syne font-black text-4xl sm:text-6xl md:text-7xl tracking-tight text-[#0A0A0C] leading-[0.95] uppercase">
                        NÃO É SÓ<br>
                        SOBRE CORRER.<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] to-[#FF4D00]">
                            É SOBRE SE MOVER.
                        </span>
                    </h2>

                    <p class="text-lg md:text-2xl text-neutral-700 font-medium leading-relaxed max-w-xl">
                        Um circuito que atravessa cidades, conecta pessoas e transforma cada largada em uma nova experiência sensorial e urbana.
                    </p>

                    <div class="pt-4 border-t border-black/10 flex flex-wrap items-center gap-4 text-xs md:text-sm font-bold uppercase tracking-wider text-neutral-500">
                        <span class="text-neutral-900">12 CIDADES</span>
                        <span>•</span>
                        <span class="text-[#FF4D00]">MILHARES DE CORREDORES</span>
                        <span>•</span>
                        <span class="text-neutral-900">UMA SÓ ENERGIA</span>
                    </div>
                </div>

                <!-- Organic Photographic Bleed Entering from the Side -->
                <div class="lg:col-span-6 relative">
                    <div class="relative w-full aspect-[4/5] max-w-lg mx-auto lg:max-w-none rounded-[2.5rem] overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/editorial/runner_bridge_night.jpg') }}" 
                             alt="Atleta em movimento veloz na Ponte JK" 
                             class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-700 ease-out">
                        
                        <!-- Floating Micro Tag -->
                        <div class="absolute bottom-6 left-6 right-6 p-4 rounded-2xl bg-white/90 backdrop-blur-md border border-black/5 text-[#0A0A0C]">
                            <div class="flex items-center justify-between text-xs font-bold uppercase">
                                <span class="text-[#FF4D00]">Ritmo Contínuo</span>
                                <span class="text-neutral-400">Ponte JK • Brasília</span>
                            </div>
                            <p class="text-xs text-neutral-600 mt-1">
                                O asfalto se transforma em palco, iluminação LED e vibração coletiva.
                            </p>
                        </div>
                    </div>

                    <!-- Ambient Orange Glow Behind -->
                    <div class="absolute -bottom-10 -right-10 w-72 h-72 bg-[#FF4D00]/15 rounded-full blur-[100px] pointer-events-none -z-10"></div>
                </div>

            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 03. AS 12 CIDADES — "ONDE SERÁ SUA PRÓXIMA LARGADA?"          -->
        <!-- Interação Viva: Passar o mouse/tocar altera o fundo           -->
        <!-- ============================================================== -->
        <section id="cidades" class="py-24 md:py-36 relative px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10" 
                 x-data="{
                     activeCity: 'brasilia',
                     citiesData: {
                         'brasilia': {
                             name: 'Brasília',
                             state: 'DF',
                             month: 'JANEIRO',
                             date: '24 de Janeiro',
                             venue: 'Catedral Metropolitana & Esplanada',
                             status: 'open',
                             statusLabel: 'VER ETAPA →',
                             link: '{{ route('stages.show', 'brasilia') }}',
                             image: '{{ asset('images/cities/brasilia.jpg') }}',
                             tagline: 'A largada do circuito nacional sob a arquitetura monumental.'
                         },
                         'curitiba': {
                             name: 'Curitiba',
                             state: 'PR',
                             month: 'MARÇO',
                             date: '21 de Março',
                             venue: 'Jardim Botânico & Museu Oscar Niemeyer',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'curitiba') }}',
                             image: '{{ asset('images/cities/curitiba.jpg') }}',
                             tagline: 'Clima europeu, precisão e o asfalto técnico do sul.'
                         },
                         'porto-alegre': {
                             name: 'Porto Alegre',
                             state: 'RS',
                             month: 'MAIO',
                             date: '16 de Maio',
                             venue: 'Usina do Gasômetro & Orla do Guaíba',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'porto-alegre') }}',
                             image: '{{ asset('images/cities/porto-alegre.jpg') }}',
                             tagline: 'O tradicional entardecer do Guaíba acolhendo os atletas.'
                         },
                         'florianopolis': {
                             name: 'Florianópolis',
                             state: 'SC',
                             month: 'JULHO',
                             date: '18 de Julho',
                             venue: 'Ponte Hercílio Luz & Beira-Mar Norte',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'florianopolis') }}',
                             image: '{{ asset('images/cities/florianopolis.jpg') }}',
                             tagline: 'A Ilha da Magia com percurso plano ao lado do mar.'
                         },
                         'maceio': {
                             name: 'Maceió',
                             state: 'AL',
                             month: 'SETEMBRO',
                             date: '19 de Setembro',
                             venue: 'Farol da Ponta Verde & Orla de Pajuçara',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'maceio') }}',
                             image: '{{ asset('images/cities/maceio.jpg') }}',
                             tagline: 'Águas azul-turquesa, brisa constante e velocidade.'
                         },
                         'joao-pessoa': {
                             name: 'João Pessoa',
                             state: 'PB',
                             month: 'NOVEMBRO',
                             date: '07 de Novembro',
                             venue: 'Farol do Cabo Branco & Ponta do Seixas',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'joao-pessoa') }}',
                             image: '{{ asset('images/cities/joao-pessoa.jpg') }}',
                             tagline: 'Onde o sol nasce primeiro nas Américas.'
                         },
                         'fortaleza': {
                             name: 'Fortaleza',
                             state: 'CE',
                             month: 'DEZEMBRO',
                             date: '12 de Dezembro',
                             venue: 'Praia de Iracema & Espigão',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'fortaleza') }}',
                             image: '{{ asset('images/cities/fortaleza.jpg') }}',
                             tagline: 'A Terra da Luz recebendo a energia do circuito.'
                         },
                         'sao-paulo': {
                             name: 'São Paulo',
                             state: 'SP',
                             month: 'EM BREVE',
                             date: 'A Confirmar',
                             venue: 'Ponte Estaiada & Ibirapuera',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'sao-paulo') }}',
                             image: '{{ asset('images/cities/sao-paulo.jpg') }}',
                             tagline: 'A capital da velocidade e a pulsação da metrópole.'
                         },
                         'rio-de-janeiro': {
                             name: 'Rio de Janeiro',
                             state: 'RJ',
                             month: 'EM BREVE',
                             date: 'A Confirmar',
                             venue: 'Cristo Redentor & Aterro do Flamengo',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'rio-de-janeiro') }}',
                             image: '{{ asset('images/cities/rio-de-janeiro.jpg') }}',
                             tagline: 'O nascer do sol mais famoso do planeta aos pés do Cristo.'
                         },
                         'belo-horizonte': {
                             name: 'Belo Horizonte',
                             state: 'MG',
                             month: 'EM BREVE',
                             date: 'A Confirmar',
                             venue: 'Igrejinha da Pampulha & Lagoa',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'belo-horizonte') }}',
                             image: '{{ asset('images/cities/belo-horizonte.jpg') }}',
                             tagline: 'Arquitetura modernista e o clássico contorno da Pampulha.'
                         },
                         'goiania': {
                             name: 'Goiânia',
                             state: 'GO',
                             month: 'EM BREVE',
                             date: 'A Confirmar',
                             venue: 'Parque Flamboyant & Praça Cívica',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'goiania') }}',
                             image: '{{ asset('images/cities/goiania.jpg') }}',
                             tagline: 'Ruas amplas, altimetria plana e atmosfera vibrante.'
                         },
                         'salvador': {
                             name: 'Salvador',
                             state: 'BA',
                             month: 'EM BREVE',
                             date: 'A Confirmar',
                             venue: 'Farol da Barra & Orla de Ondina',
                             status: 'soon',
                             statusLabel: 'EM BREVE',
                             link: '{{ route('stages.show', 'salvador') }}',
                             image: '{{ asset('images/cities/salvador.jpg') }}',
                             tagline: 'Axé, calor, percussão e o oceano como testemunha.'
                         }
                     },
                     init() {
                         if ('IntersectionObserver' in window) {
                             const observer = new IntersectionObserver((entries) => {
                                 entries.forEach(entry => {
                                     if (entry.isIntersecting) {
                                         const city = entry.target.getAttribute('data-city');
                                         if (city) this.activeCity = city;
                                     }
                                 });
                             }, {
                                 rootMargin: '-20% 0px -40% 0px',
                                 threshold: 0.1
                             });

                             this.$nextTick(() => {
                                 this.$el.querySelectorAll('[data-city]').forEach(el => observer.observe(el));
                             });
                         }
                     }
                 }">
            
            <div class="mb-12">
                <span class="text-xs font-black uppercase tracking-[0.25em] text-[#FF4D00]">
                    03 / O Calendário do Circuito
                </span>
                <h2 class="font-syne font-black text-4xl sm:text-6xl md:text-7xl lg:text-8xl tracking-tighter text-[#0A0A0C] uppercase leading-[0.9] mt-2">
                    ONDE SERÁ<br>
                    SUA PRÓXIMA<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] to-[#FF4D00]">
                        LARGADA?
                    </span>
                </h2>
            </div>

            <!-- Interactive Split Layout: Left List / Right Live Visual Companion -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
                
                <!-- The 12 Cities List (Clean, Kinetic Typography) -->
                <div class="lg:col-span-7 divide-y divide-black/10 border-t border-b border-black/10">
                    <template x-for="(cityKey, index) in Object.keys(citiesData)" :key="cityKey">
                        <div :data-city="cityKey"
                             @mouseenter="activeCity = cityKey" 
                             @click="activeCity = cityKey"
                             class="group py-5 sm:py-6 cursor-pointer flex items-center justify-between transition-all duration-300 select-none"
                             :class="activeCity === cityKey ? 'pl-4 sm:pl-6 bg-neutral-50/80 -mx-4 sm:-mx-6 px-4 sm:px-6 rounded-2xl' : 'hover:pl-2'">
                            
                            <div class="flex items-baseline gap-4 sm:gap-6">
                                <span class="font-mono text-xs font-bold text-neutral-400 group-hover:text-[#FF4D00] transition" 
                                      x-text="String(index + 1).padStart(2, '0')"></span>
                                
                                <div>
                                    <h3 class="font-syne font-black text-2xl sm:text-4xl md:text-5xl uppercase tracking-tight transition-all duration-300"
                                        :class="activeCity === cityKey ? 'text-[#FF4D00] translate-x-1' : 'text-[#0A0A0C] group-hover:text-black'"
                                        x-text="citiesData[cityKey].name">
                                    </h3>
                                    
                                    <div class="flex items-center gap-2 mt-1 text-xs font-bold uppercase tracking-wider text-neutral-500">
                                        <span x-text="citiesData[cityKey].month" class="text-neutral-900"></span>
                                        <span>•</span>
                                        <span x-text="citiesData[cityKey].venue" class="line-clamp-1 max-w-xs text-neutral-500"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 shrink-0">
                                <a :href="citiesData[cityKey].link"
                                   @click.stop
                                   class="px-3 py-1 rounded-full text-xs font-black uppercase tracking-wider transition-all duration-300 inline-block"
                                   :class="citiesData[cityKey].status === 'open' 
                                         ? 'bg-[#FF4D00] text-white shadow-md hover:brightness-110' 
                                         : (activeCity === cityKey ? 'bg-neutral-900 text-white hover:bg-black' : 'bg-neutral-100 text-neutral-500 group-hover:bg-neutral-200')"
                                   x-text="citiesData[cityKey].statusLabel">
                                </a>
                                
                                <a :href="citiesData[cityKey].link"
                                   @click.stop
                                   class="p-1 transition text-neutral-400 group-hover:text-black"
                                   :aria-label="'Ver etapa ' + citiesData[cityKey].name">
                                    <svg class="w-5 h-5 transition-transform duration-300"
                                         :class="activeCity === cityKey ? 'text-[#FF4D00] translate-x-1 -translate-y-1' : 'text-neutral-400 group-hover:text-black'"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M17 7H7M17 7V17" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Right Companion Viewport: Seamless City Photography Transition (Sticky until bottom of Salvador) -->
                <div class="lg:col-span-5 relative">
                    <div class="lg:sticky lg:top-28">
                        <div class="relative w-full aspect-[4/5] max-h-[min(640px,calc(100vh-8.5rem))] rounded-3xl overflow-hidden shadow-2xl bg-neutral-900">
                            
                            <!-- Reactive Image Element -->
                            <img :src="citiesData[activeCity].image" 
                                 :alt="citiesData[activeCity].name"
                                 class="w-full h-full object-cover object-center transition-all duration-700 ease-out">
                            
                            <!-- Soft Atmospheric Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent flex flex-col justify-between p-8 text-white">
                                
                                <!-- Top Status Indicator -->
                                <div class="flex items-center justify-between text-xs font-bold uppercase tracking-widest">
                                    <span class="px-3.5 py-1 rounded-full backdrop-blur-md border border-white/20"
                                          :class="citiesData[activeCity].status === 'open' ? 'bg-[#FF4D00] text-white' : 'bg-white/20 text-white'"
                                          x-text="citiesData[activeCity].status === 'open' ? 'Inscrições Abertas' : 'Etapa Confirmada'">
                                    </span>
                                    <span class="text-white/80" x-text="citiesData[activeCity].date"></span>
                                </div>

                                <!-- Bottom Stage Information -->
                                <div class="space-y-4">
                                    <div>
                                        <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]" 
                                              x-text="citiesData[activeCity].month"></span>
                                        <h4 class="font-syne font-black text-3xl sm:text-4xl text-white uppercase tracking-tight mt-1" 
                                            x-text="citiesData[activeCity].name + ', ' + citiesData[activeCity].state"></h4>
                                        <p class="text-sm text-neutral-300 mt-2 font-medium" 
                                           x-text="citiesData[activeCity].tagline"></p>
                                    </div>

                                    <div class="pt-4 border-t border-white/20 flex items-center justify-between">
                                        <span class="text-xs font-bold tracking-widest text-neutral-300 uppercase">
                                            5K • 10K • 15K
                                        </span>
                                        
                                        <a :href="citiesData[activeCity].link" 
                                           class="btn-editorial-orange text-xs px-6 py-2.5">
                                            <span x-text="citiesData[activeCity].status === 'open' ? 'GARANTIR VAGA' : 'VER DETALHES'"></span>
                                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 04. PRÓXIMA PARADA — CINEMATOGRÁFICA (ETAPA BRASÍLIA)         -->
        <!-- ============================================================== -->
        <section class="py-20 md:py-32 relative px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10">
            
            <div class="relative w-full rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[16/10] md:aspect-[21/9] min-h-[520px]">
                <!-- Large Panoramic Image -->
                <img src="{{ asset('images/cities/brasilia.jpg') }}" 
                     alt="Próxima Parada ONE MOVE RUN Brasília" 
                     class="w-full h-full object-cover object-center brightness-95">

                <!-- Dark Gradient for High-Contrast Clean Typography -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/50 to-transparent flex flex-col justify-between p-8 sm:p-12 md:p-16 text-white">
                    
                    <!-- Top Minimal Label -->
                    <div class="flex items-center gap-3">
                        <span class="px-3.5 py-1 rounded-full bg-[#FF4D00] text-white text-[11px] font-black uppercase tracking-widest shadow-md">
                            PRÓXIMA LARGADA →
                        </span>
                        <span class="text-xs font-bold uppercase tracking-wider text-white/80">
                            Etapa 01 de 12 • Circuito Nacional
                        </span>
                    </div>

                    <!-- Center & Bottom Action Block -->
                    <div class="max-w-2xl space-y-4">
                        <span class="text-xs sm:text-sm font-black uppercase tracking-[0.2em] text-[#FF7A00]">
                            ONE MOVE RUN
                        </span>
                        
                        <h2 class="font-syne font-black text-5xl sm:text-7xl md:text-8xl uppercase tracking-tighter text-white leading-none">
                            BRASÍLIA
                        </h2>

                        <div class="flex flex-wrap items-center gap-4 sm:gap-8 text-sm sm:text-lg font-bold uppercase tracking-wider text-neutral-300">
                            <span class="text-white">24 DE JANEIRO</span>
                            <span>•</span>
                            <span class="text-[#FF4D00]">5K / 10K / 15K</span>
                            <span>•</span>
                            <span class="text-white">ESPLANADA DOS MINISTÉRIOS</span>
                        </div>

                        <p class="text-neutral-300 text-sm sm:text-base leading-relaxed max-w-lg font-medium pt-2">
                            A prova inaugural que marca a estreia do circuito. Pistas abertas ao amanhecer, passagem triunfal pela Ponte JK e a experiência completa na ONE MOVE Arena.
                        </p>

                        <div class="pt-6 flex flex-wrap items-center gap-4">
                            <a href="https://inscricoes.onemoverun.com.br/etapa-brasilia-2027" 
                               target="_blank"
                               class="btn-editorial-orange text-sm px-10 py-4 shadow-xl">
                                <span>QUERO PARTICIPAR</span>
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </a>

                            <a href="{{ route('stages.show', 'brasilia') }}" 
                               class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold uppercase tracking-wider text-white hover:text-[#FF4D00] transition px-4 py-3">
                                <span>Ver Percurso & Regulamento</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 05. EXPERIÊNCIA ONE MOVE — COMPOSIÇÃO FLUIDA & DESCONSTRUÍDA  -->
        <!-- "CORRA. VIVA. MOVA-SE." — Fotos soltas e sobrepostas          -->
        <!-- ============================================================== -->
        <section class="py-24 md:py-36 relative px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10 overflow-hidden">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-black uppercase tracking-[0.25em] text-[#FF4D00]">
                    05 / Atmosfera & Sensações
                </span>
                <p class="text-sm uppercase tracking-widest text-neutral-500 font-bold mt-2">
                    Não é apenas cruzar uma linha de chegada. É viver cada quilômetro.
                </p>
            </div>

            <!-- Asymmetrical Overlapping Composition -->
            <div class="relative min-h-[750px] lg:min-h-[850px] flex items-center justify-center">
                
                <!-- Floating Photo 1: Finish Line Arms Up Victory (Top Left) -->
                <div class="absolute top-0 left-2 sm:left-12 lg:left-8 w-48 sm:w-72 lg:w-96 aspect-[3/4] rounded-3xl overflow-hidden shadow-2xl -rotate-3 hover:rotate-0 hover:scale-105 transition-all duration-500 z-10">
                    <img src="{{ asset('images/editorial/finish_celebration.jpg') }}" 
                         alt="Atleta comemorando na chegada com medalha" 
                         class="w-full h-full object-cover">
                    <div class="absolute bottom-3 left-4 text-[10px] uppercase font-bold text-white tracking-widest bg-black/60 backdrop-blur-md px-2.5 py-1 rounded-full">
                        A Conquista
                    </div>
                </div>

                <!-- Floating Photo 2: Night Bridge Stride (Bottom Left) -->
                <div class="absolute bottom-4 left-4 sm:left-24 lg:left-48 w-44 sm:w-64 lg:w-80 aspect-square rounded-3xl overflow-hidden shadow-2xl rotate-3 hover:rotate-0 hover:scale-105 transition-all duration-500 z-20">
                    <img src="{{ asset('images/editorial/runner_bridge_night.jpg') }}" 
                         alt="Corredora na noite iluminada da Ponte JK" 
                         class="w-full h-full object-cover">
                    <div class="absolute bottom-3 left-4 text-[10px] uppercase font-bold text-white tracking-widest bg-black/60 backdrop-blur-md px-2.5 py-1 rounded-full">
                        O Percurso
                    </div>
                </div>

                <!-- Center Power Words (Typographic Nucleus) -->
                <div class="relative z-30 text-center px-4 py-8 pointer-events-none select-none">
                    <h2 class="font-syne font-black text-5xl sm:text-7xl md:text-8xl lg:text-9xl uppercase tracking-tighter text-[#0A0A0C] leading-[0.9]">
                        CORRA.<br>
                        <span class="text-neutral-400">VIVA.</span><br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] to-[#FF4D00]">
                            MOVA-SE.
                        </span>
                    </h2>
                    <p class="text-xs sm:text-sm font-bold uppercase tracking-[0.2em] text-neutral-600 mt-6 max-w-xs mx-auto">
                        Música ao vivo • Pontos de Luz • Recovery Zone • Speed Test
                    </p>
                </div>

                <!-- Floating Photo 3: Smiling Runner Bib (Top Right) -->
                <div class="absolute top-4 right-2 sm:right-12 lg:right-16 w-48 sm:w-72 lg:w-88 aspect-[3/4] rounded-3xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 z-10">
                    <img src="{{ asset('images/editorial/smiling_runner_bib.jpg') }}" 
                         alt="Atleta sorrindo com número de peito" 
                         class="w-full h-full object-cover">
                    <div class="absolute bottom-3 left-4 text-[10px] uppercase font-bold text-white tracking-widest bg-black/60 backdrop-blur-md px-2.5 py-1 rounded-full">
                        Comunidade
                    </div>
                </div>

                <!-- Floating Photo 4: Recovery Zone (Bottom Right) -->
                <div class="absolute bottom-0 right-4 sm:right-24 lg:right-40 w-52 sm:w-80 lg:w-96 aspect-[16/10] rounded-3xl overflow-hidden shadow-2xl -rotate-2 hover:rotate-0 hover:scale-105 transition-all duration-500 z-20">
                    <img src="{{ asset('images/editorial/recovery_zone_rest.jpg') }}" 
                         alt="Área de Recovery ONE MOVE com alongamento e hidratação" 
                         class="w-full h-full object-cover">
                    <div class="absolute bottom-3 left-4 text-[10px] uppercase font-bold text-white tracking-widest bg-black/60 backdrop-blur-md px-2.5 py-1 rounded-full">
                        Recovery & Nutrição
                    </div>
                </div>

            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 06. DISTÂNCIAS — NÚMEROS GIGANTES CONTEMPORÂNEOS              -->
        <!-- 5K COMECE. / 10K SUPERE. / 15K VÁ ALÉM.                       -->
        <!-- ============================================================== -->
        <section class="py-24 md:py-36 relative px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10 border-t border-black/5">
            
            <div class="mb-16">
                <span class="text-xs font-black uppercase tracking-[0.25em] text-[#FF4D00]">
                    06 / Os Desafios do Circuito
                </span>
                <h2 class="font-syne font-black text-3xl sm:text-5xl uppercase tracking-tight text-[#0A0A0C] mt-1">
                    ESCOLHA SUA DISTÂNCIA
                </h2>
            </div>

            <!-- Giant Numeral Typographic Progression (No Boxes, Pure Flow) -->
            <div class="space-y-16 lg:space-y-24">
                
                <!-- 5K: COMECE -->
                <div class="group relative flex flex-col lg:flex-row items-baseline justify-between border-b border-black/10 pb-12 transition-all duration-300">
                    <div class="flex items-baseline gap-4 sm:gap-8">
                        <span class="font-syne font-black text-7xl sm:text-9xl md:text-[11rem] lg:text-[13rem] leading-none text-[#0A0A0C] group-hover:text-[#FF4D00] transition-colors select-none tracking-tighter">
                            5K
                        </span>
                        <div>
                            <span class="text-xs font-black uppercase tracking-[0.2em] text-[#FF4D00]">O Primeiro Movimento</span>
                            <h3 class="font-syne font-black text-3xl sm:text-5xl md:text-6xl text-[#0A0A0C] uppercase tracking-tight">
                                COMECE.
                            </h3>
                        </div>
                    </div>
                    <p class="text-sm sm:text-base text-neutral-600 font-medium max-w-md mt-4 lg:mt-0 leading-relaxed">
                        A porta de entrada ideal para quem quer sentir a pulsação do asfalto, a vibração do pelotão e cruzar sua primeira linha de chegada triunfal.
                    </p>
                </div>

                <!-- 10K: SUPERE -->
                <div class="group relative flex flex-col lg:flex-row items-baseline justify-between border-b border-black/10 pb-12 transition-all duration-300">
                    <div class="flex items-baseline gap-4 sm:gap-8">
                        <span class="font-syne font-black text-7xl sm:text-9xl md:text-[11rem] lg:text-[13rem] leading-none text-[#0A0A0C] group-hover:text-[#FF4D00] transition-colors select-none tracking-tighter">
                            10K
                        </span>
                        <div>
                            <span class="text-xs font-black uppercase tracking-[0.2em] text-[#FF4D00]">A Quebra de Marcas</span>
                            <h3 class="font-syne font-black text-3xl sm:text-5xl md:text-6xl text-[#0A0A0C] uppercase tracking-tight">
                                SUPERE.
                            </h3>
                        </div>
                    </div>
                    <p class="text-sm sm:text-base text-neutral-600 font-medium max-w-md mt-4 lg:mt-0 leading-relaxed">
                        O dobro do desafio. O ritmo se estabelece com precisão, a respiração dita a cadência e você busca seu recorde pessoal nos melhores percursos do país.
                    </p>
                </div>

                <!-- 15K: VÁ ALÉM -->
                <div class="group relative flex flex-col lg:flex-row items-baseline justify-between border-b border-black/10 pb-12 transition-all duration-300">
                    <div class="flex items-baseline gap-4 sm:gap-8">
                        <span class="font-syne font-black text-7xl sm:text-9xl md:text-[11rem] lg:text-[13rem] leading-none text-[#0A0A0C] group-hover:text-[#FF4D00] transition-colors select-none tracking-tighter">
                            15K
                        </span>
                        <div>
                            <span class="text-xs font-black uppercase tracking-[0.2em] text-[#FF4D00]">A Distância Nobre</span>
                            <h3 class="font-syne font-black text-3xl sm:text-5xl md:text-6xl text-[#0A0A0C] uppercase tracking-tight">
                                VÁ ALÉM.
                            </h3>
                        </div>
                    </div>
                    <p class="text-sm sm:text-base text-neutral-600 font-medium max-w-md mt-4 lg:mt-0 leading-relaxed">
                        A prova nobre de resistência e maturidade. Um trajeto monumental que explora os grandes cartões postais de cada capital antes de consagrar sua vitória.
                    </p>
                </div>

            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 07. KIT ONE MOVE — CAMPANHA DE PRODUTO EM FUNDO BRANCO        -->
        <!-- Itens flutuando visualmente, sem caixa com borda             -->
        <!-- ============================================================== -->
        <section class="py-24 md:py-36 relative px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10 bg-white">
            
            <div class="max-w-3xl mb-16">
                <span class="text-xs font-black uppercase tracking-[0.25em] text-[#FF4D00]">
                    07 / Equipar a Jornada
                </span>
                <h2 class="font-syne font-black text-4xl sm:text-6xl md:text-7xl uppercase tracking-tighter text-[#0A0A0C] leading-[0.95] mt-2">
                    VOCÊ CORRE.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] to-[#FF4D00]">
                        A EXPERIÊNCIA VAI COM VOCÊ.
                    </span>
                </h2>
                <p class="text-base sm:text-lg text-neutral-600 font-medium mt-4">
                    O kit não é apenas o que o atleta recebe. É o primeiro capítulo da experiência ONE MOVE.
                </p>
            </div>

            <!-- Floating Product Showcase Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Main Product Photography (Clean, floating on pure white) -->
                <div class="lg:col-span-8 relative">
                    <div class="relative w-full aspect-[16/10] rounded-3xl overflow-hidden shadow-2xl bg-[#0F1115]">
                        <img src="{{ asset('images/editorial/kit_product_shoot.jpg') }}" 
                             alt="Kit ONE MOVE Oficial com camiseta, corta-vento, bolsa Invictus e suplementação" 
                             class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-700 ease-out">
                    </div>
                </div>

                <!-- Kit Callouts & Action -->
                <div class="lg:col-span-4 space-y-8">
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <span class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center font-bold text-xs text-[#0A0A0C] shrink-0">01</span>
                            <div>
                                <h4 class="font-syne font-black text-lg text-[#0A0A0C] uppercase">Camiseta Oficial ONE MOVE</h4>
                                <p class="text-xs text-neutral-500 mt-1 font-medium">Tecido técnico ultraleve respirável com proteção UV50+ e modelagem atlética ergonômica.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <span class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center font-bold text-xs text-[#0A0A0C] shrink-0">02</span>
                            <div>
                                <h4 class="font-syne font-black text-lg text-[#0A0A0C] uppercase">Corta-vento PRO & Bolsa Invictus</h4>
                                <p class="text-xs text-neutral-500 mt-1 font-medium">Exclusivos do kit PRO: corta-vento térmico leve e duffel bag esportiva reforçada.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <span class="w-8 h-8 rounded-full bg-[#FF4D00]/10 flex items-center justify-center font-bold text-xs text-[#FF4D00] shrink-0">03</span>
                            <div>
                                <h4 class="font-syne font-black text-lg text-[#0A0A0C] uppercase">Medalha Finisher Usinada</h4>
                                <p class="text-xs text-neutral-500 mt-1 font-medium">Metal maciço pesado com relevo escultural do cartão postal da etapa e fita comemorativa.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <span class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center font-bold text-xs text-[#0A0A0C] shrink-0">04</span>
                            <div>
                                <h4 class="font-syne font-black text-lg text-[#0A0A0C] uppercase">Nutrição & Recovery</h4>
                                <p class="text-xs text-neutral-500 mt-1 font-medium">Snacks proteicos, isotônicos, chip de cronometragem descartável e número de peito personalizado.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="{{ route('pages.kits') }}" class="btn-editorial-dark text-sm px-8 py-4 w-full sm:w-auto text-center justify-center">
                            <span>CONHEÇA O KIT COMPLETO</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 text-[#FF4D00]"></i>
                        </a>
                    </div>

                </div>

            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 08. MANIFESTO — MUDANÇA DE RITMO & PURA CONSTRUÇÃO DE MARCA   -->
        <!-- Foto emocional ocupando praticamente a tela inteira          -->
        <!-- ============================================================== -->
        <section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden my-12">
            
            <!-- Fullscreen Emotional Photo -->
            <img src="{{ asset('images/editorial/runner_victory_dawn.jpg') }}" 
                 alt="Atleta em comemoração ao amanhecer em Brasília" 
                 class="absolute inset-0 w-full h-full object-cover object-center brightness-75">

            <!-- Dramatic Atmospheric Vignette -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/40 to-black/60 pointer-events-none"></div>

            <!-- High-Impact Pure Brand Manifesto (No Buttons, No Selling) -->
            <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-12 text-center text-white py-20">
                <span class="inline-block text-xs uppercase font-black tracking-[0.3em] text-[#FF4D00] mb-6">
                    O Sentido do Movimento
                </span>

                <h2 class="font-syne font-black text-5xl sm:text-7xl md:text-8xl lg:text-9xl tracking-tight uppercase leading-[0.9] text-white">
                    UM PASSO<br>
                    <span class="text-neutral-300 font-bold">MUDA O RITMO.</span><br>
                    MILHARES<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] to-[#FF4D00]">
                        MUDAM UMA CIDADE.
                    </span>
                </h2>

                <div class="mt-12 flex items-center justify-center gap-3">
                    <span class="w-12 h-1 bg-[#FF4D00] rounded-full"></span>
                    <span class="font-syne font-black text-2xl tracking-widest text-white">ONE MOVE</span>
                    <span class="w-12 h-1 bg-[#FF4D00] rounded-full"></span>
                </div>
            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 09. GALERIA / INSTAGRAM — MOSAICO DINÂMICO & ORGÂNICO        -->
        <!-- #ONEMOVERUN (Sem a grade rígida tradicional)                  -->
        <!-- ============================================================== -->
        <section class="py-24 md:py-36 relative px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-4">
                <div>
                    <span class="text-xs font-black uppercase tracking-[0.25em] text-[#FF4D00]">
                        09 / Comunidade & Conexão
                    </span>
                    <h2 class="font-syne font-black text-4xl sm:text-6xl uppercase tracking-tight text-[#0A0A0C] mt-1">
                        #ONEMOVERUN
                    </h2>
                </div>

                <a href="https://instagram.com" target="_blank" class="inline-flex items-center gap-2 text-xs font-extrabold uppercase tracking-widest text-neutral-800 hover:text-[#FF4D00] transition">
                    <i data-lucide="instagram" class="w-4 h-4 text-[#FF4D00]"></i>
                    <span>Siga @onemoverun no Instagram</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </a>
            </div>

            <!-- Staggered Organic Photo Composition -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 items-center">
                
                <!-- Col 1: Runner Smiling Bib -->
                <div class="space-y-4">
                    <div class="rounded-3xl overflow-hidden aspect-[3/4] shadow-lg hover:scale-105 transition-transform duration-500">
                        <img src="{{ asset('images/editorial/smiling_runner_bib.jpg') }}" alt="Corredor celebrando" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Col 2: Speed Test Runway + Feet -->
                <div class="space-y-4 md:-translate-y-8">
                    <div class="rounded-3xl overflow-hidden aspect-square shadow-lg hover:scale-105 transition-transform duration-500">
                        <img src="{{ asset('images/editorial/speed_test_runway.jpg') }}" alt="Speed Test ONE MOVE" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-3xl overflow-hidden aspect-[4/3] shadow-lg hover:scale-105 transition-transform duration-500">
                        <img src="{{ asset('images/editorial/runner_stride_feet.jpg') }}" alt="Passada do atleta" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Col 3: Medal Detail + Recovery -->
                <div class="space-y-4 md:translate-y-6">
                    <div class="rounded-3xl overflow-hidden aspect-[4/5] shadow-lg hover:scale-105 transition-transform duration-500">
                        <img src="{{ asset('images/editorial/medal_bag_close.jpg') }}" alt="Medalha e bolsa oficial" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Col 4: Finish Arch -->
                <div class="space-y-4">
                    <div class="rounded-3xl overflow-hidden aspect-[3/4] shadow-lg hover:scale-105 transition-transform duration-500">
                        <img src="{{ asset('images/editorial/finish_celebration.jpg') }}" alt="Linha de chegada triunfal" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 10. CTA FINAL — TELA EXTREMAMENTE LIMPA                       -->
        <!-- "QUAL É O SEU PRÓXIMO MOVIMENTO?"                             -->
        <!-- ============================================================== -->
        <section class="py-28 md:py-44 relative px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10 text-center bg-white border-t border-black/5">
            
            <div class="max-w-4xl mx-auto space-y-10">
                
                <span class="inline-block text-xs font-black uppercase tracking-[0.3em] text-[#FF4D00]">
                    10 / A Sua Largada
                </span>

                <h2 class="font-syne font-black text-5xl sm:text-7xl md:text-8xl lg:text-9xl uppercase tracking-tighter text-[#0A0A0C] leading-[0.9]">
                    QUAL É<br>
                    O SEU PRÓXIMO<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] to-[#FF4D00]">
                        MOVIMENTO?
                    </span>
                </h2>

                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="#cidades" class="btn-editorial-orange text-sm sm:text-base px-12 py-5 shadow-2xl">
                        <span>ESCOLHER MINHA CIDADE</span>
                        <i data-lucide="compass" class="w-5 h-5"></i>
                    </a>

                    <a href="https://inscricoes.onemoverun.com.br/etapa-brasilia-2027" 
                       target="_blank"
                       class="btn-editorial-dark text-sm sm:text-base px-10 py-5 shadow-xl">
                        <span>INSCREVER-SE EM BRASÍLIA</span>
                        <i data-lucide="arrow-up-right" class="w-5 h-5 text-[#FF4D00]"></i>
                    </a>
                </div>

                <div class="pt-12 text-xs font-extrabold uppercase tracking-widest text-neutral-400 space-y-1">
                    <p class="text-neutral-900 font-syne font-black text-sm tracking-wider">ONE MOVE RUN</p>
                    <p>12 CIDADES • 12 ETAPAS • UM MOVIMENTO</p>
                </div>

            </div>

        </section>

    </div>

@endsection
