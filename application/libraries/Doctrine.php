<?php

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Tools\Setup,
    Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\DatabaseDriver;
use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
use Doctrine\ORM\Tools\EntityGenerator;

class Doctrine
{
    public $em;

    public function __construct()
    {
        require_once __DIR__ . '/Doctrine/ORM/Tools/Setup.php';
        Setup::registerAutoloadDirectory(__DIR__);

        // Load the database configuration from CodeIgniter
        require APPPATH . 'config/'.ENVIRONMENT.'/database.php';

        $connection_options = array(
            'driver'        => 'mysqli',
            'user'          => $db['default']['username'],
            'password'      => $db['default']['password'],
            'host'          => $db['default']['hostname'],
            'dbname'        => $db['default']['database'],
            'charset'       => $db['default']['char_set'],
            'driverOptions' => array(
                'charset'   => $db['default']['char_set'],
            ),
        );

        // With this configuration, your model files need to be in application/models/Entity
        // e.g. Creating a new Entity\User loads the class from application/models/Entity/User.php
        $models_namespace = 'models/Entities';
        $models_path = APPPATH . 'models/Entities';
        $proxies_dir = APPPATH . 'models/Proxies';
        $metadata_paths = array(APPPATH . 'models/Entities');

        // Set $dev_mode to TRUE to disable caching while you develop
        $config = Setup::createAnnotationMetadataConfiguration($metadata_paths, $dev_mode = true, $proxies_dir);
        $this->em = EntityManager::create($connection_options, $config);

//         $loader = new ClassLoader($models_namespace, $models_path);
//         $loader->register();
    }
    
    
    /**
     * generate entity objects automatically from mysql db tables
     * @return none
     */
    function generate_classes(){
         
        $this->em->getConfiguration()
        ->setMetadataDriverImpl(
                new DatabaseDriver (
                        $this->em->getConnection()->getSchemaManager()
                )
        );
    
        $cmf = new DisconnectedClassMetadataFactory();
        $cmf->setEntityManager($this->em);
        $metadata = $cmf->getAllMetadata();
        $generator = new EntityGenerator();
        $generator->setUpdateEntityIfExists(true);
        $generator->setGenerateStubMethods(true);
        $generator->setGenerateAnnotations(true);
        $generator->generate($metadata, APPPATH."generated-entities");
         
    }
}