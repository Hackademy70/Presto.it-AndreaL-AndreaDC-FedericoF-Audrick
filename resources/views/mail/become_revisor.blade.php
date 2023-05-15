{{-- ATTENZIONE, NELLA MAIL NON FUNZIONANO I COMPONENTI NE GLI ASSETS --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    <div>
        <h1>Un utente ha chiesto di lavorare con noi</h1>
        <h2>Ecco i suoi dati:</h2>
        <p>Nome : {{ $user->name }}</p>
        <p>Email : {{ $user->email }}</p>
        <p>Se vuoi renderlo revisore clicca qui:</p>
        <a href="{{ route('make.revisor', compact('user')) }}">clicca qui per rendere revisore l'utente</a>
    </div>
</body>
</html> --}}

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Titre de l'email</title>
    <style>
        /* Styles généraux */
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #444444;
            background-color: #FFFFFF;
            
        }

        /* Styles spécifiques à l'email */
        .contain_mail {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
           
        }

        .header_mail {
            background-color: #FFFFFF;
            /* padding: 20px; */
            text-align: center;
        }

        .header_mail img {
            max-width: 100%;
            height: auto;
        }

        .content {
            background-color: #F5F5F5;
            padding: 20px;
            text-align: center;
        }

        .content span{
            color: green;
            font-weight: bold;
        }

        .footer {
            background-color: #FFFFFF;
            padding: 20px;
            text-align: center;
        }

        button a {
            text-decoration: none;
            color: #FFFFFF;
        }

   
    </style>
</head>
<body>
    <div class="contain_mail">
        <!-- En-tête -->
        <div class="header_mail">
            <img src="https://www.pianetasicurezza.it/wp-content/uploads/2022/11/lavoraconnoi-1200x600.jpg" alt="Logo">
        </div>

        <!-- Contenu de l'email -->
        <div class="content">
            {{-- <h1>{{ $user->name }}: <span class="text-danger">lavora con noi</span></h1> --}}
            <p> <span>{{ $user->name }} </span>:  ha chiesto di lavorare con noi </p>
            <p>Email : <span class="text-danger"> {{ $user->email }}</span></p>           
            <button style="background-color:green; color: #FFFFFF; padding: 10px 20px; border: none; border-radius: 5px;"><a href="{{ route('make.revisor', compact('user')) }}">accetta richiesta</a></button>
        </div>

        <!-- Pied de page -->
        <div class="footer">
            <p>questo è un email auto-generata. grazie di non rispondere.</p>
        </div>
    </div>
</body>
</html>