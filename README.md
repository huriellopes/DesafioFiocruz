# Desafio Fiocruz Brasília

> Desafio proposto pela empresa Fiocruz de Brasília, para medir o conhecimento no processo seletivo, para a vaga de Desenvolvedor Backend Laravel Pleno.

## ⚠ Requisitos:

- PHP >= 7.2.5
- Node.Js >= 12.13.1
- NPM >= 6.13.4
- PostgreSQL >= 12.2
- Docker e Docker Compose (opcional)

##### Deve ter o ambiente para o laravel configurado:

- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Modelagem do Banco de Dados

![modeling](.image/modelagem.png)

## O que foi utilizado no desafio:

- Laravel Framework
- Bootstrap
- Jquery
- DataTables
- Axios
- Jquery Validate
- Block Ui
- Date Fns
- Jquery Mask
- Sweet Alert
- Docker  
- PostgreSQL

## ⚡ Mão na massa:

> Você pode realizar o clone deste repositório ou baixar o arquivo .zip!

##### Clone este repositório:

````
git clone https://github.com/huriellopes/DesafioFiocruz.git
````

Para baixar o zip: [https://github.com/huriellopes/DesafioFiocruz/archive/master.zip](https://github.com/huriellopes/DesafioFiocruz/archive/main.zip)

## ✔ Executando a aplicação:

##### Na raiz do projeto, execute os comandos:

````
# Para instalar as dependências do Laravel
componser install
```` 

##### Copie e configure as variaveis de ambiente no arquivo .env:

````
# Para copiar o .env.example para .env
copy .env.example .env ou cp .env.example .env

# Para gerar a key do projeto
php artisan key:generate

# configure as seguintes variaveis de ambiente
DB_CONNECTION=pgsql # default = mysql
DB_HOST=127.0.0.1 ou db (container do doker)
DB_PORT=5432 # default = 3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

# Atenção: Deve ser PostgreSQL e lembre-se de criar o schema/banco!
````

#### Caso queira utilizar docker, rode o seguinte comando:

````
copy docker-compose.example.yml docker-compose.yml ou cp docker-compose.example.yml docker-compose.yml
````

#### Depois configure as variaveis de ambiente no docker compose

````
    environment:
      POSTGRES_USER: "postgres"
      POSTGRES_PASSWORD: "YOUR_PASSWORD"
      POSTGRES_DB: "DATABASE_NAME"

    # O banco de dados está isolado, apenas a aplicação acessa!
````

##### Depois de configurar as variaveis de ambiente, ainda no raiz do projeto, execute os comandos:

````
# Para rodar as migrates e seeds
php artisan migrate --seed

# Caso queira desafazer
php artisan migrate:rollback

# Para rodar o servidor embutido => Caso opte por rodar localmente.
php artisan serve

# Irá executar na seguinte url, abra no navegador
http://localhost:8000

> Caso opte por rodar no docker, acesse no navegador:
http://localhost
````

> Obs.: Caso opte pelo docker, rode o seguinte comando:

````
# Para subir os dois containers
docker-compose up -d

# Depois acesse o container de servidor
docker exec -it server sh

# Rode o composer
composer install

# Depois o migrate e seed
php artisan migrate --seed

# Caso queira desafazer
php artisan migrate:rollback

Obs.: Depois faça o processo normal. de abrir no navegador.
````

## Créditos

Empresa FioCruz Brasília - Pelo desafio proposto [Site da Empresa](https://www.fiocruzbrasilia.fiocruz.br/efg/)

## Licença

> Este projeto está sob a licença MIT. Veja aqui [License](LICENSE)

