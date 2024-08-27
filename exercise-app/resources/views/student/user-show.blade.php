<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>User</title>
    <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          padding: 8px;
          text-align: left;
          border-bottom: 1px solid #DDD;
        }
        
        tr:hover {background-color: #D6EEEE;}
        </style>
</head>
<body>
 <h2>User Information</h2>
<table class="w3-table">
    <tr>
        <td>Author</td>
        <td>Title of Blog</td>
        <td>Short Description</td>
        <td>Date Created</td>
    </tr>
    <tr>
        <td>{{$user['author']}}</td>
        <td>{{$user['title_of_blog']}}</td>
        <td>{{$user['short_description']}}</td>
        <td>{{$user['date_created']}}</td>
    </tr>  
</table>
        

  

</body>
</html>