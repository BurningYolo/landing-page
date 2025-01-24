// JavaScript for Cursor Effect 

    const image = document.getElementById('hoverImage');

    image.addEventListener('mouseenter', () => {
        // Generate random offsets between -5% and 5%
        const randomX = Math.random() * 10 - 5; // Random value between -5 and 5
        const randomY = Math.random() * 10 - 5; // Random value between -5 and 5
        const scale = 1.05; // Scale up the image

        // Apply the transform
        image.style.transform = `translate(${randomX}%, ${randomY}%) scale(${scale})`;
    });

    image.addEventListener('mouseleave', () => {
        // Reset the transformation when the mouse leaves
        image.style.transform = 'scale(1)';
    });
