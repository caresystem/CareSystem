<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>  
  <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <title>sampleSlot.php</title>  
  </head>  
  <body bgcolor="#333333" >  
    <table align="center">  
    <tr>  
        <td><img src="./img/sample/slot_images/title.png"></td>  
      </tr>  
    </table>  
    <hr/>  
  <table align="center">  
    <tr>  
      <td><?php echo "<img src=./img/sample/slot_images/" . $numberArray[0] .".png>"?></td>  
      <td><?php echo "<img src=./img/sample/slot_images/" . $numberArray[1] .".png>"?></td>  
      <td><?php echo "<img src=./img/sample/slot_images/" . $numberArray[2] .".png>"?></td>  
    </tr>  
    <tr>  
      <td colspan="3">  
        <form name="sample" action="Hello" method="post">  
        <input type="submit" name="submit_btn" value=<?php echo $buttonName; ?>>  
        </form>  
      </td>  
    </tr>  
    <tr>  
      <td colspan="3">  
        <?php  
          if($numberArray[0]==$numberArray[1] && $numberArray[0]==$numberArray[2]){  
            echo "<img src=./img/sample/slot_images/hit.png>";  
          }else{  
            echo "<img src=./img/sample/slot_images/nohit.png>";  
          }  
        ?>  
      </td>  
    </tr>  
  </table>  
  </body>  
</html>  