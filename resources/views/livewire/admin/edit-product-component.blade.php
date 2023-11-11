<div>
    <!--start breadcrumb-->
    @section('current-page-name', 'Add Product')
    @include('partials.admin._bread_crumb')
    <!--end breadcrumb-->

    @include('partials.admin._alerts')
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Edite Product</h6>
        </div>
        <form wire:submit.prevent="edit_product">
            <div class="card-body">
                <input class="form-control form-control mb-3" type="text" placeholder="Product Name"
                    wire:model="product_name">
                <textarea class="form-control mb-3" placeholder="Product Description" rows="6" wire:model="description"></textarea>

                <div class="row">
                    <div class="col-md-6">
                        <label for="product_image_input" class="form-label">Select Product Image's</label>
                        <input class="form-control mb-3" type="file" multiple="" id="product_image_input"
                            wire:model="product_image">

                        <label for="product_price_input" class="form-label">Enter Product Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                            <input type="number" class="form-control" id="product_price_input" wire:model="price">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="product_price_input" class="form-label">Select Product Category</label>
                        <select class="form-select mb-3" wire:model="category_id">
                            <option selected="">Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        <label for="product_price_input" class="form-label">Select Product Sub-Category</label>
                        <select class="form-select mb-3" wire:model="sub_category_id">
                            <option selected="">Sub-Category</option>
                            @foreach ($sub_categories as $sub_category)
                                <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-5 mb-4">
                    <label for="product_quantity_input" class="form-label">Select Product Stock-quantity
                        Available</label>
                    <input type="number" class="form-control" id="product_quantity_input" wire:model="quantity">
                </div>


                @if ($old_product_image)
                    @foreach ($old_product_image as $image)
                        <div class="col-md-6 mt-2 mb-2">
                            <img src="{{ Storage::url($image->image) }}" class="img-fluid img-thumbnail"
                                alt="product images" height="120rem" width="120rem" />
                            <a href="" class="text-danger"
                                wire:click.prevent="delete_image({{ $image->id }})"><i class="fa fa-x"> </i></a>
                        </div>
                    @endforeach
                @endif

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Update Product</button>
                </div>
            </div>
        </form>
    </div>


    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Product Preview</h6>
        </div>
        <div class="card-body">
            <h1>Product Name</h1>
            <p>Product Description -- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate placeat
                excepturi nulla, eligendi dolor nihil libero facilis ducimus, repellendus iste porro dicta quos maiores
                alias odit assumenda. Autem repellendus aut officiis asperiores iste quibusdam excepturi doloremque odio
                nemo quisquam ipsam, repudiandae magni molestias assumenda doloribus ducimus dignissimos nesciunt eius
                inventore. Odit, id dolor! Quis voluptas facilis perspiciatis placeat eaque? Officia ipsam incidunt
                aliquid necessitatibus quos ab, facere vel qui facilis perspiciatis ipsa quia expedita dignissimos
                doloribus illo id architecto consequatur alias, debitis illum unde mollitia repudiandae adipisci eius!
                Enim voluptates eum nostrum cum dolores culpa aliquid ut sapiente at non, nobis aliquam omnis modi illo
                voluptate excepturi, assumenda ducimus autem odio corrupti rerum consectetur nulla dignissimos dolorum!
                Nihil autem reiciendis cumque quidem alias facere odit quam quia quibusdam! Fuga deserunt eos eum quia,
                natus nobis cumque sed dignissimos placeat eligendi voluptatibus, dolores animi pariatur vero fugit vel
                delectus similique doloribus totam. Consequatur libero quae, adipisci quasi fugiat officia? Magnam est
                facilis repellat, obcaecati expedita nihil quod omnis dolor quidem quia consequuntur possimus
                perferendis maxime id numquam similique velit ullam assumenda. Iusto voluptatum ex inventore molestiae
                laboriosam mollitia nihil quibusdam quasi ut perferendis ullam doloribus illo omnis necessitatibus
                quisquam suscipit voluptas sit, atque numquam eveniet earum sint rerum in! Rem vero quae necessitatibus
                vel numquam. Amet adipisci sint commodi beatae nisi sed vel mollitia quibusdam quos nulla? Aperiam
                beatae repudiandae vero, laborum odio amet ea eligendi ratione ab vitae placeat itaque illo, iusto
                impedit cupiditate obcaecati nulla veniam dolore doloribus aliquid qui sunt sint! Dolorum error
                distinctio ratione nostrum repellendus labore quo ullam deserunt tempora fuga. Quam cumque accusantium
                recusandae repellendus ipsa sit earum, vitae, placeat assumenda sed similique? Quia accusamus sed eius
                tempora asperiores! Optio aperiam repellendus laborum! Dolorum, blanditiis molestiae unde quos alias
                impedit! Nemo et rerum corporis animi!</p>

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
                <div class="row">

                    @if ($product_image)
                        @foreach ($product_image as $image)
                            <div class="col-md-3">
                                <img src="{{ $image->temporaryUrl() }}" class="img-fluid img-thumbnail"
                                    alt="product images" />
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>

</div>
