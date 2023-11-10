document.addEventListener("DOMContentLoaded", function () {
    // Función para animar el contador
    function animateCounter(element) {
        const targetCount = parseInt(element.getAttribute('data-count'));
        let currentCount = 0;
        let increment = 1; // Incremento predeterminado
      
        // Ajusta el incremento para contadores específicos
        if (targetCount === 5 || targetCount === 1) {
          increment = 0.05; // Ajusta el valor para una animación más lenta
        } else {
          increment = Math.ceil(targetCount / 100); // Incremento para otros contadores
        }
      
        const updateCounter = () => {
          if (currentCount < targetCount) {
            currentCount += increment;
            if (currentCount > targetCount) {
              currentCount = targetCount;
            }
      
            // Aplica el formato para números enteros si es 1 o 5
            let formattedCount = currentCount;
            if (targetCount === 5 || targetCount === 1) {
              formattedCount = Math.round(formattedCount);
            }
      
            element.textContent = formattedCount;
            requestAnimationFrame(updateCounter);
          }
        };
      
        updateCounter();
      }
      
  
  // Función para verificar si el elemento está en el viewport
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  // Función para manejar el evento scroll
  function handleScroll() {
    const counters = document.querySelectorAll('.counter');
    counters.forEach((counter) => {
      if (isElementInViewport(counter) && !counter.classList.contains('counted')) {
        counter.classList.add('counted');
        animateCounter(counter);
      }
    });
  }
  
  // Agregar un evento de desplazamiento para verificar cuando los contadores son visibles
  window.addEventListener('scroll', handleScroll);
  
  // Llamar a handleScroll una vez en la carga de la página para verificar los contadores iniciales
  handleScroll();
  
  
});