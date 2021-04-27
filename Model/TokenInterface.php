<?php

/*
 * This file is part of the FOSOAuthServerBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\OAuthServerBundle\Model;

use FOS\OAuthServerBundle\Propel\Client;
use OAuth2\Model\IOAuth2Token;
use Symfony\Component\Security\Core\User\UserInterface;

interface TokenInterface extends IOAuth2Token
{
    /**
     * @param int $timestamp
     */
    public function setExpiresAt($timestamp);

    /**
     * @return int
     */
    public function getExpiresAt();

    /**
     * @param string $token
     */
    public function setToken($token);

    /**
     * @param string $scope
     */
    public function setScope($scope);

    /**
     * @param UserInterface $user
     */
    public function setUser(UserInterface $user = null);

    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @param Client $client
     */
    public function setClient(Client $client = null);
}
