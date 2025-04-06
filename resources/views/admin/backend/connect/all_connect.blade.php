@extends('admin.admin_master')
@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
             
        </div> 


<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">All Connect</h5>
            </div><!-- end card header -->

            <div class="card-body">
    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
        <thead>
        <tr>
            <th>Sl</th>
            <th>Titile</th> 
            <th>Description</th> 
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($connect as $key=> $item) 
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->title }}</td>  
                <td>{{ Str::limit($item->description, 50, '...')  }}</td>
                <td>
    <a href="{{ route('edit.feature',$item->id) }}" class="btn btn-success btn-sm">Edit</a>  
    <a href="{{ route('delete.feature',$item->id) }}" class="btn btn-danger btn-sm" id="delete">Delete</a>              

                </td>
            </tr> 
        @endforeach 

        </tbody>
    </table>
            </div>

        </div>
    </div>
</div>

        



    </div> 
</div>  

@endsection
