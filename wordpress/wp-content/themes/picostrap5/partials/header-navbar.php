<!-- ******************* The Navbar Area ******************* -->
<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

    <nav>
<a href="#main-content" class="visually-hidden">Skip to main content</a>
<div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="top-nav-left">
                    <div class="rmit-logo"></div>
                    <h2><a href="/dewey-design/">Learning lab</a></h2>
                </div> 
            </div>
            <div class="col">       
                <ul>
					<li class="hide-sm">
						<a href="https://www.rmit.edu.au/library">Library</a>
					</li>
					<li class="search">
						<a href="https://www.rmit.edu.au/library">
							<div class="hide-sm">Search</div>
							<div class="mag-glass"></div>
						</a>
					</li>
					<li class="menu">
						<button id="menu-button" 
						class="btn btn-primary collapsed" type="button" data-bs-toggle="collapse" 
						data-bs-target="#nav-menu" aria-expanded="false" 
						aria-controls="nav-menu">Click for main menu</button>
					</li>
                </ul> 
            </div>   
        </div>
    </div>
</div>
<div id="nav-menu" class="collapse"  aria-label="Main Menu">
    <div class="container nav-container">
        <div class="row ">
            <!-- START menu -->
            <div class="col-xl-8">  
                
				<?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    )
                );
                ?>
				
            </div>
            <!-- END menu -->
        </div>
	</div>
</div>
</nav> <!-- .site-navigation -->
    <?php

    //AS A TEST / DEMO for a mock-up megamenu
    //include("nav-static-mega.php");
    ?>
</div><!-- #wrapper-navbar end -->
