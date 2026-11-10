@extends('layouts.main')

@section('title', 'REGULAMENTO ON MOVE - BRASÍLIA | Circuito ONE MOVE RUN 2027')
@section('meta_description', 'Regulamento Oficial da ONE MOVE RUN BRASIL - Edição Brasília 2027 (Praça do Buriti) e diretrizes das etapas.')

@section('content')

    <!-- Hero Header (Light Theme) -->
    <section class="py-10 sm:py-16 relative bg-[#F8F9FA] border-b border-neutral-200/70 text-center overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF4D00]">Normas e Diretrizes Oficiais</span>
            <h1 class="font-syne font-black text-2xl sm:text-4xl lg:text-5xl text-[#0A0A0C] mt-2 mb-3 uppercase tracking-tight">
                REGULAMENTOS DO CIRCUITO
            </h1>
            <p class="max-w-2xl mx-auto text-neutral-600 text-xs sm:text-sm leading-relaxed">
                Consulte o regulamento oficial e completo da etapa de abertura em Brasília e as diretrizes das próximas etapas do circuito.
            </p>
        </div>
    </section>

    <!-- Main Content (White Background) -->
    <section class="py-8 sm:py-16 bg-white min-h-[60vh]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10 sm:space-y-16">
            
            <!-- REGULAMENTO ON MOVE - BRASÍLIA -->
            <div id="regulamento-brasilia" class="bg-white rounded-3xl p-4 sm:p-8 lg:p-10 space-y-6 sm:space-y-8 border border-neutral-200/80 shadow-[0_4px_30px_rgba(0,0,0,0.04)]">
                
                <!-- Header Card -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-5 sm:gap-6 border-b border-neutral-200/80 pb-5 sm:pb-6">
                    <div class="space-y-2.5 min-w-0">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-[#FF4D00] text-white shadow-sm">
                                Etapa 01 • Oficial
                            </span>
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-neutral-100 text-neutral-700 border border-neutral-200">
                                5 km • 10 km • 15 km
                            </span>
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-700 border border-emerald-200">
                                Inscrições Abertas
                            </span>
                        </div>
                        <h2 class="font-syne font-black text-xl sm:text-3xl lg:text-4xl text-[#0A0A0C] uppercase tracking-tight">
                            REGULAMENTO ON MOVE - BRASÍLIA
                        </h2>
                        <p class="text-xs sm:text-sm text-neutral-500 font-medium">
                            ONE MOVE RUN BRASIL • Edição Brasília 2027 • Praça do Buriti
                        </p>
                    </div>

                    <!-- PDF Download Button -->
                    <div class="shrink-0 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                        <a href="{{ asset('ONE_MOVE_RUN_BRASIL_2027_REGULAMENTO_CROWN_COMPANY_COM_CLAUSULA_RESPONSABILIDADES.pdf') }}" 
                           target="_blank" 
                           download 
                           class="btn-editorial-orange text-xs px-5 sm:px-6 py-3 justify-center text-center shadow-lg hover:shadow-[#FF4D00]/25 transition flex items-center gap-2 w-full md:w-auto">
                            <i data-lucide="download" class="w-4 h-4 shrink-0"></i>
                            <span>Baixar Regulamento (PDF)</span>
                        </a>
                    </div>
                </div>

                <!-- Quadro Resumo Técnico Oficial (4 Cards) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3.5 text-xs">
                    <div class="bg-[#F8F9FA] p-4 sm:p-5 rounded-2xl border border-neutral-200/70 hover:border-neutral-300 transition">
                        <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Data Oficial</span>
                        <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block">24 de Janeiro de 2027</strong>
                        <span class="text-[11px] text-[#FF4D00] font-semibold mt-0.5 block">Largada às 07h00</span>
                    </div>
                    <div class="bg-[#F8F9FA] p-4 sm:p-5 rounded-2xl border border-neutral-200/70 hover:border-neutral-300 transition">
                        <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Cidade & Local</span>
                        <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block">Brasília – DF</strong>
                        <span class="text-[11px] text-neutral-500 mt-0.5 block">Praça do Buriti</span>
                    </div>
                    <div class="bg-[#F8F9FA] p-4 sm:p-5 rounded-2xl border border-neutral-200/70 hover:border-neutral-300 transition">
                        <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Percursos</span>
                        <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block">5 km, 10 km e 15 km</strong>
                        <span class="text-[11px] text-neutral-500 mt-0.5 block">Simultâneo com divisões</span>
                    </div>
                    <div class="bg-[#F8F9FA] p-4 sm:p-5 rounded-2xl border border-neutral-200/70 hover:border-neutral-300 transition">
                        <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Organização</span>
                        <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block truncate" title="CROWN & COMPANY LTDA">CROWN & COMPANY LTDA</strong>
                        <span class="text-[11px] text-neutral-500 font-mono mt-0.5 block">CNPJ 68.894.205/0001-00</span>
                    </div>
                </div>

            </div>

            <!-- REGULAMENTOS ESPECÍFICOS POR ETAPA (MUNICIPAIS) -->
            <div class="space-y-5 sm:space-y-6">
                <div>
                    <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF4D00]">Particularidades Locais</span>
                    <h3 class="font-syne font-black text-xl sm:text-3xl text-[#0A0A0C] mt-1 uppercase tracking-tight">
                        REGULAMENTOS ESPECÍFICOS POR ETAPA
                    </h3>
                    <p class="text-xs sm:text-sm text-neutral-500 mt-1">
                        Cada cidade conta com particularidades de trânsito, horários de largada, premiação e acesso.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($stages as $stg)
                        <div class="bg-white p-4 sm:p-5 rounded-2xl border border-neutral-200/80 hover:border-[#FF4D00]/50 shadow-sm hover:shadow-md transition flex items-center justify-between gap-3">
                            <div class="min-w-0">
                                <span class="text-[10px] font-black uppercase tracking-wider text-[#FF4D00]">Etapa {{ sprintf('%02d', $stg->stage_number) }}</span>
                                <h4 class="font-syne font-bold text-base text-[#0A0A0C] truncate">{{ $stg->city }} / {{ $stg->state }}</h4>
                                
                                @if($stg->isOpen())
                                    <span class="text-xs text-neutral-600 font-medium block mt-0.5 truncate">
                                        {{ $stg->date_display }}
                                    </span>
                                @else
                                    <span class="text-xs text-[#FF4D00] font-black tracking-wider uppercase block mt-0.5 truncate">
                                        EM BREVE
                                    </span>
                                @endif
                            </div>
                            
                            @if($stg->slug === 'brasilia')
                                <a href="{{ asset('ONE_MOVE_RUN_BRASIL_2027_REGULAMENTO_CROWN_COMPANY_COM_CLAUSULA_RESPONSABILIDADES.pdf') }}" 
                                   target="_blank" 
                                   download 
                                   class="btn-secondary-onemove text-[11px] px-3.5 py-1.5 shrink-0 whitespace-nowrap shadow-sm hover:shadow transition">
                                    <span>Ver Termos</span>
                                </a>
                            @else
                                <span class="inline-flex items-center px-3.5 py-1.5 rounded-full text-[11px] font-bold uppercase tracking-wider bg-neutral-100 text-neutral-400 border border-neutral-200/60 cursor-default shrink-0 select-none">
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
