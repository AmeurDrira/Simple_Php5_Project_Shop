<?php
include("header_admin.php");
 ?>


      <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
       <div class="col-md-8">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Gestion Gatégorie</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>N°</th>
                      <th>Libelle</th>  
                      <th></th>  
                      <th></th>                          
                    </tr>
                   
                       <?php
					 	include("../model/Connection.php");
                        include("../model/Categorie.php");  
					    $retour = Categorie::lister_categorie($bd);
						$i=0;
						foreach ($retour as $donnees) 
						{	
							$i++;					
							$idf=$donnees['libelle'];
							$id=$donnees['id'];
													
						?>						
						 <tr>
						<td><?php  echo $i ?></td>
						<td><?php  echo $idf ?></td>
						<td><?php echo '<a href="../controler/modifiercategorie.php?id='.$donnees['id'].'&libelle='.$donnees['libelle'].'">Modifier</a>'?></td> 
                        <td></td> 
                        <?php }?>							
                        </tr>
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->              
           
            </div>
            </div>
             </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
         
      
 <?php
include("footer_admin.php");
 ?>