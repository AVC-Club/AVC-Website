<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>
<p class="text-primary mb-2 display-1">Memories</p>
<p class="text-muted pb-4">Explore stunning photos taken by talented photographers during our State League journey</p>

//! CARD VIEW ON MOBILE IS MISALIGNED
<?php
echo Card::display('albumCarousel', $data);
?>


<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        margin: 300,
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