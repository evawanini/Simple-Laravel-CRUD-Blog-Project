<!DOCTYPE html>
<html>

<head>
</head>

<body>
  <div class="flex justify-center content-center">
    <form method="post" action="/blogs/{{$blogs->id}}">
      @csrf
      @method('PUT')
      @if ($errors->any())
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-2 mb-2 rounded relative" role="alert">
        Please fill all fields!
      </div>
      @endif
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Blog ID</label>
      <input class="py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="number" placeholder="blog id" name="id" value="{{$blogs->id}}" />

      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Blog Name</label>
      <input class="py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="blog name" name="name" value="{{$blogs->name}}" />

      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Blog Description</label>
      <textarea class="py-2 px-3 rounded-lg border-2 border-green-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="blog description" name="description" value="{{$blogs->description}}"></textarea>

      <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
        <button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancel</button>
        <button class='w-auto bg-purple-500 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Update Details</button>
      </div>
    </form>
  </div>
</body>

</html>