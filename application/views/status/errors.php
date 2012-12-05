<?php foreach ($infos as $info): ?>
<?php if ($info): ?>
<div class="message red">
    <?php echo $info ?>
    <img src="<?php echo resource_url('gfx/icon-close.gif') ?>" alt="Close this item" />
</div>
<?php endif; ?>
<?php endforeach; ?>

<script type="text/javascript" src="<?php echo resource_url('js/in/status.js') ?>"></script>