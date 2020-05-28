<div style="text-align: center;">
    <h1>Ajouter un post</h1>
</div>
<form action="{{route('post.store')}}" method="post" class="form-example" style="text-align: center;">
  @csrf
    <div class="form-example">
      <label for="titre">Titre: </label>
      <input type="text" name="titre" id="titre" required>
    </div> <br>
    <div class="form-example">
      <label for="text">Post: </label>
      <textarea name="text" id="text"></textarea>
    </div> <br>
    <div class="form-example">
      <input type="submit" value="Ajouter!">
    </div>
</form>

