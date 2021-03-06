<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projet MigrationModel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div style="text-align: center;">
                            <h1>Tous les posts</h1>
                            <a href="{{route('post.create')}}">
                                <button>Créer un post</button>
                            </a>
                        </div>
                        <div style="">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Texte</th>
                                        <th>Voir plus</th>
                                        <th>Editer</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{$post->titre}}</td>
                                            <td>{{$post->text}}</td>
                                            <td class="d-flex">
                                                <a href="{{route('post.show',$post->id)}}" class="">
                                                    <button>Afficher post</button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('post.edit',$post->id)}}">
                                                    <button>Modifier post</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{route('post.destroy',$post->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button>Effacer post</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
    </body>
</html>
