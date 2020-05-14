<?php 
    $employment = $action->getList('service', '', '', 'service_id', 'desc', '' ,'', '');
?>
<section id="block-peak-merchandise-peak-merchandise-banner"
    class="block block-peak-merchandise block-peak-merchandise-banner b-peak-merchandise-banner clearfix">
    <div class="banner" data-template="peak-merchandise--banner">
        <div class="banner__image">
            <div class="banner__image-wrapper">
                <div class="image-placeholder1" style=""><img src="/images/green/banner/about.jpg" style="width: 100%;">
                </div>
            </div>
        </div>
        <div class="banner__overlay"></div>
        <div class="banner__content">
            <div class="banner__content-inner">
                <h1 class="banner__heading"><?= $row['product_name'] ?></h1>
            </div>
        </div>
    </div>

</section>
<div class="container">
    <div class="new-page">
        <h2>Current <span class="font-weight-title">vacancies</span></h2>
        <div class="careers-container">
            <?php foreach ($employment as $item) { ?>
            <div class="career-item">
                <div class="career-title"> <a href="/<?= $item['friendly_url'] ?>">
                        <?= $item['service_name'] ?></a></div>
                <div class="career-excerpt"><?= $item['service_des'] ?></div>
                <div class="career-view"> <a href="/<?= $item['friendly_url'] ?>"
                        class="see-detail pull-left">View Detail <i class="fas fa-arrow-right"></i></a>
                    <div class="share-social pull-right"> <button class="share"><i class="fas fa-share-alt"></i>
                            Share</button>
                        <div class="share-social-list"> 
                            <!-- <a href=""
                                title="Email"> <noscript><img
                                        src='https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-mail.png'
                                        alt="Email"></noscript><img class=" ls-is-cached lazyloaded"
                                    src="https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-mail.png"
                                    data-src="https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-mail.png"
                                    alt="Email"> </a> --> 
                            <a
                                href="<?= $rowConfig['facebook'] ?>"
                                target="_blank" title="Facebook"> <noscript><img
                                        src='/images/green/share/icon-share-facebook.png'
                                        alt="Facebook"></noscript><img class=" ls-is-cached lazyloaded"
                                    src="/images/green/share/icon-share-facebook.png"
                                    data-src="/images/green/share/icon-share-facebook.png"
                                    alt="Facebook"> </a> 
                            <a href="<?= $rowConfig['instagram'] ?>" target="_blank" title="Intagram"> <noscript><img
                                        src='/images/green/share/icon-share-intagram.png'
                                        alt="Intagram"></noscript><img class=" ls-is-cached lazyloaded"
                                    src="/images/green/share/icon-share-intagram.png"
                                    data-src="/images/green/share/icon-share-intagram.png"
                                    alt="Intagram"> </a> 
                            <!-- <a
                                onclick="ga('send', 'event', { eventCategory: 'Content Share', eventAction: 'click', eventLabel: 'WhatsApp share of '});"
                                title="WhatsApp"
                                href=""
                                class="whatsapp"
                                data-url="https://www.easia-travel.com/careers/operation-manager-myanmar/"
                                data-txt="Operation Manager-Myanmar" data-entryid="19023" data-type="whatapp">
                                <noscript><img
                                        src='https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-whatapp.png'
                                        alt="Whatsapp"></noscript><img class=" ls-is-cached lazyloaded"
                                    src="https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-whatapp.png"
                                    data-src="https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-whatapp.png"
                                    alt="Whatsapp"> </a> --> 
                            <!-- <a
                                href=""
                                target="_blank" title="Linkedin"> <noscript><img
                                        src='https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-linkedin.png'
                                        alt="LinkedIn" /></noscript><img class=" ls-is-cached lazyloaded"
                                    src="https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-linkedin.png"
                                    data-src="https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-linkedin.png"
                                    alt="LinkedIn"> </a> --> 
                            <a
                                href="<?= $rowConfig['twitter'] ?>"
                                target="_blank" title="Twitter"> <noscript><img
                                        src='/images/green/share/icon-share-twitter.png'
                                        alt="Twitter" /></noscript><img class=" ls-is-cached lazyloaded"
                                    src="/images/green/share/icon-share-twitter.png"
                                    data-src="/images/green/share/icon-share-twitter.png"
                                    alt="Twitter"> </a> 
                            <!-- <a
                                href=""
                                target="_blank" title="Google"> <noscript><img
                                        src='https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-google.png'
                                        alt="Google" /></noscript><img class=" ls-is-cached lazyloaded"
                                    src="https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-google.png"
                                    data-src="https://www.easia-travel.com/wp-content/themes/easia/images/icon-share-google.png"
                                    alt="Google"> </a> -->
                                </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</div>