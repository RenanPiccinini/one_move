import Alpine from 'alpinejs';
import * as THREE from 'three';
import { createIcons, icons } from 'lucide';

window.Alpine = Alpine;

// Initialize Lucide Icons
document.addEventListener('DOMContentLoaded', () => {
    createIcons({ icons });
});

// Interactive 3D Tilt Effect on cards
window.init3DTilt = function () {
    const cards = document.querySelectorAll('[data-tilt]');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = ((y - centerY) / centerY) * -12;
            const rotateY = ((x - centerX) / centerX) * 12;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
            card.style.transition = 'transform 0.5s ease';
        });

        card.addEventListener('mouseenter', () => {
            card.style.transition = 'none';
        });
    });
};

// 3D Three.js Hero Particle Canvas (Speed & Cosmic Running Glow)
window.initHeroCanvas = function (canvasId = 'hero-canvas') {
    const container = document.getElementById(canvasId);
    if (!container) return;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(65, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.z = 250;

    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.innerHTML = '';
    container.appendChild(renderer.domElement);

    // Particle field simulating running lights / speed trails
    const particlesCount = 750;
    const geometry = new THREE.BufferGeometry();
    const positions = new Float32Array(particlesCount * 3);
    const colors = new Float32Array(particlesCount * 3);

    const colorOrange = new THREE.Color(0xFF4D00);
    const colorAmber = new THREE.Color(0xFF8C00);
    const colorWhite = new THREE.Color(0xFFFFFF);

    for (let i = 0; i < particlesCount; i++) {
        // distribute along a running tunnel
        positions[i * 3] = (Math.random() - 0.5) * 500;
        positions[i * 3 + 1] = (Math.random() - 0.5) * 300;
        positions[i * 3 + 2] = (Math.random() - 0.5) * 600;

        const choice = Math.random();
        const pColor = choice < 0.6 ? colorOrange : (choice < 0.85 ? colorAmber : colorWhite);
        colors[i * 3] = pColor.r;
        colors[i * 3 + 1] = pColor.g;
        colors[i * 3 + 2] = pColor.b;
    }

    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));

    // Particle texture (circle gradient glow)
    const canvas = document.createElement('canvas');
    canvas.width = 32;
    canvas.height = 32;
    const ctx = canvas.getContext('2d');
    const grad = ctx.createRadialGradient(16, 16, 0, 16, 16, 16);
    grad.addColorStop(0, 'rgba(255,255,255,1)');
    grad.addColorStop(0.3, 'rgba(255,100,20,0.8)');
    grad.addColorStop(1, 'rgba(0,0,0,0)');
    ctx.fillStyle = grad;
    ctx.fillRect(0, 0, 32, 32);

    const texture = new THREE.CanvasTexture(canvas);

    const material = new THREE.PointsMaterial({
        size: 3.5,
        vertexColors: true,
        transparent: true,
        opacity: 0.85,
        map: texture,
        blending: THREE.AdditiveBlending,
        depthWrite: false,
    });

    const particles = new THREE.Points(geometry, material);
    scene.add(particles);

    // Mouse parallax reaction
    let mouseX = 0;
    let mouseY = 0;
    window.addEventListener('mousemove', (e) => {
        mouseX = (e.clientX - window.innerWidth / 2) * 0.05;
        mouseY = (e.clientY - window.innerHeight / 2) * 0.05;
    });

    // Animation loop
    let animationFrameId;
    const animate = () => {
        animationFrameId = requestAnimationFrame(animate);

        const pos = geometry.attributes.position.array;
        for (let i = 0; i < particlesCount; i++) {
            // Speed forward on Z axis
            pos[i * 3 + 2] += 1.8;
            if (pos[i * 3 + 2] > 300) {
                pos[i * 3 + 2] = -300;
            }
        }
        geometry.attributes.position.needsUpdate = true;

        particles.rotation.z += 0.0006;
        camera.position.x += (mouseX - camera.position.x) * 0.03;
        camera.position.y += (-mouseY - camera.position.y) * 0.03;

        renderer.render(scene, camera);
    };

    animate();

    // Resize handler
    const handleResize = () => {
        if (!container) return;
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.clientWidth, container.clientHeight);
    };

    window.addEventListener('resize', handleResize);
};

// Countdown Timer Engine
window.startCountdown = function (targetDateString, containerPrefix = 'cd') {
    const targetDate = new Date(targetDateString).getTime();

    function update() {
        const now = new Date().getTime();
        const difference = targetDate - now;

        if (difference < 0) {
            document.querySelectorAll(`.${containerPrefix}-days`).forEach(el => el.textContent = '00');
            document.querySelectorAll(`.${containerPrefix}-hours`).forEach(el => el.textContent = '00');
            document.querySelectorAll(`.${containerPrefix}-minutes`).forEach(el => el.textContent = '00');
            document.querySelectorAll(`.${containerPrefix}-seconds`).forEach(el => el.textContent = '00');
            return;
        }

        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        document.querySelectorAll(`.${containerPrefix}-days`).forEach(el => el.textContent = String(days).padStart(2, '0'));
        document.querySelectorAll(`.${containerPrefix}-hours`).forEach(el => el.textContent = String(hours).padStart(2, '0'));
        document.querySelectorAll(`.${containerPrefix}-minutes`).forEach(el => el.textContent = String(minutes).padStart(2, '0'));
        document.querySelectorAll(`.${containerPrefix}-seconds`).forEach(el => el.textContent = String(seconds).padStart(2, '0'));
    }

    update();
    setInterval(update, 1000);
};

// Registration Redirect Modal Handler
window.openRegistrationRedirect = function (stageName, targetUrl) {
    const modal = document.getElementById('registration-redirect-modal');
    if (!modal) {
        if (targetUrl) window.open(targetUrl, '_blank');
        return;
    }

    const titleEl = document.getElementById('redirect-stage-name');
    if (titleEl) titleEl.textContent = stageName || 'Etapa ONE MOVE RUN';

    modal.classList.remove('hidden');
    modal.classList.add('flex');

    let counter = 3;
    const countEl = document.getElementById('redirect-timer');
    if (countEl) countEl.textContent = counter;

    const interval = setInterval(() => {
        counter--;
        if (countEl) countEl.textContent = counter;
        if (counter <= 0) {
            clearInterval(interval);
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            if (targetUrl) {
                window.open(targetUrl, '_blank');
            } else {
                alert('O link oficial de inscrições será ativado nesta etapa em breve!');
            }
        }
    }, 1000);

    const cancelBtn = document.getElementById('redirect-cancel-btn');
    if (cancelBtn) {
        cancelBtn.onclick = () => {
            clearInterval(interval);
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        };
    }
};

document.addEventListener('DOMContentLoaded', () => {
    window.init3DTilt();
    if (document.getElementById('hero-canvas')) {
        window.initHeroCanvas('hero-canvas');
    }
    // Default countdown to Brasília Stage (March 15, 2027 06:30 BRT)
    window.startCountdown('2027-03-15T06:30:00');
});

Alpine.start();
