<?php 

    $golf = $action->getList('golf', '', '', 'id', 'asc', '', '', '');

    $golf_count = count($golf);

?>

<h2 id="golf"class="">Golf Sevices</h2>

<div class="row">

    <?php 

    $d = 0;

    foreach ($golf as $item) { 

        $d++;

    ?>

    <div class=" golfsv col-md-4 col-sm-4 col-xs-4" data-toggle="modal" data-target="#golf-item-<?= $d ?>">

        <img src="/images/<?= $item['image'] ?>">

        <p><?= $item['name'] ?></p>

    </div>

    <?php 

        if ($d%3==0) {

            if ($d != $golf_count) {

                echo '</div><div class="row">';

            }

        }

    } ?>

</div>

<?php 

$d = 0;

foreach ($golf as $item) { 

    $d++;

?>

<!-- Modal -->

<div id="golf-item-<?= $d ?>" class="modal fade" role="dialog">

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