document.addEventListener('DOMContentLoaded', async () => {
    // Cargar habilidades desde el JSON
    await cargarHabilidades();
    
    // Inicializar efectos después de cargar las habilidades
    inicializarEfectos();
});

function cargarHabilidades() {
    try {
        const data = {
            "categorias": [
            {
                "nombre": "Lenguajes de Programación",
                "habilidades": [
                    {
                        "id": "html",
                        "nombre": "HTML5",
                        "icono": "Portfolio.icons/html-5.png"
                    },
                    {
                        "id": "css",
                        "nombre": "CSS3",
                        "icono": "Portfolio.icons/css-3.png"
                    },
                    {
                        "id": "javascript",
                        "nombre": "JavaScript",
                        "icono": "Portfolio.icons/js.png"
                    },
                    {
                        "id": "python",
                        "nombre": "Python",
                        "icono": "Portfolio.icons/python.png"
                    },
                    {
                        "id": "java",
                        "nombre": "Java",
                        "icono": "Portfolio.icons/java.png"
                    },
                    {
                        "id": "sql",
                        "nombre": "SQL",
                        "icono": "Portfolio.icons/sql.png"
                    },
                    {
                        "id": "php",
                        "nombre": "PHP",
                        "icono": "Portfolio.icons/php.png"
                    }
                ]
            },
                {
                    "nombre": "Frameworks",
                    "habilidades": [
                    {
                        "id": "laravel",
                        "nombre": "Laravel",
                        "icono": "Portfolio.icons/laravel.svg"
                    },
                    {
                        "id": "vue",
                        "nombre": "Vue.js",
                        "icono": "Portfolio.icons/vue.svg"
                    },
                    {
                        "id": "bootstrap",
                        "nombre": "Bootstrap",
                        "icono": "Portfolio.icons/bootstrap.svg"
                    },
                    {
                        "id": "wordpress",
                        "nombre": "WordPress",
                        "icono": "Portfolio.icons/wordpress.svg"
                    },
                    {
                        "id": "tailwind",
                        "nombre": "Tailwind CSS",
                        "icono": "Portfolio.icons/tailwind.png"
                    }
                
                ]
            },
                {
                    "nombre": "Herramientas",
                    "habilidades": [
                    {
                        "id": "git",
                        "nombre": "Git",
                        "icono": "Portfolio.icons/git.png"
                    },
                    {
                        "id": "vscode",
                        "nombre": "VS Code",
                        "icono": "Portfolio.icons/vs.png"
                    },
                    {
                        "id": "github",
                        "nombre": "GitHub",
                        "icono": "Portfolio.icons/github.svg"
                    },
                    {
                        "id": "docker",
                        "nombre": "Docker",
                        "icono": "Portfolio.icons/docker.svg"
                    },
                    {
                        "id": "figma",
                        "nombre": "Figma",
                        "icono": "Portfolio.icons/figma.svg"
                    },
                    {
                        "id": "mysql",
                        "nombre": "MySQL",
                        "icono": "Portfolio.icons/mysql.svg"
                    },
                    {
                        "id": "intellij",
                        "nombre": "IntelliJ",
                        "icono": "Portfolio.icons/intellij.svg"
                    },
                    {
                        "id": "mongodb",
                        "nombre": "MongoDB",
                        "icono": "Portfolio.icons/mongodb.png"
                    },
                    {
                        "id": "linux",
                        "nombre": "Linux",
                        "icono": "Portfolio.icons/linux.png"
                    }
                ]
            },
                {
                    "nombre": "Metodologías",
                    "habilidades": [
                    {
                        "id": "scrum",
                        "nombre": "Scrum",
                        "icono": "Portfolio.icons/scrum.svg"
                    },
                    {
                        "id": "express",
                        "nombre": "Proyectos Express",
                        "icono": "Portfolio.icons/express.png"
                    },
                    {
                        "id": "ajustes",
                        "nombre": "Desarrollo Ágil",
                        "icono": "Portfolio.icons/ajustes.png"
                    }
                ]
                }
            ]
        };

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
                img.src = habilidad.icono;
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
