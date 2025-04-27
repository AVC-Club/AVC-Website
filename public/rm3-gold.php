<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');

// $data is now available because 'app.php' renders 'rm3-gold.php' and passes $roster
?>

<p class="text-primary mb-2 display-1">RM3 Gold</p>

<p class="text-muted pb-2">Explore the teams that represent Alliance in the State League</p>

<?php
echo Card::display('teamRoster', $teamData); 
?>

