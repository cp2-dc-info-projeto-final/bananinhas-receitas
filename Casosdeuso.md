<h1>CASOS DE USO:</h1>
<h3>CDU 01 - Cadastro de Pessoa física</h3>


Atores: Qualquer indivíduo


Pré-Condições: Possuir um e-mail ou telefone válidos.


Fluxo Principal:
1)
 O indivíduo entra com os dados telefone ou E-mail e senha.


2) Após a entrada de dados o sistema fará uma checagem, caso haja uma conta utilizando os dados o mesmo enviará uma mensagem indicando o erro.
Se não houver nenhum erro o sistema fará o cadastro conforme os dados do usuário. Ao término de todo o processo o usuário deverá ler e aceitar os termos de uso.

<h3>CDU 02- Login </h3>


Atores: Estar logado


Pré-Condições: Possuir um cadastro no site.



Fluxo Principal:

1) O usuário entra com os dados cadastrados no site, CPF ou  email ou  telefone e senha. Caso haja consonância com dados cadastrados ele poderá entrar em sua conta.

 
2) Será redirecionado para a home do site. Todos os usuários possuem a mesma home, não sendo influenciadas por histórico de pesquisas

<h3>CDU 03- Pesquisar por Ingredientes.</h3>
 

Atores: Cliente


Pré-Requisitos: Não possui 



Fluxo Principal:


1)  O usuário conseguirá pesquisar receitas levando em conta os ingredientes que o mesmo possui. O site fará uma concatenação e mostrará as receitas possíveis, caso não haja nenhuma receita condizente com os ingredientes no nosso banco de dados o site mostrará um pop-up de erro.



<h3>CDU 04- Pesquisar por receitas.</h3>


Atores: 


Pré-Requisitos: Não possui 



Fluxo Principal:


O usuário conseguirá pesquisar receitas levando em conta o título da mesma.
 caso não haja nenhuma receita condizente com o título no nosso banco de dados o site mostrará uma mensagem "Não encontrado".



<h3>CDU 05- Adicionar receitas.</h3>
.


Atores: Usuário cadastrado


Pré-Requisitos: Estar logado.



Fluxo Principal:





O UC(usuário cadastrado) poderá adicionar  receitas de acordo com os termos de uso do site, não contendo nenhum tipo de quebra ao temos de uso no título e somente com ingredientes já presentes no catálogo do site. Dado o fato de que haja algum ingrediente faltando o site mostrará a seguinte mensagem: “Deseja acrescentar algum ingrediente ao banco de dados do site? “.  Caso o  usuário quebre alguma das diretrizes o site mostrará uma mensagem de erro. 

 








<h3>CDU 06- Adicionar ingredientes.</h3>
.


Atores: Usuário cadastrado


Pré-Requisitos: Estar logado.



Fluxo Principal:





1)O UC(usuário cadastrado) poderá adicionar ingredientes de acordo com os termos de uso do site, não contendo nenhum tipo de quebra ao temos de uso em quaisquer ingredientes. Caso o usuário quebre alguma das diretrizes o site mostrará uma mensagem de erro.

