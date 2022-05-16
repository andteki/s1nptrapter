# Fejlesztői dokumentáció

## Cél

A 0316 feladat megoldása PHP-ban, adatok
tárolásával adatbázisban.

## Szoftver

* Visual Studio Code
* XAMPP
  * MariaDB
  * Apache
  * PhpMyAdmin

## Adatszerkezetek

A home.html egy űrlapot jelenít meg,
amit elküld a result.php számára
feldolgozásra.

A reult.php a kapott értékek alapján
kiszámolja a területet, majd
átadja az adatbázis tároló
függvénynek.

A list.html megjeleníti az összes 
beírt oldalt és a számított területet.

## Tesztek

Atomatizált tesztet találunk a test 
könyvtárban. Futtatáshoz be kell 
lépni a test könyvtárba:

```bash
cd test
php testData.php
php testMariadb.php
```

Hiba nélkül a tesztek nem írnak ki semmit.

## Ismert hibák

A bemenő adatok nincsennek tesztelve.

## Fejlesztő

* Nagy János, 2022-05-16, Szoft I N

