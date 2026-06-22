<?php

require_once __DIR__ . '/../config/database.php';
$objetPdo = getPDO();

$pdoStat = $objetPdo->prepare("SELECT * FROM individu ORDER BY nom ASC;");

$executeIsOK = $pdoStat->execute();

$participants = $pdoStat->fetchAll();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <?php include("../css/utilities.php"); ?>
    <?php include("../css/style.php"); ?>
    <title>Arbre généalogique</title>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="container flex">
            <h1 class="logo">ArbreG.</h1>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Acceuil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="../docs/docs.php">Membre</a></li>
                    <li><a href="../docs/arbre.php">Arbre</a></li>
                    <li><a href="../login/index.php">Se deconnecter</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <style>
    .showcase-form{
        margin-left:500px;
  height:420px;
        
    }
    </style>
    <div class="showcase-form card">
                <h2>Parent</h2>
                
                 <form action="BackParent.php" method="POST">
                 
                    <div class="form-control">
                    <label >Le Père:</label>
                    <?php                $select= $objetPdo->query("SELECT nom,id_individu FROM individu WHERE genre='Homme' AND age>='18' AND partenaire IS NOT NULL ");
                                             $membres=$select->fetchAll();?>
                                             <select  name="pere" class="select" value="" required>
                                             <?php  foreach($membres as $membre):?>
                                                   
                      
                     
                            <option value="<?= $membre['id_individu'] ;?>"><?=$membre['nom']?></option>
                            <?php endforeach;?>
                         </select>
                                        </div>
                    <div class="form-control">
                    <label >La Mère:</label>
                    <?php                $select= $objetPdo->query("SELECT nom,id_individu FROM individu WHERE genre='Femme' AND age>='18' AND partenaire IS NOT NULL ");
                                             $membres=$select->fetchAll();?>
                                             <select  name="mere" class="select" value="" required>
                                             <?php  foreach($membres as $membre):?>
                                                   
                      
                     
                            <option value="<?= $membre['id_individu'] ;?>"><?=$membre['nom']?></option>
                            <?php endforeach;?>
                         </select>
                    </div>
                    <div class="form-control">
                    <label >Enfant:</label>
                    <?php                $select= $objetPdo->query("SELECT * FROM individu   ");
                                             $membres=$select->fetchAll();?>
                                             <select  name="enfant" class="select" value="" required>
                                             <?php  foreach($membres as $membre):?>
                                                   
                      
                     
                            <option value="<?= $membre['id_individu'] ;?>"><?=$membre['nom']?></option>
                            <?php endforeach;?>
                         </select>
                    </div>
    
                  
                    <input type="submit" value="Aujouter" class="btn btn-primary" name="save" onClick="return confirm('Êtes-vous sûre ?')">
                </form>
            </div>






   
  
    <script src="assets/js/bootstrap.js"></script>
<div class="cards1">

</div>
<style>
.cards1{
    height:200px;
}
</style>
<div class="card2">
    <style>
    .submit1,
    .text1{
        margin-top:50px;
        
    }
    .text1{
        margin-left:50px;
        width:300px;
        height:30px;
    }
    </style>
   <input type="text" class="text1">
   <input type="submit" value="recherche" class="submit1">
                <font color="red" align="center"></font>
                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                    <tr>
                                            <th>id</th>
                                            <th>Nom Complet</th>
                                           <th>Genre</th>
										   <th>Date de Naissance</th>
                                           <th>Age</th>
                                            <!-- <th>Seat no</th> -->
        
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        <tr>
                                            <td>#</td>
                                            <td>Nom Complet</td>
                                            <td>Genre</td>
											<td>Date de Naissance</td>
                                            <td>Age</td>
                                          
                                          
                                            <td>
                                            <a href="modifier.php" onClick="return confirm('voulez-vous vraiment le Modifier?')">
                                            <button class="btn btn-danger">Modifier</button>
</a>
  <a href="#" onClick="return confirm('voulez-vous vraiment le supprimer?')">
                                            <button class="btn btn-danger">Supprimer</button>
</a>
<a href="#" >
                                             <button class="btn btn-danger">Details</button>
</a>
                                            </td>
                                        </tr>


                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
  
    <script src="assets/js/bootstrap.js"></script>

                                            
                                        </tr>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>





        </div>
    </div>
    <div class="cards1">

</div>
    <!-- Footer -->
    <footer class="footer bg-dark py-5">
      <div class="footdocs">
        <div class="container grid grid-3">
            <div>
                <h1>ArbreG.
                </h1>
               <p>Copyright &copy; 2022</p>
            </div>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Acceuil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="../docs/docs.php">Membre</a></li>
                </ul>
            </nav>
            <div class="social">
                
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>
        </div>
    </footer>
</body>
</html>