<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
  
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Year</th><th>Averaged mark</th></tr> 

<?php

  foreach($mymarks as $key => $value) {?>

    <tr>
        <td><?php echo $key; ?> </td>
        <td><?php echo $value; ?> </td>
    </tr>

 <?php }?> 

</table>
</body>
</html>
