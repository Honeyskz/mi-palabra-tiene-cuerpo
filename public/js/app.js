document.addEventListener('DOMContentLoaded', () => {

  // Menú móvil
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');
  toggle?.addEventListener('click', () => menu.classList.toggle('abierto'));
  menu?.querySelectorAll('a').forEach(a => a.addEventListener('click', () => menu.classList.remove('abierto')));

  // Aparición suave al hacer scroll
  const io = new IntersectionObserver((entradas) => {
    entradas.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el));

  // Palabras por grupos de colores que terminan todas juntas
  const escenario = document.getElementById('escenario');
  if (escenario) {
    const palabras = [...escenario.querySelectorAll('.palabra')];
    let timers = [];

    const colocar = () => {
      const w = window.innerWidth;
      const cols = w < 600 ? 2 : w < 992 ? 3 : 4;
      const filas = Math.ceil(palabras.length / cols);
      const alto = w < 600 ? 80 : 90;
      escenario.style.height = (filas * alto + 30) + 'px';
      const celdas = [...Array(cols * filas).keys()].sort(() => Math.random() - 0.5);
      palabras.forEach((p, i) => {
        const c = celdas[i] % cols;
        const f = Math.floor(celdas[i] / cols);
        p.style.maxWidth = (100 / cols - 3) + '%';
        p.style.left = (c * (100 / cols) + Math.random() * (100 / cols) * 0.2 + 1) + '%';
        p.style.top = (f * alto + Math.random() * alto * 0.3) + 'px';
      });
    };

    const reproducir = () => {
      timers.forEach(clearTimeout);
      timers = [];
      escenario.classList.remove('juntas');
      palabras.forEach(p => p.classList.remove('visible'));
      const grupos = [...new Set(palabras.map(p => p.dataset.grupo))];
      grupos.forEach((g, gi) => {
        palabras.filter(p => p.dataset.grupo === g).forEach((p, i) => {
          timers.push(setTimeout(() => p.classList.add('visible'), gi * 2200 + i * 250));
        });
      });
      timers.push(setTimeout(() => escenario.classList.add('juntas'), grupos.length * 2200 + 600));
    };

    const ioEscenario = new IntersectionObserver((entradas) => {
      if (entradas[0].isIntersecting) {
        colocar();
        reproducir();
        ioEscenario.disconnect();
      }
    }, { threshold: 0.3 });
    ioEscenario.observe(escenario);

    document.getElementById('repetir')?.addEventListener('click', () => { colocar(); reproducir(); });
  }

  // Vista previa de la foto
  const input = document.getElementById('input-foto');
  const prev = document.getElementById('vista-previa');
  input?.addEventListener('change', () => {
    const f = input.files[0];
    if (!f) return;
    prev.src = URL.createObjectURL(f);
    prev.hidden = false;
  });

  // Contador de caracteres
  const ta = document.getElementById('texto-respuesta');
  const cont = document.getElementById('contador');
  if (ta && cont) {
    const actualizar = () => cont.textContent = ta.value.length + ' / 600';
    ta.addEventListener('input', actualizar);
    actualizar();
  }

  // Si hubo errores de validación, volver al formulario
  document.querySelector('[data-scroll]')?.scrollIntoView({ behavior: 'smooth', block: 'center' });
});