<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/c')) {
            // _assetic_ca9f5db
            if ('/css/ca9f5db.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ca9f5db',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ca9f5db',);
            }

            // _assetic_ca9f5db_0
            if ('/css/ca9f5db_comments_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ca9f5db',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ca9f5db_0',);
            }

            // _assetic_577f0a2
            if ('/css/compiled/app.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '577f0a2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_577f0a2',);
            }

            if (0 === strpos($pathinfo, '/css/compiled/app_')) {
                // _assetic_577f0a2_0
                if ('/css/compiled/app_bootstrap_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '577f0a2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_577f0a2_0',);
                }

                // _assetic_577f0a2_1
                if ('/css/compiled/app_style_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '577f0a2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_577f0a2_1',);
                }

                // _assetic_577f0a2_7
                if ('/css/compiled/app_select-boxes_8.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '577f0a2',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_577f0a2_7',);
                }

                // _assetic_577f0a2_2
                if ('/css/compiled/app_nivo-slider_3.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '577f0a2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_577f0a2_2',);
                }

                // _assetic_577f0a2_3
                if ('/css/compiled/app_dark_4.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '577f0a2',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_577f0a2_3',);
                }

                // _assetic_577f0a2_4
                if ('/css/compiled/app_font-icons_5.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '577f0a2',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_577f0a2_4',);
                }

                // _assetic_577f0a2_5
                if ('/css/compiled/app_animate_6.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '577f0a2',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_577f0a2_5',);
                }

                // _assetic_577f0a2_6
                if ('/css/compiled/app_magnific-popup_7.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '577f0a2',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_577f0a2_6',);
                }

            }

        }

        // ns_web_forums_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'NS\\WebBundle\\Controller\\MainController::contactAction',  '_route' => 'ns_web_forums_contact',);
        }

        if (0 === strpos($pathinfo, '/js/compiled/main')) {
            // _assetic_c469cd9
            if ('/js/compiled/main.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c469cd9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c469cd9',);
            }

            if (0 === strpos($pathinfo, '/js/compiled/main_jquery')) {
                // _assetic_c469cd9_0
                if ('/js/compiled/main_jquery_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c469cd9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c469cd9_0',);
                }

                // _assetic_c469cd9_2
                if ('/js/compiled/main_jquery.nivo_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c469cd9',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_c469cd9_2',);
                }

                // _assetic_c469cd9_3
                if ('/js/compiled/main_jquery.gmap_4.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c469cd9',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_c469cd9_3',);
                }

            }

            // _assetic_c469cd9_1
            if ('/js/compiled/main_plugins_2.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c469cd9',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_c469cd9_1',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // ns_web_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'NS\\WebBundle\\Controller\\MainController::homepageAction',  '_route' => 'ns_web_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_ns_web_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ns_web_homepage'));
            }

            return $ret;
        }
        not_ns_web_homepage:

        if (0 === strpos($pathinfo, '/forums')) {
            // ns_web_forums
            if (preg_match('#^/forums/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_forums')), array (  '_controller' => 'NS\\WebBundle\\Controller\\MainController::forumAction',));
            }

            // ns_web_forums_display
            if ('/forums' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'NS\\WebBundle\\Controller\\ForumController::listAction',  '_route' => 'ns_web_forums_display',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_ns_web_forums_display;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ns_web_forums_display'));
                }

                return $ret;
            }
            not_ns_web_forums_display:

        }

        elseif (0 === strpos($pathinfo, '/story')) {
            // ns_web_story_new
            if ('/story/new' === $pathinfo) {
                return array (  '_controller' => 'NS\\WebBundle\\Controller\\StoryController::addAction',  '_route' => 'ns_web_story_new',);
            }

            // ns_web_story_edit
            if (0 === strpos($pathinfo, '/story/edit') && preg_match('#^/story/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_story_edit')), array (  '_controller' => 'NS\\WebBundle\\Controller\\StoryController::editAction',));
            }

            // ns_web_story_new_scene
            if (preg_match('#^/story/(?P<id>[^/]++)/new/first\\-scene$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_story_new_scene')), array (  '_controller' => 'NS\\WebBundle\\Controller\\StoryController::firstSceneAction',));
            }

            // ns_web_story_view
            if (preg_match('#^/story/(?P<id>[^/]++)/view$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_story_view')), array (  '_controller' => 'NS\\WebBundle\\Controller\\StoryController::viewAction',));
            }

            // ns_web_scenes_add
            if (preg_match('#^/story/(?P<id>[^/]++)/new\\-scene$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_scenes_add')), array (  '_controller' => 'NS\\WebBundle\\Controller\\SceneController::newAction',));
            }

            // ns_web_read_story
            if (preg_match('#^/story/(?P<id>[^/]++)/view\\-story$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_read_story')), array (  '_controller' => 'NS\\WebBundle\\Controller\\StoryController::readAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/scenes')) {
            // ns_web_scenes_view
            if (preg_match('#^/scenes/(?P<id>[^/]++)/view$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_scenes_view')), array (  '_controller' => 'NS\\WebBundle\\Controller\\SceneController::viewAction',));
            }

            // ns_web_scenes_read
            if (preg_match('#^/scenes/(?P<id>[^/]++)/read$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_scenes_read')), array (  '_controller' => 'NS\\WebBundle\\Controller\\SceneController::readAction',));
            }

            // ns_web_proposed_scenes_add
            if (preg_match('#^/scenes/(?P<id>[^/]++)/proposed\\-scene$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_proposed_scenes_add')), array (  '_controller' => 'NS\\WebBundle\\Controller\\ProposedSceneController::addAction',));
            }

            // ns_web_proposed_scenes_view
            if (preg_match('#^/scenes/(?P<id>[^/]++)/view\\-proposed\\-scene$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_proposed_scenes_view')), array (  '_controller' => 'NS\\WebBundle\\Controller\\ProposedSceneController::viewAction',));
            }

        }

        // ns_web_how_it_works
        if ('/how-it-works' === $pathinfo) {
            return array (  '_controller' => 'NS\\WebBundle\\Controller\\MainController::howAction',  '_route' => 'ns_web_how_it_works',);
        }

        // ns_web_blog_single
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_web_blog_single')), array (  '_controller' => 'NS\\WebBundle\\Controller\\MainController::showArticleAction',));
        }

        // ns_web_terms_of_use
        if ('/terms-of-use' === $pathinfo) {
            return array (  '_controller' => 'NS\\WebBundle\\Controller\\MainController::termsAction',  '_route' => 'ns_web_terms_of_use',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'NS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array('_route' => 'login_check');
            }

            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/admin')) {
            // ns_admin_homepage
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'NS\\AdminBundle\\Controller\\DashboardController::indexAction',  '_route' => 'ns_admin_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_ns_admin_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ns_admin_homepage'));
                }

                return $ret;
            }
            not_ns_admin_homepage:

            if (0 === strpos($pathinfo, '/admin/forum')) {
                // ns_admin_forun
                if ('/admin/forum' === $pathinfo) {
                    return array (  '_controller' => 'NS\\AdminBundle\\Controller\\ForumController::listAction',  '_route' => 'ns_admin_forun',);
                }

                // ns_admin_forun_add_new
                if ('/admin/forum/add-new' === $pathinfo) {
                    return array (  '_controller' => 'NS\\AdminBundle\\Controller\\ForumController::addAction',  '_route' => 'ns_admin_forun_add_new',);
                }

                // ns_admin_forun_edit
                if (0 === strpos($pathinfo, '/admin/forum/edit') && preg_match('#^/admin/forum/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_admin_forun_edit')), array (  '_controller' => 'NS\\AdminBundle\\Controller\\ForumController::editAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/scenes')) {
                // ns_admin_scenes
                if ('/admin/scenes' === $pathinfo) {
                    return array (  '_controller' => 'NS\\AdminBundle\\Controller\\ScenesController::listAction',  '_route' => 'ns_admin_scenes',);
                }

                // ns_admin_view_proposed_scenes
                if (preg_match('#^/admin/scenes/(?P<id>[^/]++)/vew\\-proposed\\-scenes$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_admin_view_proposed_scenes')), array (  '_controller' => 'NS\\AdminBundle\\Controller\\ScenesController::viewAction',));
                }

            }

            // ns_admin_storyline
            if ('/admin/storyline' === $pathinfo) {
                return array (  '_controller' => 'NS\\AdminBundle\\Controller\\StoryController::listAction',  '_route' => 'ns_admin_storyline',);
            }

            // ns_admin_activate_scenes
            if (0 === strpos($pathinfo, '/admin/activate-scenes') && preg_match('#^/admin/activate\\-scenes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_admin_activate_scenes')), array (  '_controller' => 'NS\\AdminBundle\\Controller\\ScenesController::validateAction',));
            }

            if (0 === strpos($pathinfo, '/admin/articles')) {
                // ns_admin_articles
                if ('/admin/articles' === $pathinfo) {
                    return array (  '_controller' => 'NS\\AdminBundle\\Controller\\ArticlesController::listAction',  '_route' => 'ns_admin_articles',);
                }

                // ns_admin_articles_new
                if ('/admin/articles/add-new' === $pathinfo) {
                    return array (  '_controller' => 'NS\\AdminBundle\\Controller\\ArticlesController::addAction',  '_route' => 'ns_admin_articles_new',);
                }

                // ns_admin_articles_edit
                if (0 === strpos($pathinfo, '/admin/articles/edit') && preg_match('#^/admin/articles/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_admin_articles_edit')), array (  '_controller' => 'NS\\AdminBundle\\Controller\\ArticlesController::editAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/testimonials')) {
                // ns_admin_testimonials
                if ('/admin/testimonials' === $pathinfo) {
                    return array (  '_controller' => 'NS\\AdminBundle\\Controller\\TestimonialController::listAction',  '_route' => 'ns_admin_testimonials',);
                }

                // ns_admin_testimonials_new
                if ('/admin/testimonials/add-new' === $pathinfo) {
                    return array (  '_controller' => 'NS\\AdminBundle\\Controller\\TestimonialController::addAction',  '_route' => 'ns_admin_testimonials_new',);
                }

                // ns_admin_testimonials_edit
                if (0 === strpos($pathinfo, '/admin/testimonials/edit') && preg_match('#^/admin/testimonials/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_admin_testimonials_edit')), array (  '_controller' => 'NS\\AdminBundle\\Controller\\TestimonialController::editAction',));
                }

            }

            // ns_terms_of_use
            if ('/admin/terms-of-use' === $pathinfo) {
                return array (  '_controller' => 'NS\\AdminBundle\\Controller\\CMSController::termsAction',  '_route' => 'ns_terms_of_use',);
            }

            if (0 === strpos($pathinfo, '/admin/partners')) {
                // ns_admin_partners
                if ('/admin/partners' === $pathinfo) {
                    return array (  '_controller' => 'NS\\AdminBundle\\Controller\\PartnersController::listAction',  '_route' => 'ns_admin_partners',);
                }

                // ns_admin_partners_new
                if ('/admin/partners/add-new' === $pathinfo) {
                    return array (  '_controller' => 'NS\\AdminBundle\\Controller\\PartnersController::addAction',  '_route' => 'ns_admin_partners_new',);
                }

                // ns_admin_partners_edit
                if (0 === strpos($pathinfo, '/admin/partners/edit') && preg_match('#^/admin/partners/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ns_admin_partners_edit')), array (  '_controller' => 'NS\\AdminBundle\\Controller\\PartnersController::editAction',));
                }

            }

            // ns_admin_users
            if ('/admin/users' === $pathinfo) {
                return array (  '_controller' => 'NS\\AdminBundle\\Controller\\UserController::listAction',  '_route' => 'ns_admin_users',);
            }

        }

        elseif (0 === strpos($pathinfo, '/api/threads')) {
            // fos_comment_new_threads
            if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_new_threads;
                }

                return $ret;
            }
            not_fos_comment_new_threads:

            // fos_comment_edit_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_edit_thread_commentable;
                }

                return $ret;
            }
            not_fos_comment_edit_thread_commentable:

            // fos_comment_new_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_new_thread_comments;
                }

                return $ret;
            }
            not_fos_comment_new_thread_comments:

            // fos_comment_remove_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_remove_thread_comment;
                }

                return $ret;
            }
            not_fos_comment_remove_thread_comment:

            // fos_comment_edit_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_edit_thread_comment;
                }

                return $ret;
            }
            not_fos_comment_edit_thread_comment:

            // fos_comment_new_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_new_thread_comment_votes;
                }

                return $ret;
            }
            not_fos_comment_new_thread_comment_votes:

            // fos_comment_get_thread
            if (preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_get_thread;
                }

                return $ret;
            }
            not_fos_comment_get_thread:

            // fos_comment_get_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_get_threads;
                }

                return $ret;
            }
            not_fos_comment_get_threads:

            // fos_comment_post_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_comment_post_threads;
                }

                return $ret;
            }
            not_fos_comment_post_threads:

            // fos_comment_patch_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
                if (!in_array($requestMethod, array('PATCH'))) {
                    $allow = array_merge($allow, array('PATCH'));
                    goto not_fos_comment_patch_thread_commentable;
                }

                return $ret;
            }
            not_fos_comment_patch_thread_commentable:

            // fos_comment_get_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_get_thread_comment;
                }

                return $ret;
            }
            not_fos_comment_get_thread_comment:

            // fos_comment_patch_thread_comment_state
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
                if (!in_array($requestMethod, array('PATCH'))) {
                    $allow = array_merge($allow, array('PATCH'));
                    goto not_fos_comment_patch_thread_comment_state;
                }

                return $ret;
            }
            not_fos_comment_patch_thread_comment_state:

            // fos_comment_put_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_fos_comment_put_thread_comments;
                }

                return $ret;
            }
            not_fos_comment_put_thread_comments:

            // fos_comment_get_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_get_thread_comments;
                }

                return $ret;
            }
            not_fos_comment_get_thread_comments:

            // fos_comment_post_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_comment_post_thread_comments;
                }

                return $ret;
            }
            not_fos_comment_post_thread_comments:

            // fos_comment_get_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_comment_get_thread_comment_votes;
                }

                return $ret;
            }
            not_fos_comment_get_thread_comment_votes:

            // fos_comment_post_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_comment_post_thread_comment_votes;
                }

                return $ret;
            }
            not_fos_comment_post_thread_comment_votes:

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
