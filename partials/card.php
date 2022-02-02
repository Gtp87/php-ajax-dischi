<?php include __DIR__ . '/../server/db.php'; ?>

<?php foreach ($cards as $card) { ?>
<div class="col">
    <div class="spotify-card p-3">
        <img class="p-3" src="<?= $card['poster'] ?>" alt="">
        <span class="title"><?=$card['title']?></span>
        <span class="subtitle"><?=$card['author']?></span>
        <span class="year"><?=$card['year']?></span>
    </div>
</div>

<?php } ?>