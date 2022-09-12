<nav>
    <ul>
        <div>
            <li><a href="index.php"> <img src="assets/img/topferro.png" class="logoimg"></a></li>
        </div>
        <div class="search-box">
            <form action="../Projeto_Integrador/paginas/busca.php">
                <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
            </form>
            <a href="#" class="search-btn">
                <img src="assets/img/lupa.png" alt="lupa" height="20" width="20">
            </a>
        </div>

        <li>
            <p>Espaços</p>
            <div class="sub-menu-1">
                <ul>
                    <li> <a href="sala.php"><img src="assets/img/sala2.png">Salas</a></li>
                    <li> <a href="cozinha.php"> <img src="assets/img/cozinha2.png">Cozinhas</a></li>
                    <li> <a href="quarto.php"><img src="assets/img/dormitorio2.png"> Dormitórios</a></li>
                </ul>
            </div>
        </li>
        <li>
            <p>Entre em contato</p>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="topferroatendimento@gmail.com" target="_blank"><img src="assets/img/gmail.png">Email</a> </li>
                    <li> <a href="https://www.instagram.com/topferrojoinville/" target="_blank"><img src="assets/img/instagram.png">Instagram</a></li>
                    <li> <a href="https://api.whatsapp.com/send?phone=554799255732" target="_blank"><img src="assets/img/whatsapp.png">Whatsapp</a></li>
                    <li> <a href="https://www.facebook.com/estruturaparamoveis/" target="_blank"><img src="assets/img/facebook.png">Facebook</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>


