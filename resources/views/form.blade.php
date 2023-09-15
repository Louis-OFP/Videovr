<!DOCTYPE html>
<html>
<head>
    <title>Formulaire et BDD</title>
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
</head>
<body>
    <div id=forForm class="modalCreateDown">
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
            <form class="form" method="POST" action="{{ route('infovideo.store') }}">
                @csrf
                <p>♥ Selectionnez un fichier ♥</p>
                <select data-tooltip="Seltion de votre fichier" id="name" name="name" class="sel">
                    <option>Fichiers récemment ajoutés</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo1.mp4</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo2.mp4</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo3.mp4</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo4.mp4</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo5.mp4</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo6.mp4</option>
                    <option>C:\Users\Stagiaire\Desktop\note\Vidéo7.mp4</option>
                </select>
                <input data-tooltip="Titre de la vidéo" id="new_name" name="new_name" placeholder="Entrez un nom" rows="4" cols="50" maxlength="100" class="nom" type="text"/>
                <input data-tooltip="description" id="description" name="description" placeholder="Entrez une description" maxlength="550" class="des" type="text"/>
                <button class="bout" type="button" onclick="openYesno()">Soumettre</button>
                <div id="validationPublish" class="verificationOFF">
                    <div class="modVerif">
                        <div class="yesNo">
                            <p>
                                Publier ce fichier ?
                            </p>
                            <div>
                                <button type="submit" class="yes">oui</button>
                                <button onclick="closeYesno()" class="no">non</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id=forUpdateForm class="modalCreateDown">
        <div class="formContaining">
            <div class="createHeader">
                <p class="titre">
                    Formulaire de modification de fichiers  
                </p>
                <button onclick="closeUpdate(), resetCheckbox()" class="cross">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="M11.782
                 4.032a.575.575 0 1 0-.813-.814L7.5 6.687L4.032 3.218a.575.575 0 0 0-.814.814L6.687 7.5l-3.469 3.468a.575.575 0 0 0 .814.814L7.5 8.313l3.469
                  3.469a.575.575 0 0 0 .813-.814L8.313 7.5l3.469-3.468Z" clip-rule="evenodd"/></svg>            
                </button>
            </div>
            <form class="form" method="POST" action="{{ route('infovideo.update', $infovideo) }}">
                @csrf
                @method('PUT')
                <p>♥ Selectionnez un fichier ♥</p>
                <div class="forUpSel">
                    <div class="cl-toggle-switch">
                        <label class="cl-switch">
                            <input id="toggleCheckbox" type="checkbox">
                            <span></span>
                        </label>
                    </div>
                    <select data-tooltip="Seltion de votre fichier" id="selectStop" name="name" class="sel">
                        <option>Fichiers récemment ajoutés</option>
                        <option>C:\Users\Stagiaire\Desktop\note\Vidéo1.mp4</option>
                        <option>C:\Users\Stagiaire\Desktop\note\Vidéo2.mp4</option>
                        <option>C:\Users\Stagiaire\Desktop\note\Vidéo3.mp4</option>
                        <option>C:\Users\Stagiaire\Desktop\note\Vidéo4.mp4</option>
                        <option>C:\Users\Stagiaire\Desktop\note\Vidéo5.mp4</option>
                        <option>C:\Users\Stagiaire\Desktop\note\Vidéo6.mp4</option>
                        <option>C:\Users\Stagiaire\Desktop\note\Vidéo7.mp4</option>
                    </select>
                </div>
                <input data-tooltip="Titre de la vidéo" id="new_name" name="new_name" placeholder="Entrez un nom" rows="4" cols="50" maxlength="100" class="nom" type="text"/>
                <input data-tooltip="description" id="description" name="description" placeholder="Entrez une description" maxlength="550" class="des" type="text"/>
                <button class="bout" type="button" onclick="openYesorno()">Soumettre</button>
                <div id="validationUpdate" class="verificationOFF">
                    <div class="modVerif">
                        <div class="yesNo">
                            <p>
                                Publier ce fichier ?
                            </p>
                            <div>
                                <button type="submit" class="yes">oui</button>
                                <button onclick="closeYesorno()" class="no">non</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="bddcontain">
        <div class="entete">
            <div>
                <h1>Gestionnaire de Vidéo </h1>
            </div>
            <div>
                <button class="BtnCre" onclick="openCreate()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M11 20H6.5q-2.28
                 0-3.89-1.57Q1 16.85 1 14.58q0-1.95 1.17-3.48q1.18-1.53 3.08-1.95q.63-2.3 2.5-3.72Q9.63 4 12 4q2.93 0 4.96 2.04Q19 8.07 19 11q1.73.2
                  2.86 1.5q1.14 1.28 1.14 3q0 1.88-1.31 3.19T18.5 20H13v-7.15l1.6 1.55L16 13l-4-4l-4 4l1.4 1.4l1.6-1.55Z"/></svg>
                </button>
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
                        <button onclick="openUpdate({{ $infovideo->id }})" class="BtnUp">
                        <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor"
                         d="M12 4V2.21c0-.45-.54-.67-.85-.35l-2.8 2.79c-.2.2-.2.51 0 .71l2.79 2.79c.32.31.86.09.86-.36V6c3.31 0 6 2.69
                          6 6c0 .79-.15 1.56-.44 2.25c-.15.36-.04.77.23 1.04c.51.51 1.37.33 1.64-.34c.37-.91.57-1.91.57-2.95c0-4.42-3.58
                          -8-8-8zm0 14c-3.31 0-6-2.69-6-6c0-.79.15-1.56.44-2.25c.15-.36.04-.77-.23-1.04c-.51-.51-1.37-.33-1.64.34C4.2 9.96
                           4 10.96 4 12c0 4.42 3.58 8 8 8v1.79c0 .45.54.67.85.35l2.79-2.79c.2-.2.2-.51 0-.71l-2.79-2.79a.5.5 0 0 0-.85.36V18z"/></svg>
                        </button>
                        <form class="delete-form" action="{{ route('infovideo.destroy', $infovideo) }}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm ('Supprimer le fichier ?')"  class="Btn">
                                <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path 
                                fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 
                                1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z"/></svg>
                            </button>
                        </form>
                        <button class="BtnSw">
                        <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M4 20q-.825
                         0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h12q.825 0 1.413.588T18 6v4.5l4-4v11l-4-4V18q0 .825-.588 1.413T16 20H4Zm0-2h12V6H4
                         v12Zm0 0V6v12Z"/></svg>        
                        </button>                       
                    </td>
                </tr>
                @endforeach
        </div>
    </div>
    <script src="{{ asset('script.js') }}"></script>
    
</body>
</html>

