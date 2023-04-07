<?php


class MenuItem
{
    public $name;
    public $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

function addItem(MenuItem $menuItem)
{
    // Add the menu item to the menu
    $menu[] = $menuItem;
    // Do any additional business logic here...
    return;
}
