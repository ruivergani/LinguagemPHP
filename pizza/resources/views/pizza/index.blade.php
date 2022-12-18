@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                   <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">View</a>
                        <a href="" class="list-group-item list-group-item-action">Create</a>
                   </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="name" class="mb-1">Name of Pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="Margherita">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="mb-1">Description of Pizza</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-inline col-md-4 mb-3">
                        <label class="mb-1">Pizza Price (£)</label>
                        <input type="number" class="form-control mb-2" placeholder="Small Size">
                        <input type="number" class="form-control mb-2" placeholder="Medium Size">
                        <input type="number" class="form-control mb-2" placeholder="Large Size">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="mb-1">Category</label>
                        <select class="form-control">
                            <option value=""></option>
                            <option value="vegetarian">Vegetarian</option>
                            <option value="nonvegetarian">Non Vegetarian</option>
                            <option value="tradicional">Tradicional Pizza</option>
                        </select>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="productRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Collection
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="productRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Delivery
                        </label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="image" class="mb-1">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection