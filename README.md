# -ProjetoHUCAM
Projeto de Página Web Para Adquirir Dados de Exames Médicos do HUCAM

Segue os passos para colocar no seu computador 

1- Instala o aio-runtimes_v2.4.7.exe, que é programa que instala todos os pacotes qeu faltam do Windows, que são nescessárias para o Xampp funcionar. O instalador pode ser encontrado no seguinte site: http://www.pcgameshardware.de/Windows-Software-122001/Downloads/All-in-One-Runtimes-Download-1164729/

2- Instala se quiser o Sublime Text Build, que é um editor de texto. Ele se encontra no seguinte site: https://www.sublimetext.com/3.

3- Instala o Git. Ele se encontra no seguinte site: https://git-scm.com/downloads

4- Instala o Xampp que está no seguinte site : https://www.apachefriends.org/xampp-files/7.3.1/xampp-win32-7.3.1-0-VC15-installer.exe.

5- Abra o arquivo C:\xampp\php\php.ini e altera a linha ';extension=php_intl.dll' ou ';extension=intl'  para 'extension=php_intl.dll' ou 'extension=intl' (remover o ponto e vírgula) e salva o arquivo. Copie todos os arquivos /xamp/php/ic*.dll para /xampp/apache/bin.

6- Instala o Composer (Pode achar o instalador olhe o seguinte site https://getcomposer.org/Composer-Setup.exe). OBSERVAÇÃO: Na aba Settings Check, quando ele pede "Choose the Command-Line PHP you want to use:" escolha a opção C:\xamppp\php\php.exe.

7- Abra o Git e escreva o seguinte comando: git clone https://github.com/ProjetosLucas/-ProjetoHUCAM.git C:\xampp\htdocs\Projeto

8- No prompt escreva os seguintes comandos:
 
	cd C:\xampp\htdocs\Projeto\projeto
	composer install
	composer upgrade 

9- Abra o Xampp (Xampp Control Panel) e aperte "Start" para todos os módulos, para inicializar todos os seus serviços.

10- Depois de ter inicializados os serviços do Xampp, abra um Navegador (GoogleChrome, Mozilla,...) e escreva: localhost/phpmyadmin/

11-Aperta no canto esquerdo da tela "New" e em "Criar base de Dados" escreva "project"

12-Depois vai na aba importar e aperte "Escolher Arquivo" e escolha o seguinte arquivo: C:\xampp\htdocs\Projeto\project.sql. Depois aperte em "Executar".

13-No arquivo C:\xampp\htdocs\Projeto\projeto\config\app.php, faça a seguinte alteração da seguinte parte do código:

	'Datasources' => [
		'default' => [
	            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
	            'persistent' => false,
            'host' => 'localhost',
	            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
	             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
	            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'my_app',
			/*
			* You do not need to set this flag to use full utf-8 encoding (internal default since CakePHP 3.6).
        			*/
			//'encoding' => 'utf8mb4',
               'timezone' => 'UTC',
			'flags' => [],
	            'cacheMetadata' => true,	
            'log' => false,


Para:


	'Datasources' => [
		'default' => [
	            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
	            'persistent' => false,
            'host' => 'localhost',
	            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
	             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
	            'username' => 'root',
            'password' => '',
	            'database' => 'project',
            	    /*
			* You do not need to set this flag to use full utf-8 encoding (internal default since CakePHP 3.6).
        			*/
			//'encoding' => 'utf8mb4',
               'timezone' => 'UTC',
			'flags' => [],
	            'cacheMetadata' => true,
            'log' => false,





13- Agora com o Navegador (GoogleChrome, Mozilla,...) e escreva: localhost/Projeto/

14- Assim o navegador irá mostrar o Projeto baixado pelo git clone. Lembrando que esse projeto está salvo em: C:\xampp\htdocs\Projeto. Para ter acesso a partes que são recusadas, faça o login com username 'admin' e a senha 'admin'.

15- Clica na pasta projeto para ver o site.

16- ATENÇÃO: Antes de começa a fazer a alteração no código faça o seguinte, onde você coloca o seu e-mail no "you@example.com", o seu nome em "Your Name".
	
	git config --global user.email "you@example.com"
	git config --global user.name "Your Name"
	cd C:\xampp\htdocs\Projeto
	git pull

Caso perceba que ocorreu alguma mudança no arquivo project.sql (É dito na tela preta do git), faça a atualização do banco de dados do seu computador: abra o Navegador (GoogleChrome, Mozilla,...) e  escreva: localhost/phpmyadmin/, e vai em cima da tela e aperta Base de Dados, depois seleciona "project" e aperta "Elimina" e depois em "OK". Logo, no canto esquerdo da tela  aperta em "New" e em "Criar base de Dados" escreva "project". Depois vai na aba importar e aperte "Escolher Arquivo", escolha o seguinte arquivo: C:\xampp\htdocs\Projeto\project.sql e depois aperta em "Executar". 

17- Qualquer modificação você deve fazer o seguinte, abrir o git e fazer os seguintes comandos, onde você coloca o seu e-mail no "you@example.com", o seu nome em "Your Name" e algum comentário em  "Algum Comentario":
	
	git config --global user.email "you@example.com"
	git config --global user.name "Your Name"
	cd C:\xampp\htdocs\Projeto
	git add .
	git commit -m "Algum Comentario"
	git push

Onde irá atualizar o código do github. Atualiza sempre o beckup do banco de dados que está presente no arquivo C:\xampp\htdocs\Projeto\project.sql. Para fazer o beckup é só digitar localhost/phpmyadmin/ no navegador, apertar no Menu do lado esquerdo em "project", aperta depois em "exportar" e depois em executar. O arquivo que foi feito o download sobreescreve sobre o arquivo C:\xampp\htdocs\Projeto\project.sql.