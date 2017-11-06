<?php

    namespace OC\TestBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;

    class Test1Controller extends Controller {

        public function indexAction() {

            $content = $this->get('templating')->render('OCTestBundle:Test:index.html.twig');
            return new Response($content);
        }

    }

?>

