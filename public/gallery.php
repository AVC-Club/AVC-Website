<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>
<h1 class="text-primary">Memories</h1>
<p class="text-muted pb-4">Explore stunning photos taken by talented photographers during our State League journey</p>




<div class="owl-carousel owl-theme">


    <div class="card" style="width: 18rem;">
        <a href="/gallery/_DSC0388.html" class="stretched-link text-decoration-none">
            <!-- 16:9 ratio wrapper -->
            <div class="ratio ratio-16x9">
                <img src="/images/_temps/Gallery/_DSC0388.jpg" class="card-img-top object-fit-cover" alt="Card image">
            </div>

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
            </div>
        </a>
    </div>


    <div class="card" style="width: 18rem;">
        <a href="/gallery/_DSC0388.html" class="stretched-link text-decoration-none">
            <!-- 16:9 ratio wrapper -->
            <div class="ratio ratio-16x9">
                <img src="/images/_temps/Gallery/_DSC0388.jpg" class="card-img-top object-fit-cover" alt="Card image">
            </div>

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
            </div>
        </a>
    </div>

</div>







<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 250,
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