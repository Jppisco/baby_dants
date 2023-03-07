<?php 
        include "conexion.php";
        $query="SELECT Titulo,Descripcion,Imagenes FROM informaciones";
        $con=$pdo->prepare($query);
        $con->execute();
        ?>

          <section class="page-section" id="informaciones">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">NOTICIAS</h2>
                    <h3 class="section-subheading text-muted">Aqui encontraras las nuevas noticias y eventos que ocurren en tu propiedad horizontal.</h3> 
                
            </div>
            <div align="center" class="container">
              <div class="row">
                <?php 
                if ($con->rowCount()>=1) {
                    while($fila=$con->fetch()){ ?>
                        
                     <div class="card-group mb-4">
                        <div class="card" style="width: 50rem;" align="center" >
                            <br>
                            <h3 align="center"><?php echo $fila['Titulo'] 
                              ?></h3>
                            <br>
                            <div align="center"> 
                          <img class="card-img-top img-fluid" src="img/<?php echo $fila['Imagenes'] ?>" alt="Card image cap" style= "width: 400px; height: auto;">
                          </div> 
                          <br>
                          <div  class="card">
                            <br>
                            <h5><?php echo $fila['Descripcion']
                             ?></h5>
                            <br> 
                          </div>
                        </div>
                       </div> 

                    <?php 
                    }
                }?>    
              </div>
            </div>
 

        </section> 