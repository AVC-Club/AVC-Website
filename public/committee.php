<?php
require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<h1>Committee Members</h1>
<ul>
    <?php foreach ($members as $member): ?>
        <li><?= htmlspecialchars($member['name']) ?> - <?= htmlspecialchars($member['position']) ?></li>
    <?php endforeach; ?>
</ul>

<?php
require(__DIR__ . '/../template/footer.temp.php');
?>