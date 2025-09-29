# iPrice - E-commerce Platform

## Descrizione del Progetto

iPrice è una piattaforma di e-commerce sviluppata con Laravel 6.2 per la vendita di prodotti tecnologici. Il progetto implementa un sistema completo di gestione prodotti, categorie e utenti con diversi livelli di autorizzazione (Admin, Staff, User).

## Architettura e Pattern Utilizzati

### Pattern Architetturale: MVC (Model-View-Controller)

Il progetto segue rigorosamente il pattern MVC di Laravel:

- **Model**: Gestione dei dati e logica di business
- **View**: Interfaccia utente con Blade templating engine
- **Controller**: Logica di controllo e coordinamento tra Model e View

### Pattern di Design Implementati

1. **Repository Pattern** (tramite Eloquent ORM)
2. **Service Layer Pattern** (tramite classe Catalog)
3. **Request/Response Pattern** (Form Requests per validazione)
4. **Middleware Pattern** (per autenticazione e autorizzazione)
5. **Observer Pattern** (tramite event system di Laravel)

## Organizzazione del Codice

### Struttura delle Directory

```
PROJECT-Web-Technologies/
├── app/
│   ├── Http/
│   │   ├── Controllers/          # Logic Controllers
│   │   ├── Middleware/           # Middleware per sicurezza e autenticazione
│   │   ├── Requests/             # Form Request Validation
│   │   └── Kernel.php            # HTTP Kernel configuration
│   ├── Models/                   # Business Logic Models
│   │   ├── Resources/            # Resource Models (Product, Category)
│   │   ├── Admin.php             # Admin-specific logic
│   │   ├── Catalog.php           # Catalog service layer
│   │   └── Staff.php             # Staff-specific logic
│   ├── Providers/                # Service Providers
│   └── User.php                  # User Authentication Model
├── database/
│   ├── migrations/               # Database Schema Migrations
│   ├── seeds/                    # Database Seeders
│   └── factories/                # Model Factories
├── resources/
│   ├── views/                    # Blade Templates
│   │   ├── layouts/              # Layout Templates per ruoli
│   │   ├── auth/                 # Authentication Views
│   │   ├── admin/                # Admin Panel Views  
│   │   ├── staff/                # Staff Management Views
│   │   └── user/                 # User Interface Views
│   ├── js/                       # JavaScript Assets
│   └── sass/                     # SASS/CSS Styling
├── routes/
│   └── web.php                   # Web Routes Definition
├── public/                       # Public Assets
├── config/                       # Configuration Files
└── tests/                        # Testing Suite
```

## Pacchetti Funzionali

### 1. **Gestione Autenticazione e Autorizzazione**

**File Coinvolti:**
- `app/User.php` - Model User con metodi di autorizzazione
- `app/Http/Controllers/Auth/` - Controllers per login/registrazione
- `app/Http/Middleware/` - Middleware per controllo accessi
- `resources/views/auth/` - Views per autenticazione

**Funzionalità:**
- Sistema di login/registrazione utenti
- Gestione ruoli (Admin, Staff, User)
- Middleware per protezione delle route
- Controllo accessi basato sui ruoli

**Pattern Utilizzati:**
- Authorization Pattern
- Middleware Pattern
- Role-Based Access Control (RBAC)

### 2. **Gestione Catalogo Prodotti**

**File Coinvolti:**
- `app/Models/Catalog.php` - Service layer per operazioni catalogo
- `app/Models/Resources/Product.php` - Model Prodotto
- `app/Models/Resources/Category.php` - Model Categoria
- `app/Http/Controllers/PublicController.php` - Controller pubblico
- `database/migrations/2020_05_21_151315_create_prodotto_table.php`
- `database/migrations/2020_05_21_061856_create_table_categoria.php`

**Funzionalità:**
- Gestione gerarchica delle categorie (Top Categories → Sub Categories)
- Ricerca e filtro prodotti
- Paginazione risultati
- Calcolo prezzi con sconti
- Relazioni Eloquent tra prodotti e categorie

**Pattern Utilizzati:**
- Service Layer Pattern
- Repository Pattern (via Eloquent)
- Factory Pattern (per calcolo prezzi)

### 3. **Pannello Amministrativo**

**File Coinvolti:**
- `app/Http/Controllers/AdminController.php` - Logica amministrativa
- `app/Models/Admin.php` - Model per operazioni admin
- `resources/views/layouts/admin.blade.php` - Layout admin
- `resources/views/admin/` - Views panel amministrativo

**Funzionalità:**
- Gestione utenti (CRUD operations)
- Gestione staff
- Eliminazione multipla utenti
- Dashboard amministrativa

**Pattern Utilizzati:**
- CRUD Pattern
- Admin Panel Pattern
- Bulk Operations Pattern

### 4. **Gestione Staff**

**File Coinvolti:**
- `app/Http/Controllers/StaffController.php` - Controller staff
- `app/Models/Staff.php` - Model staff
- `resources/views/staff/` - Views gestione staff
- Routes specifiche per staff in `routes/web.php`

**Funzionalità:**
- Gestione prodotti (inserimento, modifica, eliminazione)
- Gestione categorie
- Operazioni CRUD su catalogo

### 5. **Validazione Dati**

**File Coinvolti:**
- `app/Http/Requests/` - Form Request Classes
- Validation rules integrate nei Request objects

**Classi di Validazione:**
- `EditProfileRequest.php`
- `SearchProductRequest.php`
- `InsertCategoryRequest.php`
- `prodRequest.php`
- E altre...

**Pattern Utilizzati:**
- Form Request Pattern
- Validation Pattern
- Single Responsibility Principle

### 6. **Sistema di Templating e UI**

**File Coinvolti:**
- `resources/views/layouts/` - Layout base per diversi ruoli
- `resources/views/` - Views specifiche
- Blade templating engine

**Caratteristiche:**
- Layout modulari per Admin, Staff, User, Public
- Sistema di menu dinamici basati sui ruoli
- Template inheritance con Blade
- Componenti riutilizzabili

## Struttura Database

### Tabelle Principali

1. **users** - Gestione utenti con ruoli
2. **categoria** - Struttura gerarchica categorie  
3. **prodotto** - Catalogo prodotti con relazioni

### Relazioni

- `Product` → `Category` (One-to-One)
- `Category` → `Category` (Self-referencing per gerarchia)
- User roles gestiti via campo `role`

## Flusso dell'Applicazione

### Per Utenti Pubblici
1. **Homepage** → **Catalogo** → **Categoria** → **Prodotto**
2. Navigazione gerarchica delle categorie
3. Ricerca e filtro prodotti
4. Visualizzazione dettaglio prodotto

### Per Utenti Autenticati
1. **Login** → **Dashboard basata su ruolo**
2. **Admin**: Gestione utenti e staff
3. **Staff**: Gestione prodotti e categorie  
4. **User**: Profilo personale

## Sicurezza Implementata

- **CSRF Protection** via middleware
- **SQL Injection Prevention** via Eloquent ORM
- **XSS Protection** via Blade templating
- **Authorization** via middleware e Gates
- **Password Hashing** via Laravel Hash facade
- **Input Validation** via Form Requests

## Configurazione e Dipendenze

### Dipendenze Principali (composer.json)
- Laravel Framework 6.2
- Laravel Collective HTML
- Laravel Tinker
- Laravel UI

### Frontend Assets
- SASS/SCSS per styling
- Laravel Mix per asset compilation
- jQuery per interazioni client-side

## Testing

Il progetto include:
- Struttura di testing con PHPUnit
- Test cases per Feature e Unit testing
- Test directory organizzati per tipologia

Questo progetto dimostra l'implementazione di best practices Laravel con una architettura solida, pattern di design appropriati e una struttura del codice ben organizzata per un'applicazione e-commerce scalabile.