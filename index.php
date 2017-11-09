<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for projects hosting / Site Web d'hébergement des prototypes">
    <title>Museomix prototypes</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/39d34b0efd.js"></script>
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/blog.css">
        <!--<![endif]-->
</head>
<body>







<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Museomix prototypes</h1>
            <h2 class="brand-tagline">Project hosting/Hébergement des projets</h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="http://www.museomix.org">Museomix.org</a>
                    </li>
					 <li class="nav-item">
                        <a class="pure-button" href="http://www.museomix.org/chercher-un-prototype#protosearch">Prototypes archive</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <div class="posts">
                <h1 class="content-subhead">Prototypes</h1>

				<?php
				$protos = json_decode(file_get_contents('./projects.json'));
				foreach($protos as $proto):
				?>
					<section class="post">
						<header class="post-header">

							<h2 class="post-title"><a href="<?php echo $proto->proto_url; ?>"><?php echo $proto->name; ?></a></h2>

							<p class="post-meta">
								<a class="post-author" href="<?php echo $proto->team_url; ?>"><?php echo $proto->team; ?></a> - <?php echo $proto->museum; ?> - <a class="post-category post-year-<?php echo $proto->year; ?>" target="_blank" href="http://www.museomix.org/chercher-un-prototype?fwp_annee=<?php echo $proto->year; ?>"><?php echo $proto->year; ?></a>
								- <a  target="_blank" href="<?php echo $proto->github; ?>"><i class="fa fa-github"></i></a>
							</p>
						</header>

						<!-- <div class="post-description">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
						</div> -->
					</section>
				<?php endforeach; ?>

            </div>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="http://www.museomix.org" class="pure-menu-link">Museomix.org</a></li>
                        <li class="pure-menu-item"><a href="http://github.com/museomix" class="pure-menu-link">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>
