@extends('layouts.master')
@section('title','Online Shop')
@section('content')

      <!-- Cart Start -->
      <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12 table-responsive mb-5">
            <a href="{{route('carousal.create')}}"  class="btn btn-primary float-right mb-2" >Add Carousal</a>
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Image 3</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach($carousals as $carousal)
                        <tr>
                            <td class="align-middle"><img src="{{asset('/images/'.$carousal->image1)}}" style="height:100px; width:100px;"/></td>
                            <td class="align-middle"><img src="{{asset('/images/'.$carousal->image2)}}" style="height:100px; width:100px;"/></td>
                            <td class="align-middle"><img src="{{asset('/images/'.$carousal->image3)}}" style="height:100px; width:100px;"/></td>
                            <td class="align-middle">
                                <a href="{{route('carousal.edit',$carousal->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="{{route('carou_delete',$carousal->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Cart End -->


@endsection