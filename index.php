<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeCraft Repair Co - Professional Door & Window Repair in Newark, DE</title>
    <meta name="description" content="Professional residential door and window repair services in Newark, Delaware. Expert repair technicians for doors, windows, locks, and hardware.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        'primary-foreground': '#ffffff',
                        foreground: '#0f172a',
                        muted: '#f1f5f9',
                        'muted-foreground': '#64748b',
                        border: '#e2e8f0',
                        accent: '#f8fafc'
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
        .footer-link-no-hover {
            transition: none !important;
        }
        .footer-link-no-hover:hover {
            color: inherit !important;
            opacity: 1 !important;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-white border-b border-border sticky top-0 z-50">
        <!-- Top Bar -->
        <div class="bg-primary text-primary-foreground">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-2 text-sm">
                    <div class="flex items-center gap-6">
                        <a href="tel:+13023293920" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span class="hidden sm:inline">+1-302-329-3920</span>
                        </a>
                        <a href="mailto:service@homecraftrepairco.site" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span class="hidden md:inline">service@homecraftrepairco.site</span>
                        </a>
                    </div>
                    <div class="text-xs sm:text-sm">
                        Serving Newark, DE & Surrounding Areas
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <a href="index.html" class="flex items-center">
                    <div class="text-2xl font-semibold">
                        <span class="text-primary">HomeCraft</span> <span class="text-foreground">Repair Co</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="index.html" class="text-primary font-medium transition-colors">Home</a>
                    <a href="about.html" class="text-foreground hover:text-primary transition-colors">About</a>
                    <a href="services.html" class="text-foreground hover:text-primary transition-colors">Services</a>
                    <a href="contact.html" class="text-foreground hover:text-primary transition-colors">Contact</a>
                    <a href="contact.html" class="bg-primary text-primary-foreground px-6 py-2 rounded-lg hover:bg-primary/90 transition-colors">Request Quote</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 text-foreground" aria-label="Toggle menu">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobile-menu" class="hidden md:hidden py-4 border-t border-border">
                <div class="flex flex-col gap-4">
                    <a href="index.html" class="py-2 text-primary font-medium transition-colors">Home</a>
                    <a href="about.html" class="py-2 text-foreground transition-colors">About</a>
                    <a href="services.html" class="py-2 text-foreground transition-colors">Services</a>
                    <a href="contact.html" class="py-2 text-foreground transition-colors">Contact</a>
                    <a href="contact.html" class="bg-primary text-primary-foreground px-6 py-2 rounded-lg hover:bg-primary/90 transition-colors text-center">Request Quote</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-primary to-blue-900 text-white">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32">
                <div class="max-w-3xl">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                        Professional Door & Window Repair Services in Newark, DE
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-blue-100">
                        Reliable residential repair services for doors, windows, locks, and hardware.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="contact.html" class="bg-white text-primary px-8 py-4 rounded-lg hover:bg-blue-50 transition-colors font-medium text-center">
                            Request a Service Quote
                        </a>
                        <a href="services.html" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white/10 transition-colors font-medium text-center">
                            View Our Services
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="https://images.unsplash.com/photo-1766230091904-671f1e6ea93b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxob3VzZSUyMGRvb3IlMjBlbnRyYW5jZXxlbnwxfHx8fDE3NzE0MDgwMTd8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Professional door repair service" class="rounded-lg shadow-lg w-full h-96 object-cover">
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">
                            About HomeCraft Repair Co
                        </h2>
                        <div class="space-y-4 text-muted-foreground">
                            <p>
                                HomeCraft Repair Co is a residential door and window repair service committed to serving homeowners in Newark, Delaware and the surrounding communities. We understand that functional doors and windows are essential to home security, comfort, and energy efficiency.
                            </p>
                            <p>
                                Our team of skilled repair technicians focuses exclusively on residential properties, allowing us to develop specialized expertise in home repair needs. We provide practical solutions for common issues like door misalignment, broken window seals, worn hardware, and lock replacements.
                            </p>
                            <p>
                                We believe in clear communication with our clients. Before beginning any work, we provide detailed explanations of the repair needed and transparent estimates. Our approach emphasizes quality workmanship and attention to detail.
                            </p>
                            <p>
                                Whether you're dealing with a door that won't close properly, a window with a broken seal, or hardware that needs replacement, our technicians bring the tools and knowledge to address the issue efficiently. We work with various door and window types commonly found in residential properties throughout the Newark area.
                            </p>
                            <p>
                                As a local service provider, we're familiar with the types of doors and windows typically found in homes throughout Delaware. We maintain flexible scheduling to accommodate our clients' needs and strive to complete repairs in a timely manner while maintaining our standards for quality work.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Preview -->
        <section class="py-16 md:py-24 bg-muted">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                        Our Services
                    </h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Comprehensive residential door and window repair solutions
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-lg border border-border hover:shadow-md transition-shadow">
                        <svg class="w-12 h-12 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                        <h3 class="text-xl font-semibold text-foreground mb-2">Door Repair</h3>
                        <p class="text-muted-foreground text-sm">Professional door repair including hinges, alignment, frames, and locks.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border border-border hover:shadow-md transition-shadow">
                        <svg class="w-12 h-12 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V5z"/></svg>
                        <h3 class="text-xl font-semibold text-foreground mb-2">Window Repair</h3>
                        <p class="text-muted-foreground text-sm">Window frame repair, glass replacement, seals, and track adjustments.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border border-border hover:shadow-md transition-shadow">
                        <svg class="w-12 h-12 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        <h3 class="text-xl font-semibold text-foreground mb-2">Lock & Hardware</h3>
                        <p class="text-muted-foreground text-sm">Handle replacement, deadbolt installation, and hardware upgrades.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border border-border hover:shadow-md transition-shadow">
                        <svg class="w-12 h-12 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zm10 0a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"/></svg>
                        <h3 class="text-xl font-semibold text-foreground mb-2">Screen & Seals</h3>
                        <p class="text-muted-foreground text-sm">Screen repair, door sweeps, and weather stripping installation.</p>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <a href="services.html" class="inline-block bg-primary text-primary-foreground px-8 py-3 rounded-lg hover:bg-primary/90 transition-colors font-medium">
                        View All Services
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">
                            Why Homeowners Choose HomeCraft Repair Co
                        </h2>
                        <p class="text-muted-foreground mb-6">
                            We focus on delivering reliable repair services with a commitment to quality and customer satisfaction.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-foreground">Experienced Repair Technicians</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-foreground">Clear Service Estimates</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-foreground">Residential-Focused Services</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-foreground">Attention to Detail</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-foreground">Flexible Scheduling</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1608752503578-52f35965e3d9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxob21lJTIwcmVwYWlyJTIwdG9vbHN8ZW58MXx8fHwxNzcxMzM3NzQ3fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Professional repair tools" class="rounded-lg shadow-lg w-full h-96 object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Area -->
        <section class="py-16 md:py-24 bg-accent">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">
                        Serving Newark, Delaware and Surrounding Areas
                    </h2>
                    <p class="text-muted-foreground text-lg">
                        HomeCraft Repair Co provides residential door and window repair services throughout Newark and nearby communities in Delaware. Our local presence allows us to respond to service requests efficiently and maintain familiarity with the types of homes and repair needs common to the area. We serve residential neighborhoods throughout the Newark region.
                    </p>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16 md:py-24 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-12 text-center">
                    Frequently Asked Questions
                </h2>
                <div class="space-y-6">
                    <div class="bg-muted p-6 rounded-lg border border-border">
                        <h3 class="text-xl font-semibold text-foreground mb-3">How long does a typical door repair take?</h3>
                        <p class="text-muted-foreground">Most door repairs can be completed within 1-2 hours, depending on the complexity of the issue. More extensive repairs may require additional time.</p>
                    </div>
                    <div class="bg-muted p-6 rounded-lg border border-border">
                        <h3 class="text-xl font-semibold text-foreground mb-3">Do you repair sliding glass doors?</h3>
                        <p class="text-muted-foreground">Yes, we repair sliding glass doors including track adjustments, roller replacement, and lock repairs.</p>
                    </div>
                    <div class="bg-muted p-6 rounded-lg border border-border">
                        <h3 class="text-xl font-semibold text-foreground mb-3">Can you replace window hardware?</h3>
                        <p class="text-muted-foreground">Yes, we replace various types of window hardware including handles, locks, and cranks.</p>
                    </div>
                    <div class="bg-muted p-6 rounded-lg border border-border">
                        <h3 class="text-xl font-semibold text-foreground mb-3">What areas do you serve?</h3>
                        <p class="text-muted-foreground">We serve Newark, Delaware and surrounding communities in the area.</p>
                    </div>
                    <div class="bg-muted p-6 rounded-lg border border-border">
                        <h3 class="text-xl font-semibold text-foreground mb-3">How do I schedule a repair?</h3>
                        <p class="text-muted-foreground">You can schedule a repair by calling us at +1-302-329-3920, emailing service@homecraftrepairco.site, or filling out our contact form on this website.</p>
                    </div>
                    <div class="bg-muted p-6 rounded-lg border border-border">
                        <h3 class="text-xl font-semibold text-foreground mb-3">Do you provide written estimates?</h3>
                        <p class="text-muted-foreground">Yes, we provide written estimates before beginning any work. The estimate will outline the repair needed and associated costs.</p>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <p class="text-muted-foreground mb-4">Have more questions?</p>
                    <a href="contact.html" class="inline-flex items-center gap-2 text-primary hover:underline font-medium">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Contact Us: +1-302-329-3920
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="py-16 md:py-24 bg-muted">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <h2 class="text-3xl font-bold text-foreground mb-4 text-center">Request a Service Quote</h2>
                    <p class="text-muted-foreground text-center mb-8">Fill out the form below and our team will contact you to discuss your repair needs.</p>
                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-foreground mb-2">Name *</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-foreground mb-2">Email *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-foreground mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label for="service" class="block text-sm font-medium text-foreground mb-2">Service Needed</label>
                            <select id="service" name="service" class="w-full px-4 py-2 border border-border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="">Select a service...</option>
                                <option value="door-repair">Door Repair</option>
                                <option value="window-repair">Window Repair</option>
                                <option value="lock-hardware">Lock & Hardware</option>
                                <option value="screen-seals">Screen & Seals</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-foreground mb-2">Message *</label>
                            <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border border-border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                        </div>
                        <div class="space-y-3">
                            <label class="flex items-start gap-2">
                                <input type="checkbox" id="consent" name="consent" required class="mt-1">
                                <span class="text-sm text-muted-foreground">I consent to HomeCraft Repair Co collecting and storing my information for the purpose of responding to this inquiry. *</span>
                            </label>
                            <label class="flex items-start gap-2">
                                <input type="checkbox" id="marketing" name="marketing" class="mt-1">
                                <span class="text-sm text-muted-foreground">I agree to receive occasional service updates and information from HomeCraft Repair Co.</span>
                            </label>
                        </div>
                        <button type="submit" class="w-full bg-primary text-primary-foreground px-6 py-3 rounded-lg hover:bg-primary/90 transition-colors font-medium">
                            Submit Request
                        </button>
                    </form>
                    <div id="form-success" class="hidden mt-4 p-4 bg-green-100 text-green-800 rounded-lg">
                        Thank you for your inquiry! We'll be in touch soon.
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-200 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="text-xl font-semibold text-white mb-4">
                        HomeCraft Repair Co
                    </div>
                    <p class="text-slate-400 text-sm mb-4">
                        Professional residential door and window repair services in Newark, Delaware and surrounding areas.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold text-white mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="index.html" class="text-slate-400 footer-link-no-hover text-sm">Home</a>
                        </li>
                        <li>
                            <a href="about.html" class="text-slate-400 footer-link-no-hover text-sm">About</a>
                        </li>
                        <li>
                            <a href="services.html" class="text-slate-400 footer-link-no-hover text-sm">Services</a>
                        </li>
                        <li>
                            <a href="contact.html" class="text-slate-400 footer-link-no-hover text-sm">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h3 class="font-semibold text-white mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="legal.html" class="text-slate-400 footer-link-no-hover text-sm">Legal</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html" class="text-slate-400 footer-link-no-hover text-sm">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="terms.html" class="text-slate-400 footer-link-no-hover text-sm">Terms of Service</a>
                        </li>
                        <li>
                            <a href="cookie-policy.html" class="text-slate-400 footer-link-no-hover text-sm">Cookie Policy</a>
                        </li>
                        <li>
                            <a href="disclaimer.html" class="text-slate-400 footer-link-no-hover text-sm">Disclaimer</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-semibold text-white mb-4">Contact Us</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="text-slate-400 text-sm">
                                39 Leader Dr<br>
                                Newark, Delaware 19713<br>
                                United States
                            </span>
                        </li>
                        <li>
                            <a href="tel:+13023293920" class="flex items-center gap-2 text-slate-400 footer-link-no-hover text-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                +1-302-329-3920
                            </a>
                        </li>
                        <li>
                            <a href="mailto:service@homecraftrepairco.site" class="flex items-center gap-2 text-slate-400 footer-link-no-hover text-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                service@homecraftrepairco.site
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 mt-8 pt-8 text-center text-slate-400 text-sm">
                <p>&copy; <span id="current-year"></span> HomeCraft Repair Co. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Cookie Banner -->
    <div id="cookie-banner" class="hidden fixed bottom-0 left-0 right-0 bg-white border-t border-border shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex-1">
                    <p class="text-sm text-foreground">
                        We use cookies to enhance your browsing experience and analyze site traffic. By continuing to use this website, you consent to our use of cookies.
                        <a href="cookie-policy.html" class="text-primary hover:underline">Learn more</a>
                    </p>
                </div>
                <div class="flex gap-3">
                    <button id="cookie-settings" class="px-4 py-2 text-sm border border-border rounded-lg hover:bg-muted transition-colors">
                        Settings
                    </button>
                    <button id="cookie-accept" class="px-4 py-2 text-sm bg-primary text-primary-foreground rounded-lg hover:bg-primary/90 transition-colors">
                        Accept All
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cookie Settings Modal -->
    <div id="cookie-modal" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-foreground mb-4">Cookie Preferences</h2>
                <p class="text-muted-foreground mb-6">
                    We use cookies to improve your experience on our website. You can customize your cookie preferences below.
                </p>
                <div class="space-y-4 mb-6">
                    <div class="flex items-start justify-between p-4 border border-border rounded-lg">
                        <div class="flex-1">
                            <h3 class="font-semibold text-foreground mb-1">Essential Cookies</h3>
                            <p class="text-sm text-muted-foreground">Required for the website to function properly.</p>
                        </div>
                        <input type="checkbox" checked disabled class="mt-1">
                    </div>
                    <div class="flex items-start justify-between p-4 border border-border rounded-lg">
                        <div class="flex-1">
                            <h3 class="font-semibold text-foreground mb-1">Analytics Cookies</h3>
                            <p class="text-sm text-muted-foreground">Help us understand how visitors interact with our website.</p>
                        </div>
                        <input type="checkbox" id="analytics-toggle" class="mt-1">
                    </div>
                    <div class="flex items-start justify-between p-4 border border-border rounded-lg">
                        <div class="flex-1">
                            <h3 class="font-semibold text-foreground mb-1">Marketing Cookies</h3>
                            <p class="text-sm text-muted-foreground">Used to deliver relevant advertisements.</p>
                        </div>
                        <input type="checkbox" id="marketing-toggle" class="mt-1">
                    </div>
                </div>
                <div class="flex gap-3 justify-end">
                    <button id="cookie-modal-close" class="px-4 py-2 border border-border rounded-lg hover:bg-muted transition-colors">
                        Cancel
                    </button>
                    <button id="cookie-save" class="px-4 py-2 bg-primary text-primary-foreground rounded-lg hover:bg-primary/90 transition-colors">
                        Save Preferences
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            menu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Set current year
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Cookie Banner
        const cookieBanner = document.getElementById('cookie-banner');
        const cookieModal = document.getElementById('cookie-modal');
        const cookieAccept = document.getElementById('cookie-accept');
        const cookieSettings = document.getElementById('cookie-settings');
        const cookieModalClose = document.getElementById('cookie-modal-close');
        const cookieSave = document.getElementById('cookie-save');

        // Check if user has already accepted cookies
        if (!localStorage.getItem('cookieConsent')) {
            cookieBanner.classList.remove('hidden');
        }

        cookieAccept.addEventListener('click', function() {
            localStorage.setItem('cookieConsent', JSON.stringify({
                essential: true,
                analytics: true,
                marketing: true
            }));
            cookieBanner.classList.add('hidden');
        });

        cookieSettings.addEventListener('click', function() {
            cookieModal.classList.remove('hidden');
        });

        cookieModalClose.addEventListener('click', function() {
            cookieModal.classList.add('hidden');
        });

        cookieSave.addEventListener('click', function() {
            const analytics = document.getElementById('analytics-toggle').checked;
            const marketing = document.getElementById('marketing-toggle').checked;
            
            localStorage.setItem('cookieConsent', JSON.stringify({
                essential: true,
                analytics: analytics,
                marketing: marketing
            }));
            
            cookieModal.classList.add('hidden');
            cookieBanner.classList.add('hidden');
        });

        // Form submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would normally send the form data to a server
            // For now, we'll just show a success message
            
            document.getElementById('form-success').classList.remove('hidden');
            this.reset();
            
            setTimeout(function() {
                document.getElementById('form-success').classList.add('hidden');
            }, 5000);
        });
    </script>
</body>
</html>