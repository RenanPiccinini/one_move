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
                            ONE MOVE RUN BRASIL • REGULAMENTO OFICIAL | EDIÇÃO BRASÍLIA 2027
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

                <!-- Quadro de Dados Técnicos (Exatamente como consta no PDF Oficial) -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <h3 class="font-syne font-bold text-xs sm:text-sm uppercase tracking-wider text-[#FF7A00] flex items-center gap-2">
                            <i data-lucide="table" class="w-4 h-4"></i>
                            <span>Quadro de Dados Técnicos</span>
                        </h3>
                        <span class="text-[10px] text-slate-400 font-mono">Página 1 do PDF Oficial</span>
                    </div>

                    <div class="overflow-hidden rounded-2xl border border-white/10 bg-[#0C0E14]">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-xs divide-y divide-white/10">
                                <tbody class="divide-y divide-white/5 font-sans">
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02] w-1/3 sm:w-1/4">Data</td>
                                        <td class="py-3 px-4 sm:px-6 text-white font-semibold">27 de janeiro de 2027</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">Cidade</td>
                                        <td class="py-3 px-4 sm:px-6 text-white">Brasília – DF</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">Organização e produção</td>
                                        <td class="py-3 px-4 sm:px-6 text-white font-semibold">CROWN & COMPANY LTDA</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">CNPJ</td>
                                        <td class="py-3 px-4 sm:px-6 text-slate-300 font-mono">68.894.205/0001-00</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">Percursos</td>
                                        <td class="py-3 px-4 sm:px-6 text-white font-semibold">5 km, 10 km e 15 km</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">Capacidade</td>
                                        <td class="py-3 px-4 sm:px-6 text-white">3.500 atletas</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">Quórum mínimo</td>
                                        <td class="py-3 px-4 sm:px-6 text-white">1.750 inscrições confirmadas</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">Premiação em dinheiro</td>
                                        <td class="py-3 px-4 sm:px-6 text-[#FF7A00] font-bold">R$ 17.500,00, exclusivamente nos 15 km</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">Local</td>
                                        <td class="py-3 px-4 sm:px-6 text-slate-200">Praça do Buriti – Zona Cívico-Administrativa, Eixo Monumental, entre as vias N1 e S1, Brasília/DF, CEP 70075-900</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">Largada e chegada</td>
                                        <td class="py-3 px-4 sm:px-6 text-slate-200">Praça do Buriti, no mesmo local</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="py-3 px-4 sm:px-6 font-bold text-slate-400 bg-white/[0.02]">Horário de largada</td>
                                        <td class="py-3 px-4 sm:px-6 text-white font-semibold">Largada única e simultânea às 7h00 para 5 km, 10 km e 15 km, com divisões durante o percurso</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Navegação e Texto Completo dos Capítulos -->
                <div class="space-y-6 pt-4">
                    
                    <div class="flex items-center justify-between border-b border-white/10 pb-3">
                        <h3 class="font-syne font-black text-lg text-white uppercase flex items-center gap-2">
                            <i data-lucide="book-open" class="w-4 h-4 text-[#FF4D00]"></i>
                            <span>Íntegra dos Artigos e Capítulos Oficiais (Art. 1º ao 98º)</span>
                        </h3>
                        <span class="text-[11px] font-bold text-slate-400">100% Conforme PDF</span>
                    </div>

                    <!-- Scrollable Full Text Viewer -->
                    <div class="max-h-[750px] overflow-y-auto no-scrollbar pr-2 space-y-6 text-xs text-slate-300 leading-relaxed font-sans divide-y divide-white/5">
                        
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
                            <p><strong>Art. 9º</strong> A participação deverá respeitar as idades mínimas previstas nas normas esportivas vigentes para cada distância.</p>
                            <p>§ 1º Para os 5 km, a idade mínima é de 14 anos completos no ano da prova; para os 10 km, de 16 anos completos no ano da prova, conforme referência à Norma 12, § 9º, da CBAt constante das Normas Gerais fornecidas.</p>
                            <p>§ 2º Para os 15 km, a idade mínima é de 18 anos completos até 31 de dezembro de 2027, ano de realização da prova, por se tratar de distância superior a 10 km e de até 21,1 km, conforme as Normas Gerais fornecidas.</p>
                            <p>§ 3º A inscrição de menores elegíveis dependerá da autorização expressa do responsável legal, conforme o Art. 18º.</p>
                            <p><strong>Art. 10º</strong> As modalidades terão classificação individual por meio de sistema eletrônico de cronometragem.</p>
                            <p><strong>Art. 11º</strong> A classificação geral da prova de 15 km determinará os atletas contemplados com a premiação principal em dinheiro. Haverá troféus para todas as categorias oficiais e em todas as distâncias de 5 km, 10 km e 15 km, conforme critérios, faixas e classificações divulgados pela organização. Categorias adicionais, inclusive para atletas com deficiência, e respectivos critérios poderão ser definidos em regulamento complementar conforme as normas aplicáveis.</p>
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
                            <p><strong>Art. 20º</strong> Serão observadas as regras legais aplicáveis ao cancelamento das inscrições, ao direito de arrependimento, quando cabível, e aos benefícios assegurados por lei. Na inscrição, o participante receberá informações claras sobre dados pessoais e autorização específica de imagem.</p>
                        </div>

                        <!-- CAPÍTULO IV -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO IV – DOS BENEFÍCIOS PARA GRUPOS E ASSESSORIAS ESPORTIVAS</h4>
                            <p><strong>Art. 21º</strong> Grupos de corrida, academias, empresas e assessorias esportivas poderão solicitar condições especiais para participação no evento.</p>
                            <p>I - de 10 a 19 atletas: 10% de desconto no valor vigente da inscrição;<br>
                            II - de 20 a 39 atletas: 12% de desconto no valor vigente da inscrição;<br>
                            III - a partir de 40 atletas: 15% de desconto no valor vigente da inscrição.</p>
                            <p><strong>Art. 22º</strong> O benefício será concedido mediante cadastro prévio do grupo ou assessoria junto à organização do evento e estará sujeito à disponibilidade de vagas.</p>
                            <p><strong>Art. 23º</strong> A organização poderá disponibilizar cupom exclusivo de identificação do grupo, permitindo que cada atleta realize sua própria inscrição e pagamento individualmente.</p>
                            <p><strong>Art. 24º</strong> Os descontos serão aplicados sobre o valor vigente do lote no momento da inscrição, não serão cumulativos com outros cupons, promoções ou benefícios e não poderão ser aplicados retroativamente.</p>
                            <p><strong>Art. 25º</strong> Para validação do benefício, deverá ser atingido o número mínimo de 10 atletas efetivamente inscritos e com pagamento confirmado.</p>
                            <p><strong>Art. 26º</strong> A organização poderá ainda conceder benefícios adicionais, cortesias ou condições diferenciadas para grupos e assessorias com grande número de participantes.</p>
                        </div>

                        <!-- CAPÍTULO V -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO V – DO KIT DO ATLETA</h4>
                            <p><strong>Art. 27º</strong> Todos os atletas regularmente inscritos terão direito ao kit oficial da ONE MOVE RUN BRASIL 2027, composto por: uma camiseta oficial; um número de peito com chip eletrônico de cronometragem; uma sacochila oficial; e uma garrafinha esportiva.</p>
                            <p><em>Parágrafo complementar.</em> A organização deverá confirmar, antes da abertura das inscrições, a inclusão do corta-vento no kit oficial, conforme a identidade comercial divulgada para o evento, e atualizar este artigo caso sua inclusão seja aprovada. Até essa confirmação, prevalece a composição expressamente indicada no Art. 27º.</p>
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
                            <p><strong>Art. 34º</strong> Os atletas deverão comparecer à Praça do Buriti com antecedência mínima recomendada de 60 minutos em relação ao horário oficial da largada de sua respectiva modalidade.</p>
                            <p><strong>Art. 35º</strong> A largada será única e simultânea para as modalidades de 5 km, 10 km e 15 km, às 7h00. Todos os atletas partirão juntos da Praça do Buriti e, durante o percurso, serão direcionados para suas respectivas distâncias por meio de bifurcações, divisões de fluxo, sinalização, gradis, cones, placas, fiscais e demais recursos operacionais definidos pela organização.</p>
                            <p>§ 1º Será admitida tolerância máxima de 10 (dez) minutos após o horário oficial da largada única para o ingresso do atleta na área de largada e início da prova.</p>
                            <p>§ 2º Encerrado o prazo de tolerância previsto no § 1º, o acesso à largada será fechado, não sendo permitido ao atleta iniciar a prova após esse momento.</p>
                            <p>§ 3º O fechamento do acesso após o prazo de tolerância não altera o horário oficial da largada nem os critérios de cronometragem e classificação previstos neste regulamento.</p>
                            <p><strong>Art. 36º</strong> Todos os participantes deverão respeitar sinalização, fiscais, arbitragem e agentes de segurança.</p>
                            <p><strong>Art. 37º</strong> É obrigatório o uso do número de peito visível na parte frontal da vestimenta durante toda a prova.</p>
                            <p>§ 1º O número de peito deverá permanecer legível e visível na parte da frente do tronco durante toda a prova, sem dobras, obstruções ou posicionamento irregular.</p>
                            <p>§ 2º Se a posição irregular ou obstrução impedir sua leitura na linha de chegada, o atleta poderá ser desclassificado, mediante análise da arbitragem.</p>
                            <p><strong>Art. 38º</strong> O chip eletrônico deverá ser utilizado conforme orientações da empresa de cronometragem.</p>
                            <p><strong>Art. 39º</strong> O atleta deverá completar integralmente o percurso correspondente à modalidade escolhida.</p>
                            <p><strong>Art. 40º</strong> A organização divulgará previamente os limites de tempo para conclusão dos percursos, horários de fechamento de vias e encerramento operacional, permanecendo definido neste regulamento o horário oficial da largada única previsto no Art. 35º.</p>
                            <p><em>Parágrafo complementar.</em> As linhas de largada e chegada deverão ser marcadas no piso, em cor contrastante, com largura mínima de 5 cm e máxima de 30 cm, observadas as orientações técnicas da Federação e da World Athletics.</p>
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
                            <p><strong>Art. 47º</strong> Todos os atletas regularmente inscritos que concluírem legalmente suas provas de 5 km, 10 km e 15 km receberão medalha de participação. Haverá troféus para os atletas classificados em todas as categorias oficiais e em todas as distâncias, conforme critérios e posições de pódio divulgados pela organização. A premiação em dinheiro será exclusiva da prova de 15 km.</p>
                            <p><strong>Art. 48º</strong> A prova de 15 km terá premiação em dinheiro dividida em partes iguais entre as classificações masculina e feminina, respeitada a respectiva ordem de chegada: 1º lugar masculino, R$ 5.000,00; 1º lugar feminino, R$ 5.000,00; 2º lugar masculino, R$ 2.500,00; 2º lugar feminino, R$ 2.500,00; 3º lugar masculino, R$ 1.250,00; 3º lugar feminino, R$ 1.250,00. O valor total da premiação em dinheiro permanece em R$ 17.500,00. Os 4º e 5º colocados de cada classificação, masculina e feminina, receberão troféus, sem prejuízo dos troféus previstos para as demais categorias oficiais.</p>
                            <p><strong>Art. 49º</strong> A premiação em dinheiro dos 15 km será destinada aos três primeiros atletas da classificação masculina e às três primeiras atletas da classificação feminina que concluírem legalmente a prova, observada a respectiva ordem de chegada e a homologação oficial dos resultados.</p>
                            <p><strong>Art. 50º</strong> A classificação para a premiação principal em dinheiro dos 15 km será determinada pelo tempo bruto, conforme registro oficial e validação da arbitragem.</p>
                            <p><strong>Art. 51º</strong> A premiação em dinheiro será destinada exclusivamente aos três primeiros colocados da classificação masculina e às três primeiras colocadas da classificação feminina dos 15 km, sendo o valor correspondente a cada posição dividido em partes iguais entre masculino e feminino, nos valores previstos no Art. 48º.</p>
                            <p><strong>Art. 52º</strong> Os classificados em quarto e quinto lugares, tanto na classificação masculina quanto na classificação feminina dos 15 km, receberão troféus oficiais da ONE MOVE RUN BRASIL, além de suas medalhas, sem prejuízo dos troféus previstos para as demais categorias oficiais.</p>
                            <p><strong>Art. 53º</strong> As provas de 5 km e 10 km não terão premiação em dinheiro. Seus concluintes receberão medalhas de participação e os atletas classificados nas categorias oficiais receberão troféus, conforme os critérios e posições de pódio divulgados pela organização.</p>
                            <p><strong>Art. 54º</strong> Todos os atletas regularmente inscritos que concluírem legalmente suas provas receberão medalhas de participação, mediante apresentação do número de peito.</p>
                            <p><strong>Art. 55º</strong> A entrega da premiação em dinheiro dependerá de homologação dos resultados, identificação dos atletas e exigências legais e tributárias. Prazo e forma de pagamento e indicação dos valores líquidos deverão constar da versão definitiva antes das inscrições.</p>
                            <p>§ 1º Após a publicação oficial e homologação dos resultados, a premiação pecuniária e eventuais bônus de desempenho serão pagos ou entregues pela organização imediatamente, em parcela única, observadas as exigências legais aplicáveis.</p>
                            <p>§ 2º Antes da abertura das inscrições, a organização publicará o valor bruto, o valor líquido e a alíquota ou retenção tributária aplicável a cada prêmio. Os valores anunciados para os 15 km permanecem, até a definição tributária expressa, em R$ 5.000,00 para cada 1º lugar (masculino e feminino), R$ 2.500,00 para cada 2º lugar (masculino e feminino) e R$ 1.250,00 para cada 3º lugar (masculino e feminino), totalizando R$ 17.500,00.</p>
                            <p>§ 3º A operacionalização do pagamento imediato, a apuração tributária e a redação definitiva deste artigo serão confirmadas com a Federação e com a assessoria contábil antes da publicação final.</p>
                            <p><strong>Art. 56º</strong> Os atletas premiados deverão apresentar documento oficial de identificação e dados necessários ao pagamento.</p>
                            <p><strong>Art. 57º</strong> Os recursos referentes à classificação da prova de 15 km deverão ser apresentados formalmente à arbitragem em até 30 (trinta) minutos, observados os seguintes prazos independentes: I – classificação masculina: até 30 (trinta) minutos após a chegada do primeiro colocado masculino; II – classificação feminina: até 30 (trinta) minutos após a chegada da primeira colocada feminina. Os prazos serão contados separadamente para cada classificação, cabendo à arbitragem receber, analisar e decidir os recursos antes da homologação dos resultados correspondentes, observadas as normas esportivas aplicáveis.</p>
                        </div>

                        <!-- CAPÍTULO IX -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO IX – DA SAÚDE E RESPONSABILIDADE DOS PARTICIPANTES</h4>
                            <p><strong>Art. 58º</strong> É condição fundamental que todos os atletas estejam em condições físicas e de saúde compatíveis com o esforço da modalidade escolhida.</p>
                            <p><strong>Art. 59º</strong> Ao se inscrever, o atleta declara sob sua responsabilidade que: I – conhece exigências e riscos da corrida de rua; II – considera-se fisicamente apto, realizando avaliações médicas necessárias; III – compromete-se a não participar com sintomas, lesões ou doenças que comprometam sua segurança; IV – respeitará seus limites e orientações médicas; V – informará intercorrências relevantes à equipe médica; VI – interromperá a atividade diante de sinais de comprometimento da saúde.</p>
                            <p><strong>Art. 60º</strong> A organização recomenda avaliação médica prévia e preparação física compatível com a distância escolhida.</p>
                            <p><strong>Art. 61º</strong> O atleta deverá utilizar vestuário e calçados adequados, manter-se hidratado e observar orientações de segurança.</p>
                            <p><strong>Art. 62º</strong> A equipe médica poderá determinar a interrupção da participação de atleta em risco.</p>
                            <p><strong>Art. 63º</strong> A declaração individual não afasta os deveres legais da organização relativos à segurança, prevenção e atendimento emergencial.</p>
                        </div>

                        <!-- CAPÍTULO X -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO X – DA SEGURANÇA, HIDRATAÇÃO E ASSISTÊNCIA MÉDICA</h4>
                            <p><strong>Art. 64º</strong> A ONE MOVE RUN BRASIL contará com planejamento de segurança compatível com 3.500 atletas, percursos e exigências dos órgãos competentes.</p>
                            <p><strong>Art. 65º</strong> A organização disponibilizará assistência médica e atendimento emergencial, incluindo ambulâncias e profissionais habilitados, conforme plano aprovado.</p>
                            <p><strong>Art. 66º</strong> Haverá pontos de hidratação ao longo dos percursos e na chegada, conforme exigências técnicas aplicáveis.</p>
                            <p>§ 1º O atleta poderá transportar água ou outra bebida à mão ou presa ao corpo, desde que a carregue desde a largada ou a obtenha em posto oficial.</p>
                            <p>§ 2º O recebimento ou recolhimento de bebidas fora dos postos oficiais, ressalvado fornecimento por razões médicas sob orientação dos árbitros, ou o recebimento de bebida de outro atleta em desacordo com as regras aplicáveis, poderá gerar advertência na primeira infração e desclassificação na segunda, conforme avaliação da arbitragem.</p>
                            <p>§ 3º O compartilhamento eventual de bebidas entre atletas e marcadores de ritmo observará as regras esportivas e sanitárias; apoio contínuo poderá configurar assistência indevida. A aplicação conjunta dessas disposições será validada pela Federação, considerando as Normas Gerais fornecidas.</p>
                            <p><strong>Art. 67º</strong> A organização poderá instalar estruturas de apoio, sinalização, isolamento de vias e pontos de controle.</p>
                            <p><strong>Art. 68º</strong> Todos deverão cumprir orientações de fiscais, árbitros, agentes de trânsito, segurança e saúde.</p>
                            <p><strong>Art. 69º</strong> A organização poderá interromper a prova ou modificar a operação diante de riscos à integridade dos participantes.</p>
                            <p><strong>Art. 69-Aº</strong> A organização poderá autorizar marcadores de ritmo (coelhos) formalmente inscritos na mesma prova, identificados por uniforme distinto e/ou indicação “PACE”, com nome e número de competição. Os marcadores estarão disponíveis a todos os atletas capazes de acompanhar o ritmo anunciado e não poderão ajudar ou impedir o progresso dos demais. Não será permitida atuação de marcadores não participantes da mesma corrida. Apoio contínuo irregular poderá gerar advertência ou desclassificação pela arbitragem.</p>
                        </div>

                        <!-- CAPÍTULO XI -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO XI – DAS CONDUTAS PROIBIDAS E DESCLASSIFICAÇÕES</h4>
                            <p><strong>Art. 70º</strong> O atleta deverá manter conduta esportiva adequada e respeitar participantes, profissionais e público.</p>
                            <p><strong>Art. 71º</strong> São motivos de desclassificação: I – usar número ou chip de terceiro; II – ceder número ou chip; III – utilizar transporte no percurso; IV – cortar caminho ou não passar por controles; V – agredir verbal ou fisicamente; VI – descumprir arbitragem ou segurança; VII – praticar fraude ou prestar informações falsas; VIII – descumprir regras esportivas aplicáveis.</p>
                            <p>§ 1º Agressões físicas e verbais configuram conduta antidesportiva. A arbitragem avaliará a ocorrência e poderá aplicar advertência ou desclassificação, de acordo com a gravidade e as regras esportivas.</p>
                            <p>§ 2º O uso de dispositivos eletrônicos que configurem assistência proibida observará as regras técnicas aplicáveis e as orientações da arbitragem. As Normas Gerais recebidas preveem desclassificação para atleta em posição de pódio que cruze a chegada portando determinados dispositivos e ausência de penalidade para não premiados; essa interpretação deverá ser confirmada expressamente pela Federação antes de sua aplicação.</p>
                            <p><strong>Art. 72º</strong> A desclassificação será determinada pela arbitragem mediante análise das ocorrências e evidências disponíveis.</p>
                            <p><strong>Art. 73º</strong> O desclassificado perderá direito à classificação e premiação, assegurada a possibilidade de recurso conforme procedimentos estabelecidos.</p>
                        </div>

                        <!-- CAPÍTULO XII -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO XII – DO QUÓRUM MÍNIMO, ADIAMENTO E CANCELAMENTO</h4>
                            <p><strong>Art. 74º</strong> A realização estará condicionada, entre outros fatores, à viabilidade técnica, financeira e administrativa.</p>
                            <p><strong>Art. 75º</strong> O quórum mínimo de viabilidade financeira é de 50% da capacidade máxima de 3.500 atletas, equivalente a 1.750 inscrições efetivamente confirmadas.</p>
                            <p><strong>Art. 76º</strong> Se não forem atingidas 1.750 inscrições confirmadas, a CROWN & COMPANY LTDA poderá adiar a ONE MOVE RUN BRASIL para data futura.</p>
                            <p><strong>Art. 77º</strong> A avaliação do quórum ocorrerá preferencialmente até 15 dias antes da data prevista.</p>
                            <p><strong>Art. 78º</strong> Em caso de adiamento, a organização comunicará oficialmente motivos, nova data quando definida e procedimentos aplicáveis.</p>
                            <p><strong>Art. 79º</strong> Inscrições confirmadas permanecerão válidas para a nova data, sem prejuízo dos direitos de quem não desejar ou puder participar.</p>
                            <p><strong>Art. 80º</strong> Os atletas poderão solicitar cancelamento e restituição dos valores pagos, conforme condições divulgadas e legislação de proteção ao consumidor.</p>
                            <p><strong>Art. 81º</strong> A organização também poderá adiar, suspender ou cancelar por força maior, determinações de autoridades, clima severo ou risco à segurança.</p>
                            <p><strong>Art. 82º</strong> Em qualquer hipótese, serão divulgados procedimentos de atendimento e observados os direitos assegurados pela legislação brasileira.</p>
                        </div>

                        <!-- CAPÍTULO XIII -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO XIII – DOS DIREITOS DE IMAGEM E DA PROTEÇÃO DE DADOS</h4>
                            <p><strong>Art. 83º</strong> A ONE MOVE RUN BRASIL poderá contar com cobertura fotográfica, audiovisual e jornalística para registro e divulgação de atividades esportivas, premiações, largadas, chegadas e demais atividades oficiais. Na inscrição, o atleta será informado e poderá autorizar expressamente o uso promocional de sua imagem pela CROWN & COMPANY LTDA, inclusive para divulgar a edição de Brasília e futuras edições em outras cidades e estados brasileiros.</p>
                            <p><strong>Art. 84º</strong> A autorização de uso promocional de imagem será apresentada de forma clara e destacada na plataforma de inscrições e, se concedida, abrangerá redes sociais, sites, campanhas digitais e impressas, apresentações a patrocinadores e órgãos públicos, vídeos institucionais, materiais de futuras edições, anúncios, cartazes, banners e painéis. Será gratuita, salvo acordo em contrário, e limitada às finalidades informadas, sem uso ofensivo ou discriminatório. O atleta poderá exercer direitos e revogar o consentimento quando aplicável. Para menores, a autorização será concedida por responsável legal.</p>
                            <p><strong>Art. 85º</strong> A organização tratará os dados pessoais em conformidade com a Lei Geral de Proteção de Dados Pessoais (LGPD).</p>
                            <p><strong>Art. 86º</strong> Os dados serão utilizados para inscrição, organização, segurança, cronometragem, resultados, premiações e obrigações legais.</p>
                            <p><strong>Art. 87º</strong> A organização disponibilizará informações sobre tratamento dos dados e canais para exercício dos direitos dos titulares. A autorização promocional será registrada para comprovar a manifestação de vontade; aceitar o regulamento não substitui consentimento específico quando legalmente necessário.</p>
                        </div>

                        <!-- CAPÍTULO XIV -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO XIV – DA PARTICIPAÇÃO DE ATLETAS COM DEFICIÊNCIA</h4>
                            <p><strong>Art. 88º</strong> A ONE MOVE RUN BRASIL observará disposições legais e esportivas aplicáveis à participação de atletas com deficiência.</p>
                            <p><strong>Art. 89º</strong> Categorias, elegibilidade e condições técnicas serão definidas em regulamento complementar conforme percursos e normas vigentes.</p>
                            <p><strong>Art. 90º</strong> A organização disponibilizará canais para informar previamente necessidades de acessibilidade.</p>
                            <p><strong>Art. 91º</strong> Condições de participação e critérios de classificação serão divulgados antes da abertura das inscrições.</p>
                        </div>

                        <!-- CAPÍTULO XV -->
                        <div class="space-y-2 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">CAPÍTULO XV – DAS DISPOSIÇÕES GERAIS</h4>
                            <p><strong>Art. 92º</strong> A participação implica conhecimento e aceitação deste regulamento, observadas as autorizações específicas exigidas por lei.</p>
                            <p><strong>Art. 93º</strong> A organização poderá divulgar instruções complementares que não contrariem direitos nem alterem indevidamente condições essenciais.</p>
                            <p><strong>Art. 94º</strong> Os participantes deverão acompanhar canais oficiais para horários, kits, percursos, segurança e resultados.</p>
                            <p><strong>Art. 95º</strong> A organização não se responsabilizará pela guarda de objetos não formalmente recebidos em guarda-volumes, ressalvadas responsabilidades legais.</p>
                            <p><strong>Art. 96º</strong> Casos omissos serão analisados pela comissão organizadora e direção técnica, observadas normas esportivas e legislação.</p>
                            <p><strong>Art. 97º</strong> Este regulamento entrará em vigor na data de sua publicação oficial.</p>
                        </div>

                        <!-- ANEXO I -->
                        <div class="space-y-3 pt-6">
                            <h4 class="font-syne font-black text-sm text-[#FF7A00] uppercase tracking-wider">ANEXO I – TERMO DE CIÊNCIA E DECLARAÇÃO DO ATLETA</h4>
                            <p class="leading-relaxed">
                                Ao confirmar minha inscrição na ONE MOVE RUN BRASIL – Edição Brasília 2027, declaro que li e compreendi o regulamento; conheço os riscos inerentes à corrida de rua; considero-me em condições físicas e de saúde compatíveis com a distância escolhida; comprometo-me a avaliar minha saúde e a não participar se apresentar condição que coloque minha integridade em risco; e seguirei as orientações da organização e da equipe médica.
                            </p>
                            <p class="leading-relaxed">
                                <strong>AUTORIZAÇÃO ESPECÍFICA E DESTACADA DE IMAGEM (campo separado na plataforma):</strong> Autorizo gratuitamente a CROWN & COMPANY LTDA a utilizar minha imagem e voz captadas nas atividades oficiais da ONE MOVE RUN BRASIL para divulgar esta edição e outras edições no Distrito Federal e em outros estados brasileiros, nos meios e limites do Capítulo XIII. Estou ciente dos canais para exercer meus direitos e de que esta autorização não se confunde com a aceitação obrigatória do regulamento.
                            </p>
                            <div class="bg-white/5 p-4 rounded-xl border border-white/5 space-y-2 text-slate-300">
                                <div class="flex items-center gap-3">
                                    <div class="w-4 h-4 rounded border border-white/30 flex items-center justify-center shrink-0"></div>
                                    <span>Autorizo o uso promocional de minha imagem nos termos acima.</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-4 h-4 rounded border border-white/30 flex items-center justify-center shrink-0"></div>
                                    <span>Não autorizo.</span>
                                </div>
                                <p class="text-[11px] text-slate-400 pt-1 italic">Para menores de idade: autorização a ser formalizada pelo responsável legal.</p>
                            </div>
                        </div>

                        <!-- ART. 98: DAS RESPONSABILIDADES -->
                        <div class="space-y-3 pt-6 bg-white/[0.02] p-5 rounded-2xl border border-white/5">
                            <h4 class="font-syne font-black text-sm text-white uppercase tracking-wider">
                                DAS RESPONSABILIDADES PELA ORGANIZAÇÃO E LOGÍSTICA DO EVENTO
                            </h4>
                            <p><strong>Art. 98º</strong> A organização geral da prova, incluindo toda a logística, o planejamento, a execução e a realização do evento, bem como a disponibilização de estrutura, equipamentos, materiais, equipe de apoio e demais itens necessários ao seu adequado funcionamento, será de total responsabilidade da empresa <strong>CROWN & COMPANY LTDA</strong>, inscrita no CNPJ sob o nº <strong>68.894.205/0001-00</strong>, sob a responsabilidade de <strong>Francisco Ramos Peixoto Júnior</strong> e <strong>Uriel Ribeiro Silva</strong>.</p>
                            <p>§ 1º Compete à referida empresa responder por todas as atividades relacionadas à organização e à logística do evento, garantindo as condições necessárias para sua realização, observadas as normas de segurança, as exigências legais aplicáveis e as autorizações pertinentes.</p>
                            <p>§ 2º A empresa responsável pela cronometragem, quando contratada exclusivamente para esse serviço, limitará sua atuação aos serviços técnicos de cronometragem esportiva, apuração e divulgação dos resultados, conforme as condições estabelecidas contratualmente, não sendo responsável pela organização geral, infraestrutura, logística ou execução das demais atividades do evento.</p>
                            <p class="text-[10px] text-slate-500 font-mono pt-2">CROWN & COMPANY LTDA • CNPJ 68.894.205/0001-00 • BRASÍLIA/DF • ONE MOVE RUN BRASIL 2027</p>
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
