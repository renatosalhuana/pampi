<?php

function renderGalleryItem($id, $images, $altText, $description, $isFirst = false) {
    $firstClass = $isFirst ? 'first' : '';
    echo "
    <li class='one_quarter $firstClass'> 
        <div class='scroll-container' id='$id'>";
    
    foreach ($images as $imageSrc) {
        echo "<img src='$imageSrc' alt='$altText'>";
    }
    
    echo "</div> 
    <div class='scroll-custom-dots'>";
    
    for ($i = 0; $i < count($images); $i++) {
        $activeClass = $i === 0 ? 'active' : '';
        echo "<a class='dot-button-scroller $activeClass' href='javascript:moveTo($i, \"$id\")'></a> ";
    }
    
    echo "</div>
        <p style='font-family: butler; text-align: center; font-size: 15px;'>$description</p>
    </li>";
}

function renderSimpleItem($imageSrc, $altText, $description, $isFirst = false) {
    $firstClass = $isFirst ? 'first' : '';
    echo "<img style='width:25%' src='$imageSrc' alt='$altText'>";
}


?>