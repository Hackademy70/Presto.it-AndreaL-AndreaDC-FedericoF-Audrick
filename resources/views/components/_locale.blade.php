<form action="{{ route('setLocale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/language-'. $lang .'.svg') }}" width="32px" height="32px" alt="">
    </button>
</form>
