<?php 

    $holiday = $action->getList('holiday', '', '', 'id', 'asc', '', '', '');

    $holiday_count = count($holiday);

?>

<h2 id="info" data-anchortext="Video">

                Holiday Information </h2>

            <div class="holiday-info">

                <div class="row">

                    <?php 

                    $d = 0;

                    foreach ($holiday as $item) { 

                        $d++;

                    ?>

                    <div class="col-md-4 col-sm-4 col-xs-4 icon-info" data-toggle="modal" data-target="#holiday-item-<?= $d ?>">

                        <span> 

                            <img src="/images/<?= $item['image'] ?>">

                        </span>

                        <span><?= $item['name'] ?></span>

                        <hr/>

                    </div>

                    <?php 

                        if ($d%3==0) {

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