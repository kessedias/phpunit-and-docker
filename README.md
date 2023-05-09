<h1 align="center">Teste PL - VOXUS 👋</h1>
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

## Observações

Peço desculpas adiantadas caso a configuração do docker e dos testes automatizados tenham ficado grosseiras, pois ainda estou me familiarizando com ambas tecnologias, por não ser do meu uso cotidiano.

_You may NOT use libraries or *language internal functions* that convert the string
to date or that calculates the day number of the year for the developer. You
must create your own logic to solve the problem._

Como nas restrições não cita a proibição de frameworks, eu utilizei o PHPUnit.

Essa restrição me deixou um pouco confuso: Não poder utilizar "funções internas da linguagem" inviabilizaria um pouco o processo, devido o PHP ser uma linguagem de alto nível. Mesmo eu não utilizando as funções de date, ainda usaria outras funções internas. Sendo elas: intval(), checkdate(), array() entre outras. 

Portanto, uma boa lógica as vezes não é escrever um código complexo e com muitas linhas, mas sim, tirar o maior proveito possível da linguagem, utilizando o seu legado e suas facilitações, visando uma boa performance e fácil manutenção.
