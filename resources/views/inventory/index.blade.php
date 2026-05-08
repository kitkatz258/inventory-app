<h1>Equipment Inventory</h1>
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
            </tr>
        @endforeach
    </tbody>
</table>