Instruktioner:

1) Ni ska skapa en sida som baserat på adressen (URL) ska känna av vilken (av tre) hundar som ska visas med sitt innehåll.
2) Den GET-parameter (det efter ?-tecknen i URL:en) ni ska kontrollera är "dog".
3) Om denna inte finns (dvs. om nyckeln "dog" inte finns i $_GET) ska ni bara skriva "Välkommen till startsidan".
4) Om GET-parametern finns och den är en av följande värden: "collie", "tax", eller "shiba" så ska ni inkludera innehållet från en PHP-fil med respektive namn (kolla exemplet nedan).
5) Om GET-parametern finns och inte har rätt värde skriver ni ut: "Hunden finns inte".
6) Nedan finns också en lista med länkar till respektive hund så ni kan klistra in lite innehåll.

Exempel:

I "index.php":

<!DOCTYPE html>
<html>
  <head>...</head>
  <body>
    <?php
    // Kontrollera om "dog" finns i $_GET:
    //   - Om den inte finns: skriv ut "Välkommen till startsidan"
    //   - Om den finns _och_ har ett av värdena "collie", "tax", "shiba":
    //       - Inkludera "dogs/collie.php", "dogs/tax.php" eller "dogs/shiba.php"
    //   - Om den finns _och_ inte har rätt värde: skriv ut "Hunden finns inte"
    ?>
  </body>
</html>

Länkar: 

- https://www.skk.se/sv/hundraser/collie-kortharig/
- https://www.skk.se/sv/hundraser/tax/
- https://www.skk.se/sv/hundraser/shiba/