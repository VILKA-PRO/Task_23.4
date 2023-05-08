<!-- Предположим, у нас есть игра в автотематике. У нас есть машины, танки, спецтехника, которые имеют свой набор характеристик, умеют ехать вперед и назад, а некоторые могут даже размахивать ковшом. На основе этой информации постройте классы с использованием абстрактного класса и интерфейса. Напишите принимающую объект машины функцию, которая бы заставляла ее ехать и вызвала одну из способностей машины. Пусть, если это легковое авто, будет закись азота, если это бульдозер, — управление ковшом. Принимающая функция должна быть полиморфной. Необходимо реализовать только структуру. 

+5 дополнительных баллов — вы добавили машинам способность сигналить и включать дворники.
+5 дополнительных баллов — вы добавили машинам элементы индивидуализма, к примеру, отделку салона.-->


<?php

interface VehileFunctions 
{

    public function description(); // Характеристики авто
    public function Movement(); // Куда едем: зад-перед
    public function featureActivate(); // Активируем клевую функцию транспорта
    public function signals(); // способность сигналить и включать дворники

}





abstract class vehicles implements VehileFunctions
{
    
    public $vehicleName;
    public $bodyColor;
    public $interiorTrim;
    public $feature;

    abstract public function description();
    abstract public function Movement();
    abstract public function featureActivate();
    public function signals()
    {
        echo " и зачем-то сигналит и размахивает дворниками";
    }
    
}

  

class Car extends vehicles
{   public $bodyColor = "Синяя ";
    public $vehicleName = "легковая тачка ";
    public $interiorTrim = "с вельветовым салоном ";
    public $move = "мчит вперед ";
    public $feature = "с азотным ускорением";


    public function description()
     {
        echo $this->bodyColor . $this->vehicleName . $this->interiorTrim;
     }
    public function Movement()
     {
        echo $this->move;
     }
    public function featureActivate()
     {
        echo $this->feature;
     }
     public function signals()
     {
        echo " и зачем-то сигналит и размахивает дворниками";
     }
    
}

class Tank extends vehicles
{
    public $bodyColor = "Черный ";
    public $vehicleName = "танк ";
    public $interiorTrim = "с брутальным салоном ";
    public $move = "сдает задом ";
    public $feature = "размахивая пушкой";


    public function description()
     {
        echo $this->bodyColor . $this->vehicleName . $this->interiorTrim;
     }
    public function Movement()
     {
        echo $this->move;
     }
    public function featureActivate()
     {
        echo $this->feature;
     }
     public function signals()
     {
        echo " и зачем-то гудит и размахивает дворниками, которых нет";
     }
}


class Tractor extends vehicles
{
    public $bodyColor = "Зеленый ";
    public $vehicleName = "трактор ";
    public $interiorTrim = "с розовым салоном ";
    public $move = "ковыляет вперед ";
    public $feature = " и поднимает ковш";


    public function description()
     {
        echo $this->bodyColor . $this->vehicleName . $this->interiorTrim;
     }
    public function Movement()
     {
        echo $this->move;
     }
    public function featureActivate()
     {
        echo $this->feature;
     }
     public function signals()
     {
        echo " и зачем-то сигналит и размахивает дворниками";
     }
}



$choosenVehile = new Tank(); 

function go (VehileFunctions $choosenVehile)
{
    $choosenVehile->description();
    $choosenVehile->Movement();
    $choosenVehile->featureActivate();
    $choosenVehile->signals();

}

go ($choosenVehile);