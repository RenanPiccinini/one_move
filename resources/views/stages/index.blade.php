@extends('layouts.main')

@section('title', 'As 12 Etapas | Circuito ONE MOVE RUN 2027')
@section('meta_description', 'Descubra as 12 capitais do circuito nacional ONE MOVE RUN 2027. Escolha onde será o seu próximo desafio: Brasília, Goiânia, SP, Rio, BH, Curitiba e mais.')

@section('content')

    <!-- Header Section -->
    <section class="py-16 relative bg-[#07080B] border-b border-white/5 overflow-hidden">
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-96 bg-[#FF4D00]/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Circuito Nacional 2027</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl md:text-6xl text-white mt-2 mb-4">
                12 CIDADES. 12 ETAPAS. <br>
                <span class="text-gradient-orange">ESCOLHA SEU DESAFIO.</span>
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-sm sm:text-base leading-relaxed">
                De norte a sul do Brasil, um circuito desenhado para elevar a sua experiência de corrida. Conheça as datas, locais e prepare sua viagem.
            </p>
        </div>
    </section>

    <!-- Interactive Circuit Map Presentation -->
    <section class="py-12 bg-[#090B10] border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-panel border-glow-orange rounded-3xl p-6 sm:p-10 relative overflow-hidden">
                
                <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-8">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-[#FF7A00]">Mapa do Circuito</span>
                        <h2 class="font-syne font-black text-2xl sm:text-3xl text-white mt-1">BRASIL CONECTADO PELO MOVIMENTO</h2>
                    </div>
                    <div class="flex items-center gap-4 text-xs font-semibold text-slate-300">
                        <span class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-[#FF4D00] shadow-[0_0_8px_#FF4D00]"></span>
                            Inscrições Abertas
                        </span>
                        <span class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-slate-600"></span>
                            Em Breve
                        </span>
                    </div>
                </div>

                <!-- Brazil SVG Map Component with Geographic Silhouette, State Borders & Cities -->
                @include('components.brazil-circuit-map')

                <div class="mt-6 text-center text-xs text-slate-400">
                    Passe o cursor sobre os pontos no mapa para pré-visualizar cada cidade ou confira a listagem detalhada abaixo.
                </div>
            </div>
        </div>
    </section>

    <!-- Filters & Stage Cards -->
    <section class="py-16 bg-[#07080B]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Region Filters -->
            <div class="flex flex-wrap items-center justify-between gap-4 mb-10 pb-6 border-b border-white/5">
                <div class="flex flex-wrap items-center gap-2">
                    <a href="{{ route('stages.index') }}" class="px-4 py-2 rounded-full text-xs font-bold transition {{ !request('region') || request('region') === 'todas' ? 'bg-[#FF4D00] text-white shadow-glow-orange-sm' : 'bg-white/5 text-slate-300 hover:bg-white/10' }}">
                        Todas as Regiões (12)
                    </a>
                    @foreach($regions as $reg)
                        <a href="{{ route('stages.index', ['region' => $reg]) }}" class="px-4 py-2 rounded-full text-xs font-bold transition {{ request('region') === $reg ? 'bg-[#FF4D00] text-white shadow-glow-orange-sm' : 'bg-white/5 text-slate-300 hover:bg-white/10' }}">
                            {{ $reg }}
                        </a>
                    @endforeach
                </div>

                <div class="text-xs text-slate-400">
                    Mostrando <strong>{{ $stages->count() }}</strong> etapas encontradas
                </div>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($stages as $stage)
                    <div class="glass-panel rounded-3xl overflow-hidden border border-white/10 hover:border-[#FF4D00]/50 transition-all duration-300 group flex flex-col justify-between" data-tilt>
                        
                        <div>
                            <!-- Card Hero Image -->
                            <div class="relative aspect-[16/9] bg-[#050608] overflow-hidden flex items-center justify-center">
                                <img src="{{ asset($stage->hero_image ?? 'images/brand/city-brasilia.jpg') }}" 
                                     alt="{{ $stage->name }}" 
                                     class="w-full h-full object-contain transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0F1117] via-transparent to-black/30 pointer-events-none"></div>

                                <!-- Badge Top Left -->
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-black/70 backdrop-blur-md text-white border border-white/20">
                                        Etapa {{ sprintf('%02d', $stage->stage_number) }}
                                    </span>
                                </div>

                                <!-- Status Badge Top Right -->
                                <div class="absolute top-4 right-4">
                                    @if($stage->isOpen())
                                        <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-[#FF4D00] text-white shadow-lg">
                                            Inscrições Abertas
                                        </span>
                                    @else
                                        <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-black/60 backdrop-blur-md text-slate-300 border border-white/10">
                                            Em Breve
                                        </span>
                                    @endif
                                </div>

                                <!-- City & State Bottom Overlay -->
                                <div class="absolute bottom-4 left-4 right-4">
                                    <span class="text-[11px] font-bold uppercase tracking-widest text-[#FF7A00] block">{{ $stage->region }}</span>
                                    <h3 class="font-syne font-black text-2xl text-white group-hover:text-[#FF6A1A] transition">
                                        {{ $stage->city }} / {{ $stage->state }}
                                    </h3>
                                </div>
                            </div>

                            <!-- Card Details Body -->
                            <div class="p-6 space-y-4">
                                <p class="text-xs text-slate-300 line-clamp-2 leading-relaxed">
                                    {{ $stage->teaser }}
                                </p>

                                <div class="space-y-2 text-xs text-slate-300 pt-2 border-t border-white/5">
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="calendar" class="w-4 h-4 text-[#FF4D00]"></i>
                                        <span><strong>Data:</strong> {{ $stage->date_display }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="map-pin" class="w-4 h-4 text-[#FF7A00]"></i>
                                        <span class="truncate"><strong>Local:</strong> {{ $stage->venue_name }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i data-lucide="activity" class="w-4 h-4 text-[#FF4D00]"></i>
                                        <span><strong>Distâncias:</strong> 5K | 10K | 21K</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Action Buttons -->
                        <div class="p-6 pt-0 flex items-center gap-3">
                            <a href="{{ route('stages.show', $stage->slug) }}" class="btn-secondary-onemove text-xs px-4 py-3 flex-1 justify-center">
                                <span>Ver Etapa</span>
                            </a>
                            
                            @if($stage->isOpen())
                                <button onclick="openRegistrationRedirect('{{ $stage->name }}', '{{ $stage->registration_link }}')" class="btn-primary-onemove text-xs px-4 py-3 flex-1 justify-center">
                                    <span>INSCREVA-SE</span>
                                </button>
                            @else
                                <button disabled class="px-4 py-3 rounded-full text-xs font-bold uppercase tracking-wider bg-white/5 text-slate-500 border border-white/5 flex-1 cursor-not-allowed">
                                    Em Breve
                                </button>
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
