<?php
    require_once '_inc/functions.php';

    //gestion du formulaire
    processContactForm();

    //inclusions
    require_once '_inc/header.php';
    require_once '_inc/nav.php';
?>

    <h1>Contact</h1>

    <form method="post">
        <p>
            <label>Firstname :</label>
            <input type="text" name="firstname">
        </p>
        <br>
        <p>
            <label>Lastname :</label>
            <input type="text" name="lastname">
        </p>
        <br>
        <p>
            <label>Email :</label>
            <input type="email" name="email">
        </p>
        <br>
        <p>
            <label>Subject :</label>
            <input type="text" name="subject">
        </p>
        <br>
        <p>
            <label>Message :</label><br>
            <textarea name="message"></textarea>
        </p>
        <br>
        <p>
            <input type="submit" name="submit">
        </p>
    </form>

<?php

    echo '<pre>'; var_dump($_POST); echo '</pre>';

    [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'subject' => $subject,
        'message' => $message,
    ] = $_POST;
    //inclusions
    require_once '_inc/footer.php';
?>