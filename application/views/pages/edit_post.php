<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body>
    <div class="max-w-3xl mx-auto px-4 py-8">
        <h1 class="text-2xl font-semibold text-gray-900 mb-6">Edit a post</h1>


        <form action="<?= base_url('update/now/' . $post['POST_ID']) ?>" method="POST">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" name="title" placeholder="Enter post title" value="<?php echo $post['title']; ?>"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Body</label>
                <textarea name="body" rows="10"
                    class="w-full border border-gray-200 rounded-lg px-4 py-2 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500"><?php echo $post['body'] ?></textarea>

            </div>

            <div class="mb-5">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-700">
                    Category
                </label>

                <select name="category" id="category"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none transition-colors">

                    <?php foreach ($categories as $cats): ?>
                    <option value="<?= $cats['id']  ?>" <?php if ($cats['id'] === $post['category_id']) {
                                                                echo 'selected';
                                                            } ?>>
                        <?= $cats['name'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>


            </div>

            <div class="">
                <label>Upload Image</label>
                <input type="file" name="userfile" size="20">
            </div>

            <div class="flex items-center gap-3">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-5 py-2 rounded-lg">
                    Update
                </button>
                <a href="<?php echo base_url('delete/post/' . $post['POST_ID']) ?>"
                    class="bg-red-500 hover:bg-red-700 text-white text-sm font-medium px-5 py-2 rounded-lg">
                    Delete
                </a>
            </div>
        </form>
    </div>
</body>

</html>