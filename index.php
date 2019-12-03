<?php
    include "header.php";
?>

    <div class="container">
        <video class="video-bg" autoplay muted loop>
            <source src="assets/space.mp4" type="video/mp4">
        </video>
        <img class="index_logo" width="1" src="/assets/superhero_list_logo.png">
        <form class="auth_form" action="" method="post">
            <div class="inputs_and_btns_golder">
                <input class="inputs" type="text" autocomplete="off" name="login" placeholder="Username">                
                <input class="inputs" type="password" name="pwd" placeholder="Password">
                <div class="button_holder">
                    <button class="button" type="submit" name="button" value="login">
                        LOG IN
                    </button>
                    <button class="button" type="button">
                        REGISTRATION
                    </button>
                </div>
            </div>
        </form>
    </div> 

<?php
    include "footer.php";
?>
      
