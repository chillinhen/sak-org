    <style>
        ::-moz-selection,
        ::selection{
            background-color: <?php echo $branding_color; ?>;
        }

        body {
            border-color: <?php echo $branding_color; ?>;
        }

        a, a:visited,
        .site-content a{
            color: <?php echo $branding_color; ?>;
        }
        .site-content a{
            color: <?php echo $secondary_color; ?>;
        }
        .colPrimary {
            fill: <?php echo $branding_color; ?>; 
        }
        .colLogo{
            fill: <?php echo $logo_color; ?>;
        }
        .post-edit-link {
            color:<?php echo $branding_color; ?>; 
        }


        .h1, h2, article h1, h3, h4, legend, .number, .widgettitle,
        h1 a, h2 a, article h1 a, h3 a, h4 a, legend a, .number a, .widgettitle a{
            color: <?php echo $branding_color; ?>;
        }

        blockquote{
            border-left:2 px solid <?php echo $branding_color; ?>; 
        }
        /*------------------------------------------------
        Typo Sonderfälle
        --------------------------------------------------*/
        .carousel-caption > *,
        legend, h2.category-link, article h1.category-link, h2.category-link a .panel h3, article h1.category-link a .panel h3, .number {
            color: <?php echo $branding_color; ?>; 
        }
        /*------------------------------------------------
        Navigation
        --------------------------------------------------*/
        .menu-item .sub-menu,
        #mainNav ul.nav > .menu-item:hover,
        .toggle-nav span,
        .toggle-nav.open span,
        #offMenu,
        .service-links,
        #languages-menu{
            background-color: <?php echo $branding_color; ?>;
        }
        .menu-item .sub-menu a:hover{
            background-color: <?php echo $secondary_color; ?>;
        }
          #mainNav ul.nav > .menu-item > .sub-menu li.current_page_item {
      background-color: <?php echo $secondary_color;?> }

        @media screen and (min-width: 801px) {
            #mainNav.affix {
                background-color: <?php echo $branding_color; ?>;
            }
        }
        /*------------------------------------------------
       Misc
       --------------------------------------------------*/
        #newsCarousel .carousel-control,
        .box[class*="post"][class*="category-sonderinfos"],
        table.tablepress tr:hover td{
            background-color: <?php echo $branding_color; ?>;
        }
    </style>