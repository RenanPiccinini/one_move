@extends('layouts.main')

@section('title', 'Fale Conosco | Circuito ONE MOVE RUN 2027')
@section('meta_description', 'Entre em contato com a organização do Circuito ONE MOVE RUN. Atendimento ao atleta, assessorias esportivas, imprensa e patrocínios.')

@section('content')

    <section class="py-16 relative bg-[#07080B] border-b border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Canais de Atendimento</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1 mb-4">
                FALE COM A ONE MOVE
            </h1>
            <p class="max-w-xl mx-auto text-slate-300 text-sm">
                Estamos prontos para atender atletas, assessorias esportivas, marcas e profissionais de imprensa.
            </p>
        </div>
    </section>

    <section class="py-16 bg-[#090B10]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Channels Column -->
                <div class="lg:col-span-5 space-y-6">
                    <div>
                        <span class="text-xs uppercase font-bold text-slate-400">Atendimento Direto</span>
                        <h2 class="font-syne font-black text-2xl text-white mt-1">CANAIS OFICIAIS</h2>
                    </div>

                    <!-- WhatsApp Card -->
                    <div class="glass-panel p-6 rounded-3xl border border-emerald-500/30 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center">
                                <i data-lucide="message-circle" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <strong class="text-white block text-sm">WhatsApp Oficial</strong>
                                <span class="text-xs text-slate-300">Atendimento ao Atleta & Dúvidas</span>
                            </div>
                        </div>
                        <a href="https://wa.me/5561999999999" target="_blank" class="px-4 py-2 rounded-full bg-emerald-500 hover:bg-emerald-600 text-white text-xs font-bold transition">
                            Conversar
                        </a>
                    </div>

                    <!-- Email Card -->
                    <div class="glass-panel p-6 rounded-3xl border border-white/10 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-[#FF4D00]/20 text-[#FF4D00] flex items-center justify-center">
                                <i data-lucide="mail" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <strong class="text-white block text-sm">E-mail Geral</strong>
                                <span class="text-xs text-slate-300">contato@onemoverun.com.br</span>
                            </div>
                        </div>
                    </div>

                    <!-- Imprensa & Comercial -->
                    <div class="space-y-3 pt-2 text-xs text-slate-300">
                        <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                            <strong class="text-white block mb-0.5">Comercial & Patrocínios:</strong>
                            <p class="text-slate-400">parcerias@onemoverun.com.br</p>
                        </div>
                        <div class="p-4 rounded-2xl bg-white/5 border border-white/5">
                            <strong class="text-white block mb-0.5">Assessoria de Imprensa & Mídia:</strong>
                            <p class="text-slate-400">imprensa@onemoverun.com.br</p>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="lg:col-span-7">
                    <div class="glass-panel border-glow-orange rounded-3xl p-8 sm:p-10">
                        
                        @if(session('success'))
                            <div class="mb-6 p-4 rounded-2xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-bold flex items-center gap-3">
                                <i data-lucide="check-circle" class="w-5 h-5 shrink-0"></i>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        <h3 class="font-syne font-black text-2xl text-white mb-2">ENVIE UMA MENSAGEM</h3>
                        <p class="text-xs text-slate-300 mb-6">Preencha o formulário abaixo e retornaremos em até 24 horas.</p>

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                            @csrf

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Qual o assunto?</label>
                                <select name="category" class="w-full bg-[#151821] border border-white/10 rounded-2xl px-4 py-3 text-xs text-white focus:outline-none focus:border-[#FF4D00]">
                                    <option value="atleta" {{ $selectedCategory === 'atleta' ? 'selected' : '' }}>Dúvida de Atleta / Inscrição</option>
                                    <option value="assessoria" {{ $selectedCategory === 'assessoria' ? 'selected' : '' }}>Assessoria de Corrida / Grupos (+10 atletas)</option>
                                    <option value="patrocinio" {{ $selectedCategory === 'patrocinio' ? 'selected' : '' }}>Comercial / Patrocínio / Ativação de Marca</option>
                                    <option value="imprensa" {{ $selectedCategory === 'imprensa' ? 'selected' : '' }}>Assessoria de Imprensa / Credenciamento</option>
                                    <option value="outro">Outro Assunto</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Seu Nome Completo *</label>
                                    <input type="text" name="name" required class="w-full bg-[#151821] border border-white/10 rounded-2xl px-4 py-3 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-[#FF4D00]" placeholder="João Silva">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Seu E-mail *</label>
                                    <input type="email" name="email" required class="w-full bg-[#151821] border border-white/10 rounded-2xl px-4 py-3 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-[#FF4D00]" placeholder="joao@email.com">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">WhatsApp / Telefone</label>
                                    <input type="text" name="phone" class="w-full bg-[#151821] border border-white/10 rounded-2xl px-4 py-3 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-[#FF4D00]" placeholder="(61) 99999-9999">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Cidade de Interesse</label>
                                    <select name="city_interest" class="w-full bg-[#151821] border border-white/10 rounded-2xl px-4 py-3 text-xs text-white focus:outline-none focus:border-[#FF4D00]">
                                        <option value="">Geral / Todas</option>
                                        @foreach($stages as $stg)
                                            <option value="{{ $stg->city }}">{{ $stg->city }} (Etapa {{ sprintf('%02d', $stg->stage_number) }})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">Mensagem *</label>
                                <textarea name="message" rows="4" required class="w-full bg-[#151821] border border-white/10 rounded-2xl p-4 text-xs text-white placeholder-slate-500 focus:outline-none focus:border-[#FF4D00]" placeholder="Como podemos te ajudar?"></textarea>
                            </div>

                            <button type="submit" class="btn-primary-onemove text-xs px-8 py-3.5 w-full justify-center">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                <span>ENVIAR MENSAGEM</span>
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
