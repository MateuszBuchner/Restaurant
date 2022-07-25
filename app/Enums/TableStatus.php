<?php

namespace App\Enums;

enum TableStatus: string
{
    case Oczekiwanie = 'oczekiwanie';
    case Dostepne = 'dostepne';
    case Niedostepne = 'niedostępne';
}
