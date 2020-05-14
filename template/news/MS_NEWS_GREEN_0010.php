<?php 
    $faqs = $action->getList('tourcat_faqs', 'productcat_id', $rowCatLang['productcat_id'], 'id', 'asc', '', '', '');
?>
<h2 id="faq" class="golf-title-h2" data-anchortext="FAQ's">Travel FAQs</h2>
            <div class="panel-group" data-template="peak-shortcode-aggregate--display-accordion">
                <?php foreach ($faqs as $item) { ?>
                <button class="accordion"><?= $item['name'] ?></button>
                <div class="panel-faq">
                  <?= $item['note'] ?>
                </div>
                <?php } ?>
            </div>