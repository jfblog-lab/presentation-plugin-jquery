<?php include_once("template/vueHeader.php"); ?>

  <body>

    <?php include_once("template/vueNavbar.php"); ?>

    <div class="container">
      
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 main">
          <h1 class="page-header"><?php echo $page ?></h1>

          <h2 class="sub-header">Tableau des données pour la ville de Marseille</h2>
          <div class="table-responsive">
            <table class="table table-striped ville">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Raison Sociale</th>
                  <th>Type de cuisine</th>
                  <th>Ville</th>
                  <th>Mail</th>
                </tr>
              </thead>
              <tbody>
                <?php
              		$compte = 0;
              		foreach ($restaurants as $restaurant):
						$compte++;
				?>
                <tr>
                  <td><?php echo $compte; ?></td>
                  <td><?php echo $restaurant['Raison_Sociale']; ?></td>
                  <td><?php echo $restaurant['Type_cuisine']; ?></td>
                  <td><?php echo $restaurant['Ville']; ?></td>
                  <td><a href="mailto:<?php echo $restaurant['Mail']; ?>" target="_blank" ><?php echo $restaurant['Mail']; ?></a></td>
                </tr>
              	<?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    </div><!-- /.container -->

	<?php include_once("template/vueFooter.php"); ?>