<!-- Copy Right => Sobhan Haerizadeh -->
<!-- PHP Developer -->
<!-- Telegram:@SobhanHrzBot -->
<!-- Linkedin: https://www.linkedin.com/in/sobhan-haerizadeh-288704a2/ -->
<!-- Github: https://github.com/Sobhanhaerizadeh -->

<?php
    require_once("database.php");
    if (isset($_POST['button-submit']))
    {
        $inputDay = $_POST['input-day'];
        $inputText = $_POST['input-text'];
        $sql = "INSERT INTO `todo` (`day` , `text`) VALUES ('$inputDay' , '$inputText');";
        mysqli_query($db , $sql);
    }
?>

<!-- For tasks view (Show Records) => View -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.0.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet" />
    <title>Todolist View</title>
</head>
<body>
<?php
        require_once("database.php");
        $sql = "SELECT * FROM todo";
        $dataQuery = mysqli_query($db , $sql);
        if (mysqli_num_rows($dataQuery) <=0){ // If we haven't any record the table will not show !
            echo "<div class='container'><br><br>";
            print("<font size='6' color='red'> There is no task to show ! </font><br><br>"); ?>
            <form action="" method="POST">
            <button class="btn btn-info" name="button-back"> Create Task </button>
            </form>
            </div>
         <?php   
         if (isset($_POST['button-back']))
         header("location:index.php");
         exit();
        }
?>
    <table class="table table-dark">
    <tr>
    <th>ID</th>
    <th>Day</th>
    <th>Date</th>
    <th>Text</th>
    <th>Status</th>
    </tr>
    <?php
    $id = 0;
       while($result = mysqli_fetch_array($dataQuery)){ 
           $id++;
           ?>
    <tr>
    
    <!-- Sobhan Haerizadeh -->

    <td><?php echo $id; ?></td>
    <td><?php echo $result['day']; ?></td>
    <td><?php echo $result['date']; ?></td>
    <td><?php echo $result['text'];?></td>
    <td>
    <a href="?id=<?php echo $result['id']; ?>">
    <button class="btn btn-success"  onclick="return window.confirm('Are you sure to end this record?')" >End Task</button>
    </a>
    </td>
    </tr>
    <?php
       }?>
    </table>
</body>
</html>
<?php
    if (isset($_REQUEST['id'])){
        $recordId = intval($_REQUEST['id']);
        $sql = "DELETE FROM `todo` WHERE `id` = '$recordId' ";
        mysqli_query($db , $sql);
        header("location:todolist.php");
    }

?>