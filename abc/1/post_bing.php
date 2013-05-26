<?php
include("inc/functions.php");

include("inc/config.php");
include("amazon_api_class.php");

	
      

	

        $asin=get_keyword_sql();
     
 	////////////////////Dynazone///////////////////////
        $opr = 'Lookup';
        include('inc/info_id.php');
        include("inc/functiondyna.php");
	
	
	$title=$judul;
	$content  ='';
	$content .='<br /><center>'.$konten.'</center><br/>';
	//////////////////  Encode Hotlink Image ////////////////////////
	$estrimg = "<img src='".$gambar."' title='".$altimg."'</a>";
	$enc1=base64_encode($estrimg);
	$eimglev1="<div id='imglev1'>".$enc1."</div>";
	$eimglev2=base64_encode($eimglev1);
	///////////////////////////////////////////////////
	$content .="<div id='imglev2' style='text-align:center;'>".$eimglev2."</div><br/>";
	$content .='<center>'.$konten1.'</center><br/>';
	$content .="<br/><b><u>Product Feature</u></b><br/><ul>";
	foreach($item[0]->ItemAttributes->Feature as $feature){
				$content .= '<li>' .$feature . '</li>';
			}
	$content .="</ul><b><u>Dimension</u></b><br/>";
	$content .="Height = ".$item_height." inch , Length = ".$item_length." inch ,  Width = ".$item_width." inch , Weight = ".$item_weight." pounds. <br/><br/>";
			////////////////////////////////////////////////////
	$estrlink="<a href='".$beli."' target='_blank'><font color='black'><img src='http://3.bp.blogspot.com/-CtKAZ88TiP4/URo1ktanH3I/AAAAAAAAAII/Medg8tTvMLQ/s1600/buynow-big.gif' border='0'></a>";
	$enc1ink=base64_encode($estrlink);
	$elinklev1="<div id='linklev1'>".$enc1ink."</div>";
	$elinklev2=base64_encode($elinklev1);
	$content .="<center><blink><font color='blue'><b>Please check the actual price here, it could change.</b></font></blink></center><br/><center><div id='linklev2'>".$elinklev2."</center>";
	/////////////////////////////////////////////////////
	$content .="<br/>".$keterangan."......<br/><br/>";

	
	//$lab = $item_brand;
	echo $title."<br>";
	echo $content;
	
	?>