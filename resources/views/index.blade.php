<!DOCTYPE html>
<html>

<head>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <a href="{{ route('blog.create') }}" class="btn btn-primary bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full top-0 right-0 h-16 w-16">
    Create Blog</a>
  <br>
  <hr>
  <h1> <strong>My Blog Details </strong></h1>
  <table class="min-w-full bg-white">
    <thead>
      <tr>
        <th>Blog ID</th>
        <th>Blog Name</th>
        <th>Blog Description</th>
        <th> Actions </th>
      </tr>
    </thead>
    @foreach($blogs as $blog)
    <tbody>
      <tr>
        <td>{{$blog->id}}</td>
        <td>{{$blog->name}}</td>
        <td>{{$blog->description}}</td>
        <td>
          <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
              Edit Blog</a>
            <button type="submit" class="bg-red-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full">
              Delete Blog</button>
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</body>

</html>