<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<p class="text-primary mb-2 display-1">Upcoming Games</p>
<p class="text-muted pb-4">Come support our teams and see how we are going each week!</p>

<?php
//! MOBILE VIEW STILL WONKY. WILL NEED A FIX ON 'component/card.comp.php', fixtureCard Method!
echo Card::display('fixtures', $matches);

require(__DIR__ . '/../template/footer.temp.php');
?>