<nav class="navbar main-nav navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler m-menu-btn" type="button" data-toggle="collapse" data-target="#mainNav">
                    <span></span>
                </button>
                
                    <?php 
                    
                    wp_nav_menu(array(
                        'menu_location' => 'topmenu',
                        'menu_id' => 'mainNav',
                        'menu_class' => 'navbar-nav'
                    ));
                    
                    
                    ?>
             
                <!--search form-->
                <form class="form-inline ml-auto" action="#" method="get">
                    <input class="form-control border-0 " type="search" placeholder="write something">
                </form>
            </div>
        </nav>