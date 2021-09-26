<html>
  <head>
    <meta charset="utf-8">    <!-- specifies encoding -->
    <title>Album library</title>
  </head>
  <body>
      <h1>New Album</h1>
      <form action="/create.php" method="post">
          <div>
            <label> Name: </label>
            <input type="text" name="name" id="name"/>
          </div>
          <div>
            <label> Year: </label>
            <input type="number" name="year" id="year"/>
          </div>
          <div>
            <label> Artist: </label>
            <select name="artist" id="artist">
              <option value="matt_elliott">Matt Elliott</option>
              <option value="low_roar">Low Roar</option>
              <option value="mum">Múm</option>
            </select>
          </div>
          <div>
            <input type="radio" id="single" name="type" value="single">
            <label for="single">Single</label>
            <input type="radio" id="ep" name="type" value="ep">
            <label for="ep">EP</label>
            <input type="radio" id="album" name="type" value="album">
            <label for="album">Album</label>
          </div>
          <div>
            <label> Description: </label> <br>
            <textarea  name="description" id="description">
            </textarea>
          </div>
          <div>
            <label> Tracks: </label><br>
            <input type="text" name="track[]"/><br>
            <input type="text" name="track[]"/><br>
            <input type="text" name="track[]"/><br>
            <input type="text" name="track[]"/><br>
            <input type="text" name="track[]"/><br>
            <input type="text" name="track[]"/><br>
            <input type="text" name="track[]"/><br>
            <input type="text" name="track[]"/><br>
            <input type="text" name="track[]"/>
          </div>
          <input type="submit" value="Submit">
      </form>
  </body>
</html>
