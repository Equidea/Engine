<?php

namespace Equidea\Service;

use Equidea\Entity\Horse\CoatEntity;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Service
 */
class BaseColorCalculator {
    
    /**
     * @var int
     */
    private $agouti;
    
    /**
     * @var int
     */
    private $extension;
    
    /**
     * @var int
     */
    private $cream;
    
    /**
     * @var array
     */
    private $colors = [
        'black' => 1,
        'bay' => 2,
        'chestnut' => 3,
        'smokyBlack' => 4,
        'buckskin' => 5,
        'palomino' => 6,
        'smokyCream' => 7,
        'perlino' => 8,
        'cremello' => 9
    ];
    
    /**
     * @param   \Equidea\Entity\Horse\CoatEntity
     */
    public function __construct(CoatEntity $coat)
    {
        $this->agouti = $coat->getAgouti();
        $this->extension = $coat->getExtension();
        $this->cream = $coat->getCream();
    }
    
    /**
     * @return  boolean
     */
    public function isBlack():bool {
        return ($this->extension != 0 && $this->agouti == 0);
    }
    
    /**
     * @return  boolean
     */
    public function isBay():bool {
        return ($this->extension != 0 && $this->agouti != 0);
    }
    
    /**
     * @return  boolean
     */
    public function isChestnut():bool {
        return ($this->extension == 0);
    }
    
    /**
     * @return  int
     */
    public function calculateBlack():int
    {
        // No cream
        if ($this->cream == 0) {
            return $this->colors['black'];
        }
        
        // Heterozygous cream
        if ($this->cream == 1) {
            return $this->colors['smokyBlack'];
        }
        
        // Homozygous cream
        if ($this->cream == 2) {
            return $this->colors['smokyCream'];
        }
    }
    
    /**
     * @return  int
     */
    public function calculateBay():int
    {
        // No cream
        if ($this->cream == 0) {
            return $this->colors['bay'];
        }
        
        // Heterozygous cream
        if ($this->cream == 1) {
            return $this->colors['buckskin'];
        }
        
        // Homozygous cream
        if ($this->cream == 2) {
            return $this->colors['perlino'];
        }
    }
    
    /**
     * @return  int
     */
    public function calculateChestnut():int
    {
        // No cream
        if ($this->cream == 0) {
            return $this->colors['chestnut'];
        }
        
        // Heterozygous cream
        if ($this->cream == 1) {
            return $this->colors['palomino'];
        }
        
        // Homozygous cream
        if ($this->cream == 2) {
            return $this->colors['cremello'];
        }
    }
    
    /**
     * @return  int
     */
    public function calculate():int
    {
        // The black family
        if ($this->isBlack()) {
            return $this->calculateBlack();
        }
        
        // The bay family
        if ($this->isBay()) {
            return $this->calculateBay();
        }
        
        // The chestnut family
        if ($this->isChestnut()) {
            return $this->calculateChestnut();
        }
    }
}