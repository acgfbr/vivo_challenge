<hr>

Olá pessoal, é um prazer fazer este desafio! 

Gostaria de agradecer a oportunidade.

Desafio: https://s3.amazonaws.com/gupy5/production/companies/316/emails/1598899335830/a8992f70-ebb9-11ea-bff8-93f07019b5fe/vivo_challenge.pdf
<hr>
Setup (mac/linux):

-   1 - dê permissão no setup.sh com chmod +x setup.sh - Este script vai fazer todo o setup necessário e vai deixar os containers rodando em background.
-   2 - crie um host no /etc/hosts de vivo.local para 127.0.0.1
-   3 - acesse vivo.local no seu browser, o app estará pronto para uso.

Pelo que entendi o desafio proposto é fazer uma api com 2 cruds, 1 de bots e um de mensagens e relacionar as mensagens ao bot.

<hr>

Foram utilizados neste desafio as seguintes tecnologias:

-   Php 7.3
-   Docker
-   Lumen 7
-   Sqlite
-   PSR-12
-   ( no desafio não mencionava se precisava de autenticação, deixei publico, mas poderia ter utilizado JWT ou OAUTH).

O readme está em português mas o projeto é 100% feito em inglês.

Vídeos do funcionamento:

# Bots - https://recordit.co/CrE5ShD8ZR
-   1 - Criação de um bot
-   2 - Atualização de um bot
-   3 - Remoção de um bot
-   4 - Listagem de bot(s)
-   ----------------------------------------- 
# Mensagens - http://recordit.co/BkpuWGzB3j
-   1 - Criação de uma mensagem
-   2 - Listagem de mensagem por id
-   3 - Listagem de mensagens por conversationId
<hr>

Referente a arquitetura e engenharia não tem muito o que explicar, eu pegaria o mesmo docker que está neste projeto e colocaria num cluster de kubernetes, alocaria 1 único pod a ele e definiria o escalonamento baseado em consumo de recursos (requests).

Foi utilizado o pattern mvc.

Design KISS: https://uxdesign.blog.br/a-origem-do-keep-it-simple-stupid-kiss-b24085dc1327

Foram cumpridos todo o proposto do desafio.

Utilizei soft deletes para nunca remover o dado do banco de dados, imagino que a vivo uso a mesma abordagem porque a qualquer momento (30 dias ou 20 anos, o cliente poderá solicitar qualquer informação.)

Documentação da api: https://documenter.getpostman.com/view/2492835/TVCdzoCt

Verificações que não foram feitas:

1 - Se o from e o to são iguais e/ou existem
2 - Não foi colocada foreign key
3 - Não foram feitos testes unitários e nem de integração

