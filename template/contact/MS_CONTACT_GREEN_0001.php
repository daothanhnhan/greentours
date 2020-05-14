<?php 
    $our_contact = $action->getList('our_contact', '', '', 'id', 'asc', '', '', '');
?>
<div class="dayTour">
    <h1 class="title title-large">OUR CONTACT DETAILS</h1>
    <div class="post-content">
        <h2><span style="color: #993300;">Talk to Us Today! Support Online 24/7</span></h2>
        <?php foreach ($our_contact as $item) { ?>
        <p>
            <img style="float: left;border-radius: 50%;height: 150px;"
                src="/images/<?= $item['image'] ?>"
                alt="<?= $item['name'] ?>" width="150" height="150">
                <br> 
                <strong><?= $item['position'] ?></strong>
                <span style="color: #993300;"><strong><?= $item['name'] ?></strong></span><br>
                <strong>Tel/ Whatsapp:&nbsp;</strong><?= $item['phone'] ?><br> 
                <strong>Email:&nbsp;</strong><a href="mailto:<?= $item['email'] ?>"><?= $item['email'] ?></a>
                <br> Know more about me <a href="" target="_blank" rel="noopener">here</a>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <?php } ?>
        <div class="cleaner">&nbsp;</div>
    </div>
</div>