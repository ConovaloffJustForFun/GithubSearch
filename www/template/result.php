<div class="result container center">
<?php

/** @var $result array */
foreach ($result as $repo): ?>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="<?= $repo['html_url'] ?>"><?= $repo['html_url'] ?></a>
        </div>
    </div>
<?php endforeach; ?>
</div>