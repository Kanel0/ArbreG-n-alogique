/**
 * ArbreG. - Animations
 * Scroll-triggered entrance animations
 */
document.addEventListener('DOMContentLoaded', function() {

  // ==========================================================
  // 1. Intersection Observer for scroll animations
  // ==========================================================
  const animateElements = document.querySelectorAll(
    '.animate, .animate-up, .animate-down, .animate-left, .animate-right, .animate-scale, .stagger'
  );

  if (animateElements.length > 0 && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    });

    animateElements.forEach(el => observer.observe(el));
  } else {
    // Fallback: show all immediately
    animateElements.forEach(el => el.classList.add('visible'));
  }

  // ==========================================================
  // 2. Navbar scroll effect (adds shadow on scroll)
  // ==========================================================
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    let lastScroll = 0;
    window.addEventListener('scroll', function() {
      const currentScroll = window.pageYOffset;
      if (currentScroll > 20) {
        navbar.style.boxShadow = '0 4px 20px rgba(0,0,0,0.08)';
      } else {
        navbar.style.boxShadow = 'none';
      }
      lastScroll = currentScroll;
    }, { passive: true });
  }

  // ==========================================================
  // 3. Smooth counter animation for numbers
  // ==========================================================
  function animateCounter(el) {
    const target = parseInt(el.getAttribute('data-target')) || parseInt(el.textContent.replace(/\D/g, ''));
    if (target === 0) return;
    const duration = 1200;
    const start = 0;
    const startTime = performance.now();

    function updateCounter(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const easeOut = 1 - Math.pow(1 - progress, 3);
      const current = Math.floor(easeOut * target);
      el.textContent = current.toLocaleString();
      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      } else {
        el.textContent = target.toLocaleString();
      }
    }
    requestAnimationFrame(updateCounter);
  }

  const counters = document.querySelectorAll('.counter');
  if (counters.length > 0 && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(el => counterObserver.observe(el));
  }

  // ==========================================================
  // 4. Parallax-like tilt effect on cards
  // ==========================================================
  const tiltCards = document.querySelectorAll('.service-card, .feature-card');
  tiltCards.forEach(card => {
    card.addEventListener('mousemove', function(e) {
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = (y - centerY) / 20;
      const rotateY = (centerX - x) / 20;
      this.style.transform =
        `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-8px)`;
    });
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'perspective(800px) rotateX(0) rotateY(0) translateY(0)';
    });
  });

  // ==========================================================
  // 5. Typewriter effect on hero titles
  // ==========================================================
  const typewriterEls = document.querySelectorAll('.typewriter');
  typewriterEls.forEach(el => {
    const text = el.textContent;
    el.textContent = '';
    el.style.display = 'inline-block';
    el.style.overflow = 'hidden';
    el.style.whiteSpace = 'nowrap';
    el.style.borderRight = '3px solid var(--primary)';
    el.style.animation = 'blink 0.8s step-end infinite';

    let i = 0;
    function type() {
      if (i < text.length) {
        el.textContent += text.charAt(i);
        i++;
        setTimeout(type, 50 + Math.random() * 50);
      }
    }
    // Start after a small delay
    setTimeout(type, 500);
  });

  // ==========================================================
  // 6. Floating particles in hero (decorative)
  // ==========================================================
  const hero = document.querySelector('.hero');
  if (hero && !hero.querySelector('.particles')) {
    const particlesContainer = document.createElement('div');
    particlesContainer.className = 'particles';
    particlesContainer.style.cssText =
      'position:absolute;top:0;left:0;width:100%;height:100%;overflow:hidden;pointer-events:none;z-index:0;';

    for (let i = 0; i < 8; i++) {
      const particle = document.createElement('div');
      const size = 4 + Math.random() * 8;
      particle.style.cssText = `
        position: absolute;
        bottom: -20px;
        left: ${Math.random() * 100}%;
        width: ${size}px;
        height: ${size}px;
        background: rgba(255,255,255,0.15);
        border-radius: 50%;
        animation: particleFloat ${6 + Math.random() * 8}s linear infinite;
        animation-delay: ${Math.random() * 5}s;
      `;
      particlesContainer.appendChild(particle);
    }
    hero.appendChild(particlesContainer);
  }

  // ==========================================================
  // 7. Auto-dismiss alerts after 4 seconds
  // ==========================================================
  const alerts = document.querySelectorAll('.alert-auto');
  alerts.forEach(alert => {
    setTimeout(() => {
      alert.style.transition = 'opacity 0.5s ease';
      alert.style.opacity = '0';
      setTimeout(() => alert.remove(), 500);
    }, 4000);
  });

  // ==========================================================
  // 8. Animate progress bars
  // ==========================================================
  const progressBars = document.querySelectorAll('.progress-bar');
  if (progressBars.length > 0 && 'IntersectionObserver' in window) {
    const progressObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const bar = entry.target;
          const targetWidth = bar.getAttribute('data-width') || '100%';
          bar.style.transition = 'width 1.2s cubic-bezier(0.4, 0, 0.2, 1)';
          bar.style.width = targetWidth;
          progressObserver.unobserve(bar);
        }
      });
    }, { threshold: 0.3 });
    progressBars.forEach(el => progressObserver.observe(el));
  }

  // ==========================================================
  // 9. Form input floating label effect
  // ==========================================================
  document.querySelectorAll('.form-group input, .form-group select').forEach(input => {
    input.addEventListener('focus', function() {
      this.closest('.form-group')?.querySelector('label')?.style.setProperty('color', 'var(--primary)');
    });
    input.addEventListener('blur', function() {
      this.closest('.form-group')?.querySelector('label')?.style.setProperty('color', '');
    });
  });

  // ==========================================================
  // 10. Table row highlight on hover
  // ==========================================================
  document.querySelectorAll('.table-container tbody tr').forEach(row => {
    row.addEventListener('mouseenter', function() {
      this.style.transition = 'background 0.2s ease';
    });
  });

  console.log('%cArbreG. Animations loaded', 'color:#6C63FF;font-weight:bold;font-size:14px;');
});
