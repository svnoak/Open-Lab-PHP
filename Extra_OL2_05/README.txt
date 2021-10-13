Instruktioner:

1) Ni ska skapa Sveriges minsta sökmotor för hundar.
  1a) Välj ut 10 st hundar från https://www.skk.se/sv/hundraser/ och spara undan hundrasen samt paragrafen "historik" från respektive hundras.
2) Ni ska ha en sida (index.php) som innehåller ett formulär med ett sökfält (textfält) och en knapp ("Sök").
  2a) Det ska vara metoden GET och den ska skicka oss till "index.php".
  2b) Name-attributet för vårt sökfält ska vara "dog".
3) Ni ska på er sida kontrollera om GET-parametern "dog" finns.
  3a) Om den finns ska ni kontrollera om hundnamnet dom fyllde i finns i vår array av hundar. Om den fanns hämtar vi ut hundens information (det vi tidigare sparade undan) och skriver ut det till användaren.
  3b) Om hunden inte finns ger ni användaren något relevant meddelande.
  3c) Tips: när användaren gör en sökning, gör om deras sökord till små bokstäver och när ni jämför mot hundarna i arrayen gör ni även om dom till små bokstäver innan ni jämför - för att minska risken för felskrivningar.
4) När användaren gör en sökning ska formuläret vara kvar ovanför resultatet.
5) Utöver "index.php" ska ni även ha filerna "configuration.php" och "functions.php".
  5a) configuration.php ska innehålla en array över era hundar (se nedan).
  5b) functions.php ska innehåll en funktion "generateDogHTML" som tar emot en hund och ger tillbaka (return) HTML-koden för en hund (rubrik + paragraf). Denna funktion ska sedan anropas när vi skriver ut en hund till besökaren.

Glöm inte inkludera configuration.php och functions.php i index.php!

Configuration.php:

$dogs = [
  ["name" => "Boxer", "history" => "Boxern anses närmast härstamma från den lilla..."],
  och så vidare...
];
