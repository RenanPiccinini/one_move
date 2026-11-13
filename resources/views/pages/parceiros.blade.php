@extends('layouts.main')

@section('title', 'Parceiros Oficiais | Circuito ONE MOVE RUN 2027')
@section('meta_description', 'Conheça os Parceiros Oficiais da ONE MOVE RUN 2027: marcas, federações, tecnologia, cronometragem e saúde conectadas ao circuito.')

@section('content')

    <!-- Compact Tech-Editorial Header -->
    <section class="relative py-7 sm:py-10 bg-[#F8F9FA] border-b border-neutral-200/70 overflow-hidden">
        <!-- Subtle Kinetic Tech Grid & Motion Sweep -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute inset-0 opacity-[0.35]" style="background-image: radial-gradient(rgba(10, 10, 12, 0.08) 1px, transparent 1px); background-size: 22px 22px;"></div>
            <svg class="w-full h-full opacity-45 animate-motion-glow" viewBox="0 0 1600 400" fill="none" preserveAspectRatio="none">
                <defs>
                    <linearGradient id="partners-motion-line" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#FF4D00" stop-opacity="0" />
                        <stop offset="50%" stop-color="#FF4D00" stop-opacity="0.7" />
                        <stop offset="100%" stop-color="#FF7A00" stop-opacity="0" />
                    </linearGradient>
                </defs>
                <path d="M -50,290 C 380,170 820,340 1650,120" stroke="url(#partners-motion-line)" stroke-width="2.5" />
                <path d="M -50,320 C 420,210 860,370 1650,160" stroke="url(#partners-motion-line)" stroke-width="1.2" opacity="0.6" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white border border-[#FF4D00]/25 shadow-sm text-[10px] font-mono font-bold uppercase tracking-widest text-[#FF4D00]">
                <span class="w-1.5 h-1.5 rounded-full bg-[#FF4D00] animate-ping"></span>
                <span>Ecossistema Oficial • 2027</span>
            </div>

            <h1 class="font-syne font-black text-2xl sm:text-4xl lg:text-5xl text-[#0A0A0C] mt-3 uppercase tracking-tight leading-none">
                PARCEIROS <span class="text-gradient-orange">OFICIAIS</span>
            </h1>

            <p class="max-w-2xl mx-auto text-neutral-600 text-xs sm:text-sm leading-relaxed mt-2.5">
                Marcas, entidades esportivas e soluções tecnológicas que conectam performance, inovação e experiência em cada quilômetro do circuito.
            </p>

            <!-- Compact Tech Telemetry Strip -->
            <div class="mt-4 flex flex-wrap items-center justify-center gap-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-neutral-200/80 text-[10px] font-mono font-bold uppercase tracking-wider text-[#0A0A0C] shadow-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    {{ sprintf('%02d', count($partners)) }} Parceiros Conectados
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-neutral-200/80 text-[10px] font-mono font-bold uppercase tracking-wider text-neutral-600">
                    <i data-lucide="cpu" class="w-3 h-3 text-[#FF4D00]"></i>
                    Cronometragem &amp; Tech
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-neutral-200/80 text-[10px] font-mono font-bold uppercase tracking-wider text-neutral-600">
                    <i data-lucide="activity" class="w-3 h-3 text-[#FF4D00]"></i>
                    Saúde &amp; Performance
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-neutral-200/80 text-[10px] font-mono font-bold uppercase tracking-wider text-neutral-600">
                    <i data-lucide="sparkles" class="w-3 h-3 text-[#FF4D00]"></i>
                    Experiência &amp; Lifestyle
                </span>
            </div>
        </div>
    </section>

    <!-- Main Interactive Partners Matrix -->
    <section
        class="py-7 sm:py-10 bg-white relative"
        x-data="{ activeFilter: 'all' }"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Toolbar & Category Filters -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-5 mb-6 border-b border-neutral-200/80">
                <div>
                    <span class="inline-flex items-center gap-2 text-[10px] font-mono font-bold uppercase tracking-[0.2em] text-[#FF4D00]">
                        <span class="w-4 h-[2px] bg-[#FF4D00]"></span>
                        <span>01 // Rede Integrada</span>
                    </span>
                    <h2 class="font-syne font-black text-lg sm:text-2xl text-[#0A0A0C] uppercase tracking-tight mt-1">
                        CONEXÕES QUE MOVEM A PROVA
                    </h2>
                </div>

                <!-- Interactive Filter Tabs -->
                <div class="flex flex-wrap items-center gap-1.5" role="tablist" aria-label="Filtrar parceiros por categoria">
                    @php
                        $filters = [
                            'all' => 'Todos (' . sprintf('%02d', count($partners)) . ')',
                            'esporte-saude' => 'Esporte & Saúde',
                            'tecnologia-gestao' => 'Tecnologia & Gestão',
                            'experiencia-lifestyle' => 'Experiência & Lifestyle',
                        ];
                    @endphp
                    @foreach($filters as $filterKey => $filterLabel)
                        <button
                            type="button"
                            @click="activeFilter = '{{ $filterKey }}'"
                            class="px-3 py-1.5 rounded-full text-[11px] font-bold tracking-wide transition-all duration-200 whitespace-nowrap border"
                            :class="activeFilter === '{{ $filterKey }}'
                                ? 'bg-[#0A0A0C] text-white border-[#0A0A0C] shadow-sm'
                                : 'bg-[#F8F9FA] text-neutral-600 border-neutral-200/80 hover:border-[#FF4D00]/40 hover:text-[#0A0A0C]'"
                        >
                            {{ $filterLabel }}
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Compact 4-Column Tech Grid -->
            <div class="grid grid-cols-1 xs:grid-cols-2 lg:grid-cols-4 gap-3.5 sm:gap-4">
                @foreach($partners as $partner)
                    <article
                        x-show="activeFilter === 'all' || activeFilter === '{{ $partner['category'] }}'"
                        x-transition.opacity.duration.200ms
                        class="group relative rounded-2xl bg-[#F8F9FA]/80 hover:bg-white border border-neutral-200/85 hover:border-[#FF4D00]/55 p-3 sm:p-3.5 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_14px_34px_-12px_rgba(255,77,0,0.22)] flex flex-col justify-between overflow-hidden"
                    >
                        <!-- Animated Laser Top Accent -->
                        <div class="absolute inset-x-0 top-0 h-[2px] bg-gradient-to-r from-[#FF4D00] via-[#FF7A00] to-transparent scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-300"></div>

                        <div>
                            <!-- Top Micro Telemetry Row -->
                            <div class="flex items-center justify-between gap-2">
                                <span class="font-mono text-[10px] font-bold tracking-wider text-neutral-400 group-hover:text-[#FF4D00] transition">
                                    P_{{ sprintf('%02d', $loop->iteration) }}
                                </span>
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-extrabold uppercase tracking-wider bg-white text-neutral-600 border border-neutral-200/80 group-hover:border-[#FF4D00]/35 group-hover:text-[#FF4D00] transition truncate">
                                    {{ $partner['badge'] }}
                                </span>
                            </div>

                            <!-- Seamless Logo Viewport -->
                            <div
                                class="relative my-2.5 h-36 sm:h-40 rounded-xl overflow-hidden flex items-center justify-center p-2.5 sm:p-3 border {{ $partner['is_dark_surface'] ? 'border-white/10' : 'border-neutral-200/70' }}"
                                style="background-color: {{ $partner['surface_hex'] }};"
                            >
                                <!-- Subtle Tech Corner Reticles -->
                                <span class="pointer-events-none absolute top-2 left-2 w-2 h-2 border-t border-l {{ $partner['is_dark_surface'] ? 'border-white/25' : 'border-black/15' }} group-hover:border-[#FF4D00] transition-colors"></span>
                                <span class="pointer-events-none absolute top-2 right-2 w-2 h-2 border-t border-r {{ $partner['is_dark_surface'] ? 'border-white/25' : 'border-black/15' }} group-hover:border-[#FF4D00] transition-colors"></span>
                                <span class="pointer-events-none absolute bottom-2 left-2 w-2 h-2 border-b border-l {{ $partner['is_dark_surface'] ? 'border-white/25' : 'border-black/15' }} group-hover:border-[#FF4D00] transition-colors"></span>
                                <span class="pointer-events-none absolute bottom-2 right-2 w-2 h-2 border-b border-r {{ $partner['is_dark_surface'] ? 'border-white/25' : 'border-black/15' }} group-hover:border-[#FF4D00] transition-colors"></span>

                                @if($partner['crop_vertical_padding'])
                                    <img
                                        src="{{ asset($partner['image']) }}"
                                        alt="{{ $partner['name'] }}"
                                        loading="lazy"
                                        class="w-11/12 max-w-full h-auto transition-transform duration-500 ease-out group-hover:scale-105 select-none"
                                    >
                                @else
                                    <img
                                        src="{{ asset($partner['image']) }}"
                                        alt="{{ $partner['name'] }}"
                                        loading="lazy"
                                        class="max-h-full max-w-full w-auto h-auto object-contain transition-transform duration-500 ease-out group-hover:scale-105 select-none"
                                    >
                                @endif
                            </div>
                        </div>

                        <!-- Compact Card Metadata -->
                        <div class="pt-0.5">
                            <h3 class="font-syne font-black text-[13px] sm:text-sm text-[#0A0A0C] uppercase tracking-tight leading-snug group-hover:text-[#FF4D00] transition">
                                {{ $partner['name'] }}
                            </h3>
                            <p class="text-[11px] text-neutral-500 leading-snug mt-1 line-clamp-2">
                                {{ $partner['description'] }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Compact Dark Tech Partner CTA Banner -->
            <div class="mt-7 sm:mt-9 rounded-3xl bg-[#0A0A0C] text-white p-5 sm:p-7 relative overflow-hidden border border-white/10 shadow-xl">
                <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-[#FF4D00]/20 blur-[90px] pointer-events-none"></div>
                <div class="absolute inset-0 opacity-[0.07] pointer-events-none" style="background-image: linear-gradient(to right, #ffffff 1px, transparent 1px), linear-gradient(to bottom, #ffffff 1px, transparent 1px); background-size: 28px 28px;"></div>

                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-4 sm:gap-6">
                    <div class="space-y-1.5 min-w-0">
                        <span class="inline-flex items-center gap-1.5 text-[10px] font-mono font-bold uppercase tracking-widest text-[#FF7A00]">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#FF4D00]"></span>
                            <span>Parcerias Estratégicas 2027</span>
                        </span>
                        <h3 class="font-syne font-black text-lg sm:text-xl lg:text-2xl uppercase tracking-tight leading-tight whitespace-normal sm:whitespace-nowrap">
                            CONECTE SUA MARCA À <span class="text-gradient-orange whitespace-nowrap">ONE MOVE RUN</span>
                        </h3>
                        <p class="text-xs sm:text-sm text-neutral-400 max-w-2xl leading-relaxed">
                            Integre seu negócio ao circuito com ativações na arena, entrega de kits, mídia digital e experiências de marca.
                        </p>
                    </div>

                    <div class="flex items-center shrink-0">
                        <a
                            href="https://wa.me/5561999999999?text=Ol%C3%A1!%20Gostaria%20de%20saber%20como%20ser%20um%20Parceiro%20Oficial%20da%20ONE%20MOVE%20RUN."
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn-editorial-orange !text-xs !px-6 !py-3 justify-center shadow-lg"
                        >
                            <i data-lucide="message-circle" class="w-4 h-4 shrink-0"></i>
                            <span>Quero Ser Parceiro</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
