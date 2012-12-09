<?php include_once('/includes/init.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Giving Joy</title>
	<?php include_once('/includes/css.php'); ?>
</head>
<body>
	<?php include_once('/includes/menu.php'); ?>
	<div class="container padding-top" id="opening">
		<div id="faces">
			<div class="row">
				<div class="height-block"></div>
				<div class="face-row span12 padding-bottom align-center">
					<?php for($i = 0; $i <=8; $i++){  ?>
						<img src="/images/child<?php echo rand(1,4); ?>.jpg" style="width: 80px; height: 80px; margin-bottom: 10px;" />
					<?php }; ?>
				</div>


				<div class="jumbotron">
        			<h1>We're changing culture, society & the world!</h1>
        			<p class="lead grey">What if every birthday gift would make a real difference in the world.</p>
        			<p class="lead grey">Impacting society at every gift-giving occasion!</p>
        			<p class="lead">Join our movement of giving 2.0</p>
        			<!-- Button to trigger modal -->
        			<a href="#myModal" role="button" class="btn btn-success btn-large" data-toggle="modal">How?</a>

        			<!-- Modal -->
        			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <object width="508" height="273" id="myytplayer" data="http://www.youtube.com/embed/OCWj5xgu5Ng?rel=0enablejsapi=1&version=3&playerapiid=ytplayer">
                   <param name="allowscriptaccess" value="always">
                   </object>
                   <script type="text/javascript">

                   </script>
        			</div>
        		</div>

				<div class="face-row span12 padding-bottom align-center">
					<?php for($i = 0; $i <=40; $i++){  ?>
						<img src="/images/child<?php echo rand(1,4); ?>.jpg" style="width: 60px; height: 60px; margin-bottom: 10px;" />
					<?php }; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container displayHidden">
		<div id="buttons">
			<div class="row-fluid">
				<div class="span3 align-center">
					<a class="btn btn-primary btn-large" href="/buy-a-gift-card.php">I want to give someone a Gift Card</a>
				</div>
				<div class="span3 align-center">
					<a class="btn btn-primary btn-large" href="/use-a-gift-card.php">I want to use a Gift Card</a>
				</div>
				<div class="span3 align-center">
					<a class="btn btn-primary btn-large" href="/buy-a-gift-card.php">I want to add a Project</a>
				</div>
				<div class="span3 align-center">
					<a class="btn btn-primary btn-large" href="/user-profile.php">I want to spread awareness about a Project</a>
				</div>
			</div>
		</div>
	</div>
	<?php include_once('/includes/js.php'); ?>

</body>

</html>
