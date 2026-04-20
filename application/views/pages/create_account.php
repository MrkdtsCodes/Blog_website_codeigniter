    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>My Blog</title>
    </head>

    <body class="bg-gray-50 min-h-screen flex items-center justify-center px-4 py-8">

        <div class="bg-white w-full max-w-2xl rounded-xl border border-gray-200 p-8">

            <h1 class="text-xl font-medium text-gray-900 mb-6">Create new user</h1>

            <form action="<?= base_url('submit/account') ?>" method="POST">

                <!-- Name Row -->
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div>
                        <label class="block text-sm text-gray-500 mb-1">lastname</label>
                        <input type="text" name="lastname" placeholder="e.g. Dela Cruz"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <small class="text-red-500"><?php echo form_error('lastname') ?></small>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-500 mb-1">firstname</label>
                        <input type="text" name="firstname" placeholder="e.g. Juan"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <small class="text-red-500"><?php echo form_error('firstname') ?></small>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-500 mb-1">middlename</label>
                        <input type="text" name="middlename" placeholder="e.g. Santos"
                            class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <small class="text-red-500"><?php echo form_error('middlename') ?></small>
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-sm text-gray-500 mb-1">email_address</label>
                    <input type="email" name="email_address" placeholder="e.g. juan@email.com"
                        class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <small class="text-red-500"><?php echo form_error('email_address') ?></small>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label class="block text-sm text-gray-500 mb-1">password</label>
                    <input type="password" name="password" placeholder="Enter password"
                        class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <small class="text-red-500"><?php echo form_error('password') ?></small>
                </div>

                <!-- Buttons -->
                <div class="flex gap-3">
                    <button type="submit"
                        class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 rounded-lg transition-colors">
                        Create user
                    </button>
                    <a href="<?= base_url('create/account') ?>"
                        class="px-6 py-2 border border-gray-200 text-sm text-gray-600 rounded-lg hover:bg-gray-50 transition-colors">
                        Cancel
                    </a>
                </div>

            </form>
        </div>

    </body>

    </html>
    </body>

    </html>