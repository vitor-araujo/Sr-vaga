<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sr. Vaga - Vagas de emprego para os mais experientes.</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
<div id="nav"></div>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Senhoras e Senhores, somos uma plataforma para compartilhar vagas de emprego para pessoas com mais experiência.</h1>
                            <a href="submit.php" class="btn btn-outline btn-xl page-scroll">Anuncie uma vaga aqui!</a>
                            <a href="vagas.php" class="btn btn-outline btn-xl page-scroll">Procure por vagas aqui!</a>
                        </div>
                    </div>
                </div>
                <!--Feed de vagas-->
                <div class="col-sm-5">
                    <div class="device-container">
                        <h4 class="new-icon">
                             Vagas recentes
                         </h4>
                    
                     <div>
                     <?php 
                     include('feed.php'); 
                     ?>
                    </div>
                    <a class="btn btn-outline" href="vagas.html">Mais vagas</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Nós <i class="fa fa-heart"></i> compartilhar!</h2>
            <div class="addthis_inline_share_toolbox_pd1k"></div>
            
            </div>
        </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>VANTAGENS</h2>
                        <p class="text-muted">Porquê um funcionário mais velho?</p>
                        <hr>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! 
                                    -->
                                    <img src="img/worker.jpg" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-target text-primary"></i>
                                    <h3>Tomada de decisão</h3>
                                    <p class="text-muted">Funcionários mais experientes normalmente lidam melhor com decisões sob pressão</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-link text-primary"></i>
                                    <h3>Resiliência</h3>
                                    <p class="text-muted">Os mais experientes estão mais acostumados com cobrança, erros e problemas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-equalizer text-primary"></i>
                                    <h3>Balanço</h3>
                                    <p class="text-muted">Além de equilibrar as equipes, profissionais mais velhos guiam e ensinam o tempo todo</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-graph text-primary"></i>
                                    <h3>Rentabilidade</h3>
                                    <p class="text-muted">Para se manter no mercado, os profissionais se qualificam constatemente, trazendo um grande valor para dentro das empresas quando contratados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<!--
    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Stop waiting.<br>Start building.</h2>
                <a href="#contact" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
-->
    <section id="download full" class="contact text-center">
    <div class="container">
    <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">Ajude-nos a expandir!</h2>
                    <p>Compartilhe e ajude quem você conhece a encontrar uma nova carreira depois dos 40, 50, 60, 70...</p>
                    </div>
                </div>
            </div>
            </div>
    </section>



    <footer>
        <div id="full" class="container text-center">
            <p>&copy; 2016 Senhor Vaga. Todos direitos reservados.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>






    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>
    <!--navbar-->
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script>
$.get("nav.html", function(data){
    $("#nav").replaceWith(data);
});
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools Inline small--> 
<!-- Go to www.addthis.com/dashboard to customize your tools  Inline big --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5814ce5990dfe109"></script> 


</body>

</html>
