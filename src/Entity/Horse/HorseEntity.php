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
     * @var int
     */
    private $owner;
    
    /**
     * @var int
     */
    private $breeder;
    
    /**
     * @param   int $id
     */
    public function __construct(int $id) {
        $this->setId($id);
    }
    
    /**
     * @return  int
     */
    public function getId():int {
        return $this->id;
    }
    
    /**
     * @param   int $id
     *
     * @return  void
     */
    public function setId(int $id) {
        $this->id = $id;
    }
    
    /**
     * @return  string
     */
    public function getName():string {
        return $this->name;
    }
    
    /**
     * @param   string  $name
     *
     * @return  void
     */
    public function setName(string $name) {
        $this->name = $name;
    }
    
    /**
     * @return  int
     */
    public function getAge():int {
        return $this->age;
    }
    
    /**
     * @param   int $age
     *
     * @return  void
     */
    public function setAge(int $age) {
        $this->age = $age;
    }
    
    /**
     * @return  int
     */
    public function getGender():int {
        return $this->gender;
    }
    
    /**
     * @param   int $gender
     *
     * @return  void
     */
    public function setGender(int $gender) {
        $this->gender = $gender;
    }
    
    /**
     * @return  int
     */
    public function getColor():int {
        return $this->color;
    }
    
    /**
     * @param   int $color
     *
     * @return  void
     */
    public function setColor(int $color) {
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
    public function setCoat(CoatEntity $coat) {
        $this->coat = $coat;
    }
    
    /**
     * @return  int
     */
    public function getBreed():int {
        return $this->breed;
    }
    
    /**
     * @param   int $breed
     *
     * @return  void
     */
    public function setBreed(int $breed) {
        $this->breed = $breed;
    }
    
    /**
     * @return  int
     */
    public function getMother():int {
        return $this->mother;
    }
    
    /**
     * @param   int $mother
     *
     * @return  void
     */
    public function setMother(int $mother) {
        $this->mother = $mother;
    }
    
    /**
     * @return  int
     */
    public function getFather():int {
        return $this->father;
    }
    
    /**
     * @param   int $father
     *
     * @return  void
     */
    public function setFather(int $father) {
        $this->father = $father;
    }
    
    /**
     * @return  int
     */
    public function getOwner():int {
        return $this->owner;
    }
    
    /**
     * @param   int $owner
     *
     * @return  void
     */
    public function setOwner(int $owner) {
        $this->owner = $owner;
    }
    
    /**
     * @return  int
     */
    public function getBreeder():int {
        return $this->breeder;
    }
    
    /**
     * @param   int $breeder
     *
     * @return  void
     */
    public function setBreeder(int $breeder) {
        $this->breeder = $breeder;
    }
}