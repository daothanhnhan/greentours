<?php                                                                        

    if (isset($_GET['slug']) && $_GET['slug'] != '') {

        $slug = $_GET['slug'];



        $rowCatLang = $action_product->getProductCatLangDetail_byUrl($slug,$lang);

        $rowCat = $action_product->getProductCatDetail_byId($rowCatLang['productcat_id'],$lang);

        $rows = $action_product->getProductList_byMultiLevel_orderProductId($rowCat['productcat_id'],'desc',$trang,9996,$slug);//var_dump($rows);

    }else{

        $rows = $action->getList('product','','','product_id','desc',$trang,6,'san-pham');

    }

    

    $_SESSION['sidebar'] = 'productCat';

    // echo $rowCat['type'];

    if ($rowCat['type'] == 1) {

    	include DIR_PRODUCT . "MS_PRODUCT_DENMOC_0007_1.php";

    }

    if ($rowCat['type'] == 2) {

        include DIR_PRODUCT . "MS_PRODUCT_DENMOC_0007_3.php";
        

    }

    if ($rowCat['type'] == 3) {

        include DIR_PRODUCT . "MS_PRODUCT_DENMOC_0008.php";

    }

?>