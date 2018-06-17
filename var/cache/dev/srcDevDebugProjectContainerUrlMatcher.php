<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/article')) {
            // article_index
            if ('/article' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ArticleController::index',  '_route' => 'article_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_article_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'article_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_article_index;
                }

                return $ret;
            }
            not_article_index:

            // article_new
            if ('/article/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ArticleController::new',  '_route' => 'article_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_article_new;
                }

                return $ret;
            }
            not_article_new:

            // article_show
            if (preg_match('#^/article/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'App\\Controller\\ArticleController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_article_show;
                }

                return $ret;
            }
            not_article_show:

            // article_edit
            if (preg_match('#^/article/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'App\\Controller\\ArticleController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_article_edit;
                }

                return $ret;
            }
            not_article_edit:

            // article_delete
            if (preg_match('#^/article/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'App\\Controller\\ArticleController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_article_delete;
                }

                return $ret;
            }
            not_article_delete:

            // article_ajax
            if ('/article/ajax/test' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ArticleController::ajax',  '_route' => 'article_ajax',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_article_ajax;
                }

                return $ret;
            }
            not_article_ajax:

            // categoryAction
            if (0 === strpos($pathinfo, '/article/action') && preg_match('#^/article/action/(?P<categoryId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoryAction')), array (  '_controller' => 'App\\Controller\\ArticleController::categoryAction',));
            }

        }

        // about
        if ('/about' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\Lecture8Controller::about',  '_route' => 'about',);
        }

        if (0 === strpos($pathinfo, '/category')) {
            // category_index
            if ('/category' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\CategoryController::index',  '_route' => 'category_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_category_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'category_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_category_index;
                }

                return $ret;
            }
            not_category_index:

            // category_new
            if ('/category/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\CategoryController::new',  '_route' => 'category_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_category_new;
                }

                return $ret;
            }
            not_category_new:

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'App\\Controller\\CategoryController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_category_show;
                }

                return $ret;
            }
            not_category_show:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'App\\Controller\\CategoryController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_category_edit;
                }

                return $ret;
            }
            not_category_edit:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'App\\Controller\\CategoryController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_category_delete;
                }

                return $ret;
            }
            not_category_delete:

        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\Lecture8Controller::contact',  '_route' => 'contact',);
        }

        if (0 === strpos($pathinfo, '/kategorieknih')) {
            // kategorieknih_index
            if ('/kategorieknih' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\KategorieknihController::index',  '_route' => 'kategorieknih_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_kategorieknih_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'kategorieknih_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_kategorieknih_index;
                }

                return $ret;
            }
            not_kategorieknih_index:

            // kategorieknih_new
            if ('/kategorieknih/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\KategorieknihController::new',  '_route' => 'kategorieknih_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_kategorieknih_new;
                }

                return $ret;
            }
            not_kategorieknih_new:

            // kategorieknih_show
            if (preg_match('#^/kategorieknih/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'kategorieknih_show')), array (  '_controller' => 'App\\Controller\\KategorieknihController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_kategorieknih_show;
                }

                return $ret;
            }
            not_kategorieknih_show:

            // kategorieknih_edit
            if (preg_match('#^/kategorieknih/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'kategorieknih_edit')), array (  '_controller' => 'App\\Controller\\KategorieknihController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_kategorieknih_edit;
                }

                return $ret;
            }
            not_kategorieknih_edit:

            // kategorieknih_delete
            if (preg_match('#^/kategorieknih/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'kategorieknih_delete')), array (  '_controller' => 'App\\Controller\\KategorieknihController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_kategorieknih_delete;
                }

                return $ret;
            }
            not_kategorieknih_delete:

        }

        elseif (0 === strpos($pathinfo, '/label')) {
            // label_index
            if ('/label' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\LabelController::index',  '_route' => 'label_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_label_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'label_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_label_index;
                }

                return $ret;
            }
            not_label_index:

            // label_new
            if ('/label/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\LabelController::new',  '_route' => 'label_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_label_new;
                }

                return $ret;
            }
            not_label_new:

            // label_show
            if (preg_match('#^/label/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'label_show')), array (  '_controller' => 'App\\Controller\\LabelController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_label_show;
                }

                return $ret;
            }
            not_label_show:

            // label_edit
            if (preg_match('#^/label/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'label_edit')), array (  '_controller' => 'App\\Controller\\LabelController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_label_edit;
                }

                return $ret;
            }
            not_label_edit:

            // label_delete
            if (preg_match('#^/label/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'label_delete')), array (  '_controller' => 'App\\Controller\\LabelController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_label_delete;
                }

                return $ret;
            }
            not_label_delete:

        }

        // app_lucky_number
        if ('/lucky/number' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\LuckyController::number',  '_route' => 'app_lucky_number',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\Lecture8Controller::homepage',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/produkt')) {
            // produkt_index
            if ('/produkt' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ProduktController::index',  '_route' => 'produkt_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_produkt_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produkt_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_produkt_index;
                }

                return $ret;
            }
            not_produkt_index:

            // produkt_new
            if ('/produkt/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ProduktController::new',  '_route' => 'produkt_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_produkt_new;
                }

                return $ret;
            }
            not_produkt_new:

            // produkt_show
            if (preg_match('#^/produkt/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produkt_show')), array (  '_controller' => 'App\\Controller\\ProduktController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_produkt_show;
                }

                return $ret;
            }
            not_produkt_show:

            // produkt_edit
            if (preg_match('#^/produkt/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produkt_edit')), array (  '_controller' => 'App\\Controller\\ProduktController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_produkt_edit;
                }

                return $ret;
            }
            not_produkt_edit:

            // produkt_delete
            if (preg_match('#^/produkt/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produkt_delete')), array (  '_controller' => 'App\\Controller\\ProduktController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_produkt_delete;
                }

                return $ret;
            }
            not_produkt_delete:

        }

        elseif (0 === strpos($pathinfo, '/status')) {
            // status_index
            if ('/status' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\StatusController::index',  '_route' => 'status_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_status_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'status_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_status_index;
                }

                return $ret;
            }
            not_status_index:

            // status_new
            if ('/status/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\StatusController::new',  '_route' => 'status_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_status_new;
                }

                return $ret;
            }
            not_status_new:

            // status_show
            if (preg_match('#^/status/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'status_show')), array (  '_controller' => 'App\\Controller\\StatusController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_status_show;
                }

                return $ret;
            }
            not_status_show:

            // status_edit
            if (preg_match('#^/status/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'status_edit')), array (  '_controller' => 'App\\Controller\\StatusController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_status_edit;
                }

                return $ret;
            }
            not_status_edit:

            // status_delete
            if (preg_match('#^/status/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'status_delete')), array (  '_controller' => 'App\\Controller\\StatusController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_status_delete;
                }

                return $ret;
            }
            not_status_delete:

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
