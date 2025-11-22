<?php

class Controller {
    function beforeroute($f3) {
        $path = $f3->get('PATH');
        $public = ['/login', '/do-login'];

        if ($f3->exists('SESSION.user_id')) {
            $today = date('Y-m-d');
            $login_day = $f3->get('SESSION.login_date');

            if ($login_day !== $today) {
                $f3->clear('SESSION');
                $f3->reroute('/login');
                return;
            }
        }
        if (!in_array($path, $public) && !$f3->get('SESSION.user_id')) {
            $f3->reroute('/login');
            return;
        }

        if ($f3->get('SESSION.user_id') && $path === '/login') {
            $f3->reroute('/dashboard');
            return;
        }
    }
}
