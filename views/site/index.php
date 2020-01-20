<?php

/* @var $this yii\web\View */

$this->title = 'PlantSoft';
?>

<body>
<div class="site-index">
    <!--<div class="container bg bg-info" style="background-image: url('https://i.ytimg.com/vi/rR4wOviXFMI/maxresdefault.jpg'); background-repeat: no-repeat; background-size: cover; background-position: left;">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 style="color: white">Consigue una planta</h1>

                    <p class="lead" style="color: white">Compra tu propia planta ornamental en linea facilemte.</p>

                </div>
            </div>
        </div>
    </div>-->

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

        <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="images\calendula.jpg" alt="Calendula" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Calendula</h3>
                        <p>Calendula officinalis, hierba aromatica</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images\rosaBlanca.jpg" alt="Rosa" style="width:100%;">
                    <div class="carousel-caption">
                    <h3>Rosa Blanca</h3>
                    <p>Dale vida a tu jardin</p>
                </div>
            </div>
    
            <div class="item">
                <img src="images\rojaJardinR.jpg" alt=Rosa style="width:100%;">
                <div class="carousel-caption">
                    <h3>Rosa Roja</h3>
                    <p>Dale un toque especial a tu hogar</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
  </div>
</div>



<br>
    <div class="body-content">


        <div class="container">
            <div class="row">
                
                
            <div class="col p-3 mb-2">
                    <h1 style="text-align: center;">Descuentos</h1>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-3 bg">
                    <div class="row">
                        <div class="col">
                            <h2 style="text-align: center;">Begonia</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid container img-thumbnail"  src="images\begonia.jpg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <p>Precio: </p>
                            <button class="btn responsive btn-succes">Comprar</button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 bg">
                    <div class="row">
                        <div class="col">
                            <h2 style="text-align: center;">Calendula</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid container img-thumbnail"  src="images\calendula.jpg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <p>Precio: </p>
                            <button class="btn responsive btn-succes">Comprar</button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 bg">
                    <div class="row">
                        <div class="col">
                            <h2 style="text-align: center;">Rosa 'Double Delight'</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid container img-thumbnail"  src="images\rosaDouble Delight.jpg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <p>Precio: </p>
                            <button class="btn responsive btn-succes">Comprar</button>
                        </div>
                    </div>

                </div>
                
               

                <div class="col-lg-3 bg">
                    <div class="row">
                        <div class="col">
                            <h2 style="text-align: center;">Rosa Blanca</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid container img-thumbnail"  src="images\rosaBlanca.jpg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <p>Precio: </p>
                            <button class="btn responsive btn-succes">Comprar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="images\rosaBlanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rosa Blanca</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="images\rosaBlanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rosa Blanca</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="images\rosaBlanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rosa Blanca</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="images\rosaBlanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rosa Blanca</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="images\rosaBlanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rosa Blanca</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="images\rosaBlanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rosa Blanca</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="images\rosaBlanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rosa Blanca</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="images\rosaBlanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rosa Blanca</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="images\rosaBlanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rosa Blanca</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>
</div>

        

        
<br>
</body>


 