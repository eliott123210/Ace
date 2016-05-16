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
        $qcm[0] = 'Elle donne 4 cellules haploïdes.';
        $qcm[1] = 'Elle donne 2 cellules diploïdes.';
        $qcm[2] = 'Elle permet la formation des gamètes.';
        $qcm[3] = 'Elle a lieu uniquement chez la femme.';
        $qcm[4] = 'Elle a lieu uniquement dans les gonades.';
        ?>
	        <!-- Content -->
        <article class="content width_90 left_5 absolute">
		        <form class="questions" method="post" action="home.html">
                        <?php 
                        $repeat = 1;
                        while ($repeat <=10) {
                        ?>
                    <div class="qcm">
                        <div class="title width_100">
			        	    <h1>QCM : <?php echo $repeat;?> : Concernant la  méiose, donnez la(les) réponse(s) exacte(s) :</h1>
			             </div>
                    </div>
                    <?php 
                        $item = 0;
                        while ($item <=4) {
                            if ($item == 0) {
                                $letter = 'A';
                                }
                            elseif ($item == 1) {
                                $letter = 'B';
                                }
                            elseif ($item == 2) {
                                $letter = 'C';
                                }
                            elseif ($item == 3) {
                                $letter = 'D';
                                }
                            elseif ($item == 4) {
                                $letter = 'E';
                                }
                            else {
                                $letter = 'Error';
                                }
                    ?>
                    <div class="item">
				        	<input type="checkbox" name="<?php echo $letter; ?>" id="<?php echo $letter; ?>" class="item"/>
				        	<label for="<?php echo $letter; ?>" class="label"> <?php echo $letter; ?> - <?php echo $qcm[$item]; ?></label>
				        </div>
                    <?php
                        $item++;
                        } 
                    ?>
                        <?php
                            $repeat++;
                        }
                        ?>
                     
                     <div class="button_box">
						<input type="button" value="Envoyer" class="button_blue width_15" id="button"/>
					</div>
					
				</form>
	        
	    </article>
    </body>
</html>