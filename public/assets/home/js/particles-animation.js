// Colors mapping
const colors = {
    'purple': '#241379',    
    'medium-blue': '#2185bf',
    'light-blue': '#1fbce1',
    'red': '#b62f56',
    'orange': '#d5764c',
    'yellow': '#ffd53e',
    'cyan': '#78ffba',
    'light-green': '#98fd85',
    'lime': '#befb46',
    'magenta': '#6c046c',
    'lightish-red': '#f04c81',
    'pink': '#ff4293'
};

// Helper functions
function randomNum(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}

function randomCalc(number) {
    const max = 100 - number;
    const min = number * -1;
    return randomNum(min, max);
}

// Function to create animations and elements
function createElements() {
    // Target the particles container
    const container = document.getElementById('particles-container');
    if (!container) return;
    
    // Create style element for animations
    const style = document.createElement('style');
    document.head.appendChild(style);
    const styleSheet = style.sheet;

    // For each color, create elements and animations
    Object.entries(colors).forEach(([colorName, colorHex]) => {
        // Create random values
        const random1 = Math.random() * 100;
        const random2 = Math.random() * 100;
        const random3 = Math.random() * 100;
        const random4 = Math.random() * 100;
        const random5 = Math.random() * 100;
        const random6 = Math.random() * 100;
        
        // Create the main div inside the container
        const div = document.createElement('div');
        div.className = colorName;
        container.appendChild(div);
        
        // Generate size for the main element
        const size = randomNum(5, 50) + 'px';
        
        // Set styles for the main element
        div.style.border = `2px solid ${colorHex}`;
        div.style.borderRadius = '100%';
        div.style.width = size;
        div.style.height = size;
        div.style.transform = `translate3d(${random1}vw, ${random2}vh, 0)`;
        div.style.zIndex = randomNum(1, 12);
        div.style.animation = `${colorName} linear 30s alternate infinite`;
        
        // Add each keyframe rule separately
        try {
            // Main element keyframes
            styleSheet.insertRule(`
                @keyframes ${colorName} {
                    50% {
                        transform: translate3d(${random3}vw, ${random4}vh, 0);
                    }
                    100% {
                        transform: translate3d(${random5}vw, ${random6}vh, 0);
                    }
                }
            `, styleSheet.cssRules.length);
            
            // Pseudo-element keyframes
            styleSheet.insertRule(`
                @keyframes ${colorName}-pseudo {
                    33% {
                        transform: translate3d(${randomCalc(random3)}vw, ${randomCalc(random4)}vh, 0) rotate(${Math.random() * 360}deg);
                    }
                    100% {
                        transform: translate3d(${randomCalc(random5)}vw, ${randomCalc(random6)}vh, 0) rotate(${Math.random() * 360}deg);
                    }
                }
            `, styleSheet.cssRules.length);
            
            // ::before pseudo-element styles
            styleSheet.insertRule(`
                .${colorName}::before {
                    animation: ${colorName}-pseudo linear 15s alternate infinite;
                    background: ${colorHex};
                    border: 2px solid ${colorHex};
                    width: ${randomNum(5, 50)}px;
                    height: ${randomNum(5, 50)}px;
                    transform: translate3d(${randomCalc(random1)}vw, ${randomCalc(random2)}vh, 0) rotate(${Math.random() * 360}deg);
                }
            `, styleSheet.cssRules.length);
            
            // ::after pseudo-element styles
            styleSheet.insertRule(`
                .${colorName}::after {
                    animation: ${colorName}-pseudo linear 20s alternate infinite;
                    border: 2px solid ${colorHex};
                    width: ${randomNum(5, 50)}px;
                    height: ${randomNum(5, 50)}px; 
                    transform: translate3d(${randomCalc(random1)}vw, ${randomCalc(random2)}vh, 0) rotate(${Math.random() * 360}deg);
                }
            `, styleSheet.cssRules.length);
        } catch (e) {
            console.error(`Error adding CSS rule for ${colorName}:`, e);
        }
    });
}

// Initialize the animation
document.addEventListener('DOMContentLoaded', createElements); 