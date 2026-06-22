<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

/* ===== Scrollbar ===== */
::-webkit-scrollbar { width: 8px; }
::-webkit-scrollbar-track { background: var(--gray-100); }
::-webkit-scrollbar-thumb { background: var(--gray-400); border-radius: 4px; }
::-webkit-scrollbar-thumb:hover { background: var(--gray-500); }

/* ===== Navbar ===== */
.navbar {
  background: rgba(255,255,255,0.95);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--gray-200);
  padding: 0 24px;
  position: sticky;
  top: 0;
  z-index: 1000;
  height: 72px;
}
.navbar .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 100%;
}
.navbar .logo {
  font-size: 24px;
  font-weight: 800;
  background: var(--gradient-1);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.navbar nav ul { display: flex; align-items: center; gap: 4px; }
.navbar nav a {
  padding: 8px 18px;
  border-radius: var(--radius-sm);
  color: var(--gray-600);
  font-weight: 500;
  font-size: 14px;
  transition: var(--transition);
}
.navbar nav a:hover, .navbar nav a.active {
  background: rgba(108, 99, 255, 0.08);
  color: var(--primary);
}

/* ===== Hero / Showcase ===== */
.hero {
  background: var(--gradient-3);
  min-height: 520px;
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
}
.hero::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -20%;
  width: 600px;
  height: 600px;
  background: rgba(255,255,255,0.05);
  border-radius: 50%;
}
.hero::after {
  content: '';
  position: absolute;
  bottom: -30%;
  left: -10%;
  width: 400px;
  height: 400px;
  background: rgba(255,255,255,0.05);
  border-radius: 50%;
}
.hero .container { position: relative; z-index: 1; }
.hero h1 { font-size: 48px; font-weight: 800; color: #fff; line-height: 1.2; margin-bottom: 16px; }
.hero p { font-size: 18px; color: rgba(255,255,255,0.85); max-width: 520px; margin-bottom: 32px; line-height: 1.6; }
.hero .btn-group { display: flex; gap: 16px; flex-wrap: wrap; }

/* ===== Hero Form ===== */
.hero-form {
  background: #fff;
  border-radius: var(--radius-lg);
  padding: 40px;
  box-shadow: var(--shadow-lg);
  max-width: 440px;
  width: 100%;
}
.hero-form h2 { font-size: 22px; font-weight: 700; color: var(--dark); margin-bottom: 4px; }
.hero-form p { color: var(--gray-500); font-size: 14px; margin-bottom: 24px; }
.hero-form .form-group { margin-bottom: 18px; }
.hero-form label {
  display: block;
  font-size: 13px;
  font-weight: 600;
  color: var(--gray-700);
  margin-bottom: 6px;
}
.hero-form input, .hero-form select {
  width: 100%;
  padding: 12px 16px;
  border: 2px solid var(--gray-200);
  border-radius: var(--radius-sm);
  font-size: 15px;
  transition: var(--transition);
  background: var(--gray-100);
  color: var(--dark);
}
.hero-form input:focus, .hero-form select:focus {
  outline: none;
  border-color: var(--primary);
  background: #fff;
  box-shadow: 0 0 0 4px rgba(108, 99, 255, 0.1);
}
.hero-form .btn { width: 100%; justify-content: center; padding: 14px; font-size: 16px; }

/* ===== Stats Section ===== */
.section-title {
  text-align: center;
  font-size: 32px;
  font-weight: 800;
  color: var(--dark);
  margin-bottom: 8px;
}
.section-subtitle {
  text-align: center;
  color: var(--gray-500);
  font-size: 16px;
  max-width: 560px;
  margin: 0 auto 48px;
  line-height: 1.6;
}

/* ===== Services Cards ===== */
.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 24px;
}
.service-card {
  background: #fff;
  border-radius: var(--radius);
  padding: 32px 24px;
  text-align: center;
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
  position: relative;
  overflow: hidden;
}
.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
}
.service-card:nth-child(1)::before { background: var(--gradient-1); }
.service-card:nth-child(2)::before { background: var(--gradient-3); }
.service-card:nth-child(3)::before { background: var(--gradient-4); }
.service-card:nth-child(4)::before { background: var(--gradient-5); }
.service-card:nth-child(5)::before { background: linear-gradient(135deg, #FFD93D, #FF6B6B); }

.service-card:hover {
  transform: translateY(-8px);
  box-shadow: var(--shadow-lg);
}
.service-card .icon {
  width: 56px;
  height: 56px;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 16px;
  font-size: 24px;
  color: #fff;
}
.service-card:nth-child(1) .icon { background: var(--gradient-1); }
.service-card:nth-child(2) .icon { background: var(--gradient-3); }
.service-card:nth-child(3) .icon { background: var(--gradient-4); }
.service-card:nth-child(4) .icon { background: var(--gradient-5); }
.service-card:nth-child(5) .icon { background: linear-gradient(135deg, #FFD93D, #FF6B6B); }

.service-card h3 { font-size: 18px; font-weight: 700; color: var(--dark); margin-bottom: 8px; }
.service-card p { font-size: 14px; color: var(--gray-600); line-height: 1.5; margin-bottom: 20px; }
.service-card .btn { width: 100%; justify-content: center; }

/* ===== Image Gallery ===== */
.gallery-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  grid-template-rows: 200px 200px;
  gap: 16px;
}
.gallery-grid img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: var(--radius);
  transition: var(--transition);
}
.gallery-grid img:hover { transform: scale(1.02); }
.gallery-grid > :first-child { grid-row: 1 / 3; }

/* ===== CTA Section ===== */
.cta {
  background: var(--gradient-3);
  padding: 80px 0;
  text-align: center;
}
.cta h2 { font-size: 36px; font-weight: 800; color: #fff; margin-bottom: 12px; }
.cta p { color: rgba(255,255,255,0.85); font-size: 18px; max-width: 560px; margin: 0 auto 32px; }

/* ===== Features Page ===== */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 24px;
}
.feature-card {
  background: #fff;
  border-radius: var(--radius);
  padding: 32px;
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
  display: flex;
  gap: 20px;
  align-items: flex-start;
}
.feature-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.feature-card .icon {
  min-width: 48px;
  height: 48px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  color: #fff;
}
.feature-card h3 { font-size: 16px; font-weight: 700; margin-bottom: 4px; }
.feature-card p { font-size: 14px; color: var(--gray-600); line-height: 1.5; }

/* ===== Tables ===== */
.table-container {
  background: #fff;
  border-radius: var(--radius);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  margin: 24px 0;
}
.table-container table { width: 100%; border-collapse: collapse; }
.table-container th {
  background: var(--gray-100);
  color: var(--gray-700);
  font-weight: 600;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  padding: 14px 18px;
  text-align: left;
  border-bottom: 2px solid var(--gray-200);
}
.table-container td {
  padding: 14px 18px;
  border-bottom: 1px solid var(--gray-100);
  font-size: 14px;
  color: var(--gray-700);
}
.table-container tr:last-child td { border-bottom: none; }
.table-container tr:hover td { background: rgba(108, 99, 255, 0.04); }

/* ===== Action Buttons ===== */
.action-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 14px;
  border: none;
  border-radius: 6px;
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
  transition: var(--transition);
  color: #fff;
}
.action-btn:hover { transform: translateY(-1px); box-shadow: var(--shadow-sm); }
.action-btn.edit { background: var(--gradient-5); }
.action-btn.delete { background: var(--gradient-4); }
.action-btn.view { background: var(--gradient-3); }
.action-btn-group { display: flex; gap: 6px; flex-wrap: wrap; }

/* ===== Search Bar ===== */
.search-bar {
  display: flex;
  gap: 12px;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom: 24px;
}
.search-bar input[type="search"] {
  flex: 1;
  min-width: 200px;
  padding: 12px 18px;
  border: 2px solid var(--gray-200);
  border-radius: var(--radius-sm);
  font-size: 15px;
  transition: var(--transition);
  background: #fff;
}
.search-bar input[type="search"]:focus {
  outline: none;
  border-color: var(--primary);
  box-shadow: 0 0 0 4px rgba(108, 99, 255, 0.1);
}
.search-bar input[type="submit"] {
  padding: 12px 24px;
  background: var(--gradient-1);
  color: #fff;
  border: none;
  border-radius: var(--radius-sm);
  font-weight: 600;
  cursor: pointer;
  transition: var(--transition);
}
.search-bar input[type="submit"]:hover { transform: translateY(-2px); box-shadow: var(--shadow-md); }

/* ===== Quick Actions Menu ===== */
.quick-actions {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  justify-content: center;
}
.quick-action {
  padding: 14px 28px;
  border-radius: var(--radius-sm);
  font-weight: 600;
  font-size: 14px;
  transition: var(--transition);
  color: #fff;
  text-align: center;
}
.quick-action:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }

/* ===== Form Card ===== */
.form-card {
  background: #fff;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  padding: 40px;
  width: 100%;
  max-width: 480px;
}
.form-card h2 { font-size: 24px; font-weight: 700; margin-bottom: 4px; }
.form-card .subtitle { color: var(--gray-500); font-size: 14px; margin-bottom: 28px; }
.form-group { margin-bottom: 20px; }
.form-group label {
  display: block;
  font-size: 13px;
  font-weight: 600;
  color: var(--gray-700);
  margin-bottom: 6px;
}
.form-group input, .form-group select {
  width: 100%;
  padding: 12px 16px;
  border: 2px solid var(--gray-200);
  border-radius: var(--radius-sm);
  font-size: 15px;
  transition: var(--transition);
  background: var(--gray-100);
  color: var(--dark);
}
.form-group input:focus, .form-group select:focus {
  outline: none;
  border-color: var(--primary);
  background: #fff;
  box-shadow: 0 0 0 4px rgba(108, 99, 255, 0.1);
}
.form-divider {
  text-align: center;
  margin: 24px 0;
  color: var(--gray-400);
  font-size: 13px;
  position: relative;
}
.form-divider::before, .form-divider::after {
  content: '';
  position: absolute;
  top: 50%;
  width: 45%;
  height: 1px;
  background: var(--gray-200);
}
.form-divider::before { left: 0; }
.form-divider::after { right: 0; }

/* ===== Footer ===== */
.footer {
  background: var(--dark);
  color: #fff;
  padding: 48px 0 32px;
}
.footer h3 { font-size: 20px; font-weight: 800; background: var(--gradient-1); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 8px; }
.footer p { color: var(--gray-500); font-size: 14px; }
.footer nav a { color: var(--gray-400); font-size: 14px; transition: var(--transition); }
.footer nav a:hover { color: #fff; }
.footer .social a { color: var(--gray-400); font-size: 20px; transition: var(--transition); margin: 0 12px; }
.footer .social a:hover { color: var(--primary); }

/* ===== Tree Styles ===== */
.tree-container {
  padding: 40px 20px;
  overflow-x: auto;
}
.tree { display: flex; justify-content: center; }
.tree ul {
  padding-top: 30px;
  position: relative;
  display: flex;
  justify-content: center;
  list-style: none;
  margin: 0;
  padding-left: 0;
}
.tree ul.tree-children { display: flex; justify-content: center; }
.tree li {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  padding: 30px 10px 0 10px;
  list-style: none;
}
.tree li::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  border-left: 2px solid var(--gray-300);
  width: 0;
  height: 30px;
}
.tree li::after {
  content: '';
  position: absolute;
  top: 30px;
  left: 0;
  right: 0;
  border-top: 2px solid var(--gray-300);
}
.tree li:first-child::after { left: 50%; }
.tree li:last-child::after { right: 50%; }
.tree li:only-child::after { display: none; }
.tree li:only-child::before { display: none; }
.tree > li::before, .tree > li::after { display: none; }
.tree-node { display: flex; flex-direction: column; align-items: center; }
.tree-person {
  background: #fff;
  border: 2px solid var(--gray-200);
  border-radius: var(--radius);
  padding: 16px 24px;
  text-align: center;
  box-shadow: var(--shadow-sm);
  position: relative;
  z-index: 2;
  min-width: 150px;
  transition: var(--transition);
  cursor: pointer;
}
.tree-person:hover {
  border-color: var(--primary);
  box-shadow: var(--shadow-md);
  transform: translateY(-3px);
}
.tree-person .name { font-size: 15px; font-weight: 700; color: var(--dark); }
.tree-person .detail { font-size: 12px; color: var(--gray-500); margin-top: 4px; }
.tree-person .detail.death { color: var(--secondary); }
.tree-person .partner {
  font-size: 13px;
  color: var(--primary);
  margin-top: 6px;
  font-weight: 600;
}

/* ===== Page Header ===== */
.page-header {
  background: #fff;
  border-bottom: 1px solid var(--gray-200);
  padding: 32px 0;
}
.page-header h1 { font-size: 28px; font-weight: 800; }
.page-header p { color: var(--gray-500); font-size: 15px; margin-top: 4px; }

/* ===== Spacing helpers ===== */
.section { padding: 80px 0; }
.section-sm { padding: 40px 0; }

/* ============================================================
   ANIMATIONS
   ============================================================ */

/* --- Smooth scroll --- */
html { scroll-behavior: smooth; }

/* --- Keyframes --- */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(40px); }
  to { opacity: 1; transform: translateY(0); }
}
@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-40px); }
  to { opacity: 1; transform: translateY(0); }
}
@keyframes fadeInLeft {
  from { opacity: 0; transform: translateX(-60px); }
  to { opacity: 1; transform: translateX(0); }
}
@keyframes fadeInRight {
  from { opacity: 0; transform: translateX(60px); }
  to { opacity: 1; transform: translateX(0); }
}
@keyframes scaleIn {
  from { opacity: 0; transform: scale(0.85); }
  to { opacity: 1; transform: scale(1); }
}
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
@keyframes pulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.05); }
}
@keyframes shimmer {
  0% { background-position: -200% 0; }
  100% { background-position: 200% 0; }
}
@keyframes spin {
  to { transform: rotate(360deg); }
}
@keyframes typing {
  from { width: 0; }
  to { width: 100%; }
}
@keyframes blink {
  50% { border-color: transparent; }
}
@keyframes gradientShift {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
@keyframes treeGrow {
  from { opacity: 0; transform: scaleY(0); }
  to { opacity: 1; transform: scaleY(1); }
}
@keyframes particleFloat {
  0% { transform: translateY(0) rotate(0deg); opacity: 0; }
  20% { opacity: 1; }
  100% { transform: translateY(-200px) rotate(720deg); opacity: 0; }
}
@keyframes ripple {
  to { transform: scale(4); opacity: 0; }
}

/* --- Entrance classes (applied by JS on scroll) --- */
.animate { opacity: 0; }
.animate-up { opacity: 0; }
.animate-down { opacity: 0; }
.animate-left { opacity: 0; }
.animate-right { opacity: 0; }
.animate-scale { opacity: 0; }

.animate.visible { animation: fadeInUp 0.7s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
.animate-up.visible { animation: fadeInUp 0.7s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
.animate-down.visible { animation: fadeInDown 0.7s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
.animate-left.visible { animation: fadeInLeft 0.7s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
.animate-right.visible { animation: fadeInRight 0.7s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
.animate-scale.visible { animation: scaleIn 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards; }

/* Stagger children */
.stagger > * { opacity: 0; }
.stagger.visible > *:nth-child(1) { animation: fadeInUp 0.5s 0.05s forwards; }
.stagger.visible > *:nth-child(2) { animation: fadeInUp 0.5s 0.12s forwards; }
.stagger.visible > *:nth-child(3) { animation: fadeInUp 0.5s 0.19s forwards; }
.stagger.visible > *:nth-child(4) { animation: fadeInUp 0.5s 0.26s forwards; }
.stagger.visible > *:nth-child(5) { animation: fadeInUp 0.5s 0.33s forwards; }
.stagger.visible > *:nth-child(6) { animation: fadeInUp 0.5s 0.40s forwards; }
.stagger.visible > *:nth-child(7) { animation: fadeInUp 0.5s 0.47s forwards; }
.stagger.visible > *:nth-child(8) { animation: fadeInUp 0.5s 0.54s forwards; }

/* --- Hero animations --- */
.hero h1 { animation: fadeInUp 0.8s ease-out; }
.hero p { animation: fadeInUp 0.8s 0.15s ease-out both; }
.hero .btn-group { animation: fadeInUp 0.8s 0.3s ease-out both; }
.hero-form { animation: fadeInRight 0.8s 0.2s ease-out both; }

/* Hero floating orbs */
.hero::before { animation: float 6s ease-in-out infinite; }
.hero::after { animation: float 8s ease-in-out infinite reverse; }

/* --- Hover animations --- */
.btn:hover { animation: pulse 0.6s ease-in-out; }
.btn-primary:not(:hover) { animation: none; }

.service-card {
  transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.4s ease;
}
.service-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: var(--shadow-lg);
}
.service-card .icon { transition: transform 0.4s ease; }
.service-card:hover .icon { transform: scale(1.15) rotate(-5deg); }

.feature-card {
  transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.4s ease;
}
.feature-card:hover { transform: translateY(-6px) scale(1.01); }
.feature-card .icon { transition: transform 0.4s ease; }
.feature-card:hover .icon { transform: scale(1.1) rotate(5deg); }

.gallery-grid img { transition: transform 0.5s ease, box-shadow 0.5s ease; }
.gallery-grid img:hover { transform: scale(1.04); box-shadow: var(--shadow-lg); z-index: 2; position: relative; }

.quick-action { transition: transform 0.3s ease, box-shadow 0.3s ease; }
.quick-action:hover { transform: translateY(-4px) scale(1.03); }

.action-btn { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
.action-btn:hover { transform: translateY(-2px) scale(1.05); }

.navbar nav a { position: relative; }
.navbar nav a::after {
  content: '';
  position: absolute;
  bottom: 4px;
  left: 50%;
  width: 0;
  height: 2px;
  background: var(--primary);
  transition: all 0.3s ease;
  transform: translateX(-50%);
  border-radius: 2px;
}
.navbar nav a:hover::after,
.navbar nav a.active::after { width: 60%; }

/* --- Table row animation --- */
.table-container tbody tr {
  animation: fadeInUp 0.4s ease-out both;
}
.table-container tbody tr:nth-child(1) { animation-delay: 0.02s; }
.table-container tbody tr:nth-child(2) { animation-delay: 0.06s; }
.table-container tbody tr:nth-child(3) { animation-delay: 0.10s; }
.table-container tbody tr:nth-child(4) { animation-delay: 0.14s; }
.table-container tbody tr:nth-child(5) { animation-delay: 0.18s; }
.table-container tbody tr:nth-child(6) { animation-delay: 0.22s; }
.table-container tbody tr:nth-child(7) { animation-delay: 0.26s; }
.table-container tbody tr:nth-child(8) { animation-delay: 0.30s; }
.table-container tbody tr:nth-child(9) { animation-delay: 0.34s; }
.table-container tbody tr:nth-child(10) { animation-delay: 0.38s; }
.table-container tbody tr:hover { animation: none; }

/* --- Tree animations --- */
.tree-person {
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}
.tree-person:hover {
  transform: translateY(-5px) scale(1.05);
  border-color: var(--primary);
  box-shadow: 0 12px 40px rgba(108, 99, 255, 0.25);
}
.tree li {
  animation: fadeInUp 0.5s ease-out both;
}
.tree li:nth-child(1) { animation-delay: 0.1s; }
.tree li:nth-child(2) { animation-delay: 0.2s; }
.tree li:nth-child(3) { animation-delay: 0.3s; }
.tree li:nth-child(4) { animation-delay: 0.4s; }
.tree li:nth-child(5) { animation-delay: 0.5s; }

/* Tree lines animation */
.tree li::before {
  transition: height 0.6s ease;
  height: 30px;
}
.tree li:hover::before { height: 40px; }

/* --- Page transition --- */
body {
  animation: fadeInUp 0.5s ease-out;
}

/* --- CTA gradient animation --- */
.cta { background-size: 200% 200%; animation: gradientShift 8s ease infinite; }

/* --- Loading spinner --- */
.spinner {
  width: 40px; height: 40px;
  border: 4px solid var(--gray-200);
  border-top-color: var(--primary);
  border-radius: 50%;
  animation: spin 0.8s linear infinite;
  margin: 20px auto;
}

/* --- Skeleton loading --- */
.skeleton {
  background: linear-gradient(90deg, var(--gray-200) 25%, var(--gray-100) 50%, var(--gray-200) 75%);
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
  border-radius: var(--radius-sm);
}

/* --- Ripple button effect --- */
.btn-ripple { position: relative; overflow: hidden; }
.btn-ripple::after {
  content: '';
  position: absolute;
  top: 50%; left: 50%;
  width: 20px; height: 20px;
  background: rgba(255,255,255,0.3);
  border-radius: 50%;
  transform: translate(-50%, -50%) scale(0);
}
.btn-ripple:active::after { animation: ripple 0.6s ease-out; }

/* --- Notification toast --- */
.toast {
  position: fixed;
  bottom: 24px;
  right: 24px;
  background: var(--dark);
  color: #fff;
  padding: 16px 24px;
  border-radius: var(--radius-sm);
  box-shadow: var(--shadow-lg);
  animation: fadeInUp 0.4s ease-out;
  z-index: 9999;
}
.toast.leaving { animation: fadeInUp 0.4s ease-out reverse forwards; }

/* --- Counter animation --- */
.counter { display: inline-block; transition: all 0.3s ease; }

/* --- Tree-specific: grow lines on load --- */
.tree ul { animation: fadeInUp 0.8s ease-out; }

@media (max-width: 768px) {
  .hero { min-height: auto; padding: 60px 0; }
  .hero h1 { font-size: 32px; }
  .hero .container .grid-2 { grid-template-columns: 1fr; }
  .hero-form { margin-top: 32px; }
  .gallery-grid { grid-template-columns: 1fr 1fr; grid-template-rows: 150px 150px; }
  .gallery-grid > :first-child { grid-row: 1 / 2; }
  .navbar { height: auto; padding: 12px 16px; }
  .navbar .container { flex-direction: column; gap: 12px; }
  .navbar nav ul { flex-wrap: wrap; justify-content: center; }
  .navbar nav a { font-size: 13px; padding: 6px 12px; }
  .section { padding: 48px 0; }
  .section-title { font-size: 24px; }
  .features-grid { grid-template-columns: 1fr; }
  .quick-actions { flex-direction: column; align-items: stretch; }
  .quick-action { text-align: center; }
  .table-container { overflow-x: auto; }
  .action-btn-group { flex-direction: column; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 26px; }
  .hero-form { padding: 24px; }
  .form-card { padding: 24px; }
  .card2 { padding: 16px; }
}
</style>