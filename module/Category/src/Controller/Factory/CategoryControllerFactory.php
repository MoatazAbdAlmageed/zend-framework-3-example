<?php

namespace Category\Controller\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;

use Category\Controller\CategoryController;

class CategoryControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = NULL)
    {

        // Get Doctrine entity manager
        $categoryService = $container->get('Category\Service\CategoryManager');
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        return new CategoryController($categoryService,$entityManager);
    }
}
