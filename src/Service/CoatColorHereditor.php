<?php

namespace Equidea\Engine\Service;

use Equidea\Engine\Entity\Horse\CoatEntity;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Engine\Service
 */
class CoatColorHereditor {
    
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
     * @param   array   $mother
     * @param   array   $father
     */
    private function allGenes(array $mother, array $father)
    {
        // Get all gene locus
        $genes = array_keys($mother);
        
        // Set empty result array
        $child = [];
        
        // Calculate each gene with the formula
        foreach ($genes as $gene) {
            $child[$gene] = $this->singleGene($mother[$gene], $father[$gene]);
        }
        
        return $child;
    }
    
    /**
     * @param   int $mother
     * @param   int $father
     *
     * @return  int
     */
    private function singleGene($mother, $father)
    {
        // With heterozygous gene 
        if ($father == 1 || $mother == 1) {
            return $this->heterozygous($father, $mother);
        }
        // Only homozygous genes
        return ($mother + $father) / 2;
    }
    
    /**
     * @param   int $mother
     * @param   int $father
     *
     * @return  int
     */
    private function heterozygous($mother, $father)
    {
        // Only heterozygous genes
        if ($father == 1 && $mother == 1) {
            return $this->bothHeterozygous()
        }
        // With one homozygous gene
        return $this->oneHeterozygous($father, $mother);
    }
    
    /**
     * @param   int $mother
     * @param   int $father
     *
     * @return  int
     */
    private function oneHeterozygous($mother, $father)
    {
        $random = mt_rand(0, 1);
        $gene = ($random == 0) ? $father : $mother;
        return $gene;
    }
     
    /**
     * @return  int
     */
    private function bothHeterozygous()
    {
        $random = mt_rand(0, 3);
        $gen = ($random == 0) ? 1 : $random - 1;
        return $gene;
    }
    
    /**
     * @return  \Equidea\Engine\Entity\Horse\CoatEntity
     */
    public function calculate()
    {
        // Get parent genes
        $mother = $this->mother->getAllGenes();
        $father = $this->father->getAllGenes();
        
        // Calculate the childs genes
        $heritance = $this->allGenes($mother, $father);
        
        // Create new child instance
        $child = new CoatEntity();
        $child->setAllGenes($heritance);
        
        return $child;
    }
}