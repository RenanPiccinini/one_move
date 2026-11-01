@extends('layouts.main')

@section('title', 'ONE MOVE RUN | Circuito Nacional 2027')

@section('content')

    <div class="relative w-full overflow-x-clip bg-white">

        <!-- ============================================================== -->
        <!-- 01. HERO CARROSSEL — SLIDE 1: BANNER / SLIDE 2: VÍDEO          -->
        <!-- Medida Padrão Recomendada para Imagem: 1920x1080 (16:9)         -->
        <!-- ============================================================== -->
        <section 
            id="hero-carousel-section"
            x-data="{
                activeSlide: 0,
                totalSlides: 2,
                autoPlayTimer: null,
                autoPlayDelay: 7000,
                isHovered: false,
                isMuted: true,
                progress: 0,
                progressInterval: null,
                startAutoPlay() {
                    this.clearTimers();
                    this.progress = 0;
                    const stepMs = 100;
                    this.progressInterval = setInterval(() => {
                        if (!this.isHovered) {
                            this.progress += (stepMs / this.autoPlayDelay) * 100;
                            if (this.progress >= 100) {
                                this.nextSlide();
                            }
                        }
                    }, stepMs);
                },
                clearTimers() {
                    if (this.progressInterval) clearInterval(this.progressInterval);
                },
                nextSlide() {
                    this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                    this.onSlideChange();
                },
                prevSlide() {
                    this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
                    this.onSlideChange();
                },
                goToSlide(index) {
                    this.activeSlide = index;
                    this.onSlideChange();
                },
                onSlideChange() {
                    this.progress = 0;
                    const video = this.$refs.heroVideo;
                    if (video) {
                        if (this.activeSlide === 1) {
                            video.play().catch(() => {});
                        } else {
                            video.pause();
                        }
                    }
                },
                toggleMute() {
                    const video = this.$refs.heroVideo;
                    if (!video) return;
                    video.muted = !video.muted;
                    this.isMuted = video.muted;
                    if (!video.muted && video.paused) {
                        video.play().catch(() => {});
                    }
                }
            }"
            x-init="startAutoPlay()"
            @mouseenter="isHovered = true"
            @mouseleave="isHovered = fal            class="relative w-full h-[calc(100vh-7.5rem)] min-h-[480px] max-h-[660px] overflow-hidden bg-[#0A0A0C] text-white z-10 select-none">

            <!-- SLIDE 0: BANNER OFICIAL ONE MOVE RUN (IMAGEM) -->
            <div 
                class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out"
                :class="activeSlide === 0 ? 'opacity-100 pointer-events-auto z-20' : 'opacity-0 pointer-events-none z-10'">
                
                <!-- Background Image (Banner 1920x1080) -->
                <img 
                    src="{{ asset('images/One Move_ Corrida em Brasília.png') }}" 
                    alt="Circuito ONE MOVE RUN Brasília" 
                    class="absolute inset-0 w-full h-full object-cover object-center scale-[1.01]">

                <!-- Cinematic Gradients & Shading -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/55 to-black/35 pointer-events-none"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-black/40 pointer-events-none"></div>

                <!-- Subtle Ambient Tech Grid -->
                <div class="absolute inset-0 opacity-[0.04] bg-[linear-gradient(to_right,#ffffff_1px,transparent_1px),linear-gradient(to_bottom,#ffffff_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>

                <!-- Slide 0 Content -->
                <div class="relative z-20 w-full h-full max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-12 flex flex-col justify-between pt-3 sm:pt-4 pb-9 sm:pb-11">
                    
                    <!-- Meta Header Tag -->
                    <div class="flex items-center justify-between text-[11px] sm:text-xs font-bold tracking-widest uppercase border-b border-white/10 pb-2 text-white/80">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#FF4D00] shadow-[0_0_10px_#FF4D00] animate-pulse"></span>
                            <span class="text-white font-extrabold tracking-wider">ONE MOVE RUN</span>
                            <span class="text-white/40">•</span>
                            <span class="text-white/90">CIRCUITO NACIONAL 2027</span>
                        </div>
                        <div class="hidden sm:flex items-center gap-4 text-[10px] sm:text-[11px] font-semibold tracking-wider text-white/70">
                            <span>12 CAPITAIS</span>
                            <span class="text-white/30">•</span>
                            <span>5K • 10K • 15K</span>
                            <span class="text-white/30">•</span>
                            <span class="text-[#FF4D00] font-black">LARGADA: JANEIRO</span>
                        </div>
                    </div>

                    <!-- Center Headline & CTA -->
                    <div class="my-auto max-w-3xl py-1 sm:py-2">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[#FF4D00] font-black uppercase text-[10px] sm:text-xs tracking-[0.15em] mb-2 sm:mb-3 shadow-lg">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#FF4D00]"></span>
                            <span>A Marca da Experiência em Corrida</span>
                        </div>

                        <h1 class="font-syne font-black text-3xl sm:text-4xl md:text-5xl lg:text-[3.5rem] tracking-tight leading-[1] uppercase text-white mb-2.5 sm:mb-3 drop-shadow-[0_10px_35px_rgba(0,0,0,0.9)]">
                            ONE MOVE RUN.<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] via-[#FF4D00] to-[#FF8C33]">
                                12 CIDADES. UM SÓ MOVIMENTO.
                            </span>
                        </h1>

                        <p class="text-xs sm:text-sm md:text-base text-white/90 max-w-xl font-normal leading-normal sm:leading-relaxed mb-3 sm:mb-4 drop-shadow-md">
                            A corrida é o produto. A experiência ONE MOVE é o diferencial. Escolha sua largada e sinta a energia de milhares de corredores conectados em 12 capitais brasileiras.
                        </p>

                        <!-- Primary CTA Button -->
                        <div class="flex flex-wrap items-center gap-3">
                            <a href="https://inscricoes.onemoverun.com.br/etapa-brasilia-2027" 
                               target="_blank"
                               class="inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-[#FF7A00] to-[#FF4D00] hover:brightness-110 text-white font-syne font-black text-xs sm:text-sm uppercase tracking-wider px-6 sm:px-7 py-2.5 sm:py-3 rounded-full shadow-[0_8px_25px_rgba(255,77,0,0.45)] hover:scale-105 active:scale-95 transition-all duration-300 group">
                                <span>INSCREVA-SE AGORA!</span>
                                <svg class="w-4 h-4 text-white group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                </svg>
                            </a>

                            <a href="#calendario" 
                               class="inline-flex items-center justify-center gap-2 bg-black/40 hover:bg-white/15 backdrop-blur-md text-white border border-white/25 hover:border-white/50 font-syne font-bold text-xs sm:text-sm uppercase tracking-wider px-5 py-2.5 sm:py-3 rounded-full transition-all duration-300">
                                <i data-lucide="calendar" class="w-3.5 h-3.5 text-[#FF4D00]"></i>
                                <span>Ver Calendário 2027</span>
                            </a>
                        </div>
                    </div>

                    <!-- Bottom Info -->
                    <div class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-white/60">
                        <span>ETAPA 01 • BRASÍLIA / DF • 24 DE JANEIRO</span>
                    </div>

                </div>
            </div>

            <!-- SLIDE 1: VÍDEO OFICIAL ONE MOVE RUN -->
            <div 
                class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out"
                :class="activeSlide === 1 ? 'opacity-100 pointer-events-auto z-20' : 'opacity-0 pointer-events-none z-10'">
                
                <!-- Background Video -->
                <video 
                    x-ref="heroVideo"
                    loop 
                    muted 
                    playsinline 
                    preload="auto"
                    poster="{{ asset('images/editorial/runner_course_dawn.jpg') }}"
                    class="absolute inset-0 w-full h-full object-cover object-center scale-[1.01]">
                    <source src="{{ asset('images/video2.mp4') }}" type="video/mp4">
                    Seu navegador não suporta a reprodução deste vídeo.
                </video>

                <!-- Cinematic Overlays -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/60 to-black/40 pointer-events-none"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-black/50 pointer-events-none"></div>

                <!-- Slide 1 Content -->
                <div class="relative z-20 w-full h-full max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-12 flex flex-col justify-between pt-3 sm:pt-4 pb-9 sm:pb-11">
                    
                    <!-- Meta Header Tag -->
                    <div class="flex items-center justify-between text-[11px] sm:text-xs font-bold tracking-widest uppercase border-b border-white/10 pb-2 text-white/80">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#FF4D00] shadow-[0_0_10px_#FF4D00] animate-ping"></span>
                            <span class="text-white font-extrabold tracking-wider">EXPERIÊNCIA IMERSIVA</span>
                            <span class="text-white/40">•</span>
                            <span class="text-white/90">VÍDEO OFICIAL</span>
                        </div>
                        
                        <!-- Sound Toggle Floating Pill -->
                        <button 
                            @click="toggleMute()" 
                            type="button" 
                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-white/15 hover:bg-white/25 backdrop-blur-md border border-white/20 text-[10px] sm:text-xs font-bold tracking-wider transition">
                            <span x-show="isMuted" class="flex items-center gap-1.5">
                                <i data-lucide="volume-x" class="w-3.5 h-3.5 text-neutral-400"></i>
                                <span>Ativar Som</span>
                            </span>
                            <span x-show="!isMuted" class="flex items-center gap-1.5 text-[#FF4D00]">
                                <i data-lucide="volume-2" class="w-3.5 h-3.5"></i>
                                <span>Som Ativo</span>
                            </span>
                        </button>
                    </div>

                    <!-- Center Headline & CTA -->
                    <div class="my-auto max-w-3xl py-1 sm:py-2">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[#FF4D00] font-black uppercase text-[10px] sm:text-xs tracking-[0.15em] mb-2 sm:mb-3 shadow-lg">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#FF4D00] animate-pulse"></span>
                            <span>Alta Performance & Cenografia</span>
                        </div>

                        <h2 class="font-syne font-black text-3xl sm:text-4xl md:text-5xl lg:text-[3.5rem] tracking-tight leading-[1] uppercase text-white mb-2.5 sm:mb-3 drop-shadow-[0_10px_35px_rgba(0,0,0,0.9)]">
                            SINTA A ENERGIA<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] via-[#FF4D00] to-[#FF8C33]">
                                DO MOVIMENTO.
                            </span>
                        </h2>

                        <p class="text-xs sm:text-sm md:text-base text-white/90 max-w-xl font-normal leading-normal sm:leading-relaxed mb-3 sm:mb-4 drop-shadow-md">
                            Música ao vivo, iluminação cênica, hidratação de elite e uma linha de chegada vibrante desenhada para transformar cada metro em memória inesquecível.
                        </p>

                        <!-- Primary CTA Button -->
                        <div class="flex flex-wrap items-center gap-3">
                            <a href="https://inscricoes.onemoverun.com.br/etapa-brasilia-2027" 
                               target="_blank"
                               class="inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-[#FF7A00] to-[#FF4D00] hover:brightness-110 text-white font-syne font-black text-xs sm:text-sm uppercase tracking-wider px-6 sm:px-7 py-2.5 sm:py-3 rounded-full shadow-[0_8px_25px_rgba(255,77,0,0.45)] hover:scale-105 active:scale-95 transition-all duration-300 group">
                                <span>INSCREVA-SE AGORA!</span>
                                <svg class="w-4 h-4 text-white group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                </svg>
                            </a>

                            <button 
                                @click="toggleMute()" 
                                type="button"
                                class="inline-flex items-center justify-center gap-2 bg-black/40 hover:bg-white/15 backdrop-blur-md text-white border border-white/25 hover:border-white/50 font-syne font-bold text-xs sm:text-sm uppercase tracking-wider px-5 py-2.5 sm:py-3 rounded-full transition-all duration-300">
                                <span x-text="isMuted ? '🔊 Ativar Som' : '🔇 Silenciar'"></span>
                            </button>
                        </div>
                    </div>

                    <!-- Bottom Info -->
                    <div class="text-[10px] sm:text-xs font-mono uppercase tracking-widest text-white/60">
                        <span>AUDIOVISUAL OFICIAL • CIRCUITO ONE MOVE RUN</span>
                    </div>

                </div>
            </div>

            <!-- CAROUSEL CONTROLS: LEFT / RIGHT ARROWS -->
            <button 
                @click="prevSlide()" 
                type="button"
                aria-label="Slide anterior"
                class="absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 z-30 w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-black/40 hover:bg-[#FF4D00] text-white/80 hover:text-white backdrop-blur-md border border-white/15 flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button 
                @click="nextSlide()" 
                type="button"
                aria-label="Próximo slide"
                class="absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 z-30 w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-black/40 hover:bg-[#FF4D00] text-white/80 hover:text-white backdrop-blur-md border border-white/15 flex items-center justify-center transition-all duration-300 hover:scale-110 shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- BOTTOM CAROUSEL PROGRESS / SLIDE INDICATORS -->
            <div class="absolute bottom-2.5 sm:bottom-3.5 left-1/2 -translate-x-1/2 z-30 flex items-center gap-2 bg-black/60 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/15 shadow-xl">
                <!-- Slide 0 Pill -->
                <button 
                    @click="goToSlide(0)" 
                    type="button"
                    class="relative flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] sm:text-xs font-bold transition-all duration-300"
                    :class="activeSlide === 0 ? 'bg-[#FF4D00] text-white shadow-md' : 'text-neutral-400 hover:text-white'">
                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                    <span class="tracking-wider uppercase">01 Imagem</span>
                </button>

                <!-- Slide 1 Pill -->
                <button 
                    @click="goToSlide(1)" 
                    type="button"
                    class="relative flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] sm:text-xs font-bold transition-all duration-300"
                    :class="activeSlide === 1 ? 'bg-[#FF4D00] text-white shadow-md' : 'text-neutral-400 hover:text-white'">
                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                    <span class="tracking-wider uppercase">02 Vídeo</span>
                </button>
            </div>

            <!-- Bottom Progress Line -->
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/10 z-30">
                <div 
                    class="h-full bg-gradient-to-r from-[#FF7A00] to-[#FF4D00] transition-all duration-100 ease-linear"
                    :style="'width: ' + progress + '%'"></div>
            </div>

        </section>

        <!-- ============================================================== -->
        <!-- 03. O CALENDÁRIO DO CIRCUITO — "ONDE SERÁ SUA PRÓXIMA LARGADA?"  -->
        <!-- Formato interativo com fonte refinada e LINHAS EM MOVIMENTO    -->
        <!-- ============================================================== -->
        <section 
            id="calendario" 
            class="py-20 md:py-28 relative px-4 sm:px-6 lg:px-12 max-w-[1700px] mx-auto z-10 overflow-hidden" 
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
                        statusLabel: 'INSCREVER →',
                        link: 'https://inscricoes.onemoverun.com.br/etapa-brasilia-2027',
                        image: '{{ asset('images/One Move_ Corrida em Brasília.png') }}',
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
                }
            }">

            <!-- ============================================================ -->
            <!-- LINHAS EM MOVIMENTO — VIBRANT KINETIC ENERGY TRAILS (SVG)     -->
            <!-- Inspirado no portfólio oficial ONE MOVE (sem linhas tracejadas)-->
            <!-- ============================================================ -->
            <div class="absolute inset-0 pointer-events-none -z-10 overflow-hidden">
                <svg class="w-full h-full animate-motion-glow" viewBox="0 0 1600 1200" fill="none" preserveAspectRatio="none">
                    <defs>
                        <!-- Dynamic Orange to Gold Ribbon Gradient -->
                        <linearGradient id="motion-line-gradient-1" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#FF3B00" stop-opacity="0.8" />
                            <stop offset="45%" stop-color="#FF7A00" stop-opacity="0.95" />
                            <stop offset="75%" stop-color="#FFB800" stop-opacity="0.75" />
                            <stop offset="100%" stop-color="#FF3B00" stop-opacity="0" />
                        </linearGradient>

                        <linearGradient id="motion-line-gradient-2" x1="100%" y1="20%" x2="0%" y2="90%">
                            <stop offset="0%" stop-color="#FF3B00" stop-opacity="0" />
                            <stop offset="25%" stop-color="#FF4D00" stop-opacity="0.85" />
                            <stop offset="65%" stop-color="#FF9900" stop-opacity="0.9" />
                            <stop offset="100%" stop-color="#FF2600" stop-opacity="0.1" />
                        </linearGradient>

                        <linearGradient id="motion-ribbon-fill" x1="0%" y1="0%" x2="100%" y2="80%">
                            <stop offset="0%" stop-color="#FF4D00" stop-opacity="0.08" />
                            <stop offset="50%" stop-color="#FF7A00" stop-opacity="0.03" />
                            <stop offset="100%" stop-color="#FF9900" stop-opacity="0" />
                        </linearGradient>

                        <!-- Soft Neon Glow Filter -->
                        <filter id="neon-glow" x="-20%" y="-20%" width="140%" height="140%">
                            <feGaussianBlur stdDeviation="6" result="blur" />
                            <feMerge>
                                <feMergeNode in="blur" />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>
                    </defs>

                    <!-- Motion Line 1: Primary Sweeping Arc -->
                    <path d="M -100,250 C 350,150 700,600 1150,420 C 1450,300 1600,500 1750,450" 
                          stroke="url(#motion-line-gradient-1)" 
                          stroke-width="3.5" 
                          stroke-linecap="round"
                          filter="url(#neon-glow)" />

                    <!-- Motion Line 2: Harmonious Velocity Ribbon with Volume -->
                    <path d="M -50,280 C 400,200 750,650 1200,470 C 1500,340 1650,530 1800,480" 
                          stroke="url(#motion-line-gradient-2)" 
                          stroke-width="2" 
                          stroke-linecap="round"
                          opacity="0.75" />

                    <!-- Motion Line 3: Deep Kinetic Swerve from the Bottom -->
                    <path d="M 200,1180 C 650,950 850,1050 1250,820 C 1450,700 1620,780 1780,720" 
                          stroke="url(#motion-line-gradient-1)" 
                          stroke-width="2.5" 
                          stroke-linecap="round"
                          filter="url(#neon-glow)" />

                    <!-- Ambient Warm Radial Light Blurs -->
                    <circle cx="850" cy="550" r="280" fill="#FF4D00" opacity="0.05" filter="url(#neon-glow)" />
                    <circle cx="1300" cy="400" r="220" fill="#FF7A00" opacity="0.04" filter="url(#neon-glow)" />
                </svg>
            </div>

            <!-- Header Section (Refined Font Hierarchy) -->
            <div class="mb-10 sm:mb-14">
                <span class="inline-flex items-center gap-2 text-xs font-black uppercase tracking-[0.25em] text-[#FF4D00]">
                    <span class="w-6 h-[2px] bg-[#FF4D00]"></span>
                    <span>03 / O Calendário do Circuito</span>
                </span>
                
                <h2 class="font-syne font-black text-3xl sm:text-4xl md:text-5xl lg:text-6xl tracking-tight text-[#0A0A0C] uppercase leading-[0.98] mt-2">
                    ONDE SERÁ<br>
                    SUA PRÓXIMA<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] to-[#FF4D00]">
                        LARGADA?
                    </span>
                </h2>
            </div>

            <!-- Interactive Split Layout: Left List / Right Live Visual Companion -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-start">
                
                <!-- The 12 Cities List (Compact, Sophisticated Typography) -->
                <div class="lg:col-span-7 divide-y divide-black/10 border-t border-b border-black/10">
                    <template x-for="(cityKey, index) in Object.keys(citiesData)" :key="cityKey">
                        <div :data-city="cityKey"
                             @mouseenter="activeCity = cityKey" 
                             @click="activeCity = cityKey"
                             class="group py-4 sm:py-5 cursor-pointer flex items-center justify-between transition-all duration-300 select-none"
                             :class="activeCity === cityKey ? 'pl-3 sm:pl-5 bg-neutral-50/90 -mx-3 sm:-mx-5 px-3 sm:px-5 rounded-2xl shadow-sm' : 'hover:pl-2'">
                            
                            <div class="flex items-baseline gap-3 sm:gap-5">
                                <span class="font-mono text-xs font-bold text-neutral-400 group-hover:text-[#FF4D00] transition" 
                                      x-text="String(index + 1).padStart(2, '0')"></span>
                                
                                <div>
                                    <h3 class="font-syne font-black text-xl sm:text-2xl md:text-3xl uppercase tracking-tight transition-all duration-300"
                                        :class="activeCity === cityKey ? 'text-[#FF4D00] translate-x-1' : 'text-[#0A0A0C] group-hover:text-black'"
                                        x-text="citiesData[cityKey].name">
                                    </h3>
                                    
                                    <div class="flex items-center gap-2 mt-0.5 text-xs font-bold uppercase tracking-wider text-neutral-500">
                                        <span x-text="citiesData[cityKey].month" class="text-neutral-900 font-extrabold"></span>
                                        <span>•</span>
                                        <span x-text="citiesData[cityKey].venue" class="line-clamp-1 max-w-xs text-neutral-500"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 shrink-0">
                                <a :href="citiesData[cityKey].link"
                                   @click.stop
                                   :target="citiesData[cityKey].status === 'open' ? '_blank' : '_self'"
                                   class="px-3 py-1 rounded-full text-xs font-black uppercase tracking-wider transition-all duration-300 inline-block"
                                   :class="citiesData[cityKey].status === 'open' 
                                         ? 'bg-[#FF4D00] text-white shadow-md hover:brightness-110' 
                                         : (activeCity === cityKey ? 'bg-neutral-900 text-white hover:bg-black' : 'bg-neutral-100 text-neutral-500 group-hover:bg-neutral-200')"
                                   x-text="citiesData[cityKey].statusLabel">
                                </a>
                                
                                <a :href="citiesData[cityKey].link"
                                   @click.stop
                                   :target="citiesData[cityKey].status === 'open' ? '_blank' : '_self'"
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

                <!-- Right Companion Viewport: Seamless City Photography Transition -->
                <div class="lg:col-span-5 relative">
                    <div class="lg:sticky lg:top-28">
                        <div class="relative w-full aspect-[4/5] max-h-[560px] rounded-3xl overflow-hidden shadow-2xl bg-neutral-900 border border-black/5">
                            
                            <!-- Reactive Image Element -->
                            <img :src="citiesData[activeCity].image" 
                                 :alt="citiesData[activeCity].name"
                                 class="w-full h-full object-cover object-center transition-all duration-700 ease-out">
                            
                            <!-- Atmospheric Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-transparent flex flex-col justify-between p-6 sm:p-8 text-white">
                                
                                <!-- Top Status Indicator -->
                                <div class="flex items-center justify-between text-xs font-bold uppercase tracking-widest">
                                    <span class="px-3.5 py-1 rounded-full backdrop-blur-md border border-white/20"
                                          :class="citiesData[activeCity].status === 'open' ? 'bg-[#FF4D00] text-white shadow-lg' : 'bg-white/20 text-white'"
                                          x-text="citiesData[activeCity].status === 'open' ? 'Inscrições Abertas' : 'Etapa Confirmada'">
                                    </span>
                                    <span class="text-white/80 font-mono" x-text="citiesData[activeCity].date"></span>
                                </div>

                                <!-- Bottom Stage Information -->
                                <div class="space-y-4">
                                    <div>
                                        <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]" 
                                              x-text="citiesData[activeCity].month"></span>
                                        <h4 class="font-syne font-black text-2xl sm:text-3xl text-white uppercase tracking-tight mt-1" 
                                            x-text="citiesData[activeCity].name + ', ' + citiesData[activeCity].state"></h4>
                                        <p class="text-xs sm:text-sm text-neutral-300 mt-1.5 font-medium leading-relaxed" 
                                           x-text="citiesData[activeCity].tagline"></p>
                                    </div>

                                    <div class="pt-3 border-t border-white/20 flex items-center justify-between">
                                        <span class="text-xs font-bold tracking-widest text-neutral-300 uppercase">
                                            5K • 10K • 15K
                                        </span>
                                        
                                        <a :href="citiesData[activeCity].link" 
                                           :target="citiesData[activeCity].status === 'open' ? '_blank' : '_self'"
                                           class="btn-editorial-orange text-xs px-6 py-2.5 flex items-center gap-2">
                                            <span x-text="citiesData[activeCity].status === 'open' ? 'INSCREVA-SE AGORA!' : 'VER DETALHES'"></span>
                                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>

    </div>

@endsection
