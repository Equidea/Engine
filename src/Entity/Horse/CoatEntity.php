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
        $agouti = 0,
        $extension = 0,
        $cream = 0,
        $dun = 0
    ) {
        $this->agouti = $agouti;
        $this->extension = $extension;
        $this->cream = $cream;
        $this->dun = $dun;
    }
    
    /**
     * @return  int
     */
    public function getAgouti() {
        return $this->agouti;
    }
    
    /**
     * @param   int $agouti
     *
     * @return  void
     */
    public function setAgouti($agouti) {
        $this->agouti = $agouti;
    }
    
    /**
     * @return  int
     */
    public function getExtension() {
        return $this->extension;
    }
    
    /**
     * @param   int $extension
     *
     * @return  void
     */
    public function setExtension($extension) {
        $this->extension = $extension;
    }
    
    /**
     * @return  int
     */
    public function getCream() {
        return $this->cream;
    }
    
    /**
     * @param   int $cream
     *
     * @return  void
     */
    public function setCream($cream) {
        $this->cream = $cream;
    }
    
    /**
     * @return  int
     */
    public function getDun() {
        return $this->dun;
    }
    
    /**
     * @param   int $dun
     *
     * @return  void
     */
    public function setDun($dun) {
        $this->dun = $dun;
    }
    
    /**
     * @return  array
     */
    public function getAll()
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