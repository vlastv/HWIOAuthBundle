<?php
/**
 * Created by PhpStorm.
 * User: vlastv
 * Date: 25.07.13
 * Time: 16:57
 */

namespace HWI\Bundle\OAuthBundle\OAuth\Response;


class VkontakteUserResponse extends PathUserResponse
{
    public function getRealName()
    {
        $lastName = $this->getValueForPath('last_name');
        $firstName = $this->getValueForPath('first_name');

        if ($firstName &&  $lastName) {
            return $firstName . ' ' . $lastName;
        } elseif ($firstName || $lastName) {
            return $firstName ?: $lastName;
        }

        return null;
    }
} 