<html>
<body>

<?php
$my_file = 'sample.xml';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //open file for writing ('w','r','a')...

//which chart to process
$id =  $_POST['chart_id'];

switch ( $id ){
   case 1:
   $type = "line";
   break;
   
   case 2:
   $type = "column";
   break;
   
   case 3:
   $type = "pie";
   break;
   
   case 4:
   $type = "3D column";
   break;
   case 5:
   $type = "Stacked column";
   break;
   case 6:
   $type = "Floating column";
   break;
   //case 7:
   //$type = "Image column";
   //break;
   case 8:
   $type = "Stacked 3D column";
   break;
   case 9:
   $type = "Parallel 3D column";
   break;
   case 10:
   $type = "3D Pie";
   break;
   //case 11:
   //$type = "Image Pie";
   //break;
   case 12:
   $type = "Donut";
   break;
   case 13:
   $type = "bar";
   break;
   case 14:
   $type = "Stacked bar";
   break;
   case 15:
   $type = "Floating bar";
   break;
   case 16:
   $type = "Area";
   break;
   case 17:
   $type = "Stacked area";
   break;
   case 18:
   $type = "3D Area";
   break;
   case 19:
   $type = "3D Stacked area";
   break;
   case 20:
   $type = "Candlestick";
   break;
   case 21:
   $type = "Scatter";
   break;
   case 22:
   $type = "Polar";
   break;
   //case 23:
   //$type = "Bubble";
   //break;
   case 24:
   $type = "Mixed";
   break;
   case 25:
   $type = "Composite";
   break;
   case 26:
   $type = "Joined";
   break;
   //case 27:
   //$type = "Custom"; 
   //break;
   default:
   $type = "bar";
   break;
}
$data = "<chart>
<chart_type>".$type ."</chart_type>
   <chart_data>
      <row>
         <null/>
         <string>All perspectives</string>
         
      </row>";
  for($i=0;$i<5;$i++){
      $data=$data."<row>
         <string>Perspective:Finance</string>
         <number>55</number>
        </row>";
      }
   $data=$data."</chart_data>
</chart>
";		

fwrite($handle, $data);	// write the sample xml file
fclose($handle);
header('Location:/graphs/');
?>
</html>

