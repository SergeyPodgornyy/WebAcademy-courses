<?php

$pageTitle = 'Suggest a Media Item';
$section = 'suggest';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
    $category = trim(filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
    $format = trim(filter_input(INPUT_POST, 'format', FILTER_SANITIZE_STRING));
    $genre = trim(filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING));
    $year = trim(filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING));
    $details = trim(filter_input(INPUT_POST, 'details', FILTER_SANITIZE_SPECIAL_CHARS));

    if (!$name || !$email || !$category || !$title) {
        $errors[] = 'Please fill in required fields: Name, Email, Category, Title';
    } elseif (!isset($_POST['address']) || !empty($_POST['address'])) {
        $errors[] = 'Bad form input';
    } else {
        // TODO: Send email

        header('Location: suggest.php?status=thanks');
        exit;
    }
}

include 'inc/header.php';
require 'inc/data.php';
require 'inc/functions.php';

?>

    <div class="section page">

        <?php if (isset($_GET['status']) && $_GET['status'] == 'thanks') : ?>
            <h1>Thank you!</h1>

            <p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>

        <?php else : ?>

            <h1>Suggest new media item</h1>

            <?php foreach ($errors as $error) : ?>
                <p class="message"><?= $error ?></p>
            <?php endforeach; ?>

            <?php if (!$errors) : ?>
                <p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.</p>
            <?php endif; ?>
            <form method="POST">
                <table>
                    <tr>
                        <th>
                            <label for="name">Name <span class="required">(required)</span></label>
                        </th>
                        <td>
                            <input type="text" name="name" id="name" <?= isset($name) ? 'value='.$name : '' ?>>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="email">Email <span class="required">(required)</span></label>
                        </th>
                        <td>
                            <input type="text" name="email" id="email" <?= isset($email) ? 'value='.$email : '' ?>>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="category">Category <span class="required">(required)</span></label>
                        </th>
                        <td>
                            <select name="category" id="category">
                                <option value="">Select One</option>
                                <option value="Books" <?= isset($category) && $category == 'Books' ? 'selected' : '' ?>>Books</option>
                                <option value="Movies" <?= isset($category) && $category == 'Movies' ? 'selected' : '' ?>>Movies</option>
                                <option value="Music" <?= isset($category) && $category == 'Music' ? 'selected' : '' ?>>Music</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="title">Title <span class="required">(required)</span></label>
                        </th>
                        <td>
                            <input type="text" name="title" id="title" <?= isset($title) ? 'value='.$title : '' ?>>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="format">Format</label>
                        </th>
                        <td>
                            <select name="format" id="format">
                                <option value="">Select One</option>
                                <?= getOptionsList($formats, $format ?? '') ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="genre">Genre</label>
                        </th>
                        <td>
                            <select name="genre" id="genre">
                                <option value="">Select One</option>
                                <?= getOptionsList($genres, $genre ?? '') ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="year">Year</label>
                        </th>
                        <td>
                            <input type="text" name="year" id="year" <?= isset($year) ? 'value='.$year : '' ?>>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="details">Additional Details</label>
                        </th>
                        <td>
                            <textarea name="details" id="details"><?= isset($details) ? htmlspecialchars($details) : '' ?></textarea>
                        </td>
                    </tr>
                    <tr style="display: none">
                        <th>
                            <label for="address">Address</label>
                        </th>
                        <td>
                            <input type="text" name="address" id="address">
                            <p>Please leave this field blank.</p>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Send">
            </form>
        <?php endif; ?>


    </div>


<?php

include 'inc/footer.php';

?>
