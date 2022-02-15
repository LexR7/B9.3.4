<html>
    <head>
        <title>Пример</title>
    </head>
    <body>

<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;                   

$transport = Transport::fromDsn('smtp://localhost:25');
$mailer = new Mailer($transport);

$email = (new Email())
    ->from('hello@example.com')
    ->to('r_alexey@mail.ru')
    ->subject('Time for Symfony Mailer!')
    ->text('Sending emails is fun again!')
    ->html('<p>See Twig integration for better HTML integration!</p>');

try {
  $mailer->send($email);
  echo "Сообщение отправлено!";
} catch (Exception $e) {
  echo "Ошибка: ". $e->getMessage();
}
?>

    </body>
</html>
