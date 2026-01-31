@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-black via-gray-900 to-black text-white py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center" data-animate>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Transforming Ideas into Reality
            </h1>
            <p class="text-lg md:text-xl text-gray-300">
                Explore our portfolio of successful projects that have helped businesses across 12+ countries achieve their digital transformation goals
            </p>
        </div>
        
        <!-- Stats -->
        <div class="grid grid-cols-3 gap-6 max-w-3xl mx-auto mt-12 pt-12 border-t border-white/10">
            <div class="text-center" data-animate>
                <div class="text-3xl md:text-4xl font-bold mb-1">50+</div>
                <div class="text-sm text-gray-400">Projects Delivered</div>
            </div>
            <div class="text-center" data-animate>
                <div class="text-3xl md:text-4xl font-bold mb-1">12+</div>
                <div class="text-sm text-gray-400">Countries Served</div>
            </div>
            <div class="text-center" data-animate>
                <div class="text-3xl md:text-4xl font-bold mb-1">98%</div>
                <div class="text-sm text-gray-400">Success Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="py-20 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Featured Projects</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Innovative solutions that have made a real impact on businesses and communities
            </p>
        </div>
        
        <div class="space-y-16">
            <!-- Project 1: SomaPlus -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center" data-animate>
                <div class="order-2 lg:order-1">
                    <div class="inline-flex items-center px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium mb-4">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        Featured Project
                    </div>
                    <div class="mb-6">
                        <img src="{{ asset('images/somaplus-logo.png') }}" alt="SomaPlus Logo" class="h-12 w-auto object-contain">
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">SomaPlus</h3>
                    <p class="text-xl text-gray-600 mb-6">Complete School Management System</p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        A comprehensive school management platform that streamlines administrative tasks, student records, fee management, and academic reporting. Serving 100+ schools across Kenya with 50,000+ active users.
                    </p>
                    
                    <!-- Key Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Student & Staff Management
                        </div>
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Fee Management & M-Pesa Integration
                        </div>
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Academic Reports & Analytics
                        </div>
                    </div>
                
                    
                    <a href="/portfolio/somaplus" class="inline-flex items-center px-6 py-3 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all hover:shadow-lg">
                        View Case Study
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=800&h=600&fit=crop" alt="SomaPlus Dashboard" class="w-full h-auto">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <div class="text-2xl font-bold text-black">100+</div>
                            <div class="text-xs text-gray-600">Schools</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Project 2: iRemit -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center" data-animate>
                <div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&h=600&fit=crop" alt="iRemit App" class="w-full h-auto">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <div class="text-2xl font-bold text-black">100%</div>
                            <div class="text-xs text-gray-600">Processed</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="inline-flex items-center px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium mb-4">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        Featured Project
                    </div>
                    <div class="mb-6">
                        <img src="{{ asset('images/iremit-logo.png') }}" alt="iRemit Logo" class="h-12 w-auto object-contain">
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">iRemit</h3>
                    <p class="text-xl text-gray-600 mb-6">Fintech Solution in Kenya</p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        A secure mobile money transfer platform enabling seamless cross-border transactions. Integrated with M-Pesa and major banks, processing over KES10M+ in transactions monthly.
                    </p>
                    
                    <!-- Key Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Instant Money Transfers
                        </div>
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Multi-Currency Support
                        </div>
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Bank-Level Security
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full">Flutter</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full">Firebase</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full">M-Pesa</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full">Node.js</span>
                    </div>
                    
                    <a href="/portfolio/iremit" class="inline-flex items-center px-6 py-3 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all hover:shadow-lg">
                        View Case Study
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Project 3: Backspace Echama -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center" data-animate>
                <div class="order-2 lg:order-1">
                    <div class="inline-flex items-center px-3 py-1 bg-accent/10 text-accent rounded-full text-sm font-medium mb-4">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        Featured Project
                    </div>
                    <div class="mb-6">
                        <img src="{{ asset('images/echama-logo.png') }}" alt="Echama Logo" class="h-12 w-auto object-contain">
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">Backspace Echama</h3>
                    <p class="text-xl text-gray-600 mb-6">Chama/Group Management System</p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        A digital platform for managing investment groups (Chamas), featuring contribution tracking, loan management, and automated financial reporting. Empowering 500+ groups to manage their finances efficiently.
                    </p>
                    
                    <!-- Key Features -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Contribution & Loan Management
                        </div>
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Automated Financial Reports
                        </div>
                        <div class="flex items-center text-gray-700">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Member Communication Tools
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full">React</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full">PostgreSQL</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm font-medium rounded-full">Redis</span>
                    </div>
                    
                    <a href="/portfolio/echama" class="inline-flex items-center px-6 py-3 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all hover:shadow-lg">
                        View Case Study
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&h=600&fit=crop" alt="Backspace Echama" class="w-full h-auto">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-lg">
                            <div class="text-2xl font-bold text-black">500+</div>
                            <div class="text-xs text-gray-600">Active Groups</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Metrics Section -->
<section class="py-20 md:py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-animate>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Delivering Excellence</h2>
            <p class="text-lg text-gray-600">Our commitment to quality drives exceptional results</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg" data-animate>
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2">95%</div>
                <div class="text-gray-600">On-Time Delivery</div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg" data-animate>
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2">98%</div>
                <div class="text-gray-600">Client Satisfaction</div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg" data-animate>
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <div class="text-4xl font-bold mb-2">250%</div>
                <div class="text-gray-600">Avg ROI</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-32 bg-gradient-to-br from-black via-gray-900 to-black text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-animate>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
            Ready to Build Your Success Story?
        </h2>
        <p class="text-lg md:text-xl text-gray-300 mb-8">
            Let's create something amazing together. Transform your vision into reality with our expert team.
        </p>
        <a href="/contact" class="inline-flex items-center px-8 py-4 bg-white text-black font-semibold rounded-lg hover:bg-gray-100 transition-all hover:shadow-xl">
            Start Your Project
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</section>
@endsection
