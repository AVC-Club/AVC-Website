<?php
require(__DIR__ . '/../template/header.temp.php');
require(__DIR__ . '/../template/navbar.temp.php');

?>

<div class="container pt-4">
    <h1 class="text-primary display-4 mb-3 text-center">Our Teams</h1>
    <p class="text-muted text-center mb-4">Explore the teams representing Alliance in the State League</p>

    <div class="d-flex justify-content-center mb-4">
        <div class="btn-group" role="group" aria-label="Team filter buttons">
            <button type="button" class="btn btn-outline-primary active" id="btn-mens">Men's Teams</button>
            <button type="button" class="btn btn-outline-primary" id="btn-womens">Women's Teams</button>
        </div>
    </div>

    <div id="mens-teams">
        <h4 class="text-center mb-3">Men's State League Teams</h4>
        <table class="table table-bordered table-hover text-center">
            <thead class="table-light">
                <tr>
                    <th scope="col">Team</th>
                    <th scope="col">Division</th>
                    <th scope="col">Preview</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['mens'] as $team): ?>
                <tr>
                    <td><?= htmlspecialchars($team['team']) ?></td>
                    <td><?= htmlspecialchars($team['division']) ?></td>
                    <td><a href="<?= htmlspecialchars($team['link']) ?>" class="btn btn-sm btn-primary" style="background: #ccac00;">View More</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div id="womens-teams" style="display: none;">
        <h4 class="text-center mb-3">Women's State League Teams</h4>
        <table class="table table-bordered table-hover text-center">
            <thead class="table-light">
                <tr>
                    <th scope="col">Team</th>
                    <th scope="col">Division</th>
                    <th scope="col">Preview</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['womens'] as $team): ?>
                <tr>
                    <td><?= htmlspecialchars($team['team']) ?></td>
                    <td><?= htmlspecialchars($team['division']) ?></td>
                    <td><a href="<?= htmlspecialchars($team['link']) ?>" class="btn btn-sm btn-primary" style="background: #ccac00;">View More</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    const mensBtn = document.getElementById('btn-mens');
    const womensBtn = document.getElementById('btn-womens');
    const mensTeams = document.getElementById('mens-teams');
    const womensTeams = document.getElementById('womens-teams');

    mensBtn.addEventListener('click', () => {
        mensBtn.classList.add('active');
        womensBtn.classList.remove('active');
        mensTeams.style.display = 'block';
        womensTeams.style.display = 'none';
    });

    womensBtn.addEventListener('click', () => {
        womensBtn.classList.add('active');
        mensBtn.classList.remove('active');
        mensTeams.style.display = 'none';
        womensTeams.style.display = 'block';
    });
</script>

<?php
require(__DIR__ . '/../template/footer.temp.php');
?>
