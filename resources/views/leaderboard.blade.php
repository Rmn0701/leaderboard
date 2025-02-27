<!DOCTYPE html>
<html lang="en">
<head>
  <title>Raman's Assignemnet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1 class="text-center">Raman's Assignemnet Leader Board</h1> 

    <table class="table">
        <thead>
        <tr>
            <th>Sr.No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Posts Count</th>
        </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @forelse($data as $value)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->posts_count}}</td>
                </tr>
        @empty
            <tr>
                <td colspan='4'>No Data Available</td>
            </tr>
        @endforelse

        </tbody>
    </table>
    
    <div class="pagination">
        {{$data->links()}}
    </div>
</div>

</body>
</html>
