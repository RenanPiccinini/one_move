@extends('layouts.main')

@section('title', 'Patrocinadores & Oportunidades Comerciais | ONE MOVE RUN 2027')
@section('meta_description', 'Conecte sua marca ao maior circuito de corridas de experiência do Brasil. Naming rights, patrocinador master, ativações de arena e percurso.')

@section('content')

    <section class="py-20 relative bg-[#07080B] border-b border-white/5 text-center overflow-hidden">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[700px] h-[400px] bg-[#FF4D00]/15 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Oportunidades Comerciais 2027</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl md:text-6xl text-white mt-2 mb-6">
                SUA MARCA ONDE A <br>
                <span class="text-gradient-orange">EXPERIÊNCIA ACONTECE</span>
            </h1>
            <p class="max-w-3xl mx-auto text-slate-300 text-sm sm:text-lg leading-relaxed">
                Mais de 50.000 corredores apaixonados, 12 capitais brasileiras e milhões de impressões orgânicas nas redes sociais. 
                A marca aparece, mas a experiência continua sendo ONE MOVE.
            </p>
        </div>
    </section>

    <!-- SPONSORSHIP TIERS ARCHITECTURE -->
    <section class="py-20 bg-[#090B10]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <!-- Tier 1: Naming Rights -->
            <div class="glass-panel border-glow-orange rounded-3xl p-8 sm:p-12 text-center relative overflow-hidden">
                <span class="px-3.5 py-1.5 rounded-full bg-[#FF4D00] text-white text-[10px] font-black uppercase tracking-widest inline-block mb-4">
                    Cota Exclusiva Nacional
                </span>
                <h2 class="font-syne font-black text-3xl sm:text-4xl text-white mb-2">NAMING RIGHTS DO CIRCUITO</h2>
                <p class="text-slate-300 text-sm max-w-2xl mx-auto leading-relaxed mb-6">
                    Assinatura oficial em todas as 12 etapas, presença em todas as peças de comunicação, pórticos de largada/chegada, camisetas e campanhas nacionais de marketing.
                </p>
                <a href="{{ route('contact.index') }}?type=patrocinio" class="btn-primary-onemove text-xs px-8 py-3.5">
                    <span>Consultar Disponibilidade de Naming Rights</span>
                </a>
            </div>

            <!-- Tier 2: Patrocinadores Oficiais Atuais (from slides) -->
            <div>
                <div class="text-center mb-10">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#FF7A00]">Marcas que Movem o Circuito</span>
                    <h3 class="font-syne font-black text-2xl sm:text-3xl text-white mt-1">PATROCINADORES OFICIAIS</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Penalty -->
                    <div class="glass-panel p-8 rounded-3xl text-center space-y-3 hover:border-[#FF4D00]/50 transition group">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Material Esportivo</span>
                        <h4 class="font-syne font-black text-3xl text-white group-hover:text-[#FF4D00] transition">PENALTY</h4>
                        <p class="text-xs text-slate-300">Equipar o movimento com inovação, camisetas oficiais e estruturas nos 12 pórticos.</p>
                    </div>

                    <!-- Adrun -->
                    <div class="glass-panel p-8 rounded-3xl text-center space-y-3 hover:border-[#FF7A00]/50 transition group">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Calçados Oficiais</span>
                        <h4 class="font-syne font-black text-3xl text-white group-hover:text-[#FF7A00] transition">ADRUN</h4>
                        <p class="text-xs text-slate-300">Apresentar um novo jeito de viver a corrida com ativações de experimentação na Arena.</p>
                    </div>

                    <!-- Integralmédica -->
                    <div class="glass-panel px-4 py-8 sm:p-8 rounded-3xl text-center space-y-3 hover:border-[#FF4D00]/50 transition group overflow-hidden">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Nutrição Esportiva</span>
                        <h4 class="font-syne font-black text-lg sm:text-xl md:text-lg lg:text-xl xl:text-2xl tracking-tighter text-white group-hover:text-[#FF4D00] transition truncate max-w-full block">INTEGRALMÉDICA</h4>
                        <p class="text-xs text-slate-300">Recovery avançado, hidratação com isotônicos e sachês energéticos em todos os kits.</p>
                    </div>

                    <!-- Invictus -->
                    <div class="glass-panel p-8 rounded-3xl text-center space-y-3 hover:border-[#FF7A00]/50 transition group">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Acessórios PRO</span>
                        <h4 class="font-syne font-black text-3xl text-white group-hover:text-[#FF7A00] transition">INVICTUS</h4>
                        <p class="text-xs text-slate-300">Bolsas esportivas táticas, jaquetas corta-vento e equipamentos da categoria PRO.</p>
                    </div>
                </div>
            </div>

            <!-- Territories of Brand Activation (from slide 20 & 21) -->
            <div class="glass-panel p-8 sm:p-12 rounded-3xl border border-white/10">
                <div class="text-center max-w-2xl mx-auto mb-10">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#FF7A00]">Presença que se Integra, Não que Interrompe</span>
                    <h3 class="font-syne font-black text-2xl sm:text-3xl text-white mt-1">ONDE SUA MARCA SE CONECTA</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 text-xs text-slate-300">
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                        <strong class="text-white block font-bold mb-1">01. Pórtico de Largada</strong>
                        <p>Branding imersivo no momento de maior expectativa e adrenalina da prova.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                        <strong class="text-white block font-bold mb-1">02. Kit Atleta</strong>
                        <p>Aplicação nas camisetas, sacochilas, número de peito e inserção de produtos/amostras.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                        <strong class="text-white block font-bold mb-1">03. Percurso & KMs</strong>
                        <p>Sinalização com pórticos iluminados de LED, mensagens de incentivo e DJ Points.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                        <strong class="text-white block font-bold mb-1">04. ONE MOVE Arena</strong>
                        <p>Estandes de ativação sensorial, Speed Test com sua marca e lounge de relacionamento VIP.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                        <strong class="text-white block font-bold mb-1">05. Conteúdo & Mídia</strong>
                        <p>Fotos oficiais com marca d'água, reels com atletas e storymakers cobrindo sua ativação.</p>
                    </div>
                </div>
            </div>

            <!-- Call to Commercial Team -->
            <div class="text-center pt-8">
                <h3 class="font-syne font-bold text-2xl text-white mb-3">RECEBA NOSSO MÍDIA KIT COMERCIAL 2027</h3>
                <p class="text-xs text-slate-400 max-w-lg mx-auto mb-6">
                    Apresentação detalhada com cotas disponíveis, perfil demográfico dos atletas e opções de ativação customizadas.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact.index') }}?type=patrocinio" class="btn-primary-onemove text-xs px-8 py-3.5">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        <span>Falar com o Diretor Comercial</span>
                    </a>
                    <a href="https://wa.me/5561999999999?text=Ol%C3%A1!%20Gostaria%20de%20receber%20o%20M%C3%ADdia%20Kit%20de%20Patroc%C3%ADnio%20da%20ONE%20MOVE%20RUN." target="_blank" class="btn-secondary-onemove text-xs px-8 py-3.5">
                        <i data-lucide="message-circle" class="w-4 h-4 text-emerald-400"></i>
                        <span>Conversar no WhatsApp</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
