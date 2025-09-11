<!-- Header at Color Palette Buttons -->
<header class="fixed top-0 left-0 w-full z-50 bg-gray-900/60 backdrop-blur-lg border-b border-gray-700/50 shadow-lg shadow-black/20">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="#home"
            class="text-2xl font-extrabold tracking-wider bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-500 bg-clip-text text-transparent hover:scale-110 hover:brightness-125 transition-all duration-300">
            AJM<span class="text-gray-200">Portfolio</span>
        </a>

        <!-- Navigation -->
        <nav class="hidden md:flex space-x-8 text-lg font-medium">
            <a href="#about"
                class="relative group text-gray-300 hover:text-cyan-400 transition">
                About
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-cyan-400 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a href="#projects"
                class="relative group text-gray-300 hover:text-cyan-400 transition">
                Projects
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-cyan-400 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a href="#skills"
                class="relative group text-gray-300 hover:text-cyan-400 transition">
                Skills
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-cyan-400 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a href="#contact"
                class="relative group text-gray-300 hover:text-cyan-400 transition">
                Contact
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-cyan-400 group-hover:w-full transition-all duration-300"></span>
            </a>
        </nav>

        <!-- Color Palette Buttons -->
        <div class="fixed top-28 right-6 flex flex-col space-y-3 z-50">
            <button onclick="gradualTheme('#111827')" class="w-10 h-10 rounded-full bg-gray-950 border border-gray-700 shadow-md hover:scale-110 hover:ring-2 hover:ring-cyan-400/50 transition"></button>
            <button onclick="gradualTheme('#1f2937')" class="w-10 h-10 rounded-full bg-gray-800 border border-gray-700 shadow-md hover:scale-110 hover:ring-2 hover:ring-cyan-400/50 transition"></button>
            <button onclick="gradualTheme('#064e3b')" class="w-10 h-10 rounded-full bg-green-900 border border-gray-700 shadow-md hover:scale-110 hover:ring-2 hover:ring-cyan-400/50 transition"></button>
            <button onclick="gradualTheme('#5C4033')" class="w-10 h-10 rounded-full bg-[#5C4033] border border-gray-700 shadow-md hover:scale-110 hover:ring-2 hover:ring-cyan-400/50 transition"></button>
            <button onclick="gradualTheme('#1e3a8a')" class="w-10 h-10 rounded-full bg-blue-950 border border-gray-700 shadow-md hover:scale-110 hover:ring-2 hover:ring-cyan-400/50 transition"></button>
        </div>
    </div>
</header>

<!-- Astig Floating Chat UI -->
<div id="chat-container" class="fixed bottom-6 right-6 z-50 flex flex-col items-end">
    <!-- Floating Button -->
    <button id="chat-toggle-btn" class="w-16 h-16 rounded-full bg-gradient-to-br from-cyan-400 to-blue-500 shadow-lg text-white flex items-center justify-center text-3xl font-bold transition-transform transform hover:scale-110 hover:shadow-2xl">
        💬
    </button>

    <!-- Chat Box -->
    <div id="chat-box" class="mt-2 w-80 md:w-96 bg-gray-900/50 backdrop-blur-xl border border-gray-700 rounded-3xl flex flex-col overflow-hidden shadow-2xl hidden">
        <!-- Header -->
        <div id="chat-header" class="bg-gradient-to-r from-cyan-700 to-blue-800 px-5 py-3 flex justify-between items-center border-b border-gray-600 rounded-t-3xl text-white font-semibold cursor-pointer">
            Chat with AJM AI
            <button id="chat-minimize" class="text-gray-200 hover:text-white text-2xl font-bold">&minus;</button>
        </div>

        <!-- Guide / Suggested Questions -->
        <div id="chat-guide" class="px-4 py-3 bg-gradient-to-r from-cyan-900/70 via-blue-900/60 to-purple-900/70 text-gray-200 text-sm space-y-2 border-b border-gray-700 rounded-t-xl shadow-inner backdrop-blur-md">
            <div class="font-semibold text-cyan-400 mb-2 flex items-center space-x-2">
                <span>💡</span>
                <span>Try these questions:</span>
            </div>
            <ul class="space-y-1">
                <li class="chat-suggestion cursor-pointer hover:text-white hover:scale-105 transition-all bg-gray-800/40 px-3 py-1 rounded-lg shadow-sm">Who are you?</li>
                <li class="chat-suggestion cursor-pointer hover:text-white hover:scale-105 transition-all bg-gray-800/40 px-3 py-1 rounded-lg shadow-sm">Tell me about your projects</li>
                <li class="chat-suggestion cursor-pointer hover:text-white hover:scale-105 transition-all bg-gray-800/40 px-3 py-1 rounded-lg shadow-sm">What are your skills?</li>
                <li class="chat-suggestion cursor-pointer hover:text-white hover:scale-105 transition-all bg-gray-800/40 px-3 py-1 rounded-lg shadow-sm">How can I contact you?</li>
                <li class="chat-suggestion cursor-pointer hover:text-white hover:scale-105 transition-all bg-gray-800/40 px-3 py-1 rounded-lg shadow-sm">How can I change the site theme?</li>
            </ul>
        </div>

        <!-- Messages (Scrollable) -->
        <div id="chat-messages" class="flex-1 p-4 space-y-3 overflow-y-auto text-gray-200 max-h-96 scrollbar-thin scrollbar-thumb-cyan-500 scrollbar-track-gray-700">
            <div class="text-sm text-gray-400 italic">Hi! Ask me anything about AJM's portfolio.</div>
        </div>

        <!-- Input -->
        <div class="px-5 py-3 border-t border-gray-700 bg-gray-800/70 flex items-center space-x-2 rounded-b-3xl backdrop-blur-sm">
            <input type="text" id="chat-input" placeholder="Type a question..." class="flex-1 px-4 py-2 rounded-2xl bg-gray-700/50 text-gray-200 focus:outline-none focus:ring-2 focus:ring-cyan-400 placeholder-gray-400 transition" />
            <button id="chat-send" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white px-4 py-2 rounded-2xl shadow-lg transition-transform transform hover:scale-105">Send</button>
        </div>
    </div>
</div>

<script>
    const chatToggleBtn = document.getElementById('chat-toggle-btn');
    const chatBox = document.getElementById('chat-box');
    const chatMinimize = document.getElementById('chat-minimize');
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const chatSendBtn = document.getElementById('chat-send');
    const chatSuggestions = document.querySelectorAll('.chat-suggestion');

    // Toggle chat
    chatToggleBtn.addEventListener('click', () => {
        chatBox.classList.remove('hidden');
        chatToggleBtn.classList.add('hidden');
    });
    chatMinimize.addEventListener('click', () => {
        chatBox.classList.add('hidden');
        chatToggleBtn.classList.remove('hidden');
    });

    // Utility
    function randomFromArray(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }

    function matchesKeywords(message, keywords) {
        return keywords.some(keyword => message.toLowerCase().includes(keyword));
    }

    // AI Keyword Sets
    const aboutKeywords = ['about', 'who are you', 'introduce', 'yourself'];
    const projectsKeywords = ['projects', 'portfolio', 'work', 'examples'];
    const skillsKeywords = ['skills', 'abilities', 'technologies', 'tech stack'];
    const contactKeywords = ['contact', 'reach you', 'email', 'how to reach'];
    const themeKeywords = ['theme', 'colors', 'background', 'palette'];

    // AI Responses
    const aboutResponses = [
        "Hi! I'm Arron, a passionate web developer focused on modern interactive websites.",
        "Hey! Arron here, I love creating dynamic web apps and beautiful portfolio sites.",
        "Hello! I'm Arron, and I build responsive websites with engaging user interfaces.",
        "Hi there! I specialize in modern web development using Tailwind CSS, Laravel, and JS.",
        "Hey! I'm Arron, dedicated to crafting interactive web experiences.",
        "Hello! My goal is to create websites that are not just functional but visually appealing.",
        "Hi! I’m Arron, a developer who combines design and functionality in every project.",
        "Hey! I love building projects that showcase creativity and clean code."
    ];

    const projectsResponses = [
        "I've worked on portfolio websites, dynamic web apps, and interactive UI projects. Check the Projects section!",
        "My projects include modern web apps and creative portfolio sites. You can explore them in the Projects section.",
        "I specialize in building engaging websites. My Projects section shows some examples.",
        "Some of my work includes responsive websites and interactive web applications. Take a look at Projects!",
        "I create projects that combine design, functionality, and interactivity. See Projects for details.",
        "Check out the Projects section to see my work in web development and design.",
        "I enjoy building projects that solve real-world problems using modern web technologies.",
        "My portfolio showcases creative and functional websites I've built. Projects are detailed there."
    ];

    const skillsResponses = [
        "I know HTML, Tailwind CSS, JavaScript, Laravel, Livewire, and more. The Skills section has details!",
        "Skills? I have experience with front-end and back-end web development. See Skills section for full list.",
        "I’m proficient in web technologies like HTML, JS, Tailwind, Laravel, Livewire, and others. Check Skills!",
        "I love coding with modern frameworks and libraries. Skills section shows my expertise.",
        "My skills include responsive design, interactive UI, and clean, maintainable code.",
        "Check the Skills section to see my proficiencies in both front-end and back-end development.",
        "I focus on creating efficient and visually appealing websites. Skills reflect my capabilities.",
        "I continuously improve my skills in web development to keep up with modern trends."
    ];

    const contactResponses = [
        "You can contact me via the Contact section, or email me at manlapazarronjohn@gmail.com.",
        "Reach me through the Contact page or drop an email at manlapazarronjohn@gmail.com.",
        "Feel free to connect via the Contact section or send an email to manlapazarronjohn@gmail.com.",
        "I'd love to hear from you! Use the Contact page or email me directly.",
        "Need to get in touch? Check the Contact section for ways to reach me.",
        "You can message me using the Contact form, or email me anytime.",
        "For inquiries or collaborations, visit the Contact section or email me.",
        "Want to connect? My Contact page has all the info you need."
    ];

    const themeResponses = [
        "Change the site's theme using the color palette buttons on top-right.",
        "You can pick different colors using the palette buttons for a new theme.",
        "Try the color buttons on the top-right to customize the site's theme.",
        "The color palette allows you to personalize the background and section colors.",
        "Feel free to explore different color themes using the palette buttons.",
        "Switch between colors to see how the website adapts in real-time.",
        "Customize your viewing experience with the color palette buttons.",
        "You can make the site look dark, vibrant, or subtle using the theme buttons."
    ];

    const fallbackResponses = [
        "Interesting question! I can give info about my portfolio, projects, skills, or contact details.",
        "Good question! I’m here to guide you through my portfolio and show you what I can do.",
        "I can answer that in the context of my portfolio. Maybe check Projects or Skills for more info.",
        "That's a great question! While I can't answer everything, I can show you my work, skills, and contact options.",
        "I love questions! You might find the Projects or Skills section interesting too.",
        "I can provide useful info about my website, portfolio, or how to get in touch.",
        "Even though that's off-topic, I can share details about my portfolio, projects, or skills.",
        "Curious? I can explain more about my work, skills, or the website itself.",
        "I’m here to guide you through the portfolio experience and show you my skills.",
        "That’s an interesting topic! I can link it to my Projects, Skills, or Contact sections."
    ];

    function aiResponse(message) {
        const msg = message.toLowerCase();

        // Keywords
        const aboutKeywords = ['about', 'who are you', 'introduce', 'yourself'];
        const projectsKeywords = ['projects', 'portfolio', 'work', 'examples'];
        const skillsKeywords = ['skills', 'abilities', 'technologies', 'tech stack'];
        const contactKeywords = ['contact', 'reach you', 'email', 'how to reach'];
        const themeKeywords = ['theme', 'colors', 'background', 'palette'];

        const allKeywords = [...aboutKeywords, ...projectsKeywords, ...skillsKeywords, ...contactKeywords, ...themeKeywords];

        // Check if message contains any portfolio-related keyword
        const isRelevant = allKeywords.some(keyword => msg.includes(keyword));

        if (!isRelevant) {
            // Neutral fallback for guesses/random input (confused style)
            const neutralResponses = [
                "Uh… I’m not sure I understand that. Maybe ask me about my portfolio?",
                "Hmm… could you rephrase that? I can answer questions about my projects or skills.",
                "Sorry, I don’t quite get what you mean. Try asking about my work or contact info!",
                "I’m a bit confused… you might want to ask about my portfolio instead.",
                "Hmm… that’s tricky! I can only answer portfolio-related questions.",
                "Oh… I’m not sure what that means. Ask me about my projects or skills?",
                "Hmm… that’s unclear to me. I can tell you about my portfolio though!",
                "I’m not following… maybe try a question about my work or skills?",
                "Sorry… I don’t quite understand. Try asking about my projects or contact info.",
                "Hmm… that’s puzzling. I can guide you through my portfolio if you ask about it!"
            ];
            return neutralResponses[Math.floor(Math.random() * neutralResponses.length)];
        }


        // Normal response logic
        if (matchesKeywords(msg, aboutKeywords)) return randomFromArray(aboutResponses);
        if (matchesKeywords(msg, projectsKeywords)) return randomFromArray(projectsResponses);
        if (matchesKeywords(msg, skillsKeywords)) return randomFromArray(skillsResponses);
        if (matchesKeywords(msg, contactKeywords)) return randomFromArray(contactResponses);
        if (matchesKeywords(msg, themeKeywords)) return randomFromArray(themeResponses);

        // Fallback (if keyword detected but not matched perfectly)
        return randomFromArray(fallbackResponses);
    }


    // Typewriter effect
    function typeWriterEffect(element, text, index = 0, speed = 25) {
        if (index < text.length) {
            element.textContent += text.charAt(index);
            index++;
            chatMessages.scrollTop = chatMessages.scrollHeight;
            setTimeout(() => typeWriterEffect(element, text, index, speed), speed);
        }
    }

    // Animated typing indicator
    function typingIndicator() {
        const div = document.createElement('div');
        div.className = 'italic text-gray-400 text-sm self-start flex items-center space-x-1';
        div.innerHTML = `AI is typing<span class="dots">...</span>`;
        chatMessages.appendChild(div);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        return div;
    }

    // Send message
    function sendMessage(message) {
        if (!message) return;
        const userDiv = document.createElement('div');
        userDiv.textContent = message;
        userDiv.className = 'bg-gray-700/30 px-3 py-2 rounded-2xl text-sm self-end shadow-sm';
        chatMessages.appendChild(userDiv);

        const typingDiv = typingIndicator();
        setTimeout(() => {
            chatMessages.removeChild(typingDiv);
            const botDiv = document.createElement('div');
            botDiv.className = 'bg-gradient-to-r from-cyan-500/50 to-blue-500/50 px-3 py-2 rounded-2xl text-sm self-start shadow-md text-white';
            chatMessages.appendChild(botDiv);
            typeWriterEffect(botDiv, aiResponse(message));
        }, 1200);
    }

    // Input handling
    chatInput.addEventListener('keypress', e => {
        if (e.key === 'Enter' && chatInput.value.trim() !== '') {
            sendMessage(chatInput.value.trim());
            chatInput.value = '';
        }
    });
    chatSendBtn.addEventListener('click', () => {
        if (chatInput.value.trim() !== '') {
            sendMessage(chatInput.value.trim());
            chatInput.value = '';
        }
    });

    // Suggested questions
    chatSuggestions.forEach(suggestion => {
        suggestion.addEventListener('click', () => sendMessage(suggestion.textContent));
    });
</script>

<style>
    body {
        transition: background-color 2s ease;
    }
</style>

<!-- Script sa dulo ng page -->
<script>
    const header = document.querySelector('header');
    const navLinks = document.querySelectorAll('header nav a');

    const darkMap = {
        '#111827': '#080a10', // gray-950 → very dark gray
        '#1f2937': '#0f131c', // gray-800 → very dark gray-blue
        '#064e3b': '#01261b', // green-900 → very dark green
        '#5C4033': '#2b2019', // brown → very dark brown
        '#1e3a8a': '#0c1c45' // blue-950 → very dark blue
    };

    function gradualTheme(color) {
        // Body background
        document.body.style.backgroundColor = color;

        // Sections
        const sections = {
            about: document.getElementById('about'),
            skills: document.getElementById('skills'),
            projects: document.getElementById('projects'),
            contact: document.getElementById('contact')
        };

        for (const key in sections) {
            const sec = sections[key];
            if (!sec) continue;

            if ((key === 'about' || key === 'projects') && darkMap[color]) {
                sec.style.backgroundColor = darkMap[color];
            } else {
                sec.style.backgroundColor = color;
            }
        }

        // Header background
        if (header) header.style.backgroundColor = color + 'b3';

        // Nav links
        navLinks.forEach(link => {
            link.style.color = (color === '#111827' || color === '#1f2937') ? '#cbd5e1' : '#ffffff';
        });

        // 🎨 Fade color = darkMap version ng theme
        const fade = document.getElementById('video-fade');
        if (fade) {
            const dark = darkMap[color] ?? "#000000"; // fallback black
            fade.style.background = `linear-gradient(to top, ${dark}, transparent)`;
        }

        // Save theme
        localStorage.setItem('themeColor', color);
    }



    // Apply saved theme on load
    window.addEventListener('DOMContentLoaded', () => {
        const savedColor = localStorage.getItem('themeColor');
        if (savedColor) gradualTheme(savedColor);
    });
</script>