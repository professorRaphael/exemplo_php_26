# Desenvolvimento Web — Exemplos completos (1º período)

Material complementar à apresentação de **AJAX, JSON, PHP, Composer, POO e MySQL/CRUD**.
Os arquivos estão separados por tema. Não é preciso executar todos ao mesmo tempo.

## 1. Ferramentas

- PHP 8.2 ou superior (preferencialmente uma versão 8.x atualmente suportada)
- Navegador e VS Code
- MySQL ou MariaDB para a pasta `06_crud_mysql`
- Composer somente para a pasta `04_composer`

No terminal, teste:

```bash
php --version
```

## 2. Primeiro exemplo de AJAX

Entre na pasta `01_ajax` e execute:

```bash
php -S localhost:8000
```

Abra `http://localhost:8000/fetch.html` ou `http://localhost:8000/xhr.html`.
**Não abra com `file://`**: o navegador pode bloquear a leitura de `jogos.json`.

## 3. Fundamentos de PHP

Os exemplos da pasta `02_php_basico` foram preparados para o terminal:

```bash
php 02_php_basico/ola.php
php 02_php_basico/variaveis.php
php 02_php_basico/decisao.php
```

`ola.php` devolve HTML, por isso faz mais sentido abri-lo no navegador.
Para isso, inicie `php -S localhost:8000 -t 02_php_basico` e visite `http://localhost:8000/ola.php`.

## 4. Formulário e API simples

Na pasta `03_formularios`:

```bash
php -S localhost:8000
```

Visite `http://localhost:8000/formulario.html` e `http://localhost:8000/consumir.html`.

## 5. Composer e Monolog

Na pasta `04_composer`, com Composer instalado:

```bash
composer install
php monolog.php
```

O código cria `aula.log`. A pasta `vendor/` é criada pelo Composer e não é distribuída aqui.

## 6. Cadastro de jogos (CRUD MySQL)

Siga o roteiro mais detalhado em `06_crud_mysql/README.md`. Resumo:

1. Inicie MySQL/MariaDB no XAMPP/WAMP ou serviço equivalente.
2. Execute `06_crud_mysql/schema.sql` no phpMyAdmin ou cliente MySQL.
3. Se necessário, ajuste usuário e senha em `06_crud_mysql/db.php`.
4. Na pasta `06_crud_mysql`, execute `php -S localhost:8000`.
5. Acesse `http://localhost:8000/index.php` para cadastrar, listar, editar e excluir jogos.
6. Acesse `http://localhost:8000/consultar.html` para testar `fetch()` e a API PHP.

## Estrutura resumida

```text
01_ajax/             jogos.json, xhr.html, fetch.html, json.html
02_php_basico/       ola.php, variaveis.php, operadores.php, ...
03_formularios/      formulario.html, receber.php, api.php, consumir.html
04_composer/         composer.json, monolog.php
05_poo/              classe.php
06_crud_mysql/       schema.sql, db.php, index.php, salvar.php, editar.php,
                     excluir.php, api_jogos.php, consultar.html, estilo.css
```

**Importante:** este é um projeto didático de uso **local**. Antes de publicar uma
aplicação real na internet, acrescente autenticação, autorização, proteção CSRF,
tratamento adequado de erros, gestão segura de credenciais e demais controles.
