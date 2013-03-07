<?php
//Init
include 'WithPersian.Class.php';
$Application_Object = new WithPersian();

// Use Class Methods
echo $Application_Object -> Num_Ar2Fa('٤٤٦٥');
echo '</br>';
echo $Application_Object -> Num_En2Fa('4465');
echo '</br>';
echo $Application_Object -> Char_Ar2Fa('زِيمبِاوه');
echo '</br>';
echo $Application_Object -> Char_Fa2En('لخخلمث');
echo '</br>';
echo $Application_Object -> Url_Fix('http://afshinm.name/blog/1391/11/27/%da%a9%d8%a7%d8%b1%da%af%d8%a7%d9%87%d8%8c-%d8%a2%d9%85%d9%88%d8%b2%d8%b4-%d8%ac%d8%af%db%8c%d8%af%d8%aa%d8%b1%db%8c%d9%86-%d8%aa%da%a9%d9%86%d9%88%d9%84%d9%88%da%98%db%8c%e2%80%8c%d9%87%d8%a7%db%8c/');
?>