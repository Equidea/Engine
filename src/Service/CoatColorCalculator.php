<?php

namespace Equidea\Engine\Service;

use Equidea\Engine\Entity\Horse\CoatEntity;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Engine\Service
 */
class CoatColorCalculator {
    
    /**
     * @var \Equidea\Engine\Entity\Horse\CoatEntity
     */
    private $mother;
    
    /**
     * @var \Equidea\Engine\Entity\Horse\CoatEntity
     */
    private $father;
    
    /**
     * @param   \Equidea\Engine\Entity\Horse\CoatEntity $mother
     * @param   \Equidea\Engine\Entity\Horse\CoatEntity $father
     */
    public function __construct(CoatEntity $mother, CoatEntity $father)
    {
        $this->mother = $mother;
        $this->father = $father;
    }
    
    /**
     * @return  \Equidea\Engine\Entity\Horse\CoatEntity
     */
    private function inherit()
    {
        $hereditor = new CoatColorHereditor($this->mother, $this->father);
        return $hereditor->calculate();
    }
    
    /**
     * @param   \Equidea\Engine\Entity\Horse\CoatEntity $mother
     *
     * @return  int
     */
    private function calculateColor(CoatEntity $child)
    {
        $calculator = new BaseColorCalculator($child);
        return $calculator->calculate();
    }
    
    /**
     * @return  \Equidea\Engine\Entity\Horse\CoatEntity
     */
    public function calculate()
    {
        $child = $this->inherit();
        $color = $this->calculateColor($child);
        $child->setId($color);
        return $child;
    }
}