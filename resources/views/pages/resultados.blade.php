@extends('layouts.main')

@section('title', 'Resultados & Fotos Oficiais | ONE MOVE RUN 2027')
@section('meta_description', 'Consulte a classificação geral, ranking do circuito, busque suas fotos oficiais pelo número de peito e assista ao aftermovie oficial.')

@section('content')

    <section class="py-16 relative bg-[#07080B] border-b border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Área do Concluinte</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1 mb-4">
                RESULTADOS & FOTOS OFICIAIS
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-sm">
                Sua conquista registrada para sempre. Busque suas fotos pelo número de peito, confira seu pace e acesse seu certificado de conclusão.
            </p>
        </div>
    </section>

    <!-- PHOTO SEARCH ENGINE (SIMULATOR) -->
    <section id="fotos" class="py-16 bg-[#090B10] border-b border-white/5" x-data="{ bibNumber: '{{ $bib ?? '' }}', searchTriggered: {{ $bib ? 'true' : 'false' }} }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-panel border-glow-orange rounded-3xl p-8 sm:p-10 text-center">
                <div class="w-14 h-14 rounded-2xl bg-[#FF4D00]/20 text-[#FF4D00] mx-auto flex items-center justify-center mb-4">
                    <i data-lucide="camera" class="w-7 h-7"></i>
                </div>

                <h2 class="font-syne font-black text-2xl sm:text-3xl text-white mb-2">BUSQUE SUAS FOTOS PELO NÚMERO DE PEITO</h2>
                <p class="text-xs text-slate-300 mb-6">
                    Nossa inteligência artificial analisa os números de peito e fotos de rosto ao longo de todo o percurso.
                </p>

                <!-- Search Input Form -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-lg mx-auto">
                    <input type="text" 
                           x-model="bibNumber" 
                           placeholder="Ex: 5327 ou 6420" 
                           class="w-full bg-[#151821] border border-white/10 rounded-2xl px-5 py-3.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-[#FF4D00] text-center sm:text-left">
                    <button @click="searchTriggered = true" type="button" class="btn-primary-onemove text-xs px-8 py-3.5 w-full sm:w-auto justify-center whitespace-nowrap">
                        <i data-lucide="search" class="w-4 h-4"></i>
                        <span>BUSCAR FOTOS</span>
                    </button>
                </div>

                <div class="mt-4 flex items-center justify-center gap-2 text-[11px] text-slate-400">
                    <span>💡 Números de demonstração para teste:</span>
                    <button @click="bibNumber = '5327'; searchTriggered = true" class="text-[#FF7A00] font-bold hover:underline">5327</button>
                    <span>•</span>
                    <button @click="bibNumber = '6420'; searchTriggered = true" class="text-[#FF7A00] font-bold hover:underline">6420</button>
                </div>

                <!-- Search Results Grid Simulation -->
                <div x-show="searchTriggered" x-cloak class="mt-10 pt-8 border-t border-white/10 text-left">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-syne font-bold text-white text-base">
                            Fotos encontradas para o atleta #<span x-text="bibNumber" class="text-[#FF4D00]"></span>
                        </h4>
                        <span class="text-xs text-emerald-400 font-bold">✓ 4 Fotos em Alta Resolução</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="rounded-xl overflow-hidden glass-panel group relative aspect-[16/9] bg-[#050608] flex items-center justify-center border border-white/10">
                            <img src="{{ asset('images/brand/arrival-portico.jpg') }}" alt="Pórtico de Chegada" class="w-full h-full object-contain">
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                <span class="text-[11px] text-white font-bold bg-[#FF4D00] px-3 py-1.5 rounded-lg shadow-lg">Download HD</span>
                            </div>
                        </div>
                        <div class="rounded-xl overflow-hidden glass-panel group relative aspect-[16/9] bg-[#050608] flex items-center justify-center border border-white/10">
                            <img src="{{ asset('images/brand/social-strava.jpg') }}" alt="Foto Oficial Atleta" class="w-full h-full object-contain">
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                <span class="text-[11px] text-white font-bold bg-[#FF4D00] px-3 py-1.5 rounded-lg shadow-lg">Download HD</span>
                            </div>
                        </div>
                        <div class="rounded-xl overflow-hidden glass-panel group relative aspect-[16/9] bg-[#050608] flex items-center justify-center border border-white/10">
                            <img src="{{ asset('images/brand/athlete-media.jpg') }}" alt="Mural da Prova" class="w-full h-full object-contain">
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                <span class="text-[11px] text-white font-bold bg-[#FF4D00] px-3 py-1.5 rounded-lg shadow-lg">Download HD</span>
                            </div>
                        </div>
                        <div class="rounded-xl overflow-hidden glass-panel group relative aspect-[16/9] bg-[#050608] flex items-center justify-center border border-white/10">
                            <img src="{{ asset('images/brand/move-again.jpg') }}" alt="Superação do Atleta" class="w-full h-full object-contain">
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                <span class="text-[11px] text-white font-bold bg-[#FF4D00] px-3 py-1.5 rounded-lg shadow-lg">Download HD</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- AFTERMOVIE & VIDEOS -->
    <section class="py-16 bg-[#07080B] border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <div class="lg:col-span-6 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#FF7A00]">Cinematografia do Circuito</span>
                    <h2 class="font-syne font-black text-3xl sm:text-4xl text-white">AFTERMOVIE OFICIAL</h2>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Reviva a energia épica das etapas realizadas. Drones noturnos, closes de emoção na chegada e o clima eletrizante da ONE MOVE Arena.
                    </p>
                    <div class="pt-2">
                        <button onclick="alert('O Aftermovie completo estará disponível no YouTube Oficial!')" class="btn-primary-onemove text-xs px-6 py-3">
                            <i data-lucide="play" class="w-4 h-4"></i>
                            <span>Assistir Teaser do Circuito</span>
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-6 rounded-3xl overflow-hidden glass-panel border border-white/10 relative group aspect-[16/9] bg-[#050608] flex items-center justify-center">
                    <img src="{{ asset('images/brand/arena-experience.jpg') }}" alt="Aftermovie ONE MOVE" class="w-full h-full object-contain">
                    <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
                        <div class="w-16 h-16 rounded-full bg-[#FF4D00] text-white flex items-center justify-center shadow-glow-orange group-hover:scale-110 transition">
                            <i data-lucide="play" class="w-8 h-8 fill-current ml-1"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- RANKING DO CIRCUITO & CERTIFICADOS -->
    <section class="py-16 bg-[#090B10]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Tabela de Líderes</span>
                <h2 class="font-syne font-black text-3xl text-white mt-1">RANKING DO CIRCUITO 2027</h2>
                <p class="text-slate-300 text-xs sm:text-sm mt-1">
                    Pontuação geral somada entre todas as etapas para disputa da Mandala Especial na Grande Final.
                </p>
            </div>

            <div class="glass-panel rounded-3xl overflow-hidden border border-white/10 max-w-4xl mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-white/5 border-b border-white/10 text-slate-300 uppercase font-bold text-[10px] tracking-wider">
                            <tr>
                                <th class="p-4">Posição</th>
                                <th class="p-4">Atleta</th>
                                <th class="p-4">Categoria</th>
                                <th class="p-4">Etapas Concluídas</th>
                                <th class="p-4 text-right">Pontos</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5 text-slate-200">
                            <tr class="hover:bg-white/5 transition">
                                <td class="p-4 font-black text-[#FF4D00]">1º 🥇</td>
                                <td class="p-4 font-bold text-white">Lucas Andrade Silva</td>
                                <td class="p-4">21K • Elite Masculino</td>
                                <td class="p-4"><span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-bold">1 Etapa</span></td>
                                <td class="p-4 text-right font-black text-white">100 pts</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="p-4 font-black text-slate-300">2º 🥈</td>
                                <td class="p-4 font-bold text-white">Mariana Costa Ribeiro</td>
                                <td class="p-4">21K • Elite Feminino</td>
                                <td class="p-4"><span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-bold">1 Etapa</span></td>
                                <td class="p-4 text-right font-black text-white">95 pts</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="p-4 font-black text-amber-500">3º 🥉</td>
                                <td class="p-4 font-bold text-white">Rodrigo Mendes Rocha</td>
                                <td class="p-4">10K • Geral Masculino</td>
                                <td class="p-4"><span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-bold">1 Etapa</span></td>
                                <td class="p-4 text-right font-black text-white">90 pts</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
