<?php

require_once 'vendor/autoload.php';
use App\classes\ProductUpload;


if (isset($_GET['pages']))
{
    if ($_GET['pages']=='home')
    {
        include "pages/home.php";
    }
}
elseif (isset($_POST['product_btn']))
{
    $product = new ProductUpload($_POST, $_FILES);
    $product->newProduct();


}