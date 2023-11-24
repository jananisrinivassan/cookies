<!DOCTYPE html>
<?php
$panier = $_COOKIE['panier'];

switch (@$_GET["stock"]) {
    case "prod1":
        $panier["prod1"]++;
        setcookie("panier[prod1]", $panier["prod1"]);
        break;

    case "prod2":
        $panier["prod2"]++;
        setcookie("panier[prod2]", $panier["prod2"]);
        break;

    case "prod3":
        $panier["prod3"]++;
        setcookie("panier[prod3]", $panier["prod3"]);
        break;
}
setcookie("total", $panier["prod1"] * 5 + $panier["prod2"] * 10 + $panier["prod3"] * 15);


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <style>
        body {
            text-align: center;
        }

        table {
            /* display:grid;
            justify-content: space-around; */
            border-collapse: collapse;
            margin: auto;
            width: 300px;
        }

        td {
            border: solid 1px black;
            padding: 5px;
            text-align: center;

        }
    </style>
</head>

<body>
    <h1>Panier</h1>
    <h2>Ajouter vos articles</h2>

    <table>

        <tr>
            <td>Ajouter</td>
            <td>Votre Commande</td>
        </tr>
        <tr>
            <td><a href="panier.php?stock=prod1">Prod 1</a>[5€]</td>
            <td>
                <?php echo $panier["prod1"] ?>
            </td>
        </tr>
        <tr>
            <td><a href="panier.php?stock=prod2">Prod 2</a>[10€]</td>
            <td>
                <?php echo $panier["prod2"] ?>
            </td>
        </tr>
        <tr>
            <td><a href="panier.php?stock=prod3">Prod 3</a>[15€]</td>
            <td>
                <?php echo $panier["prod3"] ?>
            </td>
        </tr>
        <?php
        ?>
        <tr>
            <td>Total</td>
            <td id="total">
            </td>
        </tr>

    </table>
    <p>
        <a href="init.php">vider le panier</a>
    </p>
    <p>
        <a href="total.php">Total</a>
    </p>
    <script>
        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
              let cookieprod1 = getCookie("panier[prod1]");
              let cookieprod2 = getCookie("panier[prod2]");
              let cookieprod3 = getCookie("panier[prod3]");
              let td = document.getElementById("total");
              let total = parseInt(cookieprod1) * 5 + parseInt(cookieprod2) * 10 + parseInt(cookieprod3) * 15+" €";
              td.innerText = total;

    </script>

</body>

</html>