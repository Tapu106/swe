@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
          <div class="panel panel-default">
              <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <th>
                            Title
                        </th>
                        <th>
                            Content
                        </th>
                       
                    </thead>
    
                    <tbody>
                      @foreach($posts as $post)
                        <tr>
                            <td> {{  $post->title }} </td>
                            <!-- <td>Edit</td> -->
                            <!-- <td>Delete</td> -->
                            <td>{{ $post->created_at }}</td>
                           
                        
                           
                            
                        </tr>



                      @endforeach
                    </tbody>
    
                </table>
    
              </div>
          </div>



@endsection