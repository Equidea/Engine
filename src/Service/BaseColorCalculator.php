<?php

namespace Equidea\Engine\Service;

use Equidea\Engine\Entity\Horse\CoatEntity;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Engine\Service
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
     * @var int
     */
    private $dun;
    
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
        'cremello' => 9,
        'grulla' => 10,
        'classicDun' => 11,
        'claybank' => 12,
        'smokyGrulla' => 13,
        'smokyCreamGrulla' => 14,
        'dunskin' => 15,
        'dunPerlino' => 16,
        'dunalino' => 17,
        'dunCremello' => 18
    ];
    
    /**
     * @param   \Equidea\Engine\Entity\Horse\CoatEntity
     */
    public function __construct(CoatEntity $coat)
    {
        $this->agouti = $coat->getAgouti();
        $this->extension = $coat->getExtension();
        $this->cream = $coat->getCream();
        $this->dun = $coat->getDun();
    }
    
    /**
     * @return  boolean
     */
    public function isBlack() {
        return ($this->extension != 0 && $this->agouti == 0);
    }
    
    /**
     * @return  boolean
     */
    public function isBay() {
        return ($this->extension != 0 && $this->agouti != 0);
    }
    
    /**
     * @return  boolean
     */
    public function isChestnut() {
        return ($this->extension == 0);
    }
    
    /**
     * @return  int
     */
    private function calculateBlack()
    {
        // No cream
        if ($this->cream == 0 && $this->dun == 0) {
            return $this->colors['black'];
        }
        
        // Heterozygous cream
        if ($this->cream == 1 && $this->dun == 0) {
            return $this->colors['smokyBlack'];
        }
        
        // Homozygous cream
        if ($this->cream == 2 && $this->dun == 0) {
            return $this->colors['smokyCream'];
        }
        
        // With dun gen
        if ($this->dun != 0) {
            return $this->calculateBlackDun();
        }
    }
    
    /**
     * @return  int
     */
    private function calculateBay()
    {
        // No cream
        if ($this->cream == 0 && $this->dun == 0) {
            return $this->colors['bay'];
        }
        
        // Heterozygous cream
        if ($this->cream == 1 && $this->dun == 0) {
            return $this->colors['buckskin'];
        }
        
        // Homozygous cream
        if ($this->cream == 2 && $this->dun == 0) {
            return $this->colors['perlino'];
        }
        
        // With dun gen
        if ($this->dun != 0) {
            return $this->calculateBayDun();
        }
    }
    
    /**
     * @return  int
     */
    private function calculateChestnut()
    {
        // No cream
        if ($this->cream == 0 && $this->dun == 0) {
            return $this->colors['chestnut'];
        }
        
        // Heterozygous cream
        if ($this->cream == 1 && $this->dun == 0) {
            return $this->colors['palomino'];
        }
        
        // Homozygous cream
        if ($this->cream == 2 && $this->dun == 0) {
            return $this->colors['cremello'];
        }
        
        // With dun gen
        if ($this->dun != 0) {
            return $this->calculateChestnutDun();
        }
    }
    
    /**
     * @return  int
     */
    private function calculateBlackDun()
    {
        // No cream
        if ($this->cream == 0) {
            return $this->colors['grulla'];
        }
        
        // Heterozygous cream
        if ($this->cream == 1) {
            return $this->colors['smokyGrulla'];
        }
        
        // Homozygous cream
        if ($this->cream == 2) {
            return $this->colors['smokyCreamGrulla'];
        }
    }
    
    /**
     * @return  int
     */
    private function calculateBayDun()
    {
        // No cream
        if ($this->cream == 0) {
            return $this->colors['classicDun'];
        }
        
        // Heterozygous cream
        if ($this->cream == 1) {
            return $this->colors['dunskin'];
        }
        
        // Homozygous cream
        if ($this->cream == 2) {
            return $this->colors['dunPerlino'];
        }
    }
    
    /**
     * @return  int
     */
    private function calculateChestnutDun()
    {
        // No cream
        if ($this->cream == 0) {
            return $this->colors['claybank'];
        }
        
        // Heterozygous cream
        if ($this->cream == 1) {
            return $this->colors['dunalino'];
        }
        
        // Homozygous cream
        if ($this->cream == 2) {
            return $this->colors['dunCremello'];
        }
    }
    
    /**
     * @return  int
     */
    public function calculate()
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