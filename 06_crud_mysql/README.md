# Cadastro de jogos — CRUD completo com PHP e MySQL

O projeto tem **Create** (cadastrar), **Read** (listar), **Update** (editar) e
**Delete** (excluir). O arquivo `consultar.html` demonstra JavaScript com `fetch()`
consumindo uma API PHP que lê os mesmos jogos do banco.

## Passo a passo

1. Inicie o serviço MySQL/MariaDB (por exemplo, no painel do XAMPP).
2. No phpMyAdmin, use a aba **SQL** para executar o conteúdo de `schema.sql`.
3. Abra `db.php`. Para uma instalação local padrão do XAMPP, `root` pode ter senha
   vazia; adapte `$usuario` e `$senha` à sua instalação. **Não publique essas credenciais.**
4. Entre nesta pasta pelo terminal e execute `php -S localhost:8000`.
5. No navegador, abra **http://localhost:8000/index.php**.
6. Cadastre um jogo, edite um jogo e exclua um jogo.
7. Abra **http://localhost:8000/consultar.html** e clique para consultar a API.

## O papel de cada arquivo

- `schema.sql`: banco e tabela.
- `db.php`: conexão PDO com o MySQL.
- `index.php`: formulário e lista de jogos.
- `salvar.php`: recebe POST e executa INSERT.
- `editar.php`: mostra formulário e executa UPDATE.
- `excluir.php`: recebe POST e executa DELETE.
- `api_jogos.php`: devolve jogos em JSON.
- `consultar.html`: utiliza fetch() para buscar e exibir jogos sem recarregar.
- `estilo.css`: apresenta a interface, sem alterar o funcionamento dos dados.

**Erros comuns:** 1) banco parado; 2) usuário/senha de banco incorretos;
3) esquecer de executar `schema.sql`; 4) abrir o HTML com `file://`;
5) usar uma pasta diferente da indicada no comando do servidor.

**Uso local e educacional:** a demonstração inclui validação, prepared statements
e saída escapada, mas **não inclui login, controle de autorização ou CSRF**.
