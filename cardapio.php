
     
<?php include"header.php";?>
<<?php  include "conection.php"?>


           
        <div class="cardapio-list small-11 large-12 columns no-padding small-centered">
            
            <div class="global-page-container">
                <div class="cardapio-title small-12 columns no-padding">
                    <h3>Cardapio</h3>
                    <hr></hr>
                </div>

       
           
        
        
          
         <?php 
         
         $result_categorias=get_categorias();
       

         if($result_categorias->num_rows>0){
            while ($row = $result_categorias->fetch_assoc()) { 
                print_r($row);


            }
            
      
          
          }
          else {
          
             echo "Não ha Categorias";
          
         }
      
         
         
         ?>

          
            

                <div class="category-slider small-12 columns no-padding">
                    <h4>Entradas</h4>

                    <div class="slider-cardapio">
                        <div class="slider-002 small-12 small-centered columns">


                            <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                <div class="cardapio-item">
                                    <a href="camarao-alho.html">
                                        
                                        <div class="item-image">
                                            <img src="img/cardapio/camarao-alho.jpg" alt="camaroes"/>   
                                        </div>

                                        <div class="item-info">
                                            
                                        
                                            <div class="title">Camarões ao alho</div>
                                        </div>

                                        <div class="gradient-filter">
                                        </div>
                                        
                                    </a>
                                </div>
                            </div>


                          

                           
                        </div>
                    </div>
                </div>

                <div class="category-slider small-12 columns no-padding">
                    <h4>Pratos Principais</h4>

                    <div class="slider-cardapio">
                        <div class="slider-002 small-12 small-centered columns">

                            <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                <div class="cardapio-item">
                                    <a href="picanha-brasileira.html">
                                        
                                        <div class="item-image">
                                            <img src="img/cardapio/picanha-brasileira.jpg" alt="picanha"/>   
                                        </div>

                                        <div class="item-info">
                                            
                                        
                                            <div class="title">Picanha à Brasileira</div>
                                        </div>

                                        <div class="gradient-filter">
                                        </div>
                                        
                                    </a>
                                </div>
                            </div>

                         
                           
                        </div>
                    </div>
                   
                </div>

                <div class="category-slider small-12 columns no-padding">
                    <h4>Sobremesas</h4>

                    <div class="slider-cardapio">
                        <div class="slider-002 small-12 small-centered columns">


                            <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                <div class="cardapio-item">
                                    <a href="cheesecake-cereja.html">
                                        
                                        <div class="item-image">
                                            <img src="img/cardapio/creme-papaya.jpg" alt="papaya"/>
                                        </div>

                                        <div class="item-info">
                                            
                                        
                                            <div class="title">Creme de Papaya com Cassis</div>
                                        </div>

                                        <div class="gradient-filter">
                                        </div>
                                        
                                    </a>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                   
                </div>




            </div>
        </div>

            <?php include"footer.php";?>

   


       