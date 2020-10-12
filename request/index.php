
   


    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Request</title>
  </head>
  <body>
 <!-- form get= menampung dan menampilkan di url -->
 
 <form method="GET" action="">
		<input type="text" name="nama" placeholder="nama"><br>
		<input type="text" name="email"placeholder="email   "><br>
		<input type="submit" name="submit" value="Submit" name="action">
    </form>
    
    <br>
    <br>
        <!-- form post hanya menampilkan atau menampung -->
	<form method="POST" action="index.php">
		<input type="text" name="nama"><br>
		<input type="text" name="email"><br>
		<input type="submit" name="submit" value="submit" name="action">
	</form>
<div class="container">
    <div class="row">
        <div class="col-3">
        <h2> Hasil Tangkap Get</h2>
        <p><?php
        if ($_GET)
        {
            echo 'Nama: ' . $_GET['nama'];  
            echo '<br>';
            echo 'Email: ' . $_GET['email'];
        }
        ?>

        </p>

        </div>
        <div class="col-3">
        <h2> Hasil Tangkap Post</h2>
        <p><?php
        if ($_POST)
        {
            echo 'Nama: ' . $_POST['nama'];
            echo '<br>';
            echo 'Email: ' . $_POST['email'];
        }
        ?>

        </p>

        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>