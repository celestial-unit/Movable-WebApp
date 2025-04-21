<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [
            [['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, true, false, null],
            [['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null],
        ],
        '/admin/banned-users' => [[['_route' => 'app_admin_banned_users', '_controller' => 'App\\Controller\\AdminController::bannedUsers'], null, null, null, false, false, null]],
        '/admin/driver' => [[['_route' => 'admin_driver_index', '_controller' => 'App\\Controller\\AdminDriverController::index'], null, null, null, true, false, null]],
        '/admin/driver/new' => [[['_route' => 'admin_driver_new', '_controller' => 'App\\Controller\\AdminDriverController::new'], null, null, null, false, false, null]],
        '/admin/transport' => [[['_route' => 'admin_transport_index', '_controller' => 'App\\Controller\\AdminTransportController::index'], null, null, null, true, false, null]],
        '/admin/transport/new' => [[['_route' => 'admin_transport_new', '_controller' => 'App\\Controller\\AdminTransportController::new'], null, null, null, false, false, null]],
        '/agent' => [[['_route' => 'agent_list', '_controller' => 'App\\Controller\\AgentController::index'], null, null, null, false, false, null]],
        '/agentAdmin' => [[['_route' => 'agent_list_admin', '_controller' => 'App\\Controller\\AgentController::index2'], null, null, null, false, false, null]],
        '/agent/new' => [[['_route' => 'agent_new', '_controller' => 'App\\Controller\\AgentController::new'], null, null, null, false, false, null]],
        '/agent/statistics' => [[['_route' => 'agent_statistics', '_controller' => 'App\\Controller\\AgentController::agentStatistics'], null, null, null, false, false, null]],
        '/event/registrationback/registration' => [
            [['_route' => 'app_event_registration_back_index', '_controller' => 'App\\Controller\\Back\\EventRegistrationBackController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_eventback_registration_index', '_controller' => 'App\\Controller\\registrationback::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/check-status' => [[['_route' => 'app_check_status', '_controller' => 'App\\Controller\\CheckStatusController::index'], null, null, null, false, false, null]],
        '/api/check-reservation' => [[['_route' => 'app_reservation_check', '_controller' => 'App\\Controller\\CheckStatusController::checkReservation'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/destinations/courses' => [[['_route' => 'Destinations_page', '_controller' => 'App\\Controller\\Destination\\DestinationController::courses'], null, null, null, false, false, null]],
        '/destinations/new' => [[['_route' => 'app_destination_new', '_controller' => 'App\\Controller\\Destination\\DestinationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/destinations/destinations' => [[['_route' => 'app_destination_cards', '_controller' => 'App\\Controller\\Destination\\DestinationController::showCards'], null, null, null, false, false, null]],
        '/favorite' => [[['_route' => 'app_favorite_index', '_controller' => 'App\\Controller\\Destination\\FavoriteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/favorite/new' => [[['_route' => 'app_favorite_new', '_controller' => 'App\\Controller\\Destination\\FavoriteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/parkingspot' => [[['_route' => 'app_parkingspot_index', '_controller' => 'App\\Controller\\Destination\\ParkingspotController::index'], null, ['GET' => 0], null, false, false, null]],
        '/parkingspot/new' => [[['_route' => 'app_parkingspot_new', '_controller' => 'App\\Controller\\Destination\\ParkingspotController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/drivers' => [[['_route' => 'driver_index', '_controller' => 'App\\Controller\\DriverController::index'], null, ['GET' => 0], null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/office' => [[['_route' => 'office_list_admin', '_controller' => 'App\\Controller\\OfficeController::index'], null, null, null, false, false, null]],
        '/office/new' => [[['_route' => 'office_new', '_controller' => 'App\\Controller\\OfficeController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/admin/dashboard' => [[['_route' => 'app_reservation_admin_dashboard', '_controller' => 'App\\Controller\\ReservationController::adminDashboard'], null, null, null, false, false, null]],
        '/reservation/admin/destinations' => [[['_route' => 'app_reservation_admin_destinations', '_controller' => 'App\\Controller\\ReservationController::adminDestinations'], null, null, null, false, false, null]],
        '/reservation/admin/destinations/new' => [[['_route' => 'app_reservation_admin_destination_new', '_controller' => 'App\\Controller\\ReservationController::adminNewDestination'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/check-banned' => [[['_route' => 'app_check_banned', '_controller' => 'App\\Controller\\SecurityController::checkBannedStatus'], null, null, null, false, false, null]],
        '/update-last-login' => [[['_route' => 'app_update_last_login', '_controller' => 'App\\Controller\\SecurityController::updateLastLogin'], null, null, null, false, false, null]],
        '/transport/list' => [[['_route' => 'transport_list', '_controller' => 'App\\Controller\\TransportController::listTransports'], null, null, null, false, false, null]],
        '/transport/new' => [[['_route' => 'transport_new', '_controller' => 'App\\Controller\\TransportController::manageTransport'], null, null, null, false, false, null]],
        '/admin/reservation' => [[['_route' => 'admin_waitlist_index', '_controller' => 'App\\Controller\\WaitlistController::index'], null, null, null, false, false, null]],
        '/admin/approved' => [[['_route' => 'admin_reservations_approved', '_controller' => 'App\\Controller\\WaitlistController::approvedReservations'], null, null, null, false, false, null]],
        '/admin/rejected' => [[['_route' => 'admin_reservations_rejected', '_controller' => 'App\\Controller\\WaitlistController::rejectedReservations'], null, null, null, false, false, null]],
        '/admin/calendar' => [[['_route' => 'admin_calendar', '_controller' => 'App\\Controller\\WaitlistController::calendar'], null, null, null, false, false, null]],
        '/admin/statistics' => [[['_route' => 'admin_statistics', '_controller' => 'App\\Controller\\WaitlistController::statistics'], null, null, null, false, false, null]],
        '/admin/api/admin/metrics' => [[['_route' => 'app_waitlist_getmetrics', '_controller' => 'App\\Controller\\WaitlistController::getMetrics'], null, ['GET' => 0], null, false, false, null]],
        '/eventback' => [[['_route' => 'app_eventback_index', '_controller' => 'App\\Controller\\eventControllerback::index'], null, ['GET' => 0], null, true, false, null]],
        '/eventback/new' => [[['_route' => 'app_eventback_new', '_controller' => 'App\\Controller\\eventControllerback::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/eventback/check-profanity' => [[['_route' => 'app_eventback_check_profanity', '_controller' => 'App\\Controller\\eventControllerback::checkProfanityApi'], null, ['POST' => 0], null, false, false, null]],
        '/eventback/search' => [[['_route' => 'app_eventback_search', '_controller' => 'App\\Controller\\eventControllerback::search'], null, ['GET' => 0], null, false, false, null]],
        '/eventback/statistics' => [[['_route' => 'app_eventback_statistics', '_controller' => 'App\\Controller\\eventControllerback::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/eventback/events-json' => [[['_route' => 'app_eventback_events_json', '_controller' => 'App\\Controller\\eventControllerback::getEventsJson'], null, ['GET' => 0], null, false, false, null]],
        '/eventback/calendar' => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\eventControllerback::calendar'], null, ['GET' => 0], null, false, false, null]],
        '/event/registrationback/newbackregistration' => [[['_route' => 'app_eventback_registration_new_no_event', '_controller' => 'App\\Controller\\registrationback::newWithoutEvent'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/user/profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/user/settings' => [[['_route' => 'app_user_settings', '_controller' => 'App\\Controller\\UserController::settings'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/admin/users/create' => [[['_route' => 'app_admin_user_create', '_controller' => 'App\\Controller\\AdminController::createUser'], null, null, null, false, false, null]],
        '/claims' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/claims/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, null, null, false, false, null]],
        '/admin/claims' => [[['_route' => 'app_reclamation_dashboard', '_controller' => 'App\\Controller\\ReclamationController::dashboard'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_front_home', '_controller' => 'App\\Controller\\Front\\FrontController::index'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_front_services', '_controller' => 'App\\Controller\\Front\\FrontController::services'], null, null, null, false, false, null]],
        '/portfolio' => [[['_route' => 'app_front_portfolio', '_controller' => 'App\\Controller\\Front\\FrontController::portfolio'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_front_contact', '_controller' => 'App\\Controller\\Front\\FrontController::contact'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|driver/([^/]++)(?'
                            .'|(*:38)'
                            .'|/(?'
                                .'|edit(*:53)'
                                .'|delete(*:66)'
                            .')'
                        .')'
                        .'|transport/([^/]++)(?'
                            .'|(*:96)'
                            .'|/(?'
                                .'|edit(*:111)'
                                .'|delete(*:125)'
                            .')'
                        .')'
                        .'|accept/([^/]++)(*:150)'
                        .'|reject/([^/]++)(*:173)'
                        .'|calendar/([^/]++)(*:198)'
                        .'|users/(?'
                            .'|(\\d+)/edit(*:225)'
                            .'|(\\d+)/ban(*:242)'
                            .'|(\\d+)/unban(*:261)'
                            .'|(\\d+)/change\\-role(*:287)'
                        .')'
                    .')'
                    .'|gent(?'
                        .'|/(?'
                            .'|edit/([^/]++)(*:321)'
                            .'|delete/([^/]++)(*:344)'
                        .')'
                        .'|s/([^/]++)/rate(*:368)'
                    .')'
                .')'
                .'|/destinations/(?'
                    .'|([^/]++)(?'
                        .'|(*:406)'
                        .'|/edit(*:419)'
                        .'|(*:427)'
                    .')'
                    .'|show/([^/]++)(*:449)'
                .')'
                .'|/favorite/([^/]++)(?'
                    .'|(*:479)'
                    .'|/edit(*:492)'
                    .'|(*:500)'
                .')'
                .'|/parkingspot/([^/]++)(?'
                    .'|(*:533)'
                    .'|/edit(*:546)'
                    .'|(*:554)'
                .')'
                .'|/event(?'
                    .'|/(?'
                        .'|(\\d+)(*:581)'
                        .'|([^/]++)(?'
                            .'|/edit(*:605)'
                            .'|(*:613)'
                        .')'
                        .'|search(*:628)'
                        .'|coordinates(*:647)'
                        .'|registration(?'
                            .'|(*:670)'
                            .'|/(?'
                                .'|new/(\\d+)(*:691)'
                                .'|admin/new/(\\d+)(*:714)'
                                .'|([^/]++)/pdf(*:734)'
                                .'|(\\d+)(*:747)'
                                .'|([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:774)'
                                        .'|qrcode(*:788)'
                                    .')'
                                    .'|(*:797)'
                                .')'
                            .')'
                            .'|back/(?'
                                .'|newback/(\\d+)(*:828)'
                                .'|back/([^/]++)(*:849)'
                                .'|([^/]++)/editback(*:874)'
                                .'|back/([^/]++)(*:895)'
                            .')'
                        .')'
                    .')'
                    .'|coordinates/([^/]++)(*:926)'
                    .'|back/(?'
                        .'|(\\d+)(*:947)'
                        .'|([^/]++)/(?'
                            .'|edit(*:971)'
                            .'|delete(*:985)'
                        .')'
                    .')'
                .')'
                .'|/office/(?'
                    .'|edit/([^/]++)(*:1020)'
                    .'|delete/([^/]++)(*:1044)'
                .')'
                .'|/rese(?'
                    .'|rvation/(?'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1092)'
                                .'|cancel(*:1107)'
                            .')'
                            .'|(*:1117)'
                        .')'
                        .'|admin/(?'
                            .'|reservations/([^/]++)/(?'
                                .'|approve(*:1168)'
                                .'|reject(*:1183)'
                            .')'
                            .'|destinations/([^/]++)/(?'
                                .'|edit(*:1222)'
                                .'|delete(*:1237)'
                            .')'
                        .')'
                    .')'
                    .'|t\\-password/([^/]++)(*:1269)'
                .')'
                .'|/t(?'
                    .'|icket/([^/]++)(?'
                        .'|(*:1301)'
                        .'|/edit(*:1315)'
                        .'|(*:1324)'
                    .')'
                    .'|ransport/(?'
                        .'|edit(?:/([^/]++))?(*:1364)'
                        .'|delete/([^/]++)(*:1388)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1427)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1467)'
                    .'|wdt/([^/]++)(*:1488)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:1531)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1569)'
                                .'|router(*:1584)'
                                .'|exception(?'
                                    .'|(*:1605)'
                                    .'|\\.css(*:1619)'
                                .')'
                            .')'
                            .'|(*:1630)'
                        .')'
                    .')'
                .')'
                .'|/user/(\\d+)(*:1653)'
                .'|/claims/(?'
                    .'|(\\d+)(*:1678)'
                    .'|(\\d+)/edit(*:1697)'
                    .'|(\\d+)/delete(*:1718)'
                    .'|(\\d+)/resolve(*:1740)'
                    .'|(\\d+)/reject(*:1761)'
                    .'|user/(\\d+)(*:1780)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'admin_driver_show', '_controller' => 'App\\Controller\\AdminDriverController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        53 => [[['_route' => 'admin_driver_edit', '_controller' => 'App\\Controller\\AdminDriverController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        66 => [[['_route' => 'admin_driver_delete', '_controller' => 'App\\Controller\\AdminDriverController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        96 => [[['_route' => 'admin_transport_show', '_controller' => 'App\\Controller\\AdminTransportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        111 => [[['_route' => 'admin_transport_edit', '_controller' => 'App\\Controller\\AdminTransportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        125 => [[['_route' => 'admin_transport_delete', '_controller' => 'App\\Controller\\AdminTransportController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        150 => [[['_route' => 'admin_waitlist_accept', '_controller' => 'App\\Controller\\WaitlistController::accept'], ['id'], ['POST' => 0], null, false, true, null]],
        173 => [[['_route' => 'admin_waitlist_reject', '_controller' => 'App\\Controller\\WaitlistController::reject'], ['id'], ['POST' => 0], null, false, true, null]],
        198 => [[['_route' => 'admin_reservations_by_date', '_controller' => 'App\\Controller\\WaitlistController::reservationsByDate'], ['date'], null, null, false, true, null]],
        225 => [[['_route' => 'app_admin_user_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, false, null]],
        242 => [[['_route' => 'app_admin_user_ban', '_controller' => 'App\\Controller\\AdminController::banUser'], ['id'], null, null, false, false, null]],
        261 => [[['_route' => 'app_admin_user_unban', '_controller' => 'App\\Controller\\AdminController::unbanUser'], ['id'], null, null, false, false, null]],
        287 => [[['_route' => 'app_admin_user_change_role', '_controller' => 'App\\Controller\\AdminController::changeRole'], ['id'], null, null, false, false, null]],
        321 => [[['_route' => 'agent_edit', '_controller' => 'App\\Controller\\AgentController::edit'], ['id'], null, null, false, true, null]],
        344 => [[['_route' => 'agent_delete', '_controller' => 'App\\Controller\\AgentController::delete'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'rate_agent', '_controller' => 'App\\Controller\\AgentController::rateAgent'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [[['_route' => 'app_destination_back', '_controller' => 'App\\Controller\\Destination\\DestinationController::showS'], ['idDestination'], ['GET' => 0], null, false, true, null]],
        419 => [[['_route' => 'app_destination_edit', '_controller' => 'App\\Controller\\Destination\\DestinationController::edit'], ['idDestination'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        427 => [[['_route' => 'app_destination_delete', '_controller' => 'App\\Controller\\Destination\\DestinationController::delete'], ['idDestination'], ['POST' => 0], null, false, true, null]],
        449 => [[['_route' => 'app_destination_show', '_controller' => 'App\\Controller\\Destination\\DestinationController::show'], ['idDestination'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'app_favorite_show', '_controller' => 'App\\Controller\\Destination\\FavoriteController::show'], ['id_favorite'], ['GET' => 0], null, false, true, null]],
        492 => [[['_route' => 'app_favorite_edit', '_controller' => 'App\\Controller\\Destination\\FavoriteController::edit'], ['id_favorite'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        500 => [[['_route' => 'app_favorite_delete', '_controller' => 'App\\Controller\\Destination\\FavoriteController::delete'], ['id_favorite'], ['POST' => 0], null, false, true, null]],
        533 => [[['_route' => 'app_parkingspot_show', '_controller' => 'App\\Controller\\Destination\\ParkingspotController::show'], ['id_parking'], ['GET' => 0], null, false, true, null]],
        546 => [[['_route' => 'app_parkingspot_edit', '_controller' => 'App\\Controller\\Destination\\ParkingspotController::edit'], ['id_parking'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        554 => [[['_route' => 'app_parkingspot_delete', '_controller' => 'App\\Controller\\Destination\\ParkingspotController::delete'], ['id_parking'], ['POST' => 0], null, false, true, null]],
        581 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        605 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        613 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        628 => [[['_route' => 'app_event_search', '_controller' => 'App\\Controller\\EventController::search'], [], ['GET' => 0], null, false, false, null]],
        647 => [[['_route' => 'app_event_coordinates_page', '_controller' => 'App\\Controller\\EventController::coordinatesPage'], [], ['GET' => 0], null, false, false, null]],
        670 => [[['_route' => 'app_event_registration_index', '_controller' => 'App\\Controller\\EventRegistrationController::index'], [], ['GET' => 0], null, true, false, null]],
        691 => [[['_route' => 'app_event_registration_new', '_controller' => 'App\\Controller\\EventRegistrationController::new'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        714 => [[['_route' => 'app_event_registration_new_admin', '_controller' => 'App\\Controller\\EventRegistrationController::newAdmin'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        734 => [[['_route' => 'app_event_registration_pdf', '_controller' => 'App\\Controller\\EventRegistrationController::generatePdf'], ['id'], ['GET' => 0], null, false, false, null]],
        747 => [[['_route' => 'app_event_registration_show', '_controller' => 'App\\Controller\\EventRegistrationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        774 => [[['_route' => 'app_event_registration_edit', '_controller' => 'App\\Controller\\EventRegistrationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        788 => [[['_route' => 'app_event_registration_qrcode', '_controller' => 'App\\Controller\\EventRegistrationController::qrCode'], ['id'], ['GET' => 0], null, false, false, null]],
        797 => [[['_route' => 'app_event_registration_delete', '_controller' => 'App\\Controller\\EventRegistrationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        828 => [[['_route' => 'app_eventback_registration_new', '_controller' => 'App\\Controller\\registrationback::new'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        849 => [[['_route' => 'app_eventback_registration_show', '_controller' => 'App\\Controller\\registrationback::show'], ['id'], ['GET' => 0], null, false, true, null]],
        874 => [[['_route' => 'app_eventback_registration_edit', '_controller' => 'App\\Controller\\registrationback::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        895 => [[['_route' => 'app_eventback_registration_delete', '_controller' => 'App\\Controller\\registrationback::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        926 => [[['_route' => 'app_event_coordinates', '_controller' => 'App\\Controller\\EventController::getCoordinates'], ['city'], ['GET' => 0], null, false, true, null]],
        947 => [[['_route' => 'app_eventback_show', '_controller' => 'App\\Controller\\eventControllerback::show'], ['id'], ['GET' => 0], null, false, true, null]],
        971 => [[['_route' => 'app_eventback_edit', '_controller' => 'App\\Controller\\eventControllerback::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        985 => [[['_route' => 'app_eventback_delete', '_controller' => 'App\\Controller\\eventControllerback::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1020 => [[['_route' => 'office_edit_admin', '_controller' => 'App\\Controller\\OfficeController::edit'], ['id'], null, null, false, true, null]],
        1044 => [[['_route' => 'office_delete_admin', '_controller' => 'App\\Controller\\OfficeController::delete'], ['id'], null, null, false, true, null]],
        1092 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1107 => [[['_route' => 'app_reservation_cancel', '_controller' => 'App\\Controller\\ReservationController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1117 => [
            [['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1168 => [[['_route' => 'app_reservation_admin_approve', '_controller' => 'App\\Controller\\ReservationController::adminApprove'], ['id'], ['POST' => 0], null, false, false, null]],
        1183 => [[['_route' => 'app_reservation_admin_reject', '_controller' => 'App\\Controller\\ReservationController::adminReject'], ['id'], ['POST' => 0], null, false, false, null]],
        1222 => [[['_route' => 'app_reservation_admin_destination_edit', '_controller' => 'App\\Controller\\ReservationController::adminEditDestination'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1237 => [[['_route' => 'app_reservation_admin_destination_delete', '_controller' => 'App\\Controller\\ReservationController::adminDeleteDestination'], ['id'], ['POST' => 0], null, false, false, null]],
        1269 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        1301 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1315 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1324 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1364 => [[['_route' => 'transport_edit', 'id' => null, '_controller' => 'App\\Controller\\TransportController::manageTransport'], ['id'], null, null, false, true, null]],
        1388 => [[['_route' => 'transport_delete', '_controller' => 'App\\Controller\\TransportController::deleteTransport'], ['id'], null, null, false, true, null]],
        1427 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1467 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1488 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1531 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        1569 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1584 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1605 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1619 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1630 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1653 => [[['_route' => 'app_user_view', '_controller' => 'App\\Controller\\UserController::view'], ['id'], null, null, false, true, null]],
        1678 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], null, null, false, true, null]],
        1697 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], null, null, false, false, null]],
        1718 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1740 => [[['_route' => 'app_reclamation_resolve', '_controller' => 'App\\Controller\\ReclamationController::resolve'], ['id'], null, null, false, false, null]],
        1761 => [[['_route' => 'app_reclamation_reject', '_controller' => 'App\\Controller\\ReclamationController::reject'], ['id'], null, null, false, false, null]],
        1780 => [
            [['_route' => 'app_reclamation_user', '_controller' => 'App\\Controller\\ReclamationController::userClaims'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
