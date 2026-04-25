<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
  </head>
<body>
<div class="dashboard">
    <aside class="sidebar">
        <div class="logo">
            <h2>Ügyvédi Iroda</h2>
        </div>

        <nav class="menu">
            <ul>
              
                <li><a href="/about">Irányítópult</a></li>
                <li><a href="#">Ügyek</a></li>
                <li><a href="#">Naptár</a></li>
                <li><a href="#">Feladatok</a></li>
                <li><a href="#">Időnyilvántartás</a></li>
                <li><a href="#">Ügyfelek</a></li>
                <li><a href="#">Dokumentumok</a></li>
                <li><a href="#">Levelezés</a></li>
            </ul>
        </nav>
    </aside>
    <main class="main">
        <header class="topbar">
            <h1>Irányítópult</h1>
            <div class="search-box">
                <input type="text" placeholder="Keresés...">
            </div>
        </header>
        <section class="first-cards">
            <div class="card">
                <h3>Folyamatban lévő ügyek</h3>
                <p>24</p>
            </div>

            <div class="card">
                <h3>Lezárt ügyek</h3>
                <p>18</p>
            </div>

            <div class="card">
                <h3>Közelgő határidők</h3>
                <p>7</p>
            </div>

            <div class="card">
                <h3>Munkaórák</h3>
                <p>42,5 óra</p>
            </div>
        </section>

        <section class="cases">
            <div class="section">
                <h2>Ügyek</h2>
                <button>+ Új ügy létrehozása</button>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Ügy azonosító</th>
                        <th>Ügy tárgya</th>
                        <th>Ügyfél</th>
                        <th>Állapot</th>
                        <th>Kezdő dátum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ü-2024-0012</td>
                        <td>Adásvételi szerződés vita</td>
                        <td>Nagy Éva</td>
                        <td>Folyamatban</td>
                        <td>2024.01.15.</td>
                    </tr>

                    <tr>
                        <td>Ü-2024-0011</td>
                        <td>Munkajogi tanácsadás</td>
                        <td>Kovács András</td>
                        <td>Folyamatban</td>
                        <td>2024.02.03.</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="documents-section">
            <h2>Dokumentumok</h2>
            <table class="documents-table">
                <thead>
                    <tr>
                        <th>Dokumentum neve</th>
                        <th>Típus</th>
                        <th>Feltöltés dátuma</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Keresetlevél.pdf</td>
                        <td>Beadvány</td>
                        <td>2024.01.16.</td>
                    </tr>

                    <tr>
                        <td>Szerződés.docx</td>
                        <td>Szerződés</td>
                        <td>2024.01.15.</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>

</div>

</body>
</html>