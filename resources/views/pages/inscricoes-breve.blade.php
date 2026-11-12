@extends('layouts.main')

@section('title', 'Inscrições em Breve | Circuito ONE MOVE RUN 2027')
@section('meta_description', 'As inscrições para a etapa de abertura da ONE MOVE RUN 2027 em Brasília serão abertas em breve. Acompanhe nossos canais oficiais.')

@section('content')

    <!-- Compact Tech-Editorial Header -->
    <section class="relative py-10 sm:py-14 bg-[#F8F9FA] border-b border-neutral-200/70 overflow-hidden">
        <!-- Subtle Kinetic Tech Grid & Motion Sweep -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute inset-0 opacity-[0.35]" style="background-image: radial-gradient(rgba(10, 10, 12, 0.08) 1px, transparent 1px); background-size: 22px 22px;"></div>
            <svg class="w-full h-full opacity-45 animate-motion-glow" viewBox="0 0 1600 400" fill="none" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="inscricoes-motion-line" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#FF4D00" stop-opacity="0" />
                        <stop offset="50%" stop-color="#FF4D00" stop-opacity="0.7" />
                        <stop offset="100%" stop-color="#FF7A00" stop-opacity="0" />
                    </linearGradient>
                </defs>
                <path d="M -50,290 C 380,170 820,340 1650,120" stroke="url(#inscricoes-motion-line)" stroke-width="2.5" />
                <path d="M -50,320 C 420,210 860,370 1650,160" stroke="url(#inscricoes-motion-line)" stroke-width="1.2" opacity="0.6" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-[#FF4D00]/25 shadow-sm text-[10px] font-mono font-bold uppercase tracking-widest text-[#FF4D00]">
                <span class="w-1.5 h-1.5 rounded-full bg-[#FF4D00] animate-ping"></span>
                <span>Circuito Nacional 2027 • Abertura Oficial</span>
            </div>

            <h1 class="font-syne font-black text-2xl sm:text-4xl lg:text-5xl text-[#0A0A0C] mt-3 uppercase tracking-tight leading-none">
                INSCRIÇÕES <span class="text-gradient-orange">EM BREVE</span>
            </h1>

            <p class="max-w-2xl mx-auto text-neutral-600 text-xs sm:text-sm leading-relaxed mt-3">
                Estamos finalizando os últimos ajustes na plataforma oficial de inscrições da ONE MOVE RUN 2027 para oferecer a melhor experiência desde o primeiro clique.
            </p>
        </div>
    </section>

    <!-- Main Content (White Editorial Surface) -->
    <section class="py-10 sm:py-16 bg-white min-h-[55vh]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-white rounded-3xl p-5 sm:p-10 space-y-8 border border-neutral-200/80 shadow-[0_4px_30px_rgba(0,0,0,0.04)]">

                <!-- Top Status & Headline -->
                <div class="space-y-4 border-b border-neutral-200/80 pb-6 sm:pb-8">
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

                    <div class="flex items-start gap-4">
                        <div class="hidden sm:flex w-12 h-12 rounded-2xl bg-[#FF4D00]/10 text-[#FF4D00] items-center justify-center shrink-0 mt-1">
                            <i data-lucide="clock" class="w-6 h-6"></i>
                        </div>
                        <div class="space-y-2 min-w-0">
                            <h2 class="font-syne font-black text-xl sm:text-3xl text-[#0A0A0C] uppercase tracking-tight">
                                A LARGADA DO CIRCUITO ESTÁ CHEGANDO
                            </h2>
                            <p class="text-xs sm:text-sm text-neutral-600 leading-relaxed">
                                As inscrições para a etapa de abertura em <strong>Brasília / DF</strong> serão liberadas em breve. Acompanhe nossos canais oficiais no Instagram e no WhatsApp para ser avisado em primeira mão assim que as vagas estiverem disponíveis.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 4 Highlight Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3.5 text-xs">
                    <div class="bg-[#F8F9FA] p-4 sm:p-5 rounded-2xl border border-neutral-200/70">
                        <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Data Oficial</span>
                        <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block">24 de Janeiro de 2027</strong>
                        <span class="text-[11px] text-[#FF4D00] font-semibold mt-0.5 block">Largada às 07h00</span>
                    </div>

                    <div class="bg-[#F8F9FA] p-4 sm:p-5 rounded-2xl border border-neutral-200/70">
                        <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Cidade de Abertura</span>
                        <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block">Brasília – DF</strong>
                        <span class="text-[11px] text-neutral-500 mt-0.5 block">Praça do Buriti</span>
                    </div>

                    <div class="bg-[#F8F9FA] p-4 sm:p-5 rounded-2xl border border-neutral-200/70">
                        <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Percursos</span>
                        <strong class="text-[#0A0A0C] text-xs sm:text-sm font-bold block">5 km, 10 km e 15 km</strong>
                        <span class="text-[11px] text-neutral-500 mt-0.5 block">Todas as distâncias</span>
                    </div>

                    <div class="bg-[#F8F9FA] p-4 sm:p-5 rounded-2xl border border-neutral-200/70">
                        <span class="text-[10px] uppercase font-bold text-neutral-400 block mb-1 tracking-wider">Status</span>
                        <strong class="text-[#FF4D00] text-xs sm:text-sm font-black uppercase block">Inscrições em Breve</strong>
                        <span class="text-[11px] text-neutral-500 mt-0.5 block">Canais oficiais ativos</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="pt-2 flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-3">
                    <a href="https://www.instagram.com/onemoverun/"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="btn-editorial-orange !text-xs !px-6 !py-3.5 justify-center text-center shadow-lg hover:shadow-[#FF4D00]/25 transition flex items-center gap-2">
                        <i data-lucide="instagram" class="w-4 h-4 shrink-0"></i>
                        <span>Acompanhar no Instagram</span>
                    </a>

                    <a href="{{ route('pages.regulamentos') }}"
                       class="btn-secondary-onemove !text-xs !px-5 !py-3.5 justify-center text-center flex items-center gap-2">
                        <i data-lucide="file-text" class="w-4 h-4 shrink-0 text-[#FF4D00]"></i>
                        <span>Ver Regulamento</span>
                    </a>

                    <a href="{{ url('/#calendario') }}"
                       class="btn-editorial-outline !text-xs !px-5 !py-3.5 justify-center text-center flex items-center gap-2">
                        <i data-lucide="calendar" class="w-4 h-4 shrink-0"></i>
                        <span>Voltar ao Calendário</span>
                    </a>
                </div>

            </div>

        </div>
    </section>

@endsection
