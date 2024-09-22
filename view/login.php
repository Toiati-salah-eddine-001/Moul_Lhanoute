<?php ob_start();
?>
<div class="conatainer_login">
    <div class="card_logine">
        <div class="col_1">
            <h2>Login</h2>
            <form method="post">
                <label for="name">nom</label>
                <input type="text" name="name" placeholder="nom..">
                <label for="name">Password</label>
                <input type="password" name="Password" placeholder="Password..">
                <div class="button_sign">
                    <button type="submit"> <a href="index.php?action=login">Login</a></button>
                    <button type="submit"> <a href="index.php?action=sign_up">Sign Up</a></button>
                </div>
            </form>
            <div class="link_ather">
                <a href="#"><i class="fa-brands fa-google"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
        <div class="col_2">
            <!-- <div class="image_login"> -->
                <img src="./asset/login.jpg" alt="logne">
            <!-- </div> -->
        </div>
    </div>
</div>
<?php $Content = ob_get_clean(); ?>
<?php include_once "pageMain.php"; ?>