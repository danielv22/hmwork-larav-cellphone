<?php
namespace App\Enums;

enum Storage: string {
    case s4 = '4';
    case s8 = '8';
    case s16 = '16';
    case s32 = '32';
    case s64 = '64';
    case s128 = '128';
    case s256 = '256';
    case s512 = '512';
    case s1024 = '1024';
    case s2048 = '2048';
}
