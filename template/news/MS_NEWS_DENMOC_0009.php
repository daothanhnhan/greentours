<?php 

    $holiday = $action->getList('holiday_cat', 'productcat_id', $rowCatLang['productcat_id'], 'id', 'asc', '', '', '');

    $holiday_count = count($holiday);

?>

<h2 id="info" class="gb-title" data-anchortext="Video">

                Holiday Information </h2>

            <div class="holiday-info ">

                <div class="row">

                    <?php 

                    $d = 0;

                    foreach ($holiday as $item) { 

                        $d++;

                    ?>

                    <div class="col-md-6 col-sm-12 col-xs-12 icon-info1 holiday-item" data-toggle="modal" data-target="#holiday-item-<?= $d ?>">
                        <div class="holiday-item-1">
                        <span class="holiday-item-col5"> 

                            <img src="/images/<?= $item['image'] ?>">

                        </span>

                        <span class="holiday-item-col7"><?= $item['name'] ?></span>
                        </div>
                    </div>

                    <?php 

                        if ($d%2==0) {

                            if ($d != $holiday_count) {

                                echo '</div><div class="row">';

                            }

                        }

                    } ?>

                </div>

            </div>

<?php 

$d = 0;

foreach ($holiday as $item) { 

    $d++;

?>

<!-- Modal -->

<div id="holiday-item-<?= $d ?>" class="modal fade" role="dialog">

  <div class="modal-dialog" style="margin-top: 60px;">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title" style="width: 100%;"><?= $item['name'] ?></h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        

      </div>

      <div class="modal-body">

        <?= $item['note'] ?>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>

    </div>



  </div>

</div>

<?php } ?>