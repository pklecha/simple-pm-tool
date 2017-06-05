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
}
