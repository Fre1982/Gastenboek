<?php
/*require_once 'db_connect.php';
$db1 = new db('localhost', 'root', '', 'gastenboek');
$result = $db1->getAllData();
//var_dump($result);
*/

$result = array(array(1,1,"jef@telenet.be","jef","mijn bericht"),array(2,2,"piet@telenet.be","piet","Dit is het dan"),array(3,3,"fre@telenet.be","fre","Jo de mannen"));
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <div class="container">
        <h1>Gastenboek</h1>
      <div class="row">

        <div class="lg-2 offset-5 text-center">

          <table><thead>
            <th scope="row"><?php echo "Gast Id"?></th>
            <th scope="row"><?php echo "Email"?></th>
            <th scope="row"><?php echo "Naam"?></th>
            <th scope="row"><?php echo "Bericht"?></th>
          </thead>
            <tbody>

                  <?php foreach ($result as $key): ?>
                      <tr>


                          <td><?php echo $key[1]?></td>
                          <td><?php echo $key[2]?></td>
                          <td><?php echo $key[3]?></td>
                          <td><?php echo $key[4]."<br>"?></td>


                      </tr>

                  <?php endforeach; ?>
                </tbody>










          </table>
          <br>
          <a type="button" name="Nieuw bericht" href="index.php?action=addpage"> Nieuw bericht </a><br>


        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
