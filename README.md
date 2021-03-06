### Desafio de Programação
O desafio consistia na criação de um sistema de controle de clientes e suas respectivas placas de carro.

##### O que era necessário construir:
- ID;
- Nome;
- Telefone;
- CPF;
- Placa do Carro;

##### API REST:
Para o gerenciamento dessa base, é necessário contruir uma API REST contendo os seguintes endpoints:
| Método   |      Endpoint      |  Descrição |
|----------|:-------------:|------:|
| POST |  /cliente | Cadastro de novo cliente. |
| PUT  |  /cliente/{id}  |   Edição de um cliente já existente. |
| DELETE | /cliente/{id} |    Remoção de um cliente existente. |
| GET | /cliente/{id} |    Consulta de dados de um cliente. |
| GET | /consulta/final-placa/{numero} |    Consulta de todos os clientes cadastrados na base, onde o último número da placa do carro é igual ao informado. |

##### Regras:
- Você deve construir o seu ambiente utilizando o <b>docker</b> e <b>docker-compose</b> (você pode utilizar uma receita de ambiente pronta, encontrada na internet);
- Você deve utilizar um framework <b>PHP</b> de sua escolha;
- Você será avaliado pela lógica e leitura do seu código, seguindo os princípios <b>SOLID</b> e <b>PSR</b>.

---

### Antes de Começar
Antes de começar tudo, decidi analisar essa estrutura que foi sugerida e achei que devesse mudá-la. Como sabemos, um <b>cliente</b> pode possuir mais de um <b>veículo</b> cadastrado na base de dados.

Por esse motivo, decidi separar o desenvolvimento em duas tabelas e fazer o relacionamento entre elas, para que fizesse mais sentido.

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

### Listagem de Métodos
Como alterei a estrutura do desafio, tive que alterar alguns métodos e criar novos para que fizesse sentido a aplicação. Ficou assim:
##### Funções - Clientes
| Método   |      Endpoint      |  Descrição |
|----------|:-------------:|------:|
| POST |  /cliente | Cadastro de novo cliente. |
| GET  |  /cliente  |   Mostra todos os clientes cadastrados. |
| PUT | /cliente/{id} |    Atualiza os dados do cliente. |
| DEL | /cliente/{id} |    Remoção de um cliente existente. |
| GET | /cliente/{id} |    Pesquisa por um cliente específico. |
##### Funções - Veículos
| Método   |      Endpoint      |  Descrição |
|----------|:-------------:|------:|
| POST |  /cliente/{id}/veiculo | Cadastro de novo veículo. |
| GET  |  /veiculo  |   Mostra todos os veículos cadastrados. |
| GET | /cliente/{id}/veiculos |    Mostra todos dos veículos de um determinado cliente. |
| PUT | /veiculo/{id} |    Altera os dados do veículo. |
| DEL | /consulta/final-placa/{numero} |    Remove o veículo dos registros. |
| GET | /consulta/final-placa/{numero} |    Consulta todos os veículos cadastrados na base e retorna o carro cuja placa tenha o último número igual ao informado. |

### Testes da Aplicação
<p align="center">
<img src="imagens/postman.png" width="300">
</p>
Para realização dos testes eu utilizei o <b>Postman</b> como REST client, para enviar requisições e testar todas as funções da aplicação. Segue abaixo um print de todos os métodos em funcionamento.

- <b>POST</b> - Cadastrando Cliente <b>"Leonardo Lima"</b>
<img src="imagens/cadastrar_cliente.PNG">

- <b>GET</b> - Mostrando Clientes Cadastrados
<img src="imagens/show_clients.PNG">

- <b>PUT</b> - Atualizando Cadastro do Cliente <b>"Leonardo Lima"</b>
<img src="imagens/update_cliente.PNG">

- <b>DEL</b> - Excluindo Cliente <b>"Pedro Alvares"</b>
<img src="imagens/remove_cliente.PNG">


- <b>GET</b> - Pesquisando Cliente <b>ID = 5</b>
<img src="imagens/get_cliente.PNG">

- <b>POST</b> - Cadastrando Veículo para o Cliente <b>"Leonardo Rocha Lima"</b>
<img src="imagens/cadastrar_veiculo.PNG">

- <b>GET</b> - Mostrando Veículos Cadastrados
<img src="imagens/show_veiculos.PNG">

- <b>GET</b> - Mostrando Veículos do Cliente <b>"Leonardo Rocha Lima"</b>
<img src="imagens/show_veiculos_cliente.PNG">

- <b>PUT</b> - Alterando dados do Veículo
<img src="imagens/update_veiculo.PNG">

- <b>DEL</b> - Excluindo Veículo
<img src="imagens/remove_veiculo.PNG">

- <b>GET</b> - Consultar Placa <b>Final = 3</b>
<img src="imagens/consulta_placa.PNG">