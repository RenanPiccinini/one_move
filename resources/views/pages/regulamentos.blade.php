@extends('layouts.main')

@section('title', 'REGULAMENTO ON MOVE - BRASÍLIA | Circuito ONE MOVE RUN 2027')
@section('meta_description', 'Regulamento Oficial da ONE MOVE RUN BRASIL - Edição Brasília 2027 (Praça do Buriti) e termos específicos por cidade.')

@section('content')

    <section class="py-16 relative bg-[#07080B] border-b border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Normas e Diretrizes Oficiais</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1 mb-4 uppercase">
                REGULAMENTOS DO CIRCUITO
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-sm">
                Consulte o regulamento oficial e completo da etapa de abertura em Brasília e as diretrizes das próximas etapas do circuito.
            </p>
        </div>
    </section>

    <section class="py-16 bg-[#090B10]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <!-- REGULAMENTO ON MOVE - BRASÍLIA -->
            <div id="regulamento-brasilia" class="glass-panel border-glow-orange rounded-3xl p-5 sm:p-10 space-y-8">
                
                <!-- Header Card -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 border-b border-white/10 pb-6">
                    <div class="space-y-2">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-[#FF4D00] text-white">
                                Etapa 01 • Oficial
                            </span>
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/10 text-slate-300 border border-white/10">
                                5 km • 10 km • 15 km
                            </span>
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                                Inscrições Abertas
                            </span>
                        </div>
                        <h2 class="font-syne font-black text-2xl sm:text-3xl lg:text-4xl text-white uppercase tracking-tight">
                            REGULAMENTO ON MOVE - BRASÍLIA
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-400">
                            ONE MOVE RUN BRASIL • Edição Brasília 2027 • Praça do Buriti
                        </p>
                    </div>

                    <!-- PDF Download Button -->
                    <div class="shrink-0 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                        <a href="{{ asset('ONE_MOVE_RUN_BRASIL_2027_REGULAMENTO_CROWN_COMPANY_COM_CLAUSULA_RESPONSABILIDADES.pdf') }}" 
                           target="_blank" 
                           download 
                           class="btn-primary-onemove text-xs px-6 py-3 justify-center text-center shadow-glow-orange">
                            <i data-lucide="download" class="w-4 h-4"></i>
                            <span>Baixar Regulamento (PDF)</span>
                        </a>
                    </div>
                </div>

                <!-- Quadro Resumo Técnico Oficial (4 Cards) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 text-xs">
                    <div class="bg-white/5 p-4 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Data Oficial</span>
                        <strong class="text-white text-xs block">27 de Janeiro de 2027</strong>
                        <span class="text-[10px] text-[#FF7A00]">Largada às 07h00</span>
                    </div>
                    <div class="bg-white/5 p-4 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Cidade & Local</span>
                        <strong class="text-white text-xs block">Brasília – DF</strong>
                        <span class="text-[10px] text-slate-400">Praça do Buriti</span>
                    </div>
                    <div class="bg-white/5 p-4 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Percursos</span>
                        <strong class="text-white text-xs block">5 km, 10 km e 15 km</strong>
                        <span class="text-[10px] text-slate-400">Simultâneo com divisões</span>
                    </div>
                    <div class="bg-white/5 p-4 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Organização</span>
                        <strong class="text-white text-xs block truncate" title="CROWN & COMPANY LTDA">CROWN & COMPANY LTDA</strong>
                        <span class="text-[10px] text-slate-400">CNPJ 68.894.205/0001-00</span>
                    </div>
                </div>

            </div>

            <!-- REGULAMENTOS ESPECÍFICOS POR ETAPA (MUNICIPAIS) -->
            <div>
                <div class="mb-6">
                    <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Particularidades Locais</span>
                    <h3 class="font-syne font-black text-2xl sm:text-3xl text-white mt-1 uppercase">
                        REGULAMENTOS ESPECÍFICOS POR ETAPA
                    </h3>
                    <p class="text-xs text-slate-400 mt-1">
                        Cada cidade conta com particularidades de trânsito, horários de largada, premiação e acesso.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($stages as $stg)
                        <div class="glass-panel p-4 sm:p-5 rounded-2xl border border-white/5 hover:border-[#FF4D00]/40 transition flex items-center justify-between gap-3">
                            <div class="min-w-0">
                                <span class="text-[10px] font-bold uppercase text-[#FF6A1A]">Etapa {{ sprintf('%02d', $stg->stage_number) }}</span>
                                <h4 class="font-syne font-bold text-base text-white truncate">{{ $stg->city }} / {{ $stg->state }}</h4>
                                
                                @if($stg->isOpen())
                                    <span class="text-xs text-slate-300 font-medium block mt-0.5 truncate">
                                        {{ $stg->date_display }}
                                    </span>
                                @else
                                    <span class="text-xs text-[#FF7A00] font-black tracking-wider uppercase block mt-0.5 truncate">
                                        EM BREVE
                                    </span>
                                @endif
                            </div>
                            
                            @if($stg->slug === 'brasilia')
                                <a href="#regulamento-brasilia" class="btn-secondary-onemove text-[11px] px-3.5 py-1.5 shrink-0 whitespace-nowrap">
                                    <span>Ver Termos</span>
                                </a>
                            @else
                                <span class="inline-flex items-center px-3.5 py-1.5 rounded-full text-[11px] font-bold uppercase tracking-wider bg-white/5 text-slate-500 border border-white/5 cursor-default shrink-0 select-none">
                                    Em Breve
                                </span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

@endsection
