<!-- Форма запрошення -->
<form method="POST" action="{{ route('invite.send') }}">
    @csrf
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="invitation_text">Invitation text:</label>
        <textarea id="invitation_text" name="invitation_text" required></textarea>
    </div>

    <button class="btn text-white font-weight-bolder bg-gradient-dark btn-md mt-2 mb-2 invite-btn" type="submit">Invite</button>
    
</form>
