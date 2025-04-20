<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<p class="text-primary mb-2 display-1">Our Committee</p>
<p class="text-muted pb-4">These are the amazing people that help Alliance Volleyball Club off the court</p>
<div class="row row-cols-2 row-cols-md-3 mx-auto pt-5">

    <?php
    foreach ($members as $member) {
        echo Card::display('committeeMembers', $member);
    }
    ?>

</div>


<?php
require(__DIR__ . '/../template/footer.temp.php');
?>