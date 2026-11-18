@extends('layouts.main')

@section('title', 'Pré-Venda Inscrições | Circuito ONE MOVE RUN 2027 - Brasília')
@section('meta_description', 'Contagem regressiva oficial para a abertura da Pré-Venda da ONE MOVE RUN Brasília 2027 com 20% OFF. Abertura dia 19/11/2026 às 07h00 (Horário de Brasília).')

@php
    // Cálculo seguro de fallback server-side no Horário Oficial de Brasília (UTC-3)
    $targetTimestamp = \Carbon\Carbon::create(2026, 11, 19, 7, 0, 0, 'America/Sao_Paulo')->timestamp;
    $nowTimestamp = \Carbon\Carbon::now('America/Sao_Paulo')->timestamp;
    $diffSeconds = max(0, $targetTimestamp - $nowTimestamp);
    $initialDays = sprintf('%02d', floor($diffSeconds / 86400));
    $initialHours = sprintf('%02d', floor(($diffSeconds % 86400) / 3600));
    $initialMinutes = sprintf('%02d', floor(($diffSeconds % 3600) / 60));
    $initialSeconds = sprintf('%02d', $diffSeconds % 60);
@endphp

@section('content')

    <!-- Kinetic Tech Background & Page Header -->
    <section class="relative py-8 sm:py-12 bg-[#F8F9FA] border-b border-neutral-200/80 overflow-hidden">
        <!-- Subtle Kinetic Tech Grid & Motion Sweep -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute inset-0 opacity-[0.35]" style="background-image: radial-gradient(rgba(10, 10, 12, 0.08) 1px, transparent 1px); background-size: 22px 22px;"></div>
            <svg class="w-full h-full opacity-45 animate-motion-glow" viewBox="0 0 1600 400" fill="none" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="inscricoes-motion-line" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#FF4D00" stop-opacity="0" />
                        <stop offset="50%" stop-color="#FF4D00" stop-opacity="0.8" />
                        <stop offset="100%" stop-color="#FF7A00" stop-opacity="0" />
                    </linearGradient>
                </defs>
                <path d="M -50,290 C 380,170 820,340 1650,120" stroke="url(#inscricoes-motion-line)" stroke-width="2.5" />
                <path d="M -50,320 C 420,210 860,370 1650,160" stroke="url(#inscricoes-motion-line)" stroke-width="1.2" opacity="0.6" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-[#FF4D00]/30 shadow-sm text-[10px] sm:text-xs font-mono font-bold uppercase tracking-widest text-[#FF4D00]">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#FF4D00] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-[#FF4D00]"></span>
                </span>
                <span>Pré-Venda Oficial • Etapa 01 Brasília</span>
            </div>

            <h1 class="font-syne font-black text-2xl sm:text-4xl lg:text-5xl text-[#0A0A0C] mt-3 uppercase tracking-tight leading-tight">
                INSCRIÇÕES <span class="text-gradient-orange">EM BREVE</span>
            </h1>

            <p class="max-w-2xl mx-auto text-neutral-600 text-xs sm:text-sm leading-relaxed mt-2.5">
                Prepare-se para a largada histórica do Circuito Nacional. As inscrições com lote promocional de <strong>Pré-Venda (20% OFF)</strong> abrem pontualmente no horário oficial de Brasília.
            </p>
        </div>
    </section>

    <!-- Main Content Area: Master Countdown Station & Visual Banner -->
    <section class="py-10 sm:py-16 bg-white min-h-[60vh]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10 sm:space-y-12">

            <!-- High-Tech Countdown Cockpit Panel -->
            <div x-data="countdownPreVenda()" class="relative rounded-3xl bg-[#08090E] p-6 sm:p-10 lg:p-12 border border-[#FF4D00]/40 shadow-[0_20px_60px_-15px_rgba(255,77,0,0.3)] overflow-hidden text-white">
                
                <!-- Ambient Glow and Cyber Grid Background -->
                <div class="absolute inset-0 pointer-events-none overflow-hidden">
                    <div class="absolute -top-32 -left-32 w-80 h-80 bg-[#FF4D00]/20 rounded-full blur-[90px]"></div>
                    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#FF7A00]/15 rounded-full blur-[100px]"></div>
                    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(255, 255, 255, 0.2) 1px, transparent 1px); background-size: 20px 20px;"></div>
                </div>

                <div class="relative z-10 space-y-8">
                    
                    <!-- Console Header Badges -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-white/10 pb-6">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="px-3 py-1 rounded-full text-[10px] sm:text-xs font-black uppercase tracking-wider bg-gradient-to-r from-[#FF7A00] to-[#FF4D00] text-white shadow-[0_0_15px_rgba(255,77,0,0.5)] flex items-center gap-1.5">
                                <i data-lucide="zap" class="w-3.5 h-3.5"></i>
                                <span>PRÉ-VENDA EXCLUSIVA</span>
                            </span>
                            <span class="px-3 py-1 rounded-full text-[10px] sm:text-xs font-bold uppercase tracking-wider bg-white/10 text-slate-300 border border-white/10">
                                📅 19/11/2026 às 07h00
                            </span>
                            <span class="px-3 py-1 rounded-full text-[10px] sm:text-xs font-bold uppercase tracking-wider bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 font-mono">
                                Horário de Brasília (UTC-3)
                            </span>
                        </div>

                        <!-- Live Status Ticker -->
                        <div class="flex items-center gap-2 text-xs font-mono text-slate-300">
                            <span class="relative flex h-2.5 w-2.5">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                            </span>
                            <span class="font-bold tracking-wide uppercase text-slate-200">
                                Cronômetro Regressivo Oficial
                            </span>
                        </div>
                    </div>

                    <!-- Countdown Title & Subtitle -->
                    <div class="text-center max-w-2xl mx-auto space-y-2">
                        <h2 class="font-syne font-black text-2xl sm:text-3xl lg:text-4xl text-white uppercase tracking-tight">
                            CONTAGEM REGRESSIVA <span class="text-gradient-orange">PARA ABERTURA</span>
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
                            O lote de abertura estará disponível por tempo e quantidade limitados. Acompanhe os segundos para garantir sua vaga com desconto especial.
                        </p>
                    </div>

                    <!-- THE 4 COUNTDOWN BLOCKS (DIAS, HORAS, MINUTOS, SEGUNDOS) -->
                    <div class="max-w-3xl mx-auto">
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 lg:gap-6 items-center">
                            
                            <!-- 01. DIAS -->
                            <div class="group relative bg-gradient-to-b from-white/[0.08] to-white/[0.02] border border-white/10 hover:border-[#FF4D00]/60 rounded-2xl sm:rounded-3xl p-4 sm:p-6 text-center transition-all duration-300 shadow-[inset_0_1px_0_rgba(255,255,255,0.1)] hover:shadow-[0_10px_30px_rgba(255,77,0,0.25)]">
                                <div class="absolute top-0 inset-x-6 h-0.5 bg-gradient-to-r from-transparent via-[#FF4D00] to-transparent"></div>
                                <span class="text-[10px] font-mono font-bold tracking-widest text-[#FF7A00] uppercase block mb-1">
                                    [ DIAS ]
                                </span>
                                <div class="font-syne font-black text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight tabular-nums drop-shadow-[0_0_20px_rgba(255,77,0,0.35)]">
                                    <span x-text="days">{{ $initialDays }}</span>
                                </div>
                                <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 mt-1 block">
                                    Dias
                                </span>
                            </div>

                            <!-- 02. HORAS -->
                            <div class="group relative bg-gradient-to-b from-white/[0.08] to-white/[0.02] border border-white/10 hover:border-[#FF4D00]/60 rounded-2xl sm:rounded-3xl p-4 sm:p-6 text-center transition-all duration-300 shadow-[inset_0_1px_0_rgba(255,255,255,0.1)] hover:shadow-[0_10px_30px_rgba(255,77,0,0.25)]">
                                <div class="absolute top-0 inset-x-6 h-0.5 bg-gradient-to-r from-transparent via-[#FF4D00] to-transparent"></div>
                                <span class="text-[10px] font-mono font-bold tracking-widest text-[#FF7A00] uppercase block mb-1">
                                    [ HORAS ]
                                </span>
                                <div class="font-syne font-black text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight tabular-nums drop-shadow-[0_0_20px_rgba(255,77,0,0.35)]">
                                    <span x-text="hours">{{ $initialHours }}</span>
                                </div>
                                <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 mt-1 block">
                                    Horas
                                </span>
                            </div>

                            <!-- 03. MINUTOS -->
                            <div class="group relative bg-gradient-to-b from-white/[0.08] to-white/[0.02] border border-white/10 hover:border-[#FF4D00]/60 rounded-2xl sm:rounded-3xl p-4 sm:p-6 text-center transition-all duration-300 shadow-[inset_0_1px_0_rgba(255,255,255,0.1)] hover:shadow-[0_10px_30px_rgba(255,77,0,0.25)]">
                                <div class="absolute top-0 inset-x-6 h-0.5 bg-gradient-to-r from-transparent via-[#FF4D00] to-transparent"></div>
                                <span class="text-[10px] font-mono font-bold tracking-widest text-[#FF7A00] uppercase block mb-1">
                                    [ MINUTOS ]
                                </span>
                                <div class="font-syne font-black text-4xl sm:text-5xl lg:text-6xl text-white tracking-tight tabular-nums drop-shadow-[0_0_20px_rgba(255,77,0,0.35)]">
                                    <span x-text="minutes">{{ $initialMinutes }}</span>
                                </div>
                                <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-400 mt-1 block">
                                    Minutos
                                </span>
                            </div>

                            <!-- 04. SEGUNDOS -->
                            <div class="group relative bg-gradient-to-b from-[#FF4D00]/15 to-white/[0.02] border border-[#FF4D00]/50 hover:border-[#FF7A00] rounded-2xl sm:rounded-3xl p-4 sm:p-6 text-center transition-all duration-300 shadow-[0_0_25px_rgba(255,77,0,0.25)]">
                                <div class="absolute top-0 inset-x-6 h-0.5 bg-gradient-to-r from-transparent via-[#FF7A00] to-transparent animate-pulse"></div>
                                <span class="text-[10px] font-mono font-bold tracking-widest text-[#FF7A00] uppercase block mb-1 flex items-center justify-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#FF4D00] animate-ping"></span>
                                    <span>[ SEGUNDOS ]</span>
                                </span>
                                <div class="font-syne font-black text-4xl sm:text-5xl lg:text-6xl text-[#FF6A1A] tracking-tight tabular-nums drop-shadow-[0_0_25px_rgba(255,77,0,0.6)]">
                                    <span x-text="seconds">{{ $initialSeconds }}</span>
                                </div>
                                <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-300 mt-1 block">
                                    Segundos
                                </span>
                            </div>

                        </div>
                    </div>

                    <!-- Promotion Callout Banner from Flyer -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 pt-4 text-xs font-sans">
                        <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-white/[0.04] border border-white/5">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-[#FF7A00] to-[#FF4D00] flex items-center justify-center text-white shrink-0 font-black text-sm shadow-[0_0_15px_rgba(255,77,0,0.4)]">
                                %
                            </div>
                            <div>
                                <strong class="text-white font-bold block">GARANTA SUA VAGA COM 20% OFF</strong>
                                <span class="text-slate-400 text-[11px]">Desconto exclusivo no lote de pré-venda</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-white/[0.04] border border-white/5">
                            <div class="w-9 h-9 rounded-xl bg-rose-500/20 text-rose-400 border border-rose-500/30 flex items-center justify-center shrink-0">
                                <i data-lucide="ticket" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <strong class="text-white font-bold block">VAGAS LIMITADAS</strong>
                                <span class="text-slate-400 text-[11px]">Capacidade controlada por percurso</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-white/[0.04] border border-white/5">
                            <div class="w-9 h-9 rounded-xl bg-[#FF4D00]/20 text-[#FF4D00] border border-[#FF4D00]/30 flex items-center justify-center shrink-0">
                                <i data-lucide="clock" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <strong class="text-white font-bold block">ABERTURA PONTUAL</strong>
                                <span class="text-slate-400 text-[11px]">19/11 às 7h da manhã (Horário de Brasília)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Reminder Call to Action -->
                    <div class="pt-4 border-t border-white/10 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
                        <div class="space-y-1">
                            <span class="text-xs uppercase font-extrabold tracking-wider text-[#FF7A00] block">Não perca o lote inicial</span>
                            <p class="text-xs text-slate-300">
                                Cadastre seu alerta diretamente com nossa equipe ou acompanhe o lançamento no Instagram oficial.
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 shrink-0">
                            <a href="https://wa.me/5561992451300?text=Ol%C3%A1!%20Quero%20receber%20o%20link%20da%20Pr%C3%A9-Venda%20com%2020%25%20OFF%20da%20ONE%20MOVE%20RUN%20Bras%C3%ADlia%20assim%20que%20abrir%20dia%2019%20%C3%A0s%207h!"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="btn-primary-onemove !text-xs !px-6 !py-3.5 justify-center text-center shadow-[0_0_25px_rgba(255,77,0,0.5)] flex items-center gap-2 hover:scale-[1.02] transition-transform">
                                <i data-lucide="bell" class="w-4 h-4 shrink-0"></i>
                                <span>Ativar Alerta no WhatsApp</span>
                            </a>

                            <a href="https://www.instagram.com/onemoverun/"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="btn-secondary-onemove !text-xs !px-5 !py-3.5 justify-center text-center flex items-center gap-2 !bg-white/10 !text-white !border-white/15 hover:!bg-white/20 transition">
                                <i data-lucide="instagram" class="w-4 h-4 shrink-0"></i>
                                <span>Acompanhar @onemoverun</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Two-Column Showcase: Official Promotional Flyer + Stage Details -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Column: Official Poster Showcase -->
                <div class="lg:col-span-5 space-y-4">
                    <div class="relative group rounded-3xl overflow-hidden border border-neutral-200/90 shadow-[0_10px_35px_rgba(0,0,0,0.08)] bg-neutral-900">
                        <img src="{{ asset('images/pre-venda-brasilia.jpg') }}" 
                             alt="ONE MOVE RUN BRASIL 2027 • Pré-Venda 19/11/2026 às 7h da manhã com 20% OFF" 
                             class="w-full h-auto object-cover group-hover:scale-[1.02] transition-transform duration-500">
                        
                        <!-- Floating Badge -->
                        <div class="absolute top-4 left-4 right-4 flex items-center justify-between pointer-events-none">
                            <span class="px-3 py-1.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-black/70 backdrop-blur-md text-white border border-white/20">
                                Peça Oficial • Divulgação
                            </span>
                            <span class="px-3 py-1.5 rounded-full text-[10px] font-black uppercase tracking-wider bg-[#FF4D00] text-white shadow-lg">
                                20% OFF
                            </span>
                        </div>
                    </div>
                    <p class="text-[11px] text-neutral-500 text-center font-mono">
                        Arte oficial da campanha de Pré-Venda • @onemoverun
                    </p>
                </div>

                <!-- Right Column: Event Details & Structural Guidance -->
                <div class="lg:col-span-7 space-y-6">
                    
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-neutral-200/80 shadow-[0_4px_30px_rgba(0,0,0,0.04)] space-y-6">
                        
                        <!-- Header Details -->
                        <div class="space-y-3 border-b border-neutral-200/80 pb-6">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-[#FF4D00] text-white shadow-sm">
                                    Etapa 01 • Brasília / DF
                                </span>
                                <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-neutral-100 text-neutral-700 border border-neutral-200">
                                    5 km • 10 km • 15 km
                                </span>
                                <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-amber-50 text-amber-700 border border-amber-200">
                                    Abertura em Breve
                                </span>
                            </div>

                            <h2 class="font-syne font-black text-xl sm:text-2xl text-[#0A0A0C] uppercase tracking-tight">
                                A LARGADA DO CIRCUITO ESTÁ CHEGANDO
                            </h2>

                            <p class="text-xs sm:text-sm text-neutral-600 leading-relaxed">
                                A primeira etapa da <strong>ONE MOVE RUN BRASIL 2027</strong> acontecerá no coração cívico de Brasília. Toda a estrutura de hidratação, segurança, recuperação e entretenimento estará pronta para acolher atletas de todos os níveis.
                            </p>
                        </div>

                        <!-- 4 Highlight Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                            <div class="bg-[#F8F9FA] p-4 rounded-2xl border border-neutral-200/70">
                                <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Data Oficial da Prova</span>
                                <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block">24 de Janeiro de 2027</strong>
                                <span class="text-[11px] text-[#FF4D00] font-semibold mt-0.5 block">Largada às 07h00</span>
                            </div>

                            <div class="bg-[#F8F9FA] p-4 rounded-2xl border border-neutral-200/70">
                                <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Cidade de Abertura</span>
                                <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block">Brasília – DF</strong>
                                <span class="text-[11px] text-neutral-500 mt-0.5 block">Praça do Buriti & Eixo</span>
                            </div>

                            <div class="bg-[#F8F9FA] p-4 rounded-2xl border border-neutral-200/70">
                                <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Modalidades Oficiais</span>
                                <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block">5 km, 10 km e 15 km</strong>
                                <span class="text-[11px] text-neutral-500 mt-0.5 block">Todas as distâncias</span>
                            </div>

                            <div class="bg-[#F8F9FA] p-4 rounded-2xl border border-neutral-200/70">
                                <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Status das Inscrições</span>
                                <strong class="text-[#FF4D00] text-xs sm:text-sm font-black uppercase block">Inscrições em Breve</strong>
                                <span class="text-[11px] text-neutral-500 mt-0.5 block">Pré-Venda: 19/11 às 7h</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="pt-2 flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-3">
                            <a href="{{ route('pages.regulamentos') }}"
                               class="btn-editorial-orange !text-xs !px-5 !py-3 justify-center text-center flex items-center gap-2">
                                <i data-lucide="file-text" class="w-4 h-4 shrink-0"></i>
                                <span>Ver Regulamento</span>
                            </a>

                            <a href="{{ url('/#calendario') }}"
                               class="btn-editorial-outline !text-xs !px-5 !py-3 justify-center text-center flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4 shrink-0"></i>
                                <span>Voltar ao Calendário</span>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection

@push('scripts')
<script>
    function countdownPreVenda() {
        return {
            targetDate: new Date('2026-11-19T07:00:00-03:00').getTime(),
            days: '{{ $initialDays }}',
            hours: '{{ $initialHours }}',
            minutes: '{{ $initialMinutes }}',
            seconds: '{{ $initialSeconds }}',
            isExpired: false,
            timer: null,
            init() {
                this.tick();
                this.timer = setInterval(() => this.tick(), 1000);
            },
            tick() {
                const now = new Date().getTime();
                const diff = this.targetDate - now;

                if (diff <= 0) {
                    this.days = '00';
                    this.hours = '00';
                    this.minutes = '00';
                    this.seconds = '00';
                    this.isExpired = true;
                    if (this.timer) clearInterval(this.timer);
                    return;
                }

                const d = Math.floor(diff / (1000 * 60 * 60 * 24));
                const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const s = Math.floor((diff % (1000 * 60)) / 1000);

                this.days = String(d).padStart(2, '0');
                this.hours = String(h).padStart(2, '0');
                this.minutes = String(m).padStart(2, '0');
                this.seconds = String(s).padStart(2, '0');
            }
        };
    }
</script>
@endpush
