<!DOCTYPE html>
<html>
<head>
    <title>Formulaire et BDD</title>
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
</head>
<body>
    <div id=forForm class="modalCreateDown">
        <div id="validationPublish" class="verificationOFF">
            <div class="modVerif">
                <div class="yesNo">
                    <p>
                        Publier ce fichier ?
                    </p>git init                # Initialisez un dépôt Git local si ce n'est pas déjà fait.
git add .               # Ajoutez tous les fichiers de votre projet à l'index.
git commit -m "Initial commit"  # Faites un commit avec un message descriptif.
git branch -M main      # Changez de branche principale si nécessaire (par exemple, de "master" à "main").
git remote add origin https://github.com/votre_nom_utilisateur/votre_depot.git  # Associez le dépôt local au dépôt GitHub.
git push -u origin main # Poussez votre code vers GitHub.

                    <div>
                        <button onclick="closeCreate(); closeYesno()" class="yes">oui</button>
                        <button onclick="closeYesno()" class="no">non</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="formContaining">
            <div class="createHeader">
                <p class="titre">
                    Formulaire de publication de fichiers  
                </p>
                <button onclick="closeCreate()" class="cross">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="M11.782
                 4.032a.575.575 0 1 0-.813-.814L7.5 6.687L4.032 3.218a.575.575 0 0 0-.814.814L6.687 7.5l-3.469 3.468a.575.575 0 0 0 .814.814L7.5 8.313l3.469
                  3.469a.575.575 0 0 0 .813-.814L8.313 7.5l3.469-3.468Z" clip-rule="evenodd"/></svg>            
                </button>
            </div>
            <form class="form">
                <p>Selectionnez un fichier</p>
                <select class="sel">
                    <option>Fichiers récemment ajoutés</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo1</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo2</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo3</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo4</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo5</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo6</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo7</option>
                </select>
                <input placeholder="Entrez un nom" class="nom" type="text"/>
                <input placeholder="Entrez une description" class="des" type="text"/>
                <button class="bout" type="button" onclick="openYesno()">Soumettre</button>
            </form>
        </div>
    </div>
    <div class="bddcontain">
        <div class="entete">
            <div>
                <h1>Gestionnaire de Vidéo </h1>
            </div>
            <div>
                <button onclick="openCreate()">Import New File</button>
            </div>
        </div>
        <div>
            <table class="rwd-table">
                <tr>
                    <th>N°</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th >Weight</th>
                    <th>Date</th>
                    <th class="descp">Description</th>
                    <th>Action</th>
                </tr>
                @foreach ($infosvideos as $infovideo)
                <tr>
                    <td data-th="N°">{{ $infovideo->id }}</td>
                    <td data-th="Name">{{ $infovideo->new_name }}</td>
                    <td data-th="Url">{{ $infovideo->url }}</td>
                    <td data-th="Weight">{{ $infovideo->weight }}</td>
                    <td data-th="Date">{{ $infovideo->date }}</td>
                    <td class="descp" data-th="Description">{{ $infovideo->description }}</td>
                    <td data-th="Action">
                        <button>Update</button>
                        <form class="delete-form" action="{{ route('form.destroy', $infovideo) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>

                        <button>Show Video</button>                       
                    </td>
                </tr>
                @endforeach
        </div>
    </div>
    <script src="{{ asset('script.js') }}"></script>
    
</body>
</html>

