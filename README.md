# Instrução para rodar a API

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)

1 - Usaremos o programa POSTMAN para acesso e visualização dos dados da API https://www.postman.com/downloads/ <br>
2 - Certifique-se de ter em sua máquina PHP e composer instalados em sua pasta raiz da API<br>
3 - Rode o comando "php -S localhost:8000 -t public" para subir o servidor local <br>
4 - Abra o POSTMAN e selecione o método POST com a URL http://localhost:8000/api/login <br>
5 - Clique no campo "Body" e selecione "raw" com formato "JSON" <br>
6 - Digite no campo: {
"email": "teste3@email",
"password": "teste3" <br>
7 - Envie a requisição clicando em "Send"<br>
8 - Terá um retorno {
"access_token": "TOKEN" } // copie o token dentro das aspas "token" <br>
9 - Abra uma nova requisição com método GET com link http://localhost:8000/api/series <br>
10 - Vá até autenticação e escolha "Bearer Token", cole o token e envie a requisição

##### obs: Todos os passos acima podem ser consultados no notion com imagens explicativas e mais detalhadas

## MÉTODOS

Método POST: login -> http://localhost:8000/api/login <br>
Método GET: Buscar séries -> http://localhost:8000/api/series <br>
Método GET: Buscar episódios -> http://localhost:8000/api/episodios <br>
Método POST: Criar Série -> http://localhost:8000/api/series <br>
Método PUT: Atualizar Série -> http://localhost:8000/api/series/15 <br>
Método DELETE: Deletar Série -> http://localhost:8000/api/series/15

# Vídeo prático da API em funcionamento: https://youtu.be/KXOYNtRMRsM
