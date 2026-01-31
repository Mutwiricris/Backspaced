@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-black via-gray-900 to-black text-white overflow-hidden min-h-screen flex items-center">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    <div class="absolute inset-0 bg-dots-pattern opacity-10"></div>
    
    <!-- Floating Gradient Orbs -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-accent/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div data-animate class="opacity-0">
                <div class="inline-flex items-center px-4 py-2 glass rounded-full text-sm font-medium mb-6 animate-pulse-glow">
                    <span class="w-2 h-2 bg-accent rounded-full mr-2 animate-pulse"></span>
                    Professional Software Development
                </div>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
                    Smart Software for
                    <span class="block mt-2 gradient-text">
                        Real Business Impact
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8 leading-relaxed">
                    Engineering intelligent software solutions that transform businesses. We specialize in web applications, mobile development, and digital transformation services.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-12">
                    <a href="/contact" class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-white to-gray-200 rounded-xl blur opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative inline-flex items-center justify-center px-8 py-4 bg-white text-black font-semibold rounded-xl hover:shadow-2xl transition-all">
                            Get Started
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </a>
                    <a href="/portfolio" class="inline-flex items-center justify-center px-8 py-4 glass text-white font-semibold rounded-xl hover:bg-white/20 transition-all">
                        View Our Work
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-white/10">
                    <div class="text-center lg:text-left" data-animate>
                        <div class="text-4xl font-bold mb-1 gradient-text-blue">50+</div>
                        <div class="text-sm text-gray-400">Projects Delivered</div>
                    </div>
                    <div class="text-center lg:text-left" data-animate>
                        <div class="text-4xl font-bold mb-1 gradient-text-blue">12+</div>
                        <div class="text-sm text-gray-400">Countries Served</div>
                    </div>
                    <div class="text-center lg:text-left" data-animate>
                        <div class="text-4xl font-bold mb-1 gradient-text-blue">98%</div>
                        <div class="text-sm text-gray-400">Client Satisfaction</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Modern Illustration -->
            <div data-animate class="opacity-0 hidden lg:block">
                <div class="relative">
                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-accent/30 to-transparent rounded-3xl blur-3xl"></div>
                    <!-- Main Image -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl glow-blue">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800&h=600&fit=crop" alt="Team collaboration" class="w-full h-full object-cover">
                        <!-- Overlay Stats -->
                        <div class="absolute bottom-0 left-0 right-0 p-6 glass-dark">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <div class="text-2xl font-bold">99.9%</div>
                                    <div class="text-xs text-gray-300">Uptime</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold">24/7</div>
                                    <div class="text-xs text-gray-300">Support</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Floating Badge -->
                    <div class="absolute -top-6 -right-6 glass px-6 py-4 rounded-2xl shadow-xl animate-float">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <div>
                                <div class="font-bold">Top Rated</div>
                                <div class="text-xs text-gray-300">5.0 Rating</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Services Overview -->
<section class="py-20 md:py-32 bg-white relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-gray-50 to-transparent"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-semibold mb-4">
                Our Services
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Which Software Solution<br/>Are You Looking For?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We deliver cutting-edge solutions tailored to your business needs
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div data-animate class="group relative bg-white border-2 border-gray-100 rounded-3xl p-8 hover-lift hover:border-accent/50 transition-all stagger-1">
                <div class="absolute top-0 right-0 w-32 h-32 bg-accent/5 rounded-full blur-2xl group-hover:bg-accent/10 transition-all"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-black to-gray-800 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Web Applications</h3>
                    <p class="text-gray-600 mb-6">Custom web solutions built with modern frameworks for scalability and performance.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">Laravel</span>
                        <span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">React</span>
                        <span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">Vue.js</span>
                    </div>
                    <a href="/services" class="inline-flex items-center text-black font-semibold group-hover:text-accent transition-colors">
                        Learn More
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service Card 2 -->
            <div data-animate class="group relative bg-white border-2 border-gray-100 rounded-3xl p-8 hover-lift hover:border-accent/50 transition-all stagger-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-accent/5 rounded-full blur-2xl group-hover:bg-accent/10 transition-all"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-black to-gray-800 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Mobile Development</h3>
                    <p class="text-gray-600 mb-6">Native and cross-platform mobile apps that deliver exceptional user experiences.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">Flutter</span>
                        <span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">React Native</span>
                        <span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">iOS</span>
                    </div>
                    <a href="/services" class="inline-flex items-center text-black font-semibold group-hover:text-accent transition-colors">
                        Learn More
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Service Card 3 -->
            <div data-animate class="group relative bg-white border-2 border-gray-100 rounded-3xl p-8 hover-lift hover:border-accent/50 transition-all stagger-3">
                <div class="absolute top-0 right-0 w-32 h-32 bg-accent/5 rounded-full blur-2xl group-hover:bg-accent/10 transition-all"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-black to-gray-800 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Digital Transformation</h3>
                    <p class="text-gray-600 mb-6">Modernize your business processes with cloud solutions and automation.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">AWS</span>
                        <span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">Azure</span>
                        <span class="px-3 py-1.5 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">DevOps</span>
                    </div>
                    <a href="/services" class="inline-flex items-center text-black font-semibold group-hover:text-accent transition-colors">
                        Learn More
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-16">
            <a href="/services" class="group relative inline-block">
                <div class="absolute inset-0 bg-gradient-to-r from-black to-gray-800 rounded-xl blur opacity-50 group-hover:opacity-75 transition-opacity"></div>
                <div class="relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-black to-gray-800 text-white font-semibold rounded-xl hover:shadow-2xl transition-all">
                    View All Services
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 md:py-32 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-semibold mb-4">
                Why Choose Us
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Built for Excellence
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We combine technical expertise with business acumen to deliver exceptional results
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div data-animate class="text-center stagger-1">
                <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-dark rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg glow-blue">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Quality First</h3>
                <p class="text-gray-600">Clean code, best practices, and rigorous testing ensure top-tier quality.</p>
            </div>
            
            <div data-animate class="text-center stagger-2">
                <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-dark rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg glow-blue">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">On-Time Delivery</h3>
                <p class="text-gray-600">We respect deadlines and deliver projects on schedule, every time.</p>
            </div>
            
            <div data-animate class="text-center stagger-3">
                <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-dark rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg glow-blue">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Expert Team</h3>
                <p class="text-gray-600">Skilled developers with years of experience in cutting-edge technologies.</p>
            </div>
            
            <div data-animate class="text-center stagger-4">
                <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-dark rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg glow-blue">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">24/7 Support</h3>
                <p class="text-gray-600">Round-the-clock support to ensure your systems run smoothly.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Highlight -->
<section class="py-20 md:py-32 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-1/3 h-full bg-gradient-to-r from-gray-50 to-transparent"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-semibold mb-4">
                Our Work
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Transforming Ideas into Reality
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Explore our portfolio of successful projects across various industries
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Portfolio Card 1 - SomaPlus -->
            <div data-animate class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover-lift stagger-1">
                <div class="relative h-72 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=600&h=400&fit=crop" alt="SomaPlus" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1.5 bg-accent text-white text-xs font-semibold rounded-full shadow-lg">Featured Project</span>
                    </div>
                    <div class="absolute bottom-4 right-4 glass px-3 py-2 rounded-lg">
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-white text-sm font-semibold">5.0</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2">SomaPlus</h3>
                    <p class="text-gray-600 mb-4">Complete School Management System serving 100+ schools across Kenya</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">Laravel</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">MySQL</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">Vue.js</span>
                    </div>
                    <a href="/portfolio/somaplus" class="inline-flex items-center text-black font-semibold hover:text-accent transition-colors group">
                        View Case Study
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Portfolio Card 2 - iRemit -->
            <div data-animate class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover-lift stagger-2">
                <div class="relative h-72 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=600&h=400&fit=crop" alt="iRemit" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1.5 bg-accent text-white text-xs font-semibold rounded-full shadow-lg">Featured Project</span>
                    </div>
                    <div class="absolute bottom-4 right-4 glass px-3 py-2 rounded-lg">
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-white text-sm font-semibold">4.9</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2">iRemit</h3>
                    <p class="text-gray-600 mb-4">Fintech platform processing KES10M++ in monthly cross-border transactions</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">Flutter</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">Firebase</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">M-Pesa</span>
                    </div>
                    <a href="/portfolio/iremit" class="inline-flex items-center text-black font-semibold hover:text-accent transition-colors group">
                        View Case Study
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Portfolio Card 3 - Backspace Echama -->
            <div data-animate class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover-lift stagger-3">
                <div class="relative h-72 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop" alt="Backspace Echama" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1.5 bg-accent text-white text-xs font-semibold rounded-full shadow-lg">Featured Project</span>
                    </div>
                    <div class="absolute bottom-4 right-4 glass px-3 py-2 rounded-lg">
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-white text-sm font-semibold">5.0</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2">Backspace Echama</h3>
                    <p class="text-gray-600 mb-4">Digital platform managing KES 100M+ for 500+ investment groups</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">Laravel</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">React</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-lg">PostgreSQL</span>
                    </div>
                    <a href="/portfolio/echama" class="inline-flex items-center text-black font-semibold hover:text-accent transition-colors group">
                        View Case Study
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <a href="/portfolio" class="group relative inline-block">
                <div class="absolute inset-0 bg-gradient-to-r from-black to-gray-800 rounded-xl blur opacity-50 group-hover:opacity-75 transition-opacity"></div>
                <div class="relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-black to-gray-800 text-white font-semibold rounded-xl hover:shadow-2xl transition-all">
                    View All Projects
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Technologies We Use -->
<section class="py-20 md:py-32 bg-gradient-to-br from-black via-gray-900 to-black text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center px-4 py-2 glass rounded-full text-sm font-semibold mb-4">
                Technologies
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Powered by Modern Technology
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                We leverage cutting-edge technologies to build robust, scalable solutions
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <div data-animate class="group glass rounded-2xl p-6 text-center hover:bg-white/20 transition-all stagger-1">
                <div class="text-4xl mb-3">⚛️</div>
                <div class="font-semibold">React</div>
            </div>
            <div data-animate class="group glass rounded-2xl p-6 text-center hover:bg-white/20 transition-all stagger-2">
                <div class="text-4xl mb-3">🎯</div>
                <div class="font-semibold">Laravel</div>
            </div>
            <div data-animate class="group glass rounded-2xl p-6 text-center hover:bg-white/20 transition-all stagger-3">
                <div class="text-4xl mb-3">📱</div>
                <div class="font-semibold">Flutter</div>
            </div>
            <div data-animate class="group glass rounded-2xl p-6 text-center hover:bg-white/20 transition-all stagger-4">
                <div class="text-4xl mb-3">🟢</div>
                <div class="font-semibold">Node.js</div>
            </div>
            <div data-animate class="group glass rounded-2xl p-6 text-center hover:bg-white/20 transition-all stagger-5">
                <div class="text-4xl mb-3">☁️</div>
                <div class="font-semibold">AWS</div>
            </div>
            <div data-animate class="group glass rounded-2xl p-6 text-center hover:bg-white/20 transition-all stagger-6">
                <div class="text-4xl mb-3">🔷</div>
                <div class="font-semibold">Docker</div>
            </div>
        </div>
    </div>
</section>

<!-- Our Process -->
<section class="py-20 md:py-32 bg-gradient-to-br from-gray-50 via-white to-gray-50 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-semibold mb-4">
                Our Process
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                How We Work
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                A proven methodology that delivers results every time
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div data-animate class="group relative stagger-1">
                <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift border-2 border-gray-100 hover:border-accent/30 transition-all h-full">
                    <!-- Step Number Badge -->
                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-accent to-accent-dark rounded-2xl flex items-center justify-center text-white font-bold shadow-lg glow-blue">
                        01
                    </div>
                    
                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-to-br from-accent/10 to-accent/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold mb-4">Discovery & Planning</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We dive deep into understanding your business goals, target audience, and project requirements to create a comprehensive roadmap.
                    </p>
                    
                    <!-- Features List -->
                    <ul class="mt-6 space-y-2">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Requirements Analysis
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Project Roadmap
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div data-animate class="group relative stagger-2">
                <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift border-2 border-gray-100 hover:border-accent/30 transition-all h-full">
                    <!-- Step Number Badge -->
                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-accent to-accent-dark rounded-2xl flex items-center justify-center text-white font-bold shadow-lg glow-blue">
                        02
                    </div>
                    
                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-to-br from-accent/10 to-accent/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold mb-4">Design & Prototyping</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Our designers create intuitive, beautiful interfaces with interactive prototypes for your feedback and approval.
                    </p>
                    
                    <!-- Features List -->
                    <ul class="mt-6 space-y-2">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            UI/UX Design
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Interactive Prototypes
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div data-animate class="group relative stagger-3">
                <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift border-2 border-gray-100 hover:border-accent/30 transition-all h-full">
                    <!-- Step Number Badge -->
                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-accent to-accent-dark rounded-2xl flex items-center justify-center text-white font-bold shadow-lg glow-blue">
                        03
                    </div>
                    
                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-to-br from-accent/10 to-accent/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold mb-4">Development & Testing</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Expert developers build your solution using best practices, with continuous testing to ensure quality and performance.
                    </p>
                    
                    <!-- Features List -->
                    <ul class="mt-6 space-y-2">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Clean Code
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Quality Assurance
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Step 4 -->
            <div data-animate class="group relative stagger-4">
                <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift border-2 border-gray-100 hover:border-accent/30 transition-all h-full">
                    <!-- Step Number Badge -->
                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-accent to-accent-dark rounded-2xl flex items-center justify-center text-white font-bold shadow-lg glow-blue">
                        04
                    </div>
                    
                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-to-br from-accent/10 to-accent/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold mb-4">Launch & Support</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We deploy your solution and provide ongoing support, maintenance, and optimization to ensure continued success.
                    </p>
                    
                    <!-- Features List -->
                    <ul class="mt-6 space-y-2">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Deployment
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            24/7 Support
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Metrics Counter -->
<section class="py-20 md:py-32 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-black via-gray-900 to-black rounded-3xl p-12 md:p-16 text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
            <div class="absolute top-0 right-0 w-96 h-96 bg-accent/10 rounded-full blur-3xl"></div>
            
            <div class="relative z-10">
                <div class="text-center mb-12" data-animate>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        Trusted by Businesses Worldwide
                    </h2>
                    <p class="text-xl text-gray-300">
                        Our track record speaks for itself
                    </p>
                </div>
                
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div data-animate class="text-center stagger-1">
                        <div class="text-5xl md:text-6xl font-bold mb-2 gradient-text-blue">500K+</div>
                        <div class="text-gray-400">Lines of Code</div>
                    </div>
                    <div data-animate class="text-center stagger-2">
                        <div class="text-5xl md:text-6xl font-bold mb-2 gradient-text-blue">50+</div>
                        <div class="text-gray-400">Happy Clients</div>
                    </div>
                    <div data-animate class="text-center stagger-3">
                        <div class="text-5xl md:text-6xl font-bold mb-2 gradient-text-blue">99.9%</div>
                        <div class="text-gray-400">Uptime</div>
                    </div>
                    <div data-animate class="text-center stagger-4">
                        <div class="text-5xl md:text-6xl font-bold mb-2 gradient-text-blue">24/7</div>
                        <div class="text-gray-400">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section class="py-20 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-semibold mb-4">
                Testimonials
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                What Our Clients Say
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Don't just take our word for it - hear from our satisfied clients
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div data-animate class="group bg-gradient-to-br from-gray-50 to-white border-2 border-gray-100 rounded-3xl p-8 hover-lift hover:border-accent/30 transition-all stagger-1">
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <p class="text-gray-700 mb-6 italic">
                    "Backspace transformed our school management system. The platform is intuitive, powerful, and has saved us countless hours. Highly recommended!"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-accent to-accent-dark rounded-full flex items-center justify-center text-white font-bold mr-4">
                        JM
                    </div>
                    <div>
                        <div class="font-semibold">John Mwangi</div>
                        <div class="text-sm text-gray-500">Principal, Nairobi Academy</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div data-animate class="group bg-gradient-to-br from-gray-50 to-white border-2 border-gray-100 rounded-3xl p-8 hover-lift hover:border-accent/30 transition-all stagger-2">
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <p class="text-gray-700 mb-6 italic">
                    "The iRemit app is fast, secure, and reliable. Sending money home has never been easier. Excellent customer support too!"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-accent to-accent-dark rounded-full flex items-center justify-center text-white font-bold mr-4">
                        SK
                    </div>
                    <div>
                        <div class="font-semibold">Sarah Kamau</div>
                        <div class="text-sm text-gray-500">iRemit User</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div data-animate class="group bg-gradient-to-br from-gray-50 to-white border-2 border-gray-100 rounded-3xl p-8 hover-lift hover:border-accent/30 transition-all stagger-3">
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <p class="text-gray-700 mb-6 italic">
                    "Echama has revolutionized how we manage our Chama. Everything is transparent, automated, and easy to use. A game-changer!"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-accent to-accent-dark rounded-full flex items-center justify-center text-white font-bold mr-4">
                        MW
                    </div>
                    <div>
                        <div class="font-semibold">Mary Wanjiru</div>
                        <div class="text-sm text-gray-500">Treasurer, Tumaini Chama</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Insights -->
<section class="py-20 md:py-32 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <div class="inline-flex items-center px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-semibold mb-4">
                Insights
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Latest from Our Blog
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Stay updated with the latest trends and insights in software development
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div data-animate class="group bg-white rounded-3xl overflow-hidden shadow-lg hover-lift stagger-1">
                <div class="relative h-48 bg-gradient-to-br from-accent/20 to-accent/5 flex items-center justify-center">
                    <svg class="w-16 h-16 text-accent/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        Jan 28, 2026
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-accent transition-colors">
                        The Future of Web Development in 2026
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Explore the latest trends and technologies shaping the future of web development.
                    </p>
                    <a href="#" class="inline-flex items-center text-black font-semibold hover:text-accent transition-colors">
                        Read More
                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Blog Post 2 -->
            <div data-animate class="group bg-white rounded-3xl overflow-hidden shadow-lg hover-lift stagger-2">
                <div class="relative h-48 bg-gradient-to-br from-accent/20 to-accent/5 flex items-center justify-center">
                    <svg class="w-16 h-16 text-accent/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        Jan 25, 2026
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-accent transition-colors">
                        Mobile App Development Best Practices
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Learn the essential best practices for building high-quality mobile applications.
                    </p>
                    <a href="#" class="inline-flex items-center text-black font-semibold hover:text-accent transition-colors">
                        Read More
                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Blog Post 3 -->
            <div data-animate class="group bg-white rounded-3xl overflow-hidden shadow-lg hover-lift stagger-3">
                <div class="relative h-48 bg-gradient-to-br from-accent/20 to-accent/5 flex items-center justify-center">
                    <svg class="w-16 h-16 text-accent/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                        Jan 22, 2026
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-accent transition-colors">
                        Cloud Migration Strategies for Businesses
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Discover effective strategies for migrating your business to the cloud.
                    </p>
                    <a href="#" class="inline-flex items-center text-black font-semibold hover:text-accent transition-colors">
                        Read More
                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative py-20 md:py-32 bg-gradient-to-br from-black via-gray-900 to-black text-white overflow-hidden">
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    <div class="absolute top-10 right-10 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-float"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-animate>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
            Ready to Start Your Project?
        </h2>
        <p class="text-xl md:text-2xl text-gray-300 mb-12">
            Let's create something amazing together. Transform your vision into reality with our expert team.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-white to-gray-200 rounded-xl blur opacity-50 group-hover:opacity-75 transition-opacity"></div>
                <div class="relative inline-flex items-center justify-center px-8 py-4 bg-white text-black font-semibold rounded-xl hover:shadow-2xl transition-all">
                    Get In Touch
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
            </a>
            <a href="/portfolio" class="inline-flex items-center justify-center px-8 py-4 glass text-white font-semibold rounded-xl hover:bg-white/20 transition-all">
                View More Projects
            </a>
        </div>
    </div>
</section>
@endsection
