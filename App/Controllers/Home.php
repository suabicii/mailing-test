<?php

namespace App\Controllers;

use Core\View;
use App\Mail;

class Home extends \Core\Controller
{
    public function indexAction()
    {
        View::renderTemplate('Home/index.html');
    }

    public function sendMailAction()
    {
        $html = '<h1>Test mailingu</h1>';
        $text = 'Test mailingu';
        $subject = 'Testowanie mailingu';

        Mail::send('michal.slabik3@wp.pl', $subject, $text, $html);
    }
}
