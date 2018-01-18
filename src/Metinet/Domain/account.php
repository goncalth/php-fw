<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 14:23
 */

namespace Metinet\Domain;


class account
{
    private $login;
    private $password;
    private $student;

    /**
     * account constructor.
     * @param $login
     * @param $password
     * @param $student
     */
    public function __construct(string $login,string $password,Student $student)
    {
        $this->login = $login;
        $this->password = md5($password);
        $this->student = $student;
    }

    public function connect($login, $password, $student) {
        if ($login === $this->login && md5($password) === $this->password) {
            session_start();
            $_SESSION['student'] = $student;
        }
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->student;
    }

    

}