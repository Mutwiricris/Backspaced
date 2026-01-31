<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ $title ?? 'BACKSPACE SOFTWARE DEVELOPERS' }}</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ $description ?? 'Professional software development company specializing in web applications, mobile development, and digital transformation.' }}">
    <meta name="keywords" content="software development, web applications, mobile apps, digital transformation, Kenya">
    <meta name="author" content="Backspace Software Developers">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'BACKSPACE SOFTWARE DEVELOPERS' }}">
    <meta property="og:description" content="{{ $description ?? 'Professional software development company' }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{{ $title ?? 'BACKSPACE SOFTWARE DEVELOPERS' }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar">
        <div class="absolute inset-0 bg-white/80 backdrop-blur-md border-b border-gray-100"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-3 group relative z-10">
                    <div class="relative">
                        <div class="absolute inset-0 bg-accent rounded-xl blur-lg opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                        <img src="{{ asset('images/backspace-logo.png') }}" alt="Backspace Logo" class="relative w-auto h-12 object-contain group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="hidden sm:block">
                        <span class="font-bold text-xl tracking-tight bg-gradient-to-r from-black to-gray-700 bg-clip-text text-transparent">BACKSPACE</span>
                        <div class="text-xs text-gray-500 -mt-1">Software Developers</div>
                    </div>
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-black transition-colors group {{ request()->is('/') ? 'text-black' : '' }}">
                        Home
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform {{ request()->is('/') ? 'scale-x-100' : '' }}"></span>
                    </a>
                    <a href="/services" class="relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-black transition-colors group {{ request()->is('services*') ? 'text-black' : '' }}">
                        Services
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform {{ request()->is('services*') ? 'scale-x-100' : '' }}"></span>
                    </a>
                    <a href="/portfolio" class="relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-black transition-colors group {{ request()->is('portfolio*') ? 'text-black' : '' }}">
                        Portfolio
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform {{ request()->is('portfolio*') ? 'scale-x-100' : '' }}"></span>
                    </a>
                    <a href="/about" class="relative px-4 py-2 text-sm font-medium text-gray-700 hover:text-black transition-colors group {{ request()->is('about') ? 'text-black' : '' }}">
                        About
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform {{ request()->is('about') ? 'scale-x-100' : '' }}"></span>
                    </a>
                    <a href="/contact" class="ml-4 relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-accent to-accent-dark rounded-xl blur opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-accent to-accent-dark text-white text-sm font-semibold rounded-xl hover:shadow-xl transition-all">
                            Contact Us
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button type="button" class="md:hidden relative inline-flex items-center justify-center p-2.5 rounded-xl text-gray-700 hover:text-black hover:bg-gray-100 transition-all z-10" id="mobile-menu-button">
                    <svg class="h-6 w-6 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="menu-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6 hidden transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="close-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden animate-slide-down" id="mobile-menu">
            <div class="absolute inset-x-0 top-full bg-white/95 backdrop-blur-lg border-b border-gray-100 shadow-2xl">
                <div class="px-4 py-6 space-y-2 max-w-7xl mx-auto">
                    <a href="/" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-black hover:bg-gray-50 rounded-xl transition-all {{ request()->is('/') ? 'text-black bg-gray-50' : '' }}">
                        <div class="flex items-center justify-between">
                            Home
                            @if(request()->is('/'))
                                <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            @endif
                        </div>
                    </a>
                    <a href="/services" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-black hover:bg-gray-50 rounded-xl transition-all {{ request()->is('services*') ? 'text-black bg-gray-50' : '' }}">
                        <div class="flex items-center justify-between">
                            Services
                            @if(request()->is('services*'))
                                <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            @endif
                        </div>
                    </a>
                    <a href="/portfolio" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-black hover:bg-gray-50 rounded-xl transition-all {{ request()->is('portfolio*') ? 'text-black bg-gray-50' : '' }}">
                        <div class="flex items-center justify-between">
                            Portfolio
                            @if(request()->is('portfolio*'))
                                <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            @endif
                        </div>
                    </a>
                    <a href="/about" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-black hover:bg-gray-50 rounded-xl transition-all {{ request()->is('about') ? 'text-black bg-gray-50' : '' }}">
                        <div class="flex items-center justify-between">
                            About
                            @if(request()->is('about'))
                                <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            @endif
                        </div>
                    </a>
                    <a href="/contact" class="block mt-4">
                        <div class="relative group">
                            <div class="absolute inset-0 bg-gradient-to-r from-accent to-accent-dark rounded-xl blur opacity-50"></div>
                            <div class="relative px-4 py-3 text-base font-semibold bg-gradient-to-r from-accent to-accent-dark text-white rounded-xl text-center flex items-center justify-center">
                                Contact Us
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20 relative z-10">
            <!-- Newsletter Section -->
            <div class="bg-gradient-to-r from-accent/10 to-accent/5 rounded-3xl p-8 md:p-12 mb-16 border border-accent/20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold mb-2">Stay Updated</h3>
                        <p class="text-gray-300">Subscribe to our newsletter for the latest insights and updates.</p>
                    </div>
                    <div>
                        <form class="flex flex-col sm:flex-row gap-3">
                            <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-accent">
                            <button type="submit" class="px-6 py-3 bg-gradient-to-r from-accent to-accent-dark text-white font-semibold rounded-xl hover:shadow-xl transition-all">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Company Info -->
                <div class="lg:col-span-1">
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('images/backspace-logo.png') }}" alt="Backspace Logo" class="w-auto h-12 object-contain invert brightness-0">
                        <div>
                            <span class="font-bold text-xl tracking-tight">BACKSPACE</span>
                            <div class="text-xs text-gray-400">Software Developers</div>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Engineering intelligent software solutions that transform businesses. We specialize in web applications, mobile development, and digital transformation services.
                    </p>
                    <!-- Social Links -->
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-accent border border-white/10 hover:border-accent flex items-center justify-center transition-all group" aria-label="Twitter">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-accent border border-white/10 hover:border-accent flex items-center justify-center transition-all group" aria-label="LinkedIn">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 hover:bg-accent border border-white/10 hover:border-accent flex items-center justify-center transition-all group" aria-label="GitHub">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="font-bold text-white mb-6 text-lg">Services</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/services" class="text-gray-400 hover:text-white transition-colors flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-accent opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            Web Applications
                        </a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition-colors flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-accent opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            Mobile Development
                        </a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition-colors flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-accent opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            Digital Transformation
                        </a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition-colors flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-accent opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            Enterprise Solutions
                        </a></li>
                    </ul>
                </div>
                
                <!-- Company -->
                <div>
                    <h3 class="font-bold text-white mb-6 text-lg">Company</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-accent opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            About Us
                        </a></li>
                        <li><a href="/portfolio" class="text-gray-400 hover:text-white transition-colors flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-accent opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            Portfolio
                        </a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-accent opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            Contact
                        </a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors flex items-center group">
                            <svg class="w-4 h-4 mr-2 text-accent opacity-0 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            Careers
                        </a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="font-bold text-white mb-6 text-lg">Get in Touch</h3>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-start space-x-3">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Email</div>
                                <a href="mailto:info@backspace.co.ke" class="hover:text-white transition-colors">info@backspace.co.ke</a>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Phone</div>
                                <a href="tel:0729095905" class="hover:text-white transition-colors">0729 095 905</a>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-500 mb-1">Location</div>
                                <span>Eens Business park Mombasaroad</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-white/10">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-sm text-gray-400">
                        &copy; {{ date('Y') }} Backspace Software Developers. All rights reserved.
                    </p>
                    <div class="flex space-x-6 text-sm text-gray-400">
                        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                        <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="fixed bottom-8 right-8 w-12 h-12 bg-black text-white rounded-full shadow-lg hover:bg-gray-800 transition-all opacity-0 invisible flex items-center justify-center z-40">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>
</body>
</html>
