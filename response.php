<?php
interface FoodItem
{
    public function cost();
}

class Thali implements FoodItem
{
    public function cost()
    {
        $basic_cost = 50;
        return $basic_cost;
    }
}

class Roti implements FoodItem
{
    private $item;
    public function __construct(FoodItem $item)
    {
        $this->item = $item;
    }

    public function cost()
    {
        $Cheese_cost = 10;
        return $this->item->cost() + $Cheese_cost;
    }
}

class Subji implements FoodItem
{
    private $item;
    public function __construct(FoodItem $item)
    {
        $this->item = $item;
    }

    public function cost()
    {
        $subjiPrice = 15;
        return $this->item->cost() + $subjiPrice;
    }
}

class Papad implements FoodItem
{
    private $item;
    public function __construct(FoodItem $item)
    {
        $this->item = $item;
    }

    public function cost()
    {
        $subjiPrice = 5;
        return $this->item->cost() + $subjiPrice;
    }
}

class Rice implements FoodItem
{
    private $item;
    public function __construct(FoodItem $item)
    {
        $this->item = $item;
    }

    public function cost()
    {
        $subjiPrice = 15;
        return $this->item->cost() + $subjiPrice;
    }
}

class Sweet implements FoodItem
{
    private $item;
    public function __construct(FoodItem $item)
    {
        $this->item = $item;
    }

    public function cost()
    {
        $subjiPrice = 20;
        return $this->item->cost() + $subjiPrice;
    }
}
class Paratha implements FoodItem
{
    private $item;
    public function __construct(FoodItem $item)
    {
        $this->item = $item;
    }

    public function cost()
    {
        $subjiPrice = 12;
        return $this->item->cost() + $subjiPrice;
    }
}
class Naan implements FoodItem
{
    private $item;
    public function __construct(FoodItem $item)
    {
        $this->item = $item;
    }

    public function cost()
    {
        $subjiPrice = 10;
        return $this->item->cost() + $subjiPrice;
    }
}

$res = new Thali();
if (isset($_POST['extraRoti']) && (string)$_POST['extraRoti'] == 'true') {
    $res = new Roti($res);
}
if (isset($_POST['extraSubji']) && (string)$_POST['extraSubji'] == 'true') {
    $res = new Subji($res);
}
if (isset($_POST['extraPapad']) && (string)$_POST['extraPapad'] == 'true') {
    $res = new Papad($res);
}
if (isset($_POST['extraRice']) && (string)$_POST['extraRice'] == 'true') {
    $res = new Rice($res);
}
if (isset($_POST['extraSweet']) && (string)$_POST['extraSweet'] == 'true') {
    $res = new Sweet($res);
}
if (isset($_POST['paratha']) && (string)$_POST['paratha'] == 'true') {
    $res = new Paratha($res);
}
if (isset($_POST['naan']) && (string)$_POST['naan'] == 'true') {
    $res = new Naan($res);
}

echo $res->cost();
