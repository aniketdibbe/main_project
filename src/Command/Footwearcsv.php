<?php
 
namespace App\Command;
use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Footwear;
 
class Footwearcsv extends AbstractCommand {
 
 protected function configure()
 {
 $this
 ->setName('import:footwear')
 ->setDescription('this command imports data');
//  ->addArgument("class_name", InputArgument::REQUIRED);
 }
 
 protected function execute(InputInterface $input, OutputInterface $output): int
 {
//  $output->writeln("Class to import : " . $input->getArgument("class_name"));
//  return Command::SUCCESS;
$object=new Footwear();
$object->setKey('footwearcsv123456');
$object->setParentId(6);
$path = 'public/CSV/footwear.csv';

    $file = file($path);



        foreach ($file as $k) {

            $csv[] = explode(',', $k);

        } 
    $footweargender=$csv[1][0];
    $footwearprice=$csv[1][1];
    $footwearoffer=$csv[1][2];
    $footwearoff=$csv[1][3];
    $footweardescription=$csv[1][4];
    // $footwearmanufacture=$csv[1][5];
    // $footwearexpiry=$csv[1][6];

    $object->setGender($footweargender);
    $object->setprice($footwearprice);
    $object->setoffer($footwearoffer);
    $object->setoff($footwearoff);
    $object->setdescription($footweardescription);
    // $object->setmanufacture($footwearmanufacture);
    // $object->setexpiry($footwearexpiry);
    $object->save();
    return 0;

 }
 
}