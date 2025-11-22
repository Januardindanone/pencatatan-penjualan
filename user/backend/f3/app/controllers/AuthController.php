<?php

class AuthController extends Controller{

    function loginPage($f3) {
        $f3->set('error', '');
        echo \Template::instance()->render('login.html');
    }

    function login($f3) {
        $db = $f3->get('DB');

        $username = $f3->get('POST.username');
        $password = $f3->get('POST.password');

        $user = new User($db);

        if (!$user->getByUsername($username)) {
            $f3->set('error', 'User tidak ditemukan');
            echo \Template::instance()->render('login.html');
            return;
        }

        if (!password_verify($password, $user->password)) {
            $f3->set('error', 'Password salah');
            echo \Template::instance()->render('login.html');
            return;
        }

        // Set session
        $f3->set('SESSION.user_id', $user->id);
        $f3->set('SESSION.login_date', date('Y-m-d'));

        $f3->reroute('/dashboard');
    }

    function dashboard($f3) {
        echo \Template::instance()->render('dashboard.html');
    }

    function logout($f3) {
        $f3->clear('SESSION');
        $f3->reroute('/login');
    }
}
