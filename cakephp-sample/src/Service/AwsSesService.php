<?php
declare(strict_types=1);

namespace App\Service;

class AwsSesService implements MailServiceInterface
{
    public function send()
    {
        echo 'send message by AWS SES.';
    }
}
