<h1>Edit Equipment</h1>
<form action="{{ route('update', $equipment->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Equipment Name:</label>
        <input type="text" name="name" value="{{ $equipment->name }}" required>
    </div>
    <br>
    <div>
        <label>Serial Number:</label>
        <input type="text" name="serial_number" value="{{ $equipment->serial_number }}" required>
    </div>
    <br>
    <div>
        <label>Status:</label>
        <select name="status" required>
            <option value="Available" {{ $equipment->status == 'Available' ? 'selected' : '' }}>Available</option>
            <option value="In Use" {{ $equipment->status == 'In Use' ? 'selected' : '' }}>In Use</option>
            <option value="Under Maintenance" {{ $equipment->status == 'Under Maintenance' ? 'selected' : '' }}>Under Maintenance</option>
        </select>
    </div>
    <br>
    <button type="submit">Update Equipment</button>
    <button type="button" onclick="window.location.href='/'">Cancel</button>
</form>