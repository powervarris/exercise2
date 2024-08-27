<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Form</title>
    <style>
        input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Blog Submission Form</h1>
        <form action="/submit" method="post">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
            
            <label for="title">Title of Blog:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="description">Short Description:</label>
            <input type="text" id="description" name="description" rows="4" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
