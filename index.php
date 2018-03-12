<?php
$countryNum = $_GET['select'];
$CountryPics;
$Cfolder;
$backgroundImage = 'w3.jpg';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forms</title>
        <link href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel = "stylesheet">
    </head>
    <body>
        <?php
        $AustraliaPics = array('australia.jpg','Australia1.jpg','Australia2.jpg','Australia3.jpg','Australia4.gif');
         
        $BrazilPics = array('Brazil.jpg','Brazil1.jpg','Brazil2.jpg','Brazil3.jpg','Brazil4.jpg');
         
        $ChinaPics = array('china.jpg','china1.jpg','china2.jpg','china3.jpg','china4.jpg');
         
        $DenmarkPics = array('Denmark.jpg','Denmark1.jpg','Denmark2.jpg','Denmark3.jpg','Denmark4.jpg');
         
        $EgyptPics = array('Egypt.jpg','Egypt1.jpg','Egypt2.jpg','Egypt3.jpg','Egypt4.jpg');
         
        $GreecePics = array('greece.jpg','Greece1.jpg','greece2.jpg','greece3.jpg','Greece4.jpg');

        $JapanPics = array('japan.jpg','japan1.jpg','japan2.jpg','japan3.jpg','japan4.jpg');
         
        $SKPics = array('sk.jpg','sk1.jpg','sk2.jpg','sk3.jpg','sk4.jpg');
         
         ?>
         
         <form>
    <fieldset>
        <!--<legend>Music on/off:</legend>-->
        <input id="Music" type="radio" name="music" value="On">
        <label for="Music">Music On</label><br>
        <input id="Silent" type="radio" name="music" value="Off">
        <label for="Silent">Music Off</label><br>
        
    </fieldset>
    <label for="favC" class = "country">Choose your favorite country?</label>
    <select id="favC" name="select">
        <option value="1">Australia</option>
        <option value="2">Brazil</option>
        <option value="3">China</option>
        <option value="4">Denmark</option>
        <option value="5">Egypt</option>
        <option value="6">Greece</option>
        <option value="7">Japan</option>
        <option value="8">South Korea</option>
    </select>
    <br>
    <?php
    echo "<h2>Enter Your Name:";
    ?>
    <input type ="text" name = "keyword" placeholder = "Keyword" value = "<?=$_GET['keyword']?>"/>
    <?php
    echo "</h2>"
    ?>
    <br>
     <input type = "submit" value = "Submit"/>
     </form>
     <?php
     if(isset($countryNum)){
         if('1'==$countryNum){
             $CountryPics = $AustraliaPics;
             $Cfolder = 'austpics';
             $Song = 'Listening.mp3';
             $backgroundImage = 'australianflag.gif';
         }
         if('2'==$countryNum){
             $CountryPics = $BrazilPics;
             $Cfolder = 'BrazilPics';
             $Song = 'MarisaMonte.mp3';
             $backgroundImage = 'BrazilFlag.gif';
         }
         if('3'==$countryNum){
             $CountryPics = $ChinaPics;
             $Cfolder = 'ChinaPics';
             $Song = 'GEM.mp3';
             $backgroundImage = 'chinese-flag.gif';
         }
         if('4'==$countryNum){
             $CountryPics = $DenmarkPics;
             $Cfolder = 'DenmarkPic';
             $Song = 'HarDuGlemt.mp3';
             $backgroundImage = 'Denmark-flag.gif';
         }
         if('5'==$countryNum){
             $CountryPics = $EgyptPics;
             $Cfolder = 'EgyptPics';
             $Song ='HamzaNamira.mp3';
             $backgroundImage = 'Egypt.gif';
         }
         if('6'==$countryNum){
             $CountryPics = $GreecePics;
             $Cfolder = 'GreecePics';
             $Song = 'ThanosPetrelis.mp3';
             $backgroundImage = 'greece.gif';
         }
         if('7'==$countryNum){
             $CountryPics = $JapanPics;
             $Cfolder = 'JapanPics';
             $Song = 'Yuna.mp3';
             $backgroundImage = 'japanese-flag.gif';
         }
         if('8'==$countryNum){
             $CountryPics = $SKPics;
             $Cfolder = 'SouthKoreaPics';
             $Song = 'BigBang.mp3';
             $backgroundImage = 'south-korea-flag.gif';
         }
         
     }
     if(isset($_GET['music'])){
         if($_GET['music']== "On"){
         echo "<audio autoplay loop>
            <source src= Music/$Song type=audio/mpeg>
            Your browser does not support the audio element.
            </audio>";
         }
         if($_GET['music']== "Off")
         {
             echo "<h3>Music is off <h3>";
         }
     }
     if(isset($_GET['keyword']))
     {
        // echo "<h2>*</h2>";
         //echo "<h1>";
         echo "<h1>*Hello ". $_GET['keyword'].". I hope you enjoy this!!!*</h1>";
         //echo "</h1>";
        // echo "<h2>*</h2>";
     }
     ?>
         <div id  = "carousel-example-generic" class = "carousel slide" data-ride = "carousel">
            <!--Indicators-->
            <ol class ="carousel-indicators">
            
            <?php
                for($i = 0; $i < 5; $i++)
                {
                    echo "<li data-target ='#carousel-example-generic' data-slide-to='$i'";
                    echo ($i == 0) ? "class ='active'" : "";
                    echo "></li>";
                }
                ?>
            </ol>
            <div class = "carousel-inner" role = "listbox">
                
                <?php
                    for($i = 0; $i < 5; $i++)
                    {
                        if(isset($CountryPics[$i])){
                        echo '<div class="item ';
                        echo ($i ==0) ? "active" : "";
                        echo '">';
                        echo '<img src="'.$Cfolder.'/'.$CountryPics[$i].'">';
                        echo '</div>';
                        unset($CountryPics[$i]);
                        }
                    }
                ?>
            </div>    
           
            
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
    <style>
        @import url("css/style.css");
           body{
               background-image:url(<?=$backgroundImage?>);
           }
    </style>
</html>