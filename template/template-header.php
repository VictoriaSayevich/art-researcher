<?php
    require_once "functions/functions.php";
?>

<?php 
    function getSocialNetworks($links) {
        $facebook = "Facebook"; $vk = "Vk"; $instagram = "Instagram";
        $socialNetworks = 
            '<li><a href="'.$links[$facebook].'"><i class="fab fa-facebook-f"></i></a></li>
             <li><a href="'.$links[$vk].'"><i class="fab fa-vk"></i></a></li>
             <li><a href="'.$links[$instagram].'"><i class="fab fa-instagram"></i></a></li>';
        return $socialNetworks;
    }

    function getNavBar($barArr) {
        $navBar = ''; $name = "Name"; $link = "Link";
        for($i = 0; $i < count($barArr); $i++) {
            $navBar .= 
            '<li class="main-menu__element__page"><a href="'.$barArr[$i][$link].'">'.$barArr[$i][$name].'</a></li>';
        }
        return $navBar;
    }

    function getMenuCategory($menuArr) {
        $menu = ''; $name = "Name"; $link = "Link";
        for($i = 0; $i < count($menuArr); $i++) {
            $menu .= 
            '<a href="'.$menuArr[$i][$link].'">
                <li>'.$menuArr[$i][$name].'</li>
            </a>';
        }
        return $menu;
    }
?>

<?php
    function getHeader() {
        $navBarTable = getMenu(0); $menuCategoryTable = getMenu(1);
        $category = getMenuCategory($menuCategoryTable); $navBar = getNavBar($navBarTable);

        $header = 
            '<header class="not-scroll">
                <nav role="navigation">
                    <div id="menuToggle">
                        <input type="checkbox"/>
                        <span></span>
                        <span></span>
                        <span></span>
                        <ul id="menu">'.$category.'</ul>
                    </div>
                </nav>
            <div class="header__element">
                <nav class="main-menu">
                    <ul class="main-menu__element">'.$navBar.'</ul>
                </nav>
                <div class="social-networks">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-vk"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </header>';
        return $header;
    }
?>