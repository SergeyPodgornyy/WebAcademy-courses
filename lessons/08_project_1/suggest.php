<?php

$pageTitle = 'Suggest new media item';
$section = 'suggest';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['details'])) {
        $errors[] = 'Missing required params';
    } elseif (empty(trim($_POST['name'])) || empty(trim($_POST['email'])) || empty(trim($_POST['details']))) {
        $errors[] = 'Fill out required params';
    } elseif (!isset($_POST['address']) || !empty($_POST['address'])) {
        $errors[] = 'Bad form input';
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $details = $_POST['details'];

        // TODO: Send email

        header('Location: suggest.php?status=thanks');
        exit;
    }
}

include 'inc/header.php';

?>

    <div class="section page">

        <?php if (isset($_GET['status']) && $_GET['status'] == 'thanks') : ?>
            <h1>Thank you!</h1>

            <p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>

        <?php else : ?>

            <h1>Suggest new media item</h1>

            <?php foreach ($errors as $error) : ?>
                <p style="color: red"><?= $error ?></p>
            <?php endforeach; ?>

            <p>If you think there is something I&rsquo;m missing, let me know! Complete the form to send me an email.</p>
            <form method="POST">
                <table>
                    <tr>
                        <th>
                            <label for="name">Name</label>
                        </th>
                        <td>
                            <input type="text" name="name" id="name" <?= isset($_POST['name']) ? 'value='.$_POST['name'] : '' ?>>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="email">Email</label>
                        </th>
                        <td>
                            <input type="text" name="email" id="email" <?= isset($_POST['email']) ? 'value='.$_POST['email'] : '' ?>>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="details">Suggest Item Details</label>
                        </th>
                        <td>
                            <textarea name="details" id="details"><?= isset($_POST['details']) ? $_POST['details'] : '' ?></textarea>
                        </td>
                    </tr>
                    <tr style="display: none">
                        <th>
                            <label for="address">Address</label>
                        </th>
                        <td>
                            <input type="text" name="address" id="address">
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
