<?php
 
namespace App\Command;
use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Beauty;

 
class Beautyinsertcsv extends AbstractCommand {
 
 protected function configure()
 {
 $this
 ->setName('import:beauty')
 ->setDescription('this command imports data');
//  ->addArgument("class_name", InputArgument::REQUIRED);
 }
 
 protected function execute(InputInterface $input, OutputInterface $output): int
 {
//  $output->writeln("Class to import : " . $input->getArgument("class_name"));
//  return Command::SUCCESS;
$object=new Beauty();
$object->setKey('Beautycsv6');
$object->setParentId(54);
$path = 'public/CSV/beautycsv.csv';
 
 $file = file($path);


 
 foreach ($file as $k) {
 
 $csv[] = explode(',', $k);
 
 }
$Beautytype=$csv[1][0];
// $BeautyDescription=$csv[1][1];
$Beautyprice=$csv[1][2];
$BeautyMadeinCountry=$csv[1][3];
// $BeautyManufacturingDate=$csv[1][4];
// $BeautyExpiryDate=$csv[1][5];

$object->setBeautyType($Beautytype);
// $object->setDescription($BeautyDescription);
$object->setPrice($Beautyprice);
$object->setMadeinCountry($BeautyMadeinCountry);
// $object->setManufacturingDate($BeautyManufacturingDate);
// $object->setExpiryDate($BeautyExpiryDate);

$object->save();
return 0;


 }
 
}