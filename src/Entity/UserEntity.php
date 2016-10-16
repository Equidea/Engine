<?php

namespace Equidea\Entity;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Equidea\Entity
 */
class UserEntity {
    
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var string
     */
    private $username;
    
    /**
     * @var string
     */
    private $password;
    
    /**
     * @var string
     */
    private $email;
    
    /**
     * @var int
     */
    private $money;
    
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
    public function getUsername():string {
        return $this->username;
    }
    
    /**
     * @param   string  $username
     *
     * @return  void
     */
    public function setUsername(string $username) {
        $this->username = $username;
    }
    
    /**
     * @return  string
     */
    public function getPassword():string {
        return $this->password;
    }
    
    /**
     * @param   string  $password
     *
     * @return  void
     */
    public function setPassword(string $password) {
        $this->password = $password;
    }
    
    /**
     * @return  string
     */
    public function getEmail():string {
        return $this->email;
    }
    
    /**
     * @param   string  $email
     *
     * @return  void
     */
    public function setEmail(string $email) {
        $this->email = $email;
    }
    
    /**
     * @return  int
     */
    public function getMoney():int {
        return $this->money;
    }
    
    /**
     * @param   int $money
     *
     * @return  void
     */
    public function setMoney(int $money) {
        $this->money = $money;
    }
}