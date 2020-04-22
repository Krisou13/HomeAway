<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    /**
    * @var UserPasswordEncoderInterface
    */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user =  new User();
        $user->setUsername('Alexandre');
        $user->setEmail('a.manes@laposte.net');
        $user->setPassword($this->encoder->encodePassword($user, 'Test'));
        $manager->persist($user);
        $manager->flush();
    }
}
