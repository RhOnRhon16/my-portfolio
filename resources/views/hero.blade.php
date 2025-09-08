<section id="home" class="h-screen flex items-center justify-center text-center px-6 relative overflow-hidden ">
    <!-- Background blobs -->
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute w-72 h-72 bg-cyan-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-1/4 left-1/2 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
    </div>

    <!-- Content wrapper -->
    <div class="relative z-10 flex flex-col items-center justify-center">
        <h1 class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-500 bg-clip-text text-transparent"
            data-aos="zoom-in">
            Welcome to My Portfolio 🚀
            <span class="ml-3 animate-bounce">✨</span>
        </h1>

        <p class="mt-6 text-lg text-gray-300 max-w-2xl" data-aos="fade-up" data-aos-delay="300">
            I design and build <span class="text-cyan-400 font-semibold animate-pulse">modern</span>,
            <span class="text-purple-400 font-semibold animate-pulse animation-delay-500">fast</span>,
            and <span class="text-blue-400 font-semibold animate-pulse animation-delay-1000">interactive</span> web experiences.
        </p>

        <a href="#projects"
            class="mt-10 px-10 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl shadow-lg hover:shadow-cyan-500/50 hover:scale-110 transition-all duration-300"
            data-aos="fade-up" data-aos-delay="600">
            View My Work
        </a>
    </div>
</section>


<!-- Add this in your CSS or Tailwind config -->
<style>
    @keyframes blob {

        0%,
        100% {
            transform: translate(0px, 0px) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
    }

    .animate-blob {
        animation: blob 8s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    .animation-delay-500 {
        animation-delay: 0.5s;
    }

    .animation-delay-1000 {
        animation-delay: 1s;
    }
</style>