<?php

namespace App;

/**
 * Plik konfiguracyjny aplikacji
 * 
 * PHP v. 7+
 */
class Config
{
    /**
     * Host bazy danych
     */
    const DB_HOST = 'localhost';

    /**
     * Nazwa bazy
     * 
     * @var string
     */
    const DB_NAME = 'michaels_personal_budget';

    /**
     * Admin bazy
     * @var string
     */
    const DB_USER = 'michaels_admin';

    const DB_PASSWORD = 'ldb~ptkPlkmn';

    /**
     * Pokaż lub ukryj komunikaty o błędach na ekranie
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * Sekretny klucz do hashowania
     * @var string
     */
    const SECRET_KEY = 'cWIBlFLUOj2vAT0aL16yLk2RIwaJNt16';
}
