<div style="text-align: center;">
    <h1>Modifier le post</h1>
</div>
<form action="{{route('post.update',$post->id)}}" method="post" class="form-example" style="text-align: center;">
  @csrf
  @method('put')
    <div class="form-example">
      <label for="titre">Titre: </label>
      <input type="text" name="titre" id="titre" value="{{$post->titre}}">
    </div> <br>
    <div class="form-example">
      <label for="text">Post: </label>
      <textarea name="text" id="text">{{$post->text}}</textarea>
    </div> <br>
    <div class="form-example">
      <input type="submit" value="Ajouter!">
    </div>
</form>