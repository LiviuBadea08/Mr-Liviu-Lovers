<html>
<?php
        require_once("components/layout.php");
        
    ?>
    <body>
        <?php
            require_once("components/header.php");
        ?>
        <main class="container">
            <div class="d-flex align-items-center justify-content-center add-box">
                <p class="px-5 py-3 my-2 montserrat box bgPrimary title text-white">Edit Date</p>
            </div>
            <div class="row justify-content-center aling-items-center box">
                <form class="col-sm-4 fredoka bgSecondary form p-4" action="?action=update&id=<?php echo $data["lover"]->get_id() ?>" method="post">
                    <div class="mb-3 form-group">
                        <label for="people" class="form-label">People</label>
                        <input type="text" name="people" required class="form-control box" id="people" aria-describedby="nombre" value=<?php echo $data["lover"]->get_people() ?>>
                    </div>
                    <div class="mb-3 fredoka">
                        <p>Type of Date</p>
                        <input type="text" name="type" class="form-control box" value="<?php echo $data["lover"]->get_type()?>">
                    </div>
                            <div class="mb-5">
                                <label for="activity" class="form-label">Activity</label>
                                <input type="text" name="activity" class="form-control box" id="activity" aria-describedby="actividad" required value="<?php echo $data["lover"]->get_activity() ?>">
                            </div> 
                    <div class="justify-content-evenly pt-1 pb-3 buttons">
                        <a href="index.php" class="btn button-cancel montserrat">Cancel</a>
                        <button type="submit" class="btn button-confirm montserrat">Confirm</button>
                    </div>
                </form>
            </div>  
        </main>
        <script src="https://kit.fontawesome.com/176919793f.js" crossorigin="anonymous"></script>
</body>

</html> 













