<section id="contact" class="min-h-screen bg-gray-950 relative flex flex-col items-center justify-center px-6 py-20 overflow-hidden">
    <!-- Background gradient -->
    <div class="absolute inset-0 -z-20 bg-gradient-to-r from-purple-500 via-pink-500 to-cyan-500 opacity-10 animate-gradient-slow"></div>

    <!-- Floating icons -->
    <div class="absolute inset-0 -z-10">
        <span class="floating-icon text-white text-4xl" style="--x:5%; --y:20%;">📧</span>
        <span class="floating-icon text-green-400 text-4xl" style="--x:80%; --y:10%;">📱</span>
        <span class="floating-icon text-purple-400 text-4xl" style="--x:30%; --y:70%;">💬</span>
        <span class="floating-icon text-blue-400 text-4xl" style="--x:60%; --y:50%;">💻</span>
    </div>

    <h2 class="text-4xl font-bold text-cyan-400" data-aos="fade-up">Contact Me</h2>
    <p class="mt-4 text-gray-300 max-w-md text-center" data-aos="fade-up" data-aos-delay="200">
        Let's build something amazing together 🚀
    </p>

    <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-6">
        <!-- Email -->
        <a href="mailto:manlapazarronjohn@gmail.com"
            class="flex flex-col items-center px-6 py-4 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl shadow-lg hover:shadow-pink-500/50 hover:scale-110 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="300">
            📧
            <span class="text-white font-semibold mt-1">Email</span>
            <span class="text-gray-200 text-sm">manlapazarronjohn@gmail.com</span>
        </a>

        <!-- WhatsApp -->
        <a href="https://wa.me/639923903839" target="_blank"
            class="flex flex-col items-center px-6 py-4 bg-green-500 rounded-2xl shadow-lg hover:shadow-green-500/50 hover:scale-110 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="400">
            📱
            <span class="text-white font-semibold mt-1">WhatsApp</span>
            <span class="text-gray-200 text-sm">+63 992 390 3839</span>
        </a>

        <!-- Viber -->
        <a href="viber://chat?number=%2B639923903839" target="_blank"
            class="flex flex-col items-center px-6 py-4 bg-purple-700 rounded-2xl shadow-lg hover:shadow-purple-700/50 hover:scale-110 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="500">
            💬
            <span class="text-white font-semibold mt-1">Viber</span>
            <span class="text-gray-200 text-sm">+63 992 390 3839</span>
        </a>
    </div>
</section>

<script>
    // Floating icons animation
    const icons = document.querySelectorAll('.floating-icon');
    icons.forEach(icon => {
        let x = parseInt(icon.style.getPropertyValue('--x'));
        let y = parseInt(icon.style.getPropertyValue('--y'));
        let dx = (Math.random() * 0.3) + 0.1;
        let dy = (Math.random() * 0.3) + 0.1;

        function animate() {
            x += dx;
            y += dy;

            if (x > 100 || x < 0) dx *= -1;
            if (y > 100 || y < 0) dy *= -1;

            icon.style.transform = `translate(${x}vw, ${y}vh)`;
            requestAnimationFrame(animate);
        }
        animate();
    });
</script>

<style>
    /* Gradient background animation */
    @keyframes gradient-slow {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .animate-gradient-slow {
        background-size: 200% 200%;
        animation: gradient-slow 30s ease infinite;
    }

    /* Floating icons style */
    .floating-icon {
        position: absolute;
        font-size: 2.5rem;
        opacity: 0.3;
        pointer-events: none;
    }
</style>