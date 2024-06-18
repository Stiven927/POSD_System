<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\pkb;
use App\Models\cwe;
use App\Models\privacy;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Role::create([
            'id'=>'1',
            'name'=>'Utente'
        ]);
        Role::create([
            'id'=>'2',
            'name'=>'Admin di sistema'
        ]);
        Role::create([
            'id'=>'3',
            'name'=>'Ingegnere del software'
        ]);
        Role::create([
            'id'=>'4',
            'name'=>'Sviluppatore'
        ]);
        Role::create([
            'id'=>'5',
            'name'=>'Responsabile della Sicurezza'
        ]);
        Role::create([
            'id'=>'6',
            'name'=>'Azienda'
        ]);
        Role::create([
            'id'=>'7',
            'name'=>'Utente Programmatore'
        ]);

        pkb::create([
            'id'=>'1',
            'Pattern'=>'Protezione contro il Tracciamento',
            'Strategia'=>'Minimizzare',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'2',
            'Pattern'=>'Rimozione dei Metadati Invisibili ',
            'Strategia'=>'Minimizzare',
            'CWE'=>'CWE-269, CWE-434, CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'3',
            'Pattern'=>'Oscuramento delle Misure di Rumore Aggiunte',
            'Strategia'=>'Nascondere, Astratto',
            'CWE'=>'CWE-502',
        ]);
        pkb::create([
            'id'=>'4',
            'Pattern'=>'Modello di Notifica di Violazione dei Dati',
            'Strategia'=>'Informare',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'5',
            'Pattern'=>'Attività Inusuali',
            'Strategia'=>'Informare',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'6',
            'Pattern'=>'Asimmetria delle Informazioni Minimale ',
            'Strategia'=>'Informare',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'7',
            'Pattern'=>'Instradamento a Cipolla (Onion Routing)',
            'Strategia'=>'Nascondere',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'8',
            'Pattern'=>'Crittografia con Chiavi Gestite dall Utente',
            'Strategia'=>'Nascondere, Controllare',
            'CWE'=>'CWE-269, CWE-434, CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'9',
            'Pattern'=>'Utilizzo di Falsi (Dummies)',
            'Strategia'=>'Nascondere',
            'CWE'=>'CWE-269, CWE-434, CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'10',
            'Pattern'=>'Valutazione dell Impatto sulla Privacy Federata',
            'Strategia'=>'Imporre',
            'CWE'=>'CWE-269, CWE-434, CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'11',
            'Pattern'=>'Gestione degli Obblighi ',
            'Strategia'=>'Imporre',
            'CWE'=>'CWE-269, CWE-434, CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'12',
            'Pattern'=>'Politiche Persistenti (Sticky Policies)',
            'Strategia'=>'Imporre',
            'CWE'=>'CWE-269, CWE-434, CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'13',
            'Pattern'=>'Archiviazione dei Dati Personali',
            'Strategia'=>'Controllare, Separare',
            'CWE'=>'CWE-22, CWE-862, CWE-863, CWE-276, CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'14',
            'Pattern'=>'Modello di Confinamento dei Dati dell Utente',
            'Strategia'=>'Separare',
            'CWE'=>'CWE-269, CWE-434, CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'15',
            'Pattern'=>'Blacklist Basata sulla Reputazione Anonima',
            'Strategia'=>'Separare, Nascondere',
            'CWE'=>'CWE-269, CWE-434, CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'16',
            'Pattern'=>'Granularità della Posizione',
            'Strategia'=>'Astratto',
            'CWE'=>'CWE-502',
        ]);
        pkb::create([
            'id'=>'17',
            'Pattern'=>'Discoraggiare le Strategie Generalizzate',
            'Strategia'=>'Controllare',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'18',
            'Pattern'=>'Reciprocità',
            'Strategia'=>'Controllare',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'19',
            'Pattern'=>'Partecipazione Incentivata',
            'Strategia'=>'Controllare',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'20',
            'Pattern'=>'sternalizzazione [con consenso] ',
            'Strategia'=>'Controllare',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'21',
            'Pattern'=>'Firmare un Accordo per Risolvere la Mancanza di Fiducia sull Uso del Contesto dei Dati Privati',
            'Strategia'=>'Nascondere',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        pkb::create([
            'id'=>'22',
            'Pattern'=>'Messaggistica Pseudonima',
            'Strategia'=>'Nascondere',
            'CWE'=>'CWE-502',
        ]);
        pkb::create([
            'id'=>'23',
            'Pattern'=>'Identità Pseudonima',
            'Strategia'=>'Nascondere',
            'CWE'=>'CWE-502',
        ]);
        pkb::create([
            'id'=>'24',
            'Pattern'=>'Gateway di Aggregazione',
            'Strategia'=>'Informare',
            'CWE'=>'CWE-306, CWE-798, CWE-287',
        ]);
        cwe::create([
            'id'=>'1',
            'CWE'=>'CWE-20',
            'Titolo'=>'Improper Input Validation',
            'Descrizione'=>'Si riferisce alla mancata validazione corretta dei dati di input forniti dagli utenti, può portare vulnerabilità come l inclusione di script dannosi nelle pagine web (XSS), l iniezione di codice SQL (SQL Injection).',
        ]);
        cwe::create([
            'id'=>'2',
            'CWE'=>'CWE-22',
            'Titolo'=>'Improper Limitation of a Path name to a Restricted Directory(Path Traversal)',
            'Descrizione'=>'Indica errori nella limitazione corretta dei percorsi dei file forniti dagli utenti, che possono permettere loro di accedere a file o directory sensibili al di fuori della directory consentita.',
        ]);
        cwe::create([
            'id'=>'3',
            'CWE'=>'CWE-77',
            'Titolo'=>'Improper Neutralization of Special Elements used in a Command (Command Injection):',
            'Descrizione'=>'Questa CWE si riferisce a errori nella neutralizzazione dei caratteri speciali negli input dellutente che vengono eseguiti come comandi sul sistema, consentendo agli attaccanti di eseguire comandi non autorizzati o dannosi.',
        ]);
        cwe::create([
            'id'=>'4',
            'CWE'=>'CWE-78',
            'Titolo'=>'Improper Neutralization of Special Elements used in an OS Command (OS Command Injection)',
            'Descrizione'=>'Simile alla CWE-77, ma specificamente focalizzata sull iniezione di comandi del sistema operativo, che possono consentire agli attaccanti di eseguire comandi non autorizzati o dannosi sul sistema.',
        ]);
        cwe::create([
            'id'=>'5',
            'CWE'=>'CWE-79',
            'Titolo'=>'Imprope rNeutralization of Input During Web Page Generation (Cross- site Scripting)',
            'Descrizione'=>'Si riferisce a errori nella neutralizzazione dei dati di input forniti dagli utenti, che possono permettere l esecuzione di script dannosi all interno delle pagine web visualizzate dagli utenti.',
        ]);
        cwe::create([
            'id'=>'6',
            'CWE'=>'CWE-269',
            'Titolo'=>'Improper Privilege Management',
            'Descrizione'=>'indica situazioni in cui un sistema non gestisce correttamente i privilegi degli utenti, consentendo loro di eseguire azioni per le quali non dovrebbero avere autorizzazione o di ottenere privilegi superiori a quelli assegnati.',
        ]);
        cwe::create([
            'id'=>'7',
            'CWE'=>'CWE-276',
            'Titolo'=>'Incorrect Default Permissions',
            'Descrizione'=>'Si verifica quando un applicazioneoun sistema assegna permessi predefiniti non sicuri o troppo ampi per i file, le directory o altre risorse, mettendo a rischio la sicurezza dei dati e la privacy degli utenti.',
        ]);
        cwe::create([
            'id'=>'8',
            'CWE'=>'CWE-287',
            'Titolo'=>'Improper Authentication',
            'Descrizione'=>'Indicaunaseriedierrorirelativi all autenticazione, come l uso di metodi di autenticazione deboli o facilmente bypassabili o la mancata protezione delle credenziali durante il trasporto.',
        ]);
        cwe::create([
            'id'=>'9',
            'CWE'=>'CWE-306',
            'Titolo'=>'Missing Authentication for Critical Function',
            'Descrizione'=>'Siverificaquandouna funzione critica in un applicazione o in un sistema non richiede l autenticazione dell utente prima di essere eseguita, aprendo la porta a potenziali violazioni della sicurezza.',
        ]);
        cwe::create([
            'id'=>'10',
            'CWE'=>'CWE-434',
            'Titolo'=>'Unrestricted Upload of File with Dangerous Type',
            'Descrizione'=>'Questa CWE si verifica quando un applicazione consente agli utenti di caricare file sul server senza controlli adeguati, potenzialmente consentendo il caricamento di file dannosi.',
        ]);
        cwe::create([
            'id'=>'11',
            'CWE'=>'CWE-502',
            'Titolo'=>'Deserialization of Untrusted Data',
            'Descrizione'=>'Si riferisce a errori nella deserializzazione dei dati non attendibili, che possono portare a vulnerabilità come l iniezione di codice o la modifica di oggetti serializzati in modo dannoso.',
        ]);
        cwe::create([
            'id'=>'12',
            'CWE'=>'CWE-798',
            'Titolo'=>'Use of Hard-coded Credentials',
            'Descrizione'=>'Si verifica quando le credenziali (come password, chiavi di accesso, token di autenticazione) sono incluse direttamente nel codice sorgente dell applicazione anziché essere gestite in modo sicuro.',
        ]);
        cwe::create([
            'id'=>'13',
            'CWE'=>'CWE-862',
            'Titolo'=>'Missing Authorization',
            'Descrizione'=>"Si verifica quando un'applicazione non verifica correttamente i diritti di accesso di un utente prima di permettere l'accesso a una risorsa o l'secuzione di un'azione.",
        ]);
        cwe::create([
            'id'=>'14',
            'CWE'=>'CWE-863',
            'Titolo'=>'Incorrect Authorization',
            'Descrizione'=>"Questa CWE indica errori nella gestione dell'autorizzazione, come l'assegnazione errata dei ruoli o dei privilegi o l'omissione di controlli di autorizzazione durante l'accesso alle risorse.",
        ]);
        cwe::create([
            'id'=>'15',
            'CWE'=>'CWE-918',
            'Titolo'=>' Server-Side Request Forgery (SSRF)',
            'Descrizione'=>"Si riferisce a una vulnerabilità in cui un'applicazione web o un servizio sul server accetta input da un utente esterno e fa richieste di rete al di fuori del controllo dell'utente.",
        ]);
        cwe::create([
            'id'=>'16',
            'CWE'=>'CWE-94',
            'Titolo'=>"Improper Control of Generation of Code ('Code Injection')",
            'Descrizione'=>" Indica errori nella generazione e nell'esecuzione di codice dinamica-mente generato all'interno di un'applicazione, che possono permettere agli attaccanti di inserire e eseguire codice dannoso sul sistema.",
        ]);
        privacy::create([
            'id'=>'1',
            'Privacy'=>"Proattivo non reattivo - Preventivo non correttivo",
        ]);
        privacy::create([
            'id'=>'2',
            'Privacy'=>"Privacy come impostazione predefinita (Privacy by Default)",
        ]);
        privacy::create([
            'id'=>'3',
            'Privacy'=>"Privacy incorporata nella progettazione",
        ]);
        privacy::create([
            'id'=>'4',
            'Privacy'=>"Piena funzionalità – somma positiva, non somma zero",
        ]);
        privacy::create([
            'id'=>'5',
            'Privacy'=>"Sicurezza end-to-end – Tutela dell’intero ciclo di vita",
        ]);
        privacy::create([
            'id'=>'6',
            'Privacy'=>"Visibilità e trasparenza",
        ]);
        privacy::create([
            'id'=>'7',
            'Privacy'=>"Centralità dell’utente",
        ]);
    }
}
