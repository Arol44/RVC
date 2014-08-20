<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Redwood Valley Carpentry - Decks Gallery</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link rel="stylesheet" href="style.css" />
<link href="styles/RVC.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript">
		$(document).ready(function() {
//			$("a#example2").fancybox({
//				'overlayShow'	: false,
//				'transitionIn'	: 'elastic',
//				'transitionOut'	: 'elastic'
//			});
//		});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			
			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
			
		});
</script>
<?php
	require_once ("connect.php");
	$gallerythshed = mysql_query ("SELECT gallery_thumb,gallery_id,gallery_largeimage FROM gallery WHERE gallery_type='deck'");
?>
</head>

<body>
<div id="sitecontainer">
	<?php
		include "header.php";
	?>
    <div id="testbanner">
        <div id="testbanner1"></div><div id="testbanner2"></div><div id="testbanner3"></div><div id="testbanner4"></div><div class="gallery" style="font-size:40px;"> &nbsp;Decks</div>
        	<div id="thumbs">
            <?php 
                while($row = mysql_fetch_array($gallerythshed)){
					echo '<a rel="example_group" href="assets/images/'.$row['gallery_largeimage'].'" title=""><img class="gallery_th" alt="Redwood Valley Carpentry Shed" src="assets/images/thumbs/'.$row['gallery_thumb'].'" /></a>';
				}
			?>
            </div>
</div>
</body>
</html>