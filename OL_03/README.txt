Instruktioner:

Beskrivning: Ni ska försöka efterlikna det som ni ser i exempelvideon (ert
utseende på sidan behöver inte stämma överrens, däremot behöver ni ha någon form
av CSS så det ser någorlunda OK ut).

Startsidan: denna visar antingen ett inloggningsformulär eller ett meddelande
till användaren.

Filmsidan: listar alla filmer från vår array ($movies som finns i config.php),
denna sidan kräver inte inloggning.

Profilsidan: listar användarens användarnamn och email, denna sida kräver
inloggning, annars skickas man tillbaka till startsidan (index.php).

Alla sidor inkluderar både överdelen av sin HTML (doctype, <html>, <head>, osv.)
och underdelen (<footer>, </html>, osv.), notera "Inloggad som ..." i videon i
sidfoten. Dessa filer finner ni i mappen sections.

I mappen "admin" hittar ni de filer som ska kontrollera in- och utloggning. När
användaren loggar in ska ni kontrollera att deras email innehåller "@" och att
deras lösenord är mer än 3 tecken. Dessa filer hanterar bara in- och utloggning
för att sedan skicka vidare användaren (det är alltså ingen HTML i dessa).

I mappen "images" hittar ni respektive bild för varje film. Tänk på att filmerna
har filnamnen i sin array.

Lycka till!
