@extends('welcome')

@section('content')
<section id="shopping-cart">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-warning">
                        <h4 class="card-title">List of Categories</h4>
                    </div>
                    <div class="container mt-4">
                        <div class="btn btn-green w-1/3">
                            <a href="{{route('create-category')}}" class="text-white">Add a category</a>
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
                                        <th class="border-top-0">Description</th>
                                        <th class="border-top-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $category): ?>
                                        <tr>
                                            <td class="text-truncate">
                                                {{ $category->id }}
                                            </td>
                                            <td class="text-truncate">
                                                {{ $category->name }}
                                            </td>
                                            <td class="text-truncate">
                                                {{ $category->description }}
                                            </td>
                                            <td>
                                                <a href="{{route('edit-category', $category->id)}}" class="text-primary">Edit</a> |
                                                <a href="{{ route('delete-category', $category->id) }}" class="text-secondary-primary">Delete</a>
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