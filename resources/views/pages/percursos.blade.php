@extends('layouts.main')

@section('title', 'Percursos e Altimetria | ONE MOVE RUN 2027')
@section('meta_description', 'Selecione a cidade e visualize o mapa, altimetria, pontos de hidratação e detalhes técnicos das distâncias de 5K, 10K e 21K.')

@section('content')

    <section class="py-16 relative bg-[#07080B] border-b border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Traçados Oficiais</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1 mb-4">
                PERCURSOS & ALTIMETRIA
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-sm">
                Selecione a etapa para conferir o mapa, ganho de elevação, postos de água e pontos de ativação musical.
            </p>
        </div>
    </section>

    <!-- INTERACTIVE ROUTE VIEWER -->
    <section class="py-16 bg-[#090B10]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- City & Distance Selectors -->
            <div class="glass-panel p-6 rounded-3xl border border-white/10 mb-10">
                <form action="{{ route('pages.percursos') }}" method="GET" class="flex flex-col md:flex-row items-center justify-between gap-6">
                    
                    <!-- City Dropdown -->
                    <div class="w-full md:w-auto flex-1">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">1. Escolha a Cidade / Etapa:</label>
                        <select name="cidade" onchange="this.form.submit()" class="w-full bg-[#151821] border border-white/10 rounded-2xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#FF4D00]">
                            @foreach($stages as $stg)
                                <option value="{{ $stg->slug }}" {{ $selectedStage->slug === $stg->slug ? 'selected' : '' }}>
                                    Etapa {{ sprintf('%02d', $stg->stage_number) }} • {{ $stg->city }} / {{ $stg->state }} ({{ $stg->date_display }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Distance Selector Buttons -->
                    <div class="w-full md:w-auto">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">2. Escolha a Distância:</label>
                        <div class="flex items-center gap-2">
                            @foreach(['5K', '10K', '21K'] as $dist)
                                <button type="submit" name="distancia" value="{{ $dist }}" 
                                        class="px-5 py-3 rounded-2xl text-xs font-black uppercase transition {{ $selectedDistance === $dist ? 'bg-[#FF4D00] text-white shadow-glow-orange-sm' : 'bg-white/5 text-slate-300 hover:bg-white/10' }}">
                                    {{ $dist }}
                                </button>
                            @endforeach
                        </div>
                    </div>

                </form>
            </div>

            <!-- Route Info Banner -->
            <div class="glass-panel border-glow-orange rounded-3xl p-6 sm:p-10 mb-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <div class="lg:col-span-7 space-y-6">
                        <div>
                            <span class="text-xs uppercase font-extrabold text-[#FF7A00]">Traçado Selecionado</span>
                            <h2 class="font-syne font-black text-3xl sm:text-4xl text-white mt-1">
                                {{ strtoupper($selectedStage->city) }} • PROVA {{ $selectedDistance }}
                            </h2>
                            <p class="text-slate-300 text-sm mt-2">
                                <strong>Local de Largada/Chegada:</strong> {{ $selectedStage->venue_name }} ({{ $selectedStage->venue_address }})
                            </p>
                        </div>

                        <!-- Technical Specs Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 text-xs">
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                                <span class="text-slate-400 block font-semibold mb-1">Ganho de Elevação</span>
                                <strong class="text-base text-white block">{{ $selectedDistance === '5K' ? '28m' : ($selectedDistance === '10K' ? '54m' : $selectedStage->elevation_gain) }}</strong>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                                <span class="text-slate-400 block font-semibold mb-1">Postos de Hidratação</span>
                                <strong class="text-base text-[#FF7A00] block">{{ $selectedDistance === '5K' ? '2 Postos' : ($selectedDistance === '10K' ? '4 Postos' : '8 Postos + Isotônico') }}</strong>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                                <span class="text-slate-400 block font-semibold mb-1">DJ & Light Points</span>
                                <strong class="text-base text-white block">{{ $selectedDistance === '5K' ? '2 Pontos' : ($selectedDistance === '10K' ? '4 Pontos' : '6 Pontos') }}</strong>
                            </div>
                        </div>

                        <!-- Interactive Altimetry SVG -->
                        <div class="bg-[#050608] rounded-2xl p-5 border border-white/10">
                            <div class="flex items-center justify-between text-xs font-bold text-white mb-3">
                                <span>Perfil Altimétrico do Percurso</span>
                                <span class="text-[#FF4D00]">Traçado Fluido & Técnico</span>
                            </div>

                            <div class="h-36 w-full relative">
                                <svg class="w-full h-full" viewBox="0 0 500 100" preserveAspectRatio="none">
                                    <path d="M 0,80 Q 70,{{ $selectedDistance === '5K' ? '70' : '50' }} 150,65 T 300,{{ $selectedDistance === '21K' ? '40' : '60' }} T 500,80 L 500,100 L 0,100 Z" fill="rgba(255, 77, 0, 0.25)"/>
                                    <path d="M 0,80 Q 70,{{ $selectedDistance === '5K' ? '70' : '50' }} 150,65 T 300,{{ $selectedDistance === '21K' ? '40' : '60' }} T 500,80" fill="none" stroke="#FF4D00" stroke-width="3"/>
                                    <circle cx="0" cy="80" r="4" fill="#FFFFFF"/>
                                    <circle cx="150" cy="65" r="4" fill="#FF7A00"/>
                                    <circle cx="300" cy="{{ $selectedDistance === '21K' ? '40' : '60' }}" r="5" fill="#FF4D00"/>
                                    <circle cx="500" cy="80" r="4" fill="#FFFFFF"/>
                                </svg>
                            </div>
                            <div class="flex justify-between text-[10px] text-slate-400 font-bold uppercase mt-2">
                                <span>KM 0 (Largada)</span>
                                <span>Metade da Prova</span>
                                <span>Chegada Triunfal</span>
                            </div>
                        </div>

                        <div class="pt-2 flex items-center gap-4">
                            <a href="{{ route('stages.show', $selectedStage->slug) }}" class="btn-primary-onemove text-xs px-6 py-3">
                                <span>Ver Página Completa de {{ $selectedStage->city }}</span>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 flex flex-col justify-center">
                        <div class="rounded-2xl overflow-hidden relative aspect-[16/9] bg-[#050608] flex items-center justify-center border border-white/10">
                            <img src="{{ asset('images/brand/course-lighting.jpg') }}" alt="Iluminação de Percurso" class="w-full h-full object-contain">
                        </div>
                        <div class="mt-3 text-center bg-white/5 border border-white/10 rounded-xl py-2 px-4">
                            <span class="text-xs font-bold text-white uppercase tracking-wider">Sinalização com Estrutura de LED em Cada KM</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
