# Webfire Starter

Schlankes WordPress-Block-Theme, mit dem wir bei [Webfire Marketing](https://webfire-marketing.com) neue Kundenprojekte beginnen.

Kein Page-Builder, keine Plugin-Abhängigkeiten, kein Build-Step. Das Design-System steckt in `theme.json`, die Inhalte in Patterns, und PHP übernimmt nur, was dort nicht hingehört.

![Screenshot](screenshot.png)

## Was drin ist

| Bereich | Umsetzung |
|---|---|
| Design-System | `theme.json`: Farbpalette, fluide Schriftgrößen, Abstands-Skala, Element-Styles für Links, Buttons und Überschriften |
| Schriften | Public Sans und Source Serif 4 als Variable Fonts, **lokal gehostet** (kein Google-Fonts-Request, DSGVO-freundlich) |
| Templates | `index`, `front-page`, `page`, `single`, `404` als Block-Templates, Header und Footer als Template-Parts |
| Patterns | Hero, Leistungen (bewusst asymmetrisch: eine Hauptleistung, zwei Ergänzungen), FAQ mit `details`, Kontakt, komplette Startseite |
| Eigener Block | `webfire/kontaktformular`: serverseitig gerendert, Einstellungen in der Seitenleiste, ohne Build-Step |
| Formular-Backend | `inc/contact-form.php`: Nonce, Honeypot, Zeitfalle statt Captcha, Validierung, `wp_mail()`, Redirect auf eine Danke-Seite (für saubere Conversion-Messung), Schutz vor offenen Redirects |
| Aufräumen | `inc/cleanup.php`: Emoji-Skripte, Generator-Tag und XML-RPC aus, Autoren-Archive umgeleitet – jeder Eingriff einzeln kommentiert |

## Aufbau

```
webfire-starter/
├── assets/
│   ├── css/theme.css          # nur, was theme.json nicht abbildet
│   └── fonts/                 # Variable Fonts + Lizenzen
├── blocks/kontaktformular/    # block.json, render.php, index.js, style.css
├── inc/
│   ├── setup.php              # Supports, Assets, Block- und Pattern-Registrierung
│   ├── cleanup.php
│   └── contact-form.php
├── parts/                     # header.html, footer.html
├── patterns/                  # hero, leistungen, faq, kontakt, startseite
├── templates/
├── functions.php
├── style.css
└── theme.json
```

## Installation

1. Ordner `webfire-starter` nach `wp-content/themes/` kopieren (oder als ZIP über *Design → Themes → Hochladen*).
2. Theme aktivieren.
3. Neue Seite anlegen → WordPress bietet das Pattern **„Startseite komplett“** an.
4. Seite `/danke/` anlegen – dorthin leitet das Kontaktformular nach dem Absenden weiter.
5. Empfänger der Anfragen ist die Admin-E-Mail. Anpassen per Filter:

```php
add_filter( 'webfire_starter_contact_recipient', fn() => 'anfragen@example.com' );
```

Voraussetzungen: WordPress 6.5+, PHP 8.1+.

## Entscheidungen

- **Block-Theme statt Classic Theme:** Kunden pflegen Inhalte im Editor, ohne dass ein Page-Builder Ladezeit und Abhängigkeiten mitbringt.
- **Kein Build-Step:** Der Block nutzt die WordPress-Globals direkt. Das hält das Theme wartbar, auch für Leute, die kein Node-Setup haben.
- **Danke-Seite statt Inline-Meldung:** Eine eigene URL nach dem Absenden macht Anfragen in Analytics zuverlässig messbar.
- **Spam-Schutz ohne Captcha:** Honeypot und Zeitfalle halten die meisten Bots fern, ohne echte Besucher zu nerven oder Drittanbieter einzubinden.

## Lizenz

GPL-2.0-or-later. Schriften: SIL Open Font License 1.1.
