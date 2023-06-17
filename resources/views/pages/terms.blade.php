@extends('template.template')

@section('head')
@endsection

@section('body')
    <body>
        <?php
            $imagePath = "../";
        ?>
        <div class="w-full h-full flex flex-col justify-center items-center relative ">
            <!-- News -->
            <div class="w-full flex flex-col py-10 px-4 md:px-16 ">
                <div class="border-b-2 border-gray-400 w-full text-center flex flex-col justify-center items-center pt-5 pb-10">
                    <h1 class="text-3xl py-2 font-poppins font-bold text-gray-600">Terms of Service </h1>
                    <p class="max-w-[700px]">Welcome to FINEance, a comprehensive financial management website. By accessing or using the Service, you agree to comply with and be bound by the following terms and conditions. Please read them carefully before using our website.</p>
                </div>
                <div class="border-b-2 border-gray-400 w-full grid sm:grid-rows-none grid-rows-1 grid-cols-1 py-10 gap-x-4 xl:px-20 gap-y-4">
                    <div>
                        <p class="text-justify">
                        By accessing or using the Service, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service, whether you are a registered user or simply visiting the site. If you do not agree with these terms, you should not use or access the Service. FINEance provides users with a platform to manage their personal finances, including budgeting tools, expense tracking, financial planning features, and educational resources. The Service is intended for personal use only and should not be used for commercial purposes. In order to access certain features of the Service, you may be required to create an account. You agree to provide accurate and complete information during the registration process and to keep your account information up to date. You are solely responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. FINEance reserves the right to suspend or terminate your account if any unauthorized use or breach of security is detected.
                        </p>

                        <br><p class="text-justify">
                        You agree to use the Service in compliance with all applicable laws and regulations. You are solely responsible for the content you post or transmit through the Service. You must not engage in any activity that may disrupt the Service or compromise its security, integrity, or availability. Prohibited activities include, but are not limited to, unauthorized access to other users' accounts, transmission of viruses or malicious code, or any form of harassment or offensive behavior. FINEance and its licensors retain all rights, titles, and interests in the Service, including all associated intellectual property rights. You acknowledge that the Service contains proprietary information and materials protected by copyright, trademark, and other laws. You agree not to modify, reproduce, distribute, transmit, display, perform, or create derivative works from any portion of the Service without the prior written consent of FINEance. </p>

                        <br><p class="text-justify">
                        FINEance reserves the right to suspend, restrict, or terminate your access to the Service at any time, with or without cause or notice. Upon termination, all provisions of these Terms of Service that would reasonably be expected to survive termination shall remain in full force and effect. These Terms of Service shall be governed by and construed in accordance with the laws of the jurisdiction in which FINEance is located, without regard to its conflict of laws principles. </p>

                        <br><p class="text-justify">
                        By using FINEance's Service, you acknowledge that you have read, understood, and agreed to these Terms of Service. If you have any questions or concerns about these terms, you can reach us by the contact information that we have provided.</p> <br><br>
                    </div>
                </div>
            </div>

            <div class="w-full flex flex-col py-10 px-4 md:px-16 ">
                <div class="border-b-2 border-gray-400 w-full text-center flex flex-col justify-center items-center pt-5 pb-10">
                    <h1 class="text-3xl py-2 font-poppins font-bold text-gray-600">Privacy Policy</h1>
                    <p class="max-w-[700px]">At FINEance, we are committed to protecting your privacy and safeguarding your personal information. This Privacy Policy explains how we collect, use, and disclose your information when you access and use our financial management website. By using the Service, you consent to the practices described in this Privacy Policy.</p>
                </div>
                <div class="border-b-2 border-gray-400 w-full grid sm:grid-rows-none grid-rows-1 grid-cols-1 py-10 gap-x-4 xl:px-20 gap-y-4">
                    <div class="flex flex-col bg-gray-200 p-4 rounded-md ">
                        <h1 class="text-3xl font-bold font-castoro">Information We Collect</h1>
                        <p class="py-5 text-sm lg:text-md">
                        When you register an account with FINEance, we may collect personal information such as your name, email address, and password. We require this information to provide you with access to the Service and to communicate with you about your account. In order to utilize certain features of the Service, you may choose to provide financial information, such as your income, expenses, and account balances. This information is used to provide personalized financial management tools and recommendations tailored to your needs.
                        </p>

                        <p class="py-5 text-sm lg:text-md">We may collect information about how you use the Service, including your interactions, transactions, and browsing activities. This data helps us improve our Service, personalize your experience, and ensure the security and integrity of our platform. We use cookies and similar technologies to enhance your browsing experience and collect information about how you use our website. These technologies enable us to remember your preferences, customize content, and analyze usage patterns. You can manage your cookie preferences through your browser settings.</p>
                    </div>
                    <div class="flex flex-col bg-gray-200 p-4 rounded-md ">
                        <h1 class="text-3xl font-bold font-castoro">How We Use Your Information</h1>
                        <p class="py-5 text-sm lg:text-md">
                        We use your information to deliver and optimize the Service, including providing personalized financial insights, budgeting tools, and recommendations. We may also use your information to enhance our website's functionality, develop new features, and improve user experience. We may use your email address to send you important updates, notifications, and newsletters related to the Service. You can choose to opt-out of non-essential communications at any time.
                        </p>

                        <p class="py-5 text-sm lg:text-md">Your information helps us detect and prevent fraud, unauthorized access, and other security threats. We may use automated systems to monitor user activity and analyze patterns that could indicate suspicious behavior. We may aggregate and anonymize your information to generate statistical or analytical insights. These insights do not identify individual users and may be used for research, reporting, or marketing purposes.</p>
                    </div>
                    <div class="flex flex-col bg-gray-200 p-4 rounded-md ">
                        <h1 class="text-3xl font-bold font-castoro">Changes to this Privacy Policy</h1>
                        <p class="py-5 text-sm lg:text-md">
                        We may update this Privacy Policy from time to time
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection