Projeto da Roleta feito com framework laravel do php.

Na pasta routes,
web.php te mostrará as rotinas

localhost/roleta roda o projeto, cada vez que é atualizada a página, verá se a roleta tem algum desconto

Na pasta de app/http/controllers:
PagesController.php é o controle do sorteio, operadores lógicos para realização do sorteio

Na pasta resource/view:
Roleta.blade.php é a view da roleta. 

OBSERVAÇÃO:
Tem um hello-world para teste na pasta raiz do projeto /

Na pasta de app/http/controllers:
PagesController.php tem uma função index pertencente ao hello world

Na pasta resource/views: 
welcome.blande.php responsável pelo hello world

PARA FUNCIONAR O PROJETO:
Instalar o laravel e o composer e depois clone o projeto do github

abra o terminal e entre na pasta do projeto para rodar o servidor: 
php artisan serve

SE DER ERRO EM RELAÇÃO AO NOME DO PROJETO:
criei com o nome de hello-world

OBSERVAÇÃO:
<h2>fazer o clone do projeto</h2>
<p>git init</p>
<p>git clone git@github.com:jessicais21/Roleta.git</p>

<h2>Atualizar o composer</h2>
<p>composer update</p>

<h2>renomer um arquivo</h2>
<p>renomear o arquivo .env.exemplo para .env</p>

<h2>rodar o servidor</h2>
<p>php artisan serve</p>
<p>http://127.0.0.1:8000/roleta</p>
<p>Conforme vai atualizando, vai modificando o resultado da roleta</p>
