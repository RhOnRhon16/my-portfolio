<section id="projects" class="min-h-screen bg-gray-900 flex flex-col items-center justify-center px-6 py-20">
    <h2 class="text-4xl font-bold text-cyan-400" data-aos="fade-down">Projects</h2>
    <div class="mt-12 grid md:grid-cols-2 gap-8 max-w-5xl">

        <!-- Project 1 -->
        <a href="https://dreamfactory.ph/" target="_blank"
            class="group p-6 bg-gray-800/70 rounded-xl shadow-lg border border-cyan-400/10 hover:shadow-purple-500/40 hover:-translate-y-2 transition block"
            data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="800">
            <h3 class="text-xl font-semibold text-white">PDLC</h3>
            <p class="mt-3 text-gray-400">
                A corporate website I developed for my previous company, focusing on clean design and seamless functionality, where I worked as an website developer.
            </p>

            <!-- Desktop Preview Frame -->
            <div class="mt-4 w-full max-w-[500px] mx-auto rounded-xl border border-gray-700 bg-gray-900 shadow-lg overflow-hidden relative">
                <!-- Brave/Chrome-like top bar -->
                <div class="flex items-center px-3 py-2 bg-gray-800 border-b border-gray-700">
                    <div class="flex-1">
                        <div class="mx-auto w-full bg-gray-700 rounded-md px-3 py-1 text-xs text-gray-300 text-center truncate">
                            https://dreamfactory.ph/
                        </div>
                    </div>
                </div>
                <!-- Website Preview -->
                <div class="relative w-full h-[300px] overflow-hidden">
                    <iframe src="https://dreamfactory.ph/"
                        class="absolute top-0 left-0 w-[1200px] h-[900px] scale-[0.4] origin-top-left"
                        loading="lazy"></iframe>
                    <!-- Overlay blocker (blocks clicks but allows scroll) -->
                    <div class="absolute inset-0 cursor-pointer" style="background: transparent;"></div>
                </div>
            </div>
        </a>

        <!-- Project 2 -->
        <a href="https://palenke.ph/index.php?page=home&pageID=home" target="_blank"
            class="group p-6 bg-gray-800/70 rounded-xl shadow-lg border border-cyan-400/10 hover:shadow-purple-500/40 hover:-translate-y-2 transition block"
            data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="800">
            <h3 class="text-xl font-semibold text-white">PALENKE.PH</h3>
            <p class="mt-3 text-gray-400">
                An e-commerce platform I helped develop for a sister company of my previous employer, where I worked as an outsourced developer.
            </p>

            <!-- Desktop Preview Frame -->
            <div class="mt-4 w-full max-w-[500px] mx-auto rounded-xl border border-gray-700 bg-gray-900 shadow-lg overflow-hidden relative">
                <!-- Brave/Chrome-like top bar -->
                <div class="flex items-center px-3 py-2 bg-gray-800 border-b border-gray-700">
                    <div class="flex-1">
                        <div class="mx-auto w-full bg-gray-700 rounded-md px-3 py-1 text-xs text-gray-300 text-center truncate">
                            https://palenke.ph/
                        </div>
                    </div>
                </div>
                <!-- Website Preview -->
                <div class="relative w-full h-[300px] overflow-hidden">
                    <iframe src="https://palenke.ph/index.php?page=home&pageID=home"
                        class="absolute top-0 left-0 w-[1200px] h-[900px] scale-[0.4] origin-top-left"
                        loading="lazy"></iframe>
                    <!-- Overlay blocker -->
                    <div class="absolute inset-0 cursor-pointer" style="background: transparent;"></div>
                </div>
            </div>
        </a>

    </div>
</section>

<!-- Init AOS -->
<script>
    AOS.init({
        once: true, // animation will happen only once while scrolling
        offset: 120, // offset (in px) from the original trigger point
    });
</script>