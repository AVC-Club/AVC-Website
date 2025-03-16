<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<h1 class="text-primary fw-bold mb-2">Open Gym</h1>
<p class="text-muted pb-4">
    Sometimes you just want to play volleyball, but organizing a court and gathering enough friends can feel like a hassle. <br>
    We've got you covered. Open gym is perfect for those who want to play casually and connect with others who love the game.<br>
    No registration is needed—just show up and play! Join us for a casual hit, and stay tuned to our socials for the latest updates.
</p>

<?php

echo Card::display('sessionCards', $data);

require(__DIR__ . '/../template/footer.temp.php');
?>