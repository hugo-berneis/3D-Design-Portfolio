@extends('portfolio.layout')

@section('title', 'CV')

@section('content')
    <div class="max-w-[800px] mx-auto py-20 px-8 text-center">
        <h1 class="text-4xl font-bold mb-8">CV</h1>
        <div class="p-8">
            <section class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">About Me</h2>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Motivated college student with a passion for tech
                    and problem solving. Currently pursuing computer science while making personal projects. Eager to apply
                    my skills and creativity in a professional environment.</p>
            </section>
            <section class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">Education</h2>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Highschool Graduate</h3><span
                            class="text-sm text-gray-500 dark:text-gray-400">2021 - 2025</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">Grant Highschool </p>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">High School Diploma </p>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">GPA: 3.6</p>
                    <div class="flex flex-wrap gap-2"><span
                            class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">Ap
                            Computer Science</span><span
                            class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Track
                            &amp; Field</span><span
                            class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full text-sm">AP
                            Calc AB</span></div>
                </div>
            </section>
            <section class="mb-8">
                <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">College Undergraduate</h3><span
                            class="text-sm text-gray-500 dark:text-gray-400">2025 - 2029</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">Seattle University </p>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">Computer Science, BS </p>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">GPA: ~</p>
                    <div class="flex flex-wrap gap-2"><span
                            class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">Computer
                            Science Major</span><span
                            class="px-3 py-1 bg-green-100 dark:bg-cyan-900 text-cyan-800 dark:text-cyan-200 rounded-full text-sm">ACM
                            (CS Club)</span></div>
                </div>
            </section>
            <section class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">Technical
                    Skills</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                        <h3 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">Programming</h3>
                        <div class="flex flex-wrap gap-2"><span
                                class="px-2 py-1 bg-gray-100 dark:bg-gray-900 light:text-gray-800 dark:text-gray-200 rounded text-sm">Python</span><span
                                class="px-2 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded text-sm">C#</span><span
                                class="px-2 py-1 bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 rounded text-sm">HTML/CSS</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                        <h3 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">Tools</h3>
                        <div class="flex flex-wrap gap-2"><span
                                class="px-2 py-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200 rounded text-sm">Git</span><span
                                class="px-2 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded text-sm">VS
                                Code</span><span
                                class="px-2 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded text-sm">Unity</span><span
                                class="px-2 py-1 bg-purple-100 dark:bg-cyan-900 text-purple-800 dark:text-purple-200 rounded text-sm">Itch.io</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                        <h3 class="font-semibold text-gray-800 dark:text-gray-200 mb-2">Other</h3>
                        <div class="flex flex-wrap gap-2"><span
                                class="px-2 py-1 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 rounded text-sm">Problem
                                Solving</span><span
                                class="px-2 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded text-sm">Team
                                Work</span></div>
                    </div>
                </div>
            </section>
            <section class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">Projects</h2>
                <div class="space-y-4">
                    <div class="space-y-4">
                        <div class="border border-gray-200 dark:border-gray-600 rounded-lg p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Personal Portfolio
                                    Website</h3><span class="text-sm text-gray-500 dark:text-gray-400">2025</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-3">Designed and developed a responsive personal
                                website showcasing my projects and skills. Built with HTML, CSS, TypeScript, and JavaScript.
                            </p>
                            <div class="flex gap-2 mb-4"><span
                                    class="px-3 py-1 bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 rounded-full text-sm">HTML/CSS</span><span
                                    class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 rounded-full text-sm">JavaScript</span><span
                                    class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Servers/Domains</span>
                            </div><a href="https://github.com/hberneis/resume" target="_blank" rel="noopener noreferrer"
                                class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">View
                                Project</a>
                        </div>
                    </div>
                    <div class="border border-gray-200 dark:border-gray-600 rounded-lg p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Piano Piece Generator</h3>
                            <span class="text-sm text-gray-500 dark:text-gray-400">2025</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-3">Created a piano piece generator that helps pianists
                            find new pieces to play. Uses a custom library with categories for the user to chose from.
                            Hosted using Cloudflare.</p>
                        <div class="flex gap-2"><span
                                class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full text-sm">Library</span><span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200 rounded-full text-sm">Cloudflare</span>
                        </div><a href="https://piecebypiece.pages.dev" target="_blank" rel="noopener noreferrer"
                            class="inline-block mt-4 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">View
                            Project</a>
                    </div>
                    <div class="border border-gray-200 dark:border-gray-600 rounded-lg p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Tower Offense</h3><span
                                class="text-sm text-gray-500 dark:text-gray-400">2024</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-3">Developed a 2D game for a two week highschool game
                            jam. The genre was "roles reversed". The idea being that instead of the common genre, tower
                            defense, which has the player place defenses along a path to defend against enemies on the
                            track, the player is the enemy on the track and has to dodge the defensive units.</p>
                        <div class="flex gap-2"><span
                                class="px-3 py-1 bg-red-200 dark:bg-red-800 text-red-800 dark:text-red-200 rounded-full text-sm">Unity
                                2D</span><span
                                class="px-3 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-full text-sm">Itch.io</span><span
                                class="px-3 py-1 bg-cyan-100 dark:bg-cyan-600 text-gray-800 dark:text-gray-200 rounded-full text-sm">C#</span>
                        </div><a href="https://hberneis.itch.io/tower-offense" target="_blank" rel="noopener noreferrer"
                            class="inline-block mt-4 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">View
                            Project</a>
                    </div>
                </div>
            </section>
            <section class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">Experience</h2>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Highschool Capstone Project</h3>
                        <span class="text-sm text-gray-500 dark:text-gray-400">2024-2025</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">Computer Science Class</p>
                    <ul class="text-gray-600 dark:text-gray-400 list-disc list-inside space-y-1">
                        <li>Worked in a group of four</li>
                        <li>Planned and split tasks evenly using Trello</li>
                        <li>Submitted work daily and collaborated on a git repo</li>
                        <li>Six months long</li>
                    </ul><a href="https://github.com/kmeyer7560/CardcertoInCMajor" class="underline text-blue-400"
                        target="_blank" rel="noopener noreferrer">Github</a>
                </div>
                <div class=" bg-gray-50 dark:bg-gray-700 rounded-lg p-6 mt-4">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Trash Sorting AI</h3><span
                            class="text-sm text-gray-500 dark:text-gray-400">2024</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">IDTech</p>
                    <ul class="text-gray-600 dark:text-gray-400 list-disc list-inside space-y-1">
                        <li>Jetson Nano Tech</li>
                        <li>Machine learning with library</li>
                        <li>Python</li>
                    </ul><a href="https://github.com/hberneis/Trash-Collector" class="underline text-blue-400"
                        target="_blank" rel="noopener noreferrer">Github</a>
                </div>
            </section>
            <section class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">Activities
                    &amp; Achievements</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg"><span
                            class="text-2xl">🥇</span>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Earned "Best Game" Title in Game Jam
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">1st Place (2024)</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg"><span
                            class="text-2xl">🏃🏻‍♂️</span>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Track &amp; Field</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">JV (4 years)</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg"><span
                            class="text-2xl">🎵</span>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Pianist</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Piano Player (6 years)</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg"><span
                            class="text-2xl">🧗‍♂️</span>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Rock Climber</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Bouldering (2 years)</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center pt-8 border-t border-gray-200 dark:border-gray-600">
                <p class="text-gray-600 dark:text-gray-400 mb-4">Ready to bring enthusiasm, creativity, and technical
                    skills to your team!</p>
                <div class="flex justify-center gap-4"><a href="mailto:hugo@berneis.com"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold flex items-center">📧
                        Contact Me</a></div>
            </div>
        </div>
    </div>

@endsection
