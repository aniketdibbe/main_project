<?php
 
namespace App\Command;
use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Elecrtonics;
 
class Electroniccsv extends AbstractCommand {
 
 protected function configure()
 {
 $this
 ->setName('electronic')
 ->setDescription('this command imports data');
//  ->addArgument("class_name", InputArgument::REQUIRED);
 }
 
 protected function execute(InputInterface $input, OutputInterface $output): int
 {
//  $output->writeln("Class to import : " . $input->getArgument("class_name"));
//  return Command::SUCCESS;
$object=new Elecrtonics();
$object->setKey('csvelectronic1');
$object->setParentId(2);
$path = 'public/CSV/electronic.csv';
 
 $file = file($path);


 
 foreach ($file as $k) {
 
 $csv[] = explode(',', $k);
 
 }
 $electronictype=$csv[1][0];
 $electroniccategory=$csv[1][1];
 $electronicDescription=$csv[1][2];
 $elecronicprice=$csv[1][3];
 $electronicwarranty=$csv[1][4];


 $object->setElectronicType($electronictype);
 $object->setCategory($electroniccategory);
 $object->setDescription($electronicDescription);
 $object->setprice($elecronicprice);
 $object->setwarranty($electronicwarranty);
 $object->save();
 return 0;
 }
 
}