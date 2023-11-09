<div>
    <!--start breadcrumb-->
    @section('current-page-name', 'Add Product')
    @include('partials.admin._bread_crumb')
    <!--end breadcrumb-->


    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Add Product</h6>
        </div>
        <div class="card-body">
            <input class="form-control form-control mb-3" type="text" placeholder="Product Name">
            <textarea class="form-control mb-3" placeholder="Product Description" rows="6"></textarea>

            <div class="row">
                <div class="col-md-6">
                    <label for="product_image_input" class="form-label">Select Product Image's</label>
                    <input class="form-control mb-3" type="file" multiple="" id="product_image_input">

                    <label for="product_price_input" class="form-label">Enter Product Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                        <input type="text" class="form-control" id="product_price_input">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="product_price_input" class="form-label">Select Product Category</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected="">Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    
                    <label for="product_price_input" class="form-label">Select Product Sub-Category</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected="">Sub-Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                
                <div class="col-md-4 mt-2">
                    <button type="submit" class="btn btn-success">Add Product</button>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Product Preview</h6>
        </div>
        <div class="card-body">
            <h1>Product Name</h1>
            <p>Product Description -- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate placeat excepturi nulla, eligendi dolor nihil libero facilis ducimus, repellendus iste porro dicta quos maiores alias odit assumenda. Autem repellendus aut officiis asperiores iste quibusdam excepturi doloremque odio nemo quisquam ipsam, repudiandae magni molestias assumenda doloribus ducimus dignissimos nesciunt eius inventore. Odit, id dolor! Quis voluptas facilis perspiciatis placeat eaque? Officia ipsam incidunt aliquid necessitatibus quos ab, facere vel qui facilis perspiciatis ipsa quia expedita dignissimos doloribus illo id architecto consequatur alias, debitis illum unde mollitia repudiandae adipisci eius! Enim voluptates eum nostrum cum dolores culpa aliquid ut sapiente at non, nobis aliquam omnis modi illo voluptate excepturi, assumenda ducimus autem odio corrupti rerum consectetur nulla dignissimos dolorum! Nihil autem reiciendis cumque quidem alias facere odit quam quia quibusdam! Fuga deserunt eos eum quia, natus nobis cumque sed dignissimos placeat eligendi voluptatibus, dolores animi pariatur vero fugit vel delectus similique doloribus totam. Consequatur libero quae, adipisci quasi fugiat officia? Magnam est facilis repellat, obcaecati expedita nihil quod omnis dolor quidem quia consequuntur possimus perferendis maxime id numquam similique velit ullam assumenda. Iusto voluptatum ex inventore molestiae laboriosam mollitia nihil quibusdam quasi ut perferendis ullam doloribus illo omnis necessitatibus quisquam suscipit voluptas sit, atque numquam eveniet earum sint rerum in! Rem vero quae necessitatibus vel numquam. Amet adipisci sint commodi beatae nisi sed vel mollitia quibusdam quos nulla? Aperiam beatae repudiandae vero, laborum odio amet ea eligendi ratione ab vitae placeat itaque illo, iusto impedit cupiditate obcaecati nulla veniam dolore doloribus aliquid qui sunt sint! Dolorum error distinctio ratione nostrum repellendus labore quo ullam deserunt tempora fuga. Quam cumque accusantium recusandae repellendus ipsa sit earum, vitae, placeat assumenda sed similique? Quia accusamus sed eius tempora asperiores! Optio aperiam repellendus laborum! Dolorum, blanditiis molestiae unde quos alias impedit! Nemo et rerum corporis animi!</p>

            <div class="row">
                <div class="col-md-6">
                    <h3>Price : $ 0.00</h3>
                </div>

                <div class="col-md-6">
                    <h4>Category</h4>
                    <hr>
                    <h5>Sub-Category</h5>
                </div>
            </div>
            <hr>
            <div class="col-md-12">
                <img src="{{ asset('admin/assets/images/logo-icon-2.png') }}" class="img-fluid" alt="product images">
                <img src="{{ asset('admin/assets/images/logo-icon-2.png') }}" class="img-fluid" alt="product images">
                <img src="{{ asset('admin/assets/images/logo-icon-2.png') }}" class="img-fluid" alt="product images">
                <img src="{{ asset('admin/assets/images/logo-icon-2.png') }}" class="img-fluid" alt="product images">
            </div>

        </div>
    </div>

</div>
