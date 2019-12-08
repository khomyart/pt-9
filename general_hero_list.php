<?php
    include "/var/www/pt-9.khomyart.com/public_html/scripts/config.php";
    if(isset($method["sign_out"])) {
        session_destroy();
        header("Location: index.php");
    }

    if(!isset($_SESSION["auth"])) {
        header("Location: index.php");
        exit();
    }

    include "/var/www/pt-9.khomyart.com/public_html/header.php";
    include "/var/www/pt-9.khomyart.com/public_html/scripts/functions.php";
?>

    <div class="container">
        <div>
            <h1>
                <?php echo $_SESSION["auth"]["display_name"];?>
            </h1>
            <h3>
                Choose your favorite heroes:
            </h3>
        </div>
        <div>
            <form action="" method="<?=$form_method;?>">
                <button type="submit" name="sign_out" value="sign_out">
                    SIGN OUT
                </button>
            </form>
        </div>
        <div>

        </div>
        <div>
            
        </div>
    </div> 

<?php
    include "/var/www/pt-9.khomyart.com/public_html/footer.php";
?>
      
