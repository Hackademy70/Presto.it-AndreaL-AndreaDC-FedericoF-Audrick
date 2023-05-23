php artisan migrate:fresh --seed

sistemare drop down categorie 
fare uscire errori form


# pagine e componenti tradotti
- announcement.index -> OK
- loader -> OK
- landimage -> OK
- login -> OK
- register -> OK




## NON CANCELLARE

 - Se dovesse dare problemi con la GD Library extension not avaible on your PHP installation -> decommentare dal file php.ini la riga extension=gd

 <li class="option" style="--i:2;">
                        {{-- <x-_locale class="" lang="es" /> --}}
                        @if ($lang != App::getLocale())
                        <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span></a>
                        @endif
                    </li>
                    <li class="option" style="--i:3;">
                        {{-- <x-_locale class="" lang="en" /> --}}
                        @if ($lang != App::getLocale())
                        <a class="dropdown-item" href="{{ route('lang.switch', 'es') }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span></a>
                        @endif
                    </li>