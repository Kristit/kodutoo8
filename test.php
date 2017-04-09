
/**
 * Created by PhpStorm.
 * User: kristitammet
 * Date: 09/04/2017
 * Time: 20:04
 */


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Kodutoo 8</title>

        <?php
        $bg_color="#fff";//valge
        $text_field="kiri";
        $text_varv="#000"; //must
        $piirjooneVarvus="#000"; //must
        $piirjooneRaadius="10";
        $piirjoonelaius ="10";
        $jooneStiil="dotted";

        if (isset($_POST['bg_color']) && $_POST['bg_color']!="") {
            $bg_color=htmlspecialchars($_POST['bg_color']);
        }
        if (isset($_POST['text_field']) && $_POST['text_field']!="") {
            $text_field=htmlspecialchars($_POST['text_field']);
        }

        if(isset($_POST['piirjooneVarvus']) && $_POST['piirjooneVarvus'!= ""]){
            $piirjooneVarvus=htmlspecialchars($_POST['piirjooneVarvus']);
        }
        if (isset($_POST['piirjooneRaadius']) && $_POST['piirjooneRaadius']!="") {
            $piirjooneRaadius=htmlspecialchars($_POST['piirjooneRaadius']);
        }
        if (isset($_POST['piirjoonelaius']) && $_POST['piirjoonelaius']!="") {
            $piirjoonelaius=htmlspecialchars($_POST['piirjoonelaius']);
        }
        if (isset($_POST['jooneStiil']) && $_POST['jooneStiil']!="") {
            $jooneStiil=htmlspecialchars($_POST['jooneStiil']);
        }


        ?>

<style>
    p {
        color: <?php echo $color?>;
    }
    #vormiSisu {
        background-color: <?php echo $bg_color;?>;
        border: <?php echo $piirjooneVarvus;?>px <?php echo $piirjoonelaius;?> <?php echo $jooneStiil?>;
        border-radius: <?php echo $piirjooneRaadius;?>px;

    }
</style>
</head>
<body>

<div id="vormiSisu">
    <p class="sisu"><?php echo "<p>".$textInput."</p>"; ?></p>
</div>

<div>
    <form action="test.php" method="post">
        
        <fieldset>
            <textarea name="text_field" placeholder="Kirjuta siia oma näitetekst"></textarea>
            <br>
            <input type="color" name="bg_color">
            <label>Taustavärvus</label>
            <br>
            <input type="color" name="text_varv">
            <label>Tekstivärvus</label>
        </fieldset>
        
        
        
        <fieldset>
            <input type="number" min="0" max="20" step="2" name="piirjoonelaius">
            <label>Piirjoone laius (0-20px)</label>
            
            <br>
            <select name="jooneStiil">
                <option>solid</option>
                <option>dashed</option>
                <option>double</option>
                <option>double</option>
            </select>
            <br>
            
            <input type="color" name="piirjooneVarvus">
            <label>Piirjoone värvus</label>
            <br>
            <input type="number" min="0" max="100" step="2" name="piirjooneRaadius">
            <label>Piirjoone nurga raadius (0-100px)</label>

        </fieldset>
        <button type="submit">esita</button>
    </form>
</div>
</body>
</html>
