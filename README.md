Team.rocks
==========

Aplicação de controle de projetos desenvolvida para a cadeira de Projeto de desenvolvimento da Faculdade Senac RS.

Tecnologias utilizadas
----------------------
* [Symfony framework][1];
* [Doctrine ORM 2][2].

Requisitos
----------
* PHP >= 5.5.9;
* [Composer][3].

Como rodar a aplicação
----------------------
* Clone o repositório;
* Crie o banco de dados;
* Instale as dependências ```composer install```;
* Gere as tabelas ```php bin/console doctrine:schema:create```;
* Rode o servidor local ```php bin/console server:run```;
* Pronto!

[1]:  https://symfony.com/
[2]:  http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/
[3]:  https://getcomposer.org/