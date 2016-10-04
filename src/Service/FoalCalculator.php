<?php

namespace Equidea\Service;

use Equidea\Entity\Horse\HorseEntity;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Service
 */
class FoalCalculator {

    /**
     * @var \Equidea\Entity\Horse\HorseEntity
     */
    private $mother;
    
    /**
     * @var \Equidea\Entity\Horse\HorseEntity
     */
    private $father;
    
    /**
     * @var \Equidea\Entity\Horse\HorseEntity
     */
    private $foal;
    
    /**
     * @param   \Equidea\Entity\Horse\HorseEntity   $mother
     * @param   \Equidea\Entity\Horse\HorseEntity   $father
     */
    public function __construct(HorseEntity $mother, HorseEntity $father)
    {
        $this->mother = $mother;
        $this->father = $father;
        
        // Create a new foal entity with the temporary ID 0
        $this->foal = new HorseEntity(0);
    }
    
    /**
     * @return  void
     */
    private function calculateColor()
    {
        // The parents color genetics
        $motherCoat = $this->mother->getCoat();
        $fatherCoat = $this->father->getCoat();
        
        // Calculate the foal color genetics
        $calculator = new CoatColorCalculator($motherCoat, $fatherCoat);
        $calculator->calculate();
        
        // Set the color name
        $this->foal->setColor($calculator->getName());
        // Set the color code
        $this->foal->setCoat($calculator->getCode());
    }
    
    /**
     * @return  void
     */
    private function setHeritage()
    {
        // Set the breed (same as fathers)
        $this->foal->setBreed($this->father->getBreed());
        // Set the horses mother
        $this->foal->setMother($this->mother->getId());
        // Set the horses father
        $this->foal->setFather($this->father->getId());
        // Set the horses breeder
        $this->foal->setBreeder($this->mother->getOwner());
    }
    
    /**
     * @return  void
     */
    public function calculate()
    {
        // Set the age to one week
        $this->foal->setAge(1);
        // Set a random gender
        $this->foal->setGender(mt_rand(1,2));
        // Set breed and parents
        $this->setHeritage();
        // Set the color name and color code
        $this->calculateColor();
        // Set the horses owner (same as mother)
        $this->foal->setOwner($this->mother->getOwner());
    }
    
    /**
     * @param   string  $name
     *
     * @return  \Equidea\Entity\Horse\HorseEntity
     */
    public function getFoal(string $name)
    {
        // Set the foals name
        $this->foal->setName($name);
        return $this->foal;
    }
}