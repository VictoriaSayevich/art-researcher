<?php 
    function getArticlePreview ($articleArr) {
        $photo = "Photo"; $date = "Date"; $name = "Name"; $author = "Author"; $category = "Category";
        $articlePreviewLayout = '';
        for ($i = 0; $i < count($articleArr); $i++) {
            $dateFormat = toDateFormat($articleArr[$i][$date]);
            $articlePreviewLayout .= 
            '<article class="article-preview photobox photobox_type">
                <div class="article-preview__photo photobox__previewbox">
                    <a href="#">
                        <img src="'.$articleArr[$i][$photo].'" class="photobox__preview" alt="Статья" title='.$articleArr[$i][$category].'>
                        <span class="photobox__label">'.$articleArr[$i][$category].'</span>
                    </a>
                </div>
                <p class="article-preview__text-info">
                    <span class="article-preview__text-info__author">'.$articleArr[$i][$author].': </span>
                    <span class="article-preview__text-info__name">"'.$articleArr[$i][$name].'"</span>
                </p>
                <p class="article-preview__date">'.$dateFormat.'</p>
            </article>';
        }  
        return $articlePreviewLayout;
    }
?>

<?php
    function getArticleFullPreview($articleArr) {
        $photo = "Photo"; $date = "Date"; $name = "Name"; $author = "Author"; $text = "Text";
        $articlePreviewLayout = '';
        for ($i = 0; $i < count($articleArr); $i++) {
            $dateFormat = toDateFormat($articleArr[$i][$date]);
            $articlePreviewLayout .= 
            '<article class="article">
                <img src="'.$articleArr[$i][$photo].'" alt="music" class="article__photo">
                <p class="article__text-info">
                    <span class="article__text-info__author">'.$articleArr[$i][$author].'</span>
                    <span class="article__text-info__name">'.$articleArr[$i][$name].'</span>
                </p>
                <p class="article__date">'.$dateFormat.'</p>
                <p class="article__text">'.$text.'</p>
            </article>';
        }  
        return $articlePreviewLayout;
    }
?>

<?php
    function getCatalogPreview($catalogArr) {
        $photo = "Photo"; $category = "Category";
        $catalogPreviewLayout = '';
        for ($i = 0; $i < count($catalogArr); $i++) {
            $catalogPreviewLayout .= 
            '<div class="catalog__element">
                <a href="./pages/catalog.html">
                    <h4 class="catalog__element__name">'.$catalogArr[$i][$category].'</h4>
                    <img src="'.$catalogArr[$i][$photo].'" alt="'.$catalogArr[$i][$category].'" title="'.$catalogArr[$i][$category].'" class="catalog__element__photo">
                </a>
            </div>';
        }  
        return $catalogPreviewLayout;
    }
?>