@extends('portfolio.layout')

@section('title', 'Contact')

@section('content')
    <div style="max-width: 800px; margin: 0 auto; padding: 5rem 2rem; text-align: center;">
        <h1 style="font-size: 3rem; color: #ffffff; margin-bottom: 1.5rem; font-weight: 700; letter-spacing: -1px;">Get in
            Touch</h1>
        <p
            style="color: #999; font-size: 1.2rem; margin-bottom: 4rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.8;">
            I'm always open to discussing new projects, creative ideas, or opportunities to be part of your visions.
        </p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 4rem;">
            <div style="background: #1a1a1a; padding: 2.5rem; border-radius: 8px; border: 1px solid #333; transition: transform 0.2s ease, border-color 0.2s ease;"
                onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='#2563eb'"
                onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#333'">
                <div
                    style="background: rgba(37, 99, 235, 0.1); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #2563eb;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                </div>
                <h3 style="color: #fff; margin-bottom: 0.5rem; font-size: 1.1rem;">Personal Email</h3>
                <a href="mailto:hugo@bereneis.com"
                    style="color: #2563eb; text-decoration: none; font-weight: 500; font-size: 1rem;">hugo@bereneis.com</a>
            </div>

            <div style="background: #1a1a1a; padding: 2.5rem; border-radius: 8px; border: 1px solid #333; transition: transform 0.2s ease, border-color 0.2s ease;"
                onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='#2563eb'"
                onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#333'">
                <div
                    style="background: rgba(37, 99, 235, 0.1); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: #2563eb;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                        <path d="M6 12v5c3 3 9 3 12 0v-5" />
                    </svg>
                </div>
                <h3 style="color: #fff; margin-bottom: 0.5rem; font-size: 1.1rem;">College Email</h3>
                <a href="mailto:hberneis@seattleu.edu"
                    style="color: #2563eb; text-decoration: none; font-weight: 500; font-size: 1rem;">hberneis@seattleu.edu</a>
            </div>
        </div>


    </div>
@endsection