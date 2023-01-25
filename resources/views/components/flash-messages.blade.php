@if (session()->has('message'))
    <div class="flash-container">
        <div class="flash-message flash success">{{ session('message') }}</div>
    </div>
@endif
