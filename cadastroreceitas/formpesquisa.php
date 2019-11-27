<?php
if (session_status() == false) {
    session_start();
    echo"bla bla bla";
}
?> 
<html lang="pt-BR" dir="ltr">
      <head>
    
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="style.css">
   
          <title> Pesquisa </title>
     </head>
 <body>
 
<div class="nav-alto">
       <section class="nav">
           <div class="container">
               <div class="imgkj">
                  
               </div>
               <div class="lista">
                <nav class="menu">
                  <ul>
                    <li>
                      <a href="..\..\cadastroreceitas\formpesquisa.php" title="Receitas"> Busca(Nome)</a>
                    </li>
                    <li>
                      <a href="..\..\cadastroreceitas\buscain.php" title="Ingredientes">Busca(Ingredientes)</a>
                    </li>
                    <li>
                      <a href="#conteudocinza4" title="Sobre"> Sobre nós </a>
                    </li>
                  </ul>
                </nav>
               </div>
               <div class="logincadastro">

               <a href="..\loginCasdastro.php" class="logincadastro" title="Cadastrologin">         
               Logar ou Cadastrar
               </a>
         <a href="..\userorlogin.php" class="logincadastro" title="Cadastrologin">          
               Área do Usuário
               </a>
               </div>
           </div>
       </section>
    </div>

    <form method="POST" action="pesquisa.php" >
	

	
  <div class="buscar-caixa">
 
   <input type="text" name="pesquisar" class="buscar-txt" placeholder="Buscar..."/>
   <button type="submit">
   <a class="buscar-btn">
    <i class="fas fa-search"></i>

   </a>
  </div>
  </form>
 </body>
</html>