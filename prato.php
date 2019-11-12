<?php include "header.php"; ?>
<?php include "conection.php"; ?>
<div class="product-page small-11 large-12 columns no-padding small-centered">

<?php $cod_prato = $_GET['prato']?>

    <div class="global-page-container">
       <?php 
       
     


        $pesquisa_prato = get_pratos_for_codigo($cod_prato);
   

        if ($pesquisa_prato->num_rows > 0) {
            while ($prato = $pesquisa_prato->fetch_assoc()) { 
                    $nome=  $prato['nome'];
                    $codigo= $prato['codigo'];
                    $categoria=$prato['categoria'] ;
                    $descricao=$prato['descricao'];
                    $preco=$prato['preco'];
                    $calorias=$prato['calorias'] ;





              }
            }
            else {
                $url = 'cardapio.php';
                echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
                
            }

            ?>

            <?php 
            
            if($cod_prato!=null ){?>

                <div class="product-section">
                <div class="product-info small-12 large-5 columns no-padding">
                    <?php $img = $codigo;
                            $alt = $nome;

                            ?>

                    <h3><?php echo $nome ?></h3>
                    <h4><?php echo $categoria?></h4>
                    <p><?php echo $descricao ?>

                    <h5><b>Preço: </b>R$ <?php echo $preco ?></h5>
                    <h5><b>Calorias: </b><?php echo $calorias?> </h5>
                </div>

        <div class="product-picture small-12 large-7 columns no-padding">
            <img src="img/cardapio/<?php echo $img ?>.jpg" alt="<?php echo  $alt ?>">
        </div>




            </div>

            <div class="go-back small-12 columns no-padding">
                <a href="cardapio.php"><< Voltar ao Cardápio</a> </div> </div> </div> 
                    
                    <?php include "footer.php"; ?>








         <?php  }
        

         else{

           echo "PRODUTO NÂO ENCONTRADO!";

         }
            
            
            
            ?>
            

             

           