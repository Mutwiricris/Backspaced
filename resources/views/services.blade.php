@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-black via-gray-900 to-black text-white py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center" data-animate>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Smart Software for Real Business Impact
            </h1>
            <p class="text-lg md:text-xl text-gray-300">
                Comprehensive software solutions designed to transform your business operations and drive growth
            </p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Which Software Solution Are You Looking For?
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                From web applications to enterprise solutions, we deliver cutting-edge software tailored to your needs
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1: Web Applications -->
            <div data-animate class="group bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-2xl transition-all hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Web Applications</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Custom web solutions built with modern frameworks. Scalable, secure, and optimized for performance.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        SaaS Platforms
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Progressive Web Apps
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Custom Dashboards
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Laravel</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">React</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Vue.js</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Node.js</span>
                </div>
            </div>
            
            <!-- Service 2: Mobile Development -->
            <div data-animate class="group bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-2xl transition-all hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Mobile Development</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Native and cross-platform mobile apps that deliver exceptional user experiences across all devices.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        iOS & Android Apps
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Cross-Platform Solutions
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        App Store Optimization
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Flutter</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">React Native</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Swift</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Kotlin</span>
                </div>
            </div>
            
            <!-- Service 3: Digital Transformation -->
            <div data-animate class="group bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-2xl transition-all hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Digital Transformation</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Modernize your business processes with cloud solutions, automation, and digital innovation.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Cloud Migration
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Process Automation
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Legacy System Modernization
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">AWS</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Azure</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">DevOps</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">CI/CD</span>
                </div>
            </div>
            
            <!-- Service 4: Enterprise Solutions -->
            <div data-animate class="group bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-2xl transition-all hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Enterprise Solutions</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Robust enterprise-grade systems designed to handle complex business requirements at scale.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        ERP Systems
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        CRM Solutions
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Business Intelligence
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Java</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">.NET</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Oracle</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">SAP</span>
                </div>
            </div>
            
            <!-- Service 5: E-Commerce -->
            <div data-animate class="group bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-2xl transition-all hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">E-Commerce Solutions</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Complete online store solutions with payment integration, inventory management, and analytics.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Custom Online Stores
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Payment Gateway Integration
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Inventory Management
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">WooCommerce</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Shopify</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Magento</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Stripe</span>
                </div>
            </div>
            
            <!-- Service 6: Development Team -->
            <div data-animate class="group bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-2xl transition-all hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Dedicated Development Team</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Extend your team with our skilled developers who work as part of your organization.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Full-Stack Developers
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        UI/UX Designers
                    </div>
                    <div class="flex items-center text-sm text-gray-700">
                        <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Project Managers
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Agile</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Scrum</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Remote</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Flexible</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 md:py-32 bg-gradient-to-br from-black via-gray-900 to-black text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
            <div class="text-center" data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2">99.9%</div>
                <div class="text-gray-400">Uptime Guarantee</div>
            </div>
            <div class="text-center" data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2">&lt;200ms</div>
                <div class="text-gray-400">Response Time</div>
            </div>
            <div class="text-center" data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2">50+</div>
                <div class="text-gray-400">Apps Delivered</div>
            </div>
            <div class="text-center" data-animate>
                <div class="text-4xl md:text-5xl font-bold mb-2">24/7</div>
                <div class="text-gray-400">Support Available</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-32 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-animate>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
            Ready to Start Your Project?
        </h2>
        <p class="text-lg md:text-xl text-gray-600 mb-8">
            Let's discuss how we can help transform your business with our software solutions
        </p>
        <a href="/contact" class="inline-flex items-center px-8 py-4 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all hover:shadow-lg">
            Get In Touch
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</section>
@endsection
