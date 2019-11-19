@extends('master')
@section('content')


<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
 
}

th, td {
  border: 1px solid #ddd;
  text-align: center;
  padding: 20px 1px 20px 1px;
}

.choose{
        position:relative;
        padding: 20px;
        background-color: #f1f1f1;
        top :20px;
        border-radius:10px;
        width:50%;
    }
    label{
        width:80%;
    }
    select{
        width:19%;
    }
    .btn{
        background-color: #4CAF50;
        color: white;
        width:100%;
    }
</style>


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
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <form action="add" method="post">
        <input type="text" name="std_id" value="600611006" hidden>
          <?php $i=0;?>
            @if(isset($y) && isset($s))

            @foreach($subjects as $subject)
                <tr>
                    @if($subject->year==$y&&$subject->semester==$s)
                    <td>{{$subject->subj_id}}</td>
                    <td>{{$subject->name}}</td>
                    <td>{{$subject->year}}</td>
                    <td>{{$subject->semester}}</td>
                    <input type="text" name="subj_id" value="{{$subject->subj_id}}" hidden>
                    <td><input class="btn" type="submit" value="Add"></td>
                    {{ csrf_field() }}
                    <?php $i++; ?>
                    @endif
                </tr>
            @endforeach

            @if($i==0)
            <script>alert("No result");</script>
            @endif
            @endif
            </form>
        </tbody>
    </table>
    
@stop