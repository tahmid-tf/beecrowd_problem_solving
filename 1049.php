<?php

$word_1 = trim(fgets(STDIN));
$word_2 = trim(fgets(STDIN));
$word_3 = trim(fgets(STDIN));

if ($word_1 == 'vertebrado') {
    if ($word_2 == 'ave') {
        if ($word_3 == 'carnivoro') {
            echo "aguia\n";
        } else {
            echo "pomba\n";
        }
    } else {
        if ($word_3 == 'onivoro') {
            echo "homem\n";
        } else {
            echo "vaca\n";
        }
    }
} else {
    if ($word_2 == 'inseto') {
        if ($word_3 == 'hematofago') {
            echo "pulga\n";
        } else {
            echo "lagarta\n";
        }
    } else {
        if ($word_3 == 'hematofago') {
            echo "sanguessuga\n";
        } else {
            echo "minhoca\n";
        }
    }
}
