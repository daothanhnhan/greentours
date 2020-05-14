<?php 

    $pro_top_viet = $action->getList('product', 'product_hot', '1', 'product_id', 'desc', '', '6', '');

?>

<h2 id="traveldeals" data-anchortext="Travel deals">Top Vietnam travel deals</h2>



<div class="table-departure ng-scope" data-template="peak-shortcode-departure--display-table"

    peak-departure-show-more="">

    <div class="table-departure__collection">

        <table class="table table-striped table-td-middle-align">

            <thead>

                <tr>

                    <!-- <th>Departing</th> -->

                    <th class="hidden-xs">Trip name</th>

                    <th class="hidden-xs hidden-sm"></th>

                    <th>Days</th>

                    <th class="text-center">From USD</th>

                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php 

                foreach ($pro_top_viet as $item) { 

                    $itinerary = $action->getList('itinerary', 'product_id', $item['product_id'], 'id', 'asc', '', '', '');

                    $count = count($itinerary);

                ?>

                <tr class="table-departure__item ">

                    <!-- <td class="table-departure__date">

                        <h5><a href="/<?= $item['friendly_url'] ?>"><?= date('d M Y', strtotime($item['product_code'])) ?></a></h5>

                        <span class="visible-xs"><a href="/en/vietnam/cycle-northern-vietnam-115665">Cycle

                                Northern Vietnam</a></span>

                    </td> -->

                    <td class="hidden-xs">

                        <p><a href="/<?= $item['friendly_url'] ?>"><?= $item['product_name'] ?></a>

                        </p>

                        <p><?= $item['product_shape'] ?></p>

                    </td>

                    <td class="hidden-xs hidden-sm">

                        <div class="map-circle" data-toggle="modal" data-target=".departure-modal-5d6a2b5a80946-0"

                            title="View trip map">

                            <div class="image-placeholder" style="padding-bottom:calc(100%)"><img

                                    class="img-responsive image peak-image-responsive ng-scope lazyautosizes lazyloaded"

                                    width="75" height="75" alt="<?= $item['product_name'] ?>"

                                    title="<?= $item['product_name'] ?>"

                                    data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvxs_2020.gif"

                                    data-sizes="auto" data-expand="100"

                                    

                                    sizes="75px"

                                    

                                    src="/images/<?= $item['product_img'] ?>">

                            </div>

                        </div>

                        <div class="modal fade departure-modal-5d6a2b5a80946-0" tabindex="-1" role="dialog"

                            aria-labelledby="myModalLabel" aria-hidden="true" open-modal="">

                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal"

                                            aria-label="Close"><span aria-hidden="true">×</span></button>

                                        <h4 class="modal-title">Cycle Northern Vietnam</h4>

                                    </div>

                                    <div class="modal-hero-image">

                                        <div class="image-placeholder" style="padding-bottom:calc(66.818181818182%)">

                                            <img class="img-responsive image lazyload peak-image-responsive ng-scope"

                                                width="2200" height="1470"

                                                alt="Map of Cycle Northern Vietnam including Vietnam"

                                                title="Map of Cycle Northern Vietnam"

                                                data-src="https://www.intrepidtravel.com/sites/intrepid/files/styles/low-quality/public/elements/product/map/tvxs_2020.gif"

                                                data-sizes="auto" data-expand="100"

                                                data-srcset="https://www.intrepidtravel.com/sites/intrepid/files/styles/75w/public/elements/product/map/tvxs_2020.gif 75w, https://www.intrepidtravel.com/sites/intrepid/files/styles/160w/public/elements/product/map/tvxs_2020.gif 160w, https://www.intrepidtravel.com/sites/intrepid/files/styles/320w/public/elements/product/map/tvxs_2020.gif 320w, https://www.intrepidtravel.com/sites/intrepid/files/styles/480w/public/elements/product/map/tvxs_2020.gif 480w, https://www.intrepidtravel.com/sites/intrepid/files/styles/640w/public/elements/product/map/tvxs_2020.gif 640w, https://www.intrepidtravel.com/sites/intrepid/files/styles/720w/public/elements/product/map/tvxs_2020.gif 720w, https://www.intrepidtravel.com/sites/intrepid/files/styles/800w/public/elements/product/map/tvxs_2020.gif 800w, https://www.intrepidtravel.com/sites/intrepid/files/styles/960w/public/elements/product/map/tvxs_2020.gif 960w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1080w/public/elements/product/map/tvxs_2020.gif 1080w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1240w/public/elements/product/map/tvxs_2020.gif 1240w, https://www.intrepidtravel.com/sites/intrepid/files/styles/1400w/public/elements/product/map/tvxs_2020.gif 1400w,">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </td>

                    <td><?= $count ?></td>

                    <td class="table-departure__price text-center">

                        <s class="table-departure__price--discount"><span

                                class="price-formatter ng-binding ng-isolate-scope" price-value="1080" style="color: #000;">$<?= number_format($item['product_price']) ?></span></s>

                        <div class="table-departure__price--sale">

                            <i class="fa fa-fire"></i> <span class="price-formatter ng-binding ng-isolate-scope"

                                price-value="972" style="color: #000;">$<?= number_format($item['product_price']-($item['product_price']*($item['product_price_sale']/100))) ?></span>

                        </div>

                    </td>

                    <td>

                        <a class="btn-icon hidden-lg" href="/<?= $item['friendly_url'] ?>"><i

                                class="fa fa-arrow-circle-right"></i></a>

                        <a href="/<?= $item['friendly_url'] ?>" class="btn btn-action visible-lg">View Trip

                            <i class="fa fa-angle-right"></i>

                        </a>

                    </td>

                </tr>

                <?php } ?>

            </tbody>

        </table>

        <!-- <div class="row">

            <div class="col-sm-12 text-center">

                <button class="btn btn-lg btn-passive table-departure__pagination" data-departure-col="6">

                    Show more </button>

            </div>

        </div> -->

    </div>

</div>