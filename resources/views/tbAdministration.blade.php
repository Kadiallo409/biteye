<!doctype html>
<html lang="en">
  <head>
    <title>Tableau de Bord</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row mt-5">
              <div class="col">
                <p class="jumbotron">
                    Connecté en tant que :Mme {{$administrations->nom}} {{$administrations->prenom}}
                    <br>
                    Email : {{$administrations->email}}
                    <br>
                    Fonction: {{$administrations->fonction}}
                </p>
              </div>
          </div>
          <div class="row mt-5">
              <div class="col">
                  <h3 class="text-center">Liste des RECLAMATIONS</h3>
                  <table class="table">
                      <thead>
                          <tr>
                              <th>N°</th>
                              <th>Matiere</th>
                              <th>Semestre</th>
                              <th>Commentaire</th>
                              <th>Date de Creation</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($reclamations as $reclamation)
                          <tr>
                              <td scope="row">{{$reclamation->id}}</td>
                              <td>{{$reclamation->matiere}}</td>
                              <td>{{$reclamation->semestre}}</td>
                              <td>{{$reclamation->commentaire}}</td>
                              <td>{{$reclamation->created_at}}</td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>