<?php

namespace App\Rules;

class SignupAndLoginRules
{

    /**
     * Сообщение об ошибке
     * @var string
     */
    private string $message;

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * 
     * @return void
     */
    private function setMessage(string $message) : void
    {
        $this->message = $message;
    }

    /**
     * Проверка минимального количества символов для поля `login`
     * @param string $login
     * 
     * @return bool
     */
    public function loginMin(string $login) : bool
    {
        if (mb_strlen($login) < 5) {
            $this->setMessage('Длина логина должна составлять не менее 5 символов');

            return false;
        }
        return true;
    }

    /**
     * Проверка максимального количества символов для поля `login`
     * @param string $login
     * 
     * @return bool
     */
    public function loginMax(string $login) : bool
    {
        if (mb_strlen($login) > 15) {
            $this->setMessage('Длина логина должна составлять не более 15 символов');

            return false;
        }
        return true;
    }

    /**
     * Проверка поля `login` на пустоту
     * @param string $login
     * 
     * @return bool
     */
    public function loginEmpty(string $login) : bool
    {
        if (empty($login)) {
            $this->setMessage('Поле логина не должно быть пустым');

            return false;
        }
        return true;
    }

    /**
     * Все проверки для поля `login`
     * @param string $login
     * 
     * @return bool
     */
    public function checkLogin(string $login) : bool
    {
        if ($this->loginEmpty($login)) {
            if ($this->loginMin($login)) {
                if ($this->loginMax($login)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Проверка поля `password` на пустоту
     * @param string $password
     * 
     * @return bool
     */
    public function passwordEmpty(string $password) : bool
    {
        if (empty($password)) {
            $this->setMessage('Поле пароля не должно быть пустым');

            return false;
        }
        return true;
    }

    /**
     * Все проверки для поля `password`
     * @param string $password
     * 
     * @return bool
     */
    public function checkPassword(string $password) : bool
    {
        if ($this->passwordEmpty($password)) {
            return true;
        }
        return false;
    }
}

?>