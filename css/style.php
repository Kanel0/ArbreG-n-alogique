<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap');

:root {
  --primary-color: #047aed;
  --secondary-color: #1c3fa8;
  --dark-color: #002240;
  --light-color: #f4f4f4;
  --success-color: #5cb85c;
  --error-color: #d9534f;
  --accent-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  --card-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
  --card-radius: 16px;
}

* { box-sizing: border-box; padding: 0; margin: 0; }

body {
  font-family: 'Lato', sans-serif;
  color: #333;
  line-height: 1.6;
  background: #f8f9fa;
}

ul { list-style-type: none; }
a { text-decoration: none; color: #333; }

h1, h2 { font-weight: 300; line-height: 1.2; margin: 10px 0; }
p { margin: 10px 0; }
img { width: 100%; }

code, pre {
  background: #333;
  color: #fff;
  padding: 10px;
}

.hidden { visibility: hidden; height: 0; }

/* ===== Navbar ===== */
.navbar {
  background: var(--accent-gradient);
  color: #fff;
  height: 70px;
  box-shadow: 0 2px 15px rgba(102, 126, 234, 0.3);
}

.navbar ul { display: flex; }
.navbar a {
  color: #fff;
  padding: 10px 15px;
  margin: 0 5px;
  border-radius: 6px;
  transition: background 0.2s;
}
.navbar a:hover { background: rgba(255,255,255,0.15); border-bottom: none; }
.navbar .flex { justify-content: space-between; }

/* ===== Showcase ===== */
.showcase {
  min-height: 400px;
  background: var(--accent-gradient);
  color: #fff;
  position: relative;
}
.showcase h1 { font-size: 40px; }
.showcase p { margin: 20px 0; font-size: 18px; opacity: 0.95; }
.showcase .grid {
  overflow: visible;
  grid-template-columns: 55% auto;
  gap: 30px;
}
.showcase-text { animation: slideInFromLeft 1s ease-in; margin-bottom: auto; }

.showcase-form {
  position: relative;
  top: 60px;
  padding: 40px;
  z-index: 100;
  justify-self: flex-end;
  animation: slideInFromRight 1s ease-in;
  background: #fff;
  border-radius: var(--card-radius);
  box-shadow: var(--card-shadow);
}

.showcase-form .form-control { margin: 25px 0; }

.showcase-form input[type='text'],
.showcase-form input[type='email'],
.showcase-form input[type='date'],
.showcase-form input[type='password'],
.select {
  border: 0;
  border-bottom: 2px solid #e0e0e0;
  width: 100%;
  padding: 10px 3px;
  font-size: 16px;
  transition: border-color 0.2s;
  background: transparent;
}
.showcase-form input:focus { outline: none; border-bottom-color: var(--primary-color); }
.showcase-form input[type='date'],
.select { color: #666; }

.showcase::before,
.showcase::after {
  content: '';
  position: absolute;
  height: 100px;
  bottom: -70px;
  right: 0;
  left: 0;
  background: #f8f9fa;
  transform: skewY(-3deg);
}

/* ===== Stats ===== */
.stats { padding-top: 200px; animation: slideInFromBottom 1s ease-in; }
.stats-heading { max-width: 600px; margin: auto; font-size: 22px; color: #555; }
.stats .grid h3 { font-size: 35px; }
.stats .grid p { font-size: 20px; font-weight: bold; }

/* ===== Services Cards ===== */
.services {
  padding: 40px 0;
}
.services h1 {
  text-align: center;
  font-size: 32px;
  color: #333;
  margin-bottom: 30px;
}

.services__wrapper {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
  padding: 0 20px;
}

.services__card {
  background: var(--accent-gradient);
  border-radius: var(--card-radius);
  padding: 40px 25px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
  box-shadow: var(--card-shadow);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  min-height: 350px;
}

.services__card:nth-child(2) {
  background: linear-gradient(135deg, #a6ffcb 0%, #12d8fa 50%, #1fa2ff 100%);
  color: #1a1a2e;
}

.services__card:nth-child(3) {
  background: linear-gradient(135deg, #231557 0%, #44107a 29%, #ff1361 67%, #fff800 100%);
}

.services__card:nth-child(4) {
  background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
}

.services__card:nth-child(5) {
  background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
  color: #1a1a2e;
}

.services__card h2 { font-size: 24px; margin-bottom: 15px; }
.services__card p { font-size: 15px; opacity: 0.9; line-height: 1.5; }

.services__btn { margin-top: 20px; }

.services__card button {
  color: #fff;
  padding: 12px 28px;
  border: 2px solid rgba(255,255,255,0.6);
  outline: none;
  border-radius: 8px;
  background: transparent;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
}
.services__card:nth-child(2) button,
.services__card:nth-child(5) button {
  border-color: rgba(0,0,0,0.2);
  color: #1a1a2e;
}
.services__card button:hover {
  background: rgba(255,255,255,0.2);
  transform: scale(1.05);
}

.services__card:hover {
  transform: translateY(-8px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

/* ===== CLI Section ===== */
.cli { padding: 60px 0; }
.cli .grid {
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(2, 1fr);
}
.cli .grid > *:first-child {
  grid-column: 1 / span 2;
  grid-row: 1 / span 2;
}
.cli img {
  border-radius: 12px;
  height: 100%;
  object-fit: cover;
}
.cli .card { padding: 0; overflow: hidden; border-radius: 12px; }

/* ===== Cloud ===== */
.cloud {
  background: var(--accent-gradient) !important;
  padding: 60px 0;
}
.cloud .grid { grid-template-columns: 4fr 3fr; }
.cloud img { max-width: 250px; justify-self: center; }
.cloud h2 { color: #fff; }
.cloud p { color: rgba(255,255,255,0.9); }
.cloud .btn-dark {
  background: rgba(0,0,0,0.3);
  border: 2px solid rgba(255,255,255,0.3);
  color: #fff;
  padding: 12px 30px;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s;
}
.cloud .btn-dark:hover {
  background: rgba(0,0,0,0.5);
  transform: translateY(-2px);
}

/* ===== Features ===== */
.features-head { background: var(--accent-gradient) !important; padding: 40px 0; }
.features-head h1 { color: #fff; }
.features-head p { color: rgba(255,255,255,0.9); }
.features-head img, .docs-head img { width: 200px; justify-self: flex-end; }
.features-sub-head img { width: 300px; justify-self: flex-end; }
.features-main .card > i { margin-right: 20px; }
.features-main .grid { padding: 30px; }
.features-main .grid > *:first-child { grid-column: 1 / span 3; }
.features-main .grid > *:nth-child(2) { grid-column: 1 / span 2; }
.features-main .card {
  border-radius: var(--card-radius);
  box-shadow: var(--card-shadow);
  transition: transform 0.3s;
}
.features-main .card:hover { transform: translateY(-4px); }

/* ===== Docs / Member pages ===== */
.docs-main h3 { margin: 20px 0; }
.docs-main .grid { grid-template-columns: 1fr 2fr; align-items: flex-start; }
.docs-main nav li {
  font-size: 17px;
  padding-bottom: 5px;
  margin-bottom: 5px;
  border-bottom: 1px #ccc solid;
}
.docs-main a:hover { font-weight: bold; }

/* ===== Sidebar Menu ===== */
.card ul.list {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  justify-content: center;
  padding: 20px;
}
.card ul.list li {
  margin: 0;
}
.card ul.list a {
  font-size: 18px;
  padding: 12px 24px;
  background: var(--accent-gradient);
  color: #fff;
  border-radius: 10px;
  display: block;
  font-weight: 600;
  transition: all 0.3s;
  box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
}
.card ul.list a:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
}

/* ===== Table ===== */
.table-responsive {
  overflow-x: auto;
  margin: 20px 0;
}
table {
  width: 100%;
  border-collapse: collapse;
  text-align: left;
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0,0,0,0.06);
}
th {
  background: var(--accent-gradient);
  color: #fff;
  font-weight: 600;
  padding: 14px 12px;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
td {
  padding: 12px;
  border-bottom: 1px solid #f0f0f0;
  font-size: 14px;
}
tr:last-child td { border-bottom: none; }
tr:hover td { background: #f8f9ff; }

/* ===== Buttons in tables ===== */
td .btn-danger {
  background: var(--primary-color);
  color: #fff;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  cursor: pointer;
  font-size: 13px;
  font-weight: 600;
  transition: all 0.2s;
}
td .btn-danger:hover {
  opacity: 0.85;
  transform: translateY(-1px);
}
td a { margin: 0 3px; }

/* ===== Forms ===== */
.showcase-form h2 {
  color: #333;
  font-size: 28px;
  margin-bottom: 10px;
}
.showcase-form label {
  display: block;
  font-weight: 600;
  color: #555;
  margin-bottom: 5px;
  font-size: 14px;
}
.showcase-form input[type="submit"] {
  width: 100%;
  padding: 14px;
  font-size: 16px;
  font-weight: 600;
  border-radius: 10px;
  margin-top: 10px;
}

/* ===== Search ===== */
input[type="search"] {
  width: 300px;
  height: 42px;
  padding: 0 15px;
  border: 2px solid #e0e0e0;
  border-radius: 8px;
  font-size: 15px;
  transition: border-color 0.2s;
}
input[type="search"]:focus {
  outline: none;
  border-color: var(--primary-color);
}

/* ===== Footer ===== */
.footer {
  background: var(--dark-color) !important;
  color: #fff;
  padding: 40px 0;
}
.footer .social a {
  margin: 0 10px;
  color: #fff;
  font-size: 24px;
  transition: color 0.2s;
}
.footer a { color: rgba(255,255,255,0.8); }
.footer a:hover { color: #fff; }
.fa-facebook:hover { color: #1877F2; }
.fa-instagram:hover { color: #E4405F; }
.fa-twitter:hover { color: #1DA1F2; }

/* ===== Cards spacing ===== */
.cards1 { height: 40px; }
.car { width: 100%; }

/* ===== Animations ===== */
@keyframes slideInFromLeft {
  0% { transform: translateX(-100%); opacity: 0; }
  100% { transform: translateX(0); opacity: 1; }
}
@keyframes slideInFromRight {
  0% { transform: translateX(100%); opacity: 0; }
  100% { transform: translateX(0); opacity: 1; }
}
@keyframes slideInFromTop {
  0% { transform: translateY(-100%); opacity: 0; }
  100% { transform: translateX(0); opacity: 1; }
}
@keyframes slideInFromBottom {
  0% { transform: translateY(100%); opacity: 0; }
  100% { transform: translateX(0); opacity: 1; }
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
  .grid,
  .showcase .grid,
  .stats .grid,
  .cli .grid,
  .cloud .grid,
  .features-main .grid,
  .docs-main .grid {
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
  }
  .showcase { height: auto; }
  .showcase-text { text-align: center; margin-top: 40px; animation: slideInFromTop 1s ease-in; }
  .showcase-form { justify-self: center; margin: auto; }
  .cli .grid > *:first-child { grid-column: 1; grid-row: 1; }
  .features-head, .features-sub-head, .docs-head { text-align: center; }
  .features-head img, .features-sub-head img, .docs-head img { justify-self: center; }
  .features-main .grid > *:first-child,
  .features-main .grid > *:nth-child(2) { grid-column: 1; }
  .services__wrapper { grid-template-columns: repeat(2, 1fr); }
  input[type="search"] { width: 200px; }
}

@media (max-width: 500px) {
  .navbar { height: auto; padding: 10px 0; }
  .navbar .flex { flex-direction: column; }
  .navbar ul {
    padding: 10px;
    background: rgba(0,0,0,0.1);
    border-radius: 8px;
    margin-top: 10px;
  }
  .showcase-form { width: 100%; padding: 30px; }
  .services__wrapper { grid-template-columns: 1fr; }
  .services__card { min-height: 280px; }
  .cli .grid { grid-template-columns: 1fr; }
  .cloud .grid { grid-template-columns: 1fr; text-align: center; }
  .container { padding: 0 20px; }
  table { font-size: 12px; }
  th, td { padding: 8px 6px; }
  td .btn-danger { padding: 6px 10px; font-size: 11px; }
  .card2 { padding: 15px; }
}
</style>