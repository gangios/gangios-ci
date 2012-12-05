<?php if (isset($info)): ?>
<div class="message green" id="success">
    <?php echo $info ?>
    <img src="<?php echo resource_url('gfx/icon-close.gif') ?>" alt="Close this item" />
</div>
<?php endif; ?>

<script type="text/javascript" src="<?php echo resource_url('js/in/status.js') ?>"></script>