<?php include "header.php"; ?>
<<?php include "conection.php" ?> <div class="cardapio-list small-11 large-12 columns no-padding small-centered">

    <div class="global-page-container">
        <div class="cardapio-title small-12 columns no-padding">
            <h3>Cardapio</h3>
            <hr>
            </hr>
        </div>


        <?php

        $result_categorias = get_categorias();





        if ($result_categorias->num_rows > 0) {
            while ($row = $result_categorias->fetch_assoc()) { ?>



                <div class="category-slider small-12 columns no-padding">
                    <h4><?php echo $row["categoria"] ?></h4>

                    <div class="slider-cardapio">
                        <div class="slider-002 small-12 small-centered columns">
                                <?php

                                        $result_todos = get_all_pratos_for_categoria($row['categoria']);
                                            if ($result_todos->num_rows > 0) {

                                            while ($row_all = $result_todos->fetch_assoc()) {
                                                        $img = $row_all["codigo"] ?>
                                                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                                                        <div class="cardapio-item">
                                                        <a href="prato.php?prato=<?php echo $row_all["codigo"]?>">


                                                        <div class="item-image">
                                                            <img src="img/cardapio/<?php echo $img ?>.jpg" alt="cogumelos" />
                                                        </div>

                                                        <div class="item-info">



                                                            <div class="title"> <?php echo $row_all['nome']; ?></div>
                                                        </div>

                                                        <div class="gradient-filter">
                                                        </div>

                                                    </a>
                                            </div>
                                        </div>
                                <?php }
                                    }
                          ?>

                </div>
            </div>
      </div>




        <?php  }
        } else {

            echo "Não ha Categorias";
        }



        ?>









        <?php include "footer.php"; ?>