# Teilprüfung 3 – PHP Online-Tagebuch mit Dateimanagement und einfacher Authentifizierung

Dies ist eine Prüfungsaufgabe aus meiner Weiterbildung zur Webentwicklerin.
Ziel war es, ein mehrteiliges PHP-Projekt zu erstellen, das Benutzern erlaubt, Tagebucheinträge sicher mit Formular, Authentifizierung und dateibasiertem Speichern zu verwalten. Dabei wurden Funktionen, Bedingungslogik, Dateioperationen sowie Verzeichnis-Checks eingesetzt.


## Aufgabenstellung

Entwickle ein kleines PHP-Projekt für ein Online-Tagebuch, das es Benutzern ermöglicht, ihre Gedanken und Erlebnisse in Textform festzuhalten. Das Tagebuch soll folgende Funktionalitäten bieten:

- **a)** Strukturiere den Quelltext in mehrere Dateien: header.php für den Kopfbereich, footer.php für den Fußbereich, index.php für die Startseite, die ein Formular zum Schreiben eines neuen Tagebucheintrags enthält, und save_entry.php zum Speichern des Eintrags in einer Textdatei. Verwende Variablen, um den Seitentitel dynamisch in header.php einzufügen.
- **b)** Implementiere in index.php ein Formular mit einem Textfeld für den Tagebucheintrag und einem "Speichern"-Button. Stelle sicher, dass das Formular Daten an save_entry.php sendet.
- **c)** In save_entry.php, prüfe, ob der gesendete Text nicht leer ist. Wenn der Text nicht leer ist, speichere den Eintrag in einer Textdatei im Verzeichnis entries. Benenne die Datei basierend auf dem aktuellen Datum und der Uhrzeit, um sicherzustellen, dass jeder Eintrag eine eindeutige Datei erhält. Verwende Bedingungen (if-else) und Dateioperationen in PHP.
- **d)** Implementiere eine Funktion in save_entry.php, die prüft, ob das Verzeichnis entries existiert. Wenn nicht, soll es erstellt werden. Dies beinhaltet den Umgang mit Dateizugriffsrechten.
- **e)** Füge eine einfache Authentifizierung hinzu, bevor Einträge gespeichert werden können. Nutze eine statische Benutzername-Passwort-Kombination. Verwende eine einfache if-else-Bedingung, um zu prüfen, ob die eingegebenen Anmeldedaten korrekt sind, bevor der Eintrag gespeichert wird.
- **f)** Nachdem der Eintrag gespeichert wurde, soll save_entry.php eine Bestätigung anzeigen und einen Link zurück zur Startseite (index.php) bieten. 



## Dateien

```
├── entries
│   ├── 2025-03-14_14-05-57.txt
│   └── 2025-03-14_14-13-51.txt
├── public
│   ├── index.php
│   └── save_entry.php
├── _footer.php
└── _header.php
```


## Ergebnis der Prüfung

- ✅ 100 %
