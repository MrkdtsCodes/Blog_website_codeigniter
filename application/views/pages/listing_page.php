    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>My Blog</title>

    </head>

    <body>
        <div class="mainconatainer">
            <div class="bloglist">
                <div class="max-w-5xl mx-auto px-4 py-8">
                    <?php 

                   foreach ($blogs as $blog) {
                        ?>
                        <div class="bg-white border border-gray-200 rounded-xl p-6 mb-4">
                            <span class="text-xs text-gray-400"><?= $blog->Post_Created ?> <strong><?php echo $blog->name ?></strong></span>
                            <h2 class="text-lg font-semibold text-gray-900 mt-1 mb-2"><b><?= $blog->title ?></b></h2>
                            <p class="text-sm text-gray-500 leading-relaxed"><?= word_limiter($blog->body, 50) ?></p>
                            <a href="<?php echo base_url('home/read/'.$blog->POST_ID) ?>" class="inline-block mt-4 text-sm text-blue-600 font-medium hover:underline">Read more→</a>
                        </div>
                    <?php
                    }
        
                    ?>

                </div>
            </div>




        </div>

    </body>

    </html>