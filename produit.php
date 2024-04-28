
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Qualité</title>
    <link rel="stylesheet" href="style.css">
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


    <div class="form">
        <form action="ap.php" method="POST">
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
            
            <button type="submit" style="margin: 10px;">ENREGISTRER</button>
        </form>
    </div>


    <script src="app.js"></script>
</body>
</html>