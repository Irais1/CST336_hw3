<!DOCTYPE html>
<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <?php
         $amsterdamPics = array('https://www.telegraph.co.uk/content/dam/insurance/2016/04/06/amsterdam.jpg?imwidth=450','http://www.sciencemag.org/news/2017/11/european-medicines-agency-will-move-amsterdam','https://en.wikipedia.org/wiki/Amsterdam');
         $amsterdamMusic = array();
         
         $BuenosAiresPics = array();
         $BuenosAiresMusic = array();
         
         $DelhiPics = array();
         $DelhiMusic = array();
         
         $HongGongPics = array();
         $HongGOngMusic = array();
         
         $LondonPics = array();
         $LondonMusic = array();
         
         $LAPics = array();
         $LAMusic = array();
         
         $MoscowPics = array();
         $MoscowMusic = array();
         
         $MumbaiPics = array();
         $MumbaiMusic = array();
         
         $NYPics = array();
         $NYMusic = array();
         
         $SaoPauloPics = array();
         $SaoPauloMusic = array();
         
         $TokyoPics = array();
         $TokypMuisc = array();
         
         
         ?>
    <fieldset>
        <legend>Music on/off:</legend>
        <input id="Music" type="radio" name="music" value="On">
        <label for="Music">Music On</label><br>
        <input id="Silent" type="radio" name="silent" value="Off">
        <label for="Silent">Music Off</label><br>
        
    </fieldset>
    <label for="favcity">Choose your favorite city?</label>
    <select id="favcity" name="select">
        <option value="1">Austrelia</option>
        <option value="2">Brazil</option>
        <option value="3">China</option>
        <option value="4">Denmark</option>
        <option value="5">Egypt</option>
        <option value="6">France</option>
        <option value="7">Greece</option>
        <option value="8">India</option>
        <option value="9">Japan</option>
        <option value="10">Russia</option>
        <option value="11">South Korea</option>
    </select>
    </body>
</html>