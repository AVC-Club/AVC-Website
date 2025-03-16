<?php
include_once(__DIR__ . '/../component/card.comp.php');

require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<h1 class="text-primary fw-bold mb-2">Upcoming Games</h1>
<p class="text-muted pb-4">Come support our teams and see how we are going each week!</p>

<?php
//! MOBILE VIEW STILL WONKY. WILL NEED A FIX ON 'component/card.comp.php', fixtureCard Method!
echo Card::display('fixtures', $matches);

require(__DIR__ . '/../template/footer.temp.php');
?>