<?php

declare(strict_types=1);

namespace Tests\Behat\Page\Admin\Account;

use SensioLabs\Behat\PageObjectExtension\PageObject\PageObject;

interface LoginPageInterface extends PageObject
{
    /**
     * @param string $message
     *
     * @return bool
     */
    public function hasValidationErrorWith($message);

    public function logIn();

    /**
     * @param string $password
     */
    public function specifyPassword($password);

    /**
     * @param string $username
     */
    public function specifyUsername($username);
}