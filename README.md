# 💌 Chame a gata pra sair! (Date Invitation)

Um projeto que criei para convidar alguém para sair: o botão "Não" foge do mouse ou do dedo, o "Sim" vai crescendo e, no final, a pessoa escolhe o dia, horário e o lugar do encontro, gerando uma mensagem pronta no WhatsApp.

Backend simples em PHP para registrar as escolhas em um arquivo de log.

---

## Funcionalidades

- **Botão "Não" fujão:** Foge para uma posição aleatória da tela sempre que o usuário tenta clicar ou passar o mouse por cima.
- **Botão "Sim" que cresce:** A cada tentativa de clicar no "Não", o botão "Sim" aumenta de tamanho.
- **Fluxo de etapas:** Telas simples para a pessoa escolher:
  - Dia (Sábado ou Domingo)
  - Turno (Tarde ou Noite)
  - Onde ir (Sorveteria, Cafeteria, Hamburgueria, etc.)
- **Integração com WhatsApp:** Abre direto o app do WhatsApp com a mensagem pronta e emojis formatados para não bugar no Android nem no iPhone.
- **Registro de respostas (Backend):** Salva as interações em um arquivo `respostas.txt`.

---

## Tecnologias Usadas

- **HTML5 & CSS3:** Layout responsivo (funciona bem no celular e no computador) com Flexbox e Grid.
- **JavaScript Puro (Vanilla):** Lógica do botão fujão, troca de telas e envio assíncrono com `fetch()`.
- **PHP:** Endpoint simples para receber os dados via POST e salvar no arquivo de log.

---

## Como usar

1. Clone o repositório ou baixe os arquivos:
```bash
git clone https://github.com/Ian0Pimont4/date-invitation-app.git
```

2. Abra o `index.html` e edite o seu número no início do `<script>`:
```javascript
const CONFIG = {
  NOME_PESSOA: "", // Opcional: coloque o nome ou deixe vazio
  NUMERO_WHATSAPP: "5511999999999", // Seu WhatsApp com DDD
  ATIVAR_LOGS_BACKEND: true
};
```

3. Suba os arquivos `index.html` e `salvar.php` para qualquer hospedagem com suporte a PHP (como o InfinityFree).

4. As respostas salvas ficam disponíveis em: `https://seusite.com/respostas.txt`.
