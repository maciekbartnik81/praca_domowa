# Prosta strona PHP + MySQL + phpMyAdmin

Projekt do uruchomienia w GitHub Codespaces. Strona jest napisana w zwykłym HTML i PHP, bez CSS.

## Uruchomienie w Codespaces

1. Wgraj wszystkie pliki projektu do głównego folderu repozytorium.
2. Otwórz Terminal w Codespaces.
3. Uruchom:

   ```bash
   docker compose up -d --build
   ```

4. Otwórz zakładkę **Ports**.
   - Port **8080** – strona internetowa.
   - Port **8081** – phpMyAdmin.

## Logowanie do phpMyAdmin

- Serwer: `db`
- Użytkownik: `root`
- Hasło: `root123`

Baza danych `szkola` tworzy się automatycznie. Tabela `osoby` tworzy się przy pierwszym wejściu na stronę.

## Co robi przycisk?

Po kliknięciu przycisku PHP dodaje trzy przykładowe osoby do tabeli `osoby`. Poniżej przycisku strona wyświetla rekordy pobrane z bazy.

## Ważne

Przed oddaniem projektu zmień tekst `WPISZ SWOJE IMIĘ I NAZWISKO` w pliku `index.php`. Hasła w tym projekcie są testowe, przeznaczone wyłącznie do lokalnego ćwiczenia.
