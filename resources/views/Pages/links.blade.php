@extends('Layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mt-4 shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Link Registration</h4>
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-database-add"></i> ADD
                </button>
            </div>
            <div class="card-body">
                <table id="myTable" class="display table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Link Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="link-form" method="POST" action="{{ route('store') }}">
                        @csrf <!-- CSRF token -->
                        <div class="row">
                            <div class="col-lg">
                                <label>Url</label>
                                <input type="text" name="url" id="url" class="form-control" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="link-form">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Link Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-form" method="POST">
                        @csrf <!-- CSRF token -->
                        <input type="hidden" id="edit-id" name="id">
                        <div class="row">
                            <div class="col-lg">
                                <label>Url</label>
                                <input type="text" id="edit-url" name="url" class="form-control" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="edit-form">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
