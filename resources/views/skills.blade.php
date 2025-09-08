<section id="skills" class="min-h-screen bg-gray-950 flex flex-col items-center px-6 py-20">

    <!-- Skills Grid -->
    <h2 class="text-4xl font-bold text-cyan-400" data-aos="flip-up">My Skills</h2>

    <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl w-full">

        <!-- HTML -->
        <div class="flex flex-col items-center space-y-2 p-6 bg-gray-900/50 rounded-2xl shadow-lg
                hover:scale-110 hover:shadow-cyan-400/30 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="100">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                alt="HTML" class="w-16 h-16">
            <span class="text-lg font-semibold">HTML</span>
        </div>

        <!-- CSS -->
        <div class="flex flex-col items-center space-y-2 p-6 bg-gray-900/50 rounded-2xl shadow-lg
                hover:scale-110 hover:shadow-cyan-400/30 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="200">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                alt="CSS" class="w-16 h-16">
            <span class="text-lg font-semibold">CSS</span>
        </div>

        <!-- JavaScript -->
        <div class="flex flex-col items-center space-y-2 p-6 bg-gray-900/50 rounded-2xl shadow-lg
                hover:scale-110 hover:shadow-cyan-400/30 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="300">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                alt="JavaScript" class="w-16 h-16">
            <span class="text-lg font-semibold">JavaScript</span>
        </div>

        <!-- Laravel -->
        <div class="flex flex-col items-center space-y-2 p-6 bg-gray-900/50 rounded-2xl shadow-lg
                hover:scale-110 hover:shadow-cyan-400/30 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="400">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
                alt="Laravel" class="w-16 h-16">
            <span class="text-lg font-semibold">Laravel</span>
        </div>

        <!-- Tailwind CSS -->
        <div class="flex flex-col items-center space-y-2 p-6 bg-gray-900/50 rounded-2xl shadow-lg
                hover:scale-110 hover:shadow-cyan-400/30 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="500">
            <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg"
                alt="Tailwind" class="w-16 h-16">
            <span class="text-lg font-semibold">Tailwind</span>
        </div>

        <!-- Alpine.js -->
        <div class="flex flex-col items-center space-y-2 p-6 bg-gray-900/50 rounded-2xl shadow-lg
                hover:scale-110 hover:shadow-cyan-400/30 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="600">
            <img src="https://avatars.githubusercontent.com/u/59030169?s=200&v=4"
                alt="Alpine.js" class="w-16 h-16 rounded-lg bg-white p-2">
            <span class="text-lg font-semibold">Alpine.js</span>
        </div>

        <!-- Livewire -->
        <div class="flex flex-col items-center space-y-2 p-6 bg-gray-900/50 rounded-2xl shadow-lg
                hover:scale-110 hover:shadow-cyan-400/30 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="700">
            <img src="https://livewire.laravel.com/img/twitter.png"
                alt="Livewire" class="w-16 h-16 rounded-lg">
            <span class="text-lg font-semibold">Livewire</span>
        </div>

        <!-- React.js -->
        <div class="flex flex-col items-center space-y-2 p-6 bg-gray-900/50 rounded-2xl shadow-lg
                hover:scale-110 hover:shadow-cyan-400/30 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="800">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                alt="React.js" class="w-16 h-16">
            <span class="text-lg font-semibold">React.js</span>
        </div>

    </div>



    <!-- Widgets -->
    <div class="mt-16 grid md:grid-cols-2 gap-10 w-full max-w-5xl">
        <!-- Weather Widget -->
        <div class="p-8 bg-gray-800/70 rounded-2xl shadow-lg border border-cyan-400/10 hover:shadow-purple-500/40 hover:-translate-y-2 transition" data-aos="fade-up" data-aos-delay="500">
            <h3 class="text-2xl font-semibold text-center">🌤️ Live Weather Report</h3>
            <p class="mt-3 text-gray-400 text-center">Check real-time weather updates directly in my portfolio</p>
            <div id="weather-widget" class="mt-6 p-4 bg-gray-900 rounded-lg text-center">
                <input id="city" type="text" placeholder="Enter city (e.g., Manila)" class="px-3 py-2 rounded-lg text-black w-full mb-3 focus:outline-none">
                <button onclick="getWeather()" class="px-4 py-2 bg-cyan-500 rounded-lg hover:bg-cyan-600 transition">Get Weather</button>
                <div id="weather-result" class="mt-4 text-gray-200"></div>
            </div>
        </div>

        <!-- Crypto Tracker -->
        <div class="p-8 bg-gray-800/70 rounded-2xl shadow-lg border border-cyan-400/10 hover:shadow-green-500/40 hover:-translate-y-2 transition" data-aos="fade-up" data-aos-delay="600">
            <h3 class="text-2xl font-semibold text-center">💰 Live Crypto Prices</h3>
            <p class="mt-3 text-gray-400 text-center">Track the latest cryptocurrency prices in real-time</p>
            <div id="crypto-widget" class="mt-6 p-4 bg-gray-900 rounded-lg text-center">
                <button onclick="getCrypto()" class="px-4 py-2 bg-green-500 rounded-lg hover:bg-green-600 transition">Refresh Prices</button>
                <div id="crypto-result" class="mt-4 text-gray-200"></div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        async function getWeather() {
            const city = document.getElementById('city').value.trim();
            if (!city) {
                document.getElementById('weather-result').innerHTML = `<p class="text-red-400">Please enter a city name</p>`;
                return;
            }
            try {
                const geoRes = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(city)}`);
                const geoData = await geoRes.json();
                if (!geoData[0]) {
                    document.getElementById('weather-result').innerHTML = `<p class="text-red-400">City not found</p>`;
                    return;
                }
                const {
                    lat,
                    lon,
                    display_name
                } = geoData[0];
                const weatherRes = await fetch(`https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current_weather=true`);
                const weatherData = await weatherRes.json();
                const w = weatherData.current_weather;
                document.getElementById('weather-result').innerHTML = `
                    <p class="text-lg font-bold">${display_name.split(',')[0]}</p>
                    <p class="mt-2">Temperature: ${w.temperature}°C</p>
                    <p class="mt-2">Wind Speed: ${w.windspeed} m/s</p>`;
            } catch (err) {
                document.getElementById('weather-result').innerHTML = `<p class="text-red-400">Error fetching weather</p>`;
            }
        }
        async function getCrypto() {
            try {
                const res = await fetch("https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,dogecoin&vs_currencies=usd&include_24hr_change=true");
                const data = await res.json();
                const btc = data.bitcoin,
                    eth = data.ethereum,
                    doge = data.dogecoin;
                document.getElementById('crypto-result').innerHTML = `
                    <p class="text-lg font-bold">Bitcoin (BTC): $${btc.usd.toLocaleString()} <span class="${btc.usd_24h_change > 0 ? 'text-green-400' : 'text-red-400'}">(${btc.usd_24h_change.toFixed(2)}%)</span></p>
                    <p class="mt-2">Ethereum (ETH): $${eth.usd.toLocaleString()} <span class="${eth.usd_24h_change > 0 ? 'text-green-400' : 'text-red-400'}">(${eth.usd_24h_change.toFixed(2)}%)</span></p>
                    <p class="mt-2">Dogecoin (DOGE): $${doge.usd.toLocaleString()} <span class="${doge.usd_24h_change > 0 ? 'text-green-400' : 'text-red-400'}">(${doge.usd_24h_change.toFixed(2)}%)</span></p>`;
            } catch (err) {
                document.getElementById('crypto-result').innerHTML = `<p class="text-red-400">Error fetching crypto data</p>`;
            }
        }
        getCrypto();
        setInterval(getCrypto, 60000);
    </script>
    @endpush
</section>