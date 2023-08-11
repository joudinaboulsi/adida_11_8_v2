<?php 

namespace App\Http\Repositories;

use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class ProductsRepository {

    /*----------------------------------
    get all products
    ------------------------------------*/
    public function show()
    {
        $q = \DB::select("SELECT *   
                          FROM products");
        return $q;
    }

    /*----------------------------------
    get top products for homepage
    ------------------------------------*/
    public function showTop1()
    {
        $q = \DB::select("SELECT *   
                          FROM products
                          WHERE top='1'");
        return $q;
    }

    /*----------------------------------
    get top products for homepage
    ------------------------------------*/
    public function showTop2()
    {
        $q = \DB::select("SELECT *   
                          FROM products
                          WHERE top='2'");
        return $q;
    }

    /*----------------------------------
    get top products for homepage based on catgeory
    ------------------------------------*/
    public function showByCategory($category_id)
    {
        $q = \DB::select("SELECT *   
                          FROM products
                          WHERE category = :category_id",
                          array(':category_id' => $category_id));
        return $q;
    }

    /*----------------------------------
    get Selected Products
    ------------------------------------*/
    public function getSelectedProducts($ids)
    {
        $q = \DB::table('products')
             ->whereIn('product_id', $ids)
             ->get(); 
        return $q;
    }


}
