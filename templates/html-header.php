<?php get_template_part('templates/html','head'); ?>
  <header class="header scrollOff">  
    <div class="header__menu-desktop">
      <div class="container container--header">
       <div class="header__brand">
          <?php if ( is_home() || is_front_page() ) {
              
              echo '<a id="scroll-to-up" href="javascript:;">';   

            } else {

              echo '<a href="' . get_home_url() . '">';

            } ?>

              <h1 class="header__logo">
              
                  <span class="header__letter header--i">I</span>
                  <span class="header__letter header--n">9</span>
                  <span class="header__letter header--m">M</span>
                  <span class="header__letter header--e">E</span>
              
              </h1>           
              <div class="header__name">
                  <span class="">Web & Design</span>
              </div>
          </a>
      </div>

      <a href="#menu" class="header__toggle"><span></span></a>

        <?php

          if( is_home() || is_front_page() ) {
            
            $nameNav = 'scroll-nav'; 

          } else {

            $nameNav = 'page-nav';

          }
          wp_nav_menu( array(
          'menu'        => $nameNav, 
          'menu_class'      => 'menu__nav ',
          'container_class' => 'header__menu'.$css.'',
        ));

        ?>

         <div class="header__redes">
              <div class="header__redestop">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
              <div class="header__redesbottom">
                  <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
              </div>
          </div>
      </div>
    </div>
  </header>
  <main id="up" class="main">