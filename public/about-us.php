<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<!--
<p class="text-primary mb-2 display-1">Values</p>
<h4 class="text-white">
    Established with a passion for the game <br>
    and a vision for growth, we aim to build a <br>
    community united by a love for volleyball.
</h4>
-->

<!--- History and results of major competitions -->
<!--- This is shown with a table format -->
<h4 class="text-primary mb-2 pb-5 display-1">History and Results</h4>

<div class="card text-start">
  <img class="card-img-top" src="/images/_temps/Gallery/vvl res 2.jpg" alt="V-League 2018 Winner" />
  <div class="card-body">
    <h4 class="card-title">2024 State League Two Men's Champions</h4>
    <div class="table-responsive">
      <table class="table table-secondary">
        <thead>
          <tr>
            <th scope="col">Runner-up(s):</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td scope="row">2024 State League Three Men</td>
          </tr>
          <tr class="">
            <td scope="row">2024 State League Two Women</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
require(__DIR__ . '/../template/footer.temp.php');
?>