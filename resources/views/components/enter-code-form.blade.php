<div>
    <form action="/verify-code" method="post" class="code-verify-form">
        @csrf
        <input type="text" name="access-code" required class="code-input-field">
        <input type="submit" value="Get Access" class="code-submit-btn">
        
    </form>
        @error('access-code')
            <div class="error-message-form">No Materials available with that code</div>
        @enderror
</div>
