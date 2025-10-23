document.addEventListener('DOMContentLoaded', () => {
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
});
