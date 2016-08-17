<?php

namespace Equidea\Entity\Horse;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Entity\Horse
 */
class HorseEntity {
    
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var int
     */
    private $age;
    
    /**
     * @var int
     */
    private $gender;
    
    /**
     * @var int
     */
    private $color;
    
    /**
     * @var \Equidea\Entity\Horse\CoatEntity
     */
    private $coat;
    
    /**
     * @var int
     */
    private $breed;
    
    /**
     * @var int
     */
    private $mother;
    
    /**
     * @var int
     */
    private $father;
    
    /**
     * @param   int $id
     */
    public function __construct($id) {
        $this->id = $id;
    }
    
    /**
     * @return  int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * @return  string
     */
    public function getName() {
        return $this->name;
    }
    
    /**
     * @param   string  $name
     *
     * @return  void
     */
    public function setName($name) {
        $this->name = $name;
    }
    
    /**
     * @return  int
     */
    public function getAge() {
        return $this->age;
    }
    
    /**
     * @param   int $age
     *
     * @return  void
     */
    public function setAge($age) {
        $this->age = $age;
    }
    
    /**
     * @return  int
     */
    public function getGender() {
        return $this->gender;
    }
    
    /**
     * @param   int $gender
     *
     * @return  void
     */
    public function setGender($gender) {
        $this->gender = $gender;
    }
    
    /**
     * @return  int
     */
    public function getColor() {
        return $this->color;
    }
    
    /**
     * @param   int $color
     *
     * @return  void
     */
    public function setColor($color) {
        $this->color = $color;
    }
    
    /**
     * @return  \Equidea\Entity\Horse\CoatEntity
     */
    public function getCoat() {
        return $this->coat;
    }
    
    /**
     * @param   \Equidea\Entity\Horse\CoatEntity    $coat
     *
     * @return  void
     */
    public function setCoat($coat) {
        $this->coat = $coat;
    }
    
    /**
     * @return  int
     */
    public function getBreed() {
        return $this->breed;
    }
    
    /**
     * @param   int $breed
     *
     * @return  void
     */
    public function setBreed($breed) {
        $this->breed = $breed;
    }
    
    /**
     * @return  int
     */
    public function getMother() {
        return $this->mother;
    }
    
    /**
     * @param   int $mother
     *
     * @return  void
     */
    public function setMother($mother) {
        $this->mother = $mother;
    }
    
    /**
     * @return  int
     */
    public function getFather() {
        return $this->father;
    }
    
    /**
     * @param   int $father
     *
     * @return  void
     */
    public function setFather($father) {
        $this->father = $father;
    }
}