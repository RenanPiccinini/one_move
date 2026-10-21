@extends('layouts.main')

@section('title', 'ONE MOVE RUN 2027 | 12 Cidades. 12 Etapas. Um Movimento.')

@section('content')

    <!-- HERO SECTION WITH 3D SPEED PARTICLES CANVAS -->
    <section class="relative min-h-[92vh] flex items-center justify-center overflow-hidden pt-12 pb-20">
        <!-- 3D WebGL Canvas Layer -->
        <div id="hero-canvas" class="absolute inset-0 pointer-events-none z-0"></div>

        <!-- Background Cinematic Vignette & Ambient Light -->
        <div class="absolute inset-0 bg-gradient-to-t from-[#07080B] via-[#07080B]/60 to-transparent z-10 pointer-events-none"></div>
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[500px] bg-gradient-to-b from-[#FF4D00]/20 to-transparent rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-center">
            
            <!-- Circuit Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass-panel border border-[#FF4D00]/40 mb-8 animate-float">
                <span class="w-2 h-2 rounded-full bg-[#FF4D00] shadow-[0_0_10px_#FF4D00]"></span>
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Circuito Nacional 2027</span>
                <span class="text-slate-500">•</span>
                <span class="text-xs font-semibold text-slate-300">12 Cidades • 12 Etapas • Um Movimento</span>
            </div>

            <!-- Massive Main Headline -->
            <h1 class="font-syne font-black text-4xl sm:text-6xl md:text-7xl lg:text-8xl tracking-tight leading-[0.95] uppercase mb-6">
                <span class="block text-white">UMA CORRIDA</span>
                <span class="block text-gradient-orange">DESENHADA PARA</span>
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#FF7A00] via-[#FF4D00] to-[#E62E00] drop-shadow-[0_10px_35px_rgba(255,77,0,0.4)]">
                    SER VIVIDA.
                </span>
            </h1>

            <!-- Subtitle from Concept -->
            <p class="max-w-3xl mx-auto text-base sm:text-lg md:text-xl text-slate-300 font-normal leading-relaxed mb-10">
                Uma corrida pode entregar uma medalha. Uma experiência entrega uma história para contar.
                <span class="text-white font-semibold">A corrida é o produto. A experiência ONE MOVE é o diferencial.</span>
            </p>

            <!-- Countdown to Next Race (Brasília Stage) -->
            <div class="glass-panel max-w-xl mx-auto rounded-3xl p-5 mb-10 border border-white/10 shadow-glow-orange-sm">
                <div class="flex items-center justify-between mb-3 px-2">
                    <div class="flex items-center gap-2">
                        <i data-lucide="timer" class="w-4 h-4 text-[#FF4D00]"></i>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-300">Contagem Regressiva para a Largada</span>
                    </div>
                    <span class="text-xs font-extrabold text-[#FF7A00] uppercase">Etapa 01 • Brasília/DF</span>
                </div>
                
                <div class="grid grid-cols-4 gap-2 sm:gap-4 text-center">
                    <div class="bg-black/40 rounded-2xl p-3 border border-white/5">
                        <span class="cd-days block font-syne font-black text-2xl sm:text-4xl text-white">00</span>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Dias</span>
                    </div>
                    <div class="bg-black/40 rounded-2xl p-3 border border-white/5">
                        <span class="cd-hours block font-syne font-black text-2xl sm:text-4xl text-[#FF9E66]">00</span>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Horas</span>
                    </div>
                    <div class="bg-black/40 rounded-2xl p-3 border border-white/5">
                        <span class="cd-minutes block font-syne font-black text-2xl sm:text-4xl text-[#FF7A00]">00</span>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Minutos</span>
                    </div>
                    <div class="bg-black/40 rounded-2xl p-3 border border-white/5">
                        <span class="cd-seconds block font-syne font-black text-2xl sm:text-4xl text-[#FF4D00] animate-pulse">00</span>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Segundos</span>
                    </div>
                </div>
            </div>

            <!-- Main CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('stages.index') }}" class="btn-primary-onemove w-full sm:w-auto text-sm px-9 py-4 group">
                    <i data-lucide="compass" class="w-5 h-5 group-hover:rotate-45 transition-transform duration-300"></i>
                    <span>ESCOLHA SUA ETAPA</span>
                </a>
                
                <a href="{{ route('pages.circuito') }}" class="btn-secondary-onemove w-full sm:w-auto text-sm px-8 py-4">
                    <i data-lucide="play-circle" class="w-5 h-5 text-[#FF7A00]"></i>
                    <span>CONHEÇA O CIRCUITO</span>
                </a>
            </div>

            <!-- Stats Bar -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto pt-8 border-t border-white/10">
                <div class="p-3">
                    <span class="font-syne font-extrabold text-2xl sm:text-3xl text-white">12</span>
                    <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Capitais Brasileiras</p>
                </div>
                <div class="p-3">
                    <span class="font-syne font-extrabold text-2xl sm:text-3xl text-[#FF7A00]">5K • 10K • 21K</span>
                    <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Distâncias Oficiais</p>
                </div>
                <div class="p-3">
                    <span class="font-syne font-extrabold text-2xl sm:text-3xl text-white">+50.000</span>
                    <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Atletas no Movimento</p>
                </div>
                <div class="p-3">
                    <span class="font-syne font-extrabold text-2xl sm:text-3xl text-[#FF4D00]">1 MANDALA</span>
                    <p class="text-xs text-slate-400 uppercase tracking-wider mt-1">Passaporte Colecionável</p>
                </div>
            </div>

        </div>
    </section>

    <!-- BLOCO FORTE: DESTAQUE DA PRÓXIMA CORRIDA (ETAPA BRASÍLIA) -->
    <section class="py-20 relative bg-gradient-to-b from-[#07080B] via-[#0E1015] to-[#07080B]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex items-center justify-between mb-8">
                <div>
                    <span class="text-xs uppercase tracking-widest text-[#FF7A00] font-bold">Destaque de Abertura</span>
                    <h2 class="text-2xl sm:text-4xl font-syne font-black text-white mt-1">A PRIMEIRA ETAPA DO CIRCUITO</h2>
                </div>
                <a href="{{ route('stages.show', 'brasilia') }}" class="hidden sm:inline-flex items-center gap-1.5 text-sm font-bold text-[#FF6A1A] hover:text-[#FFA033] transition">
                    <span>Ver detalhes completos</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

            <!-- Featured Stage 3D Showcase Card -->
            <div class="glass-panel border-glow-orange rounded-3xl overflow-hidden relative group" data-tilt>
                <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">
                    
                    <!-- Left: Cinematic Image from Slide -->
                    <div class="lg:col-span-7 relative bg-[#050608] flex items-center justify-center overflow-hidden aspect-[16/9] lg:aspect-auto">
                        <img src="{{ asset('images/brand/hero-home.jpg') }}" 
                             alt="ONE MOVE RUN Brasília" 
                             class="w-full h-full object-contain">
                        
                        <!-- Floating Badge on Image -->
                        <div class="absolute top-4 left-4 flex flex-wrap items-center gap-2">
                            <span class="px-3.5 py-1.5 rounded-full bg-[#FF4D00] text-white text-xs font-black uppercase tracking-wider shadow-lg">
                                Etapa 01 • Inscrições Abertas
                            </span>
                            <span class="px-3 py-1.5 rounded-full bg-black/70 backdrop-blur-md text-white text-xs font-bold border border-white/20">
                                15 Março 2027
                            </span>
                        </div>
                    </div>

                    <!-- Right: Stage Info & Fast Registration Action -->
                    <div class="lg:col-span-5 p-8 sm:p-10 flex flex-col justify-between bg-[#0F1117]/90">
                        <div>
                            <div class="flex items-center gap-2 text-xs font-bold text-[#FF7A00] uppercase tracking-wider mb-2">
                                <i data-lucide="map-pin" class="w-4 h-4"></i>
                                <span>Brasília, Distrito Federal</span>
                            </div>

                            <h3 class="font-syne font-black text-3xl sm:text-4xl text-white mb-4">
                                ONE MOVE RUN <br><span class="text-gradient-orange">BRASÍLIA</span>
                            </h3>

                            <p class="text-slate-300 text-sm leading-relaxed mb-6">
                                A experiência nasce na capital federal. Uma cidade com escala monumental e arquitetura única. Percurso com passagem pela icônica Ponte JK, iluminação cênica de LED ao longo do trajeto, som imersivo e a ONE MOVE Arena.
                            </p>

                            <!-- Key Specs Grid -->
                            <div class="grid grid-cols-2 gap-3 mb-8">
                                <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                                    <span class="text-[11px] text-slate-400 font-semibold uppercase block">Distâncias</span>
                                    <span class="text-sm font-extrabold text-white">5K | 10K | 21K</span>
                                </div>
                                <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                                    <span class="text-[11px] text-slate-400 font-semibold uppercase block">Local de Largada</span>
                                    <span class="text-sm font-extrabold text-white">Esplanada dos Ministérios</span>
                                </div>
                                <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                                    <span class="text-[11px] text-slate-400 font-semibold uppercase block">Horário</span>
                                    <span class="text-sm font-extrabold text-white">06h30 da manhã</span>
                                </div>
                                <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                                    <span class="text-[11px] text-slate-400 font-semibold uppercase block">Lote Atual</span>
                                    <span class="text-sm font-extrabold text-[#FF6A1A]">1º Lote Disponível</span>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-3 pt-4 border-t border-white/10">
                            <a href="{{ route('stages.show', 'brasilia') }}" class="btn-secondary-onemove text-xs px-6 py-3.5 flex-1 justify-center">
                                <i data-lucide="info" class="w-4 h-4"></i>
                                <span>Ver Etapa Completa</span>
                            </a>
                            <button onclick="openRegistrationRedirect('ONE MOVE RUN Brasília', 'https://inscricoes.onemoverun.com.br/brasilia')" class="btn-primary-onemove text-xs px-6 py-3.5 flex-1 justify-center">
                                <i data-lucide="flame" class="w-4 h-4"></i>
                                <span>INSCREVA-SE</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- BLOCO MUITO FORTE: 12 CIDADES. 12 ETAPAS. UM MOVIMENTO. -->
    <section class="py-24 relative overflow-hidden bg-[#07080B] text-center border-t border-b border-white/5">
        <!-- Laser trail effect -->
        <div class="laser-trail"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase tracking-widest text-[#FF7A00] font-black">Circuito ONE MOVE RUN 2027</span>
            
            <h2 class="font-syne font-black text-3xl sm:text-5xl md:text-6xl text-white tracking-tight mt-3 mb-6 uppercase">
                12 CIDADES. 12 ETAPAS. <br>
                <span class="text-gradient-orange">UM MOVIMENTO.</span>
            </h2>

            <p class="text-base sm:text-xl text-slate-300 max-w-2xl mx-auto leading-relaxed mb-10">
                Escolha onde será o seu próximo desafio ou encare o circuito completo. Cada cidade traz uma identidade própria e a mesma assinatura inesquecível de experiência.
            </p>

            <a href="{{ route('stages.index') }}" class="btn-primary-onemove text-sm px-10 py-4 shadow-glow-orange">
                <i data-lucide="map" class="w-5 h-5"></i>
                <span>VER AS 12 ETAPAS DO CIRCUITO</span>
            </a>
        </div>
    </section>

    <!-- O PASSAPORTE ONE MOVE (INCENTIVO MULTI-ETAPAS & MANDALA) -->
    <section id="passaporte" class="py-20 relative bg-[#090B10]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-16">
                <div class="lg:col-span-6 space-y-5">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#FF7A00]/10 text-[#FF7A00] border border-[#FF7A00]/20 text-xs font-bold uppercase tracking-wider">
                        <i data-lucide="award" class="w-4 h-4"></i>
                        <span>Programa de Fidelidade do Corredor</span>
                    </div>

                    <h2 class="font-syne font-black text-3xl sm:text-5xl text-white leading-tight">
                        PASSAPORTE <br>
                        <span class="text-gradient-orange">ONE MOVE 2027</span>
                    </h2>

                    <p class="text-slate-300 text-base leading-relaxed">
                        Quem corre várias etapas deixa de ser apenas um inscrito e passa a acompanhar o circuito como um verdadeiro atleta de temporada. Conecte cidades, acumule carimbos e conquiste a cobiçada Mandala Nacional.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-[#FF4D00]/20 text-[#FF4D00] flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">2+</div>
                            <p class="text-sm text-slate-300"><strong class="text-white">Combo 2 Etapas:</strong> Desconto especial e selos personalizados no passaporte físico e digital.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-[#FF4D00]/20 text-[#FF4D00] flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">3+</div>
                            <p class="text-sm text-slate-300"><strong class="text-white">Combo 3 a 5 Etapas:</strong> Acesso antecipado aos lotes, personalização gratuita de camiseta e medalha conectável.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-[#FF4D00]/20 text-[#FF4D00] flex items-center justify-center shrink-0 mt-0.5 font-bold text-xs">★</div>
                            <p class="text-sm text-slate-300"><strong class="text-white">Circuito Completo:</strong> Mandala de Honra ONE MOVE e premiação especial de gala na Grande Final em Manaus.</p>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="{{ route('pages.circuito') }}#passaporte" class="btn-secondary-onemove text-xs px-6 py-3">
                            <span>Entenda como funciona o Passaporte</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Right: Medal / Passport Showcase Image from Slides -->
                <div class="lg:col-span-6 relative">
                    <div class="glass-panel border-glow-orange rounded-3xl p-4 sm:p-6 relative group">
                        <div class="w-full aspect-[16/9] rounded-2xl overflow-hidden bg-[#050608] flex items-center justify-center border border-white/10">
                            <img src="{{ asset('images/brand/medal-details.jpg') }}" alt="Medalha e Kit ONE MOVE" class="w-full h-full object-contain transition duration-300 group-hover:brightness-105">
                        </div>
                        <div class="mt-4 p-4 rounded-2xl bg-black/60 border border-white/10">
                            <span class="text-xs font-bold text-[#FF7A00] uppercase tracking-wider block">Mandala Colecionável</span>
                            <p class="text-xs sm:text-sm text-white font-medium mt-1">Cada etapa entrega uma medalha metálica de acabamento premium que se acopla à mandala central do circuito.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 12 Cities Passport Grid Preview -->
            <div class="mt-12">
                <div class="text-center mb-8">
                    <span class="text-xs uppercase font-bold text-slate-400 tracking-wider">As 12 Cidades do Passaporte 2027</span>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 sm:gap-4">
                    @foreach($stages as $stg)
                        <a href="{{ route('stages.show', $stg->slug) }}" class="passport-stamp p-4 text-center bg-[#0C0E14] block group">
                            <span class="text-[10px] font-black uppercase tracking-wider block text-slate-400 group-hover:text-[#FF7A00] transition">
                                Etapa {{ sprintf('%02d', $stg->stage_number) }}
                            </span>
                            <h4 class="font-syne font-black text-sm text-white group-hover:text-[#FF6A1A] transition mt-1">
                                {{ $stg->city }}
                            </h4>
                            <span class="text-[11px] text-slate-400 block mt-1">
                                {{ $stg->state }}
                            </span>
                            <div class="mt-3">
                                @if($stg->isOpen())
                                    <span class="inline-block px-2 py-0.5 rounded text-[9px] font-black uppercase bg-[#FF4D00]/20 text-[#FF4D00] border border-[#FF4D00]/40">
                                        Inscrições Abertas
                                    </span>
                                @else
                                    <span class="inline-block px-2 py-0.5 rounded text-[9px] font-bold uppercase bg-white/5 text-slate-400 border border-white/5">
                                        Em Breve
                                    </span>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <!-- O QUE É A EXPERIÊNCIA ONE MOVE: OS 5 TERRITÓRIOS -->
    <section class="py-24 relative bg-[#07080B] overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">O Ciclo do Atleta</span>
                <h2 class="font-syne font-black text-3xl sm:text-5xl text-white mt-2 mb-4">
                    A EXPERIÊNCIA NÃO INTERROMPE A PERFORMANCE.
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Durante a prova, o atleta corre. E a experiência acontece ao redor dele: luzes cênicas, DJ points, pontos de foto e ativações sem parar o ritmo.
                </p>
            </div>

            <!-- The 5 Steps Grid (from Slide 7 and 21) -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- 01 Largada -->
                <div class="glass-panel p-6 rounded-3xl border-t-2 border-t-[#FF4D00] space-y-3 hover:translate-y-[-4px] transition">
                    <span class="text-xs font-black text-[#FF4D00]">01 • LARGADA</span>
                    <h3 class="font-syne font-bold text-lg text-white">O Movimento Começa</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Pórtico sensorial de LED, contagem regressiva pulsante, música imersiva e atmosfera épica para iniciar seu desafio.
                    </p>
                </div>
                <!-- 02 Kit Atleta -->
                <div class="glass-panel p-6 rounded-3xl border-t-2 border-t-[#FF7A00] space-y-3 hover:translate-y-[-4px] transition">
                    <span class="text-xs font-black text-[#FF7A00]">02 • KIT ATLETA</span>
                    <h3 class="font-syne font-bold text-lg text-white">Alta Performance</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Camiseta tecnológica respirável, sacochila ou bolsa esportiva, número de peito, chip e produtos Integralmédica.
                    </p>
                </div>
                <!-- 03 Percurso -->
                <div class="glass-panel p-6 rounded-3xl border-t-2 border-t-[#FF4D00] space-y-3 hover:translate-y-[-4px] transition">
                    <span class="text-xs font-black text-[#FF4D00]">03 • PERCURSO</span>
                    <h3 class="font-syne font-bold text-lg text-white">Luz & Ritmo</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Marcação de KM iluminada, DJ Points no trajeto, frases de motivação e hidratação perfeita a cada 2,5 km.
                    </p>
                </div>
                <!-- 04 Arena & Recovery -->
                <div class="glass-panel p-6 rounded-3xl border-t-2 border-t-[#FF7A00] space-y-3 hover:translate-y-[-4px] transition">
                    <span class="text-xs font-black text-[#FF7A00]">04 • ARENA & SPEED TEST</span>
                    <h3 class="font-syne font-bold text-lg text-white">Celebração & Teste</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Espaço Recovery com massoterapia e frutas, Speed Test de velocidade com cronometragem laser e shows ao vivo.
                    </p>
                </div>
                <!-- 05 Conteúdo -->
                <div class="glass-panel p-6 rounded-3xl border-t-2 border-t-[#FF4D00] space-y-3 hover:translate-y-[-4px] transition">
                    <span class="text-xs font-black text-[#FF4D00]">05 • CONTEÚDO</span>
                    <h3 class="font-syne font-bold text-lg text-white">Sua História Contada</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Storymakers registrando momentos reais, busca rápida por número de peito e integração direta com o Strava.
                    </p>
                </div>
            </div>

            <!-- Two Visual Cards: Speed Test & Recovery -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
                <div class="glass-panel rounded-3xl overflow-hidden group border border-white/10" data-tilt>
                    <div class="w-full aspect-[16/9] overflow-hidden relative bg-[#050608] flex items-center justify-center border-b border-white/10">
                        <img src="{{ asset('images/brand/speed-test.jpg') }}" alt="ONE MOVE Speed Test" class="w-full h-full object-contain transition duration-300 group-hover:brightness-105">
                    </div>
                    <div class="p-6 sm:p-8 bg-[#0E1015]">
                        <span class="text-xs font-bold uppercase text-[#FF4D00]">Exclusivo na Arena</span>
                        <h4 class="font-syne font-bold text-2xl text-white mt-1 mb-2">SPEED TEST</h4>
                        <p class="text-slate-300 text-sm leading-relaxed mb-4">
                            Depois da prova, teste seus limites em uma pista de medição de velocidade com sensor eletrônico. Descubra sua aceleração máxima de forma divertida e sem interferir na sua prova!
                        </p>
                    </div>
                </div>

                <div class="glass-panel rounded-3xl overflow-hidden group border border-white/10" data-tilt>
                    <div class="w-full aspect-[16/9] overflow-hidden relative bg-[#050608] flex items-center justify-center border-b border-white/10">
                        <img src="{{ asset('images/brand/recovery-zone.jpg') }}" alt="ONE MOVE Recovery" class="w-full h-full object-contain transition duration-300 group-hover:brightness-105">
                    </div>
                    <div class="p-6 sm:p-8 bg-[#0E1015]">
                        <span class="text-xs font-bold uppercase text-[#FF7A00]">Cuidado com o Atleta</span>
                        <h4 class="font-syne font-bold text-2xl text-white mt-1 mb-2">ONE MOVE RECOVERY</h4>
                        <p class="text-slate-300 text-sm leading-relaxed mb-4">
                            Performance também é cuidar de quem acabou de entregar tudo. Espaço dedicado com hidratação gelada, frutas selecionadas, snacks proteicos e área de mobilidade.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SHOWCASE DE KITS (ONE MOVE vs ONE MOVE PRO) -->
    <section class="py-20 bg-[#0A0C11] border-t border-b border-white/5 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Equipamentos Oficiais</span>
                    <h2 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1">KITS DO ATLETA</h2>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('pages.kits') }}" class="inline-flex items-center gap-2 text-sm font-bold text-[#FF6A1A] hover:text-[#FFA033] transition">
                        <span>Ver comparativo completo dos itens</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Kit Banner from Slide 8 -->
            <div class="glass-panel border-glow-orange rounded-3xl overflow-hidden p-6 sm:p-10 mb-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <img src="{{ asset('images/brand/kits-showcase.jpg') }}" alt="Kits ONE MOVE e ONE MOVE PRO" class="w-full h-auto rounded-2xl shadow-2xl">
                    </div>
                    <div class="lg:col-span-5 space-y-6">
                        <div>
                            <span class="text-xs font-bold uppercase text-slate-400">Design & Materiais Nobres</span>
                            <h3 class="font-syne font-black text-3xl text-white mt-1">A CORRIDA AINDA NEM COMEÇOU. E A EXPERIÊNCIA JÁ ESTÁ NAS SUAS MÃOS.</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                                <div class="flex items-center justify-between mb-1">
                                    <h4 class="font-syne font-bold text-white text-base">KIT ONE MOVE</h4>
                                    <span class="text-xs font-bold text-[#FF6A1A]">Essencial</span>
                                </div>
                                <p class="text-xs text-slate-300">Camiseta oficial, número de peito, chip de cronometragem, porta-número, sacochila, bandana, itens Integralmédica e benefícios de parceiros.</p>
                            </div>

                            <div class="p-4 rounded-2xl bg-[#FF4D00]/10 border border-[#FF4D00]/30 shadow-glow-orange-sm">
                                <div class="flex items-center justify-between mb-1">
                                    <h4 class="font-syne font-bold text-white text-base flex items-center gap-1.5">
                                        <span>KIT ONE MOVE PRO</span>
                                        <span class="px-2 py-0.5 rounded text-[9px] font-black bg-[#FF4D00] text-white">DESTAQUE</span>
                                    </h4>
                                    <span class="text-xs font-bold text-[#FF7A00]">Performance VIP</span>
                                </div>
                                <p class="text-xs text-slate-200">Tudo do Kit ONE MOVE + <strong>Jaqueta Corta-Vento Oficial</strong> impermeável e refletiva, bolsa esportiva reforçada e brindes exclusivos de performance.</p>
                            </div>
                        </div>

                        <a href="{{ route('pages.kits') }}" class="btn-primary-onemove text-xs px-6 py-3 w-full justify-center">
                            <span>Explorar Detalhes dos Kits</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CALENDÁRIO RESUMIDO 2027 -->
    <section class="py-20 bg-[#07080B]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12">
                <div>
                    <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Cronograma Oficial</span>
                    <h2 class="font-syne font-black text-3xl sm:text-4xl text-white mt-1">CALENDÁRIO RESUMIDO 2027</h2>
                </div>
                <a href="{{ route('pages.calendario') }}" class="mt-4 sm:mt-0 btn-secondary-onemove text-xs px-5 py-2.5">
                    <span>Ver Linha do Tempo Completa</span>
                    <i data-lucide="calendar" class="w-4 h-4"></i>
                </a>
            </div>

            <!-- Horizontal Scrollable Timeline Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($stages->take(8) as $stage)
                    <div class="glass-panel p-5 rounded-2xl border border-white/5 hover:border-[#FF4D00]/40 transition group">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-black text-[#FF4D00]">ETAPA {{ sprintf('%02d', $stage->stage_number) }}</span>
                            @if($stage->isOpen())
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-black uppercase bg-[#FF4D00]/20 text-[#FF4D00] border border-[#FF4D00]/30">Aberto</span>
                            @else
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold uppercase bg-white/5 text-slate-400">Em Breve</span>
                            @endif
                        </div>
                        <h4 class="font-syne font-black text-xl text-white group-hover:text-[#FF6A1A] transition">{{ $stage->city }} / {{ $stage->state }}</h4>
                        <p class="text-xs text-slate-400 mt-1 flex items-center gap-1.5">
                            <i data-lucide="calendar" class="w-3.5 h-3.5 text-slate-400"></i>
                            <span>{{ $stage->date_display }}</span>
                        </p>
                        <p class="text-xs text-slate-400 mt-1 flex items-center gap-1.5">
                            <i data-lucide="activity" class="w-3.5 h-3.5 text-slate-400"></i>
                            <span>5K • 10K • 21K</span>
                        </p>
                        <div class="mt-4 pt-3 border-t border-white/5 flex items-center justify-between">
                            <a href="{{ route('stages.show', $stage->slug) }}" class="text-xs font-bold text-white hover:text-[#FF4D00] transition flex items-center gap-1">
                                <span>Ver Etapa</span>
                                <i data-lucide="chevron-right" class="w-3 h-3"></i>
                            </a>
                            @if($stage->isOpen())
                                <button onclick="openRegistrationRedirect('{{ $stage->name }}', '{{ $stage->registration_link }}')" class="text-xs font-extrabold text-[#FF4D00] hover:underline">
                                    Inscrever
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 text-center">
                <span class="text-xs text-slate-400">Exibindo 8 de 12 etapas do circuito nacional.</span>
            </div>
        </div>
    </section>

    <!-- MURAL DO ATLETA & COMUNIDADE (STRAVA / INSTAGRAM / HISTÓRIA) -->
    <section class="py-20 bg-gradient-to-b from-[#07080B] via-[#0E1017] to-[#07080B] border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Comunidade ONE MOVE</span>
                <h2 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1 mb-3">O QUE É VIVIDO VIRA CONTEÚDO</h2>
                <p class="text-slate-300 text-sm">
                    Não queremos pedir para o atleta postar. Queremos dar a ele um motivo inesquecível para compartilhar sua conquista com o mundo.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Slide 14 Image -->
                <div class="glass-panel rounded-3xl overflow-hidden group flex flex-col justify-between border border-white/10">
                    <div>
                        <div class="w-full aspect-[16/9] overflow-hidden relative bg-[#050608] flex items-center justify-center border-b border-white/10">
                            <img src="{{ asset('images/brand/social-strava.jpg') }}" alt="Atleta ONE MOVE na Chegada" class="w-full h-full object-contain transition duration-300 group-hover:brightness-105">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 text-xs font-bold text-[#FF6A1A] mb-1">
                                <i data-lucide="camera" class="w-4 h-4"></i>
                                <span>Fotografia Oficial em Alta Resolução</span>
                            </div>
                            <h4 class="font-syne font-bold text-lg text-white">Fotos da sua Superação</h4>
                            <p class="text-xs text-slate-400 mt-1 leading-relaxed">
                                Fotógrafos profissionais posicionados nos pontos de maior emoção: pórtico, pontes e linha de chegada.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 15 Image -->
                <div class="glass-panel rounded-3xl overflow-hidden group flex flex-col justify-between border border-white/10">
                    <div>
                        <div class="w-full aspect-[16/9] overflow-hidden relative bg-[#050608] flex items-center justify-center border-b border-white/10">
                            <img src="{{ asset('images/brand/athlete-media.jpg') }}" alt="O Atleta é parte da Mídia" class="w-full h-full object-contain transition duration-300 group-hover:brightness-105">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 text-xs font-bold text-[#FF7A00] mb-1">
                                <i data-lucide="instagram" class="w-4 h-4"></i>
                                <span>Storymakers na Arena</span>
                            </div>
                            <h4 class="font-syne font-bold text-lg text-white">O Atleta é a Própria Mídia</h4>
                            <p class="text-xs text-slate-400 mt-1 leading-relaxed">
                                Conteúdo espontâneo em tempo real, telões interativos na chegada e ativações feitas para o seu feed e stories.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Strava & Performance -->
                <div class="glass-panel rounded-3xl overflow-hidden group flex flex-col justify-between border border-white/10">
                    <div>
                        <div class="w-full aspect-[16/9] overflow-hidden relative bg-[#050608] flex items-center justify-center border-b border-white/10">
                            <img src="{{ asset('images/brand/move-again.jpg') }}" alt="Strava e Performance ONE MOVE" class="w-full h-full object-contain transition duration-300 group-hover:brightness-105">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 text-xs font-bold text-[#FF4D00] mb-1">
                                <i data-lucide="activity" class="w-4 h-4"></i>
                                <span>Conexão Strava & Segmentos Oficiais</span>
                            </div>
                            <h4 class="font-syne font-bold text-lg text-white">Registro da Sua Glória</h4>
                            <p class="text-xs text-slate-400 mt-1 leading-relaxed">
                                Clubes oficiais ONE MOVE no Strava, desafios virtuais pré-prova e registro permanente de cada quilômetro.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('pages.resultados') }}#fotos" class="btn-secondary-onemove text-xs px-6 py-3">
                    <i data-lucide="search" class="w-4 h-4 text-[#FF7A00]"></i>
                    <span>Buscar Fotos das Etapas por Número de Peito</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ RÁPIDO NA HOME -->
    <section class="py-20 bg-[#07080B] border-t border-white/5" x-data="{ activeAccordion: null }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Tire suas Dúvidas</span>
                <h2 class="font-syne font-black text-3xl text-white mt-1">PERGUNTAS FREQUENTES</h2>
            </div>

            <div class="space-y-4">
                <!-- Q1 -->
                <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                    <button @click="activeAccordion = (activeAccordion === 1 ? null : 1)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                        <span>A inscrição é realizada diretamente neste site?</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === 1 }"></i>
                    </button>
                    <div x-show="activeAccordion === 1" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                        As inscrições são realizadas por meio da plataforma oficial parceira de cronometragem e pagamentos. Ao clicar em <strong>INSCREVA-SE</strong> na etapa desejada, você será direcionado para o ambiente seguro e certificado para escolher sua categoria, tamanho de camiseta e efetuar o pagamento.
                    </div>
                </div>

                <!-- Q2 -->
                <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                    <button @click="activeAccordion = (activeAccordion === 2 ? null : 2)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                        <span>Como funciona o Passaporte ONE MOVE e a Mandala?</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === 2 }"></i>
                    </button>
                    <div x-show="activeAccordion === 2" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                        O Passaporte ONE MOVE conecta as 12 cidades do circuito nacional 2027. Ao se inscrever em múltiplas etapas, você recebe selos especiais e a medalha central que conecta as medalhas de cada cidade em formato de Mandala tridimensional.
                    </div>
                </div>

                <!-- Q3 -->
                <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                    <button @click="activeAccordion = (activeAccordion === 3 ? null : 3)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                        <span>Outra pessoa pode retirar meu kit?</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === 3 }"></i>
                    </button>
                    <div x-show="activeAccordion === 3" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                        Sim! Basta que a pessoa apresente a autorização de retirada simples assinada pelo titular, cópia do documento com foto do titular e o comprovante oficial de inscrição.
                    </div>
                </div>

                <!-- Q4 -->
                <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                    <button @click="activeAccordion = (activeAccordion === 4 ? null : 4)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                        <span>Posso alterar minha distância após estar inscrito?</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === 4 }"></i>
                    </button>
                    <div x-show="activeAccordion === 4" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                        A troca de distância poderá ser solicitada até 15 dias antes da data da respectiva etapa através do canal de Atendimento ao Atleta, sujeita à disponibilidade de vagas na nova distância.
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('pages.faq') }}" class="text-xs font-bold text-[#FF6A1A] hover:underline">
                    Ver todas as perguntas frequentes →
                </a>
            </div>
        </div>
    </section>

    <!-- FINAL CALL TO ACTION BANNER -->
    <section class="py-24 relative overflow-hidden bg-gradient-to-r from-[#FF4D00] via-[#FF6A1A] to-[#E62E00] text-center text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <span class="text-xs font-black uppercase tracking-widest bg-black/30 px-3.5 py-1 rounded-full text-white/90">
                O Movimento Começou
            </span>
            <h2 class="font-syne font-black text-3xl sm:text-5xl md:text-6xl text-white mt-4 mb-6 uppercase tracking-tight">
                QUANDO UMA EXPERIÊNCIA É BOA, <br>
                VOCÊ SÓ QUER VIVER TUDO DE NOVO.
            </h2>
            <p class="text-white/90 text-base sm:text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                Garanta o seu lugar no pelotão da maior experiência esportiva de 2027. Vagas limitadas por etapa.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('stages.index') }}" class="px-9 py-4 rounded-full bg-black text-white hover:bg-neutral-900 transition font-black text-sm uppercase tracking-wider shadow-2xl flex items-center gap-2">
                    <i data-lucide="map-pin" class="w-4 h-4 text-[#FF4D00]"></i>
                    <span>ESCOLHER MINHA CIDADE</span>
                </a>
                <a href="{{ route('pages.circuito') }}" class="px-8 py-4 rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-md transition font-black text-sm uppercase tracking-wider text-white">
                    VER CONCEITO DO CIRCUITO
                </a>
            </div>
        </div>
    </section>

@endsection
