<style>
:root {
  --primary: #6C63FF;
  --primary-dark: #5A52D5;
  --secondary: #FF6B6B;
  --accent: #FFD93D;
  --success: #2ED573;
  --warning: #FFA502;
  --dark: #2D3436;
  --gray-100: #F8F9FA;
  --gray-200: #E9ECEF;
  --gray-300: #DEE2E6;
  --gray-400: #CED4DA;
  --gray-500: #ADB5BD;
  --gray-600: #6C757D;
  --gray-700: #495057;
  --gradient-1: linear-gradient(135deg, #6C63FF, #FF6B6B);
  --gradient-2: linear-gradient(135deg, #6C63FF, #FFD93D);
  --gradient-3: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  --gradient-4: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
  --gradient-5: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
  --shadow-sm: 0 2px 8px rgba(108, 99, 255, 0.08);
  --shadow-md: 0 8px 30px rgba(108, 99, 255, 0.12);
  --shadow-lg: 0 20px 60px rgba(108, 99, 255, 0.2);
  --radius: 16px;
  --radius-sm: 8px;
  --radius-lg: 24px;
  --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

* { box-sizing: border-box; padding: 0; margin: 0; }

body {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  color: var(--dark);
  line-height: 1.6;
  background: var(--gray-100);
  -webkit-font-smoothing: antialiased;
}

a { text-decoration: none; color: inherit; }
ul { list-style: none; }

.container { max-width: 1140px; margin: 0 auto; padding: 0 24px; }

.card {
  background: #fff;
  border-radius: var(--radius);
  box-shadow: var(--shadow-sm);
  transition: var(--transition);
}
.card:hover { box-shadow: var(--shadow-md); }

.card2 {
  background: #fff;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-sm);
  padding: 40px;
  margin: 20px auto;
  max-width: 1200px;
}

.flex { display: flex; align-items: center; }
.flex-center { display: flex; align-items: center; justify-content: center; }
.flex-between { display: flex; align-items: center; justify-content: space-between; }
.flex-wrap { flex-wrap: wrap; }
.gap-1 { gap: 8px; }
.gap-2 { gap: 16px; }
.gap-3 { gap: 24px; }
.gap-4 { gap: 32px; }

.grid {
  display: grid;
  gap: 24px;
}
.grid-2 { grid-template-columns: repeat(2, 1fr); }
.grid-3 { grid-template-columns: repeat(3, 1fr); }
.grid-4 { grid-template-columns: repeat(4, 1fr); }

.text-center { text-align: center; }
.text-primary { color: var(--primary); }
.text-white { color: #fff; }
.text-muted { color: var(--gray-500); }
.text-sm { font-size: 14px; }
.text-lg { font-size: 20px; }
.text-xl { font-size: 24px; }
.text-2xl { font-size: 32px; }
.text-3xl { font-size: 40px; }
.font-bold { font-weight: 700; }
.font-semibold { font-weight: 600; }

.my-1 { margin: 8px 0; }
.my-2 { margin: 16px 0; }
.my-3 { margin: 24px 0; }
.my-4 { margin: 32px 0; }
.my-5 { margin: 48px 0; }
.mx-auto { margin-left: auto; margin-right: auto; }

.py-1 { padding: 8px 0; }
.py-2 { padding: 16px 0; }
.py-3 { padding: 24px 0; }
.py-4 { padding: 32px 0; }
.py-5 { padding: 48px 0; }
.p-1 { padding: 8px; }
.p-2 { padding: 16px; }
.p-3 { padding: 24px; }
.p-4 { padding: 32px; }
.p-5 { padding: 48px; }

.btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 28px;
  border: none;
  border-radius: var(--radius-sm);
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: var(--transition);
  text-decoration: none;
}
.btn:hover { transform: translateY(-2px); box-shadow: var(--shadow-md); }
.btn-primary { background: var(--gradient-1); color: #fff; }
.btn-secondary { background: var(--gradient-3); color: #fff; }
.btn-outline { background: transparent; border: 2px solid rgba(255,255,255,0.4); color: #fff; }
.btn-outline:hover { background: rgba(255,255,255,0.1); border-color: #fff; }
.btn-dark { background: var(--dark); color: #fff; }
.btn-sm { padding: 8px 18px; font-size: 13px; }
.btn-block { width: 100%; justify-content: center; }

input, select, textarea {
  font-family: inherit;
}

.bg-gradient-1 { background: var(--gradient-1); }
.bg-gradient-2 { background: var(--gradient-3); }
.bg-gradient-3 { background: var(--gradient-4); }
.bg-gradient-4 { background: var(--gradient-5); }

@media (max-width: 768px) {
  .grid-2, .grid-3, .grid-4 { grid-template-columns: 1fr; }
  .container { padding: 0 16px; }
  .card2 { padding: 20px; }
  .text-2xl { font-size: 24px; }
  .text-3xl { font-size: 28px; }
}
</style>