<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Php practicle</title>
</head>
<body>
<header>
<h1>Php lesson2 Arthur</h1>
    <hr>
</header>
<main>
<?php
include ( __DIR__ . '/functions.php');
?>
<div>
    <p>Table &&</p>
<table>
    <tr>
        <td>Number 1</td><td>Number 2</td><td>&&</td>
    </tr>
    <tr>
        <td>0</td><td>0</td><td><?php echo logand($aa,$aa);?></td>
    </tr>
    <tr>
        <td>0</td><td>1</td><td><?php echo logand($aa,$bb);?></td>
    </tr>
    <tr>
        <td>1</td><td>0</td><td><?php echo logand($bb,$aa);?></td>
    </tr> 
    <tr>
        <td>1</td><td>1</td><td><?php echo logand($bb,$bb);?></td>
    </tr>
</table>
</div> <!-- Table && -->
    <div>
        <p>Table ||</p>
        <table>
            <tr>
                <td>Number 1</td><td>Number 2</td><td> | | </td>
            </tr>
            <tr>
                <td>0</td><td>0</td><td><?php echo logor($aa,$aa);?></td>
            </tr>
            <tr>
                <td>0</td><td>1</td><td><?php echo logor($aa,$bb);?></td>
            </tr>
            <tr>
                <td>1</td><td>0</td><td><?php echo logor($bb,$aa);?></td>
            </tr>
            <tr>
                <td>1</td><td>1</td><td><?php echo logor($bb,$bb);?></td>
            </tr>
        </table>
    </div><!-- Table || -->
       <div>
        <p>Table xor</p>
        <table>
            <tr>
                <td>Number 1</td><td>Number 2</td><td> xor </td>
            </tr>
            <tr>
                <td>0</td><td>0</td><td><?php echo logxor($aa,$aa);?></td>
            </tr>
            <tr>
                <td>0</td><td>1</td><td><?php echo logxor($aa,$bb);?></td>
            </tr>
            <tr>
                <td>1</td><td>0</td><td><?php echo logxor($bb,$aa);?></td>
            </tr>
            <tr>
                <td>1</td><td>1</td><td><?php echo logxor($bb,$bb);?></td>
            </tr>
        </table><hr>
       </div><!-- Table xor -->
<div>
    <p class="solution"> Full quadratic equation solution <br>
    ax^2+bx+c=0<br>
        a= <?php echo $a=1; ?>        b= <?php echo $b=5; ?>         c= <?php echo $c=2; ?><br>
            Resultat <br><?echo diskr(1,5,2);?></p><hr>

</div><!-- Quadratic solution-->
        <div>
        <p>Test function <strong>"include"</strong><br></p>
        <p>There are we don't use function 'include' </p>
        <p>There are we use function "include" -><strong> <?php include ('W:\domains\php.local/function include.php');
                echo $i; ?></strong></p>
        <p>Add function "return"<strong> <?php include ('W:\domains\php.local/function include.php');
                echo $in; ?></strong><hr></p>


    </div><!-- Test function iclude-->
    <div>
        <h2>Function output gender</h2>
        <p> You input name - <?php echo $name='Сергей';?></p>
        <p><strong><?php echo gender1('Сергей') ?></strong></p>

    </div><!-- Function output gender-->

</main>
<footer>
</footer>


</body>
</html>
