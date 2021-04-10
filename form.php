<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $date_from = $_POST['date_from'];
  $time_from = $_POST['time_from'];
  $date_to = $_POST['date_to'];
  $time_to = $_POST['time_to'];
  $how_can_we_help = $_POST['how_can_we_help'];

  if (empty($first_name)) {
    $errors[] = 'Bitte einen Vornamen angeben.';
  }
  if (empty($last_name)) {
    $errors[] = 'Bitte einen Nachnamen angeben.';
  }
  if (empty($email)) {
    $errors[] = 'Bitte eine E-Mail-Adresse angeben.';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Die E-Mail-Adresse ist ungültig.';
  }
  if (empty($date_from)) {
    $errors[] = 'Bitte angeben, an welchem Tag du anreisen möchtest.';
  }
  if (empty($time_from)) {
    $errors[] = 'Bitte angeben, zu welcher Uhrzeit du anreisen möchtest.';
  }
  if (empty($date_to)) {
    $errors[] = 'Bitte angeben, an welchem Tag du abreisen möchtest.';
  }
  if (empty($time_to)) {
    $errors[] = 'Bitte angeben, zu welcher Uhrzeit du abreisen möchtest.';
  }

  if (empty($errors)) {
    $toEmail = 'example@example.com';
    $emailSubject = 'New email from your contant form';
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = [
      "Name: {$first_name} {$last_name}",
      "Email: {$email}",
      "Message:", $how_can_we_help
    ];
    $body = implode(PHP_EOL, $bodyParagraphs);

    if (mail($toEmail, $emailSubject, $body, $headers)) {
      header('Location: thank-you.html');
    } else {
      $errorMessage = 'Oops, something went wrong. Please try again later';
    }
    return;
  } else {
    $allErrors = implode('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
  }
}
