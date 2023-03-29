<?php

class User {
    
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $profilePhoto;
    private $salutation;

    public function __construct($id, $firstName, $lastName, $email, $profilePhoto = null, $salutation = null) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->profilePhoto = $profilePhoto;
        $this->salutation = $salutation;
    }

    public function getFullName() {
        if ($this instanceof Student) {
            return $this->firstName . ' ' . $this->lastName;
        } else {
            return ($this->salutation ? $this->salutation . ' ' : '') . $this->firstName . ' ' . $this->lastName;
        }
    }

    public function getProfilePicture() {
        if ($this->profilePhoto) {
            return $this->profilePhoto;
        } else {
            return 'default_avatar.jpg'; // default system avatar
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function getId() {
        return $this->id;
    }

    public function save() {
        if (!$this->validate()) {
            return false;
        }
        // save user logic here
        return true;
    }

    private function validate() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        if ($this->profilePhoto && strpos($this->profilePhoto, '.jpg') === false) {
            return false;
        }
        return true;
    }
}
?>