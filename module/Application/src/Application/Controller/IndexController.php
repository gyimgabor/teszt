<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Crypt\Password\Bcrypt;

use Database\Entity\Data;

class IndexController extends AbstractActionController
{
  
  
  public function keyGenerator($minlength=8, $maxlength=8, $uselower = true, $useupper = true, $usenumbers = true, $usespecial = false) { 
        $charset = '';
        if ($uselower)   $charset .= 'abcdefghijklmnopqrstuvwxyz'; 
        if ($useupper)   $charset .= strtoupper($charset); 
        if ($usenumbers) $charset .= '0123456789'; 
        if ($usespecial) $charset .= '~@#$%^*()_+-={}|]['; 
        $key = '';
        if ($minlength >= $maxlength){
            $length = $minlength;
        } else{
            $length = mt_rand ($minlength, $maxlength); 
        }
        for ($i=0; $i<$length; $i++) {
            $key .= $charset[(mt_rand(0,(strlen($charset)-1)))]; 
        }
        return $key; 
    }
  
    public function indexAction()
    {
      $em = $this->getServiceLocator()->get('EntityManager');
      /* @var $em \Doctrine\ORM\EntityManager */
      
      $dataRepo = $em->getRepository('Database\Entity\Data');
      
      /*
      for($i=0; $i<10000; $i++){
        $data = new Data();
        $data->setName($this->keyGenerator(30,30));
        
        $d='';
        $l = 100*mt_rand(2, 100);
        for($j=0; $j<$l; $j++){
          $d .= $this->keyGenerator(5,5);
        }
        
        $data->setData($d);
        
        $time = strtotime("- ".mt_rand(2,2000)." days");
        $data->setDateA(new \DateTime(date('Y-m-d H:i:s',$time)));
        
        $time = strtotime("- ".mt_rand(2,2000)." days");
        $data->setDateB(new \DateTime(date('Y-m-d H:i:s',$time)));
        
        $em->persist($data);
      }
      $em->flush();
      */
      $bcrypt = new Bcrypt();
      $bcrypt->setCost(10);
      return $bcrypt->verify('', '');
      
      
      
    }
}
