
<!DOCTYPE html>
<?php
    require_once("globals.php");
    require_once("item.php");
    require_once("dataList.php");
    require_once("languageList.php");

    if(isset($_GET["section"])){
        $openSection = $_GET["section"];
    }
?>
<html lang="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="styles.css">
    <head>
        <title>CV</title>
    </head>
    <body>
        <div class="header">
            <h1>JUAN MORELL <p>Desarrollador de software y diseñador gráfico</p></h1>
        </div>    
        <div class="sidebar">
            <?php
                $dataList = new DataList("Datos personales", $personalData);
                $dataList->__display();
                $languageList = new LanguageList("Idiomas", $languages);
                $languageList->__display();
            ?>
        </div>
        <div style="margin-left:20%; margin-right:20%; margin-top:10%; padding-top: 10px;">
            <div class="section">
                <h2 onclick="openSection(0)">Experiencia</h2>
                <h2 onclick="openSection(1)">Educación</h2>
                <h2 onclick="openSection(2)">Perfil</h2>
            </div>
            <?php 
                switch($openSection){
                    case 0:
                        echo "<h2>Experiencia</h2>";
                        foreach($experience as $exp){
                            $item = new Item($exp["position"], $exp["company"], $exp["date"], $exp["tasks"]);
                            $item->__display();
                        }
                        break;
                    case 1:
                        echo "<h2>Educación</h2>";
                        foreach($education as $edu){
                            $item = new Item($edu["degree"], $edu["school"], $edu["date"], $edu["tasks"]);
                            $item->__display();
                        }
                        break;
                    case 2:
                        echo "<h2>Perfil</h2>";
                        echo "<p class='aboutmetext'>Desarrollador de software y diseñador gráfico con experiencia en el desarrollo de aplicaciones web y móviles. Conocimientos en React, React Native, Node.js, MongoDB, ZBrush, 3DS Max, Maya, Adobe Photoshop, Adobe Illustrator, Adobe Premiere, Adobe AE, HTML y CSS. Persona proactiva, resolutiva, creativa y con una buena disposición ante el trabajo. Soy un 'team player' y priorizo mi desarrollo y adquisición de experiencia en el ámbito profesional frente al beneficio económico.</p>";
                        break;
                }
            ?>
        </div>
    </body>
</html>
<script>
    function openSection(section){
        window.location.href = "CV.php?section="+section;
    }
</script>

