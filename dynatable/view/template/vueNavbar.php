<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tutoriel Dynatable</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if($page == "index"): ?> class="active" <?php endif; ?> ><a href="index.php">Index</a></li>
            <li <?php if($page == "ville"): ?> class="active" <?php endif; ?> ><a href="ville.php">ville</a></li>
            <li <?php if($page == "cuisine"): ?> class="active" <?php endif; ?> ><a href="cuisine.php">Cuisine</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>