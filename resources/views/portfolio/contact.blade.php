@extends('portfolio.layout')

@section('title', 'Contact')

@section('content')
    <div class="max-w-[800px] mx-auto py-20 px-8 text-center">
        <h1 class="text-5xl text-white mb-6 font-bold -tracking-wide">Get in Touch</h1>
        <p class="text-neutral-400 text-xl mb-16 max-w-[600px] mx-auto leading-relaxed">
            I'm always open to discussing new projects, creative ideas, or opportunities to be part of your visions.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <a href="mailto:hugo@berneis.com" >
            <div class="bg-neutral-900 p-10 rounded-lg border border-neutral-800 transition-all duration-200 hover:-translate-y-1 hover:border-blue-600 group">
                <div class="bg-blue-600/10 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                </div>
                <h3 class="text-white mb-2 text-lg font-medium">Personal Email</h3>
                <div class="text-blue-600 no-underline font-medium text-base hover:text-blue-500">hugo@berneis.com</div>
            </div>
            </a>

            <a href="mailto:hberneis@seattleu.edu">
            <div class="bg-neutral-900 p-10 rounded-lg border border-neutral-800 transition-all duration-200 hover:-translate-y-1 hover:border-blue-600 group">
                <div class="bg-blue-600/10 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-6 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                        <path d="M6 12v5c3 3 9 3 12 0v-5" />
                    </svg>
                </div>
                <h3 class="text-white mb-2 text-lg font-medium">College Email</h3>
                <div class="text-blue-600 no-underline font-medium text-base hover:text-blue-500">hberneis@seattleu.edu</div>
            </div>
        </a>
        </div>

    </div>
@endsection
