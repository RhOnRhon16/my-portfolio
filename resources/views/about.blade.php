<section id="about" class="min-h-screen relative overflow-hidden px-6 py-20 bg-gray-900 text-gray-300">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-cyan-500 via-purple-500 to-pink-500 opacity-20 animate-gradient-slow"></div>

    <!-- Floating particles (CSS-based) -->
    <div class="absolute inset-0 -z-20">
        <div class="particle" style="--i:10;"></div>
        <div class="particle" style="--i:20;"></div>
        <div class="particle" style="--i:30;"></div>
        <div class="particle" style="--i:40;"></div>
        <div class="particle" style="--i:50;"></div>
    </div>

    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <!-- Profile Image -->
        <img src="{{ asset('storage/images/111.JPG') }}"
            class="w-80 h-96 rounded-lg shadow-2xl ring-8 ring-cyan-400/30 transform hover:scale-110 hover:rotate-3 transition duration-700 ease-in-out"
            data-aos="fade-right">

        <!-- Text and Info -->
        <div data-aos="fade-left">
            <h2 class="text-5xl font-bold text-cyan-400 mb-4">About Me</h2>

            <!-- Typewriter intro -->
            <p class="mt-2 text-lg leading-relaxed">
                <span id="typewriter" class="font-semibold inline-block min-h-[1.5rem]">&nbsp;</span>
            </p>



            <!-- Personal Info Cards -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-gray-800 p-4 rounded-xl shadow hover:scale-105 transition transform">
                    <h3 class="text-cyan-400 font-semibold">📍 Location</h3>
                    <p>Manila, Philippines</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-xl shadow hover:scale-105 transition transform">
                    <h3 class="text-cyan-400 font-semibold">🎓 Education</h3>
                    <p>Bachelor’s in Computer Science</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-xl shadow hover:scale-105 transition transform">
                    <h3 class="text-cyan-400 font-semibold">💻 Skills</h3>
                    <p>Laravel, Livewire, Tailwind, React.js, JavaScript</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-xl shadow hover:scale-105 transition transform">
                    <h3 class="text-cyan-400 font-semibold">🎯 Interests</h3>
                    <p>Web development, UI/UX, Animations, Tech experiments</p>
                </div>
            </div>

            <!-- Skill Bars -->
            <div class="mt-8 grid grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-400">💻 Web Development</p>
                    <div class="w-full bg-gray-700 rounded-full h-2 mt-1">
                        <div class="bg-cyan-400 h-2 rounded-full w-0" data-progress="95%"></div>
                    </div>
                </div>
                <div>
                    <p class="text-gray-400">⚡ JavaScript</p>
                    <div class="w-full bg-gray-700 rounded-full h-2 mt-1">
                        <div class="bg-purple-400 h-2 rounded-full w-0" data-progress="90%"></div>
                    </div>
                </div>
                <div>
                    <p class="text-gray-400">🎨 UI/UX Design</p>
                    <div class="w-full bg-gray-700 rounded-full h-2 mt-1">
                        <div class="bg-pink-400 h-2 rounded-full w-0" data-progress="85%"></div>
                    </div>
                </div>
                <div>
                    <p class="text-gray-400">🚀 Problem Solving</p>
                    <div class="w-full bg-gray-700 rounded-full h-2 mt-1">
                        <div class="bg-yellow-400 h-2 rounded-full w-0" data-progress="92%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Typewriter effect
    const phrases = [
        "I'm a passionate developer.",
        "I create smooth digital experiences.",
        "Efficient code, clean design, and animations.",
        "Based in Manila, Philippines."
    ];

    let i = 0,
        j = 0,
        currentPhrase = [],
        isDeleting = false;
    const typewriter = document.getElementById('typewriter');

    function type() {
        if (i >= phrases.length) i = 0;
        currentPhrase = phrases[i].split('');

        if (!isDeleting) {
            typewriter.textContent = currentPhrase.slice(0, j + 1).join('') || "\u00A0"; // fallback non-breaking space
            j++;
            if (j === currentPhrase.length) {
                isDeleting = true;
                setTimeout(type, 1000);
                return;
            }
        } else {
            typewriter.textContent = currentPhrase.slice(0, j).join('') || "\u00A0"; // prevent collapse
            j--;
            if (j === 0) {
                isDeleting = false;
                i++;
                j = 0;
            }
        }
        setTimeout(type, isDeleting ? 50 : 100);
    }

    type();

    // Skill bar animation on scroll
    const skillBars = document.querySelectorAll('[data-progress]');
    window.addEventListener('scroll', () => {
        skillBars.forEach(bar => {
            const rect = bar.getBoundingClientRect();
            if (rect.top < window.innerHeight) {
                bar.style.width = bar.getAttribute('data-progress');
            }
        });
    });
</script>

<style>
    /* Animated gradient background */
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
        animation: gradient-slow 20s ease infinite;
    }

    /* Floating particles */
    .particle {
        position: absolute;
        top: calc(var(--i) * 10%);
        left: calc(var(--i) * 5%);
        width: 6px;
        height: 6px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        animation: float 12s linear infinite;
    }

    @keyframes float {
        0% {
            transform: translateY(0) translateX(0);
        }

        50% {
            transform: translateY(-30px) translateX(15px);
        }

        100% {
            transform: translateY(0) translateX(0);
        }
    }
</style>