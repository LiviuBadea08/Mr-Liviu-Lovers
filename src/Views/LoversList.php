<html>
    <?php
        require_once("components/layout.php");
        
    ?>
    <body>
        <?php
    require_once("components/header.php");
    ?>
        <h1>Works</h1>
        <?php
        foreach ($data ["lover"] as $lover){
            echo <<<TAG
            <article class="col-sm d-flex align-space-around justify-content-center">
                <div class="card text-center" style="width: 15rem">
                    <h3 class="card-title">{$lover->get_people()}</h3>
                    <div class="card-body">
                        <h5 class="card-title">{$lover->get_type()}</h5>
                        <h6 class="card-text">{$lover->get_activity()}</h6>
                        <p class="card-text">{$lover->get_date_time()}</p>
                        <p class="card-text">{$lover->get_id()}</p>
                        <a href ='?action=delete&id={$lover->get_id()}'>delete</a>
                    </div>
                </div>
            </article>
            TAG;
        }
        ?>
    </body>
</html>
