<?php 
    $faqs = $action->getList('faqs_visa_laos', '', '', 'id', 'asc', '', '', '');
?>
<h2 id="faq" data-anchortext="FAQ's">Laos Visa FAQs</h2>
            <div class="panel-group" data-template="peak-shortcode-aggregate--display-accordion">
                <?php foreach ($faqs as $item) { ?>
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed"
                                href="#<?= $item['id'] ?>-faqs">
                                <?= $item['name'] ?> <div class="pull-right accordion-expander">
                                    <i class="fa fa-plus-circle"></i>
                                    <i class="fa fa-minus-circle"></i>
                                </div>
                            </a>
                        </h4>
                    </div>
                    <div id="<?= $item['id'] ?>-faqs" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?= $item['note'] ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>