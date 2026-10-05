# Webfire Starter

Ruhiges, redaktionelles WordPress-Block-Theme, mit dem wir bei [Webfire Marketing](https://webfire-marketing.com) Websites für Büros, Studios und Praxen beginnen. Als Beispielinhalt dient das fiktive Architekturbüro *Kessler Aho Architekten*.

Das Theme trägt kleine und große Websites: als **Onepager** mit Sprungmarken oder als **Website mit mehreren Seiten** – Projekte mit Filter, Leistungen mit Unterseiten, Büro & Team, Journal, Karriere und Kontakt. Die Demo zeigt die große Variante, der Onepager liegt als fertiges Pattern bei.

Kein Page-Builder, keine Plugin-Abhängigkeiten, kein Build-Step. Das Design-System steckt in `theme.json`, die Inhalte in Patterns, und PHP übernimmt nur, was dort nicht hingehört.

**[▶ Live-Demo im Browser öffnen](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/Webfire-Marketing/webfire-starter/main/blueprint.json)** – startet über WordPress Playground eine komplette WordPress-Installation mit diesem Theme und Demo-Inhalten. Nichts wird installiert, alles läuft im Browser.

![Screenshot](screenshot.png)

## Was drin ist

| Bereich | Umsetzung |
|---|---|
| Design-System | `theme.json`: zurückhaltende Palette, fluide Schriftgrößen, Abstands-Skala, Element-Styles für Links, Buttons und Überschriften |
| Schriften | Newsreader und Inter Tight als Variable Fonts, **lokal gehostet** (kein Google-Fonts-Request, DSGVO-freundlich) |
| Inhaltstyp „Projekte“ | `inc/projects.php`: Custom Post Type unter `/projekte/`, Meta-Felder Ort und Jahr, Taxonomie „Leistung“ mit Filterseiten (`/projekte/leistung/neubau/`) |
| Inhaltstyp „Team“ | `inc/team.php`: Personen mit Foto und Rolle, sortierbar, ohne eigene Einzelseiten |
| Block Bindings | Meta-Felder werden in Templates und Patterns über `core/post-meta` ausgegeben – ohne ACF, Shortcodes oder eigene Blöcke |
| Journal | Beitragsseite mit Kategorie-Filter, Archiv und Einzelansicht |
| Navigation | Hauptmenü mit Untermenü für die Leistungen, mobil als Overlay |
| Templates | `front-page`, `home`, `archive`, `single`, `archive-projekt`, `taxonomy-leistung`, `single-projekt`, `page`, `page-no-title`, `index`, `404` |
| Patterns | Abschnitte (Hero, Projekte, Büro, Leistungen, Journal, Team, Kontakt) und komplette Seiten (Büro, Leistungen, Kontakt, Karriere, Onepager). Header, Footer und 404 als Patterns, damit Links über `home_url()` auch in Unterordner-Installationen stimmen |
| Eigener Block | `webfire/kontaktformular`: serverseitig gerendert, Einstellungen in der Seitenleiste, ohne Build-Step |
| Formular-Backend | `inc/contact-form.php`: Nonce, Honeypot, Zeitfalle statt Captcha, Validierung, `wp_mail()`, Redirect auf eine Danke-Seite (für saubere Conversion-Messung), Schutz vor offenen Redirects |
| Aufräumen | `inc/cleanup.php`: Emoji-Skripte, Generator-Tag und XML-RPC aus, Autoren-Archive umgeleitet – jeder Eingriff einzeln kommentiert |

## Aufbau

```
webfire-starter/
├── assets/
│   ├── css/theme.css          # nur, was theme.json nicht abbildet
│   ├── fonts/                 # Variable Fonts + Lizenzen
│   └── images/                # Demo-Bilder (WebP)
├── blocks/kontaktformular/    # block.json, render.php, index.js, style.css
├── inc/
│   ├── setup.php              # Supports, Assets, Block- und Pattern-Registrierung
│   ├── projects.php           # Inhaltstyp „Projekte“, Meta-Felder, Taxonomie „Leistung“
│   ├── team.php               # Inhaltstyp „Team“
│   ├── cleanup.php
│   └── contact-form.php
├── parts/                     # header.html, footer.html
├── patterns/
├── templates/
├── blueprint.json             # Demo-Setup für WordPress Playground
├── functions.php
├── style.css
└── theme.json
```

## Lokal ansehen

**Im Browser (am schnellsten):** Link „Live-Demo“ oben öffnen. Playground lädt das Theme direkt aus diesem Repository, legt rund 20 Seiten mit Projekten, Team, Journal-Beiträgen und Unterseiten an und meldet dich im Backend an.

**In einer lokalen WordPress-Installation** (z. B. mit [Local](https://localwp.com)):

1. Ordner `webfire-starter` nach `wp-content/themes/` kopieren (oder als ZIP über *Design → Themes → Hochladen*).
2. Theme aktivieren und unter *Einstellungen → Permalinks* einmal speichern.
3. Unter *Projekte* ein paar Einträge mit Beitragsbild und Leistung anlegen; Ort und Jahr pflegst du im Bereich *Individuelle Felder* (im Editor unter *Optionen → Einstellungen → Bedienfelder* einblenden). Genauso unter *Team* die Personen mit Rolle.
4. Seiten `Büro`, `Leistungen`, `Kontakt` und `Karriere` mit der Vorlage *Seite ohne Titel* anlegen und jeweils das passende Seiten-Pattern einfügen. Für einen Onepager stattdessen das Pattern *Onepager komplett* auf der Startseite verwenden.
5. Seite `/danke/` anlegen – dorthin leitet das Kontaktformular nach dem Absenden weiter.
6. Empfänger der Anfragen ist die Admin-E-Mail. Anpassen per Filter:

```php
add_filter( 'webfire_starter_contact_recipient', fn() => 'anfragen@example.com' );
```

Voraussetzungen: WordPress 6.5+, PHP 8.1+.

## Entscheidungen

- **Block-Theme statt Classic Theme:** Kunden pflegen Inhalte im Editor, ohne dass ein Page-Builder Ladezeit und Abhängigkeiten mitbringt.
- **Block Bindings statt ACF:** Seit WordPress 6.5 lassen sich Meta-Felder direkt an Absatz-Blöcke binden. Das spart ein Plugin und bleibt im Editor sichtbar.
- **Kein Build-Step:** Der Block nutzt die WordPress-Globals direkt. Das hält das Theme wartbar, auch für Leute, die kein Node-Setup haben.
- **Danke-Seite statt Inline-Meldung:** Eine eigene URL nach dem Absenden macht Anfragen in Analytics zuverlässig messbar.
- **Spam-Schutz ohne Captcha:** Honeypot und Zeitfalle halten die meisten Bots fern, ohne echte Besucher zu nerven oder Drittanbieter einzubinden.
- **Klein und groß aus einem Baukasten:** Dieselben Abschnitte ergeben einen Onepager oder eine Website mit Unterseiten. Kein zweites Theme, keine doppelte Pflege.
- **Inhaltstypen im Theme:** Bei Kundenprojekten gehören Post Types in ein Plugin, damit Inhalte einen Theme-Wechsel überleben. Für dieses Starter-Theme bleibt alles bewusst an einem Ort.

## Lizenz

GPL-2.0-or-later. Schriften: SIL Open Font License 1.1. Demo-Bilder sind KI-generiert und dürfen frei mit dem Theme verwendet werden.
