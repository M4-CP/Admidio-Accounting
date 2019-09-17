[logo]: https://github.com/M4-CP/Admidio-Accounting/blob/master/Images/accounting.png "Buchhalter"

# Admidio-Accounting
Buchhaltung-Plugin für Vereine
# Requirements
Admidio Version 3.3.10 or higher

## Annahme
![alt text][logo] In der Erstannahme geht es darum die bestehenden Prozesse durch ein erweitertes Tool abzulösen. Es sind neben den klassischen Bankbuchungen und Kassenbuchungen, die Rechnungs udn Belegerfassung vorgesehen. Darüberhinaus ein Reisekosten Management.

In den Berichten sind ein Kassenbericht, Kassenprüfung und Mehrjahresvergleich geplant.

Des weiteren soll es eine Budget und Kostenstellenplanung geben.

## Ansatz
Aufbau eines eigenen Frameworks. Hierzu wird im Scriptverzeichnis eine Datei angelegt, die die Grundeinstellungen der Gesamten Individualwerte entspricht.

## Steuerung

### $get

``` PHP
<?php
$vorname = $_GET['vorname'];
$nachname = $_GET['nachname'];
echo "Hallo $vorname $nachname";
?>
```

```
<a href="artikel.php?id=234">Das PHP Einsteiger Buch</a>
```
## Datenmodell

### Tabellen

#### Konten/Kontierung
Feld | Name | Format | Key
--- | --- | --- | ---
*Still* | `renders` | **nicely** | 
1 | 2 | 3 | 4

#### Bilanzstruktur

#### Buchungen

## Berichte

### Kassenbericht
#### Zahlen
#### Zum Vortragen
Hier werden die einzelnen Konten mit dem Budget und dem Vorjahr verglichen und eine Aussage zusammengebaut.

z.B.


> Von den Beiträgen wurden xxx,00 € eingenommen. Leider sind noch Beträge offen ...


### Einnahmenübersicht

### Ausgabenübersicht

### Reisekostenberichte

### Beitragsübersicht

## Eingaben

### Belegeingabe

#### Rechnung

#### Kontoauszug

#### Kasse

#### Reisekosten

##### Belegeingabe

##### Belegfreigabe


