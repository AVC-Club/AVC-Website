<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>
<h1 class="text-primary">Memories</h1>
<p class="text-muted pb-4">Explore stunning photos taken by talented photographers during our State League journey</p>

<div class="owl-carousel owl-theme">
    <div class="item"><h4><img src="/images/generic-placeholder_user.jpg"></h4></div>
    <div class="item"><h4><img src="/images/generic-placeholder_user.jpg"></h4></div>
    <div class="item"><h4><img src="/images/generic-placeholder_user.jpg"></h4></div>
    <div class="item"><h4><img src="/images/generic-placeholder_user.jpg"></h4></div>
    <div class="item"><h4><img src="/images/generic-placeholder_user.jpg"></h4></div>
    <div class="item"><h4><img src="/images/generic-placeholder_user.jpg"></h4></div>
    <div class="item"><h4><img src="/images/generic-placeholder_user.jpg"></h4></div>
    <div class="item"><h4><img src="/images/generic-placeholder_user.jpg"></h4></div>

</div>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>




<?php
require(__DIR__ . '/../template/footer.temp.php');
?>