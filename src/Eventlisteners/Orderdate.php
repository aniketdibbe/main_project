<?php
namespace App\EventListeners;

 

use Pimcore\Model\DataObject\Footwear;

 

class Orderdate

 

{

 

 

    public function validate(\Pimcore\Event\Model\DataObjectEvent $event)

 

    {

 

        $object = $event->getObject();

 

        $manufacture = $object->getManufacture();

 

        $expire = $object->getExpiry();

 

 

        if ($object instanceof Footwear) {

 

            if ($manufacture > $expire) {

 

                throw new \Exception("manufacture date can not be less");

 

            }

 

        }

 

    }

 

}