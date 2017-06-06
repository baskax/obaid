<?php

namespace Obiad\Controller;

use Psr\Container\ContainerInterface;

class Base
{
    protected $container;
    protected $view;
    protected $db;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->view = $container->get('view');
        $this->db = $container->get('db');
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function getView() {
        return $this->view;
    }

    public function getDB() {
        return $this->db;
    }
}
