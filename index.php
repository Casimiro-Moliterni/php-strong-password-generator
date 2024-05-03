<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore
 di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password.
 Una nostra funzione utilizzerà questo dato 
 per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, 
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index,
 effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, 
lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) 
oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
Buon fine settimana a tutti :faccia_leggermente_sorridente: -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link css  -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="ms_bg_body d-flex align-items-center">
    <div class="container  ms_container p-3 pt-5">
        <h1 class="text-center ms_h1">Strong Password Generator</h1>
        <h2 class="text-white text-center fs-1 mb-2">Genera una password sicura</h2>
        <div class="p-3 mt-3 mb-3 ms_validazione_message rounded-1  fs-4 ">Nessun parametro valido inserito</div>
        <div class="p-3 bg-white rounded-1 h-100">
            <div class="w-75 h-100">
                <form>
                    <div class="d-flex align-items-center">
                        <label for="length_password" class="flex-grow-1">Lunghezza password</label>
                        <input type="text" id="length_password" class="rounded 1 p-2 border border-dark">
                    </div>
                    <div class="d-flex align-items-end">
                        <button class="btn btn-primary ">invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>