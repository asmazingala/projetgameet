<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/ad' => [[['_route' => 'ad_list', '_controller' => 'App\\Controller\\AdController::list'], null, null, null, false, false, null]],
        '/ad/new' => [[['_route' => 'ad_new', '_controller' => 'App\\Controller\\AdController::form'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/charter/gameet' => [[['_route' => 'charter_gameet', '_controller' => 'App\\Controller\\CharterGameetController::index'], null, null, null, false, false, null]],
        '/confidentiality' => [[['_route' => 'confidentiality', '_controller' => 'App\\Controller\\ConfidentialityController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/cookies/policy' => [[['_route' => 'cookies_policy', '_controller' => 'App\\Controller\\CookiesPolicyController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event_list', '_controller' => 'App\\Controller\\EventController::list'], null, null, null, false, false, null]],
        '/event/new' => [[['_route' => 'event_new', '_controller' => 'App\\Controller\\EventController::form'], null, null, null, false, false, null]],
        '/hotnew' => [[['_route' => 'hotnew_list', '_controller' => 'App\\Controller\\HotnewController::list'], null, null, null, false, false, null]],
        '/hotnew/new' => [[['_route' => 'hotnew_new', '_controller' => 'App\\Controller\\HotnewController::form'], null, null, null, false, false, null]],
        '/legal/notice' => [[['_route' => 'legal_notice', '_controller' => 'App\\Controller\\LegalNoticeController::index'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main_index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\PresentationController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login_', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPass'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team', '_controller' => 'App\\Controller\\TeamController::index'], null, null, null, false, false, null]],
        '/term/of/use' => [[['_route' => 'term_of_use', '_controller' => 'App\\Controller\\TermOfUseController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/ad(\\d+)/show(*:181)'
                .'|/event(?'
                    .'|(\\d+)/show(*:208)'
                    .'|/event/([^/]++)/delete(*:238)'
                .')'
                .'|/hotnew(?'
                    .'|(\\d+)/show(*:267)'
                    .'|/hotnew/([^/]++)/delete(*:298)'
                .')'
                .'|/reset\\-pass/([^/]++)(*:328)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        181 => [[['_route' => 'ad_show', '_controller' => 'App\\Controller\\AdController::show'], ['id'], null, null, false, false, null]],
        208 => [[['_route' => 'event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], null, null, false, false, null]],
        238 => [[['_route' => 'event_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], null, null, false, false, null]],
        267 => [[['_route' => 'hotnew_show', '_controller' => 'App\\Controller\\HotnewController::show'], ['id'], null, null, false, false, null]],
        298 => [[['_route' => 'hotnew_hotnew_delete', '_controller' => 'App\\Controller\\HotnewController::delete'], ['id'], null, null, false, false, null]],
        328 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
