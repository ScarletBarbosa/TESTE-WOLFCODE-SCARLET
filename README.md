# Resolução Teste WolfCode


### Tela Inicial onde e feito a inserção dos dados pelo usuario e em seguida enviado ao banco de dados:
![image](https://github.com/ScarletBarbosa/TESTE-WOLFCODE-SCARLET/assets/55628779/7fa7aaeb-e1ca-4071-b071-7a448e4ea709)

### Tela de exibição de todos os dados cadastrados no banco de dados:
![image](https://github.com/ScarletBarbosa/TESTE-WOLFCODE-SCARLET/assets/55628779/4683b3c2-4206-4d87-941c-dab6964051c2)

### Tela de edição dos dados e inserção no banco de dados:
![image](https://github.com/ScarletBarbosa/TESTE-WOLFCODE-SCARLET/assets/55628779/85d9deee-43a0-4071-8891-a519b9bcc60e)

### Tabela 'users' do banco de dados:
![image](https://github.com/ScarletBarbosa/TESTE-WOLFCODE-SCARLET/assets/55628779/6b77111d-52c8-4cdd-8ca6-a1eb0926955f)

# Respostas questionário:

## HTML 

a) O que é HTML? Qual a sua importância no desenvolvimento web?
> HTML é a sigla para (HyperText Markup Language). O HTML não é uma limguagem de programação, sendo uma linguagem de marcação de textos, possiblitando a estruturação de seções, elementos, imagens, seções dentre outros.
Dentre algumas das vantagens do HTML podemos citar: código aberto, funcionabilidade e suporte em todos os navegadores, amplamente difundido, diversidade de recursos, facil integracao com back-end.
  
b) Quais são as principais tags HTML utilizadas para definir a estrutura de uma página web?
Dentre as principais podemos listar:

```
 <header></header>      - Tag que define o cabeçalho da página.
 <body></body>          - Tag do corpo da página.
 <main></main>          - Tag do conteúdo principal do corpo <body> da página.
 <footer></footer>      - Tag de rodapé.
 <section></section>    - Tag que definem a seção de uma página.
 <article></article>    - Tag definem um artigo, são utilizadas para separar o conteúdo da sua página.
 <nav></nav>            - Tag que define conteúdo de navegação, menus.
 <div></div>            - Tag definem as divisões de uma página.
```

## CSS 

a) O que é CSS? Qual a sua importância no desenvolvimento web?
> CSS (Cascading Style Sheets) é uma linguagem de estilo utilizada para definir a aparência e o layout de elementos em uma página da web. Sua importância no desenvolvimento web é crucial, pois permite separar a estrutura do conteúdo HTML da sua apresentação visual. Com o CSS, é possível personalizar cores, fontes, tamanhos, espaçamentos e outros aspectos visuais, proporcionando uma experiência estética e consistente aos usuários. Além disso, o CSS facilita a manutenção e o reuso de estilos, tornando o desenvolvimento mais eficiente.

b) Qual é a diferença entre classes e IDs em CSS? Quando é mais adequado usar uma ou outra?
> As classes e os IDs são seletores usados em CSS para identificar e estilizar elementos HTML. A diferença entre eles é que as classes podem ser aplicadas a múltiplos elementos, enquanto os IDs são únicos e devem ser usados apenas uma vez por página.

> As classes são mais adequadas quando você deseja aplicar um estilo a vários elementos semelhantes em uma página, como um grupo de botões ou parágrafos. Elas permitem reutilização e flexibilidade.

> Os IDs são mais apropriados para identificar elementos específicos e aplicar estilos exclusivos a eles. É comum usar IDs para elementos como cabeçalhos, rodapés ou seções importantes, onde o estilo precisa ser exclusivo.

> Em resumo, use classes quando desejar aplicar estilos a vários elementos semelhantes e IDs quando precisar estilizar um único elemento de forma exclusiva.

## JavaScript 

a) O que é JavaScript? Qual a sua importância no desenvolvimento web?
> JavaScript é uma linguagem de programação utilizada no desenvolvimento web para tornar as páginas interativas e dinâmicas. Sua importância é fundamental, pois permite adicionar funcionalidades como validação de formulários, animações, interações em tempo real e atualizações de conteúdo sem precisar recarregar a página. Com o JavaScript, é possível criar experiências mais envolventes e responsivas para os usuários.

b) Qual é a diferença entre variáveis var, let e const em JavaScript? 
> Em JavaScript, variáveis são usadas para armazenar valores. A diferença entre var, let e const é a forma como cada uma delas trata o escopo e a reatribuição de valores.

> Var é uma variável de escopo global ou de função e permite a reatribuição de valores.

> Let é uma variável de escopo de bloco e permite reatribuição de valores.

> Const é uma variável de escopo de bloco e não permite a reatribuição de valores, tornando-a ideal para constantes.

c) Explique a diferença entre == e === em JavaScript.
>Em JavaScript, == e === são operadores de comparação usados para verificar igualdade entre valores.

> == verifica a igualdade de valores, permitindo conversões de tipos implícitas. Por exemplo, 2 == '2' seria considerado verdadeiro, pois o operador == converte o valor string para um número e os compara.

> === verifica a igualdade de valores e tipos estritos, sem fazer conversões implícitas. Por exemplo, 2 === '2' seria considerado falso, pois o operador === compara os valores e tipos exatos, sem realizar conversões.

> Em geral, é recomendado usar o operador ===, pois ele faz comparações mais precisas e evita resultados inesperados devido a conversões automáticas de tipos.

## PHP 

a) O que é PHP? Qual a sua importância no desenvolvimento web?
> PHP é uma linguagem de programação utilizada no desenvolvimento web para criar sites dinâmicos e interativos. Sua importância é fundamental, pois permite interagir com bancos de dados, enviar e-mails, criar formulários, gerar conteúdo dinâmico e muito mais. Com o PHP, é possível criar páginas web dinâmicas e personalizadas de forma rápida e eficiente.

b) Qual é a diferença entre uma variável de escopo global e uma variável de escopo local em PHP? 
> Uma variável de escopo global em PHP é definida fora de qualquer função e pode ser acessada e modificada em qualquer parte do código. Já uma variável de escopo local é definida dentro de uma função e só pode ser acessada e modificada dentro dessa função. Variáveis globais podem ter um escopo mais amplo e podem ser usadas em todo o código, enquanto as variáveis locais são restritas à função em que foram definidas.

c) Qual é a função do operador ternário em PHP?
> O operador ternário em PHP é uma forma condicional compacta que permite atribuir valores com base em uma condição. Ele possui a seguinte sintaxe: "condição ? valor_se_verdadeiro : valor_se_falso". Dependendo da condição, o operador ternário retorna um dos dois valores especificados. É uma alternativa concisa ao uso do "if" e é útil para tomar decisões simples e atribuir valores com base em uma única condição.

## Git 

a) O que é Git? Qual a sua importância no desenvolvimento de software?
> Git é um sistema de controle de versão distribuído amplamente utilizado no desenvolvimento de software. Ele permite que os desenvolvedores rastreiem e gerenciem as alterações feitas no código-fonte ao longo do tempo. A importância do Git reside na sua capacidade de facilitar o trabalho colaborativo, o controle de versões, a criação de branches para desenvolvimento paralelo, a fusão de alterações e o controle preciso do histórico do projeto. Ele proporciona maior eficiência, rastreabilidade e segurança durante o desenvolvimento de software.

b) Qual é a diferença entre git pull e git fetch?
> Git pull combina as ações de git fetch e git merge. Ele busca as atualizações do repositório remoto e incorpora essas alterações automaticamente no branch atual.

> Git fetch apenas busca as atualizações do repositório remoto, mas não incorpora essas alterações automaticamente. Isso permite visualizar as alterações antes de decidir como integrá-las ao branch local.

> Em resumo, git pull busca e incorpora as alterações automaticamente, enquanto git fetch apenas busca as alterações, permitindo uma integração manual e mais controlada.

c) O que é o git merge e quando é necessário utilizá-lo?
> Git merge é um comando que integra as alterações de um branch em outro. É necessário utilizá-lo quando se deseja combinar o trabalho de diferentes branches, unindo as alterações e criando um novo commit com as modificações combinadas. Isso é útil quando se trabalha em paralelo em diferentes funcionalidades ou quando se deseja incorporar uma ramificação de desenvolvimento ao branch principal.

## MySQL 

a) O que é MySQL? Qual a sua importância no desenvolvimento web?
> MySQL é um sistema de gerenciamento de banco de dados relacional amplamente utilizado no desenvolvimento web. Ele permite armazenar, organizar e acessar dados de forma eficiente. Sua importância no desenvolvimento web reside na sua capacidade de lidar com grandes volumes de dados, fornecer consultas rápidas e suportar múltiplos usuários simultâneos. O MySQL é uma peça fundamental para o armazenamento e recuperação de informações em aplicativos web, como sites e sistemas de gerenciamento de conteúdo.

b) Qual é a diferença entre INNER JOIN e OUTER JOIN em MySQL?
>INNER JOIN e OUTER JOIN são tipos de operações de junção utilizadas no SQL para combinar dados de duas ou mais tabelas.

> INNER JOIN retorna apenas os registros que têm correspondência nas duas tabelas, ou seja, apenas os registros que atendem à condição de junção especificada.

> OUTER JOIN, por outro lado, retorna todos os registros de uma tabela, mesmo que não haja correspondência na outra tabela. Existem três tipos de OUTER JOIN: LEFT JOIN, RIGHT JOIN e FULL JOIN.

> Em resumo, INNER JOIN retorna apenas registros correspondentes, enquanto OUTER JOIN retorna todos os registros, mesmo que não haja correspondência em uma tabela.

c) Como funciona a cláusula WHERE em uma consulta SQL?
> A cláusula WHERE é usada em uma consulta SQL para filtrar os resultados com base em uma condição específica. Ela especifica os critérios que os registros devem atender para serem retornados na consulta. A cláusula WHERE pode conter operadores de comparação, como igual (=), maior que (>), menor que (<), entre outros, e também operadores lógicos, como AND e OR. Ela ajuda a refinar os resultados da consulta, exibindo apenas os registros que atendem aos critérios definidos.
