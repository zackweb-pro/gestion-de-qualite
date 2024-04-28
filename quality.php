<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Qualité</title>
    <link rel="stylesheet" href="style_mod.css">
    <link rel="stylesheet" href="normalize.css">
    <script src="https://kit.fontawesome.com/0a18d87a1d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="menu">
        <div class="admin_name">
            <img style="display: block;margin: auto;" src="icons/eos-icons_admin_white.png" alt="">
            <h2 class="name">GESQA</h2>
            <h6 style="color: white; text-align: center;">EST Kenitra</h6>
        </div>
        <!-- <div class="buttons">
            <a href="produit.php"><button class="gp">Produit</button></a>
            <a href="quality.php"><button class="gs">Qualité</button></a>

        </div> -->
    </div>
    <nav>
        <img class="menu_btn" onclick="toggle()" src="icons/pepicons-pop_menu.png" onclick="toggle()" alt="">
        <div class="logo">gestion de Qualité</div>
        <a href="index.php"><i class="fa-solid fa-right-from-bracket" style="font-size: 30px; color: orangered; position: absolute; top: 15px; right: 15px;"></i></a>
    </nav>

    <?php
        if(isset($_GET["msg"])){?>
        <?php if($_GET["msg"]=="negative"){ 
            echo '        <div class="msg negative    ">
            <p>ce produit n\'est pas validé</p>
            <i class="fa-solid fa-times" onclick="cancel_fun()"></i>
        </div>';}
        else{
            echo '<div class="msg positive    ">
            <p>ce produit est validé</p>
            <i class="fa-solid fa-times" onclick="cancel_fun()"></i>
        </div>';
        }

    ?>
    <?php }?>
    <h2 style="color: rgba(63, 9, 226, 0.665); text-align: center;">comparer avec:</h2>
    <div class="form">
        <form action="gq.php" method="POST">
            <select name="produit" style="width: 250px; display: block; margin: auto;" id="" class="">
        <?php
                        $sql = "SELECT * FROM produits";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result)){?>
            <option value="<?php echo $row['id']?>"><?php echo $row["name"]?></option>
            <?php }?>
                        </select>
        <h2 style="color: rgba(63, 9, 226, 0.665); text-align: center;">le produit:</h2>
        <select name="genre" id="" class="">
                <option value="telephone">telephone</option>
                <option value="pc">pc</option>
                <option value="tablette">tablette</option>
            </select>
            <input type="text" name="name" placeholder="le nom de produit">
            <input type="text" name="speed" placeholder="la vitesse du microprocesseur par Ghz">
            <input type="text" name="rom" placeholder="la capacité ROM">
            <input type="text" name="ram" placeholder="la capacité RAM">
            <input type="text" name="size" placeholder="la taille de l'écran">
            <input type="text" name="camera" placeholder="les pexels du camera">
            
            <button type="submit" style="margin: 10px;">COMPARER</button>
        </form>
    </div>
    <script src="app.js"></script>
</body>
</html>