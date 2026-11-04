@extends('layouts.main')

@section('title', 'REGULAMENTO ON MOVE - BRASÍLIA | Circuito ONE MOVE RUN 2027')
@section('meta_description', 'Regulamento Oficial da ONE MOVE RUN BRASIL - Edição Brasília 2027 (Praça do Buriti) e termos específicos por cidade.')

@section('content')

    <section class="py-16 relative bg-[#07080B] border-b border-white/5 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Normas e Diretrizes Oficiais</span>
            <h1 class="font-syne font-black text-3xl sm:text-5xl text-white mt-1 mb-4 uppercase">
                REGULAMENTOS DO CIRCUITO
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-sm">
                Consulte o regulamento oficial e completo da etapa de abertura em Brasília e as diretrizes das próximas etapas do circuito.
            </p>
        </div>
    </section>

    <section class="py-16 bg-[#090B10]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <!-- REGULAMENTO ON MOVE - BRASÍLIA -->
            <div id="regulamento-brasilia" class="glass-panel border-glow-orange rounded-3xl p-5 sm:p-10 space-y-8" x-data="{ expanded: true, search: '', activeTab: 'all' }">
                
                <!-- Header Card -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 border-b border-white/10 pb-6">
                    <div class="space-y-2">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-[#FF4D00] text-white">
                                Etapa 01 • Oficial
                            </span>
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/10 text-slate-300 border border-white/10">
                                5 km • 10 km • 15 km
                            </span>
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-emerald-500/20 text-emerald-400 border border-emerald-500/30">
                                Inscrições Abertas
                            </span>
                        </div>
                        <h2 class="font-syne font-black text-2xl sm:text-3xl lg:text-4xl text-white uppercase tracking-tight">
                            REGULAMENTO ON MOVE - BRASÍLIA
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-400">
                            ONE MOVE RUN BRASIL • Edição Brasília 2027 • Praça do Buriti
                        </p>
                    </div>

                    <!-- PDF Download Button -->
                    <div class="shrink-0 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                        <a href="{{ asset('ONE_MOVE_RUN_BRASIL_2027_REGULAMENTO_CROWN_COMPANY_COM_CLAUSULA_RESPONSABILIDADES.pdf') }}" 
                           target="_blank" 
                           download 
                           class="btn-primary-onemove text-xs px-6 py-3 justify-center text-center shadow-glow-orange">
                            <i data-lucide="download" class="w-4 h-4"></i>
                            <span>Baixar Regulamento (PDF)</span>
                        </a>
                    </div>
                </div>

                <!-- Quadro Resumo Técnico / Tabela Oficial -->
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 text-xs">
                    <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Data Oficial</span>
                        <strong class="text-white text-xs block">27 de Janeiro de 2027</strong>
                        <span class="text-[10px] text-[#FF7A00]">Largada às 07h00</span>
                    </div>
                    <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Cidade & Local</span>
                        <strong class="text-white text-xs block">Brasília – DF</strong>
                        <span class="text-[10px] text-slate-400">Praça do Buriti</span>
                    </div>
                    <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Percursos</span>
                        <strong class="text-white text-xs block">5 km, 10 km e 15 km</strong>
                        <span class="text-[10px] text-slate-400">Simultâneo com divisões</span>
                    </div>
                    <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Capacidade</span>
                        <strong class="text-white text-xs block">3.500 Atletas</strong>
                        <span class="text-[10px] text-slate-400">Quórum mín: 1.750</span>
                    </div>
                    <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Premiação Dinheiro</span>
                        <strong class="text-[#FF7A00] text-xs block">R$ 17.500,00</strong>
                        <span class="text-[10px] text-slate-400">Exclusivo nos 15 km</span>
                    </div>
                    <div class="bg-white/5 p-3.5 rounded-2xl border border-white/5">
                        <span class="text-[10px] uppercase font-bold text-slate-400 block mb-0.5">Organização</span>
                        <strong class="text-white text-xs block truncate" title="CROWN & COMPANY LTDA">CROWN & COMPANY</strong>
                        <span class="text-[10px] text-slate-400">CNPJ 68.894.205/0001-00</span>
                    </div>
                </div>

                <!-- Navegação e Texto Completo dos Capítulos -->
                <div class="space-y-6 pt-2">
                    
                    <div class="flex items-center justify-between border-b border-white/10 pb-3">
                        <h3 class="font-syne font-black text-lg text-white uppercase flex items-center gap-2">
                            <i data-lucide="book-open" class="w-4 h-4 text-[#FF4D00]"></i>
                            <span>Íntegra dos Artigos e Capítulos Oficiais</span>
                        </h3>
                        <span class="text-[11px] font-bold text-slate-400">Art. 1º ao 98º</span>
                    </div>

                    <!-- Scrollable Full Text Viewer -->
                    <div class="max-h-[650px] overflow-y-auto no-scrollbar pr-2 space-y-6 text-xs text-slate-300 leading-relaxed font-sans divide-y divide-white/5">
                        
                        <!-- CAPÍTULO I -->
                        <div class="space-y-2 pt-4 first:pt-0">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO I – DA PROVA</h4>
                            <p><strong>Art. 1º</strong> A ONE MOVE RUN BRASIL – EDIÇÃO BRASÍLIA 2027 é uma corrida de rua organizada e produzida pela CROWN & COMPANY LTDA, CNPJ 68.894.205/0001-00.</p>
                            <p><strong>Art. 2º</strong> O evento será realizado em Brasília, Distrito Federal, no dia 27 de janeiro de 2027, com percursos de 5 km, 10 km e 15 km.</p>
                            <p><strong>Art. 3º</strong> A ONE MOVE RUN BRASIL tem como objetivos incentivar a prática de atividades físicas, promover saúde e qualidade de vida, estimular a integração social e proporcionar experiência esportiva organizada, segura e acessível.</p>
                            <p><strong>Art. 4º</strong> A prova será disputada individualmente, com cronometragem eletrônica e classificação conforme este regulamento.</p>
                            <p><strong>Art. 5º</strong> A largada será única e simultânea para os atletas das três distâncias - 5 km, 10 km e 15 km - às 7h00. A largada e a chegada ocorrerão na Praça do Buriti, localizada na Zona Cívico-Administrativa, no Eixo Monumental, entre as vias N1 e S1, Brasília/DF, CEP 70075-900. Após a largada conjunta, os atletas serão direcionados às respectivas distâncias por meio de divisões e bifurcações devidamente sinalizadas ao longo do percurso. Os mapas dos percursos e as demais informações operacionais serão divulgados antecipadamente nos canais oficiais da ONE MOVE RUN BRASIL.</p>
                            <p><strong>Art. 6º</strong> A organização buscará as autorizações necessárias junto aos órgãos competentes. A capacidade máxima prevista é de 3.500 atletas, distribuídos entre as três modalidades, podendo haver limites de vagas por distância.</p>
                        </div>

                        <!-- CAPÍTULO II -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO II – DAS MODALIDADES E CATEGORIAS</h4>
                            <p><strong>Art. 7º</strong> A ONE MOVE RUN BRASIL contará com três modalidades oficiais: corrida de 5 km, corrida de 10 km e corrida de 15 km.</p>
                            <p><strong>Art. 8º</strong> O participante deverá escolher sua modalidade no momento da inscrição.</p>
                            <p><strong>Art. 9º</strong> A participação deverá respeitar as idades mínimas previstas nas normas esportivas vigentes para cada distância:<br>
                            § 1º Para os 5 km, a idade mínima é de 14 anos completos no ano da prova; para os 10 km, de 16 anos completos no ano da prova, conforme referência à Norma 12, § 9º, da CBAt.<br>
                            § 2º Para os 15 km, a idade mínima é de 18 anos completos até 31 de dezembro de 2027, ano de realização da prova.<br>
                            § 3º A inscrição de menores elegíveis dependerá da autorização expressa do responsável legal, conforme o Art. 18º.</p>
                            <p><strong>Art. 10º</strong> As modalidades terão classificação individual por meio de sistema eletrônico de cronometragem.</p>
                            <p><strong>Art. 11º</strong> A classificação geral da prova de 15 km determinará os atletas contemplados com a premiação principal em dinheiro. Haverá troféus para todas as categorias oficiais e em todas as distâncias de 5 km, 10 km e 15 km, conforme critérios divulgados pela organização.</p>
                        </div>

                        <!-- CAPÍTULO III -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO III – DAS INSCRIÇÕES</h4>
                            <p><strong>Art. 12º</strong> As inscrições serão realizadas exclusivamente pela plataforma oficial indicada pela organização.</p>
                            <p><strong>Art. 13º</strong> O participante deverá preencher corretamente nome completo, documento de identificação, data de nascimento, contato, modalidade escolhida e demais informações necessárias.</p>
                            <p><strong>Art. 14º</strong> A inscrição será confirmada após a conclusão do cadastro e a confirmação do pagamento, quando aplicável.</p>
                            <p><strong>Art. 15º</strong> Os valores das inscrições, lotes promocionais, datas de encerramento e eventuais benefícios serão divulgados previamente pela organização.</p>
                            <p><strong>Art. 16º</strong> Cada inscrição será pessoal e vinculada ao respectivo participante.</p>
                            <p><strong>Art. 17º</strong> A transferência de titularidade somente será permitida mediante autorização da organização e dentro do prazo estabelecido.</p>
                            <p><strong>Art. 18º</strong> A inscrição de menores de idade, quando admitida para a distância escolhida, dependerá de autorização expressa do responsável legal.</p>
                            <p><strong>Art. 19º</strong> A organização poderá encerrar antecipadamente as inscrições caso seja atingida a capacidade máxima de 3.500 atletas.</p>
                            <p><strong>Art. 20º</strong> Serão observadas as regras legais aplicáveis ao cancelamento das inscrições, ao direito de arrependimento e aos benefícios assegurados por lei.</p>
                        </div>

                        <!-- CAPÍTULO IV -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO IV – DOS BENEFÍCIOS PARA GRUPOS E ASSESSORIAS ESPORTIVAS</h4>
                            <p><strong>Art. 21º</strong> Grupos de corrida, academias, empresas e assessorias esportivas poderão solicitar condições especiais para participação no evento:<br>
                            I - de 10 a 19 atletas: 10% de desconto no valor vigente da inscrição;<br>
                            II - de 20 a 39 atletas: 12% de desconto no valor vigente da inscrição;<br>
                            III - a partir de 40 atletas: 15% de desconto no valor vigente da inscrição.</p>
                            <p><strong>Art. 22º</strong> O benefício será concedido mediante cadastro prévio do grupo ou assessoria junto à organização do evento e estará sujeito à disponibilidade de vagas.</p>
                            <p><strong>Art. 23º</strong> A organização poderá disponibilizar cupom exclusivo de identificação do grupo, permitindo que cada atleta realize sua própria inscrição e pagamento individualmente.</p>
                            <p><strong>Art. 24º</strong> Os descontos serão aplicados sobre o valor vigente do lote no momento da inscrição, não serão cumulativos com outros cupons ou promoções e não poderão ser aplicados retroativamente.</p>
                            <p><strong>Art. 25º</strong> Para validação do benefício, deverá ser atingido o número mínimo de 10 atletas efetivamente inscritos e com pagamento confirmado.</p>
                            <p><strong>Art. 26º</strong> A organização poderá ainda conceder benefícios adicionais, cortesias ou condições diferenciadas para grupos e assessorias com grande número de participantes.</p>
                        </div>

                        <!-- CAPÍTULO V -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO V – DO KIT DO ATLETA</h4>
                            <p><strong>Art. 27º</strong> Todos os atletas regularmente inscritos terão direito ao kit oficial da ONE MOVE RUN BRASIL 2027, composto por: uma camiseta oficial; um número de peito com chip eletrônico de cronometragem; uma sacochila oficial; e uma garrafinha esportiva.<br>
                            <em>Parágrafo complementar:</em> A organização deverá confirmar, antes da abertura das inscrições, a inclusão do corta-vento no kit oficial, conforme a identidade comercial divulgada.</p>
                            <p><strong>Art. 28º</strong> A retirada dos kits ocorrerá em Brasília, em local, datas e horários divulgados antecipadamente pela organização.</p>
                            <p><strong>Art. 29º</strong> Para retirar o kit, o atleta deverá apresentar documento oficial de identificação e comprovante de inscrição.</p>
                            <p><strong>Art. 30º</strong> A retirada por terceiros poderá ocorrer mediante autorização e apresentação dos documentos exigidos pela organização.</p>
                            <p><strong>Art. 31º</strong> O atleta deverá conferir todos os itens no momento da retirada e comunicar imediatamente eventuais divergências.</p>
                            <p><strong>Art. 32º</strong> O tamanho da camiseta estará sujeito à disponibilidade de estoque, conforme as opções disponibilizadas na inscrição.</p>
                            <p><strong>Art. 33º</strong> Não haverá entrega de kits após o período oficial estabelecido, salvo autorização expressa da organização.</p>
                        </div>

                        <!-- CAPÍTULO VI -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO VI – DA LARGADA E DOS PERCURSOS</h4>
                            <p><strong>Art. 34º</strong> Os atletas deverão comparecer à Praça do Buriti com antecedência mínima recomendada de 60 minutos em relação ao horário oficial da largada.</p>
                            <p><strong>Art. 35º</strong> A largada será única e simultânea para as modalidades de 5 km, 10 km e 15 km, às 7h00. Todos os atletas partirão juntos da Praça do Buriti e serão direcionados para suas distâncias por meio de bifurcações devidamente sinalizadas.<br>
                            § 1º Será admitida tolerância máxima de 10 (dez) minutos após o horário oficial da largada única.<br>
                            § 2º Encerrado o prazo de tolerância, o acesso à largada será fechado.<br>
                            § 3º O fechamento do acesso após a tolerância não altera o horário oficial nem os critérios de classificação.</p>
                            <p><strong>Art. 36º</strong> Todos os participantes deverão respeitar sinalização, fiscais, arbitragem e agentes de segurança.</p>
                            <p><strong>Art. 37º</strong> É obrigatório o uso do número de peito visível na parte frontal da vestimenta durante toda a prova.</p>
                            <p><strong>Art. 38º</strong> O chip eletrônico deverá ser utilizado conforme orientações da empresa de cronometragem.</p>
                            <p><strong>Art. 39º</strong> O atleta deverá completar integralmente o percurso correspondente à modalidade escolhida.</p>
                            <p><strong>Art. 40º</strong> A organização divulgará previamente os limites de tempo para conclusão dos percursos e horários de fechamento de vias.</p>
                        </div>

                        <!-- CAPÍTULO VII -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO VII – DA CRONOMETRAGEM E CLASSIFICAÇÃO</h4>
                            <p><strong>Art. 41º</strong> A cronometragem será realizada por empresa especializada mediante sistema eletrônico de identificação individual.</p>
                            <p><strong>Art. 42º</strong> Para classificação geral e premiação em dinheiro dos 15 km, será considerado o tempo bruto entre o sinal oficial de largada e a passagem pela linha de chegada.</p>
                            <p><strong>Art. 43º</strong> A classificação dos 5 km e 10 km poderá considerar o tempo líquido, sem prejuízo das regras esportivas aplicáveis.</p>
                            <p><strong>Art. 44º</strong> A organização poderá utilizar registros audiovisuais, equipamentos adicionais e pontos de controle para verificar resultados.</p>
                            <p><strong>Art. 45º</strong> Os resultados preliminares serão disponibilizados nos canais oficiais da prova.</p>
                            <p><strong>Art. 46º</strong> Os resultados definitivos serão publicados após análise dos recursos e homologação pela arbitragem.</p>
                        </div>

                        <!-- CAPÍTULO VIII -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO VIII – DA PREMIAÇÃO</h4>
                            <p><strong>Art. 47º</strong> Todos os atletas regularmente inscritos que concluírem legalmente suas provas de 5 km, 10 km e 15 km receberão medalha de participação. Haverá troféus para os atletas classificados em todas as categorias oficiais. A premiação em dinheiro será exclusiva da prova de 15 km.</p>
                            <p><strong>Art. 48º</strong> A prova de 15 km terá premiação em dinheiro dividida em partes iguais entre as classificações masculina e feminina:<br>
                            • 1º lugar masculino: R$ 5.000,00 | 1º lugar feminino: R$ 5.000,00<br>
                            • 2º lugar masculino: R$ 2.500,00 | 2º lugar feminino: R$ 2.500,00<br>
                            • 3º lugar masculino: R$ 1.250,00 | 3º lugar feminino: R$ 1.250,00<br>
                            Total da premiação em dinheiro: <strong>R$ 17.500,00</strong>. Os 4º e 5º colocados gerais receberão troféus oficiais.</p>
                            <p><strong>Art. 49º a 54º</strong> A premiação em dinheiro é destinada aos 3 primeiros atletas gerais Masc/Fem dos 15 km por tempo bruto. As provas de 5 km e 10 km recebem troféus de pódio e medalhas finisher.</p>
                            <p><strong>Art. 55º a 57º</strong> A entrega dos prêmios em dinheiro depende de homologação de resultados e dados fiscais. Recursos devem ser apresentados à arbitragem em até 30 minutos após a chegada dos primeiros colocados.</p>
                        </div>

                        <!-- CAPÍTULO IX & X -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO IX E X – SAÚDE, SEGURANÇA E HIDRATAÇÃO</h4>
                            <p><strong>Art. 58º a 63º</strong> Condição de saúde e avaliação médica prévia são de inteira responsabilidade do atleta. A equipe médica poderá determinar a interrupção de qualquer atleta que apresente risco à saúde.</p>
                            <p><strong>Art. 64º a 69-Aº</strong> Assistência médica emergencial com ambulâncias UTI e postos médicos na arena e percurso. Postos de hidratação oficiais com água mineral ao longo do trajeto e na chegada. A organização poderá disponibilizar marcadores de ritmo oficiais (pace/coelhos).</p>
                        </div>

                        <!-- CAPÍTULO XI & XII -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO XI E XII – CONDUTAS, QUÓRUM E CANCELAMENTO</h4>
                            <p><strong>Art. 70º a 73º</strong> Conduta antidesportiva, agressão, uso de número de terceiros, corte de percurso ou descumprimento das normas implicará em desclassificação imediata.</p>
                            <p><strong>Art. 74º a 82º</strong> O evento prevê capacidade máxima de 3.500 atletas e quórum mínimo de viabilidade técnica de 1.750 inscrições confirmadas. Em caso de adiamento ou cancelamento por força maior ou quórum, os procedimentos e direitos do consumidor serão amplamente assegurados.</p>
                        </div>

                        <!-- CAPÍTULO XIII, XIV & XV -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO XIII A XV – DIREITOS DE IMAGEM, LGPD E DISPOSIÇÕES FINAIS</h4>
                            <p><strong>Art. 83º a 87º</strong> Tratamento de dados pessoais em rigorosa conformidade com a Lei Geral de Proteção de Dados (LGPD) e autorização destacada para registro fotográfico e promocional do evento.</p>
                            <p><strong>Art. 88º a 91º</strong> Garantia de participação de atletas PCD em conformidade com as normas esportivas e regulamentos complementares.</p>
                            <p><strong>Art. 92º a 97º</strong> A inscrição implica na aceitação integral deste regulamento oficial.</p>
                        </div>

                        <!-- ART. 98: DAS RESPONSABILIDADES -->
                        <div class="space-y-2 pt-6 bg-white/[0.02] p-4 rounded-2xl border border-white/5">
                            <h4 class="font-syne font-black text-sm text-white uppercase tracking-wider">
                                DAS RESPONSABILIDADES PELA ORGANIZAÇÃO E LOGÍSTICA DO EVENTO
                            </h4>
                            <p><strong>Art. 98º</strong> A organização geral da prova, incluindo toda a logística, o planejamento, a execução e a realização do evento, bem como a disponibilização de estrutura, equipamentos, materiais, equipe de apoio e demais itens necessários ao seu adequado funcionamento, será de total responsabilidade da empresa <strong>CROWN & COMPANY LTDA</strong>, inscrita no CNPJ sob o nº <strong>68.894.205/0001-00</strong>, sob a responsabilidade de <strong>Francisco Ramos Peixoto Júnior</strong> e <strong>Uriel Ribeiro Silva</strong>.</p>
                            <p>§ 1º Compete à referida empresa responder por todas as atividades relacionadas à organização e à logística do evento, garantindo as condições necessárias para sua realização, observadas as normas de segurança, as exigências legais aplicáveis e as autorizações pertinentes.</p>
                            <p>§ 2º A empresa responsável pela cronometragem, quando contratada exclusivamente para esse serviço, limitará sua atuação aos serviços técnicos de cronometragem esportiva, apuração e divulgação dos resultados, conforme as condições estabelecidas contratualmente, não sendo responsável pela organização geral, infraestrutura, logística ou execução das demais atividades do evento.</p>
                        </div>

                        <!-- ANEXO I -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">ANEXO I – TERMO DE CIÊNCIA E DECLARAÇÃO DO ATLETA</h4>
                            <p class="italic text-slate-400">
                                "Ao confirmar minha inscrição na ONE MOVE RUN BRASIL – Edição Brasília 2027, declaro que li e compreendi o regulamento; conheço os riscos inerentes à corrida de rua; considero-me em condições físicas e de saúde compatíveis com a distância escolhida; comprometo-me a avaliar minha saúde e a não participar se apresentar condição que coloque minha integridade em risco; e seguirei as orientações da organização e da equipe médica."
                            </p>
                        </div>

                    </div>
                </div>

            </div>

            <!-- REGULAMENTOS ESPECÍFICOS POR ETAPA (MUNICIPAIS) -->
            <div>
                <div class="mb-6">
                    <span class="text-xs uppercase font-extrabold tracking-widest text-[#FF7A00]">Particularidades Locais</span>
                    <h3 class="font-syne font-black text-2xl sm:text-3xl text-white mt-1 uppercase">
                        REGULAMENTOS ESPECÍFICOS POR ETAPA
                    </h3>
                    <p class="text-xs text-slate-400 mt-1">
                        Cada cidade conta com particularidades de trânsito, horários de largada, premiação e acesso.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($stages as $stg)
                        <div class="glass-panel p-4 sm:p-5 rounded-2xl border border-white/5 hover:border-[#FF4D00]/40 transition flex items-center justify-between gap-3">
                            <div class="min-w-0">
                                <span class="text-[10px] font-bold uppercase text-[#FF6A1A]">Etapa {{ sprintf('%02d', $stg->stage_number) }}</span>
                                <h4 class="font-syne font-bold text-base text-white truncate">{{ $stg->city }} / {{ $stg->state }}</h4>
                                
                                @if($stg->isOpen())
                                    <span class="text-xs text-slate-300 font-medium block mt-0.5 truncate">
                                        {{ $stg->date_display }}
                                    </span>
                                @else
                                    <span class="text-xs text-[#FF7A00] font-black tracking-wider uppercase block mt-0.5 truncate">
                                        EM BREVE
                                    </span>
                                @endif
                            </div>
                            
                            @if($stg->slug === 'brasilia')
                                <a href="#regulamento-brasilia" class="btn-secondary-onemove text-[11px] px-3.5 py-1.5 shrink-0 whitespace-nowrap">
                                    <span>Ver Termos</span>
                                </a>
                            @else
                                <a href="{{ route('stages.show', $stg->slug) }}#premiacao" class="btn-secondary-onemove text-[11px] px-3.5 py-1.5 shrink-0 whitespace-nowrap">
                                    <span>Ver Termos</span>
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

@endsection
