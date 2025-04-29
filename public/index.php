<?php
require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<div class="row">
    <div class="col-md-8 col-xl-3 text-center text-md-start mx-auto">
        <section class="py-4 py-xl-5">
            <div class="text-center p-4 p-lg-5">
                <p class="fw-bold text-primary mb-2">
                    <span class="text-primary">Proud to introduce</span>
                </p>
                <h1 class="fw-bold mb-4 text-white">Alliance Volleyball Club</h1>
                <a href="/open-gym" class="btn btn-primary fs-5 me-2 py-2 px-4">
                    Come Play!
                </a>
            </div>
        </section>
    </div>
    <div class="col">
        <div class="col">
            <div id="avc-collage">
                <figure class="avc-img avc-img-1">
                    <img src="images/_temps/Gallery/240817%20AVC%20SL2MG%20SF-85.jpg" class="img-fluid rounded-3" alt="Player celebrates at the net">
                </figure>

                <figure class="avc-img avc-img-2">
                    <img src="images/_temps/Gallery/240817%20AVC%20SL2MG%20SF-69.jpg" class="img-fluid rounded-3" alt="Team huddle">
                </figure>

                <figure class="avc-img avc-img-3">
                    <img src="images/_temps/Gallery/_DSC1659.jpg" class="img-fluid rounded-3" style="max-height:300px;object-fit:cover;" alt="Jump block">
                </figure>
            </div>
        </div>
    </div>
</div>

<!--- Header to see what's been happening on Instagram -->
<div class="row text-center py-4 py-xl-5">
    <div class="col-md-8 col-xl-3 mx-auto">
        <h2 class="fw-bold mb-4 text-white">Follow us on Instagram</h2>
        <p class="text-muted mb-4">See what we've been up to lately!</p>
    </div>

<behold-widget feed-id="VrfTcExpKkJcSSFJMGXu"></behold-widget>
<script>
  (() => {
    const d=document,s=d.createElement("script");s.type="module";
    s.src="https://w.behold.so/widget.js";d.head.append(s);
  })();
</script>

<?php
require(__DIR__ . '/../template/footer.temp.php');
?>