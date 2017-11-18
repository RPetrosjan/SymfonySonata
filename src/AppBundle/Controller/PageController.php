<?php
/**
 * Created by PhpStorm.
 * User: Win10
 * Date: 13.11.2017
 * Time: 00:59
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use AppBundle\Entity\WebPages;

use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class PageController extends Controller
{
    /**
     * @param String $language
     * @return array
     *
     * @Route("/setlocale/{language}", name="setlocale")
     */
    public function selectLangueAction(Request $request,$language = null)
    {
        $request->getSession()->set('_locale', $language);
        // on tente de rediriger vers la page d'origine
        $url = $request->headers->get('referer');
        if(empty($url))
        {
            $url = $this->container->get('router')->getContext()->getBaseUrl();
        }
        return new RedirectResponse($url);
    }

    /**
     * @param String $page_name
     * @return array
     *
     * @Route("/{page_name}", name="page")
     */

    public function webPages(Request $request, $page_name = 'index')
    {

        $em = $this->getDoctrine()->getManager();
        $orm = $this->getDoctrine();
        $WebPages = $orm->getRepository(WebPages::class);

        $pages = $WebPages->findBy(array(
            'pageTitle' => $page_name,
        ))
       ;


        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = json_decode($serializer->serialize($pages, 'json'),true);
        dump($jsonContent[0]['twigs']);

//        dump($jsonContent);

        if(sizeof($pages)>0)
        {
            dump($pages);
        }
        else{
            throw $this->createNotFoundException('Page not exist');
        }

        return $this->render('web.html.twig', array(
            'var_twig' => 'TWIGS',
            'var_page' => $jsonContent[0],
        ));
    }


}