<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Contact</title>
</head>
<body class="bg-gray-50">

    <!-- Main -->
    <div class="max-w-5xl mx-auto px-4 py-8">

        <!-- Header Card -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-4">
            <h2 class="text-lg font-semibold text-gray-900 mb-1">Contact Us</h2>
            <span class="text-xs text-gray-400">We would love to hear from you!</span>
            <hr class="border-gray-100 my-4">
            <p class="text-sm text-gray-500 leading-relaxed">
                Have a question, suggestion, or just want to say hi? 
                Send us a message and we will get back to you as soon as possible.
            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-4">

            <h2 class="text-lg font-semibold text-gray-900 mb-1">Send a Message</h2>
            <span class="text-xs text-gray-400">All fields are required.</span>
            <hr class="border-gray-100 my-4">

            <form action="#" method="post" class="flex flex-col gap-4">

                <!-- Name -->
                <div>
                    <label class="text-sm text-gray-600 mb-1 block">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Juan Dela Cruz"
                        class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-blue-400"
                    />
                </div>

                <!-- Email -->
                <div>
                    <label class="text-sm text-gray-600 mb-1 block">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="juan@email.com"
                        class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-blue-400"
                    />
                </div>

                <!-- Subject -->
                <div>
                    <label class="text-sm text-gray-600 mb-1 block">Subject</label>
                    <input
                        type="text"
                        name="subject"
                        placeholder="What is this about?"
                        class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-blue-400"
                    />
                </div>

                <!-- Message -->
                <div>
                    <label class="text-sm text-gray-600 mb-1 block">Message</label>
                    <textarea
                        name="message"
                        rows="5"
                        placeholder="Type your message here..."
                        class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-blue-400 resize-none"
                    ></textarea>
                </div>

                <!-- Submit -->
                <div>
                    <button
                        type="submit"
                        class="border-1 border-black text-white p-2 rounded-sm bg-green-500 text-sm font-medium">
                        Send Message
                    </button>
                </div>

            </form>

        </div>

        <!-- Other Ways Card -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-4">
            <h2 class="text-lg font-semibold text-gray-900 mb-1">Other Ways to Reach Us</h2>
            <hr class="border-gray-100 my-4">
            <ul class="text-sm text-gray-500 leading-relaxed space-y-2">
                <li>→ Email: markandrie@email.com</li>
                <li>→ GitHub: github.com/mrkdts</li>
                <li>→ Facebook: facebook.com/mrkdts</li>
            </ul>
        </div>

    </div>

</body>
</html>