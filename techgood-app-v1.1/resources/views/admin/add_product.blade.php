    @extends('admin.dashboard')
    @section('admin-add')
        <div class="container mt-5 mb-5">
            <h2 class="mb-4">Add Product Form</h2>
            <form class="p-5 border" method="POST" enctype="" action="">
                <div class="form-group">
                    <label for="productName">Name:</label>
                    <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="priceOld">Price Old:</label>
                        <input type="number" class="form-control" id="priceOld" requiredplaceholder="Enter old price">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="priceNew">Price New:</label>
                        <input type="number" class="form-control" id="priceNew" requiredplaceholder="Enter new price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Enter description"></textarea>
                </div>
                <div class="form-group">
                    <label for="color">Color:</label>
                    <input type="color" class="form-control" id="color">
                    required
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="productType">Product Type:</label>
                        <select id="productType" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" requiredplaceholder="Enter quantity">
                    </div>
                </div>
                <div class="form-group">
                    <label for="image1">Image 1:</label>
                    <input type="file" class="form-control-file" id="image1" required>
                </div>
                <div class="form-group">
                    <label for="image2">Image 2:</label>
                    <input type="file" class="form-control-file" id="image2" required>
                </div>
                <div class="form-group">
                    <label for="image3">Image 3:</label>
                    <input type="file" class="form-control-file" id="image3" required>
                </div>
                <div class="form-group">
                    <label for="image4">Image 4:</label>
                    <input type="file" class="form-control-file" id="image4" required>
                </div>
                <div class="form-group">
                    <label for="image5">Image 5:</label>
                    <input type="file" class="form-control-file" id="image5" required>
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    @endsection
