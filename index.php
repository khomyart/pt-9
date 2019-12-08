<?php
    include "/var/www/pt-9.khomyart.com/public_html/scripts/config.php";
    include "/var/www/pt-9.khomyart.com/public_html/header.php";
    include "/var/www/pt-9.khomyart.com/public_html/scripts/functions.php";
    include "/var/www/pt-9.khomyart.com/public_html/scripts/authenticator.php";
?>
    <div class="container">
        <video class="video-bg" autoplay muted loop>
            <source src="assets/space.mp4" type="video/mp4">
        </video>
        <img class="index_logo" width="1" src="/assets/superhero_list_logo.png">
        <form class="auth_form" action="" method="<?=$form_method;?>">
            <div class="inputs_and_btns_holder">
                <input class="inputs <?=getFeedbackClass("login_form", "login_button");?>" 
                       type="text" 
                       autocomplete="off" 
                       name="log_in" 
                       placeholder="Username">                
                <input class="inputs <?=getFeedbackClass("login_form", "login_button");?>" 
                       type="password" 
                       name="pwd" 
                       placeholder="Password">
                <?=getFeedbackText("login_form", "login_button");?>
                <div class="button_holder">
                    <button class="button" type="submit" name="login_button" value="log_in">
                        LOG IN
                    </button>
                    <a href="registration.php">
                        <button class="button" type="button">
                            REGISTRATION
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </div> 
<?php
    include "/var/www/pt-9.khomyart.com/public_html/footer.php";
?>
      
