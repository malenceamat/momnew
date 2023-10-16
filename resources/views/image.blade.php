

<?php global $post, $result; if ($post) : ?>
    <?php foreach ($post ?? '' as $key->$result) : ?>
<div class="card">
    <h5 class="card-header"><?= $key->text ?> </h5>
    <div class="card-body">
        <h5 class="card-title"><?= $result->chtoto ?> </h5>
        <p class="card-text"><?= $result->qwe ?></p>
        <a href="#" class="btn btn-primary">go nahui</a>
    </div>
</div>


<?php endforeach ?>
<?php endif ?>


