@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<h1>Equipment Inventory</h1>
<button onclick="window.location.href='/create'">+ Add New Equipment</button>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Serial Number</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equipment as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->serial_number }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <form action="{{ route('destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this equipment?');">Delete</button>
                    </form>
                </td>
                <td>
                    <button onclick="window.location.href='{{ route('edit', $item->id) }}'">Edit</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>