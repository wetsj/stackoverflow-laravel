@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row ">
    
            <div class="col-3 border-end" style="height:125px;">
                <ul class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action active" aria-current="true" href="#"><i class="bi bi-globe"></i>&ensp;Toutes les questions</a>
                    
                
                    <a class="list-group-item list-group-item-action" aria-current="false" href="#"><i class="bi bi-tags"></i>&ensp;Tags</a>
                    
                    
                    <a class="list-group-item list-group-item-action" aria-current="false" href="#"><i class="bi bi-person"></i>&ensp;Utilisateurs</a>
                    
                </ul>
            </div>
        
        <div class="col-8">
            <div class="title d-flex justify-content-between mb-3"><h3>All questions</h3>
                <button type="submit" class="btn btn-primary">Poser une question</button>
            </div>
            <div class="subtitle d-flex justify-content-between mb-3 align-items-center">
                <h5>31231232 questions</h5>
                <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-secondary">nouveau</button>
                        <button type="button" class="btn btn-outline-secondary">ancien</button>
                        <button type="button" class="btn btn-outline-secondary">non commente</button>
                </div>
            </div>
            <div class="card w-100 mb-3">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    
                            <p class="card-text ">With supporting text below as a natural lead-in to additional content.</p>
                       
                    
                    <span class="badge bg-primary">PHP</span>
                </div>
            </div>
            <div class="card w-100 mb-3">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <span class="badge bg-primary">javascript</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
