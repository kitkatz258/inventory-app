<h1>Add Equipment</h1>
<form action="/" method="POST">
    @csrf
    <div>
        <label>Equipment Name:</label>
        <input type="text" name="name" required>
    </div>
    <br>
    <div>
        <label>Serial Number:</label>
        <input type="text" name="serial_number" required>
    </div>
    <br>
    <button type="submit">Add Equipment</button>
    <button type="button" onclick="window.location.href='/'">Cancel</button>
</form>