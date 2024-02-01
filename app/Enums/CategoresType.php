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

    public function typeIndex(): array {
        return match ($this) {
            self::RAP => [
                'title'=> 'Rap',
                'cover'=>'images/grafics/4.jpg',
            ],
            self::KIZOMBA => [
                'title'=> 'Kizomba',
                'cover'=>'images/grafics/2.jpg'
            ],
            self::KUDURO =>[
                'title'=> 'Kuduro',
                'cover'=>'images/grafics/6.jpg'
            ],
            self::SEMBA => [
                'title'=> 'Semba',
                'cover'=>'images/grafics/1.jpg'
            ],
            self::AFROBEAT => [
                'title'=> 'Afrobeat',
                'cover'=>'images/grafics/3.jpg'
            ],
            self::AFROHOUSE => [
                'title'=> 'Afrohouse',
                'cover'=>'images/grafics/5.jpg'
            ],
        };
    }
}
