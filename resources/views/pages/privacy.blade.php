@extends('layouts.app')

@section('content')
<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="mx-auto max-w-3xl">
            <div class="space-y-2 mb-8">
                <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">Privacy Policy</h1>
                <p class="text-gray-500">Last updated: {{ date('F d, Y') }}</p>
            </div>
            
            <div class="prose prose-emerald max-w-none">
                <p>
                    This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a purchase from our website.
                </p>
                
                <h2>Personal Information We Collect</h2>
                <p>
                    When you visit the Site, we automatically collect certain information about your device, including information about your web browser, IP address, time zone, and some of the cookies that are installed on your device.
                </p>
                
                <h2>How We Use Your Personal Information</h2>
                <p>
                    We use the personal information we collect to:
                </p>
                <ul>
                    <li>Communicate with you</li>
                    <li>Screen for potential risk or fraud</li>
                    <li>Provide you with information or advertising relating to our products or services</li>
                </ul>
                
                <h2>Sharing Your Personal Information</h2>
                <p>
                    We share your Personal Information with third parties to help us use your Personal Information, as described above.
                </p>
                
                <h2>Your Rights</h2>
                <p>
                    If you are a European resident, you have the right to access personal information we hold about you and to ask that your personal information be corrected, updated, or deleted.
                </p>
                
                <h2>Data Retention</h2>
                <p>
                    When you contact us through the Site, we will maintain your message data for our records unless and until you ask us to delete this information.
                </p>
                
                <h2>Changes</h2>
                <p>
                    We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal or regulatory reasons.
                </p>
                
                <h2>Contact Us</h2>
                <p>
                    For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by e-mail at hello@devportfolio.com.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
