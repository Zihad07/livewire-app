<div>
    <table class="table">
        <thead>
          <tr>
            {{--  <th scope="col">#</th>  --}}
            <th scope="col">Name</th>
            <th scope="col">Discription</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
            <tr>
              {{--  <th scope="row">{{ $product->id }}</th>  --}}
              <th scope="row">{{ $product->name }}</th>
              <th scope="row">{{ $product->description }}</th>
              <th scope="row">{{ $product->price }}</th>
              <td>

              </td>

            </tr>

            @endforeach

        </tbody>
      </table>
</div>
