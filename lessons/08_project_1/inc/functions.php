<?php

function getMediaListItem($id, $item) {
    return "<li>
                <a href=\"details.php?id={$id}\">
                    <img src=\"{$item['img']}\" alt=\"{$item['title']}\">
                    <p>View Details</p>
                </a>
            </li>";
}

function getSortedItems($catalog, $category) {
    $output = [];

    foreach ($catalog as $id => $item) {
        if (!$category OR strtolower($item['category']) == $category) {
            $sort = $item['title'];
            $sort = ltrim($sort, 'The ');
            $sort = ltrim($sort, 'A ');
            $sort = ltrim($sort, 'An ');
            $output[$id] = $sort;
        }
    }

    asort($output);
    return array_keys($output);
}

function getOptionsList(array $array, $type) {
    $result = '';

    foreach ($array as $key => $value) {
        $result .= '<optgroup label="'.$key.'">';
        foreach ($value as $name) {
            $result .= '<option value="'.$name.'"'.($name == $type ? ' selected ' : '' ).'>'.$name.'</option>';
        }
        $result .= '</optgroup>';
    }

    return $result;
}
