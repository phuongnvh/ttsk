<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // cms_main_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cms_main_default_index');
            }

            return array (  '_controller' => 'CMS\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cms_main_default_index',);
        }

        // cms_main_default_rout
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_main_default_rout')), array (  '_controller' => 'CMS\\MainBundle\\Controller\\DefaultController::routAction',));
        }

        // cms_main_default_menu
        if ($pathinfo === '/menu') {
            return array (  '_controller' => 'CMS\\MainBundle\\Controller\\DefaultController::menuAction',  '_route' => 'cms_main_default_menu',);
        }

        // cms_main_default_rightslidebar
        if ($pathinfo === '/right') {
            return array (  '_controller' => 'CMS\\MainBundle\\Controller\\DefaultController::rightSlideBarAction',  '_route' => 'cms_main_default_rightslidebar',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // root
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'root');
                }

                return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\DefaultController::rootAction',  '_route' => 'root',);
            }

            // index
            if (preg_match('#^/admin/(?P<_locale>es|en|ca)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'index')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // article
                if (rtrim($pathinfo, '/') === '/admin/article') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'article');
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
                }
                not_article:

                // article_create
                if ($pathinfo === '/admin/article/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_article_create;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
                }
                not_article_create:

                // article_new
                if ($pathinfo === '/admin/article/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_new;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
                }
                not_article_new:

                // article_show
                if (0 === strpos($pathinfo, '/admin/article/show') && preg_match('#^/admin/article/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\ArticleController::showAction',));
                }
                not_article_show:

                // article_edit
                if (0 === strpos($pathinfo, '/admin/article/edit') && preg_match('#^/admin/article/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\ArticleController::editAction',));
                }
                not_article_edit:

                // article_update
                if (0 === strpos($pathinfo, '/admin/article/update') && preg_match('#^/admin/article/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_article_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_update')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\ArticleController::updateAction',));
                }
                not_article_update:

                // article_delete
                if (0 === strpos($pathinfo, '/admin/article/del') && preg_match('#^/admin/article/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\ArticleController::deleteAction',));
                }
                not_article_delete:

            }

            if (0 === strpos($pathinfo, '/admin/grparticle')) {
                // grouparticle
                if (rtrim($pathinfo, '/') === '/admin/grparticle') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_grouparticle;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'grouparticle');
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\GroupArticleController::indexAction',  '_route' => 'grouparticle',);
                }
                not_grouparticle:

                // grouparticle_create
                if ($pathinfo === '/admin/grparticle/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_grouparticle_create;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\GroupArticleController::createAction',  '_route' => 'grouparticle_create',);
                }
                not_grouparticle_create:

                // grouparticle_new
                if ($pathinfo === '/admin/grparticle/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_grouparticle_new;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\GroupArticleController::newAction',  '_route' => 'grouparticle_new',);
                }
                not_grouparticle_new:

                // grouparticle_show
                if (0 === strpos($pathinfo, '/admin/grparticle/show') && preg_match('#^/admin/grparticle/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_grouparticle_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grouparticle_show')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\GroupArticleController::showAction',));
                }
                not_grouparticle_show:

                // grouparticle_edit
                if (0 === strpos($pathinfo, '/admin/grparticle/edit') && preg_match('#^/admin/grparticle/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_grouparticle_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grouparticle_edit')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\GroupArticleController::editAction',));
                }
                not_grouparticle_edit:

                // grouparticle_update
                if (0 === strpos($pathinfo, '/admin/grparticle/update') && preg_match('#^/admin/grparticle/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_grouparticle_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grouparticle_update')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\GroupArticleController::updateAction',));
                }
                not_grouparticle_update:

                // grouparticle_delete
                if (0 === strpos($pathinfo, '/admin/grparticle/del') && preg_match('#^/admin/grparticle/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_grouparticle_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'grouparticle_delete')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\GroupArticleController::deleteAction',));
                }
                not_grouparticle_delete:

            }

            if (0 === strpos($pathinfo, '/admin/security/log')) {
                if (0 === strpos($pathinfo, '/admin/security/login')) {
                    // _cms_admin_security_login
                    if (rtrim($pathinfo, '/') === '/admin/security/login') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', '_cms_admin_security_login');
                        }

                        return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => '_cms_admin_security_login',);
                    }

                    // _cms_admin_security_login_check
                    if ($pathinfo === '/admin/security/login_check') {
                        return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SecurityController::securityCheckAction',  '_route' => '_cms_admin_security_login_check',);
                    }

                }

                // _cms_admin_security_logout
                if ($pathinfo === '/admin/security/logout') {
                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SecurityController::logoutAction',  '_route' => '_cms_admin_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }
                not_user:

                // user_create
                if ($pathinfo === '/admin/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_new
                if ($pathinfo === '/admin/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_show
                if (0 === strpos($pathinfo, '/admin/user/show') && preg_match('#^/admin/user/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\UserController::showAction',));
                }
                not_user_show:

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\UserController::editAction',));
                }
                not_user_edit:

                // user_update
                if (0 === strpos($pathinfo, '/admin/user/update') && preg_match('#^/admin/user/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (0 === strpos($pathinfo, '/admin/user/del') && preg_match('#^/admin/user/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

            if (0 === strpos($pathinfo, '/admin/role')) {
                // role
                if (rtrim($pathinfo, '/') === '/admin/role') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_role;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'role');
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\RoleController::indexAction',  '_route' => 'role',);
                }
                not_role:

                // role_create
                if ($pathinfo === '/admin/role/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_role_create;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\RoleController::createAction',  '_route' => 'role_create',);
                }
                not_role_create:

                // role_new
                if ($pathinfo === '/admin/role/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_role_new;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
                }
                not_role_new:

                // role_show
                if (0 === strpos($pathinfo, '/admin/role/show') && preg_match('#^/admin/role/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_role_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\RoleController::showAction',));
                }
                not_role_show:

                // role_edit
                if (preg_match('#^/admin/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_role_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\RoleController::editAction',));
                }
                not_role_edit:

                // role_update
                if (0 === strpos($pathinfo, '/admin/role/update') && preg_match('#^/admin/role/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_role_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_update')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\RoleController::updateAction',));
                }
                not_role_update:

                // role_delete
                if (0 === strpos($pathinfo, '/admin/role/del') && preg_match('#^/admin/role/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_role_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\RoleController::deleteAction',));
                }
                not_role_delete:

            }

            if (0 === strpos($pathinfo, '/admin/tag')) {
                // tag
                if (rtrim($pathinfo, '/') === '/admin/tag') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tag;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tag');
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\TagController::indexAction',  '_route' => 'tag',);
                }
                not_tag:

                // tag_create
                if ($pathinfo === '/admin/tag/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tag_create;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\TagController::createAction',  '_route' => 'tag_create',);
                }
                not_tag_create:

                // tag_new
                if ($pathinfo === '/admin/tag/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tag_new;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\TagController::newAction',  '_route' => 'tag_new',);
                }
                not_tag_new:

                // tag_show
                if (0 === strpos($pathinfo, '/admin/tag/show') && preg_match('#^/admin/tag/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tag_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\TagController::showAction',));
                }
                not_tag_show:

                // tag_edit
                if (0 === strpos($pathinfo, '/admin/tag/edit') && preg_match('#^/admin/tag/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tag_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_edit')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\TagController::editAction',));
                }
                not_tag_edit:

                // tag_update
                if (0 === strpos($pathinfo, '/admin/tag/update') && preg_match('#^/admin/tag/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_tag_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_update')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\TagController::updateAction',));
                }
                not_tag_update:

                // tag_delete
                if (0 === strpos($pathinfo, '/admin/tag/del') && preg_match('#^/admin/tag/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tag_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_delete')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\TagController::deleteAction',));
                }
                not_tag_delete:

            }

            if (0 === strpos($pathinfo, '/admin/specgrp')) {
                // specgrp
                if (rtrim($pathinfo, '/') === '/admin/specgrp') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_specgrp;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'specgrp');
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SpecialGroupArticleController::indexAction',  '_route' => 'specgrp',);
                }
                not_specgrp:

                // specgrp_create
                if ($pathinfo === '/admin/specgrp/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_specgrp_create;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SpecialGroupArticleController::createAction',  '_route' => 'specgrp_create',);
                }
                not_specgrp_create:

                // specgrp_new
                if ($pathinfo === '/admin/specgrp/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_specgrp_new;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SpecialGroupArticleController::newAction',  '_route' => 'specgrp_new',);
                }
                not_specgrp_new:

                // specgrp_show
                if (0 === strpos($pathinfo, '/admin/specgrp/show') && preg_match('#^/admin/specgrp/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_specgrp_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specgrp_show')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SpecialGroupArticleController::showAction',));
                }
                not_specgrp_show:

                // specgrp_edit
                if (0 === strpos($pathinfo, '/admin/specgrp/edit') && preg_match('#^/admin/specgrp/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_specgrp_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specgrp_edit')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SpecialGroupArticleController::editAction',));
                }
                not_specgrp_edit:

                // specgrp_update
                if (0 === strpos($pathinfo, '/admin/specgrp/update') && preg_match('#^/admin/specgrp/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_specgrp_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specgrp_update')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SpecialGroupArticleController::updateAction',));
                }
                not_specgrp_update:

                // specgrp_delete
                if (0 === strpos($pathinfo, '/admin/specgrp/del') && preg_match('#^/admin/specgrp/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_specgrp_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specgrp_delete')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\SpecialGroupArticleController::deleteAction',));
                }
                not_specgrp_delete:

            }

            if (0 === strpos($pathinfo, '/admin/cmspage')) {
                // cmspage
                if (rtrim($pathinfo, '/') === '/admin/cmspage') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cmspage;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cmspage');
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\CmsPageController::indexAction',  '_route' => 'cmspage',);
                }
                not_cmspage:

                // cmspage_create
                if ($pathinfo === '/admin/cmspage/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cmspage_create;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\CmsPageController::createAction',  '_route' => 'cmspage_create',);
                }
                not_cmspage_create:

                // cmspage_new
                if ($pathinfo === '/admin/cmspage/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cmspage_new;
                    }

                    return array (  '_controller' => 'CMS\\AdminBundle\\Controller\\CmsPageController::newAction',  '_route' => 'cmspage_new',);
                }
                not_cmspage_new:

                // cmspage_show
                if (0 === strpos($pathinfo, '/admin/cmspage/show') && preg_match('#^/admin/cmspage/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cmspage_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmspage_show')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\CmsPageController::showAction',));
                }
                not_cmspage_show:

                // cmspage_edit
                if (0 === strpos($pathinfo, '/admin/cmspage/edit') && preg_match('#^/admin/cmspage/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cmspage_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmspage_edit')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\CmsPageController::editAction',));
                }
                not_cmspage_edit:

                // cmspage_update
                if (0 === strpos($pathinfo, '/admin/cmspage/update') && preg_match('#^/admin/cmspage/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_cmspage_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmspage_update')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\CmsPageController::updateAction',));
                }
                not_cmspage_update:

                // cmspage_delete
                if (0 === strpos($pathinfo, '/admin/cmspage/del') && preg_match('#^/admin/cmspage/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cmspage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmspage_delete')), array (  '_controller' => 'CMS\\AdminBundle\\Controller\\CmsPageController::deleteAction',));
                }
                not_cmspage_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
