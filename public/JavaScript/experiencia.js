document.addEventListener('DOMContentLoaded', () => {
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    timelineItems.forEach((item, index) => {
        item.style.transitionDelay = `${index * 0.2}s`;
        observer.observe(item);
    });

    timelineItems.forEach(item => {
        const dot = item.querySelector('.timeline-dot');
        const content = item.querySelector('.timeline-content');
        
        item.addEventListener('mouseenter', () => {
            dot.style.backgroundColor = 'var(--primary-color)';
        });
        
        item.addEventListener('mouseleave', () => {
            dot.style.backgroundColor = 'var(--secondary-color)';
        });
    });

    const animateOnScroll = () => {
        timelineItems.forEach(item => {
            const rect = item.getBoundingClientRect();
            const isVisible = rect.top < window.innerHeight * 0.8;
            
            if (isVisible && !item.classList.contains('visible')) {
                item.classList.add('visible');
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll();
});
