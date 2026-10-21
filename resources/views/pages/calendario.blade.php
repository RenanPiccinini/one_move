@extends('layouts.main')

@section('title', 'Calendário 2027 | Circuito ONE MOVE RUN')
@section('meta_description', 'Confira o calendário completo de datas e cidades do circuito nacional ONE MOVE RUN 2027.')

@section('content')

    <section class="py-16 relative bg-[#07080B] border-b border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Planeje seu Ano</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1 mb-4">
                CALENDÁRIO NACIONAL 2027
            </h1>
            <p class="max-w-xl mx-auto text-slate-300 text-sm">
                12 meses de movimento, 12 cidades e um só propósito: viver a melhor corrida da sua vida.
            </p>
        </div>
    </section>

    <!-- Visual Chronological Timeline -->
    <section class="py-16 bg-[#090B10]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="relative border-l-2 border-[#FF4D00]/30 ml-4 sm:ml-8 space-y-8">
                @foreach($stages as $stage)
                    <div class="relative pl-6 sm:pl-8 group">
                        
                        <!-- Timeline Node Dot -->
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full {{ $stage->isOpen() ? 'bg-[#FF4D00] shadow-[0_0_12px_#FF4D00]' : 'bg-slate-700' }} border-2 border-[#090B10] group-hover:scale-125 transition"></div>

                        <!-- Card -->
                        <div class="glass-panel p-6 rounded-2xl border border-white/5 hover:border-[#FF4D00]/40 transition">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="text-xs font-black text-[#FF4D00]">ETAPA {{ sprintf('%02d', $stage->stage_number) }}</span>
                                        <span class="text-slate-500">•</span>
                                        <span class="text-xs font-bold text-slate-400">{{ $stage->region }}</span>
                                    </div>

                                    <h3 class="font-syne font-black text-2xl text-white group-hover:text-[#FF6A1A] transition">
                                        {{ $stage->city }} / {{ $stage->state }}
                                    </h3>

                                    <p class="text-xs text-slate-300 mt-1 flex items-center gap-3">
                                        <span>📅 {{ $stage->date_display }}</span>
                                        <span>📍 {{ $stage->venue_name }}</span>
                                        <span>🏃 5K | 10K | 21K</span>
                                    </p>
                                </div>

                                <div class="flex items-center gap-3 shrink-0">
                                    <a href="{{ route('stages.show', $stage->slug) }}" class="btn-secondary-onemove text-xs px-4 py-2">
                                        <span>Detalhes</span>
                                    </a>

                                    @if($stage->isOpen())
                                        <button onclick="openRegistrationRedirect('{{ $stage->name }}', '{{ $stage->registration_link }}')" class="btn-primary-onemove text-xs px-5 py-2">
                                            <span>Inscrever</span>
                                        </button>
                                    @else
                                        <span class="px-4 py-2 rounded-full text-xs font-bold uppercase bg-white/5 text-slate-500">
                                            Em Breve
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
