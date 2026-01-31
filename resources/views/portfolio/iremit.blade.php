@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-green-700 via-green-800 to-green-950 text-white py-24 md:py-32 overflow-hidden">
    <!-- Floating Background Orbs -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-green-500/20 rounded-full blur-[120px] -mr-64 -mt-64 animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-green-300/10 rounded-full blur-[100px] -ml-64 -mb-64"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-animate>
                <div class="mb-8" data-animate>
                    <img src="{{ asset('images/iremit-logo.png') }}" alt="iRemit Logo" class="h-16 w-auto object-contain">
                </div>
                <div class="inline-flex items-center px-4 py-1.5 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-green-300 rounded-full animate-ping mr-2"></span>
                    Case Study: FinTech
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-8 tracking-tight">
                    i<span class="text-green-300">Remit</span>
                </h1>
                <p class="text-xl md:text-2xl text-green-100/90 mb-10 leading-relaxed max-w-xl">
                    Revolutionizing cross-border remittances in East Africa through secure, instant, and accessible mobile-first technology.
                </p>
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2.5 rounded-xl border border-white/10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" class="w-5 h-5" alt="Flutter">
                        <span class="text-sm font-semibold">Flutter</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2.5 rounded-xl border border-white/10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-5 h-5" alt="Node.js">
                        <span class="text-sm font-semibold">Node.js</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2.5 rounded-xl border border-white/10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" class="w-5 h-5" alt="Firebase">
                        <span class="text-sm font-semibold">Firebase</span>
                    </div>
                </div>
            </div>
            
            <div class="relative" data-animate>
                <div class="absolute inset-0 bg-green-400/20 blur-[80px] rounded-full"></div>
                <div class="relative bg-white/5 backdrop-blur-md p-4 rounded-3xl border border-white/10 shadow-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=1000&h=800&fit=crop" alt="iRemit Dashboard" class="rounded-2xl shadow-lg transition-transform duration-700 group-hover:scale-105">
                    <!-- Dashboard Overlay Badge -->
                    <div class="absolute bottom-10 right-10 bg-white/90 backdrop-blur-md p-4 rounded-2xl shadow-2xl border border-green-100 text-black animate-bounce-subtle">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Security</div>
                                <div class="text-xl font-bold">Bank-Grade</div>
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
                <div class="w-16 h-16 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">The Challenge</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Cross-border money transfer in East Africa was slow, expensive, and opaque. High commission fees and long bank processing times discouraged formal remittance channels, forcing many users into risky informal networks.
                </p>
                <ul class="mt-8 space-y-4">
                    <li class="flex items-center text-gray-700">
                        <span class="w-6 h-6 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">✕</span>
                        High transaction fees (10-15%)
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="w-6 h-6 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">✕</span>
                        Transfer times exceeding 48 hours
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="w-6 h-6 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center mr-3 flex-shrink-0">✕</span>
                        Lack of real-time status updates
                    </li>
                </ul>
            </div>
            
            <!-- The Solution -->
            <div class="p-12 md:p-20 bg-green-600 text-white flex flex-col justify-center" data-animate>
                <div class="w-16 h-16 bg-green-500 text-white rounded-2xl flex items-center justify-center mb-8 border border-white/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">The Solution</h2>
                <p class="text-lg text-green-100 leading-relaxed">
                    iRemit leverages distributed ledger technology and direct mobile money integrations (M-Pesa, MTN Mobile Money) to facilitate near-instant transfers. We combined bank-level security with a minimalist Flutter interface to ensure accessibility and trust.
                </p>
                <ul class="mt-8 space-y-4 text-green-50">
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0 border border-white/20">✓</span>
                        Real-time currency exchange engine
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0 border border-white/20">✓</span>
                        Direct M-Pesa & Bank API links
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mr-3 flex-shrink-0 border border-white/20">✓</span>
                        End-to-end encrypted ledger
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
                <div class="text-4xl md:text-5xl font-bold mb-2 text-green-400">$2M+</div>
                <div class="text-gray-400 text-sm font-semibold uppercase tracking-widest">Monthly Volume</div>
            </div>
            <div data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2 text-green-400">10K+</div>
                <div class="text-gray-400 text-sm font-semibold uppercase tracking-widest">Active Users</div>
            </div>
            <div data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2 text-green-400">&lt;30s</div>
                <div class="text-gray-400 text-sm font-semibold uppercase tracking-widest">Avg Transfer Time</div>
            </div>
            <div data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2 text-green-400">99.99%</div>
                <div class="text-gray-400 text-sm font-semibold uppercase tracking-widest">Success Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <h2 class="text-3xl md:text-5xl font-bold mb-4">Core Functionality</h2>
            <div class="w-24 h-1 bg-green-600 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div data-animate class="group bg-gray-50 p-8 rounded-[32px] hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-green-100">
                <div class="w-14 h-14 bg-green-600 text-white rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Secure Biometrics</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Multi-factor authentication including FaceID and Fingerprint scanning for every transaction.
                </p>
                <div class="flex items-center text-green-600 font-bold text-sm text-sm">
                    VIEW SECURITY REPORT <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div data-animate class="group bg-gray-50 p-8 rounded-[32px] hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-green-100">
                <div class="w-14 h-14 bg-green-600 text-white rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Multi-Currency Wallet</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Store value in KES, UGX, or TZS and convert instantly at mid-market rates with zero hidden fees.
                </p>
                <div class="flex items-center text-green-600 font-bold text-sm text-sm">
                    VIEW EXCHANGE ENGINE <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div data-animate class="group bg-gray-50 p-8 rounded-[32px] hover:bg-white hover:shadow-2xl transition-all duration-500 border border-transparent hover:border-green-100">
                <div class="w-14 h-14 bg-green-600 text-white rounded-2xl flex items-center justify-center mb-8 group-hover:rotate-6 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Instant Notifications</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Push and SMS alerts for both sender and receiver ensures absolute peace of mind during transfers.
                </p>
                <div class="flex items-center text-green-600 font-bold text-sm text-sm">
                    VIEW USER PORTAL <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
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
                <h2 class="text-3xl md:text-5xl font-bold mb-8">FinTech Stack</h2>
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="flex items-center space-x-4 mb-3">
                            <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center text-blue-600">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" class="w-6 h-6" alt="Flutter">
                            </div>
                            <h4 class="font-bold">Cross-Platform UI</h4>
                        </div>
                        <p class="text-gray-600 text-sm">Flutter allows us to maintain a single codebase for iOS and Android, ensuring consistent security protocols.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <div class="flex items-center space-x-4 mb-3">
                            <div class="w-10 h-10 bg-green-50 rounded-lg flex items-center justify-center text-green-600">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-6 h-6" alt="Node.js">
                            </div>
                            <h4 class="font-bold">Real-time Engine</h4>
                        </div>
                        <p class="text-gray-600 text-sm">Node.js provides the asynchronous handling needed for high-frequency transaction processing.</p>
                    </div>
                </div>
            </div>
            <div data-animate class="relative">
                <div class="bg-green-600 rounded-[40px] p-12 text-white">
                    <h3 class="text-2xl font-bold mb-6">Security First</h3>
                    <p class="text-green-100 leading-relaxed mb-8">
                        Our architecture is designed around zero-trust principles. Every transaction is verified through multiple security layers and logged on an immutable private ledger.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <div class="text-3xl font-bold mb-1">2FA</div>
                            <div class="text-green-200 text-xs font-bold uppercase tracking-wider">Mandatory</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold mb-1">RSA</div>
                            <div class="text-green-200 text-xs font-bold uppercase tracking-wider">Encryption</div>
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
        <h2 class="text-3xl md:text-5xl font-bold mb-16 text-center" data-animate>App Interface</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8" data-animate>
            <div class="rounded-3xl overflow-hidden shadow-xl hover-lift">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&h=600&fit=crop" alt="iRemit Transfer Flow" class="w-full">
            </div>
            <div class="rounded-3xl overflow-hidden shadow-xl hover-lift">
                <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?w=800&h=600&fit=crop" alt="iRemit Secure Vault" class="w-full">
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonial -->
<section class="py-24 bg-green-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-animate>
        <div class="mb-12">
            <svg class="w-16 h-16 text-green-200 mx-auto" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H16.017C14.9124 8 14.017 7.10457 14.017 6V5C14.017 4.44772 14.4647 4 15.017 4H21.017C21.5693 4 22.017 4.44772 22.017 5V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM2.01697 21L2.01697 18C2.01697 16.8954 2.9124 16 4.01697 16H7.01697C7.56925 16 8.01697 15.5523 8.01697 15V9C8.01697 8.44772 7.56925 8 7.01697 8H4.01697C2.9124 8 2.01697 7.10457 2.01697 6V5C2.01697 4.44772 2.46468 4 3.01697 4H9.01697C9.56925 4 10.017 4.44772 10.017 5V15C10.017 18.3137 7.33068 21 4.01697 21H2.01697Z" /></svg>
        </div>
        <blockquote class="text-3xl md:text-4xl font-medium text-gray-900 mb-10 leading-snug">
            "iRemit has made sending money home so much easier. The app is fast, secure, and the fees are transparent. I can send money to my family in seconds."
        </blockquote>
        <div class="flex items-center justify-center space-x-4">
            <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white text-xl font-bold border-4 border-white shadow-lg">
                SK
            </div>
            <div class="text-left">
                <div class="text-xl font-bold">Sarah Kamau</div>
                <div class="text-green-600 font-medium">iRemit User, Nairobi</div>
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
                <a href="/portfolio/echama" class="group block">
                    <h3 class="text-4xl md:text-6xl font-bold transition-colors group-hover:text-green-400">Echama <svg class="inline-block ml-4 w-12 h-12 transition-transform group-hover:translate-x-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></h3>
                </a>
            </div>
            <div>
                <a href="/contact" class="inline-flex items-center px-10 py-5 bg-green-600 text-white font-bold rounded-2xl hover:bg-green-700 transition-all hover:shadow-2xl hover:-translate-y-1">
                    Work With Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
