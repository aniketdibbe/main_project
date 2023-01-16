<?php
namespace App\EventListeners;

 

use Pimcore\Model\DataObject\Beauty;


 

class Beautydate

 

{

 

 

    public function validate(\Pimcore\Event\Model\DataObjectEvent $event)

 

    {

 

        $object = $event->getObject();

 

        $manufacture = $object->getManufacture();

 

        $expire = $object->getExpiry();

 

 

        if ($object instanceof Beauty) {

 

            if ($expire<$manufacture) {

 

                throw new \Exception("expiry date can not be less");

 

            }

 

        }

 

    }

 

}