<?php
include("header_admin.php");
 ?>


      <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
       <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Liste Gatégorie</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>N°</th>
                      <th>Libelle</th>  
                      <th>Lien Modifier </th>  
                      <th>Lien Supprimer</th>                          
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
						<td><?php echo '<a href="categorie.php?id='.$donnees['id'].'&libelle='.$donnees['libelle'].'">Modifier</a>'?></td> 
                        <td><?php echo '<a href="../controler/supprimercategorie.php?id='.$donnees['id'].'&libelle='.$donnees['libelle'].'">Supprimer</a>'?></td> 
                        <?php }?>							
                        </tr>
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->              
           
            </div>
            
               <div class="col-md-6">
             <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Ajouter Gatégorie</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" methode="get" action="../controler/ajoutercategorie.php">
                  <div class="box-body">
                    <div class="form-group">              
                      <label >Libelle Gategorie</label>
                      <input type="text" class="form-control" name="libelle">
                    </div>
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" >Ajouter</button>
                  </div>
                </form>
              </div>
              </div>
                         
             <div class="col-md-6">
             <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Modifier Catégorie</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" methode="get" action="../controler/modifiercategorie.php">
                  <div class="box-body">
                    <div class="form-group">
                    <label >Id Gategorie</label>
                      <input type="text" class="form-control" disabled="disabled"  value="<?php echo $_GET['id'] ?>" name="id">
                      <label >Libelle Gategorie</label>
                      <input type="text" class="form-control" value="<?php echo $_GET['libelle'] ?>" name="libelle">
                    </div>
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" >Modifier</button>
                  </div>
                </form>
              </div>
              </div>

             </div>
            
              </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
         
      
 <?php
include("footer_admin.php");
 ?>