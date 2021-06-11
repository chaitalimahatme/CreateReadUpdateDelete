<!DOCTYPE html>
<html>
<body>

<h2>HTML Form</h2>



<form action={{route('student.form.submit')}} method="POST">
@csrf
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" ><br>
  <label for="description">Description:</label><br>
  <input type="text" id="description" name="description"><br><br>
  <input type="submit" value="Submit">
  
</form> 


</body>
</html>

