<form action="/invite" method="post">
    @csrf
    <label for="email">Email address:</label>
    <input type="email" name="email" id="email" required>
    <button type="submit">Send invitation</button>
</form>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
