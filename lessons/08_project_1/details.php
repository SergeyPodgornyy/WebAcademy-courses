<?php

require 'inc/data.php';

if (!isset($_GET['id']) || !in_array($_GET['id'], array_keys($catalog))) {
    header('Location: catalog.php');
}

$item = $catalog[$_GET['id']];

$pageTitle = $item['title'];
$section = strtolower($item['category']);

include 'inc/header.php';

?>
<div class="section page">
    <div class="wrapper">
        <div class="breadcrumbs">
            <a href="catalog.php">Full Catalog</a>
            &gt;
            <a href="<?= "catalog.php?cat=".strtolower($item["category"]) ?>">
                <?= $item["category"] ?>
            </a>
            &gt;
            <?= $item["title"] ?>
        </div>

        <div class="media-picture">
            <span>
                <img src="<?= $item["img"] ?>" alt="<?= $item["title"] ?>">
            </span>
        </div>
        <div class="media-details">
            <h1><?= $item["title"] ?></h1>
            <table>
                <tr>
                    <th>Genre</th>
                    <td><?= $item['genre'] ?></td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td><?= $item['year'] ?></td>
                </tr>
                <tr>
                    <th>Format</th>
                    <td><?= $item['format'] ?></td>
                </tr>

                <?php if ($section == 'books') : ?>

                    <tr>
                        <th>Authors</th>
                        <td><?= implode(', ', $item['authors']) ?></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><?= $item['publisher'] ?></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><?= $item['isbn'] ?></td>
                    </tr>

                <?php elseif ($section == 'movies') : ?>

                    <tr>
                        <th>Director</th>
                        <td><?= $item['director'] ?></td>
                    </tr>
                    <tr>
                        <th>Writers</th>
                        <td><?= implode(', ', $item['writers']) ?></td>
                    </tr>
                    <tr>
                        <th>Stars</th>
                        <td><?= implode(', ', $item['stars']) ?></td>
                    </tr>

                <?php elseif ($section == 'music') : ?>

                    <tr>
                        <th>Artist</th>
                        <td><?= $item['artist'] ?></td>
                    </tr>

                <?php endif; ?>
            </table>
        </div>
    </div>
</div>

<?php

include 'inc/footer.php';

?>
