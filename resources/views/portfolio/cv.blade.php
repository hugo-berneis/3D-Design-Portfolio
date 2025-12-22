@extends('portfolio.layout')

@section('title', 'CV')

@section('content')
    <section class="bg-neutral-950 text-neutral-200 py-20 px-8 text-center border-b border-neutral-800">
        <div class="max-w-[1400px] mx-auto">
            <h1 class="text-4xl mb-4 font-bold -tracking-wide text-white">Curriculum Vitae</h1>
            <p class="text-[1.05rem] opacity-80 max-w-[600px] mx-auto tracking-wide">A summary of my education, technical
                skills, and creative journey in 3D design and computer science.</p>
        </div>
    </section>

    <div class="bg-neutral-950 py-12 px-8">
        <div class="max-w-[900px] mx-auto space-y-12">
            <!-- About Me -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-700"></span>
                    About Me
                </h2>
                <div class="bg-neutral-900 border border-neutral-800 p-8 rounded-sm">
                    <p class="text-neutral-400 leading-relaxed text-lg">
                        Motivated college student with a passion for tech and problem solving. Currently pursuing computer
                        science while making personal projects. Eager to apply my skills and creativity in a professional
                        environment.
                    </p>
                </div>
            </section>

            <!-- Education -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-700"></span>
                    Education
                </h2>
                <div class="space-y-4">
                    <div class="bg-neutral-900 border border-neutral-800 p-8 rounded-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-white mb-1">Seattle University</h3>
                                <p class="text-neutral-400 font-medium">B.S. in Computer Science</p>
                            </div>
                            <span class="text-sm bg-neutral-800 text-neutral-400 px-3 py-1 rounded-sm">2025 — 2029</span>
                        </div>
                        <p class="text-neutral-500 mb-6 text-sm">GPA: ~</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs uppercase tracking-wider">Computer Science Major</span>
                            <span class="px-3 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs uppercase tracking-wider">ACM Member (CS Club)</span>
                        </div>
                    </div>

                    <div class="bg-neutral-900 border border-neutral-800 p-8 rounded-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-white mb-1">Grant Highschool</h3>
                                <p class="text-neutral-400 font-medium">High School Diploma</p>
                            </div>
                            <span class="text-sm bg-neutral-800 text-neutral-400 px-3 py-1 rounded-sm">2021 — 2025</span>
                        </div>
                        <p class="text-neutral-500 mb-6 text-sm">GPA: 3.6</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs uppercase tracking-wider">AP Computer Science</span>
                            <span class="px-3 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs uppercase tracking-wider">AP Calc AB</span>
                            <span class="px-3 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs uppercase tracking-wider">Track & Field</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Technical Skills -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-700"></span>
                    Technical Skills
                </h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-neutral-900 border border-neutral-800 p-6 rounded-sm">
                        <h3 class="font-bold text-white mb-4 uppercase text-xs tracking-widest text-neutral-500">Programming</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs">Python</span>
                            <span class="px-2 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs">C#</span>
                            <span class="px-2 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs">HTML/CSS</span>
                        </div>
                    </div>
                    <div class="bg-neutral-900 border border-neutral-800 p-6 rounded-sm">
                        <h3 class="font-bold text-white mb-4 uppercase text-xs tracking-widest text-neutral-500">Tools</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs">Git</span>
                            <span class="px-2 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs">VS Code</span>
                            <span class="px-2 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs">Unity</span>
                            <span class="px-2 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs">Shapr3D</span>
                        </div>
                    </div>
                    <div class="bg-neutral-900 border border-neutral-800 p-6 rounded-sm">
                        <h3 class="font-bold text-white mb-4 uppercase text-xs tracking-widest text-neutral-500">Other</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs">Problem Solving</span>
                            <span class="px-2 py-1 bg-neutral-800 text-neutral-300 rounded-sm text-xs">Team Collaboration</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Projects -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-700"></span>
                    Key Projects
                </h2>
                <div class="space-y-6">
                    <div class="bg-neutral-900 border border-neutral-800 p-8 rounded-sm group hover:border-neutral-700 transition-colors">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-white">Personal Portfolio Website</h3>
                            <span class="text-sm text-neutral-500">2025</span>
                        </div>
                        <p class="text-neutral-400 mb-6 leading-relaxed">
                            Designed and developed a responsive personal website showcasing projects and skills. Built with Laravel, Tailwind CSS, and Three.js.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-800/50 px-2 py-0.5 rounded-sm">Laravel</span>
                                <span class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-800/50 px-2 py-0.5 rounded-sm">Tailwind</span>
                                <span class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-800/50 px-2 py-0.5 rounded-sm">Three.js</span>
                            </div>
                            <!-- <a href="https://github.com/hberneis/resume" target="_blank" class="text-sm text-neutral-300 hover:text-white transition-colors">Source Code →</a> -->
                        </div>
                    </div>

                    <div class="bg-neutral-900 border border-neutral-800 p-8 rounded-sm group hover:border-neutral-700 transition-colors">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-white">Piano Piece Generator</h3>
                            <span class="text-sm text-neutral-500">2025</span>
                        </div>
                        <p class="text-neutral-400 mb-6 leading-relaxed">
                            A generator helping pianists find new pieces, using a custom library and hosted via Cloudflare.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-800/50 px-2 py-0.5 rounded-sm">Cloudflare</span>
                                <span class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-800/50 px-2 py-0.5 rounded-sm">JS</span>
                            </div>
                            <a href="https://piecebypiece.pages.dev" target="_blank" class="text-sm text-neutral-300 hover:text-white transition-colors">Live Demo →</a>
                        </div>
                    </div>

                    <div class="bg-neutral-900 border border-neutral-800 p-8 rounded-sm group hover:border-neutral-700 transition-colors">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-white">Tower Offense</h3>
                            <span class="text-sm text-neutral-500">2024</span>
                        </div>
                        <p class="text-neutral-400 mb-6 leading-relaxed">
                            A 2D game concept reverse-engineering the tower defense genre for a highschool game jam.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex gap-2">
                                <span class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-800/50 px-2 py-0.5 rounded-sm">Unity 2D</span>
                                <span class="text-[10px] uppercase tracking-tighter text-neutral-500 bg-neutral-800/50 px-2 py-0.5 rounded-sm">C#</span>
                            </div>
                            <a href="https://hberneis.itch.io/tower-offense" target="_blank" class="text-sm text-neutral-300 hover:text-white transition-colors">View on Itch.io →</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                    <span class="w-8 h-px bg-neutral-700"></span>
                    Experience
                </h2>
                <div class="space-y-4">
                    <div class="bg-neutral-900 border border-neutral-800 p-8 rounded-sm">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-white">Capstone Project</h3>
                            <span class="text-sm text-neutral-500">2024 — 2025</span>
                        </div>
                        <p class="text-neutral-400 mb-4">Group-based software development life cycle (SDLC) simulation.</p>
                        <ul class="text-neutral-500 space-y-2 text-sm list-inside list-disc">
                            <li>Collaborated in a team of four over six months</li>
                            <li>Task management via Trello and Git-based workflow</li>
                            <li>Daily submissions and code reviews</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Footer Action -->
            <div class="text-center pt-8 border-t border-neutral-800">
                <p class="text-neutral-400 mb-8">Ready to bring enthusiasm and technical skill to your team.</p>
            </div>
        </div>
    </div>
@endsection
