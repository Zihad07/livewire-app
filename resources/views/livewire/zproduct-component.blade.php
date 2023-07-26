<div>
    <div class="row">
        <div class="col-md-3">
            <input type="text" wire:model="searchQuery" name="searchQuery" id="" class="form-control" placeholder="Search...">
        </div>
        <div class="col-md-3">
            <select wire:model="searchCategory" id="" class="form-control">
                <option value="">Category</option>
                @foreach ($category as $item)
                    <option value="{{ $item }}">{{ $item }}</option>

                @endforeach

            </select>
        </div>

        <div wire:loading.delay>
            <div class="alert alert-success col-md-12 mt-1">
                Data Loading...
            </div>

        </div>
    </div>
    <table class="table" wire:loading.class="bg-primary">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Discription</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
            <tr>
              <th scope="row">{{ $product->id }}</th>
              <th scope="row">{{ $product->name }}</th>
              <th scope="row">{{ $product->description }}</th>
              <th scope="row">{{ $product->category }}</th>
              <th scope="row">{{ $product->price }}</th>
              <th scope="row">
                <a onclick="confirm('Are you want to delete ?') || event.stopImmediatePropagation()" wire:click="deleteProduct('{{ $product->id }}')" href="#" class="btn btn-sm btn-danger">Delete</a>
              </th>

              <td>

              </td>

            </tr>

            @endforeach

        </tbody>
      </table>

      {{ $products->links() }}
</div>
