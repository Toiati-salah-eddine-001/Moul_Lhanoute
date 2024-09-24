<?php ob_start();?>
<div class="container-fluid">
    <div class="col1">
        <ul>
            <li>
                <p>Vegetables</p>
                <img src="./asset/Vegetables.png" alt="Vegetables">
            </li>
            <li>
                <p>Meats</p>
                <img src="./asset/meat-fish.png" alt="meat">
            </li>
            <li>
                <p>foodstuffs</p>
                <img src="./asset/foodstuffs.png" alt="foodstuffs">
            </li>
        </ul>
    </div>
    <div class="col2">
        <div class="card_emplois">
            <ul>
                <li>
                    <img src="#" alt="#">
                    <span>Tha Hmade</span>
                    <span>Khedam Fe stock</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="col3">
    <div class="card_Fournisseur">
            <ul>
                <li>
                    <img src="#" alt="#">
                    <span>Tha Hmade</span>
                    <span>Khedam Fe stock</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $content=ob_get_clean();?>
<?php include_once "./view/header.php"?>