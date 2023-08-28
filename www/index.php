<html>
 <head>
  <title>jenkins</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
<<<<<<< HEAD

    <?php echo "<h1>Hi|Welcome</h1>"; ?>

=======
<<<<<<< HEAD
    <?php echo "<h1>jenkins</h1>"; ?>
=======
    <?php echo "<h1>Hi|Welcome</h1>"; ?>
>>>>>>> parent of ec022ed (Revert "hi|welcome")
>>>>>>> parent of 84c5956 (Revert "jenkins")
	<?php echo "<h3>This is Docker container deployment through jenkins!</h3>"; ?>

    <?php
    $conn = mysqli_connect('db', 'qasim', 'qasim', "myDb");
    $query = 'SELECT * From Person';
    $result = mysqli_query($conn, $query);
    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    $result->close();
    mysqli_close($conn);
    ?>
    </div>
</body>
</html>
