Simple PHP Login for small projects. 

With this project you can set easily set up a page that can only be accessed through user authentication. Safe against SQL Injection.

PHP Login Simples

com este projeto você consegue rapidamente iniciar um projeto com paginas que só poderam ser acessadas através de autenticação de usuario. Seguro contra SQL injection.


Instructions

1 - Clone/Download the repository, inside the etc folder you will find a "usuario.sql" file, it's a simple table to store users

2 - Import/Execute the sql file in your Database.

3 - Go to the project folder,inside config/config.php and set up the username,password and database name inside of each DEFINE.

You're ready to go!

Obs: The project does not include user registration, so the user must be previously inserted into the Database.
Inside 'usuario.sql'
I set up a user as example. (username: user, pass: 123)
The user password should ALWAYS be saved using a hash236 method, otherwise it will not work. 
You can use websites like "http://md5decrypt.net/en/Sha256/" to encrypt a password and store it directly into the newly
created user row, in the database.

--

Instruções

1 - Clonar/Baixar o repositorio, dentro da pasta etc, você encotrará um script 'usuario.sql', é uma tabela simples para guardar
os usuarios.

2 - Importar/Executar o arquivo sql no seu banco de dados.

3 - Ir na pasta do projeto, dentro de config/config.php e coloque o usuario, senha e nome do seu banco de dados em cada DEFINE

Pronto!

Obs: O projeto não inclui cadastro de usuarios, então o usuario deve ser cadastrado previamente no banco de dados.
Dentro de 'usuario.sql' coloquei um usuario como exemplo. (username: user, pass: 123)
O usuario deve sempre ser salvo usando o metodo de encriptação hash 236, se não, não irá funcionar.
Você pode usar sites como "http://md5decrypt.net/en/Sha256/" para encriptar uma senha e salvar na linha do novo usuario 
que você criar no banco.

Agradecimentos ao @marcosjoao por colocar a lib materialize da Google.
