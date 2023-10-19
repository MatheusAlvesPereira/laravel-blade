@extends('layouts.app')

@section('content')

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    
                    <div class="text-center fs-1">
                        <h1>Todo list</h1>
                    </div>
                    <div class="card">
                        <div class="card-body p-5">

                            <form action="" method="POST" class="d-flex justify-content-center align-items-center mb-4">
                                <div class="form-outline flex-fill">
                                    <input type="text" id="form2" class="form-control" placeholder="insira uma tarefa"/>
                                </div>
                                <button type="submit" href="" class="btn btn-info ms-2">Add</button>
                            </form>

                            <!-- Tabs navs -->
                            <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">All</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Active</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-3" aria-selected="false">Completed</a>
                                </li>
                            </ul>
                            <!-- Tabs navs -->

                            <!-- Tabs content -->
                            <div class="tab-content" id="ex1-content">
                                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                    <ul class="list-group mb-0">
                                        <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                            <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                                            Cras justo odio

                                            <button> - delete</button>
                                        </li>

                                        <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                            <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />

                                            <button> - delete</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tabs content -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection