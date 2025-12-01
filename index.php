<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Portfolio of Dave Anshul — BCA student, web & Android developer.">
  <title>Dave Anshul — Portfolio</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="site">
    <header class="topbar" role="banner">
      <a class="brand" href="#">
        <div class="logo" aria-hidden="true">DA</div>
        <div class="brand-text">
          <div class="name">Dave Anshul</div>
          <div class="subtitle">BCA • Web & Android Developer</div>
        </div>
      </a>

      <button id="menuToggle" class="menu-toggle" aria-expanded="false" aria-controls="siteNav">☰</button>

      <nav id="siteNav" class="nav" role="navigation">
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#skills">Skills</a>
        <a href="#experience">Experience</a>
        <a href="#education">Education</a>
        <a href="#contact">Contact</a>
        <a class="btn ghost small" href="resume.php">Download Resume</a>
      </nav>
    </header>

    <main class="container" id="main">
      <aside class="left-card card" aria-label="Profile and quick info">
        <div class="profile">
          <img src="Image/profile.jpg" alt="Profile Photo" class="profile-img">
          <div class="profile-meta">
            <h1 class="h-name">Dave Anshul</h1>
            <p class="muted small">BCA Student • Web & Android Developer</p>
          </div>
        </div>

        <div class="card-section">
          <h3 class="section-title">Contact</h3>
          <p class="muted">📞 <strong>88499 19418</strong></p>
          <p class="muted">✉️ <strong>ahdave1573@gmail.com</strong></p>
          <p class="muted">📍 Rajkot, Gujarat</p>
        </div>

        <div class="card-section">
          <h3 class="section-title">Objective</h3>
          <p class="muted small">Seeking an entry-level role in web or mobile development to apply skills in PHP, Java, and frontend technologies while contributing to real-world projects.</p>
        </div>

        <div class="card-section">
          <h3 class="section-title">Quick Links</h3>
          <div class="links">
            <a class="btn ghost" href="resume.php">Download Resume</a>
            <a class="btn" href="mailto:ahdave1573@gmail.com">Email Me</a>
          </div>

          <div class="socials">
            <a href="#" target="_blank" rel="noopener">GitHub</a> ·
            <a href="#" target="_blank" rel="noopener">LinkedIn</a> ·
            <a href="#" target="_blank" rel="noopener">Portfolio</a>
          </div>
        </div>

        <div class="card-section">
          <h3 class="section-title">Tech Skills</h3>
          <div class="skill-pill">HTML / CSS / JS</div>
          <div class="skill-pill">PHP • MySQL</div>
          <div class="skill-pill">Android (Java)</div>
          <div class="skill-pill">Python</div>
          <div class="skill-pill">Firebase</div>
        </div>
      </aside>

      <section class="right-card">
        <article id="about" class="card main-card">
          <h2 class="section-title">About</h2>
          <p>I'm a motivated BCA student with hands-on experience building responsive websites and Android apps. I developed <strong>QuickBite</strong> — a PHP/MySQL food ordering system with login, cart and admin panel.</p>
        </article>

        <article id="projects" class="card main-card">
          <h2 class="section-title">Projects</h2>

          <div class="project">
            <h3>QuickBite — Online Food Ordering System</h3>
            <p class="muted">HTML • CSS • PHP • MySQL • JavaScript</p>
            <p>A full-stack food ordering system with authentication, menu browsing, cart, checkout & admin dashboard.</p>
          </div>

          <div class="project">
            <h3>Android Chat App (Firebase)</h3>
            <p class="muted">Android (Java) • Firebase</p>
            <p>Realtime chat with login, profile images and message persistence.</p>
          </div>
        </article>

        <article id="skills" class="card main-card">
          <h2 class="section-title">Skills</h2>

          <div class="skill-row"><span class="skill-label">Frontend</span><div class="bar"><div class="fill" style="width:85%"></div></div><span class="skill-value">85%</span></div>
          <div class="skill-row"><span class="skill-label">Backend (PHP/MySQL)</span><div class="bar"><div class="fill" style="width:75%"></div></div><span class="skill-value">75%</span></div>
          <div class="skill-row"><span class="skill-label">Android (Java)</span><div class="bar"><div class="fill" style="width:78%"></div></div><span class="skill-value">78%</span></div>
          <div class="skill-row"><span class="skill-label">Python/Data</span><div class="bar"><div class="fill" style="width:65%"></div></div><span class="skill-value">65%</span></div>
        </article>

        <article id="experience" class="card main-card">
          <h2 class="section-title">Experience</h2>
          <ul class="muted">
            <li>Built QuickBite — full-stack PHP/MySQL application</li>
            <li>Developed Firebase Android chat app</li>
            <li>Completed OOP, Data Science & Web Dev projects</li>
          </ul>
        </article>

        <article id="education" class="card main-card">
          <h2 class="section-title">Education</h2>
          <p><strong>BCA — Atmiya University (2023–2026)</strong></p>
          <p class="muted">CGPA: 7.95</p>
        </article>

        <article id="contact" class="card main-card">
          <h2 class="section-title">Contact</h2>
          <p>📞 <strong>88499 19418</strong></p>
          <p>✉️ <strong>ahdave1573@gmail.com</strong></p>
          <p class="muted">Rajkot, Gujarat</p>
        </article>
      </section>
    </main>

    <footer class="footer">© 2025 • Portfolio — Dave Anshul</footer>
  </div>

  <script>
    const btn = document.getElementById('menuToggle');
    const nav = document.getElementById('siteNav');
    btn.addEventListener('click', () => {
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!expanded));
      nav.classList.toggle('open');
    });
  </script>
</body>
</html>
