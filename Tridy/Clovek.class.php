<?php

declare(strict_types=1);

namespace Tridy;

class Clovek
{
    private String $rocnik;
    private String $trida;
    private String $password;
    private String $login;
    private String $rc;
    private String $pohlavi;
    private String $datum;
    private String $jmeno;
    private String $prijmeni;
    private String $mesto;

    public function __construct(String $rocnik, String $trida, String $password, String $login, String $rc, String $pohlavi, String $datum, String $jmeno, String $prijmeni, String $mesto)
    {
        $this->rocnik = $rocnik;
        $this->trida = $trida;
        $this->password = $password;
        $this->login = $login;
        $this->rc = $rc;
        $this->pohlavi = $pohlavi;
        $this->datum = $datum;
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
        $this->mesto = $mesto;
    }

    public function overeni(): bool {
        return password_verify($this->password, $this->rc);
    }

}
