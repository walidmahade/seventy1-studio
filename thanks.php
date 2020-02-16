<?php

//echo "<pre>";
//var_dump($_REQUEST);
//echo "</pre>";
//
//array(7) {
//    ["service-type"]=>
//  string(11) "Development"
//    ["budget"]=>
//  string(5) "$5000"
//    ["select-platforms"]=>
//  string(6) "Mobile"
//    ["name"]=>
//  string(12) "Walid Mahade"
//    ["email"]=>
//  string(21) "walidmahade@gmail.com"
//    ["message"]=>
//  string(23) "asdasdas asd sad as das"
//    ["links"]=>
//  string(0) ""
//}

/**
 * Collect submitted data
 */
$mail_to = "contact@seventy1.studio";

$service_type = "";
foreach ($_POST["service-type"] as $st) {
    $service_type .= $st;
    $service_type .= ', ';
}

$select_platforms = "";
foreach ($_POST["select-platforms"] as $sp) {
    $select_platforms .= $sp;
    $select_platforms .= ', ';
}

$budget = $_POST["budget"];
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
//$links = $_POST["links"];

$email_body = "
    Client Name: $name \n
    Client Email: $email \n
    Client Budget: $budget \n
    Services Needed: $service_type \n
    Platforms: $select_platforms \n
    Message: $message \n
";

//var_dump($email_body);

// send email
mail($mail_to,"New client: Seventy1.agency", $email_body, "From: $adminmail\nX-Mailer: PHP/", "-odb -f $adminmail");

?>

<?php include "header.php"; ?>

<section id="ty-page" style="padding: 85px 0;">
    <div class="container center">
        <img src="images/undraw_super_thank_you_obwk.svg" alt="" width="350px" style="margin: 0 auto 35px auto;">
        <h2 class="title--sec center">
            Thank you,<br><span class="highlight"><?= $name ?></span>.
        </h2>
        <p class="para center">
            We will be intouch shortly.
        </p>
    </div>
</section>

<?php include "footer.php"; ?>
