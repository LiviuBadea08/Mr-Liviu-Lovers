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
        <form class="form" action="?action=store" method="post">
            <div class="title">
                <h1>Add</h1>
            </div>
            <div class="box">
                <p>Nombre</p>
                <input type="text" name="people">
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
                <input type="text" name="activity">
            </div>
            <div class="buttons">
                <input class="button back" type="reset" value="Reset">
                <input class="button add" type="submit" value="Add">
            </div>
        </form>
    </body>
</html>