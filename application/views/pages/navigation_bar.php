<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="navigationbar">
        <nav class="bg-white border-b border-gray-200 px-4 py-3">
            <div class="max-w-5xl mx-auto flex items-center justify-between">
                <a href="#" class="text-xl font-semibold text-gray-900 tracking-tight">My Blog</a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo base_url('home'); ?>" class="text-sm text-blue-600 font-medium">Home</a>
                    <a href="<?php echo base_url('home/about'); ?>" class="text-sm text-gray-600 hover:text-blue-600">About</a>
                    <a href="<?php echo base_url('home/contact'); ?>" class="text-sm text-gray-600 hover:text-blue-600">Contact</a>
                </div>

                <a href="<?php echo base_url('create/post'); ?>">
                    <button class="border-1 border-black text-white p-2 rounded-sm bg-green-500">Create Post</button>
                </a>


            </div>
            <div id="mobile-menu" class="hidden md:hidden mt-3 max-w-5xl mx-auto border-t border-gray-100 pt-3 space-y-2">
                <a href="#" class="block text-sm text-blue-600 font-medium py-1">Home</a>
                <a href="#" class="block text-sm text-gray-600 py-1">About</a>
                <a href="#" class="block text-sm text-gray-600 py-1">Posts</a>
                <a href="#" class="block text-sm text-gray-600 py-1">Contact</a>
            </div>
        </nav>

    </div>
</body>

</html>