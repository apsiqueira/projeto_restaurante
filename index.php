<?php include "header.php"; ?>
<?php include "conection.php"; ?>



<div class="welcome-gallery small-12 columns">



    <div class="photo-section small-12 columns">
        <img class="homepage-main-photo" src="img/main-photo.jpg" alt="slider imagem 1">
    </div>

    <div class="main-section-title small-10 columns">
        <div class="table">
            <div class="table-cell">
                <h1>Bem vindo ao Pablo Bar</h1>
                <h2>A cozinha tradicional na Brasa(Portifolio)</h2>

            </div>
        </div>

    </div>

    <div class="photo-gradient">

    </div>

</div>




<div class="about-us small-11 large-12 columns no-padding small-centered">

    <div class="global-page-container">
        <div id="about-us" class="about-us-title small-12 columns no-padding">
            <h3>Sobre Nós</h3>
            <hr>
            </hr>
        </div>


        <img src="img/fachada.jpg" alt="fachada do restaurante">


        <div class="about-us-text">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus leo mi,
                condimentum ac convallis non, porta ac nibh. Morbi volutpat nibh lectus, quis
                convallis nunc rutrum vitae. Aenean volutpat aliquam elementum. Nunc consequat
                elit odio, vitae suscipit nunc pretium eu. Aenean vitae lacus auctor, condimentum
                ipsum at, suscipit erat. Donec dapibus ullamcorper bibendum. Vestibulum posuere
                augue in lectus dictum tincidunt. Pellentesque ornare eget enim sed dignissim.
                Sed nec nisi suscipit, feugiat risus ac, lacinia elit.
            </p>

            <p>
                Duis fermentum leo enim, eget dignissim dolor imperdiet at. Sed ut rutrum lacus.
                Aenean eleifend, urna eu dapibus imperdiet, turpis diam tristique mauris, nec
                luctus ante massa eu arcu. Duis tempor risus quis tellus posuere eleifend.
                Donec fringilla nulla ac odio sagittis tincidunt. Phasellus tempus id felis et
                finibus. Aenean felis ligula, varius nec varius at, feugiat nec felis. Morbi
                blandit sapien vel justo consequat laoreet.</p>
        </div>

    </div>

</div>


<div class="cardapio small-11 large-12 columns no-padding small-centered">
    <div class="global-page-container">
        <div class="cardapio-title small-12 columns no-padding">
            <h3>Cardapio</h3>
            <hr>
            </hr>
        </div>
    </div>

    <div class="global-page-container">
        <div class="slider-cardapio">
            <div class="slider-002 small-12 small-centered columns">

                <?php

                $result = get_destaque();

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) { ?>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                            <div class="cardapio-item">
                                <a href="prato.php?prato=<?php echo $row['codigo']; ?>">

                                    <div class="cardapio-item-image">
                                        <img src="img/cardapio/<?php echo $row['codigo'] ?>.jpg" alt="salmao" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title"><?php echo $row['nome'] ?></div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>



                <?php }
                } else {

                    echo "Não ha Destaques";
                }
                echo "<br>";




                ?>








            </div>
        </div>
    </div>
</div>

<div id="contact-us" class="contact-us small-11 large-12 columns no-padding small-centered">

    <div class="global-page-container">
        <div class="contact-us-title small-12 columns no-padding">
            <h3>Faça a sua reserva</h3>
            <hr>
            </hr>
        </div>


        <div class="reservation-form small-12 columns no-padding">

            <form action="index.php" method="POST">

                <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">

                    <input type="text" name="nome" class="field" placeholder="Nome completo " required />

                    <input type="email" name="email" class="field" placeholder="E-mail" required />

                    <textarea type="text" name="mensagem" class="field" placeholder="Mensagem"></textarea>


                </div>

                <div class="form-part2 small-12 large-3 xlarge-3 end columns no-padding">
                    <input type="text" name="telefone" class="field" placeholder="Telefone" required />

                    <input type="datetime-local" name="data" class="field" placeholder="Data e hora" required />

                    <input type="text" name="numPessoas" class="field" placeholder="Número de pessoas" required />

                    <input type="submit" name="submit" value="Reservar" />

                </div>


            </form>

            <PRE>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    




}

?>
            </PRE>

        </div>

    </div>
</div>
<?php include "footer.php"; ?>