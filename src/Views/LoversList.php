<html>
    <?php
        require_once("components/layout.php");
        
    ?>
    <body>
        <?php
    require_once("components/header.php");
    ?>
        <main class="container justify-content-center">
        <?php
        foreach ($data ["lover"] as $lover){
            echo <<<TAG
            <article
                class="row my-4 px-4 py-3 align-items-center bgPrimary text-white card-radius w-100"
            >
                <div class="col-4 col-xl-6">
                    <h3 class="card-title">{$lover->get_people()}</h3>
                    <p class="card-text">{$lover->get_date_time()}</p>
                </div>
                <div class="col-4 col-xl-2">
                    <h5 class="card-title">{$lover->get_activity()}</h5>
                    <p class="card-text">{$lover->get_type()}</p>
                </div>
                <div class="col-4 d-flex justify-content-evenly">
                    <a href="?action=edit&id={$lover->get_id()}" class="btn border-button rounded-circle hover-actions text-hover-actions">
                        <i class="fa-regular fa-pen-to-square icon text-center"></i>
                    </a>
                    <a href="?action=delete&id={$lover->get_id()}" class="btn border-button rounded-circle hover-actions text-hover-actions">
                        <i class="fa-regular fa-trash-can icon text-center "></i>
                    </a>
                </div>
            </article>
            TAG;
        }
        ?>
        </main>
        <script src="https://kit.fontawesome.com/176919793f.js" crossorigin="anonymous"></script>
    </body>
</html>
