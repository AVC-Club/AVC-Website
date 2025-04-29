<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');

?>

<p class="text-primary mb-2 display-1">RM3 Gold</p>

<?php
echo Card::display('teamRoster', $teamData); 
?>

<p class="text-muted pb-2">The team is currently competing in the <a href="https://www.volleyballvictoria.org.au/games/21736/37016" target="_blank">State League Three Men</a> league, where they are facing off against some of the best teams in the region. The players are working hard to improve their skills and teamwork, and they are determined to make a name for themselves in the competitive scene.</p>

<div class="card mb-4 shadow-sm border-0">
  <div class="card-body">
    <h5 class="card-title text-primary mb-4">Alliance Gold Results</h5>
    <div class="row">
      <div class="col-6 mb-2">
        <strong>Rank:</strong> 4th
      </div>
      <div class="col-6 mb-2">
        <strong>Games Played:</strong> 4
      </div>
      <div class="col-6 mb-2">
        <strong>Wins:</strong> 3
      </div>
      <div class="col-6 mb-2">
        <strong>Losses:</strong> 1
      </div>
      <div class="col-6 mb-2">
        <strong>Sets Won:</strong> 9
      </div>
      <div class="col-6 mb-2">
        <strong>Sets Lost:</strong> 5
      </div>
      <div class="col-6 mb-2">
        <strong>Win Ratio:</strong> 75%
      </div>
      <div class="col-6 mb-2">
        <strong>Last Updated:</strong> 28/04/2025
      </div>
    </div>
  </div>
</div>

