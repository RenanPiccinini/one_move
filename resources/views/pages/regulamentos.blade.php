@extends('layouts.main')

@section('title', 'Regulamentos Oficiais | ONE MOVE RUN 2027')
@section('meta_description', 'Regulamento Geral do Circuito ONE MOVE RUN 2027 e adendos específicos por cidade.')

@section('content')

    <section class="py-16 relative bg-[#07080B] border-b border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Normas e Diretrizes</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1 mb-4">
                REGULAMENTOS DO CIRCUITO
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-sm">
                Consulte as regras gerais da competição e os regulamentos complementares de cada etapa municipal.
            </p>
        </div>
    </section>

    <section class="py-16 bg-[#090B10]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Regulamento Geral Banner -->
            <div class="glass-panel border-glow-orange rounded-3xl p-8 sm:p-10 space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-[#FF4D00]/20 text-[#FF4D00] flex items-center justify-center">
                        <i data-lucide="file-text" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase text-[#FF7A00]">Documento Principal</span>
                        <h2 class="font-syne font-black text-2xl text-white">REGULAMENTO GERAL ONE MOVE RUN 2027</h2>
                    </div>
                </div>

                <div class="space-y-4 text-xs text-slate-300 leading-relaxed border-t border-white/10 pt-4">
                    <p>
                        <strong>1. DO EVENTO:</strong> O CIRCUITO NACIONAL ONE MOVE RUN 2027 é composto por 12 etapas presenciais realizadas ao longo do ano de 2027, regido pelas regras oficiais da Confederação Brasileira de Atletismo (CBAt) e pelas normas deste regulamento.
                    </p>
                    <p>
                        <strong>2. CONDIÇÕES DE PARTICIPAÇÃO:</strong> Poderão participar da corrida atletas de ambos os sexos, regularmente inscritos. Para a prova de 5K a idade mínima é de 14 anos; para 10K a idade mínima é de 16 anos; e para 21K (Meia Maratona) a idade mínima é de 18 anos completos no ano de realização da prova.
                    </p>
                    <p>
                        <strong>3. INSCRIÇÕES E PAGAMENTOS:</strong> As inscrições são efetuadas exclusivamente pela plataforma online oficial parceira. A inscrição é pessoal e intransferível sem comunicação e validação formal prévia com a organização.
                    </p>
                    <p>
                        <strong>4. CRONOMETRAGEM E NÚMERO DE PEITO:</strong> O chip de cronometragem eletrônica é descartável e fornecido junto ao número de peito. É obrigatório o uso durante toda a extensão do percurso. A ausência de registro nos tapetes eletrônicos implicará na desclassificação sumária.
                    </p>
                    <p>
                        <strong>5. PREMIAÇÃO:</strong> Todo atleta que cruzar a linha de chegada de forma legal receberá a medalha finisher da respectiva etapa. Troféus aos 5 primeiros colocados gerais masculinos e femininos.
                    </p>
                </div>

                <div class="pt-4 flex items-center gap-4">
                    <button onclick="alert('O download do PDF completo do Regulamento Geral será disponibilizado em breve.')" class="btn-primary-onemove text-xs px-6 py-3">
                        <i data-lucide="download" class="w-4 h-4"></i>
                        <span>Baixar Regulamento Geral (PDF)</span>
                    </button>
                </div>
            </div>

            <!-- Regulamentos Específicos por Cidade -->
            <div>
                <div class="mb-6">
                    <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Particularidades Locais</span>
                    <h3 class="font-syne font-black text-2xl text-white mt-1">REGULAMENTOS ESPECÍFICOS POR ETAPA</h3>
                    <p class="text-xs text-slate-400 mt-1">
                        Cada cidade conta com particularidades de trânsito, horários de largada, premiação e acesso.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($stages as $stg)
                        <div class="glass-panel p-5 rounded-2xl border border-white/5 hover:border-[#FF4D00]/40 transition flex items-center justify-between">
                            <div>
                                <span class="text-[10px] font-bold uppercase text-[#FF6A1A]">Etapa {{ sprintf('%02d', $stg->stage_number) }}</span>
                                <h4 class="font-syne font-bold text-base text-white">{{ $stg->city }} / {{ $stg->state }}</h4>
                                <span class="text-xs text-slate-400 block mt-0.5">{{ $stg->date_display }}</span>
                            </div>
                            <a href="{{ route('stages.show', $stg->slug) }}#premiacao" class="btn-secondary-onemove text-[11px] px-3.5 py-1.5">
                                <span>Ver Termos</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

@endsection
