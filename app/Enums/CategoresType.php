<?php

namespace App\Enums;

enum CategoresType: string {
    case RAP = "rap";
    case KIZOMBA = 'kizomba';
    case KUDURO = 'kuduro';
    case SEMBA = 'semba';
    case AFROBEAT = 'afrobeat';
    case AFROHOUSE = 'afrohouse';

    public function covers(): string {
        return match ($this) {
            self::RAP => 'bi-cone-striped',
            self::KIZOMBA => 'bi-cassette',
            self::KUDURO => 'bi-vinyl',
            self::SEMBA => 'bi-hourglass-split',
            self::AFROBEAT => 'bi-music-player',
            self::AFROHOUSE => 'bi-dice-5',
        };
    }
}
