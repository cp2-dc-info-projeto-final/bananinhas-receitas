<?php
     
   include ("links.php");
?>

<!Doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> Bananinhas Receitas </title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<nav class="navbar navbar-expand-lg bg-primary">

  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!-- Menu dropdown -->

       <div class="row">
       <div class="d-lg-none">
       <a href="../../logincadastro/home/home.php"><img src="../../imagens/logo.png"></a>
       </div>
       
       <div class="d-lg-none">
       <a class="nav-link d-lg-none" href="../../logincadastro/userorlogin.php"><i class="fas fa-user d-lg-none"></i></a>
      </div>

       <div class="d-lg-none">
        <a class="nav-link d-lg-none" href="../../logincadastro/logincasdastro.php"><i class="fas fa-sign-in-alt d-lg-none"></i></a>
       </div>
       </div>

  <!-- Menu categorias mobile -->

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">


      <ul class="navbar-nav mx-auto">

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="../../cadastroreceitas/buscain.php"><i class="fas fa-search fa-2x d-lg-none"></i> <span>Pesquisa por ingrediente</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="../../cadastroreceitas/formpesquisa.php"><i class="fas fa-search fa-2x d-lg-none"></i> <span>Pesquisa por nome</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-scroll fa-2x d-lg-none"></i> <span> Catálogo</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-heart fa-2x d-lg-none"></i> <span>Favoritos</span></a>
      </li>
        </ul>

       



        <div class="container">
        <div class="row">
        
        <div class="col-6">
        <div class="pt-2 d-none d-lg-block">
        <a href="../../logincadastro/home/home.php"><img src="../../imagens/logo.png"></a>
        </div>
        </div>
      
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Pesquisar">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        <a class="nav-link" href="#"><i class="fas fa-search"></i>
        <i class="fas fa-angle-down"></i></a>
        </button>
        </div>

        <div class="pt-2 d-none d-lg-block" data-toggle="tooltip" title="Página de usuário">
        <a href="../../logincadastro/userorlogin.php" class="nav-link" href="#"><i class="fas fa-user"></i></a>
        </div>


        <div class="pt-2 d-none d-lg-block" data-toggle="tooltip" title="Entrar">
        <a href="../../logincadastro/logincasdastro.php" class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i></a>
        </div>

        </div>
        </div>
</nav>

<body>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Pesquisar por:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="../../cadastroreceitas/formpesquisa.php">Nome de receita</a></button>
        <button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="../../cadastroreceitas/buscain.php">Ingrediente chave</a></button>
      </div>
    </div>
  </div>
</div>


<div class="submenu">
<div class="text-light pt-3">
           <div class="container">
               <div class="row">
                   <div class="col-md-4 pb-2">
                       <div class="media">
                            <i class="fas fa-play-circle mr-3 display-4" ></i>
                            <div class="media-body text-light">
                              <h5 class="mt-0 ">Pesquisa rápida</h5>
                              Encontre inúmeras receitas através da pesquisa por ingrediente ou nome.
                            </div>
                          </div>
                   </div>

                   <div class="col-md-4 pb-3">
                        <div class="media">
                             <i class="fas fa-ribbon mr-3 display-4" ></i>
                             <div class="media-body text-light">
                               <h5 class="mt-0 ">Faça parte da equipe</h5>
                               Cadastre-se em nosso site e tenha acesso a funções exclusivas do site.
                             </div>
                           </div>
                    </div>
                   
                   <div class="col-md-4 pb-3">
                        <div class="media">
                             <i class="fas fa-spinner mr-3 display-4" ></i>
                             <div class="media-body text-light">
                               <h5 class="mt-0">Interaja com o site</h5>
                               Pesquise e cadastre as receitas que você conhece.
                             </div>
                           </div>
                    </div>              
               </div>
           </div>
          </div>
          </div>










<div class="cor-aba">
<div class="container pt-5">
   <div class="row">
      <div class="col-sm">
         <h5 class="border-bottom pb-2 border-white text-white"><i class="fas fa-star"></i> Receitas em destaque</h5>
      </div>
   </div>
</div>


<div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 rounded">
                <div class="hover_area_1 hover_area">
                    <div class="hover_img_1">
                        <img src="bolobanana.jpg" class="img-fluid" alt="">
                        <div class="hover_overlay_1"></div>
                        <div class="hover_content_1">
                            <h4>Bolo de banana</h4>
                            <p class="text-white"> Por: Bananinhas receitas </p>
                            <ul>                      
                                <li><a href="../../cadastroreceitas/paginareceita.php?id=1"><i class="fas fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="hover_area_1 hover_area">
                    <div class="hover_img_1">
                        <img src="bananasorvete.jpg" class="img-fluid" alt="">
                        <div class="hover_overlay_1"></div>
                        <div class="hover_content_1">
                            <h4>Sorvete com banana</h4>
                            <p class="text-white"> Por: Bananinhas receitas </p>
                            <ul>                 
                              <li>><a href="../../cadastroreceitas/paginareceita.php?id=5"><i class="fas fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="hover_area_1">
                    <div class="hover_img_1">
                        <img src="torresmo.jpg" class="img-fluid" alt="">
                        <div class="hover_overlay_1"></div>
                        <div class="hover_content_1">
                            <h4>Torresmo</h4>
                            <p class="text-white"> Por: Bananinhas receitas </p>
                            <ul>                   
                             <li><a href="../../cadastroreceitas/paginareceita.php?id=7"><i class="fas fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 rounded">
                <div class="hover_area_1 hover_area">
                    <div class="hover_img_1">
                        <img src="arrozcenoura.jpg" class="img-fluid" alt="">
                        <div class="hover_overlay_1"></div>
                        <div class="hover_content_1">
                            <h4>Arroz com cenoura</h4>
                            <p class="text-white"> Por: Bananinhas receitas </p>
                            <ul>
                                 <li><a href="../../cadastroreceitas/paginareceita.php?id=16"><i class="fas fa-search"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="hover_area_1 hover_area">
                    <div class="hover_img_1">
                        <img src="coxinha.jpg" class="img-fluid" alt="">
                        <div class="hover_overlay_1"></div>
                        <div class="hover_content_1">
                            <h4>Coxinha</h4>
                            <p class="text-white"> Por: Bananinhas receitas </p>
                            <ul>
                            <li><a href="../../cadastroreceitas/paginareceita.php?id=6"><i class="fas fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="hover_area_1">
                    <div class="hover_img_1">
                        <img src="pastel.jpg" class="img-fluid" alt="">
                        <div class="hover_overlay_1"></div>
                        <div class="hover_content_1">
                            <h4>Pastel</h4>
                            <p class="text-white"> Por: Bananinhas receitas </p>
                            <ul>                            
                             <li><a href="../../cadastroreceitas/paginareceita.php?id=9"><i class="fas fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="time">
          <div class="container">
            <h1 class="text-white"> Nossa equipe </h1>

          <div class="row">
            <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="thaynan4.jpg" class="img-responsive">
                <ul>
                  <a href="#"><li><i class="fab fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fab fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fab fa-linkedin"></i></li></a>
                </ul>
              </div>
                 <h2 class="text-white"> Thaynan Leocádio </h2>
                 <h3 class="text-white"> HTML, CSS, PHP e BD </h3>
                 <p class="text-white"> Criou o modelo base para as páginas e consertou alguns erros que apareceram no decorrer do desenvolvimento em php e fez insert de receitas </p>
            </div>


               <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="felipe4.jpg" class="img-responsive">
                <ul>
                  <a href="#"><li><i class="fab fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fab fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fab fa-linkedin"></i></li></a>
                </ul>
              </div>
                 <h2 class="text-white"> Felipe Siqueira </h2>
                 <h3 class="text-white"> PHP e BD </h3>
                 <p class="text-white"> Com PHP, criou as diversas funções existentes no site, como o cadastro de usuários, a pesquisa de receitas e fez insert de receitas </p>
            </div>


               <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="uilson4.jpg" class="img-responsive">
                <ul>
                  <a href="#"><li><i class="fab fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fab fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fab fa-linkedin"></i></li></a>
                </ul>
              </div>
                 <h2 class="text-white"> Uilson Gabriel </h2>
                 <h3 class="text-white"> PHP, BD, HTML e CSS </h3>
                 <p class="text-white"> Com PHP, criou as principais funcionalidades da área do usuário, contribuiu para o modelo base das páginas e fez insert de receitas </p>
            </div>


             <div class="col-md-3 profile text-center">
              <div class="img-box">
                <img src="uilson2.jpg" class="img-responsive">
                <ul>
                  <a href="#"><li><i class="fab fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fab fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fab fa-linkedin"></i></li></a>
                </ul>
              </div>
                 <h2 class="text-white"> Matheus Pereira </h2>
                 <h3 class="text-white"> HTML, CSS e BD </h3>
                 <p class="text-white"> Tornou o site responsivo e usual. Contribuiu para a criação do design e fez insert de receitas </p>
            </div>
          </div>
          </div>
        </section>
</div>

</body>
</html>