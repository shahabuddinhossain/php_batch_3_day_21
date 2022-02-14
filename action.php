<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\Auth;
use App\classes\User;




if (isset($_GET['pages']))
{
    if ($_GET['pages']=='home')
    {
        $product = new Product();
        $products = $product->getAllProducts();
        include "pages/home.php";
    }
    elseif ($_GET['pages']=='all-product')
    {
        $product = new Product();
        $products = $product->getAllProducts();
        include "pages/allProducts.php";
    }
    elseif ($_GET['pages'] == 'productDetails')
    {
        if (isset($_GET['id']))
        {
            $product = new Product();
            $details = $product->getProductDetails($_GET['id']);

            include "pages/productDetails.php";
        }

        else
        {
            $product = new Product();
            $products = $product->getAllProducts();
            include "pages/home.php";
        }


    }
    elseif ($_GET['pages']=='all-product')
    {
        $product = new Product();
        $products = $product->getAllProducts();
        include "pages/allProducts.php";
    }
    elseif ($_GET['pages']=='all-user')
    {
        $user = new User();
        $users = $user->getAllUser();
        include "pages/allUser.php";
    }

    elseif ($_GET['pages']=='login')
    {
        if (isset( $_SESSION['id']))
        {
            $home = new Home();
            $home->index();
        }
        else{
            include 'pages/login.php';
        }
    }
    elseif ($_GET['pages']=='logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
    else
        {
            header('Location: action.php?pages=home');
        }



}

elseif (isset($_POST['login_btn']))
{
    $auth       =   new Auth($_POST);
    $message    =   $auth->verify();
    include "pages/login.php";


}