@extends('layouts.main')

@section('title', 'Kits Oficiais do Atleta | ONE MOVE RUN 2027')
@section('meta_description', 'Conheça o Kit ONE MOVE e Kit ONE MOVE PRO. Camiseta premium, jaqueta corta-vento, medalha de metal, sacochila, chip e nutrição Integralmédica.')

@section('content')

    <!-- HERO KITS -->
    <section class="py-16 relative bg-[#07080B] border-b border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Design & Materiais Nobres</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl md:text-6xl text-white mt-1 mb-4">
                KITS OFICIAIS DO ATLETA
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-sm sm:text-base leading-relaxed">
                A corrida ainda nem começou. E a experiência já está nas suas mãos. Conheça as opções pensadas para o seu conforto e performance.
            </p>
        </div>
    </section>

    <!-- INTERACTIVE KIT EXPLORER -->
    <section class="py-16 bg-[#090B10]" x-data="{ selectedKit: 'pro' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Kit Switcher Tabs -->
            <div class="flex items-center justify-center gap-4 mb-12">
                <button @click="selectedKit = 'basic'" 
                        :class="selectedKit === 'basic' ? 'bg-[#FF4D00] text-white shadow-glow-orange-sm' : 'bg-white/5 text-slate-300 hover:bg-white/10'"
                        class="px-6 py-3 rounded-full text-xs font-black uppercase tracking-wider transition">
                    KIT ONE MOVE (Básico)
                </button>
                <button @click="selectedKit = 'pro'" 
                        :class="selectedKit === 'pro' ? 'bg-[#FF4D00] text-white shadow-glow-orange-sm' : 'bg-white/5 text-slate-300 hover:bg-white/10'"
                        class="px-6 py-3 rounded-full text-xs font-black uppercase tracking-wider transition flex items-center gap-2">
                    <span>KIT ONE MOVE PRO (Com Corta-Vento)</span>
                    <span class="px-2 py-0.5 rounded text-[9px] bg-white text-black font-extrabold">VIP</span>
                </button>
            </div>

            <!-- Big Kit Photo Presentation -->
            <div class="glass-panel border-glow-orange rounded-3xl p-6 sm:p-10 mb-14">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                    
                    <div class="lg:col-span-7">
                        <img src="{{ asset('images/brand/kits-showcase.jpg') }}" alt="Kits ONE MOVE" class="w-full rounded-2xl shadow-2xl">
                    </div>

                    <div class="lg:col-span-5 space-y-6">
                        <!-- Dynamic Info based on active kit tab -->
                        <div x-show="selectedKit === 'basic'" x-cloak>
                            <span class="text-xs uppercase font-extrabold text-[#FF6A1A]">Kit Essencial</span>
                            <h2 class="font-syne font-black text-3xl text-white mt-1 mb-3">KIT ONE MOVE</h2>
                            <p class="text-xs text-slate-300 leading-relaxed mb-6">
                                Todos os itens essenciais com a qualidade premium do circuito ONE MOVE.
                            </p>

                            <ul class="space-y-2.5 text-xs text-slate-200">
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF4D00]"></i> Camiseta Oficial ONE MOVE em tecido poliamida</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF4D00]"></i> Número de peito personalizado</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF4D00]"></i> Chip de cronometragem eletrônica</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF4D00]"></i> Porta-número de peito esportivo</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF4D00]"></i> Sacochila esportiva impermeável</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF4D00]"></i> Bandana exclusiva ONE MOVE</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF4D00]"></i> Suplementação e barras Integralmédica</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF4D00]"></i> Medalha Finisher de metal (pós-prova)</li>
                            </ul>
                        </div>

                        <div x-show="selectedKit === 'pro'" x-cloak>
                            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FF4D00]/20 text-[#FF4D00] text-[10px] font-black uppercase mb-1">
                                Mais Escolhido Pelos Atletas
                            </div>
                            <h2 class="font-syne font-black text-3xl text-white mt-1 mb-3">KIT ONE MOVE PRO</h2>
                            <p class="text-xs text-slate-300 leading-relaxed mb-6">
                                A experiência de vestuário e performance mais completa do automobilismo e atletismo nacional.
                            </p>

                            <ul class="space-y-2.5 text-xs text-slate-200">
                                <li class="flex items-center gap-2.5 font-bold text-white"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF7A00]"></i> Todos os itens do Kit ONE MOVE Básico</li>
                                <li class="flex items-center gap-2.5 font-bold text-[#FF6A1A]"><i data-lucide="star" class="w-4 h-4 text-[#FF6A1A]"></i> Jaqueta Corta-Vento Oficial com capuz e refletivos 3M</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF7A00]"></i> Bolsa esportiva de viagem reforçada INVICTUS</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF7A00]"></i> Kit reforçado de suplementos e isotônicos</li>
                                <li class="flex items-center gap-2.5"><i data-lucide="check-circle" class="w-4 h-4 text-[#FF7A00]"></i> Acesso à área VIP de Recovery na Arena</li>
                            </ul>
                        </div>

                        <div class="pt-4">
                            <a href="{{ route('stages.index') }}" class="btn-primary-onemove text-xs px-8 py-3.5 w-full justify-center">
                                <span>ESCOLHER ETAPA E GARANTIR MEU KIT</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Detail Grid of Items -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Camiseta -->
                <div class="glass-panel p-6 rounded-2xl text-center space-y-3">
                    <div class="w-12 h-12 rounded-xl bg-white/5 mx-auto flex items-center justify-center text-[#FF4D00]">
                        <i data-lucide="shirt" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-syne font-bold text-white text-base">CAMISETA TECH</h3>
                    <p class="text-xs text-slate-400">Microfibra tecnológica com toque gelado, proteção UV50+ e recortes anatômicos respiráveis.</p>
                </div>
                <!-- Corta Vento -->
                <div class="glass-panel p-6 rounded-2xl text-center space-y-3 border-t-2 border-t-[#FF4D00]">
                    <div class="w-12 h-12 rounded-xl bg-white/5 mx-auto flex items-center justify-center text-[#FF7A00]">
                        <i data-lucide="wind" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-syne font-bold text-white text-base">CORTA-VENTO PRO</h3>
                    <p class="text-xs text-slate-400">Repelente à água, bolso interno com zíper e detalhes refletivos para treinos noturnos.</p>
                </div>
                <!-- Medalha -->
                <div class="glass-panel p-6 rounded-2xl text-center space-y-3">
                    <div class="w-12 h-12 rounded-xl bg-white/5 mx-auto flex items-center justify-center text-[#FF4D00]">
                        <i data-lucide="award" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-syne font-bold text-white text-base">MEDALHA FINISHER</h3>
                    <p class="text-xs text-slate-400">Acabamento em metal fosco com relevo da cidade e conector magnético para a Mandala.</p>
                </div>
                <!-- Bolsa Invictus -->
                <div class="glass-panel p-6 rounded-2xl text-center space-y-3">
                    <div class="w-12 h-12 rounded-xl bg-white/5 mx-auto flex items-center justify-center text-[#FF7A00]">
                        <i data-lucide="briefcase" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-syne font-bold text-white text-base">BOLSA ESPORTIVA</h3>
                    <p class="text-xs text-slate-400">Compartimento para calçados, zíperes reforçados e alta durabilidade para viagens de corrida.</p>
                </div>
            </div>

            <!-- Observação Importante do Usuário -->
            <div class="mt-10 p-5 rounded-2xl bg-white/5 border border-white/10 text-center text-xs text-slate-400 max-w-2xl mx-auto">
                <span class="text-white font-bold block mb-1">Nota Importante:</span>
                Os itens e cores dos kits podem variar sutilmente conforme as particularidades de cada etapa e parceiros locais do circuito.
            </div>

        </div>
    </section>

@endsection
