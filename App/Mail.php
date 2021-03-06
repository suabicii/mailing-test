<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$dotenv = \Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

/**
 * Wysyłanie maili do aktywacji kont lub resetowania haseł
 * 
 * PHP v. 7.4
 */
class Mail
{
    public static function send($to, $subject, $text, $html)
    {
        $mail = new PHPMailer(true); // Tworzenie instancji i przekazywanie „true” włącza wyjątki

        try {
            //Ustawienia serwera
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();                                            // Wyślij używając SMTP
            $mail->Host       = '173.194.222.108';                    // Ustaw serwer SMTP do przesyłania
            $mail->SMTPAuth   = true;                                   // Włącz uwierzytelnianie SMTP
            $mail->Username   = 'personal.budget.slabikovsky@gmail.com';                     // nazwa użytkownika SMTP
            $mail->Password   = getenv('SMTP_PASSWORD');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Włącz szyfrowanie SMTP; 
            $mail->Port       = 587;                                    // Port TCP do połączenia

            //Adresat
            $mail->setFrom('no-reply@michael.slabikovsky.com', 'Michael Slabikovsky');
            $mail->addAddress($to);     // Dodaj adresata

            // Treść wiadomości
            $mail->isHTML(true);                                  // Ustaw format na HTML
            $mail->Subject = $subject;
            $mail->Body    = $html;
            $mail->AltBody = $text; // Wersja tekstowa (bez HTML-a)

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
