<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Sample pages</title>
    <script src="js/components/aframe-master.js"></script>
    <script src="js/components/link-controls.js"></script>
	<script src="js/components/build.js"></script>
	
	
 </head>
  <body>
	<a-scene raycaster="far: 100; objects: [link];" cursor="rayOrigin: mouse" camera-position>
		<a-assets>
		<img id="city" crossorigin="anonymous" src="t0_orig.jpg">
		<a-mixin id="page" material="shader: flat; color: #000000; opacity: 0.8" link="title: " geometry="primitive: plane; width: 0.5; height: 0.5 "></a-mixin>
		</a-assets>	
		<a-entity progressive-controls="objects: a-link" position="0 2 5"></a-entity>
		<a-sky id="image-360" radius="50" src="#city"></a-sky>
	<a-plane  position="0 8 -3" rotation="0 0 0" width="12" height="1" material="color: #000; opacity: 0.8;side:double">
				<?php echo '<a-text font="nokia" align="center" color="white" position="0 0 0.05" width="12" value="Описание блока" ></a-text>'; ?>
	</a-plane>
	<?php
//Main block
$therow =0 ;
$xpoz='-10' ;
$ypoz=0 ;
$zpoz='-4' ;
$num = 1;
while($num <= 15) { 
		$therow = $therow + 1;
 		$wallpaper ='t'.$therow.'.png';
		?>
		<a-plane  position="<?php echo $xpoz;?> <?php echo $ypoz;?> <?php echo $zpoz;?>" rotation="0 0 0" width="4.6" height="3" material="color: #000; opacity: 0.8;side:double">
		<a-link href="#" position="0 0 0.05" material="shader: flat; opacity: 0" link="title:<?php echo $wallpaper;?>" geometry="primitive: plane"><a-plane src="<?php echo $wallpaper;?>" position="0 0 0" rotation="0 0 0" width="3.6" height="2"><a-animation attribute="scale" begin="mouseenter" dur="300" to="1.2 1.2 1.2"></a-animation><a-animation attribute="scale" begin="mouseleave" dur="300" to="1 1 1"></a-animation></a-plane></a-link>
		</a-plane>
		<?php
		$xpoz = $xpoz+4.7;
		$num = $num+1;

		if ($therow == 5) {
			$ypoz = $ypoz+3.1;
			$xpoz = '-10';
			$therow = 0;
		}
}
//Pages links
$xp = -5.6;
$total_pages= 8;
	echo '<a-link href="#" position="'.$xp.' 0 0.05" mixin="page" geometry=" width: 2; height: 0.5 "><a-text font="nokia" align="center" color="white"  width="7" value="PREVIOUS" ></a-text><a-animation attribute="scale" begin="mouseenter" dur="300" to="1.2 1.2 1.2"></a-animation><a-animation attribute="scale" begin="mouseleave" dur="300" to="1 1 1"></a-animation></a-plane></a-link> ';
	$xp= $xp+0.8;
	for($i = 1; $i <= $total_pages; $i++){
    	
    $xp= $xp+0.6;
    echo '<a-link href="#" position="'.$xp.' 0 0.05" mixin="page"><a-text font="nokia" align="center" color="white"  width="7" value="'.$i.'" ></a-text><a-animation attribute="scale" begin="mouseenter" dur="300" to="1.2 1.2 1.2"></a-animation><a-animation attribute="scale" begin="mouseleave" dur="300" to="1 1 1"></a-animation></a-plane></a-link>';

}
	$xp= $xp+1.4;
    echo '<a-link href="#" position="'.$xp.' 0 0.05" mixin="page" geometry=" width: 2; height: 0.5 "><a-text font="nokia" align="center" color="white"  width="7" value="NEXT" ></a-text><a-animation attribute="scale" begin="mouseenter" dur="300" to="1.2 1.2 1.2"></a-animation><a-animation attribute="scale" begin="mouseleave" dur="300" to="1 1 1"></a-animation></a-plane></a-link> ';
?>
</a-scene>
  </body>
</html>