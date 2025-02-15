@extends('welcome')

@section('content')

<section id="shopping-cart">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-warning">
                        <h4 class="card-title">List of Products</h4>
                    </div>
                    <div class="container mt-4">
                        <div class="btn btn-green w-1/3">
                        <a href="{{ route('create-product')}}" class=" text-white">Add a product</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <div class="table-responsive">
                            <table id="recent-orders" class="table table-hover table-xl mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">Id</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Category</th>
                                        <th class="border-top-0">Price</th>
                                        <th class="border-top-0">Quantity</th>
                                        <th class="border-top-0">Unity</th>
                                        <th class="border-top-0">Description</th>
                                        <!-- <th class="border-top-0">Create_AT</th>
                                        <th class="border-top-0">Update_AT</th> -->
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $product): ?>
                                        <tr>
                                            <td class="text-truncate">
                                                {{ $product->id }}
                                            </td>
                                            <td class="text-truncate">
                                                {{ $product->name }}
                                            </td>
                                            <td class="text-truncate">
                                                {{ $product->category->name }}
                                            </td>
                                            <td class="text-truncate">
                                                {{ $product->price }}
                                            </td>
                                            <td class="text-truncate">
                                                {{ $product->quantity }}
                                            </td>
                                            <td class="text-truncate">
                                                {{ $product->unity->name }}
                                            </td>
                                            <td class="text-truncate">
                                                {{ $product->description }}
                                            </td>
                                            <!-- <td class="text-truncate">
                                                {{ $product->timestamps }}
                                            </td>
                                            <td class="text-truncate">
                                                {{ $product->update_at }}
                                            </td> -->
                                            <td>
                                                <a href="{{route('edit-product', $product->id)}}" class="text-primary">Edit</a> |
                                                <a href="{{ route('delete-product', $product->id) }}" class="text-secondary-primary">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection