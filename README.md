# ONE MOVE RUN 2027 — Circuito Nacional de Corrida de Experiência

> **12 Cidades. 12 Etapas. Um Movimento.**  
> Uma corrida desenhada para ser vivida. Move to live. Move to perform. Move again.

---

## 🏃 Sobre o Projeto

O **ONE MOVE RUN 2027** é uma plataforma digital desenvolvida para o circuito nacional de corridas de rua mais inovador e imersivo do Brasil. Composto por 12 etapas em capitais estratégicas, o circuito conecta esporte, música, iluminação cênica noturna, tecnologia e alta performance.

O site foi concebido com uma estratégia de funil centrado no atleta: primeiro o corredor se conecta à energia do movimento, descobre sua cidade, analisa o percurso, a altimetria e os kits exclusivos, e é conduzido de forma segura à plataforma de inscrições e pagamentos.

---

## ✨ Principais Funcionalidades

- **Design Premium & Dark Neon**: Estética de ponta com paleta neon laranja/citrus (`#FF4D00`, `#FF7A00`), tipografia display moderna (*Syne* e *Plus Jakarta Sans*) e glassmorphism.
- **Hero 3D Interativo**: Partículas e nós de conexão em WebGL/Three.js em tempo real.
- **Mapa Interativo do Brasil**: Silhueta geográfica SVG do território nacional com fronteiras estaduais, rotas em laser pulsante e pins com coordenadas reais de cada uma das 12 etapas.
- **12 Etapas Nacionais Completas**:
  1. Brasília (DF)
  2. Goiânia (GO)
  3. Belo Horizonte (MG)
  4. Rio de Janeiro (RJ)
  5. São Paulo (SP)
  6. Curitiba (PR)
  7. Florianópolis (SC)
  8. Porto Alegre (RS)
  9. Salvador (BA)
  10. Recife (PE)
  11. Fortaleza (CE)
  12. Manaus (AM) - Grande Final
- **Passaporte ONE MOVE 2027**: Programa de fidelidade com Mandala colecionável em metal, combos e benefícios de temporada.
- **ONE MOVE Arena**:
  - **Speed Test**: Arrancada reta com sensor eletrônico para medição de velocidade de pico.
  - **ONE MOVE Recovery**: Área pós-prova com reposição de eletrólitos, frutas fatiadas, massoterapia e snacks proteicos.
- **Kits de Alta Performance**: Exibição detalhada do Kit ONE MOVE e Kit ONE MOVE PRO (com corta-vento oficial, bandana e nutrição).
- **Percursos & Altimetria**: Seção detalhada para distâncias de 5K, 10K e 21K com perfil altimétrico, hidratação e sinalização de LED.
- **Resultados & Busca de Fotos**: Sistema simulado de busca instantânea de fotos em alta resolução por número de peito e Aftermovie Oficial.
- **100% Responsivo**: Otimizado para telas mobile (smartphones), tablets, notebooks e monitores ultrawide.
- **Modal de Redirecionamento com Countdown**: Transição elegante para plataformas parceiras de inscrição e pagamento.
- **Área Corporativa**: Estruturas de patrocínio (Penalty, Adrun, Integralmédica, Invictus) e formulários para assessorias e imprensa.

---

## 🛠️ Tecnologias Utilizadas

- **Backend**: Laravel 12 (PHP 8.3+)
- **Frontend**: Blade Templates, TailwindCSS, Alpine.js
- **Efeitos 3D**: Three.js
- **Ícones**: Lucide Icons
- **Banco de Dados**: MySQL (com migrations e seeders completos)
- **Bundler**: Vite

---

## 🚀 Instalação e Execução Local

### Pré-requisitos
- PHP 8.2 ou superior
- Composer
- Node.js (v18+) e NPM
- MySQL

### 1. Clonar o repositório
```bash
git clone https://github.com/RenanPiccinini/one_move.git
cd one_move
```

### 2. Instalar dependências PHP e JavaScript
```bash
composer install
npm install
```

### 3. Configurar ambiente
```bash
cp .env.example .env
php artisan key:generate
```

Configure as credenciais do banco de dados no arquivo `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=one_move
DB_USERNAME=root
DB_PASSWORD=sua_senha
```

### 4. Executar Migrações e Seeders
```bash
php artisan migrate --seed
```
*O seeder `StageSeeder` popula automaticamente as 12 etapas com datas, descrições, lotes, distâncias e percursos.*

### 5. Compilar os Assets
```bash
npm run build
# ou para desenvolvimento com live-reload:
npm run dev
```

### 6. Iniciar o Servidor
```bash
php artisan serve
```
Acesse em: `http://localhost:8000`

---

## 📄 Licença

Este projeto é desenvolvido para o circuito oficial **ONE MOVE RUN**. Todos os direitos reservados.
