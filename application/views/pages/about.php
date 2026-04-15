<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>About</title>
</head>
<body class="bg-gray-50">
    <!-- Main -->
    <div class="max-w-5xl mx-auto px-4 py-8">

        <!-- About This Blog -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-4">
            <h2 class="text-lg font-semibold text-gray-900 mb-1">About This Blog</h2>
            <span class="text-xs text-gray-400">Last updated — January 2025</span>
            <hr class="border-gray-100 my-4">
            <p class="text-sm text-gray-500 leading-relaxed">
                Welcome to My Blog! This is a place where I share my thoughts, experiences, 
                and things I learn as a student developer. I write about web development, 
                programming tips, and my journey learning new technologies like CodeIgniter, 
                PHP, and more.
            </p>
        </div>

        <!-- Who Writes Here -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-4">
            <h2 class="text-lg font-semibold text-gray-900 mb-1">Who Writes Here</h2>
            <hr class="border-gray-100 my-4">
            <p class="text-sm text-gray-500 leading-relaxed">
                Hi! I am Mark, a 4th year BSIT student from the Philippines. 
                I started this blog to document what I learn so I never forget it — 
                and hopefully help other students who are going through the same journey.
            </p>
        </div>

        <!-- What You Will Find Here -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-4">
            <h2 class="text-lg font-semibold text-gray-900 mb-1">What You Will Find Here</h2>
            <hr class="border-gray-100 my-4">
            <ul class="text-sm text-gray-500 leading-relaxed space-y-2">
                <li>→ Web development tutorials and tips</li>
                <li>→ My learning journey with PHP and CodeIgniter</li>
                <li>→ Things I wish I knew earlier as a student</li>
                <li>→ Simple explanations of complicated topics</li>
            </ul>
        </div>

        <!-- Get In Touch -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-4">
            <h2 class="text-lg font-semibold text-gray-900 mb-1">Get In Touch</h2>
            <hr class="border-gray-100 my-4">
            <p class="text-sm text-gray-500 leading-relaxed mb-4">
                Have a question or just want to say hi? Feel free to reach out!
            </p>
            <a href="<?= base_url('examples/contact') ?>" class="inline-block text-sm text-blue-600 font-medium hover:underline">Go to Contact page →</a>
        </div>

    </div>

</body>
</html>