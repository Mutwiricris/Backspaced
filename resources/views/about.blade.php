@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-black via-gray-900 to-black text-white py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center" data-animate>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Building the Future of Software
            </h1>
            <p class="text-lg md:text-xl text-gray-300">
                We're a team of passionate developers, designers, and innovators committed to delivering exceptional software solutions that drive real business impact.
            </p>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-20 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            <!-- Mission -->
            <div data-animate>
                <div class="w-16 h-16 bg-black rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    To empower businesses across Africa and beyond with intelligent software solutions that transform operations, enhance productivity, and drive sustainable growth. We believe in creating technology that makes a meaningful difference in people's lives and businesses.
                </p>
            </div>
            
            <!-- Vision -->
            <div data-animate>
                <div class="w-16 h-16 bg-black rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold mb-4">Our Vision</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    To become Africa's leading software development company, recognized globally for innovation, quality, and exceptional client service. We envision a future where every business, regardless of size, has access to world-class software solutions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach -->
<section class="py-20 md:py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Approach</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                We follow a proven methodology that ensures successful project delivery
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div data-animate class="bg-white rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    1
                </div>
                <h3 class="text-xl font-bold mb-3">Discovery</h3>
                <p class="text-gray-600">
                    We dive deep into understanding your business needs, challenges, and goals to create the perfect solution.
                </p>
            </div>
            
            <!-- Step 2 -->
            <div data-animate class="bg-white rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    2
                </div>
                <h3 class="text-xl font-bold mb-3">Design</h3>
                <p class="text-gray-600">
                    Our designers create intuitive, user-friendly interfaces that provide exceptional user experiences.
                </p>
            </div>
            
            <!-- Step 3 -->
            <div data-animate class="bg-white rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    3
                </div>
                <h3 class="text-xl font-bold mb-3">Development</h3>
                <p class="text-gray-600">
                    We build robust, scalable solutions using cutting-edge technologies and best practices.
                </p>
            </div>
            
            <!-- Step 4 -->
            <div data-animate class="bg-white rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    4
                </div>
                <h3 class="text-xl font-bold mb-3">Support</h3>
                <p class="text-gray-600">
                    We provide ongoing support and maintenance to ensure your software continues to perform optimally.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Value Propositions -->
<section class="py-20 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose Us</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                What sets us apart from other software development companies
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div data-animate class="flex items-start space-x-4">
                <div class="flex-shrink-0 w-12 h-12 bg-black rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Quality First</h3>
                    <p class="text-gray-600">
                        We never compromise on quality. Every line of code is tested and optimized for performance.
                    </p>
                </div>
            </div>
            
            <!-- Value 2 -->
            <div data-animate class="flex items-start space-x-4">
                <div class="flex-shrink-0 w-12 h-12 bg-black rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">On-Time Delivery</h3>
                    <p class="text-gray-600">
                        We respect deadlines and deliver projects on time, every time, without sacrificing quality.
                    </p>
                </div>
            </div>
            
            <!-- Value 3 -->
            <div data-animate class="flex items-start space-x-4">
                <div class="flex-shrink-0 w-12 h-12 bg-black rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Expert Team</h3>
                    <p class="text-gray-600">
                        Our team consists of highly skilled developers with years of experience in modern technologies.
                    </p>
                </div>
            </div>
            
            <!-- Value 4 -->
            <div data-animate class="flex items-start space-x-4">
                <div class="flex-shrink-0 w-12 h-12 bg-black rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Clear Communication</h3>
                    <p class="text-gray-600">
                        We maintain transparent communication throughout the project lifecycle with regular updates.
                    </p>
                </div>
            </div>
            
            <!-- Value 5 -->
            <div data-animate class="flex items-start space-x-4">
                <div class="flex-shrink-0 w-12 h-12 bg-black rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Agile Methodology</h3>
                    <p class="text-gray-600">
                        We use agile development practices to ensure flexibility and rapid iteration based on feedback.
                    </p>
                </div>
            </div>
            
            <!-- Value 6 -->
            <div data-animate class="flex items-start space-x-4">
                <div class="flex-shrink-0 w-12 h-12 bg-black rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">24/7 Support</h3>
                    <p class="text-gray-600">
                        Our support team is always available to help you with any issues or questions you may have.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Culture -->
<section class="py-20 md:py-32 bg-gradient-to-br from-black via-gray-900 to-black text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Culture</h2>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                We foster a culture of innovation, collaboration, and continuous learning
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div data-animate class="text-center">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Innovation</h3>
                <p class="text-gray-300">
                    We encourage creative thinking and embrace new technologies to deliver cutting-edge solutions.
                </p>
            </div>
            
            <div data-animate class="text-center">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Collaboration</h3>
                <p class="text-gray-300">
                    Teamwork is at the heart of everything we do. We believe in the power of collective intelligence.
                </p>
            </div>
            
            <div data-animate class="text-center">
                <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Learning</h3>
                <p class="text-gray-300">
                    We invest in our team's growth through continuous training and professional development.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-32 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-animate>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
            Let's Work Together
        </h2>
        <p class="text-lg md:text-xl text-gray-600 mb-8">
            Ready to transform your business with innovative software solutions? Get in touch with us today.
        </p>
        <a href="/contact" class="inline-flex items-center px-8 py-4 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all hover:shadow-lg">
            Contact Us
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</section>
@endsection
