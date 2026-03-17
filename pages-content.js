// Create all remaining HTML pages with proper structure
// Save this as a reference - all pages follow same template with different content

const pages = {
    'legal.html': {
        title: 'Legal Information - HomeCraft Repair Co',
        heading: 'Legal Information',
        content: `
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Business Information</h2>
                <p class="text-muted-foreground">HomeCraft Repair Co operates as a residential door and window repair service based in Newark, Delaware. We provide repair services to residential customers in Newark and surrounding areas within Delaware.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Service Scope</h2>
                <p class="text-muted-foreground mb-4">Our services include but are not limited to:</p>
                <ul class="list-disc list-inside space-y-2 text-muted-foreground ml-4">
                    <li>Residential door repair and maintenance</li>
                    <li>Window repair and maintenance</li>
                    <li>Lock and hardware replacement</li>
                    <li>Screen and weather seal repair</li>
                </ul>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Service Estimates</h2>
                <p class="text-muted-foreground">Estimates provided by HomeCraft Repair Co are based on the information available at the time of assessment. Final costs may vary if additional issues are discovered during the repair process.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Payment Terms</h2>
                <p class="text-muted-foreground">Payment is due upon completion of service unless other arrangements have been made in advance. We accept various payment methods including cash, check, and major credit cards.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Warranty Information</h2>
                <p class="text-muted-foreground">We stand behind our workmanship. Warranty coverage on repairs and installed parts will be discussed with customers before service begins.</p>
            </section>
        `
    },
    'privacy-policy.html': {
        title: 'Privacy Policy - HomeCraft Repair Co',
        heading: 'Privacy Policy',
        content: `
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Information We Collect</h2>
                <p class="text-muted-foreground mb-4">We collect information necessary to provide our services, including:</p>
                <ul class="list-disc list-inside space-y-2 text-muted-foreground ml-4">
                    <li>Contact information (name, phone number, email address)</li>
                    <li>Service address and property details</li>
                    <li>Information about repair needs and service requests</li>
                    <li>Payment information for completed services</li>
                </ul>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">How We Use Your Information</h2>
                <p class="text-muted-foreground">We use the information we collect to provide and improve our services, communicate with customers, schedule appointments, process payments, and maintain records.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Information Sharing</h2>
                <p class="text-muted-foreground">We do not sell, rent, or share your personal information with third parties for marketing purposes. We may share information with service providers who assist with business operations.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Data Security</h2>
                <p class="text-muted-foreground">We implement reasonable security measures to protect your information. However, no method of electronic storage is 100% secure.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Your Rights</h2>
                <p class="text-muted-foreground">You have the right to access, correct, or request deletion of your personal information. Contact us to exercise these rights.</p>
            </section>
        `
    },
    'terms.html': {
        title: 'Terms of Service - HomeCraft Repair Co',
        heading: 'Terms of Service',
        content: `
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Acceptance of Terms</h2>
                <p class="text-muted-foreground">By using our services, you agree to these terms of service. If you do not agree, please do not use our services.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Service Description</h2>
                <p class="text-muted-foreground">HomeCraft Repair Co provides residential door and window repair services. Services are provided as described and may vary based on specific customer needs.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">User Obligations</h2>
                <p class="text-muted-foreground mb-4">Users agree to:</p>
                <ul class="list-disc list-inside space-y-2 text-muted-foreground ml-4">
                    <li>Provide accurate information when requesting services</li>
                    <li>Ensure safe access to repair locations</li>
                    <li>Pay for services as agreed</li>
                    <li>Notify us promptly of any concerns</li>
                </ul>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Limitations of Liability</h2>
                <p class="text-muted-foreground">Our liability is limited to the services provided. We are not responsible for pre-existing conditions or issues unrelated to our work.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Modification of Terms</h2>
                <p class="text-muted-foreground">We reserve the right to modify these terms at any time. Continued use of our services constitutes acceptance of modified terms.</p>
            </section>
        `
    },
    'cookie-policy.html': {
        title: 'Cookie Policy - HomeCraft Repair Co',
        heading: 'Cookie Policy',
        content: `
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">What Are Cookies</h2>
                <p class="text-muted-foreground">Cookies are small text files stored on your device when you visit our website. They help us provide a better user experience.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Types of Cookies We Use</h2>
                <p class="text-muted-foreground mb-4">We use the following types of cookies:</p>
                <ul class="list-disc list-inside space-y-2 text-muted-foreground ml-4">
                    <li><strong>Essential Cookies:</strong> Required for the website to function properly</li>
                    <li><strong>Analytics Cookies:</strong> Help us understand how visitors use our website</li>
                    <li><strong>Preference Cookies:</strong> Remember your settings and preferences</li>
                </ul>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Managing Cookies</h2>
                <p class="text-muted-foreground">You can control cookies through your browser settings or using our cookie preference center. Disabling certain cookies may affect website functionality.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Third-Party Cookies</h2>
                <p class="text-muted-foreground">Some cookies may be set by third-party services we use. These are governed by the respective third party's privacy policies.</p>
            </section>
        `
    },
    'disclaimer.html': {
        title: 'Disclaimer - HomeCraft Repair Co',
        heading: 'Disclaimer',
        content: `
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Website Information</h2>
                <p class="text-muted-foreground">The information provided on this website is for general informational purposes. While we strive for accuracy, we make no representations or warranties about the completeness or reliability of information on this site.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Service Information</h2>
                <p class="text-muted-foreground">Service descriptions and information provided are general in nature. Actual services may vary based on specific customer needs and circumstances. All service details will be confirmed during consultation.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">No Guarantee of Results</h2>
                <p class="text-muted-foreground">While we work diligently to provide quality repairs, we cannot guarantee specific results. Repair outcomes depend on various factors including the condition of existing materials and components.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">External Links</h2>
                <p class="text-muted-foreground">Our website may contain links to external sites. We are not responsible for the content or practices of linked websites.</p>
            </section>
            <section>
                <h2 class="text-2xl font-semibold text-foreground mb-4">Professional Advice</h2>
                <p class="text-muted-foreground">Information on this website does not constitute professional advice. For specific guidance related to your situation, please contact us directly or consult with appropriate professionals.</p>
            </section>
        `
    }
};

// Export for reference
module.exports = pages;
