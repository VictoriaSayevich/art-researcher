<?php
    function getFooter() {
        $facebook = "Facebook"; $vk = "Vk"; $instagram = "Instagram";
        $footer = 
            '<footer>
                <div class="social-networks">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-vk"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <p>
                    <a href="./pages/advert.html">Нашли ошибку?</a>
                </p>
            </footer>';
        return $footer;
    }
?>