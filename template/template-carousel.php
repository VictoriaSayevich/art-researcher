<?php
    function getCarousel($itemArr) {
        $author = "Author"; $text = "Text";
        $carouselItem = ''; $active = " active";
        for ($i = 0; $i < count($itemArr); $i++) {
            if ($i != 0)  $active = "";
            $carouselItem .= 
            '<div class="carousel-item'.$active.'">
                <blockquote class="d-block w-100 quote">
                    <div class="quote-element">
                        <p>'.$itemArr[$i][$text].'</p>
                        <footer>'.$itemArr[$i][$author].'</footer>
                    </div>
                </blockquote>
            </div>';
        }  
        return $carouselItem;
    }
?>