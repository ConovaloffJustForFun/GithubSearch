<div class="result container center">
<?php
/** @var $result array */
if (empty($result)):?>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            Not found repositories with this query.
        </div>
    </div>
<?php else: ?>
    <?php foreach ($result as $repo): ?>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a href="<?= $repo['html_url'] ?>"><?= $repo['html_url'] ?></a>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</div>