<div class="gb-main-menu_denmoc" >
    <nav class="main-navigation uni-menu-text_denmoc">
        <div class="cssmenu">
            <?php 
                $list_menu = $menu->getListMainMenu_byOrderASC();
                $menu->showMenu_byMultiLevel_mainMenuTraiCam($list_menu,0,$lang,0);
            ?>
        </div>
    </nav>
</div>

<script src="/plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:95});
    });
</script>