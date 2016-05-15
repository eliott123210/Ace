<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/stylesheets/style.css" type="text/css"/>
        <title>Ace !</title>
    </head>

    <body>
        <!-- Header -->
        <?php
	        include('header.php');
	        ?>
	        <!-- Content -->
        <article class="content width_90 left_5 absolute">
		        <form class="questions" method="post" action="home.html">
			        <div class="qcm">
				        
		        		<div class="title width_100">
			        		<h1>QCM 1 : Concernant la  méiose, donnez la(les) réponse(s) exacte(s) :</h1>
			        	</div>
			        	<div class="item">
				        	<input type="checkbox" name="A" id="A" class="item"/>
				        	<label for="A" class="label"> A - Elle donne 4 cellules haploïdes.</label>
				        </div>
						<div class="item">
							<input type="checkbox" name="B" id="B" class="item"/>
							<label for="B" class="label"> B - Elle donne 2 cellules diploïdes.</label>
						</div>
						<div class="item">
							<input type="checkbox" name="C" id="C" class="item"/>
							<label for="C" class="label"> C - Elle permet la formation des gamètes.</label>
						</div>
						<div class="item">
							<input type="checkbox" name="D" id="D" class="item"/>
							<label for="D" class="label"> D - Elle a lieu uniquement chez la femme.</label>
						</div>
						<div class="item">
							<input type="checkbox" name="E" id="E" class="item"/>
							<label for="E" class="label"> E - Elle a lieu uniquement dans les gonades.</label>
						</div>
					</div>
					<div class="button_box">
						<input type="button" value="Envoyer" class="button_blue width_15" id="button"/>
					</div>
					
				</form>
	        
	    </article>
    </body>
</html>