<?php

namespace Equidea\Service;

use Equidea\Entity\Horse\CoatEntity;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Service
 */
class CoatColorCalculator {
    
    /**
     * @var \Equidea\Entity\Horse\CoatEntity
     */
    private $mother;
    
    /**
     * @var \Equidea\Entity\Horse\CoatEntity
     */
    private $father;
    
    /**
     * @var \Equidea\Entity\Horse\CoatEntity
     */
    private $code;
    
    /**
     * @var int
     */
    private $name;
    
    /**
     * @param   \Equidea\Entity\Horse\CoatEntity $mother
     * @param   \Equidea\Entity\Horse\CoatEntity $father
     */
    public function __construct(CoatEntity $mother, CoatEntity $father)
    {
        $this->mother = $mother;
        $this->father = $father;
    }
    
    /**
     * @return  void
     */
    private function calculate()
    {
        // Calculate the foals genetical coat
        $hereditor = new CoatColorHereditor($this->mother, $this->father);
        $this->code = $hereditor->calculate();
        
        // Calculate the color id matching the genetical code
        $calculator = new BaseColorCalculator($this->code);
        $this->name = $calculator->calculate();
    }
    
    /**
     * @return  \Equidea\Entity\Horse\CoatEntity
     */
    public function getCode() {
        return $this->code;
    }
    
    /**
     * @return  int
     */
    public function getName() {
        return $this->name;
    }
}