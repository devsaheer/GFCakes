    <div class="modal fade" id="addProductModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="productForm" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="productName" class="form-control-label">Product Name</label>
                            <input type="text" class="form-control" name="product_name" required>
                        </div>
                        <div class="form-group">
                            <label for="category" class="form-control-label">Category</label>
                            <select class="form-control" name="product_category" id="product_category">
                            <?php
                            $query = "SELECT * FROM categories";
                            $select_all_categories_query = mysqli_query($connection,$query);
                            
                            while($row = mysqli_fetch_assoc($select_all_categories_query)){
                                
                                $cat_name = $row['cat_name'];
                                echo "<option value='{$cat_name}'>{$cat_name}</option>";
                            }

                            ?>

                            </select>
                        </div>

                        <div class="form-group"><label for="productPrice" class="form-control-label">Product Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">RS</span>
                                <input type="text" class="form-control" name="product_price" required>
                            </div>
                        </div>
                        <div class="form-group"><label for="productOfferPrice" class="form-control-label">Product Offer
                                Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">RS</span>
                                <input type="text" class="form-control" name="product_offer_price">
                            </div>
                        </div>

                        <div class='form-group'>
                        <img id="product-image1-thumbnail" width='100'>
                        </div>

                        <div class="form-group bg-faded p-3">
                            <label for="file">Product Image 1</label>
                            <input type="file" class="form-control-file" id="image-input1" name="product_image1" required>
                            <small id="fileHelp" class="form-text text-muted">Max Size 3MB</small>
                        </div>

                        <div class='form-group'>
                        <img id="product-image2-thumbnail" width='100'>
                        </div>

                        <div class="form-group bg-faded p-3">
                            <label for="file">Product Image 2</label>
                            <input type="file" class="form-control-file" id="image-input2" name="product_image2">
                            <small id="fileHelp" class="form-text text-muted">Max Size 3MB</small>
                        </div>

                        <div class='form-group'>
                        <img id="product-image3-thumbnail" width='100'>
                        </div>        

                        <div class="form-group bg-faded p-3">
                            <label for="file">Product Image 3</label>
                            <input type="file" class="form-control-file" id="image-input3" name="product_image3">
                            <small id="fileHelp" class="form-text text-muted">Max Size 3MB</small>
                        </div>

                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            <textarea name="product_description" id="product_description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                        <label for="product_status">Product Status</label>
                        <select class="form-control" name="product_status" id="product_status">
                        <option value="publish">Publish</option>
                        <option value="draft">Draft</option>
                        </select>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-success" id="add_product_button" name="add_product" type="submit">Add Product</button>
                        </div>

                        

                    </form>
                </div>
            </div>
        </div>
    </div>