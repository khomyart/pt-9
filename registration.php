<?php
    session_start();
    include "/var/www/pt-9.khomyart.com/public_html/scripts/config.php";
    include "/var/www/pt-9.khomyart.com/public_html/header.php";
    include "/var/www/pt-9.khomyart.com/public_html/scripts/functions.php";
    include "/var/www/pt-9.khomyart.com/public_html/scripts/registrator.php";
?>
    <div class="container">
        <video class="video-bg" autoplay muted loop>
            <source src="assets/space.mp4" type="video/mp4">
        </video>
        <img class="index_logo_no_animation" width="1" src="/assets/superhero_list_logo.png">
        <form class="auth_form" action="" method="<?=$form_method;?>">
            <div class="inputs_and_btns_holder">
                <input class="inputs <?=getFeedbackClass("login", "registration");?>" type="text" autocomplete="off" name="login" 
                placeholder="Username">   
                <?=getFeedbackText("login", "registration");?>             
                <input class="inputs <?=getFeedbackClass("pwd", "registration");?>" type="text" autocomplete="off" name="pwd" 
                placeholder="Password">
                <?=getFeedbackText("pwd", "registration");?>
                <input class="inputs <?=getFeedbackClass("display_name", "registration");?>" type="text" autocomplete="off" name="display_name" placeholder="Display name">
                <?=getFeedbackText("display_name", "registration");?>                
                <div class="button_holder">
                    <a href="index.php">
                        <button class="button" type="button">
                            BACK
                        </button>
                    </a>
                    <button class="button" type="submit" name="registration" value="registration">
                        REGISTRATION
                    </button>
                </div>
            </div>
        </form>
    </div> 

<?php
    include "/var/www/pt-9.khomyart.com/public_html/footer.php";
?>
      
