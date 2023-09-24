<?php

/**
 * firefly.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    '404_header'              => 'Firefly III kan ikkje finna denne sida.',
    '404_page_does_not_exist' => 'Sida du ba om eksisterar ikkje. Sjekk at du ikkje har skrevet feil URL. Kanskje du har ein skriveleif?',
    '404_send_error'          => 'Om du vart omdirigert til denne sida automatisk, da må me beklage. Det er nevnt i denne feilen i loggfilene og eg vil vera takknemlig om du vil sende den til meg.',
    '404_github_link'         => 'Om du er sikker på at denne sida skal eksistere, åpne ein sak på <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'whoops'                  => 'Oisann',
    'fatal_error'             => 'Det oppstod ein alvorlig feil. Ver venleg å sjekk loggfilene i "lagring/logg" eller bruk "docker logger -f [container]" for å sjå kva som skjer.',
    'maintenance_mode'        => 'Firefly III er i vedlikeholdsmodus.',
    'be_right_back'           => 'Er straks tilbake!',
    'check_back'              => 'Firefly III er stogga for nødvendig vedlikehald. Ver venleg å kom tilbake om ei stund.',
    'error_occurred'          => 'Oisann! ein feil har oppstått.',
    'db_error_occurred'       => 'Oisann! Ein databasefeil har oppstått.',
    'error_not_recoverable'   => 'Dessverre vart ikkje denne feilen fikset :(. Firefly III ødelagt. Feilen er:',
    'error'                   => 'Feil',
    'error_location'          => 'Denne feilen oppstod i filen <span style="font-family: monospace;">:file</span> på linje :line med kode :code.',
    'stacktrace'              => 'Stack Trace',
    'more_info'               => 'Mer informasjon',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'collect_info'        => 'Samle inn meir informasjon i <code>storage/logs</code> mappa kor du finn loggfiler. Om du køyrer Docker, bruk <code>docker logger -f [container]</code>.',
    'collect_info_more'   => 'Du kan lesa meir om innsamling av feilinformasjon i <a href="https://docs.firefly-iii.org/faq/other#how-do-i-enable-debug-mode">FAQ</a>.',
    'github_help'         => 'Få hjelp på GitHub',
    'github_instructions' => 'Du er meir enn velkomen til å åpne eit nytt problem <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">på GitHub</a></strong>.',
    'use_search'          => 'Bruk søket!',
    'include_info'        => 'Inkluder informasjonen <a href=":link">frå denne feilsøkingssida</a>.',
    'tell_more'           => 'Fortel oss meir enn det står Oisann!"',
    'include_logs'        => 'Inkluder feillogger (sjå ovenfor).',
    'what_did_you_do'     => 'Fortell oss kva du gjorde.',
    'offline_header'      => 'Du er sannsynligvis fråkopla',
    'offline_unreachable' => 'Firefly III er ikkje tilgjengeleg. Eininga di er fråkopla eller serveren fungerar ikkje.',
    'offline_github'      => 'Om du er sikker på at både enheten og serveren er online, åpne ein sak på <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',

];
