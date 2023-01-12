<?php
 
namespace App\Command;
use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Footwear;
 
class Footwearinsert extends AbstractCommand {
 
 protected function configure()
 {
 $this
 ->setName('import:data')
 ->setDescription('this command imports data');
 //->addArgument("class_name", InputArgument::REQUIRED);
 }
 
 protected function execute(InputInterface $input, OutputInterface $output): int
 {
//  $output->writeln("Class to import : " . $input->getArgument("class_name"));
//  return Command::SUCCESS;
$object=new Footwear();
$object->setKey('footertest1');
$object->setParentId(5);
$object->setGender('Women');
$keyConfig = new \Pimcore\Model\DataObject\Classificationstore\KeyConfig();
$keyConfig->setName('Boots');
$keyConfig->setDescription('Boots');
$object->save();
return 0;




 }
 
}