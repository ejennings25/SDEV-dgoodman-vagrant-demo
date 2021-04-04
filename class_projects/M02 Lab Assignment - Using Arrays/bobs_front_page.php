<?php // Added 4 additional files (car-9,female3, wom2, and daz3) pic to be shuffled. 
  $pictures = array('brakes.png', 'headlight.png', 
                    'spark_plug.png', 'steering_wheel.png', 
                    'tire.png', 'wiper_blade.png', 'car-9.png', 'female3.png', 'wom2.png','daz3.png');

  shuffle($pictures);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bob's Auto Parts</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
      <div align="center">
      <table style="width: 100%; border: 0">
        <tr> 
        <?php //Loop select and display three images
        for ($i = 0; $i < 3; $i++) {
          echo "<td style=\"width: 33%; text-align: center\">
                <img src=\"";
          echo $pictures[$i];
          echo "\"/></td>";
        }
        ?>
        </tr>
     </table>
     </div>
  </body>
</html>