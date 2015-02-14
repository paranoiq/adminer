<?php
$translations = array(
	// label for database system selection (MySQL, SQLite, ...)
	'System' => 'Systém',
	'Server' => 'Server',
	'Username' => 'Uživatel',
	'Password' => 'Heslo',
	'Permanent login' => 'Trvalé přihlášení',
	'Login' => 'Přihlásit se',
	'Logout' => 'Odhlásit',
	'Logged as: %s' => 'Přihlášen jako: %s',
	'Logout successful.' => 'Odhlášení proběhlo v pořádku.',
	'Invalid credentials.' => 'Neplatné přihlašovací údaje.',
	'Implement %s method to use SQLite.' => 'Pro přihlášení k SQLite implementujte metodu %s.',
	'Too many unsuccessful logins, try again in %d minute(s).' => array('Příliš mnoho pokusů o přihlášení, zkuste to znovu za %d minutu.', 'Příliš mnoho pokusů o přihlášení, zkuste to znovu za %d minuty.', 'Příliš mnoho pokusů o přihlášení, zkuste to znovu za %d minut.'),
	'Master password expired. <a href="https://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.' => 'Platnost hlavního hesla vypršela. <a href="https://www.adminer.org/cs/extension/" target="_blank">Implementujte</a> metodu %s, aby platilo stále.',
	'Language' => 'Jazyk',
	'Invalid CSRF token. Send the form again.' => 'Neplatný token CSRF. Odešlete formulář znovu.',
	'If you did not send this request from Adminer then close this page.' => 'Pokud jste tento požadavek neposlali z Adminera, tak tuto stránku zavřete.',
	'No extension' => 'Žádné rozšíření',
	'None of the supported PHP extensions (%s) are available.' => 'Není dostupné žádné z podporovaných PHP rozšíření (%s).',
	'Session support must be enabled.' => 'Session proměnné musí být povolené.',
	'Session expired, please login again.' => 'Session vypršela, přihlašte se prosím znovu.',
	'%s version: %s through PHP extension %s' => 'Verze %s: %s přes PHP rozšíření %s',
	'Refresh' => 'Obnovit',

	// text direction - 'ltr' or 'rtl'
	'ltr' => 'ltr',

	'Privileges' => 'Oprávnění',
	'Create user' => 'Vytvořit uživatele',
	'User has been dropped.' => 'Uživatel byl odstraněn.',
	'User has been altered.' => 'Uživatel byl změněn.',
	'User has been created.' => 'Uživatel byl vytvořen.',
	'Hashed' => 'Zahašované',
	'Column' => 'Sloupec',
	'Routine' => 'Procedura',
	'Grant' => 'Povolit',
	'Revoke' => 'Zakázat',

	'Process list' => 'Seznam procesů',
	'%d process(es) have been killed.' => array('Byl ukončen %d proces.', 'Byly ukončeny %d procesy.', 'Bylo ukončeno %d procesů.'),
	'Kill' => 'Ukončit',

	'Variables' => 'Proměnné',
	'Status' => 'Stav',

	'SQL command' => 'SQL příkaz',
	'%d query(s) executed OK.' => array('%d příkaz proběhl v pořádku.', '%d příkazy proběhly v pořádku.', '%d příkazů proběhlo v pořádku.'),
	'Query executed OK, %d row(s) affected.' => array('Příkaz proběhl v pořádku, byl změněn %d záznam.', 'Příkaz proběhl v pořádku, byly změněny %d záznamy.', 'Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),
	'No commands to execute.' => 'Žádné příkazy k vykonání.',
	'Error in query' => 'Chyba v dotazu',
	'ATTACH queries are not supported.' => 'Dotazy ATTACH nejsou podporované.',
	'Execute' => 'Provést',
	'Stop on error' => 'Zastavit při chybě',
	'Show only errors' => 'Zobrazit pouze chyby',
	// sprintf() format for time of the command
	'%.3f s' => '%.3f s',
	'%d m %.3f s' => '%d m %d s',
	'History' => 'Historie',
	'Clear' => 'Vyčistit',
	'Edit all' => 'Upravit vše',

	'File upload' => 'Nahrání souboru',
	'From server' => 'Ze serveru',
	'Webserver file %s' => 'Soubor %s na webovém serveru',
	'Run file' => 'Spustit soubor',
	'File does not exist.' => 'Soubor neexistuje.',
	'File uploads are disabled.' => 'Nahrávání souborů není povoleno.',
	'Unable to upload a file.' => 'Nepodařilo se nahrát soubor.',
	'Maximum allowed file size is %sB.' => 'Maximální povolená velikost souboru je %sB.',
	'Too big POST data. Reduce the data or increase the %s configuration directive.' => 'Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.',
	'You can upload a big SQL file via FTP and import it from server.' => 'Velký SQL soubor můžete nahrát pomocí FTP a importovat ho ze serveru.',
	'You are offline.' => 'Jste offline.',

	'Export' => 'Export',
	'Output' => 'Výstup',
	'open' => 'otevřít',
	'save' => 'uložit',
	'Format' => 'Formát',
	'Data' => 'Data',

	'Database' => 'Databáze',
	'database' => 'databáze',
	'Use' => 'Vybrat',
	'Select database' => 'Vybrat databázi',
	'Invalid database.' => 'Nesprávná databáze.',
	'Create new database' => 'Vytvořit novou databázi',
	'Database has been dropped.' => 'Databáze byla odstraněna.',
	'Databases have been dropped.' => 'Databáze byly odstraněny.',
	'Database has been created.' => 'Databáze byla vytvořena.',
	'Database has been renamed.' => 'Databáze byla přejmenována.',
	'Database has been altered.' => 'Databáze byla změněna.',
	'Alter database' => 'Pozměnit databázi',
	'Create database' => 'Vytvořit databázi',
	'Database schema' => 'Schéma databáze',

	// link to current database schema layout
	'Permanent link' => 'Trvalý odkaz',

	// thousands separator - must contain single byte
	',' => ' ',
	'0123456789' => '0123456789',
	'Engine' => 'Úložiště',
	'Collation' => 'Porovnávání',
	'Data Length' => 'Velikost dat',
	'Index Length' => 'Velikost indexů',
	'Data Free' => 'Volné místo',
	'Rows' => 'Řádků',
	'%d in total' => '%d celkem',
	'Analyze' => 'Analyzovat',
	'Optimize' => 'Optimalizovat',
	'Vacuum' => 'Vyčistit',
	'Check' => 'Zkontrolovat',
	'Repair' => 'Opravit',
	'Truncate' => 'Vyprázdnit',
	'Tables have been truncated.' => 'Tabulky byly vyprázdněny.',
	'Move to other database' => 'Přesunout do jiné databáze',
	'Move' => 'Přesunout',
	'Tables have been moved.' => 'Tabulky byly přesunuty.',
	'Copy' => 'Zkopírovat',
	'Tables have been copied.' => 'Tabulky byly zkopírovány.',

	'Routines' => 'Procedury a funkce',
	'Routine has been called, %d row(s) affected.' => array('Procedura byla zavolána, byl změněn %d záznam.', 'Procedura byla zavolána, byly změněny %d záznamy.', 'Procedura byla zavolána, bylo změněno %d záznamů.'),
	'Call' => 'Zavolat',
	'Parameter name' => 'Název parametru',
	'Create procedure' => 'Vytvořit proceduru',
	'Create function' => 'Vytvořit funkci',
	'Routine has been dropped.' => 'Procedura byla odstraněna.',
	'Routine has been altered.' => 'Procedura byla změněna.',
	'Routine has been created.' => 'Procedura byla vytvořena.',
	'Alter function' => 'Změnit funkci',
	'Alter procedure' => 'Změnit proceduru',
	'Return type' => 'Návratový typ',

	'Events' => 'Události',
	'Event has been dropped.' => 'Událost byla odstraněna.',
	'Event has been altered.' => 'Událost byla změněna.',
	'Event has been created.' => 'Událost byla vytvořena.',
	'Alter event' => 'Pozměnit událost',
	'Create event' => 'Vytvořit událost',
	'At given time' => 'V daný čas',
	'Every' => 'Každých',
	'Schedule' => 'Plán',
	'Start' => 'Začátek',
	'End' => 'Konec',
	'On completion preserve' => 'Po dokončení zachovat',

	'Tables' => 'Tabulky',
	'Tables and views' => 'Tabulky a pohledy',
	'Table' => 'Tabulka',
	'No tables.' => 'Žádné tabulky.',
	'Alter table' => 'Pozměnit tabulku',
	'Create table' => 'Vytvořit tabulku',
	'Table has been dropped.' => 'Tabulka byla odstraněna.',
	'Tables have been dropped.' => 'Tabulky byly odstraněny.',
	'Tables have been optimized.' => 'Tabulky byly optimalizovány.',
	'Table has been altered.' => 'Tabulka byla změněna.',
	'Table has been created.' => 'Tabulka byla vytvořena.',
	'Table name' => 'Název tabulky',
	'Show structure' => 'Zobrazit strukturu',
	'engine' => 'úložiště',
	'collation' => 'porovnávání',
	'Column name' => 'Název sloupce',
	'Type' => 'Typ',
	'Length' => 'Délka',
	'Auto Increment' => 'Auto Increment',
	'Options' => 'Volby',
	'Comment' => 'Komentář',
	'Default value' => 'Výchozí hodnota',
	'Default values' => 'Výchozí hodnoty',
	'Drop' => 'Odstranit',
	'Are you sure?' => 'Opravdu?',
	'Size' => 'Velikost',
	'Compute' => 'Spočítat',
	'Move up' => 'Přesunout nahoru',
	'Move down' => 'Přesunout dolů',
	'Remove' => 'Odebrat',
	'Maximum number of allowed fields exceeded. Please increase %s.' => 'Byl překročen maximální povolený počet polí. Zvyšte prosím %s.',

	'Partition by' => 'Rozdělit podle',
	'Partitions' => 'Oddíly',
	'Partition name' => 'Název oddílu',
	'Values' => 'Hodnoty',

	'View' => 'Pohled',
	'Materialized View' => 'Materializovaný pohled',
	'View has been dropped.' => 'Pohled byl odstraněn.',
	'View has been altered.' => 'Pohled byl změněn.',
	'View has been created.' => 'Pohled byl vytvořen.',
	'Alter view' => 'Pozměnit pohled',
	'Create view' => 'Vytvořit pohled',
	'Create materialized view' => 'Vytvořit materializovaný pohled',

	'Indexes' => 'Indexy',
	'Indexes have been altered.' => 'Indexy byly změněny.',
	'Alter indexes' => 'Pozměnit indexy',
	'Add next' => 'Přidat další',
	'Index Type' => 'Typ indexu',
	'Column (length)' => 'Sloupec (délka)',

	'Foreign keys' => 'Cizí klíče',
	'Foreign key' => 'Cizí klíč',
	'Foreign key has been dropped.' => 'Cizí klíč byl odstraněn.',
	'Foreign key has been altered.' => 'Cizí klíč byl změněn.',
	'Foreign key has been created.' => 'Cizí klíč byl vytvořen.',
	'Target table' => 'Cílová tabulka',
	'Change' => 'Změnit',
	'Source' => 'Zdroj',
	'Target' => 'Cíl',
	'Add column' => 'Přidat sloupec',
	'Alter' => 'Změnit',
	'Add foreign key' => 'Přidat cizí klíč',
	'ON DELETE' => 'Při smazání',
	'ON UPDATE' => 'Při změně',
	'Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.' => 'Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.',

	'Triggers' => 'Triggery',
	'Add trigger' => 'Přidat trigger',
	'Trigger has been dropped.' => 'Trigger byl odstraněn.',
	'Trigger has been altered.' => 'Trigger byl změněn.',
	'Trigger has been created.' => 'Trigger byl vytvořen.',
	'Alter trigger' => 'Změnit trigger',
	'Create trigger' => 'Vytvořit trigger',
	'Time' => 'Čas',
	'Event' => 'Událost',
	'Name' => 'Název',

	'select' => 'vypsat',
	'Select' => 'Vypsat',
	'Select data' => 'Vypsat data',
	'Functions' => 'Funkce',
	'Aggregation' => 'Agregace',
	'Search' => 'Vyhledat',
	'anywhere' => 'kdekoliv',
	'Search data in tables' => 'Vyhledat data v tabulkách',
	'Sort' => 'Seřadit',
	'descending' => 'sestupně',
	'Limit' => 'Limit',
	'Limit rows' => 'Limit řádek',
	'Text length' => 'Délka textů',
	'Action' => 'Akce',
	'Full table scan' => 'Průchod celé tabulky',
	'Unable to select the table' => 'Nepodařilo se vypsat tabulku',
	'No rows.' => 'Žádné řádky.',
	'%d / ' => '%d / ',
	'%d row(s)' => array('%d řádek', '%d řádky', '%d řádků'),
	'Page' => 'Stránka',
	'last' => 'poslední',
	'Load more data' => 'Nahrát další data',
	'Loading' => 'Nahrává se',
	'whole result' => 'celý výsledek',
	'%d byte(s)' => array('%d bajt', '%d bajty', '%d bajtů'),

	'Import' => 'Import',
	'%d row(s) have been imported.' => array('Byl importován %d záznam.', 'Byly importovány %d záznamy.', 'Bylo importováno %d záznamů.'),
	'File must be in UTF-8 encoding.' => 'Soubor musí být v kódování UTF-8.',

	// in-place editing in select
	'Modify' => 'Změnit',
	'Ctrl+click on a value to modify it.' => 'Ctrl+klikněte na políčko, které chcete změnit.',
	'Use edit link to modify this value.' => 'Ke změně této hodnoty použijte odkaz upravit.',

	// %s can contain auto-increment value
	'Item%s has been inserted.' => 'Položka%s byla vložena.',
	'Item has been deleted.' => 'Položka byla smazána.',
	'Item has been updated.' => 'Položka byla aktualizována.',
	'%d item(s) have been affected.' => array('Byl ovlivněn %d záznam.', 'Byly ovlivněny %d záznamy.', 'Bylo ovlivněno %d záznamů.'),
	'New item' => 'Nová položka',
	'original' => 'původní',
	// label for value '' in enum data type
	'empty' => 'prázdné',
	'edit' => 'upravit',
	'Edit' => 'Upravit',
	'Insert' => 'Vložit',
	'Save' => 'Uložit',
	'Saving' => 'Ukládá se',
	'Save and continue edit' => 'Uložit a pokračovat v editaci',
	'Save and insert next' => 'Uložit a vložit další',
	'Selected' => 'Označené',
	'Clone' => 'Klonovat',
	'Delete' => 'Smazat',
	'You have no privileges to update this table.' => 'Nemáte oprávnění editovat tuto tabulku.',

	'E-mail' => 'E-mail',
	'From' => 'Odesílatel',
	'Subject' => 'Předmět',
	'Attachments' => 'Přílohy',
	'Send' => 'Odeslat',
	'%d e-mail(s) have been sent.' => array('Byl odeslán %d e-mail.', 'Byly odeslány %d e-maily.', 'Bylo odesláno %d e-mailů.'),

	// data type descriptions
	'Numbers' => 'Čísla',
	'Date and time' => 'Datum a čas',
	'Strings' => 'Řetězce',
	'Binary' => 'Binární',
	'Lists' => 'Seznamy',
	'Network' => 'Síť',
	'Geometry' => 'Geometrie',
	'Relations' => 'Vztahy',

	'Editor' => 'Editor',
	// date format in Editor: $1 yyyy, $2 yy, $3 mm, $4 m, $5 dd, $6 d
	'$1-$3-$5' => '$6.$4.$1',
	// hint for date format - use language equivalents for day, month and year shortcuts
	'[yyyy]-mm-dd' => 'd.m.[rrrr]',
	// hint for time format - use language equivalents for hour, minute and second shortcuts
	'HH:MM:SS' => 'HH:MM:SS',
	'now' => 'teď',
	'yes' => 'ano',
	'no' => 'ne',

	// general SQLite error in create, drop or rename database
	'File exists.' => 'Soubor existuje.',
	'Please use one of the extensions %s.' => 'Prosím použijte jednu z koncovek %s.',

	// PostgreSQL and MS SQL schema support
	'Alter schema' => 'Pozměnit schéma',
	'Create schema' => 'Vytvořit schéma',
	'Schema has been dropped.' => 'Schéma bylo odstraněno.',
	'Schema has been created.' => 'Schéma bylo vytvořeno.',
	'Schema has been altered.' => 'Schéma bylo změněno.',
	'Schema' => 'Schéma',
	'Invalid schema.' => 'Nesprávné schéma.',

	// PostgreSQL sequences support
	'Sequences' => 'Sekvence',
	'Create sequence' => 'Vytvořit sekvenci',
	'Sequence has been dropped.' => 'Sekvence byla odstraněna.',
	'Sequence has been created.' => 'Sekvence byla vytvořena.',
	'Sequence has been altered.' => 'Sekvence byla změněna.',
	'Alter sequence' => 'Pozměnit sekvenci',

	// PostgreSQL user types support
	'User types' => 'Uživatelské typy',
	'Create type' => 'Vytvořit typ',
	'Type has been dropped.' => 'Typ byl odstraněn.',
	'Type has been created.' => 'Typ byl vytvořen.',
	'Alter type' => 'Pozměnit typ',
);
