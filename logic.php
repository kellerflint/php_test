<?php
    // Idea is we have members with different levels of access that we 
    // display different things to. Non-member = 0 <= false, member = 1 <= true
    $member = 1;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <section class="both">You are a member or a guest</section>
    <?php 
        if($member) {
    ?>
    <section class="member">You are a member</section>
    <?php
        }
    ?>
    <?php
        if(!$member) {
    ?>
    <section class="guest">You are a guest</section>
    <?php
        }
    ?>
</body>
</html>