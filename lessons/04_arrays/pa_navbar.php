<?php

$nav = [
    ["url"  =>  "index.php",    "title" => "Главная"],
    ["url"  =>  "contacts.php", "title" => "Контакты"],
    ["url"  =>  "items.php",    "title" => "Товары"],
];

echo "<ul>";

foreach ($nav as $item) :
?>
    <li>
        <a href="<?=$item['url']?>"><?=$item['title']?></a>
    </li>
<?php
endforeach;

echo "</ul>";