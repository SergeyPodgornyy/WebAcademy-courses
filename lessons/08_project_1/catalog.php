<?php

$pageTitle = 'Full catalog';
$section = null;

if (isset($_GET['cat'])) {
    switch ($_GET['cat']) {
        case 'books':
            $section = 'books';
            $pageTitle = 'Books';
            break;
        case 'movies':
            $section = 'movies';
            $pageTitle = 'Movies';
            break;
        case 'music':
            $section = 'music';
            $pageTitle = 'Music';
            break;
    }
}

include 'inc/header.php';
require_once 'inc/data.php';
require_once 'inc/functions.php';

?>

    <div class="section catalog page">
        <div class="wrapper">
            <div class="breadcrumbs">
                <?php
                    if ($section) {
                        echo '<a href="catalog.php">Full catalog</a> &gt; ';
                    }
                    echo $pageTitle;
                ?>
            </div>

            <ul class="items">

                <?php $sorted = getSortedItems($catalog, $section); ?>

                <?php foreach ($sorted as $id) : ?>

                    <?= getMediaListItem($id, $catalog[$id]) ?>

                <?php endforeach; ?>

            </ul>
        </div>
    </div>

<?php

include 'inc/footer.php';

?>
