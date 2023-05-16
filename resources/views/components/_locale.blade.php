<<<<<<< HEAD
<form class="d-inline" action="{{route('setLocale', $lang)}}" method="post">
    @csrf
    <button type="submit" class="btn">
        <img src="{{asset('vendor/blade-flags/language-'.$lang.'.svg')}}" width="32" height="32" >
    </button>
    
    </form>
=======
<form action="{{ route('setLocale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flag/language-'.$lang.'.svg') }}" width="32px" height="32px" alt="">
    </button>
</form>
>>>>>>> 5ceb3742ce5bebf65692e23993a7e0c4ca239276
