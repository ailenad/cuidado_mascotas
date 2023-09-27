
    <h1>Crear un nuevo artículo</h1>

    <form method="POST" action="/crear_articulos">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
         <label for="profile_id">id </label>
        <input type="number" name="profile_id" id="profile_id" required>

        <label for="content">Descripción:</label>
        <textarea name="content" id="content" required></textarea>

        <!-- agregar imagen -->

        <button type="submit">Publicar</button>
    </form>

