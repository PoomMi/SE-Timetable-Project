@extends('master')

@section('content')
    <div class="container">
    <h1 class="mt-5">Add new task</h1>
    <hr>
    <form action="/tasks" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="title">
        </div>
        <div class="form-group">
            <label for="description">Task description</label>
            <input type="text" class="form-control" id="taskDescription" name="description">
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    @if(Session::has('message'))
        <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif


   <form action="search" method="post">
   <div class="container choose">
    <label for="year">Year</label>
      <select id="year" name="year">
      @if(isset($y))
      <option value="{{$y}}" hidden> {{$y}}</option>
      @endif
       <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
         <option value="4">4</option>
     </select>

    <label for="semester">Semester </label>
    <select id="semester" name="semester">
     @if(isset($s))
      <option value="{{$s}}" hidden> {{$s}}</option>
      @endif
      <option value="1">1</option>
      <option value="2">2</option>
    </select>

    <input class="btn" type="submit" value="Search">

    </div>
    {{ csrf_field() }}
   </form>

    <table class="table mt-5">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Subject ID</th>
                <th scope="col">Subject name</th>
                <th scope="col">Year</th>
                <th scope="col">Semester</th>
            </tr>
        </thead>
        <tbody>
          <?php $i=0;?>
            @if(isset($y) && isset($s))

            @foreach($subjects as $subject)
                <tr>
                    @if($subject->year==$y&&$subject->semester==$s)
                    <td>{{$subject->subj_id}}</a></td>
                    <td>{{$subject->name}}</td>
                    <td>{{$subject->year}}</td>
                    <td>{{$subject->semester}}</td>
                    <?php $i++; ?>
                    @endif
                </tr>
            @endforeach

            @if($i==0)
            <script>alert("No result");</script>
            @endif

            @endif
        </tbody>
    </table>


@stop