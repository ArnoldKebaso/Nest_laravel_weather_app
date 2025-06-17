Next.js & Laravel Weather/Notes App
===================================

Table of Contents
-----------------

1.  Project Overview
    
2.  Features
    
3.  Architecture
    
4.  Tech Stack
    
5.  Prerequisites
    
6.  Installation & Setup
    
    *   Backend (Laravel)
        
    *   Frontend (Next.js)
        
7.  Configuration
    
    *   Environment Variables
        
    *   Database (SQLite)
        
8.  Database Migrations & Seeding
    
9.  Running the Application
    
10.  API Reference
    
11.  Project Structure
    
12.  Contributing
    
13.  Troubleshooting
    
14.  License
    
15.  Acknowledgements
    

Project Overview
----------------

This project demonstrates a decoupled web application composed of a **Next.js** frontend and a **Laravel** backend, connected via a simple RESTful API. The backend uses **SQLite** for data persistence, leveraging Laravel’s migration system to automate schema creation. The frontend consumes the API using the native fetch API, rendering data with Tailwind CSS and RippleUI components for responsive, modern UI.

The sample domain implemented here is a "Notes" application (or Weather app variant—feel free to adapt) where users can create, read, update, and delete notes (or fetch weather data). All CRUD operations are performed through simple API endpoints without manual SQL, showcasing rapid development and maintainability.

Features
--------

*   ✨ **CRUD API**: Create, Read, Update, and Delete notes.
    
*   🔄 **Automated Migrations**: No manual table creation—Laravel migrations build SQLite schema.
    
*   🌐 **CORS-enabled**: Frontend (port 3000) can securely call backend (port 8000).
    
*   ⚡ **Modern Frontend**: Next.js + TypeScript + Tailwind CSS + RippleUI.
    
*   🚀 **Zero Config**: Minimal environment setup; defaults work out-of-the-box.
    

Architecture
------------

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   Next.js Frontend <--HTTP--> Laravel API Backend <---> SQLite Database   `

1.  **Next.js Frontend**
    
    *   Provides UI components and pages.
        
    *   Uses lib/api.ts utility for all fetch calls.
        
    *   Styles with Tailwind CSS and RippleUI.
        
2.  **Laravel Backend**
    
    *   Exposes RESTful API routes via routes/api.php.
        
    *   Manages data via Eloquent models & controllers.
        
    *   Handles migrations and seeding.
        
3.  **SQLite**
    
    *   Lightweight file-based database.
        
    *   Auto-created by Laravel when running migrations.
        

Tech Stack
----------

LayerTechnologyFrontendNext.js + TypeScriptStylingTailwind CSS, RippleUIBackendLaravel 10 (PHP 8.1+)DatabaseSQLiteHTTP ClientJS fetch API

Prerequisites
-------------

*   **Node.js** (v14+) & **npm**
    
*   **PHP** (v8.1+) & **Composer**
    
*   **SQLite** (bundled with most OSes)
    
*   **Git** (optional but recommended)
    

Installation & Setup
--------------------

### Backend (Laravel)

1.  git clone backendcd backend
    
2.  composer install
    
3.  **Configure environment**:
    
    *   cp .env.example .env
        
    *   DB\_CONNECTION=sqliteDB\_DATABASE=${PWD}/database/database.sqlite
        
4.  php artisan key:generate
    

### Frontend (Next.js)

1.  cd ../frontend
    
2.  npm install
    
3.  **Setup environment**:
    
    *   NEXT\_PUBLIC\_API\_BASE=http://localhost:8000/api
        
4.  **Configure Tailwind & RippleUI**:
    
    *   Ensure tailwind.config.js includes content paths for your pages/components.
        
    *   Import RippleUI in your \_app.tsx or individual component files.
        

Configuration
-------------

### Environment Variables

VariableDescriptionDefaultDB\_CONNECTIONLaravel database driversqliteDB\_DATABASEPath to SQLite filedatabase/database.sqliteNEXT\_PUBLIC\_API\_BASEBase URL for frontend API requestshttp://localhost:8000/api

### Database (SQLite)

*   The file database/database.sqlite will be created automatically on migration.
    
*   No manual creation of tables is required—Laravel migrations handle it all.
    

Database Migrations & Seeding
-----------------------------

1.  cd backendphp artisan migrate
    
2.  _(Optional)_ **Seed data**:
    
    *   Create a seeder via php artisan make:seeder NoteSeeder
        
    *   Define sample notes in database/seeders/NoteSeeder.php
        
    *   Register in DatabaseSeeder
        
    *   php artisan db:seed
        

Running the Application
-----------------------

### Start Backend

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   cd backend  php artisan serve --host=127.0.0.1 --port=8000   `

*   API will be available at http://127.0.0.1:8000/api.
    

### Start Frontend

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   cd frontend  npm run dev   `

*   App will run at http://localhost:3000.
    
*   Verify by visiting http://localhost:3000 and checking that notes load.
    

API Reference
-------------

MethodEndpointDescriptionGET/notesList all notesPOST/notesCreate a new noteGET/notes/{id}Get a single notePUT/notes/{id}Update an existing noteDELETE/notes/{id}Delete a note

**Example**:

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   curl http://localhost:8000/api/notes   `

Project Structure
-----------------

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   backend/  ├── app/  │   ├── Http/Controllers/NoteController.php  │   └── Models/Note.php  ├── database/  │   ├── migrations/  │   └── database.sqlite  ├── routes/api.php  ├── .env  └── ...  frontend/  ├── pages/  │   └── index.tsx  ├── lib/  │   └── api.ts  ├── styles/  │   └── globals.css  ├── .env.local  └── ...   `

Contributing
------------

1.  Fork the repository.
    
2.  Create a feature branch: git checkout -b feature/YourFeature.
    
3.  Commit your changes: git commit -m "Add YourFeature".
    
4.  Push to branch: git push origin feature/YourFeature.
    
5.  Open a pull request.
    

Please adhere to coding standards and include descriptive commit messages.

Troubleshooting
---------------

*   **SQLSTATE\[HY000\]: General error: 14 unable to open database file**: Ensure database/ directory exists and is writable.
    
*   **CORS errors**: Check config/cors.php and whitelist http://localhost:3000.
    
*   **Env variables not loaded**: Restart dev servers after updating .env or .env.local.
