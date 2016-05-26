<?php

namespace Equidea\Engine\Entity\Horse;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Engine\Entity\Horse
 */
class CoatEntity {
    
    /**
     * @var int
     */
    private $id;
    
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
     * @return  int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * @param   int $id
     *
     * @return  void
     */
    public function setId($id) {
        $this->id = $id;
    }
    
    /**
     * @return  int
     */
    public function getAgouti() {
        return $this->agouti;
    }
    
    /**
     * @return  int
     */
    public function getExtension() {
        return $this->extension;
    }
    
    /**
     * @return  int
     */
    public function getCream() {
        return $this->cream;
    }
    
    /**
     * @return  int
     */
    public function getDun() {
        return $this->dun;
    }
    
    /**
     * @return  array
     */
    public function getAllGenes()
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