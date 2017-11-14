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

class LuckyController extends Controller
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
}