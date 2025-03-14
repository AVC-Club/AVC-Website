<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<section>
    <div class="container">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h1 class="fw-bold mb-2">Our Committee</h1>
                <p class="text-muted">These are the amazing people that help Alliance Volleyball Club off the court</p>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 mx-auto">

            <?php
            foreach ($members as $member) {
                echo Card::display('committeeMembers', $member);
            }
            ?>

        </div>
    </div>
</section>

<?php
require(__DIR__ . '/../template/footer.temp.php');
?>