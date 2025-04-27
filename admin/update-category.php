<?php 
    include('sidebar.php');
?>
<div class="col-10">
    <div class="content-right bg-white p-6 rounded-lg shadow-md">
        <div class="top mb-6">
            <h3 class="text-2xl font-semibold text-gray-700">Update Category</h3>
            <p class="text-sm text-gray-500">Make changes to the category details below.</p>
        </div>

        <div class="bottom">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="postID" value="<?php echo $postID; ?>">

                <!-- Category Name Input -->
                <div class="form-group mb-4">
                    <label for="category_name" class="block text-lg font-medium text-gray-700">New Category</label>
                    <input type="text" id="category_name" name="category_name" value="<?php echo updateCategory(); ?>" class="form-control mt-2 block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <!-- Save Button -->
                <div class="form-group">
                    <button type="submit" name="btn-update-category" class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
</body>
</html>


