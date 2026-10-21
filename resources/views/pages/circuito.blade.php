@extends('layouts.main')

@section('title', 'O Circuito | ONE MOVE RUN 2027')
@section('meta_description', 'Conheça o conceito do circuito ONE MOVE RUN 2027. Uma corrida desenhada para ser vivida. 12 capitais, distâncias de 5K, 10K e 21K, Arena, Speed Test e Recovery.')

@section('content')

    <!-- HERO CIRCUITO -->
    <section class="py-20 relative bg-[#07080B] border-b border-white/5 overflow-hidden">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-[#FF4D00]/15 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Manifesto Oficial</span>
            <h1 class="font-syne font-black text-4xl sm:text-6xl text-white mt-2 mb-6">
                NÃO É SÓ UMA CORRIDA. <br>
                <span class="text-gradient-orange">É A MARCA DA EXPERIÊNCIA.</span>
            </h1>
            <p class="max-w-3xl mx-auto text-slate-300 text-sm sm:text-lg leading-relaxed">
                Uma corrida pode entregar uma medalha. Uma experiência entrega uma história para contar. 
                Olha o que estamos construindo juntos pelo Brasil.
            </p>
        </div>
    </section>

    <!-- OS TRÊS TERRITÓRIOS -->
    <section class="py-16 bg-[#090B10]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- 1 -->
                <div class="glass-panel p-8 rounded-3xl border-t-2 border-t-[#FF4D00] space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#FF4D00]/20 text-[#FF4D00] flex items-center justify-center font-black">
                        <i data-lucide="zap" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-syne font-bold text-2xl text-white">MOVIMENTO PARA VIVER</h3>
                    <ul class="text-xs text-slate-300 space-y-1.5 pt-2">
                        <li>• Música sincronizada</li>
                        <li>• Iluminação de alta tecnologia</li>
                        <li>• A cidade como protagonista</li>
                        <li>• Atitude esportiva autêntica</li>
                    </ul>
                </div>

                <!-- 2 -->
                <div class="glass-panel p-8 rounded-3xl border-t-2 border-t-[#FF7A00] space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#FF7A00]/20 text-[#FF7A00] flex items-center justify-center font-black">
                        <i data-lucide="gauge" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-syne font-bold text-2xl text-white">PERFORMANCE PARA ENTREGAR</h3>
                    <ul class="text-xs text-slate-300 space-y-1.5 pt-2">
                        <li>• Percursos aferidos e rápidos</li>
                        <li>• Cronometragem chip de última geração</li>
                        <li>• Postos médicos e hidratação perfeita</li>
                        <li>• Recovery com massoterapia pós-prova</li>
                    </ul>
                </div>

                <!-- 3 -->
                <div class="glass-panel p-8 rounded-3xl border-t-2 border-t-[#FF4D00] space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-[#FF4D00]/20 text-[#FF4D00] flex items-center justify-center font-black">
                        <i data-lucide="sparkles" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-syne font-bold text-2xl text-white">EXPERIÊNCIA PARA LEMBRAR</h3>
                    <ul class="text-xs text-slate-300 space-y-1.5 pt-2">
                        <li>• Speed Test exclusivo na Arena</li>
                        <li>• Conexão real entre corredores</li>
                        <li>• Storymakers e fotos em tempo real</li>
                        <li>• Memórias que continuam nas redes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- O PASSAPORTE ONE MOVE E RANKING NACIONAL -->
    <section id="passaporte" class="py-20 bg-[#07080B] border-t border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-widest text-[#FF7A00]">Temporada 2027</span>
                    <h2 class="font-syne font-black text-3xl sm:text-5xl text-white leading-tight">
                        O PASSAPORTE DO CORREDOR & A MANDALA
                    </h2>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        A ONE MOVE RUN é um circuito que premia quem viaja pelo esporte. Ao participar de múltiplas etapas, você coleciona carimbos no seu Passaporte ONE MOVE e ganha partes da mandala metálica.
                    </p>

                    <div class="space-y-4 text-xs">
                        <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                            <strong class="text-white block mb-1">Medalhas de Encaixe 3D</strong>
                            <p class="text-slate-300">Cada medalha de etapa possui ranhuras magnéticas que formam uma mandala de 12 peças ao final do circuito.</p>
                        </div>
                        <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                            <strong class="text-white block mb-1">Ranking Geral do Circuito</strong>
                            <p class="text-slate-300">Pontuação cumulativa por colocação e distância (5K, 10K e 21K). Os líderes do ranking recebem troféu especial de campeão na etapa final em Manaus.</p>
                        </div>
                    </div>

                    <a href="{{ route('stages.index') }}" class="btn-primary-onemove text-xs px-8 py-3.5 inline-flex">
                        <span>Ver Calendário das 12 Cidades</span>
                    </a>
                </div>

                <div class="lg:col-span-6">
                    <img src="{{ asset('images/brand/arrival-portico.jpg') }}" alt="Pórtico de Chegada ONE MOVE" class="w-full rounded-3xl border border-white/10 shadow-2xl">
                </div>

            </div>
        </div>
    </section>

    <!-- ARENA, SPEED TEST E RECOVERY -->
    <section class="py-20 bg-[#090B10]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Além da Linha de Chegada</span>
                <h2 class="font-syne font-black text-3xl sm:text-4xl text-white mt-1">A CORRIDA TERMINA. A EXPERIÊNCIA NÃO.</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Speed test -->
                <div class="glass-panel p-8 rounded-3xl border border-white/10 space-y-4">
                    <div class="w-full aspect-[16/9] overflow-hidden rounded-2xl bg-[#050608] flex items-center justify-center border border-white/10">
                        <img src="{{ asset('images/brand/speed-test.jpg') }}" alt="Speed test" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs font-bold uppercase text-[#FF4D00]">Tecnologia & Aceleração</span>
                    <h3 class="font-syne font-black text-2xl text-white">ONE MOVE SPEED TEST</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Uma pista reta com sensores de célula fotoelétrica dentro da arena. Depois de cruzar a linha de chegada, o atleta pode testar sua velocidade de pico em uma arrancada divertida com tempo exibido em painel digital de LED.
                    </p>
                </div>

                <!-- Recovery -->
                <div class="glass-panel p-8 rounded-3xl border border-white/10 space-y-4">
                    <div class="w-full aspect-[16/9] overflow-hidden rounded-2xl bg-[#050608] flex items-center justify-center border border-white/10">
                        <img src="{{ asset('images/brand/recovery-zone.jpg') }}" alt="Recovery" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs font-bold uppercase text-[#FF7A00]">Nutrição & Cuidado</span>
                    <h3 class="font-syne font-black text-2xl text-white">ONE MOVE RECOVERY</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Cuidado imediato após o esforço físico: bancadas de reposição eletrolítica, frutas frescas fatiadas, snacks proteicos fornecidos pela Integralmédica e espaço com fisioterapeutas para liberação miofascial e alongamento.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
