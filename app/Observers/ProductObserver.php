<?php
/**
 * Created by PhpStorm.
 * User: stijn
 * Date: 8-1-2018
 * Time: 21:14
 */

namespace App\Observers;

use App\Product;

class ProductObserver
{
    /**
     * Listen to the Product created event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        //
    }
    /**
     * Listen to the Product creating event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function creating(Product $product)
    {

    }

    /**
     * Listen to the Product deleting event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function deleting(Product $product)
    {
        //
    }

    /**
     * Listen to the Product saved event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function saved(Product $product)
    {
        //generate sku
        $product->sku = $product->generateSKU();
        //save product
        $product->save();
    }
}