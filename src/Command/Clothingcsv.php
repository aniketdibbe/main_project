<?php
 
namespace App\Command;
use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Clothing;
 
class Clothingcsv extends AbstractCommand {
 
 protected function configure()
 {
 $this
 ->setName('import:clothing')
 ->setDescription('this command imports data');
//  ->addArgument("class_name", InputArgument::REQUIRED);
 }
 
 protected function execute(InputInterface $input, OutputInterface $output): int
 {
//  $output->writeln("Class to import : " . $input->getArgument("class_name"));
//  return Command::SUCCESS;
$object=new Clothing();
$object->setKey('clothingcsv');
$object->setParentId(16);
$path = 'public/CSV/clothing.csv';
 
 $file = file($path);


 
 foreach ($file as $k) {
 
 $csv[] = explode(',', $k);
 
 }
 $clothingWearType=$csv[1][0];
 $clothinggender=$csv[1][1];
 $clothingclothingType=$csv[1][2];
 $clothingPrice=$csv[1][3];


 $object->setWearType($clothingWearType);
 $object->setgender($clothinggender);
 $object->setclothingType($clothingclothingType);
 $object->setPrice($clothingPrice);

 $object->save();
 return 0;
 }

 
}