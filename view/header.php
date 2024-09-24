<?php ob_start()?>
    <header>
        <img src="./asset/logo.png" alt="Logo">
        <form class="search" id="searchbare">
            
            <button id="search-btn" ><i class="fa-solid fa-magnifying-glass"></i></button>
            <input type="text" id="search" placeholder="Search..." readonly>
        </form>
        <div class="acoount">
            <span id="AccountDropdown">
            <img src="./asset/MorocanFace.jpg" alt="MorocanFace">
            MR.Admin
            <!-- __________________ -->
            <div class="accountDrop">
            <a href="#">
                Setting
                <i class="fa-solid fa-gear"></i>
            </a>
            <hr>
            <a href="#">
                Log Out
            <i class="fas fa-sign-out"></i>
            </a>
        </div>
            </span>
            <i class="fa-solid fa-message"></i>
            <!-- ____________ -->

        </div>
    </header>
<?php $header=ob_get_clean();?>

<?php ob_start()?>
    <nav>
        <ul>
            <li><a href="#">
                <i class="fa-solid fa-house"></i>
                Home
                <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            </li>
            <li> 
                <div class="DropdownListeP">
                <i class="fa-brands fa-product-hunt"></i>
                Products
                <!-- <span id="angleDown"><i class="fa-solid fa-angle-down" ></i></span> -->
                <span id="angleRight"><i class="fa-solid fa-angle-right"></i></span>
                </div>
                <ul class="ListeDropdownListeP ">
                        <li><a href="#">Vegitarian product
                        <span><i class="fa-solid fa-angle-right"></i></span>
                        </a> 
                        </i>
                    </li>
                        <li><a href="#">Meat products
                        <span><i class="fa-solid fa-angle-right"></i></span>
                        </a>
                        </i>
                    </li>
                        <li><a href="#"> Foodstuffs 
                        <span><i class="fa-solid fa-angle-right"></i></span>
                        </a>
                        </i>
                    </li>
                </ul>
            </li>
            <li><a href="#">
                <i class="fa-solid fa-user-group"></i>
                Foournissur
                <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            </li>
            <li><a href="#">
            <i class="fa-solid fa-user-plus"></i>
            employeé
            <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            </li>
            <li><a href="#">
            <i class="fa-solid fa-wallet"></i>
                Wallet
            <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            </li>
            <li><a href="#">
            <i class="fa-solid fa-layer-group"></i>
            Stock
            <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            </li>
            <li><a href="#">
            <i class="fa-solid fa-trophy"></i>
            Top Products
            <span><i class="fa-solid fa-angle-right"></i></span>
            </a>
            </li>
        </ul>
    </nav>
<?php $Sidebare=ob_get_clean();?>

<?php include_once "./view/dashbordmain.php";?>