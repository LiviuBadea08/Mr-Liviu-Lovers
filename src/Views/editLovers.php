<html>
<?php
        require_once("components/layout.php");
        
    ?>
    <head>
        <link rel="stylesheet" href="img/Add&Edit.css">
    </head>
    <body>
        <?php
            require_once("components/header.php");
        ?>

    <form class="form" action="?action=update&id=<?php echo $data["lover"]->get_id() ?>" method="post">
        <div class="title">
        <h1>Edit</h1>
        </div>
        <div class="box">
            <p>Nombre</p>
            <input type="text" name="people" value=<?php echo $data["lover"]->get_people() ?>>
        </div>
        <div class="box">
            <p>Tema</p>
            <select name="type">
                <option value="1">Amorosa</option>
                <option value="2">Amistosa</option>
            </select>
        </div>
        <div class="box">
            <p>Actividad</p>
            <input type="text" name="activity" value="<?php echo $data["lover"]->get_activity() ?>">
        </div>
        <div class="buttons">
            <a href="index.php" class="btn btn-danger">Back</a>
            <input class="btn btn-success" type="submit" value="Add">
        </div>
    </form>
</body>

</html> 











