<form action="/upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="imagem" id="">
    <button type="submit">salvar</button>
</form>
