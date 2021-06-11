<!DOCTYPE html>
<html>
<head>
<style>



table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}



</style>
</head>
<body>

<div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary">search</button>
  
</div>

<h2>HTML Table</h2>




<table>


  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th>Time</th>
    <th>Image</th>
    <th>Action</th>

  </tr>
  @foreach($data as $d) 
  <tr>
    <td>{{$d->id}}</td>
    <td>{{$d->title}}</td>
    <td>{{$d->description}}</td>
    <td>{{$d->created_at}}</td>
    <td>
    <img src="https://www.w3schools.com/images/picture.jpg" alt="Mountain" style="width:40px">

</td>

    <td>
        <a href={{route('student.table.edit',$d->id )}}>Edit</a><br\>
        <a href={{route('student.table.delete',$d->id )}}>Delete</a>


    </td>

  </tr>
  
  @endforeach
  
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>


  
</nav>
