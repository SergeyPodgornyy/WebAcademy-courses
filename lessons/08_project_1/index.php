<?php

$pageTitle = 'Personal Media Library';
$section = null;

include 'inc/header.php';
require_once 'inc/data.php';
require_once 'inc/functions.php';

?>
        <div class="section catalog random">

            <div class="wrapper">

                <h2>May we suggest something?</h2>

                    <ul class="items">
                        <?php $random = array_rand($catalog, 4); ?>
                        <?php foreach ($random as $id) : ?>

                            <?= getMediaListItem($id, $catalog[$id]) ?>

                        <?php endforeach; ?>
                    </ul>

            </div>

        </div>

<?php

include 'inc/footer.php';

?>
