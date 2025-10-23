document.addEventListener('DOMContentLoaded', async () => {
    // Cargar habilidades desde el JSON
    await cargarHabilidades();
    
    // Inicializar efectos después de cargar las habilidades
    inicializarEfectos();
});

async function cargarHabilidades() {
    try {
        const response = await fetch('/data/habilidades.json');
        const data = await response.json();
        
        const habilidadesSection = document.querySelector('.habilidades-section');
        
        // Limpiar contenido existente (excepto el título)
        const titulo = habilidadesSection.querySelector('h1');
        habilidadesSection.innerHTML = '';
        habilidadesSection.appendChild(titulo);
        
        // Crear categorías dinámicamente
        data.categorias.forEach(categoria => {
            const categoriaDiv = document.createElement('div');
            categoriaDiv.className = 'categoria';
            
            const categoriaTitle = document.createElement('h2');
            categoriaTitle.textContent = categoria.nombre;
            categoriaDiv.appendChild(categoriaTitle);
            
            const skillsGrid = document.createElement('div');
            skillsGrid.className = 'skills-grid';
            
            categoria.habilidades.forEach(habilidad => {
                const skillCard = document.createElement('div');
                skillCard.className = 'skill-card';
                skillCard.setAttribute('data-skill', habilidad.id);
                
                const skillImage = document.createElement('div');
                skillImage.className = 'skill-image';
                
                const img = document.createElement('img');
                img.src = `/${habilidad.icono}`;
                img.alt = habilidad.nombre;
                
                const skillName = document.createElement('p');
                skillName.className = 'skill-name';
                skillName.textContent = habilidad.nombre;
                
                skillImage.appendChild(img);
                skillCard.appendChild(skillImage);
                skillCard.appendChild(skillName);
                skillsGrid.appendChild(skillCard);
            });
            
            categoriaDiv.appendChild(skillsGrid);
            habilidadesSection.appendChild(categoriaDiv);
        });
        
    } catch (error) {
        console.error('Error al cargar las habilidades:', error);
    }
}

function inicializarEfectos() {
    const skillCards = document.querySelectorAll('.skill-card');

    skillCards.forEach(card => {
        // Efecto zoom al pasar el cursor
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });

        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
    });

    // Animación de aparición progresiva
    skillCards.forEach((card, index) => {
        setTimeout(() => {
            card.style.transition = 'opacity 0.5s ease, transform 0.3s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Efecto click
    skillCards.forEach(card => {
        card.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    });
}
