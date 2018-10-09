
<div class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="addCategoryModalLabel">Add Category</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="categoryForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="categoryName" class="form-control-label">Category Name</label>
                            <input type="text" name="cat_name" class="form-control" id="categoryName" required>
                        </div>
                        <div class='form-group'>
                        <img id="cat-image-thumbnail" width='100'>
                        </div>
                        <div class="form-group">
                        <label for="image-input">Category Image</label>
                        <input type="file" class="form-control-file" id="image-input" name="cat_image">
                        <small id="fileHelp" class="form-text text-muted">Max 3 MB</small>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-warning" type="submit" name="add_category" id="add_category_button">Add Category</button>
                    </div>
                </form>

                
            </div>
        </div>
    </div>
