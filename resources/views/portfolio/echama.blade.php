@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-purple-700 via-indigo-800 to-indigo-950 text-white py-24 md:py-32 overflow-hidden">
    <!-- Floating Background Orbs -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-purple-500/20 rounded-full blur-[120px] -mr-64 -mt-64 animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-300/10 rounded-full blur-[100px] -ml-64 -mb-64"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="mb-8" data-animate>
                    <img src="{{ asset('images/echama-logo.png') }}" alt="Echama Logo" class="h-16 w-auto object-contain">
                </div>
                <div class="inline-flex items-center px-4 py-1.5 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-purple-300 rounded-full animate-ping mr-2"></span>
                    Case Study: Social Finance
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 tracking-tight">
                    Backspace <span class="text-purple-300">Echama</span>
                </h1>
                <p class="text-xl md:text-2xl text-purple-100/90 mb-10 leading-relaxed max-w-xl">
                    Digitalizing the "Chama" experience—empowering investment groups with transparent financial management and automated operations.
                </p>
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2.5 rounded-xl border border-white/10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" class="w-5 h-5 filter brightness-0 invert" alt="Laravel">
                        <span class="text-sm font-semibold">Laravel</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2.5 rounded-xl border border-white/10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-5 h-5" alt="React">
                        <span class="text-sm font-semibold">React</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2.5 rounded-xl border border-white/10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" class="w-5 h-5" alt="PostgreSQL">
                        <span class="text-sm font-semibold">PostgreSQL</span>
                    </div>
                </div>
            </div>
            
            <div class="relative" data-animate>
                <div class="absolute inset-0 bg-purple-400/20 blur-[80px] rounded-full"></div>
                <div class="relative bg-white/5 backdrop-blur-md p-4 rounded-3xl border border-white/10 shadow-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1000&h=800&fit=crop" alt="Echama Platform" class="rounded-2xl shadow-lg transition-transform duration-700 group-hover:scale-105">
                    <!-- Dashboard Overlay Badge -->
                    <div class="absolute bottom-10 right-10 bg-white/90 backdrop-blur-md p-4 rounded-2xl shadow-2xl border border-purple-100 text-black animate-bounce-subtle">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Trust Score</div>
                                <div class="text-xl font-bold">98% Positive</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Challenge & Solution Split -->
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 rounded-[40px] overflow-hidden shadow-2xl border border-gray-100">
            <!-- The Challenge -->
            <div class="p-12 md:p-20 bg-gray-50 flex flex-col justify-center" data-animate>
                <div class="w-16 h-16 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">The Challenge</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Chamas (investment groups) are a cornerstone of financial growth in Kenya, yet they suffer from opaque record-keeping, manual contribution tracking, and infrequent reporting. This leads to member distrust and administrative burnout for treasurers.
                </p>
                <ul class="mt-8 space-y-4">
                    <li class="flex items-center text-gray-700">
                        <span class="w-6 h-6 bg-red-100 text-red-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">✕</span>
                        Manual, error-prone spreadsheets
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="w-6 h-6 bg-red-100 text-red-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">✕</span>
                        Lack of transparency in loan approvals
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="w-6 h-6 bg-red-100 text-red-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">✕</span>
                        Inefficient communication of meeting minutes
                    </li>
                </ul>
            </div>
            
            <!-- The Solution -->
            <div class="p-12 md:p-20 bg-indigo-600 text-white flex flex-col justify-center" data-animate>
                <div class="w-16 h-16 bg-indigo-500 text-white rounded-2xl flex items-center justify-center mb-8 border border-white/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">The Solution</h2>
                <p class="text-lg text-indigo-100 leading-relaxed">
                    Echama provides a centralized digital ledger where every contribution, loan, and resolution is tracked in real-time. We implemented automated penalty calculations, M-Pesa automated deposits, and a transparent voting system for loans.
                </p>
                <ul class="mt-8 space-y-4 text-indigo-50">
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-indigo-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0 border border-white/20">✓</span>
                        Automated financial auditing & reporting
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-indigo-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0 border border-white/20">✓</span>
                        Group-wide contribution transparency
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-indigo-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0 border border-white/20">✓</span>
                        Digital voting & meeting management
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Stats Grid -->
<section class="py-20 bg-gray-900 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12">
            <div data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2 text-purple-400">500+</div>
                <div class="text-gray-400 text-sm font-semibold uppercase tracking-widest">Active Groups</div>
            </div>
            <div data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2 text-purple-400">15K+</div>
                <div class="text-gray-400 text-sm font-semibold uppercase tracking-widest">Total Members</div>
            </div>
            <div data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2 text-purple-400">100M+</div>
                <div class="text-gray-400 text-sm font-semibold uppercase tracking-widest">KES Managed</div>
            </div>
            <div data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2 text-purple-400">95%</div>
                <div class="text-gray-400 text-sm font-semibold uppercase tracking-widest">User Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <h2 class="text-3xl md:text-5xl font-bold mb-4">Core Functionality</h2>
            <div class="w-24 h-1 bg-purple-600 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div data-animate class="group bg-gray-50 p-8 rounded-[32px] hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-purple-100">
                <div class="w-14 h-14 bg-purple-600 text-white rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Automated Collections</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    M-Pesa integrated deposits that instantly update member statements and group balances.
                </p>
                <div class="flex items-center text-purple-600 font-bold text-sm">
                    EXPLORE MODULE <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div data-animate class="group bg-gray-50 p-8 rounded-[32px] hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-purple-100">
                <div class="w-14 h-14 bg-purple-600 text-white rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Loan Workflow</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    A multi-stage approval system where members can vote on loan applications transparently.
                </p>
                <div class="flex items-center text-purple-600 font-bold text-sm">
                    EXPLORE MODULE <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div data-animate class="group bg-gray-50 p-8 rounded-[32px] hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-purple-100">
                <div class="w-14 h-14 bg-purple-600 text-white rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Minutes & Tasks</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Digitize meeting resolutions and assign action items to group members with automated reminders.
                </p>
                <div class="flex items-center text-purple-600 font-bold text-sm">
                    EXPLORE MODULE <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Deep-Dive -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <h2 class="text-3xl md:text-5xl font-bold mb-8">Group Tech Stack</h2>
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="flex items-center space-x-4 mb-3">
                            <div class="w-10 h-10 bg-indigo-50 rounded-lg flex items-center justify-center text-indigo-600">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" class="w-6 h-6" alt="Laravel">
                            </div>
                            <h4 class="font-bold">Backend Ledger</h4>
                        </div>
                        <p class="text-gray-600 text-sm">Laravel's database transactions ensure financial integrity and prevent race conditions during contributions.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="flex items-center space-x-4 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center text-blue-600">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-6 h-6" alt="React">
                            </div>
                            <h4 class="font-bold">Dynamic DASH</h4>
                        </div>
                        <p class="text-gray-600 text-sm">React provides the fast, single-page experience required for managing complex financial data tables.</p>
                    </div>
                </div>
            </div>
            <div data-animate class="relative">
                <div class="bg-indigo-600 rounded-[40px] p-12 text-white">
                    <h3 class="text-2xl font-bold mb-6">Transparency First</h3>
                    <p class="text-indigo-100 leading-relaxed mb-8">
                        Our architecture prioritizes data auditability. Every modification to a member balance or group fund is cross-referenced with external payment gateways.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <div class="text-3xl font-bold mb-1">90%</div>
                            <div class="text-indigo-200 text-xs font-bold uppercase tracking-wider">Audit Ready</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold mb-1">PG</div>
                            <div class="text-indigo-200 text-xs font-bold uppercase tracking-wider">Database</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visual Showcase -->
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-5xl font-bold mb-16 text-center" data-animate>System Interface</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8" data-animate>
            <div class="rounded-3xl overflow-hidden shadow-xl hover-lift">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&h=600&fit=crop" alt="Echama Admin Panel" class="w-full">
            </div>
            <div class="rounded-3xl overflow-hidden shadow-xl hover-lift">
                <img src="https://images.unsplash.com/photo-1573161158332-554e1d2e166a?w=800&h=600&fit=crop" alt="Echama Mobile App" class="w-full">
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonial -->
<section class="py-24 bg-indigo-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-animate>
        <div class="mb-12">
            <svg class="w-16 h-16 text-indigo-200 mx-auto" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H16.017C14.9124 8 14.017 7.10457 14.017 6V5C14.017 4.44772 14.4647 4 15.017 4H21.017C21.5693 4 22.017 4.44772 22.017 5V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM2.01697 21L2.01697 18C2.01697 16.8954 2.9124 16 4.01697 16H7.01697C7.56925 16 8.01697 15.5523 8.01697 15V9C8.01697 8.44772 7.56925 8 7.01697 8H4.01697C2.9124 8 2.01697 7.10457 2.01697 6V5C2.01697 4.44772 2.46468 4 3.01697 4H9.01697C9.56925 4 10.017 4.44772 10.017 5V15C10.017 18.3137 7.33068 21 4.01697 21H2.01697Z" /></svg>
        </div>
        <blockquote class="text-3xl md:text-4xl font-medium text-gray-900 mb-10 leading-snug">
            "Echama has completely changed how our group makes decisions. No more disputes about who paid what. The automation saves me at least 15 hours of manual work every month."
        </blockquote>
        <div class="flex items-center justify-center space-x-4">
            <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center text-white text-xl font-bold border-4 border-white shadow-lg">
                MW
            </div>
            <div class="text-left">
                <div class="text-xl font-bold">Mary Wanjiru</div>
                <div class="text-indigo-600 font-medium">Treasurer, Tumaini Chama</div>
            </div>
        </div>
    </div>
</section>

<!-- Next Project Footer -->
<section class="py-24 bg-gray-900 text-white border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-12">
            <div class="text-center md:text-left">
                <div class="text-gray-400 font-bold uppercase tracking-widest text-sm mb-4">Next Project</div>
                <a href="/portfolio/somaplus" class="group block">
                    <h3 class="text-4xl md:text-6xl font-bold transition-colors group-hover:text-purple-400">SomaPlus <svg class="inline-block ml-4 w-12 h-12 transition-transform group-hover:translate-x-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></h3>
                </a>
            </div>
            <div>
                <a href="/contact" class="inline-flex items-center px-10 py-5 bg-purple-600 text-white font-bold rounded-2xl hover:bg-purple-700 transition-all hover:shadow-2xl hover:-translate-y-1">
                    Work With Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
