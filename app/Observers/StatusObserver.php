<?php

namespace App\Observers;

use App\Models\Item;

class StatusObserver
{
    /**
     * Listen to the Item created event.
     *
     * @param  Item  $item
     * @return void
     */
    public function created (Item $item)
    {
        //
        \Event::fire(new \App\Events\CheckStatus($item->order_id)); 
        //check if the item is now delivered
    }



    /**
     * Listen to the Item updated event.
     *
     * @param  Item  $item
     * @return void
     */
    public function updated (Item $item)
    {
        //
        \Event::fire(new \App\Events\CheckStatus($item->order_id)); 
        //check if the item is now delivered
    }


    /**
     * Listen to the Item deleting event.
     *
     * @param  Item  $item
     * @return void
     */
    public function deleted(Item $item)
    {
        //
        \Event::fire(new \App\Events\CheckStatus($item->order_id)); 
    }

}