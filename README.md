<h1 align="center">Utilização básica do PHPUnit e Docker</h1>
<p>
</p>

## Instalação

- Após clonar o projeto, abra o powershell e navegue até o diretório onde ele se encontra;
- Rode um "docker-compose up -d" para instalar as imagens;
- Navegue até a pasta public do projeto;
- Dentro de public, utilize composer install para instalar o PHPUnit;
- Ainda em public, para acionar o teste, utilize "vendor\bin\phpunit tests" (Se estiver no linux, mudar a barra para "/");
- Assim que forem rodado os testes, será exibido o retorno no terminal;
<img src="phpunit.PNG">
- Caso queira testar o projeto via nginx, acesse "localhost:8080".
<img src="web.PNG">
