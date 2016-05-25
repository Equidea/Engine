<?php

namespace Equidea\Engine\Service;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license	    MIT License http://opensource.org/licenses/MIT
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
     * @param   int $agouti
     * @param   int $extension
     */
    public function __construct($agouti, $extension)
    {
        $this->agouti = $agouti;
        $this->extension = $extension;
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
}