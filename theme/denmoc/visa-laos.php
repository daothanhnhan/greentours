<?php 
	$visa_vietnam_page = $action->getDetail('page', 'page_id', 51);
?>
<?php //include DIR_SEARCH."MS_SEARCH_GREENTOURSAPI_0005.php";?>

<div class="container-fluid">

	<div class="row">

		<div class="col-md-2 menu-sidebar-margin-right-main1">
		<section id="block-peak-navigation-peak-anchor-side-menu"
				class="block block-peak-navigation block-peak-anchor-side-menu b-peak-anchor-side-menu clearfix">

				<div anchor-side-menu="" class="anchor-side-menu affix-top sticky-menu" ng-style="{ 'width' : width }"
					style="width: 263px;">

					<ul class="nav" role="navigation">

						<!-- ngRepeat: item in visibleItems -->

						<li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

							<a class="anchor-side-menu__link ng-binding" ng-href="#visa-info" ng-bind-html="item.text"
								href="#visa-info">Visa info</a>

						</li><!-- end ngRepeat: item in visibleItems -->

						<li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

							<a class="anchor-side-menu__link ng-binding" ng-href="#faq" ng-bind-html="item.text"
								href="#faq">FAQs</a>

						</li><!-- end ngRepeat: item in visibleItems -->

						<!-- end ngRepeat: item in visibleItems -->

						<li ng-repeat="item in visibleItems" class="anchor-side-menu__item ng-scope">

							<a class="anchor-side-menu__link ng-binding" ng-href="#evisa" ng-bind-html="item.text"
								href="#evisa">Apply Evisa</a>

						</li><!-- end ngRepeat: item in visibleItems -->


					</ul>

				</div>



				<div class="modal fade" id="side-nav-map-modal" tabindex="-1" role="dialog"
					aria-labelledby="modalWithTripInfo" aria-hidden="true">

					<div class="modal-dialog modal-lg">

						<div class="modal-content">

							<div class="modal-header">

								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

								<h2 class="modal-title ng-binding"></h2>

								<strong>

									<p class="ng-binding"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

									</p>

								</strong>

							</div>

							<div class="modal-body">

								<img>

							</div>

						</div>

					</div>



				</div>

			</section>

			

		</div>

		<div class="col-md-8">

			<h1 id="visa-info" style="font-size: 35px;font-weight: bold;"><?= $visa_vietnam_page['page_name'] ?></h1>

			<div>
				<?= $visa_vietnam_page['page_content'] ?>
			</div>

			<?php include DIR_NEWS."MS_NEWS_GREEN_0011.php";?>

			<!-- <p><a id="voa" href="/apply-vietnam-visa-voa" title="" style="font-size: 24px;font-weight: bold;">VOA application form</a></p> -->

			<p><a id="evisa" href="/apply-laos-evisa" title="" style="font-size: 24px;font-weight: bold;background-color: #b51c1c;color: #fff;padding: 10px;border-radius: 5px;">Apply Laos Evisa</a></p>

		</div>

	</div>

</div>

<script src="/plugin/sticky/jquery.sticky.js"></script>

<script>

    $(document).ready(function () {

        if ($(window).width() >= 992) {

            $(".icon-fixed-visa").sticky({topSpacing:81,bottomSpacing:666});

        } else {

            $(".icon-fixed-visa").trigger('sticky.destroy');

        }

    });

</script>