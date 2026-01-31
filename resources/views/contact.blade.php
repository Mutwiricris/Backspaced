@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-black via-gray-900 to-black text-white py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center" data-animate>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Let's Build Something Amazing Together
            </h1>
            <p class="text-lg md:text-xl text-gray-300">
                Have a project in mind? We'd love to hear from you. Get in touch and let's discuss how we can help transform your ideas into reality.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section class="py-20 md:py-32 bg-gradient-to-br from-gray-50 via-white to-gray-50 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
            <!-- Contact Form -->
            <div class="lg:col-span-3" data-animate>
                <div class="bg-white rounded-3xl p-8 md:p-12 shadow-2xl border-2 border-gray-100">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Send Us a Message</h2>
                    <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you within 24 hours.</p>
                    
                    <form action="/contact" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Name & Email Row -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent transition-all bg-gray-50 focus:bg-white"
                                    placeholder="John Doe">
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent transition-all bg-gray-50 focus:bg-white"
                                    placeholder="john@example.com">
                            </div>
                        </div>
                        
                        <!-- Phone & Service Row -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent transition-all bg-gray-50 focus:bg-white"
                                    placeholder="+254 700 000 000">
                            </div>
                            
                            <!-- Service Interest -->
                            <div>
                                <label for="service" class="block text-sm font-semibold text-gray-700 mb-2">Service Interest</label>
                                <select id="service" name="service"
                                    class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent transition-all bg-gray-50 focus:bg-white">
                                    <option value="">Select a service</option>
                                    <option value="web">Web Applications</option>
                                    <option value="mobile">Mobile Development</option>
                                    <option value="digital">Digital Transformation</option>
                                    <option value="enterprise">Enterprise Solutions</option>
                                    <option value="ecommerce">E-Commerce</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3.5 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent transition-all resize-none bg-gray-50 focus:bg-white"
                                placeholder="Tell us about your project..."></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="group relative w-full md:w-auto">
                            <div class="absolute inset-0 bg-gradient-to-r from-accent to-accent-dark rounded-xl blur opacity-50 group-hover:opacity-75 transition-opacity"></div>
                            <div class="relative px-8 py-4 bg-gradient-to-r from-accent to-accent-dark text-white font-semibold rounded-xl hover:shadow-xl transition-all flex items-center justify-center">
                                Send Message
                                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="lg:col-span-2" data-animate>
                <div class="sticky top-24 space-y-6">
                    <h2 class="text-3xl font-bold mb-6">Get In Touch</h2>
                    <p class="text-gray-600 mb-8">Prefer to reach out directly? Here's how you can contact us.</p>
                    
                    <!-- Contact Cards -->
                    <div class="space-y-4">
                        <!-- Email -->
                        <div class="group bg-white rounded-2xl p-6 shadow-lg hover-lift border-2 border-gray-100 hover:border-accent/30 transition-all">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-accent/10 to-accent/5 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-1">Email</h3>
                                    <a href="mailto:info@backspace.co.ke" class="text-gray-600 hover:text-accent transition-colors">info@backspace.co.ke</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="group bg-white rounded-2xl p-6 shadow-lg hover-lift border-2 border-gray-100 hover:border-accent/30 transition-all">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-accent/10 to-accent/5 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-1">Phone</h3>
                                    <a href="tel:0729095905" class="text-gray-600 hover:text-accent transition-colors">0729 095 905</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Location -->
                        <div class="group bg-white rounded-2xl p-6 shadow-lg hover-lift border-2 border-gray-100 hover:border-accent/30 transition-all">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-accent/10 to-accent/5 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-1">Office</h3>
                                    <p class="text-gray-600">Eens Business park Mombasaroad</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Working Hours -->
                        <div class="group bg-white rounded-2xl p-6 shadow-lg hover-lift border-2 border-gray-100 hover:border-accent/30 transition-all">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-accent/10 to-accent/5 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-lg mb-1">Working Hours</h3>
                                    <p class="text-gray-600 text-sm">Monday - Friday: 9:00 AM - 6:00 PM EAT</p>
                                    <p class="text-gray-600 text-sm">Saturday: 10:00 AM - 2:00 PM EAT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 text-white mt-8">
                        <h3 class="font-bold text-xl mb-4">Follow Us</h3>
                        <p class="text-gray-300 text-sm mb-6">Stay connected on social media</p>
                        <div class="flex space-x-3">
                            <a href="#" class="w-12 h-12 rounded-xl bg-white/10 hover:bg-accent border border-white/20 hover:border-accent flex items-center justify-center transition-all group">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-xl bg-white/10 hover:bg-accent border border-white/20 hover:border-accent flex items-center justify-center transition-all group">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-xl bg-white/10 hover:bg-accent border border-white/20 hover:border-accent flex items-center justify-center transition-all group">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="py-20 md:py-32 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-animate>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-600">Have questions? We have answers.</p>
        </div>
        
        <div class="space-y-4" data-animate>
            <!-- FAQ 1 -->
            <div class="bg-white rounded-lg border border-gray-200">
                <button type="button" class="faq-button w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-lg">What is your typical project timeline?</span>
                    <svg class="faq-icon w-5 h-5 flex-shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="hidden px-6 pb-5 text-gray-600">
                    Project timelines vary depending on complexity and scope. A typical web application takes 8-12 weeks, while mobile apps may take 12-16 weeks. We provide detailed timelines during the initial consultation.
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="bg-white rounded-lg border border-gray-200">
                <button type="button" class="faq-button w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-lg">Do you provide ongoing support and maintenance?</span>
                    <svg class="faq-icon w-5 h-5 flex-shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="hidden px-6 pb-5 text-gray-600">
                    Yes! We offer comprehensive support and maintenance packages to ensure your software runs smoothly. This includes bug fixes, security updates, performance optimization, and feature enhancements.
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="bg-white rounded-lg border border-gray-200">
                <button type="button" class="faq-button w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-lg">What technologies do you specialize in?</span>
                    <svg class="faq-icon w-5 h-5 flex-shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="hidden px-6 pb-5 text-gray-600">
                    We work with modern technologies including Laravel, React, Vue.js, Flutter, React Native, Node.js, and cloud platforms like AWS and Azure. We choose the best tech stack based on your specific requirements.
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="bg-white rounded-lg border border-gray-200">
                <button type="button" class="faq-button w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-semibold text-lg">How do you handle project communication?</span>
                    <svg class="faq-icon w-5 h-5 flex-shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="hidden px-6 pb-5 text-gray-600">
                    We maintain transparent communication through regular updates, weekly meetings, and a dedicated project manager. You'll have access to our project management tools to track progress in real-time.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
