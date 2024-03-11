<?php


if (isset($_GET['btnSubmit'])) {
    
    $name = $_GET['Nama'];
    $email = $_GET['Email'];
    echo "Welcome $name<br>";
    echo "Your email address is  $email";

}

else {
    ?>
    
    
    
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <form action='' method="get">
                Name: <input type="text" name='Nama'><br>
                Email: <input type="text" name='Email'><br>
                <input name='btnSubmit' type="submit"><br>
            </form>
        </body>
        </html>
    
    
<?php
}
        ?>