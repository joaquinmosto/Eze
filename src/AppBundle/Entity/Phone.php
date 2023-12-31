<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Model\PhoneModel;

/**
 * @ORM\Entity
 * @ORM\Table(name="phone")
 */
class Phone
{

    use PhoneModel;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $number; 

   
}

