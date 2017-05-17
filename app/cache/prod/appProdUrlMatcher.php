<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/blog')) {
            // gdmblog_accueil
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gdmblog_accueil')), array (  '_controller' => 'gdm\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // gdmblog_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gdmblog_voir')), array (  '_controller' => 'gdm\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // gdmblog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'gdm\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'gdmblog_ajouter',);
                }

            }

            // gdmblog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gdmblog_modifier')), array (  '_controller' => 'gdm\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            // gdmblog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gdmblog_supprimer')), array (  '_controller' => 'gdm\\BlogBundle\\Controller\\BlogController::supprimerAction',));
            }

            // gdmblog_voir_slug
            if (preg_match('#^/blog/(?P<annee>\\d{4})/(?P<slug>[^/\\.]++)(?:\\.(?P<format>html|xml))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gdmblog_voir_slug')), array (  '_controller' => 'gdm\\BlogBundle\\Controller\\BlogController::voirSlugAction',  'format' => 'html',));
            }

            // gdmblog_test
            if ($pathinfo === '/blog/test') {
                return array (  '_controller' => 'gdm\\BlogBundle\\Controller\\BlogController::testAction',  '_route' => 'gdmblog_test',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'gdm\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
