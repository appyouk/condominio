Instruções de linha de comando

#push: empurrar, enviar
#pull: puxar
#commit: comprometer-se
#branch: filial
#feature: recursos
#realese: lançamento
#hotfix: correções de bugs críticos

Você também pode enviar arquivos existentes de seu computador usando as instruções abaixo.
Configuração global do Git 

git config --global user.name "Gabriel Oliveira"
git config --global user.email "rjgabriel@gmail.com"

Crie um novo repositório

git clone https://gitlab.com/gabriel-oliveira1/quiosque-vizinho.git
cd quiosque-vizinho
touch README.md
git add README.md
git commit -m "add README"
git push -u origin master

Envie uma pasta existente

cd existing_folder
git init
git remote add origin https://gitlab.com/gabriel-oliveira1/quiosque-vizinho.git
git add .
git commit -m "Initial commit"
git push -u origin master

Envie um repositório Git existente

cd existing_repo
git remote rename origin old-origin
git remote add origin https://gitlab.com/gabriel-oliveira1/quiosque-vizinho.git
git push -u origin --all
git push -u origin --tags

// Instruções particulares e comandos

Git Flow – Uma forma legal de organizar repositórios git

https://fjorgemota.com/git-flow-uma-forma-legal-de-organizar-repositorios-git/

git init

git config --global user.name "Gabriel Oliveira"
git config --global user.email "rjgabriel@gmail.com"
git config --global color.ui true

git status

// adiciona todos os arquivos
git add .

// 
git commit -m "Começando Projeto"

git log

git rm --cached teste_git.php
git restore --staged index.htm

git branch

// Cria uma nova branch
git checkout -b develop

// trocar a branch
git checkout master
git checkout 'develop'

git merge develop

// -d full marge - sem alterações para subir
git branch -d nome-da-branch

// -D apaga independente de ter ou não alterações para subir
git branch -D nome-da-branch

// Envia os arquivos para o repositório GIT
git push

// Recebe os arquivos para o repositório GIT
git pull

// Atualizar a branch master, ou seja, leva os arquivos atualizados da develop para a master
git checkout master
git merge develop
git push

----------------------------------------------------------------------------------------------

git flow init

git flow feature start nova-api
git add .
git commit -m "Novo API"

git flow finish nova-api

git flow release start 1.0.0
git flow release finish 1.0.0
#Colocar uma mensagem igual o commit
# automaticamenta ele sobe para a master no repositório git

#feature número do meio "1.[].0"
#hotfix número da direita "1.0.[]"

#Correções dentro do sistema
git flow hotfix start 1.0.1

# Não precisa fazer o git push, pois o flow faz automaticamente
git flow hotfix finish 1.0.1

# No final pode fazer um:
git checkout master
git push

-----------------------------------------------------------------------------------------------------------

Laravel

// Se o seu computador já possui PHP e Composer instalados:
composer create-project laravel/laravel example-app
cd example-app
php artisan serve

// Ou você pode instalar o instalador do Laravel como uma dependência global do Composer:

composer global require laravel/installer
laravel new example-app
cd example-app
php artisan serve

php artisan make:controller HomeController --invokable

php artisan key:generate
-----------------------------
Composer

#retornar a versão
composer self-update --1

#Instalar as dependencias:
composer install

# Retornar versão anterior
composer self-update --1
composer self-update --2

# pode apagar a pasta vendor/kylekatarnls
composer update --prefer-source
composer dump-autoload
---------------------------------------------------------

Jetstream - Auth

composer require laravel/jetstream
php artisan jetstream:install livewire --teams
npm install && npm run dev

#Laravel 8

php artisan route:clear
php artisan cache:clear
php artisan view:clear
php artisan optimize:clear

php artisan storage:link

teste