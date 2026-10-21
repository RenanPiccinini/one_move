@extends('layouts.main')

@section('title', $stage->name . ' 2027 | Inscrições, Percurso e Kits')
@section('meta_description', 'Tudo sobre ' . $stage->name . '. Data: ' . $stage->date_display . ', distâncias 5K, 10K e 21K, percurso, retirada de kits e inscrições.')

@section('content')

    <!-- HERO SPECIFIC FOR CITY -->
    <section class="relative min-h-[60vh] lg:min-h-[70vh] flex items-end pb-16 pt-24 overflow-hidden">
        <!-- City Background Image with Parallax / Zoom -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset($stage->hero_image ?? 'images/brand/city-brasilia.jpg') }}" 
                 alt="{{ $stage->name }}" 
                 class="w-full h-full object-cover object-center brightness-75 scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-[#07080B] via-[#07080B]/70 to-black/40"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-4">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span>/</span>
                <a href="{{ route('stages.index') }}" class="hover:text-white transition">Etapas</a>
                <span>/</span>
                <span class="text-[#FF7A00]">{{ $stage->city }}</span>
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
                <div>
                    <div class="flex flex-wrap items-center gap-3 mb-3">
                        <span class="px-3 py-1 rounded-full text-xs font-black uppercase tracking-wider bg-[#FF4D00] text-white">
                            Etapa {{ sprintf('%02d', $stage->stage_number) }}
                        </span>
                        <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-white/10 backdrop-blur-md text-white border border-white/20">
                            {{ $stage->region }}
                        </span>
                        @if($stage->isOpen())
                            <span class="px-3 py-1 rounded-full text-xs font-black uppercase tracking-wider bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                                Inscrições Abertas
                            </span>
                        @else
                            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-white/5 text-slate-300">
                                Inscrições em Breve
                            </span>
                        @endif
                    </div>

                    <h1 class="font-syne font-black text-4xl sm:text-6xl lg:text-7xl text-white uppercase tracking-tight">
                        ONE MOVE RUN <br>
                        <span class="text-gradient-orange">{{ $stage->city }}</span>
                    </h1>

                    <p class="max-w-2xl text-slate-200 text-sm sm:text-base mt-4 leading-relaxed">
                        {{ $stage->teaser }}
                    </p>
                </div>

                <!-- Registration Action Box -->
                <div class="glass-panel p-6 rounded-3xl border-glow-orange min-w-[280px] sm:min-w-[320px] text-center shrink-0">
                    <span class="text-[10px] uppercase font-bold tracking-wider text-slate-400 block mb-1">Data Oficial</span>
                    <span class="font-syne font-black text-xl text-white block">{{ $stage->date_display }}</span>
                    <span class="text-xs text-[#FF7A00] block mt-0.5">Largada às {{ $stage->start_time }}</span>

                    <div class="mt-4 pt-4 border-t border-white/10">
                        @if($stage->isOpen())
                            <button onclick="openRegistrationRedirect('{{ $stage->name }}', '{{ $stage->registration_link }}')" class="btn-primary-onemove w-full text-xs py-3.5 shadow-glow-orange justify-center">
                                <i data-lucide="flame" class="w-4 h-4"></i>
                                <span>INSCREVA-SE AGORA</span>
                            </button>
                            <span class="text-[10px] text-slate-400 block mt-2">Redirecionamento seguro para a plataforma oficial</span>
                        @else
                            <button disabled class="w-full py-3.5 rounded-full text-xs font-bold uppercase tracking-wider bg-white/5 text-slate-400 border border-white/10 cursor-not-allowed">
                                Inscrições em Breve
                            </button>
                            <span class="text-[10px] text-slate-400 block mt-2">Cadastre-se para ser avisado da abertura</span>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- KEY STATS STRIP -->
    <section class="py-4 bg-[#0B0D13] border-t border-b border-white/10 sticky top-20 z-30 backdrop-blur-md bg-opacity-95">
        <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between gap-4 whitespace-nowrap overflow-x-auto">
                
                <div class="flex items-center gap-4 sm:gap-6 py-1 text-xs whitespace-nowrap shrink-0">
                    <a href="#visao-geral" class="font-bold text-white hover:text-[#FF4D00] transition whitespace-nowrap shrink-0">Visão Geral</a>
                    <a href="#percurso" class="font-bold text-slate-400 hover:text-[#FF4D00] transition whitespace-nowrap shrink-0">Percurso & Altimetria</a>
                    <a href="#lotes" class="font-bold text-slate-400 hover:text-[#FF4D00] transition whitespace-nowrap shrink-0">Lotes & Valores</a>
                    <a href="#kits" class="font-bold text-slate-400 hover:text-[#FF4D00] transition whitespace-nowrap shrink-0">Kit Atleta</a>
                    <a href="#programacao" class="font-bold text-slate-400 hover:text-[#FF4D00] transition whitespace-nowrap shrink-0">Programação</a>
                    <a href="#entrega-kits" class="font-bold text-slate-400 hover:text-[#FF4D00] transition whitespace-nowrap shrink-0">Retirada de Kit</a>
                    <a href="#premiacao" class="font-bold text-slate-400 hover:text-[#FF4D00] transition whitespace-nowrap shrink-0">Premiação</a>
                    <a href="#faq" class="font-bold text-slate-400 hover:text-[#FF4D00] transition whitespace-nowrap shrink-0">FAQ</a>
                </div>

                <div class="shrink-0">
                    @if($stage->isOpen())
                        <button onclick="openRegistrationRedirect('{{ $stage->name }}', '{{ $stage->registration_link }}')" class="btn-primary-onemove text-[11px] px-5 py-2 whitespace-nowrap shrink-0">
                            <span>INSCREVA-SE</span>
                        </button>
                    @endif
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 1: VISÃO GERAL & DETALHES -->
    <section id="visao-geral" class="py-16 bg-[#07080B]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <div class="lg:col-span-7 space-y-6">
                    <div>
                        <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Conceito da Etapa</span>
                        <h2 class="font-syne font-black text-2xl sm:text-4xl text-white mt-1">A CORRIDA EM {{ strtoupper($stage->city) }}</h2>
                    </div>

                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        {{ $stage->description }}
                    </p>

                    <!-- Distances Grid -->
                    <div class="pt-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">Distâncias Disponíveis</h3>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="glass-panel p-4 rounded-2xl text-center border-t-2 border-t-[#FF4D00]">
                                <span class="font-syne font-black text-2xl text-white block">5 KM</span>
                                <span class="text-[11px] text-slate-400 mt-1 block">Iniciantes & Velocidade</span>
                            </div>
                            <div class="glass-panel p-4 rounded-2xl text-center border-t-2 border-t-[#FF7A00]">
                                <span class="font-syne font-black text-2xl text-white block">10 KM</span>
                                <span class="text-[11px] text-slate-400 mt-1 block">Ritmo & Evolução</span>
                            </div>
                            <div class="glass-panel p-4 rounded-2xl text-center border-t-2 border-t-[#FF4D00]">
                                <span class="font-syne font-black text-2xl text-[#FF6A1A] block">21 KM</span>
                                <span class="text-[11px] text-slate-400 mt-1 block">Meia Maratona Oficial</span>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="pt-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Categorias Atendidas</h3>
                        <div class="flex flex-wrap gap-2 text-xs font-semibold text-slate-300">
                            <span class="px-3 py-1.5 rounded-xl bg-white/5 border border-white/5">Geral Masculino & Feminino</span>
                            <span class="px-3 py-1.5 rounded-xl bg-white/5 border border-white/5">Faixas Etárias (de 5 em 5 anos)</span>
                            <span class="px-3 py-1.5 rounded-xl bg-white/5 border border-white/5">Atletas PCD / Cadeirantes</span>
                            <span class="px-3 py-1.5 rounded-xl bg-white/5 border border-white/5">Pelotão Elite (21K)</span>
                        </div>
                    </div>
                </div>

                <!-- Fast Facts Sidebar -->
                <div class="lg:col-span-5 space-y-4">
                    <div class="glass-panel p-6 rounded-3xl border border-white/10 space-y-4">
                        <h3 class="font-syne font-bold text-lg text-white">INFORMAÇÕES ESSENCIAIS</h3>
                        
                        <div class="space-y-3 text-xs text-slate-300">
                            <div class="flex items-start gap-3">
                                <i data-lucide="map-pin" class="w-4 h-4 text-[#FF4D00] shrink-0 mt-0.5"></i>
                                <div>
                                    <strong class="text-white block">Local e Largada:</strong>
                                    <span>{{ $stage->venue_name }}</span>
                                    <span class="text-slate-400 block text-[11px] mt-0.5">{{ $stage->venue_address }}</span>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i data-lucide="clock" class="w-4 h-4 text-[#FF7A00] shrink-0 mt-0.5"></i>
                                <div>
                                    <strong class="text-white block">Horário da Prova:</strong>
                                    <span>Abertura dos portões às 05h00 • Largadas a partir das {{ $stage->start_time }}</span>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i data-lucide="mountain" class="w-4 h-4 text-[#FF4D00] shrink-0 mt-0.5"></i>
                                <div>
                                    <strong class="text-white block">Altimetria:</strong>
                                    <span>{{ $stage->elevation_gain }}</span>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <i data-lucide="car" class="w-4 h-4 text-[#FF7A00] shrink-0 mt-0.5"></i>
                                <div>
                                    <strong class="text-white block">Estacionamento & Acesso:</strong>
                                    <span>Vagas amplas no entorno da arena. Recomendamos carona solidária e aplicativos de transporte.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 2: PERCURSO & MAPA -->
    <section id="percurso" class="py-16 bg-[#090B10] border-t border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Traçado & Detalhes Técnicos</span>
                <h2 class="font-syne font-black text-3xl sm:text-4xl text-white mt-1">MAPA DO PERCURSO</h2>
                <p class="text-slate-300 text-xs sm:text-sm mt-2">
                    Estrutura lateral iluminada, postos de hidratação gelada a cada 2,5 km, DJ Points e apoio médico total.
                </p>
            </div>

            <div class="glass-panel border-glow-orange rounded-3xl p-6 sm:p-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <!-- Schematic Route & Elevation -->
                    <div class="lg:col-span-8 space-y-6">
                        <!-- Altimetry Profile Graphic SVG -->
                        <div class="bg-[#050608] rounded-2xl p-6 border border-white/10">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-xs font-bold text-white uppercase flex items-center gap-2">
                                    <i data-lucide="trending-up" class="w-4 h-4 text-[#FF4D00]"></i>
                                    Perfil Altimétrico Oficial (21K)
                                </span>
                                <span class="text-xs text-[#FF7A00] font-bold">Ganho Total: 95m • Rápido</span>
                            </div>

                            <!-- SVG Elevation Chart with Glow -->
                            <div class="w-full h-44 relative">
                                <svg class="w-full h-full" viewBox="0 0 600 120" preserveAspectRatio="none">
                                    <defs>
                                        <linearGradient id="elevGrad" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#FF4D00" stop-opacity="0.5"/>
                                            <stop offset="100%" stop-color="#FF4D00" stop-opacity="0.0"/>
                                        </linearGradient>
                                    </defs>
                                    <!-- Area under curve -->
                                    <path d="M 0,100 Q 80,70 150,85 T 300,50 T 450,75 T 600,95 L 600,120 L 0,120 Z" fill="url(#elevGrad)"/>
                                    <!-- Line curve -->
                                    <path d="M 0,100 Q 80,70 150,85 T 300,50 T 450,75 T 600,95" fill="none" stroke="#FF4D00" stroke-width="3"/>
                                    <!-- Milestones points -->
                                    <circle cx="0" cy="100" r="4" fill="#FFFFFF"/>
                                    <circle cx="150" cy="85" r="4" fill="#FF7A00"/>
                                    <circle cx="300" cy="50" r="5" fill="#FF4D00"/>
                                    <circle cx="450" cy="75" r="4" fill="#FF7A00"/>
                                    <circle cx="600" cy="95" r="4" fill="#FFFFFF"/>
                                </svg>
                                <!-- Milestone labels -->
                                <div class="flex justify-between text-[10px] text-slate-400 font-bold uppercase mt-2">
                                    <span>KM 0 (Largada)</span>
                                    <span>KM 5 (Hidratação)</span>
                                    <span>KM 10 (Ponte JK)</span>
                                    <span>KM 15 (DJ Point)</span>
                                    <span>KM 21 (Pórtico)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Highlights list -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
                            <div class="bg-white/5 p-4 rounded-xl border border-white/5">
                                <strong class="text-white block mb-1">Hidratação Premium</strong>
                                <span class="text-slate-300">Água mineral a cada 2,5km e isotônico nos KMs 10, 15 e 18.</span>
                            </div>
                            <div class="bg-white/5 p-4 rounded-xl border border-white/5">
                                <strong class="text-white block mb-1">DJ & Light Points</strong>
                                <span class="text-slate-300">Iluminação cênica de LED e cabines de som ao longo da via.</span>
                            </div>
                            <div class="bg-white/5 p-4 rounded-xl border border-white/5">
                                <strong class="text-white block mb-1">Ambulâncias & UTI</strong>
                                <span class="text-slate-300">3 postos médicos no trajeto e UTI móvel de suporte avançado.</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Course Photo from Slide 9 or 20 -->
                    <div class="lg:col-span-4 flex flex-col justify-center">
                        <div class="rounded-2xl overflow-hidden relative aspect-[16/9] bg-[#050608] flex items-center justify-center border border-white/10">
                            <img src="{{ asset('images/brand/course-lighting.jpg') }}" alt="Percurso ONE MOVE Iluminado" class="w-full h-full object-contain">
                        </div>
                        <div class="mt-3 text-center bg-white/5 border border-white/10 rounded-xl py-2 px-4">
                            <span class="text-xs font-bold text-white uppercase tracking-wider">Percurso Noturno / Crepúsculo</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: LOTES & VALORES -->
    <section id="lotes" class="py-16 bg-[#07080B]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Tabela de Lotes</span>
                <h2 class="font-syne font-black text-3xl sm:text-4xl text-white mt-1">VALORES & INSCRIÇÕES</h2>
                <p class="text-slate-300 text-xs sm:text-sm mt-2">
                    Escolha a categoria que melhor atende o seu desafio. Lotes sujeitos à virada por data ou esgotamento de vagas.
                </p>
            </div>

            <!-- Lots Comparison Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @if(!empty($stage->lots))
                    @foreach($stage->lots as $lot)
                        <div class="glass-panel p-6 rounded-3xl border {{ $lot['status'] === 'Ativo' ? 'border-[#FF4D00] shadow-glow-orange-sm' : 'border-white/10 opacity-75' }} flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">{{ $lot['name'] }}</span>
                                    @if($lot['status'] === 'Ativo')
                                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-black uppercase bg-[#FF4D00] text-white">Disponível</span>
                                    @elseif($lot['status'] === 'Esgotado')
                                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase bg-red-500/20 text-red-400">Esgotado</span>
                                    @else
                                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase bg-white/5 text-slate-400">Em Breve</span>
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <span class="text-[11px] text-slate-400 block uppercase font-semibold">Kit Básico ONE MOVE</span>
                                    <span class="font-syne font-black text-3xl text-white">{{ $lot['price_basic'] }}</span>
                                </div>

                                <div class="mb-6 pt-3 border-t border-white/5">
                                    <span class="text-[11px] text-slate-400 block uppercase font-semibold">Kit ONE MOVE PRO (c/ Corta-Vento)</span>
                                    <span class="font-syne font-black text-2xl text-[#FF7A00]">{{ $lot['price_pro'] }}</span>
                                </div>

                                <p class="text-xs text-slate-400">
                                    <strong>Vigência:</strong> {{ $lot['deadline'] }}
                                </p>
                            </div>

                            <div class="pt-6">
                                @if($lot['status'] === 'Ativo')
                                    <button onclick="openRegistrationRedirect('{{ $stage->name }}', '{{ $stage->registration_link }}')" class="btn-primary-onemove text-xs px-6 py-3 w-full justify-center">
                                        <span>GARANTIR VAGA</span>
                                    </button>
                                @else
                                    <button disabled class="w-full py-3 rounded-full text-xs font-bold uppercase bg-white/5 text-slate-500 border border-white/5 cursor-not-allowed">
                                        {{ $lot['status'] }}
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="mt-8 text-center text-xs text-slate-400">
                Idosos e pessoas com deficiência têm direito a 50% de desconto no valor do kit básico, conforme legislação vigente.
            </div>
        </div>
    </section>

    <!-- SECTION 4: KITS DO ATLETA NESTA ETAPA -->
    <section id="kits" class="py-16 bg-[#090B10] border-t border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-6">
                    <img src="{{ asset('images/brand/kits-showcase.jpg') }}" alt="Kits da Etapa" class="w-full rounded-2xl shadow-xl">
                </div>

                <div class="lg:col-span-6 space-y-6">
                    <div>
                        <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">O Que Você Recebe</span>
                        <h2 class="font-syne font-black text-3xl sm:text-4xl text-white mt-1">KIT ATLETA {{ strtoupper($stage->city) }}</h2>
                        <p class="text-slate-300 text-sm mt-2">
                            O kit não é apenas o que o atleta recebe. É o primeiro capítulo da experiência ONE MOVE.
                        </p>
                    </div>

                    <div class="space-y-3 text-xs">
                        <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl">
                            <i data-lucide="shirt" class="w-5 h-5 text-[#FF4D00]"></i>
                            <span><strong>Camiseta Oficial:</strong> Tecido poliamida premium com proteção UV50+ e secagem ultra-rápida.</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl">
                            <i data-lucide="tag" class="w-5 h-5 text-[#FF7A00]"></i>
                            <span><strong>Número de Peito & Chip:</strong> Cronometragem eletrônica descartável de precisão.</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl">
                            <i data-lucide="award" class="w-5 h-5 text-[#FF4D00]"></i>
                            <span><strong>Medalha Finisher:</strong> Acabamento exclusivo em relevo metalizado e fita acetinada.</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white/5 rounded-xl">
                            <i data-lucide="zap" class="w-5 h-5 text-[#FF7A00]"></i>
                            <span><strong>Kit PRO Adicional:</strong> Jaqueta corta-vento oficial, bandana e suplementos Integralmédica.</span>
                        </div>
                    </div>

                    <a href="{{ route('pages.kits') }}" class="btn-secondary-onemove text-xs px-6 py-3 inline-flex">
                        <span>Ver fotos ampliadas dos kits</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: PROGRAMAÇÃO OFICIAL -->
    <section id="programacao" class="py-16 bg-[#07080B]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Horários Oficiais</span>
                <h2 class="font-syne font-black text-3xl text-white mt-1">PROGRAMAÇÃO DO DIA DA CORRIDA</h2>
            </div>

            <div class="space-y-4">
                @if(!empty($stage->schedule))
                    @foreach($stage->schedule as $item)
                        <div class="glass-panel p-4 sm:p-5 rounded-2xl flex items-center gap-6 border border-white/5 hover:border-[#FF4D00]/40 transition">
                            <span class="font-syne font-black text-xl sm:text-2xl text-[#FF4D00] w-20 shrink-0">
                                {{ $item['time'] }}
                            </span>
                            <div class="w-px h-8 bg-white/10 shrink-0"></div>
                            <span class="text-xs sm:text-sm font-bold text-white">
                                {{ $item['title'] }}
                            </span>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- SECTION 6: RETIRADA DE KITS -->
    <section id="entrega-kits" class="py-16 bg-[#090B10] border-t border-b border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-panel border-glow-orange rounded-3xl p-8 sm:p-10 space-y-6">
                <div>
                    <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Informações Importantes</span>
                    <h2 class="font-syne font-black text-2xl sm:text-3xl text-white mt-1">RETIRADA DO KIT ATLETA</h2>
                </div>

                @if(!empty($stage->kit_pickup))
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-xs text-slate-300">
                        <div class="space-y-1">
                            <strong class="text-white block uppercase tracking-wider">Local de Entrega:</strong>
                            <p class="text-sm font-semibold text-[#FF6A1A]">{{ $stage->kit_pickup['location'] }}</p>
                        </div>
                        <div class="space-y-1">
                            <strong class="text-white block uppercase tracking-wider">Datas & Horários:</strong>
                            <p class="text-sm font-semibold text-white">{{ $stage->kit_pickup['dates'] }} ({{ $stage->kit_pickup['hours'] }})</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-black/40 border border-white/10 text-xs text-slate-300 space-y-2">
                        <strong class="text-white block">Documentos Obrigatórios:</strong>
                        <p>{{ $stage->kit_pickup['requirements'] }}</p>
                        <p class="text-amber-400 font-semibold">⚠️ Não haverá entrega de kits no dia da corrida nem após o término do evento.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- SECTION 7: PREMIAÇÃO & REGULAMENTO -->
    <section id="premiacao" class="py-16 bg-[#07080B]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                
                <div class="lg:col-span-6 glass-panel p-8 rounded-3xl border border-white/10 space-y-4">
                    <span class="text-xs font-bold uppercase text-[#FF4D00]">Conquista & Pódio</span>
                    <h3 class="font-syne font-black text-2xl text-white">PREMIAÇÃO OFICIAL</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Troféus especiais para os 5 primeiros colocados gerais no Masculino e Feminino nas distâncias de 21K, 10K e 5K. Troféus para os 3 primeiros de cada faixa etária no 21K. Medalha Finisher de metal para 100% dos concluintes.
                    </p>
                </div>

                <div class="lg:col-span-6 glass-panel p-8 rounded-3xl border border-white/10 space-y-4">
                    <span class="text-xs font-bold uppercase text-[#FF7A00]">Termos Legais</span>
                    <h3 class="font-syne font-black text-2xl text-white">REGULAMENTO ESPECÍFICO</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        {{ $stage->regulations_summary }}
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('pages.regulamentos') }}" class="text-xs font-bold text-[#FF6A1A] hover:underline flex items-center gap-1">
                            <span>Ler o Regulamento Geral Completo</span>
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 8: FAQ & DÚVIDAS ESPECÍFICAS -->
    <section id="faq" class="py-16 bg-[#090B10] border-t border-white/5">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Dúvidas Rápidas</span>
                <h2 class="font-syne font-black text-2xl sm:text-3xl text-white mt-1">PERGUNTAS SOBRE ESTA ETAPA</h2>
            </div>

            <div class="space-y-3 text-xs">
                <div class="glass-panel p-5 rounded-2xl">
                    <h4 class="font-bold text-white mb-1">Haverá guarda-volumes na arena?</h4>
                    <p class="text-slate-300">Sim, gratuito para todos os atletas devidamente inscritos e identificados com o número de peito.</p>
                </div>
                <div class="glass-panel p-5 rounded-2xl">
                    <h4 class="font-bold text-white mb-1">Qual a idade mínima para participar?</h4>
                    <p class="text-slate-300">5K: a partir de 14 anos (com autorização dos pais); 10K: a partir de 16 anos; 21K: a partir de 18 anos completos no ano da prova.</p>
                </div>
                <div class="glass-panel p-5 rounded-2xl">
                    <h4 class="font-bold text-white mb-1">Onde consulto o resultado e as fotos oficiais após a prova?</h4>
                    <p class="text-slate-300">Os tempos são computados ao vivo e divulgados na página de Resultados do site oficial até 2 horas após a chegada. As fotos ficam disponíveis em até 24 horas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STICKY BOTTOM REGISTRATION ACTION BAR FOR MOBILE/DESKTOP -->
    <div class="fixed bottom-0 left-0 right-0 z-40 bg-[#0B0D13]/95 backdrop-blur-md border-t border-white/10 py-3 px-4 sm:px-8 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <span class="font-syne font-black text-sm text-white hidden sm:inline">{{ $stage->name }}</span>
            <span class="text-xs text-[#FF7A00] font-bold">{{ $stage->date_display }}</span>
        </div>

        <div>
            @if($stage->isOpen())
                <button onclick="openRegistrationRedirect('{{ $stage->name }}', '{{ $stage->registration_link }}')" class="btn-primary-onemove text-xs px-6 py-2.5">
                    <i data-lucide="flame" class="w-4 h-4"></i>
                    <span>INSCREVA-SE</span>
                </button>
            @else
                <button disabled class="px-5 py-2.5 rounded-full text-xs font-bold uppercase bg-white/10 text-slate-400 cursor-not-allowed">
                    Inscrições em Breve
                </button>
            @endif
        </div>
    </div>

@endsection
