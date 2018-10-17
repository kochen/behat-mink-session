<?php

declare(strict_types=1);

namespace Tests\Behat\Page\Admin\Account;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class LoginPage extends Page implements LoginPageInterface
{

    /**
     * {@inheritdoc}
     */
    public function hasValidationErrorWith($message)
    {
        return $this->getElement('validation_error')->getText() === $message;
    }

    public function logIn()
    {
        $this->getDocument()->pressButton('Login');
    }

    /**
     * {@inheritdoc}
     */
    public function specifyPassword($password)
    {
        $this->getDocument()->fillField('Password', $password);
    }

    /**
     * {@inheritdoc}
     */
    public function specifyUsername($username)
    {
        $this->getDocument()->fillField('Username', $username);
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteName()
    {
        return 'app_admin_login';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefinedElements()
    {
        return array_merge(parent::getDefinedElements(), [
            'validation_error' => '.message.negative',
        ]);
    }
}