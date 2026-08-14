
<h1 align="center">
Site Todo Mundo Odeia o Chris (v2)</h1>

Uma atualização do projeto "<strong>Site Todo Mundo Odeia o Chris</strong>".

A versão 2 traz uma reformulação completa do projeto, com arquitetura modular em PHP, interface moderna com efeito Glassmorphism, melhorias na organização dos conteúdos e uma experiência de navegação mais dinâmica, mantendo o caráter nostálgico e informativo da versão anterior.

---
## Capturas de tela
<p align="center">
  <img 
    src="https://i.imgur.com/b5B514V.png"
    alt="Tela inicial"
    width="800px"
  >
  <img 
    src="https://i.imgur.com/CvBjaVM.png"
    alt="Tela de personagens"
    width="800px"
  >
  <img 
    src="https://i.imgur.com/lzMxiw0.png"
    alt="Tela de temporadas"
    width="800px"
  >
  <img 
    src="https://i.imgur.com/p7HljyS.png"
    alt="Tela de contato"
    width="800px"
  >
  </p>

---

## Descrição do projeto

Este projeto é a evolução da plataforma enciclopédica sobre a série "Todo Mundo Odeia o Chris", agora reestruturada dinamicamente. O sistema resolve o problema de redundância e duplicação de código em páginas estáticas, utilizando um motor de renderização modular que distribui de forma inteligente as seções estruturais.

---

## Funcionalidades

* **Arquitetura Modular Dinâmica:** Divisão do código em blocos reutilizáveis nativamente por meio do PHP.
* **Destaque de Navbar Inteligente:** Identificação automatizada via JavaScript da página aberta, aplicando a classe `.active` ao botão correto de forma orgânica.
* **Feed de Personagens Modernizado:** Layout em formato de feed baseado em cards responsivos contendo avatares estilizados e biografias.
* **Painel de Temporadas:** Cards paralelos integrando resumos, dados de exibição originais e redirecionamentos externos para serviços de streaming.
* **Validação de Formulário Assistida:** Sistema de tratamento de strings (`.trim()`) e bloqueio de envios vazios via listeners JavaScript, emitindo alertas personalizados temáticos da série.
* **Efeitos de Transição Fluida:** Animações baseadas em curvas de Bézier cúbicas aplicadas programaticamente a todos os cards do sistema.

---

## 📁 Estrutura do projeto

```text
📁 TODO_MUNDO_ODEIA_O_CHRIS
└── 📁 todo_mundo_odeia_o_chris_v2
    ├── 📁 css
    │   └── 📄 style.css
    ├── 📁 html-version
    │   ├── 📄 contato.php             
    │   ├── 📄 glossario.php            
    │   ├── 📄 index.php                
    │   ├── 📄 personagens.php         
    │   └── 📄 temporadas.php            
    ├── 📁 img                      
    ├── 📁 includes                 
    │   ├── 📄 footer.php
    │   └── 📄 header.php
    ├── 📁 js
    │   └── 📄 script.js           
    ├── 📄 contato.php             
    ├── 📄 glossario.php            
    ├── 📄 index.php                
    ├── 📄 personagens.php         
    └── 📄 temporadas.php          
```
---

## Como executar o projeto
### Pré-requisitos
Por conter processamento no lado do servidor <i>(server-side)</i>, a plataforma necessita de um interpretador PHP:

* XAMPP, WampServer ou PHP CLI instalado localmente.

* Navegador web moderno e conexão com a internet (para scripts de terceiros e fontes).

### Passo a Passo para Execução
<ol><li>Faça o clone ou baixe os arquivos da pasta <code>todo_mundo_odeia_o_chris_v2</code>.</li>

<li>Mova a pasta do projeto para o diretório de arquivos públicos do seu servidor local (ex: <code>C:\xampp\htdocs\</code>).</li>

<li>Certifique-se de que o Apache ou o serviço do PHP esteja rodando.</li>

<li>Acesse o seu navegador e digite o endereço:</li>
<br />
<pre><code><strong>Plaintext</strong>

http://localhost/todo_mundo_odeia_o_chris_v2/index.php
</code></pre></ol>

---

## Autor
Denilson Silva Damacena (2026)
