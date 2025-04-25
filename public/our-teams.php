<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<p class="text-primary mb-2 display-1">Our Teams</p>
<p class="text-muted pb-2">Explore the teams that representing Alliance in the State League</p>

<?php
echo Card::display('teamsTable', $data);
?>

<?php
require(__DIR__ . '/../template/footer.temp.php');
?>
