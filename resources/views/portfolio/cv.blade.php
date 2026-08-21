@extends('portfolio.layout')

@section('title', 'CV')

@section('content')
    <section
        class="bg-neutral-50 dark:bg-neutral-900 text-neutral-800 dark:text-neutral-200 py-20 px-8 text-center border-b border-neutral-200 dark:border-neutral-800">
        <div class="max-w-[1400px] mx-auto">
            <h1 class="text-4xl mb-4 font-bold -tracking-wide text-neutral-950 dark:text-white">Curriculum Vitae</h1>
            <p class="text-[1.05rem] opacity-80 max-w-[600px] mx-auto tracking-wide text-neutral-600 dark:text-neutral-400">A
                summary of my education, technical
                skills, and creative journey in 3D design and computer science.</p>
        </div>
        <div class="mt-8 flex flex-wrap justify-center gap-x-8 gap-y-3 text-sm font-medium">
            <a href="mailto:hugo@berneis.com"
                class="flex items-center gap-2 text-neutral-600 dark:text-neutral-400 hover:text-blue-600 dark:hover:text-blue-500 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                    <polyline points="22,6 12,13 2,6" />
                </svg>
                hugo@berneis.com
            </a>
            {{-- <a href="tel:+15039912466"
                class="flex items-center gap-2 text-neutral-600 dark:text-neutral-400 hover:text-blue-600 dark:hover:text-blue-500 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                (503) 991-2466
            </a> --}}
            <span class="flex items-center gap-2 text-neutral-600 dark:text-neutral-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                    <circle cx="12" cy="10" r="3" />
                </svg>
                Portland, OR
            </span>
            <a href="https://www.linkedin.com/in/hugoberneis/" target="_blank" rel="noopener noreferrer"
                class="flex items-center gap-2 text-neutral-600 dark:text-neutral-400 hover:text-blue-600 dark:hover:text-blue-500 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                    <rect x="2" y="9" width="4" height="12" />
                    <circle cx="4" cy="4" r="2" />
                </svg>
                linkedin.com/in/hugoberneis
            </a>
        </div>
    </section>

    <div class="bg-white dark:bg-neutral-950 py-12 px-8 transition-colors duration-300">
        <div class="max-w-[900px] mx-auto space-y-12">
            <!-- About Me -->
            <section>
                <h2
                    class="text-2xl font-bold text-neutral-900 dark:text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-300 dark:bg-neutral-700"></span>
                    About Me
                </h2>
                <div
                    class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-8 rounded-sm">
                    <p class="text-neutral-600 dark:text-neutral-400 leading-relaxed text-lg">
                        Motivated college student with a passion for tech and problem solving. Currently pursuing computer
                        science while making personal projects. Eager to apply my skills and creativity in a professional
                        environment.
                    </p>
                </div>
            </section>

            <!-- Education -->
            <section>
                <h2 class="text-2xl font-bold text-neutral-900 dark:text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-300 dark:bg-neutral-700"></span>
                    Education
                </h2>
                <div class="space-y-4">
                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-8 rounded-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-1">New York University</h3>
                                <p class="text-neutral-600 dark:text-neutral-400 font-medium">B.S. in Computer Science</p>
                            </div>
                            <span
                                class="text-sm bg-neutral-100 dark:bg-neutral-800 text-neutral-600 dark:text-neutral-400 px-3 py-1 rounded-sm">2026
                                — 2029</span>
                        </div>
                        <p class="text-neutral-500 mb-6 text-sm">GPA: ~</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">Computer
                                Science Major</span>
                            <span
                                class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">Business Minor</span>
                        </div>
                    </div>
                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-8 rounded-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-1">Seattle University</h3>
                                <p class="text-neutral-600 dark:text-neutral-400 font-medium">B.S. in Computer Science</p>
                            </div>
                            <span
                                class="text-sm bg-neutral-100 dark:bg-neutral-800 text-neutral-600 dark:text-neutral-400 px-3 py-1 rounded-sm">2025
                                — 2026</span>
                        </div>
                        <p class="text-neutral-500 mb-6 text-sm">GPA: 3.8</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">Computer
                                Science Major</span>
                            <span
                                class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">ACM
                                Member (CS Club)</span>
                        </div>
                    </div>

                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-8 rounded-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-1">Grant High School</h3>
                                <p class="text-neutral-600 dark:text-neutral-400 font-medium">High School Diploma</p>
                            </div>
                            <span
                                class="text-sm bg-neutral-100 dark:bg-neutral-800 text-neutral-600 dark:text-neutral-400 px-3 py-1 rounded-sm">2021
                                — 2025</span>
                        </div>
                        <p class="text-neutral-500 mb-6 text-sm">GPA: 3.6</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">AP
                                Computer Science</span>
                            <span
                                class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">AP
                                Calc AB</span>
                            <span
                                class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">Track
                                & Field</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Technical Skills -->
            <section>
                <h2 class="text-2xl font-bold text-neutral-900 dark:text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-300 dark:bg-neutral-700"></span>
                    Technical Skills
                </h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-6 rounded-sm">
                        <h3 class="font-bold text-neutral-400 dark:text-neutral-500 mb-4 uppercase text-xs tracking-widest">
                            Programming</h3>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-2 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs">Python</span>
                            <span
                                class="px-2 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs">C#</span>
                            <span
                                class="px-2 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs">HTML/CSS</span>
                        </div>
                    </div>
                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-6 rounded-sm">
                        <h3 class="font-bold text-neutral-400 dark:text-neutral-500 mb-4 uppercase text-xs tracking-widest">
                            Tools</h3>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-2 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs">Git</span>
                            <span
                                class="px-2 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs">VS
                                Code</span>
                            <span
                                class="px-2 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs">Unity</span>
                            <span
                                class="px-2 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs">Shapr3D</span>
                        </div>
                    </div>
                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-6 rounded-sm">
                        <h3 class="font-bold text-neutral-400 dark:text-neutral-500 mb-4 uppercase text-xs tracking-widest">
                            Other</h3>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-2 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs">Problem
                                Solving</span>
                            <span
                                class="px-2 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs">Team
                                Collaboration</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Projects -->
            <section>
                <h2 class="text-2xl font-bold text-neutral-900 dark:text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-300 dark:bg-neutral-700"></span>
                    Key Projects
                </h2>
                <div class="space-y-6">
                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-8 rounded-sm group hover:border-neutral-400 dark:hover:border-neutral-700 transition-colors">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-neutral-900 dark:text-white">Personal Portfolio Website</h3>
                            <span class="text-sm text-neutral-500">2025</span>
                        </div>
                        <p class="text-neutral-600 dark:text-neutral-400 mb-6 leading-relaxed">
                            Designed and developed a responsive personal website showcasing projects and skills. Built with
                            Laravel, Tailwind CSS, and Three.js.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">Laravel</span>
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">Tailwind</span>
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">Three.js</span>
                            </div>
                            <!-- <a href="https://github.com/hberneis/resume" target="_blank" class="text-sm text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">Source Code →</a> -->
                        </div>
                    </div>

                    {{-- <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-8 rounded-sm group hover:border-neutral-400 dark:hover:border-neutral-700 transition-colors">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-neutral-900 dark:text-white">Piano Piece Generator</h3>
                            <span class="text-sm text-neutral-500">2025</span>
                        </div>
                        <p class="text-neutral-600 dark:text-neutral-400 mb-6 leading-relaxed">
                            A generator helping pianists find new pieces, using a custom library and hosted via Cloudflare.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">Cloudflare</span>
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">JS</span>
                            </div>
                            <a href="https://piecebypiece.pages.dev" target="_blank"
                                class="text-sm text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">Live
                                Demo →</a>
                        </div>
                    </div> --}}

                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-8 rounded-sm group hover:border-neutral-400 dark:hover:border-neutral-700 transition-colors">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-neutral-900 dark:text-white">Tower Offense</h3>
                            <span class="text-sm text-neutral-500">2024</span>
                        </div>
                        <p class="text-neutral-600 dark:text-neutral-400 mb-6 leading-relaxed">
                            A 2D game concept reverse-engineering the tower defense genre for a high school game jam.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">Unity
                                    2D</span>
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">C#</span>
                            </div>
                            <a href="https://hberneis.itch.io/tower-offense" target="_blank"
                                class="text-sm text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">View
                                on Itch.io →</a>
                        </div>
                    </div>

                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-8 rounded-sm group hover:border-neutral-400 dark:hover:border-neutral-700 transition-colors">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-neutral-900 dark:text-white">Capstone Project</h3>
                            <span class="text-sm text-neutral-500">2024 — 2025</span>
                        </div>
                        <p class="text-neutral-600 dark:text-neutral-400 mb-6 leading-relaxed">
                            Group-based software development life cycle (SDLC) simulation. Collaborated in a team of
                            four over six months with daily submissions and code reviews.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">SDLC</span>
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">Trello</span>
                                <span
                                    class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-200 dark:bg-neutral-800/50 px-2 py-0.5 rounded-sm">Git</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience -->
            <section>
                <h2 class="text-2xl font-bold text-neutral-900 dark:text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-300 dark:bg-neutral-700"></span>
                    Experience
                </h2>
                <div class="space-y-4">
                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-8 rounded-sm">
                        <div class="flex justify-between items-start mb-1 gap-4">
                            <div>
                                <h3 class="text-xl font-bold text-neutral-900 dark:text-white mb-1">User Experience
                                    Researcher</h3>
                                <p class="text-neutral-600 dark:text-neutral-400 font-medium">Lushy.app · Internship</p>
                            </div>
                            <span
                                class="text-sm bg-neutral-100 dark:bg-neutral-800 text-neutral-600 dark:text-neutral-400 px-3 py-1 rounded-sm shrink-0">Jul
                                2025 — Aug 2025</span>
                        </div>
                        <p class="text-neutral-500 mb-6 text-sm">Portland, Oregon, United States · Remote</p>
                        <ul class="text-neutral-500 dark:text-neutral-400 space-y-2 text-sm list-inside list-disc mb-6">
                            <li>Developed 5 customized AI for game developers by prompting LLMs, generating well
                                defined sprites with high accuracy.</li>
                            <li>Incorporated 10 detailed lists and libraries creating a friendlier user environment,
                                improving accessibility for users.</li>
                            <li>Integrated audio, image, 3D model, and text generation into models, broadening user
                                options with specific needs.</li>
                            <li>Refined interface language and syntax for clarity and consistency, resulting in a more
                                intuitive user experience.</li>
                            <li>Tracked costs of generation, noting which generation types and models (ChatGPT, Gemini,
                                Claude) cost more.</li>
                        </ul>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">Prompt
                                Engineering</span>
                            <span
                                class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">User
                                Experience (UX)</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Certificates -->
            <section>
                <h2 class="text-2xl font-bold text-neutral-900 dark:text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-300 dark:bg-neutral-700"></span>
                    Certificates
                </h2>

                <!-- Featured certificate -->
                <div
                    class="bg-neutral-50 dark:bg-neutral-900 border-2 border-neutral-300 dark:border-neutral-700 p-8 rounded-sm mb-3">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <img src="{{ asset('images/certificates/claude-certified-architect-foundations.webp') }}"
                            alt="Claude Certified Architect - Foundations certificate"
                            class="w-full md:w-72 shrink-0 rounded-sm border border-neutral-200 dark:border-neutral-800">
                        <div class="flex-1 w-full">
                            <div class="flex justify-between items-start mb-1 gap-4">
                                <h3 class="text-xl font-bold text-neutral-900 dark:text-white">Claude Certified Architect —
                                    Foundations</h3>
                                <span
                                    class="text-sm bg-neutral-100 dark:bg-neutral-800 text-neutral-600 dark:text-neutral-400 px-3 py-1 rounded-sm shrink-0">Aug
                                    2026</span>
                            </div>
                            <p class="text-neutral-600 dark:text-neutral-400 font-medium mb-1">Anthropic</p>
                            <p class="text-neutral-500 mb-4 text-sm">Expires Aug 17, 2027</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">Agentic
                                    AI Architecture</span>
                                <span
                                    class="px-3 py-1 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-xs uppercase tracking-wider">Claude
                                    Deployment</span>
                            </div>
                            <a href="https://www.credly.com/badges/0ada30af-871b-4424-9cb0-bb33a75f7bd0" target="_blank"
                                rel="noopener noreferrer"
                                class="text-sm text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">View
                                Credential →</a>
                        </div>
                    </div>
                </div>

                <!-- Other certificates -->
                <div class="space-y-2">
                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-4 rounded-sm">
                        <div class="flex flex-wrap justify-between items-center gap-2 mb-2">
                            <h3 class="font-bold text-neutral-900 dark:text-white text-sm">Claude Code in Action</h3>
                            <span class="text-xs text-neutral-500">Jun 2026</span>
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-400 text-xs mb-2">Anthropic - Credential ID
                            9rwronysh5md</p>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Anthropic
                                    Claude</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Claude
                                    Skills</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Prompt 
                                    Engineering</span>
                            </div>
                            <a href="https://verify.skilljar.com/c/9rwronysh5md"
                                class="text-xs text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">
                                Certificate link →</a>
                        </div>
                    </div>

                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-4 rounded-sm">
                        <div class="flex flex-wrap justify-between items-center gap-2 mb-2">
                            <h3 class="font-bold text-neutral-900 dark:text-white text-sm">Python for Data Science, AI &
                                Development</h3>
                            <span class="text-xs text-neutral-500">Jun 2026</span>
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-400 text-xs mb-2">IBM - Credential ID S103EPRO0CNA</p>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Python</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Pandas</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">NumPy</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Jupyter</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Beautiful Soup</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">REST APIs</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Web Scraping</span>
                            </div>
                            <a href="https://www.coursera.org/account/accomplishments/verify/S1O3EPRO0CNA"
                                class="text-xs text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">
                                Certificate link →</a>
                        </div>
                    </div>

                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-4 rounded-sm">
                        <div class="flex flex-wrap justify-between items-center gap-2 mb-2">
                            <h3 class="font-bold text-neutral-900 dark:text-white text-sm">AI Fluency Framework &
                                Foundations</h3>
                            <span class="text-xs text-neutral-500">Add date</span>
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-400 text-xs mb-2">Anthropic - Credential ID
                            kmuhqxc4joyw</p>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">AI
                                    Fluency</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Delegation</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Discernment</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Responsible
                                    AI Use</span>
                            </div>
                            <a href="https://verify.skilljar.com/c/kmuhqxc4joyw"
                                class="text-xs text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">
                                Certificate link →</a>
                        </div>
                    </div>

                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-4 rounded-sm">
                        <div class="flex flex-wrap justify-between items-center gap-2 mb-2">
                            <h3 class="font-bold text-neutral-900 dark:text-white text-sm">Building with the Claude API</h3>
                            <span class="text-xs text-neutral-500">Add date</span>
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-400 text-xs mb-2">Anthropic - Credential ID
                            gnt9fzm27fdr</p>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Claude
                                    API</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Tool
                                    Use</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Streaming
                                    Responses</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">API
                                    Integration</span>
                            </div>
                            <a href="https://verify.skilljar.com/c/gnt9fzm27fdr"
                                class="text-xs text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">
                                Certificate link →</a>
                        </div>
                    </div>

                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-4 rounded-sm">
                        <div class="flex flex-wrap justify-between items-center gap-2 mb-2">
                            <h3 class="font-bold text-neutral-900 dark:text-white text-sm">Introduction to Model Context
                                Protocol</h3>
                            <span class="text-xs text-neutral-500">Add date</span>
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-400 text-xs mb-2">Anthropic - Credential ID
                            brfh4ozicj4n</p>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">MCP</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Tool
                                    Servers</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Protocol
                                    Design</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Context
                                    Management</span>
                            </div>
                            <a href="https://verify.skilljar.com/c/brfh4ozicj4n"
                                class="text-xs text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">
                                Certificate link →</a>
                        </div>
                    </div>

                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-4 rounded-sm">
                        <div class="flex flex-wrap justify-between items-center gap-2 mb-2">
                            <h3 class="font-bold text-neutral-900 dark:text-white text-sm">Introduction to Agent Skills</h3>
                            <span class="text-xs text-neutral-500">Add date</span>
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-400 text-xs mb-2">Anthropic - Credential ID
                            6n55dmy4zxao</p>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Agent
                                    Skills</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Skill
                                    Design</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Workflow
                                    Automation</span>
                            </div>
                            <a href="https://verify.skilljar.com/c/6n55dmy4zxao"
                                class="text-xs text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">
                                Certificate link →</a>
                        </div>
                    </div>

                    <div
                        class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 p-4 rounded-sm">
                        <div class="flex flex-wrap justify-between items-center gap-2 mb-2">
                            <h3 class="font-bold text-neutral-900 dark:text-white text-sm">Claude 101</h3>
                            <span class="text-xs text-neutral-500">Add date</span>
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-400 text-xs mb-2">Anthropic - Credential ID
                            dc2bo34otqbv</p>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">AI
                                    Fundamentals</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Conversational
                                    AI</span>
                                <span
                                    class="px-2 py-0.5 bg-white dark:bg-neutral-800 text-neutral-700 dark:text-neutral-300 border border-neutral-200 dark:border-transparent rounded-sm text-[10px] uppercase tracking-wider">Claude
                                    Basics</span>
                            </div>
                            <a href="https://verify.skilljar.com/c/dc2bo34otqbv"
                                class="text-xs text-neutral-600 dark:text-neutral-300 hover:text-neutral-950 dark:hover:text-white transition-colors">
                                Certificate link →</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer Action -->
            <div class="text-center pt-8 border-t border-neutral-200 dark:border-neutral-800">
                <p class="text-neutral-500 dark:text-neutral-400 mb-8">Ready to bring enthusiasm and technical skill to
                    your team.</p>
            </div>
        </div>
    </div>
@endsection
