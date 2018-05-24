<?php
/**
Tarkime turime duomenų bazėje lentelę maistoprekes su laukais id, gamintojas, pavadinimas, kaina, galiojimo data. Parašykite SQL užklausą  kuri pateiktų visus duomenis apie 3 šviežiausius produktus.
 */

// select id, gamintojas, pavadinimas, kaina, galiojimo data from maistoprekes order by galiojimo data desc limit 3
// arba select * from maistoprekes order by galiojimo data desc limit 3