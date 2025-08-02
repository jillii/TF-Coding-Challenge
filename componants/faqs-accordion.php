<?php
    include 'data/faqs.php';
    $headline = 'Product FAQs';
    $subtitle = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.';
    $cta      = array('link' => '#', 'text' => 'Contact');
?>

<section id="faqs" class="faqs">
    <div class="container">
        <div class="flexbox">
            <div class="faqs-header">
                <?php include 'componants/section-header.php' ?>
            </div>
            <?php if ($faqs) : ?>
                <div class="faqs-accordion">
                    <?php foreach ($faqs as $faq) : ?>
                        <?php
                            $question = $faq['question'];
                            $answer   = $faq['answer'];
                        ?>
                        <?php if ($question && $answer) : ?>
                            <div class="faq">
                                <button type="button" aria-expanded="true" class="faq-question h4">
                                    <?php echo $question ?>
                                    <div class="toggle"></div>
                                </button>
                                <div class="drawer">
                                    <p class="faq-answer"><?php echo $answer ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
    