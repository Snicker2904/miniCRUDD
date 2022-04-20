<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styles.css">
    <title>Menu</title>
   
  </head>
  <body>
      <header>
          <nav>
            <div class="nav">
              <div class="logodiv"> 
                <img class="logo" src="../images/logo.png" alt="Afbeelding logo">
              </div>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="menu.php">Menu</a></li>
                  <li><a href="bestellen.php">Bestellen</a></li>
                  <li><a href="reserveren.php">Reserveren</a></li>
                </ul>
              </div>
            </div>
          </nav>
      </header>
      <main>
        <style>
          body {

              background-image: url('../images/achtergrond2.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              object-fit: cover;
              background-size: 100% 100%;

            }
        </style>
<div class="menu">
  <?php
          include_once("../include/connect.php");
          $sql = "SELECT * FROM  menu"; 
                            $stmt = $connect->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            foreach($result as $menu) {
                              echo '<div class="product">';
                        
                                echo $menu['titel'] . '<br><br>' . $menu['beschrijving'] . ' ' . "<br>";
                                echo "<button type='prijsknop'> $".$menu['prijs']."</button>";
                              echo "</div>";
                                }
        ?>
        </div>
</div>
        

     <!-- <div class="menu">

       <div class="menu1">
         
         <div class="tekst1"></div>
        </div>

       

      </div>

      </main>
      <footer></footer> -->
  </body>
</html>