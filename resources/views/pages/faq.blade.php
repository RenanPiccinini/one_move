@extends('layouts.main')

@section('title', 'Perguntas Frequentes (FAQ) | ONE MOVE RUN 2027')
@section('meta_description', 'Tire suas dúvidas sobre inscrições, retirada de kit, guarda-volumes, troca de distâncias e resultados da ONE MOVE RUN.')

@section('content')

    <section class="py-16 relative bg-[#07080B] border-b border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Central de Ajuda</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1 mb-4">
                PERGUNTAS FREQUENTES (FAQ)
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-sm">
                Encontre respostas rápidas para as dúvidas mais comuns dos nossos atletas.
            </p>
        </div>
    </section>

    <section class="py-16 bg-[#090B10]" x-data="{ active: null }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">

            <!-- 1. Inscrição no site -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 1 ? null : 1)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>A inscrição é feita no site?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 1 }"></i>
                </button>
                <div x-show="active === 1" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    As inscrições são realizadas por meio da plataforma oficial parceira. Ao clicar em <strong>INSCREVA-SE</strong>, você será direcionado ao ambiente seguro de inscrição e pagamento.
                </div>
            </div>

            <!-- 2. Troca de distância -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 2 ? null : 2)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>Posso trocar de distância?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 2 }"></i>
                </button>
                <div x-show="active === 2" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    Sim! A solicitação de alteração de distância pode ser feita até 15 dias antes da respectiva etapa através do nosso formulário de contato, mediante disponibilidade de vagas e pagamento de eventual diferença de lote.
                </div>
            </div>

            <!-- 3. Transferência de inscrição -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 3 ? null : 3)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>Posso transferir minha inscrição para outra pessoa?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 3 }"></i>
                </button>
                <div x-show="active === 3" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    A transferência de titularidade pode ser efetuada até 10 dias antes da data do evento diretamente pelo painel do atleta na plataforma parceira de inscrições ou pelo suporte oficial da organização.
                </div>
            </div>

            <!-- 4. Retirada de kit -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 4 ? null : 4)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>Onde retiro meu kit?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 4 }"></i>
                </button>
                <div x-show="active === 4" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    O local, dias e horários da entrega dos kits variam conforme a cidade. As informações detalhadas estão disponíveis na página de cada etapa e enviadas por e-mail para todos os inscritos na semana da prova.
                </div>
            </div>

            <!-- 5. Retirada por terceiros -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 5 ? null : 5)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>Outra pessoa pode retirar meu kit?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 5 }"></i>
                </button>
                <div x-show="active === 5" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    Sim! O terceiro deve apresentar uma autorização por escrito assinada pelo atleta inscrito, cópia simples do documento com foto do titular e o comprovante de pagamento da inscrição.
                </div>
            </div>

            <!-- 6. Guarda-volumes -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 6 ? null : 6)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>Tem guarda-volumes no local?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 6 }"></i>
                </button>
                <div x-show="active === 6" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    Sim! O serviço de guarda-volumes é gratuito para todos os atletas inscritos. Recomendamos não deixar pertences de alto valor ou quantias em dinheiro.
                </div>
            </div>

            <!-- 7. Idade mínima -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 7 ? null : 7)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>Qual a idade mínima para participar?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 7 }"></i>
                </button>
                <div x-show="active === 7" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    Conforme as normas oficiais da CBAt: prova de 5K a partir de 14 anos (com autorização expressa dos responsáveis); prova de 10K a partir de 16 anos; prova de 21K a partir de 18 anos completos.
                </div>
            </div>

            <!-- 8. Posso correr sem chip -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 8 ? null : 8)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>Posso correr sem chip?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 8 }"></i>
                </button>
                <div x-show="active === 8" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    O uso do chip e do número de peito é obrigatório para registrar seu tempo oficial, fotos nos tapetes e validação para a medalha finisher e ranking do circuito.
                </div>
            </div>

            <!-- 9. Onde vejo meu resultado -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 9 ? null : 9)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>Onde vejo meu resultado?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 9 }"></i>
                </button>
                <div x-show="active === 9" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    Os tempos brutos e líquidos são computados em tempo real e disponibilizados na aba Resultados deste site poucas horas após o término da corrida.
                </div>
            </div>

            <!-- 10. Como funciona a premiação -->
            <div class="glass-panel rounded-2xl overflow-hidden border border-white/10">
                <button @click="active = (active === 10 ? null : 10)" class="w-full p-5 text-left flex items-center justify-between font-bold text-sm text-white focus:outline-none">
                    <span>Como funciona a premiação?</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[#FF4D00] transition-transform duration-300" :class="{ 'rotate-180': active === 10 }"></i>
                </button>
                <div x-show="active === 10" x-collapse class="px-5 pb-5 text-xs text-slate-300 leading-relaxed border-t border-white/5 pt-3">
                    Todos os concluintes recebem a Medalha Finisher da cidade. Os 5 primeiros colocados gerais (masculino e feminino) e os líderes por faixa etária sobem ao pódio e recebem troféus comemorativos.
                </div>
            </div>

        </div>
    </section>

@endsection
