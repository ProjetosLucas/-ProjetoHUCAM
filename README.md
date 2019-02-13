# -ProjetoHUCAM
Projeto de Página Web Para Adquirir Dados de Exames Médicos do HUCAM

Segue os passos para colocar no seu computador 

1- Instala o aio-runtimes_v2.4.7.exe, que é programa que instala as atualizações do Windows nescessárias para o Xampp funcionar. Instala esses programas antes de instalar os outros. O instalador eu acho que pode ser encontrado no seguinte site: http://www.pcgameshardware.de/Windows-Software-122001/Downloads/All-in-One-Runtimes-Download-1164729/

2- Instala se quiser o Sublime Text Build 3176 x64, que é um editor de texto. (Eu mandei no e-mail)

3- Instala o Git-2.19.1-64-bit.exe.(Eu mandei no e-mail)

4- Instala o Xampp que está no seguinte site : https://www.apachefriends.org/xampp-files/7.3.1/xampp-win32-7.3.1-0-VC15-installer.exe.

5- Abra /xampp/php/php.ini e altera a linha ';extension=php_intl.dll' ou ';extension=intl'  para 'extension=php_intl.dll' ou 'extension=intl' (remover o ponto e vírgula). Copie todos os arquivos /xamp/php/ic*.dll para /xampp/apache/ bin.

6- Instala o Composer.(Pode achar o instalador pelo seguinte site https://getcomposer.org/Composer-Setup.exe)

7- Abra o Git e escreva o seguinte comando: git clone https://github.com/ProjetosLucas/-ProjetoHUCAM.git C:\xampp\htdocs\Projeto

8- No prompt escreva os seguintes comandos: 
	cd C:\xampp\htdocs\Projeto\projeto
	composer install 

9- Abra o Xampp (Xampp Control Panel) e aperte "Start" para todos os módulos, para inicializar todos os seus serviços.

10- Depois de ter inicializados os serviços do Xampp, abra um Navegador (GoogleChrome, Mozilla,...) e escreva: localhost/phpmyadmin/

11-Aperta no canto esquerdo da tela "New" e em Criar base de Dados escreva "project"

12-Depois vai na aba importar e aperte "Escolher Arquivo" e escolha o seguinte arquivo: C:\xampp\htdocs\Projeto\project.sql

13- Agora com o Navegador (GoogleChrome, Mozilla,...) e escreva: localhost/Projeto/

14- Assim o navegador irá mostrar o Projeto baixado pelo git clone.

15- Clica na pasta projeto.

16- Qualquer modificação você deve fazer o seguinte, abrir o git e fazer os seguintes comandos:
	git config --global user.email "you@example.com"
  	git config --global user.name "Your Name"
	cd C:\xampp\htdocs\Projeto
	git add .
	git commit -m "Algum Comentario"
	git push
Onde irá atualizar o código do github.