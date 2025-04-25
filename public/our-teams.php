<?php
require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');
?>

<!-- Add Teams Section -->
<div class="teams-section">
    <div class="container">
        <h1>Our Teams</h1>

        <?php foreach ($teams as $group): ?>
            <h2><?= htmlspecialchars($group['gender']) ?>'s Teams</h2>
            <div class="team-grid">
                <?php foreach ($group['items'] as $team): ?>
                    <div class="team-card">
                        <a href="<?= htmlspecialchars($team['link']) ?>">
                            <img src="<?= htmlspecialchars($team['image']) ?>" alt="<?= htmlspecialchars($team['name']) ?>">
                            <h3><?= htmlspecialchars($team['name']) ?></h3>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
require(__DIR__ . '/../template/footer.temp.php');
?>

<style>
    .teams-section {
    padding: 2rem 0;
}
.team-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}
.team-card {
    flex: 1 1 200px;
    max-width: 250px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    background: #f9f9f9;
    transition: transform 0.2s ease-in-out;
}
.team-card:hover {
    transform: scale(1.03);
}
.team-card img {
    width: 100%;
    height: auto;
}
.team-card h3 {
    padding: 1rem;
    margin: 0;
}

</style>