<!-- Copy Right => Sobhan Haerizadeh -->
<!-- PHP Developer -->
<!-- Telegram:@SobhanHrzBot -->
<!-- Linkedin: https://www.linkedin.com/in/sobhan-haerizadeh-288704a2/ -->
<!-- Github: https://github.com/Sobhanhaerizadeh -->

<?php
    // For Connect to the database 
    // Mysqli Method
    $db = @mysqli_connect("localhost" , 'root' , '' , 'todolist');
    if (!$db){
        exit(" <font color='red' size='6'> There is an error to connect to the database! </font>");
    }
?>