<?php

namespace PMToolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     */
    public function indexAction()
    {
        return $this->render(':default:dashboard.html.twig');
    }

    /**
     * @Route("/projects", name="projects")
     */
    public function projectsAction()
    {
        return $this->render(':default:projects.html.twig');
    }

    /**
     * @Route("/people", name="people")
     */
    public function peopleAction()
    {
        return $this->render(':default:people.html.twig');
    }

    /**
     * @Route("/files", name="files")
     */
    public function filesAction()
    {
        return $this->render(':default:files.html.twig');
    }

    /**
     * @Route("/example1", name="example1")
     */
    public function example1Action()
    {
        return $this->render(':default:example1.html.twig');
    }

    /**
     * @Route("/example2", name="example2")
     */
    public function example2Action()
    {
        return $this->render(':default:example2.html.twig');
    }

    /**
     * @Route("/example3", name="example3")
     */
    public function example3Action()
    {
        return $this->render(':default:example3.html.twig');
    }
}
