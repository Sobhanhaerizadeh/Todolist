<!-- Copy Right => Sobhan Haerizadeh -->
<!-- PHP Developer -->
<!-- Telegram:@SobhanHrzBot -->
<!-- Linkedin: https://www.linkedin.com/in/sobhan-haerizadeh-288704a2/ -->
<!-- Github: https://github.com/Sobhanhaerizadeh -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.0.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <title>Create Todolist</title>
</head>
    <!-- For Create Task => Insert -->
<body>
<div class="container"> 
    <!-- Start Form Tag -->
    <form method="POST" action="todolist.php" style="margin-top:50px;">
    <label>Type Day: </label>
    <input type="text" autofocus required name="input-day" class="form-control" /> <br/>
    <label>Type Text: </label>
    <input type="text" autofocus required name="input-text" class="form-control" /> <br/>
    <input type="submit" value="Submit Task" name="button-submit" class="btn btn-success">
    <input type="reset" class="btn btn-danger"/>   
</div>
    </form>
    <!-- End Form Tag --> 
</body>
</html>