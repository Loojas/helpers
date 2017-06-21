<?php

namespace Loojas\Helpers;

use Respect\Validation\Validator as v;
use Exception;

/**
 * Class ValidatePassword
 * @package Loojas\Helpers
 */
class ValidatePassword
{

    /**
     * Is Password Valid
     * @param $password
     * @return $this
     */
    public static function isValid($password)
    {

        if (!v::noWhitespace()->validate($password)) {
            throw new Exception('Não é permitido espaço em branco na Senha.');
        }

        if (!Validate::isWeakPassword($password)) {
            throw new Exception('Sua Senha foi detectada como insegura!');
        }

        if (!Validate::isPasswd($password)) {
            throw new Exception('A senha deve conter no miníno 6 caracteres.');
        }

        if(!v::stringType()->notEmpty()->validate($password)) {
            throw new Exception('Esta não é uma senha válida.');
        }

    }

}
