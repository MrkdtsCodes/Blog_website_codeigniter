    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>My Blog</title>
</head>
<body>
    <div class="max-w-3xl mx-auto px-4 py-8">
        
        <div class="flex justify-space-between p-2 justify-between">
            <div>
                <a href="<?= base_url('home'); ?>" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                    Back
                </a>
            </div>

             <div>
                <a href="<?= base_url('update/Post/'.$post->POST_ID); ?>" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                    Edit
                </a>
            </div>
        </div>

        <article>
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight mb-6">
                <?php echo htmlspecialchars($post->title); ?>
            </h1>

            <div class="text-base md:text-lg text-gray-800 leading-relaxed whitespace-pre-wrap">
                <?php echo nl2br(htmlspecialchars($post->body)); ?>
            </div>
        </article>

    </div>
</body>
</html>