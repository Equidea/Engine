<?php

namespace Equidea\Entity\Horse;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Entity\Horse
 */
class CoatEntity {
    
    /**
     * @var int
     */
    private $agouti = 0;
    
    /**
     * @var int
     */
    private $extension = 0;
    
    /**
     * @var int
     */
    private $cream = 0;
    
    /**
     * @var int
     */
    private $dun = 0;
    
    /**
     * @param   int $agouti
     * @param   int $extension
     * @param   int $cream
     * @param   int $dun
     */
    public function __construct(
        int $agouti = 0,
        int $extension = 0,
        int $cream = 0,
        int $dun = 0
    ) {
        $this->agouti = $agouti;
        $this->extension = $extension;
        $this->cream = $cream;
        $this->dun = $dun;
    }
    
    /**
     * @return  int
     */
    public function getAgouti():int {
        return $this->agouti;
    }
    
    /**
     * @param   int $agouti
     *
     * @return  void
     */
    public function setAgouti(int $agouti) {
        $this->agouti = $agouti;
    }
    
    /**
     * @return  int
     */
    public function getExtension():int {
        return $this->extension;
    }
    
    /**
     * @param   int $extension
     *
     * @return  void
     */
    public function setExtension(int $extension) {
        $this->extension = $extension;
    }
    
    /**
     * @return  int
     */
    public function getCream():int {
        return $this->cream;
    }
    
    /**
     * @param   int $cream
     *
     * @return  void
     */
    public function setCream(int $cream) {
        $this->cream = $cream;
    }
    
    /**
     * @return  int
     */
    public function getDun():int {
        return $this->dun;
    }
    
    /**
     * @param   int $dun
     *
     * @return  void
     */
    public function setDun(int $dun) {
        $this->dun = $dun;
    }
    
    /**
     * @return  array
     */
    public function getAll():array
    {
        return [
            'agouti' => $this->agouti,
            'extension' => $this->extension,
            'cream' => $this->cream,
            'dun' => $this->dun,
        ];
    }
    
    /**
     * @param   array   $genes
     *
     * @return  void
     */
    public function setAllGenes(array $genes)
    {
        $this->agouti = $genes['agouti'];
        $this->extension = $genes['extension'];
        $this->cream = $genes['cream'];
        $this->dun = $genes['dun'];
    }
}