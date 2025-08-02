<?php if (isset($headline)) : ?>
    <h2 class="h2 section-header-headline"><?php echo $headline ?></h2>
<?php endif; ?>
<?php if (isset($subtitle)) : ?>
    <p class="section-header-copy"><?php echo $subtitle ?></p>
<?php endif; ?>
<?php if (isset($cta)) : ?>
    <?php
        $link = $cta['link'];
        $text = $cta['text'];
    ?>
    <?php if ($link && $text) : ?>
        <a href="<?php echo $link ?>" class="btn section-header-cta"><?php echo $text ?></a>
    <?php endif; ?>
<?php endif; ?>
