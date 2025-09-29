# PROJECT Web Technologies

## Descrizione
Applicazione web accademica sviluppata per consolidare pratiche moderne di sviluppo server‑side in PHP: gestione utenti, flussi CRUD, viste dinamiche e possibili estensioni API. Obiettivo: base solida, modulare, facilmente estendibile e leggibile.

## Stack Tecnologico
- PHP 8+
- Framework MVC (Laravel)
- Blade per il templating server‑side
- Eloquent ORM per accesso relazionale (MySQL/PostgreSQL)
- Composer (dipendenze)
- Migrazioni & Seeder per versionare dati e bootstrap
- Script shell (manutenzione / utilità)

## Struttura Principale
```
app/
  Http/
    Controllers/    # Endpoint web/API (snelli)
    Middleware/     # Autenticazione, throttling, ecc.
    Requests/       # Validazione input
  Models/           # Entità dominio (Eloquent)
  Services/         # Logica applicativa (use case)
  Repositories/     # (Opz.) astrazione dati
  Providers/        # Registrazioni nel container
bootstrap/
config/
database/
  migrations/
  seeders/
public/
resources/
  views/            # Blade templates
  lang/
routes/
  web.php           # Rotte session-based
  api.php           # Rotte stateless JSON
storage/
tests/              # (se presenti)
```

## Flusso di una Richiesta
Richiesta → Middleware → Route → Controller → (Validazione Form Request) → Service → (Repository/Model) → Risposta (View HTML o JSON).

## Pattern & Convenzioni
- MVC + Service Layer per separare responsabilità
- Dependency Injection via IoC container
- Form Request Validation centralizzata
- Repository Pattern dove serve testabilità
- Route Model Binding & Resource Controllers per CRUD puliti
- Blade Layouts & Components per riuso UI
- Eloquent Relationships/Scopes per query leggibili
- Middleware per cross‑cutting concerns (auth, rate limit)
- Configurazione via `.env`
- Migrazioni atomiche + seed ripetibili

## Convenzioni di Codice
- PSR naming (StudlyCase classi, camelCase metodi)
- Controller sottili (niente business logic)
- Niente logica nelle view (solo presentazione)
- Query complesse in Scope o Repository
- Risposte API uniformate (Resource / DTO se necessario)

## Setup Rapido
```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
Visita: http://localhost:8000

## Testing (se configurato)
```
php artisan test
```

## Possibili Estensioni
- Autenticazione avanzata (OAuth / 2FA)
- Versioning API
- Code/Jobs asincroni
- Eventi e listener (domain events)
- Cache mirata (query costose / frammenti)
- Rate limiting e metriche

## Note su Laravel
Il progetto sfrutta le convenzioni essenziali di Laravel (routing, migrations, Eloquent, Blade) mantenendo un approccio sobrio senza sovra‑astrazioni. Per approfondimenti: https://laravel.com/docs

---
Per aggiunte (endpoint API, diagrammi, deploy) apri pure una issue o chiedi qui.