<?php 

/*Tee tsükliga 20 "checkboxi2. Pane neile kõigile oma nimi stiilis box[1], box[2], jne.
Tee tsükliga 20 "teksti lahtrit". Pane neile kõigile oma nimi stiilis cell[1], cell[2], jne.
Tee tsükliga 20 "radio buttonit". Pane neile kõigile üks nimi "radio" ja erinevad väärtused stiilis value1, value2 jne.
*/
?>

 
 <!DOCTYPE html>
 
<html>

<body>

  <h1>Ülesanne 0402</h1>

  <div id="sectionCheckbox">

    <p>
    
<?php

  for ($i=1; $i<=20; $i++)
  {
        echo '<input type="checkbox" name="box[' . $i . ']" value="' . $i . '" />' . $i .'<br />';
  }
?>
    </p>
  </div>


  <div id="sectionTextbox">
    <p>
    
<?php

  for ($i=1; $i<=20; $i++)
  {
        echo '<input type="text" name="cell[' . $i . ']" value="' . $i . '" /><br />';
  }
?>
    </p>
  </div>


  <div id="sectionRadio">
    <p>
    
<?php

  for ($i=1; $i<=20; $i++)
  {
        echo '<input type="radio" name="radio" value="value' . $i . '" />' . $i .'<br />';
  }

?>
    </p>
  </div>

</body>
</html>