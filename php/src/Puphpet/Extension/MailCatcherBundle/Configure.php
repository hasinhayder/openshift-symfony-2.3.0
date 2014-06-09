<?php

namespace Puphpet\Extension\MailCatcherBundle;

use Puphpet\MainBundle\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Configure extends Extension\ExtensionAbstract
{
    protected $name = 'MailCatcher';
    protected $slug = 'mailcatcher';
    protected $targetFile = 'puphpet/puppet/manifest.pp';

    protected $sources = [
        'mailcatcher' => ":git => 'https://github.com/puphpet/puppet-mailcatcher.git'",
        'supervisord' => ":git => 'https://github.com/puphpet/puppet-supervisord.git'",
    ];

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->dataLocation = __DIR__ . '/Resources/config';

        parent::__construct($container);
    }

    public function getFrontController()
    {
        return $this->container->get('puphpet.extension.mailcatcher.front_controller');
    }

    public function getManifestController()
    {
        return $this->container->get('puphpet.extension.mailcatcher.manifest_controller');
    }
}
