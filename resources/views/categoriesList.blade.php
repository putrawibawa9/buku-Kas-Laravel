
@extends('layouts.main')
@section('container')
    
        <div class="container">
            <div class="row">
              <div class="col-12 p-3 bg-white">
                <h3 class="text-center mb-5 mt-5">Category List</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center">ID Category</th>
                          <th class="text-center">Category Name</th>
                          <th class="text-center">Category Type</th>                  
                          <th class="text-center">Self Category</th>                  
                        </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                      <tr>
                        <td class="text-center" >{{$category->category_id}}</td>
                        <td class="text-center" >{{$category->category_name}}</td>
                        <td class="text-center">{{$category->category_type}}</td>
                        <td class="text-center"><a href="category/{{$category->category_id}}">View</a></td>
                      </tr>
                      @endforeach
                      </tbody>
              </table>
              <div>
                
                </div>

          </div>
        </div>
      </div>

  @endsection    
      
      



