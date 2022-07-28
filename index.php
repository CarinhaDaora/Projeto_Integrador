<?php
include "head.php";
?>


<div>
    <h1 class="texto">TOPFERRO</h1>
    <p class="texto1">Valorizando seu ambiente</p>
</div>

<div class="slider">
    <div class="slides">
        <!--Radio buttons-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--Fim Radio buttons-->


        <!--Slide images-->
        <div class="slide first">
            <img src="assets/img/cinza.jpg" alt="imagem 1">
        </div>
        <div class="slide">
            <img src="assets/img/preto.png" alt="imagem 2">
        </div>
        <div class="slide">
            <img src="assets/img/cinza.jpg" alt="imagem 3">
        </div>
        <div class="slide">
            <img src="assets/img/preto.png" alt="imagem 4">
        </div>
        <!--Fim Slide images-->


        <!--Navegation auto-->
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
    </div>

    <div class="manual-navigation">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
    <!--Fim Navegation auto-->




</div>

<script src="assets/js/script.js"></script>

<section class="flex">
    <div class="titulos">
        <h2>Prateleiras</h2>
        <a href="prateleira.php"><img src="assets/img/cinza.jpg"></a>
    </div>
    <div class="titulos">
        <h2>Armários</h2>
        <a href="armarios.php"><img src="assets/img/cinza.jpg"></a>
    </div>
    <div class="titulos">
        <h2>Decorações</h2>
        <a href="decoracoes.php"><img src="assets/img/cinza.jpg"></a>
    </div>
    <div class="titulos">
        <h2>Exteriores</h2>
        <a href="exteriores.php"><img src="assets/img/cinza.jpg"></a>
    </div>

    <div class="titulos1">
        <h2>Industriais</h2>
        <a href="industriais.php"><img src="assets/img/cinza.jpg"></a>
    </div>
    <div class="titulos1">
        <h2>Escrivaninha</h2>
        <a href="escrivaninha.php"><img src="assets/img/cinza.jpg"></a>
    </div>
    <div class="titulos1">
        <h2>Molduras</h2>
        <a href="molduras.php"><img src="assets/img/cinza.jpg"></a>
    </div>
    <div class="titulos1">
        <h2>Araras</h2>
        <a href="araras.php"><img src="assets/img/cinza.jpg"></a>
    </div>
</section>

<?php
include "footer.php"
?>