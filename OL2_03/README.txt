Instruktioner:

1) Ni ska skapa ett grundläggande inloggningsformulär baserat på tre stycken användare (se nedan). Tänk på att använda metoden POST.
2) Formuläret ska ha ett fält för användarnamn och ett för lösenord.
3) Ni ska börja med att kontrollera följande: att dom skrivit in mer än två tecken (i båda fälten) och att användarnamnet inte har några mellanslag.
  3a) Skulle någon av dessa inte stämma ger ni användaren ett meddelande: "Antal tecken måste vara mer än 2" eller "Användarnamnet får inte innehålla ett mellanslag".
4) När kontrollerna är godkända går ni vidare och kontrollerar att användarnamn och lösenord stämmer överrens.
  4a) Om dessa inte stämmer (oavsett vilken av dom) ger ni användaren samma meddelande: "felaktig kombination av användarnamn och lösenord".
5) Om allting är OK så skriver ni bara ut: "Välkommen till sidan X", där X är deras användarnamn.

Tips: när ni jämför användarnamn - gör om både användarens input och det som finns i $users till små bokstäver.

Användare:

$users = [
  ["username" => "janedoe", "password" => "janethemane"],
  ["username" => "doge", "password" => "ichliebeshiba"],
  ["username" => "erik", "password" => "fyratimmaromdagen"]
];