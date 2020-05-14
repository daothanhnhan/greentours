<?php 

    $golf = $action->getList('golf', '', '', 'id', 'asc', '', '', '');

    $golf_count = count($golf);

?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<h2 id="golf"class="">Golf Sevices</h2>

<div class="gb-golf-slide owl-carousel owl-theme">

    <?php 

    $d = 0;

    foreach ($golf as $item) { 

        $d++;

    ?>

    <div class=" golfsv col-md-12 col-sm-12 col-xs-12 nopadding" data-toggle="modal" data-target="#golf-item-<?= $d ?>">

        <div class="overlay-1"></div>
        <div class="item">
            <img src="/images/<?= $item['image'] ?>">
        </div>
        

        <p><?= $item['name'] ?></p>

    </div>

    <?php 

        if ($d%3==0) {

            if ($d != $golf_count) {

                // echo '</div><div class="row">';

            }

        }

    } ?>

</div>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-golf-slide').owlCarousel({
            loop:true,
            margin:0,
            navSpeed:500,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],
            // items:1,
            margin:2,
            responsive:{
                0:{
                    nav: false,
                    items: 2
                },
                767:{
                    nav:true,
                    items: 3
                },
                992:{
                    items:5,
                    nav:true
                }
            }
        });
    });
</script>
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