### Desafio de Programação
O desafio consistia na criação de um sistema de controle de clientes e suas respectivas placas de carro.

##### O que era necessário construir:
- ID;
- Nome;
- Telefone;
- CPF;
- Placa do Carro;

##### API REST:
Para o gerenciamento dessa base, será necessário contruir uma API REST contendo os seguintes endpoints:
| Método   |      Endpoint      |  Descrição |
|----------|:-------------:|------:|
| POST |  /cliente | Cadastro de novo cliente. |
| PUT  |  /cliente/{id}  |   Edição de um cliente já existente. |
| DELETE | /cliente/{id} |    Remoção de um cliente existente. |
| GET | /cliente/{id} |    Consulta de dados de um cliente. |
| GET | /consulta/final-placa/{numero} |    Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado. |

##### Regras:
- Você deve construir o seu ambiente utilizando o docker e docker-compose (você pode utilizar uma receita de ambiente pronta, encontrada na internet);
- Você deve utilizar um framework PHP de sua escolha;
- Você será avaliado pela lógica e leitura do seu código, seguindo os princípios SOLID e PSR.

---

### Antes de Começar
Antes de começar tudo, decidi analisar essa estrutura que foi sugerida e achei que devesse mudá-la. Como sabemos, um <b>cliente</b> pode possuir mais de um <b>veículo</b> cadastro na base de dados.

Por esse motivo, decidi separar o desenvolvimento em duas tabelas, para que fizesse mais sentido.

Então, esse foi o esboço da aplicação em um Diagrama de Entidade e Relacionamento (DER):
<p align="center">
<img src="imagens/der.png">
</p>

### Framework Escolhido
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"></a></p>

Utilizei o <b>Laravel</b> justamente por estar trabalhando com ele a um tempo, neste caso tenho maior familiaridade com a aplicação.

### Laravel + Docker = Laradock
<p align="center">
<img src="imagens/laradock.png" width="300">
</p>
O <a href="https://laradock.io/">Laradock</a> foi uma forma que encontrei de utilizar o <b>Docker</b> com o <b>Laravel</b>, já que nunca tinha utilizado o <b>Docker</b> anteriormente.