<?php


class User
{
    private $email;
    private $firstname;
    private $name;
    private $birthday;

    public function __construct($email, $firstname, $name, $birthday)
    {
        $this->email     = $email;
        $this->firstname = $firstname;
        $this->name      = $name;
        $this->birthday  = $birthday;
    }

    public function isValid()
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)
                && isset($this->firstname)
                && isset($this->name)
                && time() >= strtotime('+13 years', strtotime($this->birthday)))
            return true;
        return false;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }
}